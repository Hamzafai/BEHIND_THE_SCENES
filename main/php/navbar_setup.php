<?php

$login = '<a href="html/authentification/login.php" class="navbar-login">Log In</a>';
$photo_src = 'img/pfp/Uknown_person.jpg';
$to_see = 'boo';

try {
    $My_Connection = new PDO('mysql:host=localhost;dbname=maelma_hub;port=3306', 'root', '');
    $My_Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if (isset($_SESSION['user_id'])) {

    $query = "SELECT user_photo FROM USER WHERE user_id = :user_id";
    $stmt = $My_Connection->prepare($query);
    $stmt->bindParam(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
    $stmt->execute();
    
    $user_photo = $stmt->fetchColumn();

    if (!empty($user_photo)) {
        $photo_src = 'data:image/jpeg;base64,' . base64_encode($user_photo);
    }
    $login = '<img onclick="showProfilePopup()" src="' . htmlspecialchars($photo_src) . '" alt="Profile Picture" height="50px" width="50px" style="border-radius: 50%;">';
    $to_see = true;

} else if (isset($_SESSION['club_id'])) {

    $query = "SELECT club_photo, club_name FROM CLUB WHERE club_id = :club_id";
    $stmt = $My_Connection->prepare($query);
    $stmt->bindParam(':club_id', $_SESSION['club_id'], PDO::PARAM_INT);
    $stmt->execute();
    
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $club_photo = $result['club_photo'] ;
    $club_name = $result['club_name'] ;

    if (!empty($club_photo)) {
        $photo_src = 'data:image/jpeg;base64,' . base64_encode($club_photo);
    }
    $login = '<img onclick="showProfilePopup()" src="' . htmlspecialchars($photo_src) . '" alt="Profile Picture" height="50px" width="50px" style="border-radius: 50%;">';
    $to_see = false;
}
?>
