<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/info.css">
    <link rel="stylesheet" href="../../css/eventbox.css">
    <script src="../../js/navbar.js" defer></script>
    <script src="../../js/clubsat.js" defer></script>
    <script src="../../js/eventbox_entrance.js" defer></script>
    <?php include '../../php/personal/myclubs_setup.php'; ?>
    <?php include '../../php/navbar_setup.php'; ?>

    <title>Profil</title>
</head>
<body>
    <?php include '../navbar.php'; ?>
    <div class="container">
        <div class="split">
        <div class="left">
            <div class="pfp"><img src="<?php echo $photo_src ;?>" alt=""></div>
            <p class="nameprofile"><?php echo htmlspecialchars($user_name); ?></p>
            <p class="email"><?php echo $user_email; ?></p>
            <div class="links">
                <a href="html/personal/personalinfo.php">Personal Info</a>
                <a href="html/personal/myteams.php">My Teams</a>
                <a href="html/personal/myclubs.php">Clubs</a>
            </div>
        </div>
        <div class="right">
        <div class="infosection three">
            <div class="title">Clubs</div>
        <div class="subheading">The Clubs you have joined so far: </div>
        <input type="hidden" id="clubsatData" value="<?php echo $clubsat; ?>">
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
        <?php include '../footer.php'; ?>
</body>
</html>



<!--                 
                
                <div class="box-container">
                    <img src="img/clubs_logo/1676733021232.jpg" alt="logo" class="box-logo">
                    <div class="boxtitle">Skill And Tell</div>
                    <div class="details">
                        <div class="interest box"><img src="img/clubinterest.svg" alt="" class="indice"><span>Design department</span></div>
                        <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>NHSM</span></div>
                    </div>
                    <a class="event-register" href="">See details</a>
                </div>
                <div class="box-container">
                    <img src="img/clubs_logo/ebec.jpg" alt="logo" class="box-logo">
                    <div class="boxtitle">ENSIA Business Entrepreneurship Club</div>
                    <div class="details">
                        <div class="interest box"><img src="img/clubinterest.svg" alt="" class="indice"><span>Event department</span></div>
                        <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>ENSIA</span></div>
                    </div>
                    <a class="event-register" href="">See details</a>
                </div>
                <div class="box-container">
                    <img src="img/clubs_logo/mobius.jpg" alt="logo" class="box-logo">
                    <div class="boxtitle">MÖBIUS Club</div>
                    <div class="details">
                        <div class="interest box"><img src="img/clubinterest.svg" alt="" class="indice"><span>Multimidia department</span></div>
                        <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>NHSM</span></div>
                    </div>
                    <a class="event-register" href="">See details</a>
                </div>
-->