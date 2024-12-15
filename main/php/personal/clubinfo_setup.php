<?php  
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Start the session only if none is active
}

if (!isset($_SESSION['club_id'])) {
    error_log('Not logged in, redirecting to login page');
    header("Location: ../authentification/login.php");
    exit;
}

@$My_Connection = new mysqli('localhost', 'root', '', 'maelma_hub', 3306);
 if(mysqli_connect_errno()){
    echo 'Error: Could not connect to database. Please try again later.';
    exit;
}
    
    $query = "SELECT u.club_name, u.club_photo, u.club_email, u.club_github, u.club_phone, u.start_date, s.school_name , GROUP_CONCAT(sp.speci_name SEPARATOR ', ') AS specialities 
    FROM CLUB u 
    JOIN  SCHOOL s ON u.club_school = s.school_id 
    JOIN speciality_club su ON u.club_id=su.club_id 
    JOIN SPECIALITY sp ON sp.speci_id = su.speci_id 
    WHERE u.club_id = ?
    GROUP BY u.club_id";

    $stmt = $My_Connection->prepare($query);
    $stmt->bind_param('i', $_SESSION['club_id']);
    $stmt->execute();
    $stmt->bind_result($club_name , $club_photo, $club_email, $club_github, $club_phone, $start_date, $school_name, $user_specialties);
    $stmt->fetch();
    
    $photo_src='img/pfp/Uknown_person.jpg';
    if (!empty($club_photo)) {
        $photo_src = 'data:image/jpeg;base64,' . base64_encode($club_photo);
    }
?>