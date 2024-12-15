<?php  
session_start();    //to resume


// Detailed session check
if (!isset($_SESSION['user_id'])) {
    error_log('Not logged in, redirecting to login page');
    header("Location: ../authentification/login.php");
    exit;
}


// Database connection for additional info
@$My_Connection = new mysqli('localhost', 'root', '', 'maelma_hub', 3306);
if(mysqli_connect_errno()){
    echo 'Error: Could not connect to database. Please try again later.';
    exit;
}

$query = "SELECT u.user_name, u.user_fullname, u.user_photo, u.user_email, u.user_github, u.user_phone, s.school_name , GROUP_CONCAT(sp.speci_name SEPARATOR ', ') AS specialities FROM USER u JOIN  SCHOOL s ON u.user_school = s.school_id JOIN SPECIALTY_USER su ON u.user_id=su.user_id JOIN SPECIALITY sp ON sp.speci_id = su.speci_id WHERE u.user_id = ? GROUP BY u.user_id";
$stmt = $My_Connection->prepare($query);
$stmt->bind_param('i', $_SESSION['user_id']);
$stmt->execute();
$stmt->bind_result($user_name ,$user_fullname, $user_photo, $user_email, $user_github, $user_phone, $user_school, $user_specialties);
$stmt->fetch();

$photo_src='img/pfp/Uknown_person.jpg';
if (!empty($user_photo)) {
    $photo_src = 'data:image/jpeg;base64,' . base64_encode($user_photo);
}

?>