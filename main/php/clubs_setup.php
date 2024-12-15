<?php

session_start();

@$My_Connection=new mysqli('localhost', 'root', '', 'maelma_hub',3306);

if ($My_Connection->connect_error) {
    error_log('Error in connecting to the server');
    header("Location: home.php");
    exit;
}

// Check if a school is selected
$school_id = isset($_GET['options']) ? (int)$_GET['options'] : null;

$query = "SELECT c.club_name, c.club_photo, c.club_school, s.school_name, GROUP_CONCAT(sp.speci_name SEPARATOR ', ') AS specialities
          FROM CLUB c
          JOIN SCHOOL s ON s.school_id = c.club_school
          JOIN SPECIALITY_CLUB sc ON sc.club_id = c.club_id
          JOIN SPECIALITY sp ON sp.speci_id = sc.speci_id";

// If a school is selected, filter by school_id
if ($school_id) {
    $query .= " WHERE c.club_school = ?";
}

$query .= " GROUP BY c.club_id";

$stmt = $My_Connection->prepare($query);

if ($school_id) {
    $stmt->bind_param("i", $school_id);
}

$stmt->execute();
$result = $stmt->get_result();
$clubss = [];

    while ($row = $result->fetch_assoc()) {
        $clubss[] = $row;
    }


?>
