<?php 
session_start();

if (isset($_GET['event_id'])) {
    $event_id = intval($_GET['event_id']); // Ensure it's an integer and retrive the event_id

    @$My_connection= new mysqli('localhost','root','','maelma_hub',3306);
    if($My_connection->connect_error){
        error_log('error in connecting to the server');
        header("Location: home.php");
        exit;
    }

    $query="SELECT c.club_name , e.event_name, e.event_start_date, e.event_end_date, e.event_location , e.event_link ,e.event_max_num , e.event_price , p.partic_type , e.rang_team , GROUP_CONCAT(s.speci_name SEPARATOR ', ') AS specialities 
            FROM EVENT e 
            JOIN CLUB c ON c.club_id = e.event_club 
            JOIN PARTICIPANT p ON e.event_participant = p.partic_id 
            JOIN SPECIALITY_EVENT se ON se.event_id = e.event_id 
            JOIN speciality s ON s.speci_id = se.speci_id 
            WHERE e.event_id = ? 
            GROUP BY e.event_id;"
    ;
    $stmt=$My_connection->prepare($query);
    $stmt->bind_param('i' , $event_id);
    $stmt->execute();
    $stmt->bind_result($club_name , $event_name , $event_start_date , $event_end_date , $event_location , $event_link , $event_max_num ,$event_price , $event_participant, $rang_team ,$specialities );
    $stmt->fetch();
    
    @$My_connection= new mysqli('localhost','root','','maelma_hub',3306);
    $query="SELECT t.team_name  , GROUP_CONCAT(u.user_name SEPARATOR ', ') AS members, GROUP_CONCAT(r.role_name SEPARATOR ', ') AS roles, GROUP_CONCAT(s.speci_name SEPARATOR ', ') AS specialities
            FROM TEAM_MEMBER tm
            JOIN TEAM t ON t.team_id = tm.team_id
            JOIN USER u ON u.user_id = tm.member_id
            JOIN SPECIALITY s ON s.speci_id = tm.team_member_speciality
            JOIN ROLE r ON r.role_id = tm.team_member_role
            WHERE t.team_event= ?
            GROUP BY tm.team_id"
    ;
    $stmt=$My_connection->prepare($query);
    $stmt->bind_param('i', $event_id);
    $stmt->execute();
    $result = $stmt->get_result();  
    $teamsat_event = [];

    while ($row = $result->fetch_assoc()) {
        $teamsat_event[] = $row;
    }

} 
?>