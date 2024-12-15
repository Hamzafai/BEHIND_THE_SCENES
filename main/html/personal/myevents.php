<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/info.css">
    <link rel="stylesheet" href="../../css/eventbox.css">
    <script src="../../js/navbar.js" defer></script>
    <script src="../../js/eventsat.js" defer></script>
    <script src="../../js/eventbox_entrance.js" defer></script>
    <?php include '../../php/personal/myevents_setup.php'; ?>
    <?php include '../../php/personal/clubinfo_setup.php'; ?>
    <?php include '../../php/navbar_setup.php'; ?>
    <title>My Events</title>
</head>
<body>
    <?php include '../navbar.php'; ?>
    <div class="container">
        <div class="split">
        <div class="left">
        <img src="<?php echo htmlspecialchars($photo_src); ?>" class="pfp" alt="Profile Picture"> 
        <p class="nameprofile"><?php echo htmlspecialchars($club_name); ?></p>
        <p class="email"><?php echo htmlspecialchars($club_email); ?></p>
        <div class="links">
            <a href="html/personal/personalinfo.php">Personal Info</a>
            <a href="html/personal/myevents.php">My Events</a>
            <a href="html/personal/administration_members.php">Administration members</a>
        </div>
    </div>
        <div class="right">
        <div class="infosection three">
            <div class="title">Events</div>
        <div class="subheading">The Events you have annouced so far: </div>
        <a href="html/personal/Add_Event.php">Add New Event</a>
        <input type="hidden" id="eventsat" value='<?php echo json_encode($eventsat, JSON_HEX_APOS | JSON_HEX_QUOT); ?>'>
        <div class="contents">
            <div class="box-container">
                    <img src="img/clubs_logo/etc-logo.webp" alt="logo" class="box-logo">
                    <div class="boxtitle">ENSIA Tech Community</div>
                        <div class="details">
                            <div class="interest box"><img src="img/clubinterest.svg" alt="" class="indice"><span>WebDev department</span></div>
                            <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>ENSIA</span></div>
                        </div>
                    <a class="event-register" href="">See details</a>
                </div>
            </div>
    
        </div>
        </div>
        </div></div>
        <div id="customAlert" style="display:none;" class="alert-box success">
            <p id="alertMessage"></p>
        </div>
    <?php include '../footer.php'; ?>
</body>
</html>

        <!-- <input type="hidden" id="clubsatData" value="<?php //echo $clubsat; ?>"> -->

<!--
              <div class="box-container">
                     <img src="img/clubs_logo/etc-logo.webp" alt="logo" class="box-logo">
                     <div class="boxtitle">ENSIA Tech Community</div>
                         <div class="details">
                             <div class="interest box"><img src="img/clubinterest.svg" alt="" class="indice"><span>WebDev department</span></div>
                             <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>ENSIA</span></div>
                         </div>
                     <a class="event-register" href="">See details</a>
                 </div>
             </div>
-->