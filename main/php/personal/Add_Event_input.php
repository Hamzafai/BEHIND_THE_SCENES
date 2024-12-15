<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Start the session only if none is active
}

@$My_connection = new mysqli('localhost','root', '','maelma_hub',3306);
if($My_connection->connect_error){
    echo 'Error: Could not connect to database. Please try again later.';
    exit;
}

$event_name=$_POST['event_name'];
$event_link=$_POST['event_link'];
$event_start_date=$_POST['event_date'];
$event_end_date=$_POST['event_end'];
$event_location=$_POST['event_location'];
$event_price=$_POST['Prize'];
$event_max_num=$_POST['max_people'];
$event_participant=(int) $_POST['Participants'];
$event_team_rang=$_POST['team_rang'];
$event_specialit = array_map('intval', $_POST['event_specialit']); 

$query = "SELECT * FROM EVENT WHERE event_name = ? AND event_start_date = ? AND event_end_date = ?";
$stmt=$My_connection->prepare($query);
$stmt->bind_param('sss', $event_name,$event_start_date,$event_end_date);
$stmt->execute();
$stmt->store_result();

if($stmt->num_rows == 0){
    @$My_connection = new mysqli('localhost','root', '','maelma_hub',3306);
    $query=" INSERT INTO `EVENT` (`event_name`,`event_link`,`event_start_date`,`event_end_date`,`event_location`,`event_price`,`event_max_num`,`event_participant`,`event_club`,`rang_team`) VALUES (?,?,?,?,?,?,?,?,?,?)";
    $stmt=$My_connection->prepare($query);
    $stmt->bind_param('sssssdiii' , $event_name,  $event_link, $event_start_date, $event_end_date, $event_location, $event_price, $event_max_num, $event_participant, $_SESSION['club_id'] , $event_team_rang);
    $stmt->execute();
    $event_id = $My_connection->insert_id;          // Retrieve the last inserted ID ; the insert_id property of the mysqli object after executing the statement

    @$My_connection = new mysqli('localhost','root', '','maelma_hub',3306);
    $query="INSERT INTO `SPECIALITY_EVENT` (`speci_id`,`event_id`) VALUES (?,?)";
    $stmt=$My_connection->prepare($query);
    foreach ($event_specialit as $speci_id) {
        $stmt->bind_param("ii", $speci_id, $event_id);
        $stmt->execute();
    }
    header("Location: ../../html/personal/myevents.php");

} else {
    header("Location: ../../html/personal/Add_Event.php");

}

