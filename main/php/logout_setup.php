<?php 
session_start();
    if(isset($_SESSION['user_id'])){

        unset($_SESSION['user_id']);

        session_destroy();       // Destroy the session for added security

        header("Location: ../html/home.php");
        
    }
    
    if(isset($_SESSION['club_id'])){

        unset($_SESSION['club_id']);

        session_destroy();       
        header("Location: ../html/home.php");
        
    }
?>