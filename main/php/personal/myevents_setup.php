<?php

session_start();
// THE MYSQLI VERSION
@$My_connection=new mysqli('localhost','root','','maelma_hub',3306);

if($My_connection->connect_error){
    exit;
}

$query="SELECT e.event_name , e.event_id , e.event_start_date, e.event_link , GROUP_CONCAT(sy.speci_name SEPARATOR ', ') AS specilities
        FROM EVENT e
        JOIN SPECIALITY_EVENT se ON se.event_id = e.event_id
        JOIN SPECIALITY sy ON sy.speci_id = se.speci_id 
        WHERE e.event_club = ?
        GROUP BY e.event_club" 
;
$stmt=$My_connection->prepare($query);
$stmt->bind_param('i', $_SESSION['club_id']);
$stmt->execute();
$result = $stmt->get_result();  
$eventsat = [];

while ($row = $result->fetch_assoc()) {
    $eventsat[] = $row;
}



/*  THE PDO VERSION
try {
    $My_connection = new PDO('mysql:host=localhost;dbname=maelma_hub;port=3306', 'root', '');
    $My_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable exception handling
} catch (PDOException $e) {
    // If there is a connection error, print the error message and exit
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Bind the session variable (assuming it's set correctly) to the prepared statement
$stmt->bindParam(1, $_SESSION['club_id'], PDO::PARAM_INT);

// Execute the query
$stmt->execute();

// Fetch the results as an associative array
$eventsat = $stmt->fetchAll(PDO::FETCH_ASSOC);

*/