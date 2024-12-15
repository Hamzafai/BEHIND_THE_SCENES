<?php session_start(); 

if(!isset($_SESSION['user_id'])){
    header("Location: ../authentification/login.php");
}

@$My_Connection = new mysqli('localhost','root','','maelma_hub',3306);
if($My_Connection->connect_error){
    exit;
}

$query= "SELECT u.user_photo,u.user_name,u.user_email,s.school_name, c.club_name,c.club_photo, GROUP_CONCAT(sy.speci_name SEPARATOR ', ') AS specilities 
        FROM CLUB_MEMBER cm 
        JOIN CLUB c ON cm.club_id = c.club_id 
        JOIN USER u ON cm.member_id = u.user_id  
        JOIN SCHOOL s ON s.school_id=c.club_school 
        JOIN SPECIALITY_CLUB sp ON sp.club_id=c.club_id 
        JOIN SPECIALITY sy ON sy.speci_id=sp.speci_id 
        WHERE cm.member_id= ? 
        GROUP BY c.club_id "
;
$stmt=$My_Connection->prepare($query);
$stmt->bind_param('i', $_SESSION['user_id']);
$stmt->execute();
$stmt->bind_result($user_photo, $user_name,$user_email , $school_name, $club_name , $club_photo, $specialities);
$clubsat=[];
while($stmt->fetch()){
    $clubsat[] = implode(':' ,  [
        htmlspecialchars($club_name ,ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($club_photo, ENT_QUOTES , 'UTF-8'),
        htmlspecialchars($school_name, ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($specialities, ENT_QUOTES, 'UTF-8'),
    ]
    );
}
$clubsat= implode(';' , $clubsat);
$photo_src='img/pfp/Uknown_person.jpg';
if(!empty($user_photo)){
    $photo_src= 'data:image/jpeg;base64,' . base64_encode($user_photo);
}
?>