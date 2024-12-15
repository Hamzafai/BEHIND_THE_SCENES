<?php 

@$My_Connection = new mysqli('localhost', 'root', '', 'maelma_hub', 3306); 

if($My_Connection->connect_error){
    echo 'Error: Could not connect to database. Please try again later.'; 
    exit; 
}

$user_name=$_POST['name'];
$user_fullname=$_POST['fullname'];
$user_school=(int) $_POST['options'];
$user_phone=$_POST['phone'];
$user_email=$_POST['email'];
$user_password=$_POST['password'];


// Check if the name already exists
$email_check_query = "SELECT user_name FROM USER WHERE user_name = ?";
$stmt = $My_Connection->prepare($email_check_query);
$stmt->bind_param('s', $user_name);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "<p>Try anothor name</p>";
    exit;  
}


// Check if the email already exists
$email_check_query = "SELECT user_email FROM USER WHERE user_email = ?";
$stmt = $My_Connection->prepare($email_check_query);
$stmt->bind_param('s', $user_email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "<p>This email is already registered!</p>";
    header("Location: ../../html/home.php");
    exit;  
}


$query= "INSERT INTO `USER` ( `user_name`,  `user_fullname` , `user_school`, `user_email`, `user_password` , `user_phone`) VALUES (?, ?, ?, ?, ?, ?)";
$stmt=$My_Connection->prepare($query);
$stmt->bind_param('ssissi', $user_name, $user_fullname, $user_school, $user_email, $user_password, $user_phone);
$stmt->execute();
header("Location: ../../html/authentification/login.php");

?>