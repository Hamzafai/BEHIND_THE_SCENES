<?php 

@$My_Connection = new mysqli('localhost', 'root', '', 'maelma_hub', 3306); 

if (mysqli_connect_errno()) { 
    echo 'Error: Could not connect to database. Please try again later.'; 
    exit; 
}

session_start();                        


$club_name=$_POST['name'];
$club_school = (int) $_POST['options'];
$club_email=$_POST['email'];
$club_password=$_POST['password'];
$club_specialit = array_map('intval', $_POST['club_specialit']); // Convert values to integers

$query= "SELECT club_name FROM CLUB WHERE CLUB_EMAIL = ?";
$stmt= $My_Connection->prepare($query);
$stmt->bind_param('s' , $_POST['email']);
$stmt->execute();
$stmt->store_result();


if ($stmt->num_rows == 0) {

    @$My_Connection = new mysqli('localhost', 'root', '', 'maelma_hub', 3306); 
    $query = "INSERT INTO `CLUB` ( `club_name`, `club_school`, `club_email`, `club_password`) VALUES (?, ?, ?, ?)"; 
    $stmt = $My_Connection->prepare($query); 
    $stmt->bind_param('sssi', $club_name,  $club_school , $club_email, $club_password); 
    $stmt->execute();
    $stmt->store_result();

    @$My_Connection = new mysqli('localhost', 'root', '', 'maelma_hub', 3306); 
    $query = "SELECT club_id FROM CLUB WHERE club_email = ? ";
    $stmt=$My_Connection->prepare($query);
    $stmt->bind_param('s' , $club_email);
    $stmt->execute();
    $stmt->bind_result($club_id);
    $stmt->fetch();

    $_SESSION['club_id'] = $club_id;

    @$My_Connection = new mysqli('localhost', 'root', '', 'maelma_hub', 3306); 
    if (isset($_POST['club_specialit'])) {

        $stmt = $My_Connection->prepare("INSERT INTO SPECIALITY_CLUB (club_id, speci_id) VALUES (?, ?)");

        foreach ($club_specialit as $speci_id) {
            $stmt->bind_param("ii", $_SESSION['club_id'], $speci_id);
            $stmt->execute();
        }

    }
    header("Location: ../../html/authentification/login.php");
} else {
    $_SESSION['error'] = "Invalid email or password";
    header("Location: ../../html/authentification/clubregister.php");
    exit;
}
?>