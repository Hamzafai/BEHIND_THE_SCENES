<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/info.css">
    <link rel="stylesheet" href="../../css/event.css">
    <script src="../../js/navbar.js" defer></script>
    <script src="../../js/teamsat.js" defer></script>
    <?php include '../../php/personal/myteams_setup.php'; ?>
    <?php include '../../php/navbar_setup.php'; ?>

    <title>My Teams</title>
</head>
<body>
<?php include '../navbar.php'; ?>

    <div class="container">
        <div class="split">
        <div class="left">
        <img src="<?php echo htmlspecialchars($photo_src); ?>" class="pfp" alt="Profile Picture"> 
        <p class="nameprofile"><?php echo htmlspecialchars($user_name); ?></p>
            <p class="email"><?php echo htmlspecialchars($user_email); ?></p>
            <div class="links">
                <a href="html/personal/personalinfo.php">Personal Info</a>
                <a href="html/personal/myteams.php">My Teams</a>
                <a href="html/personal/myclubs.php">My Clubs</a>
            </div>
        </div>
        <div class="right">
        <div class="infosection two">
            <div class="title">My teams</div>
        <div class="subheading">The teams you are a member in: </div>
        <p>(You will be removed from the teams you delete)</p>
        <input type="hidden" id="teamsatData" value="<?php echo $teamsat; ?>">
        <div class="container-teams" >

        </div>
        </div>
        </div></div>
        <?php include '../footer.php'; ?>

</body>
</html>


<!--
              <div class="team">
                <div class="teamname">Kachir Team</div>
                <div class="teamcontainer">
                    <div class="teamsection" style="display: block;">
                        <div class="team-title">Members</div>
                            <div class="members">
                                <div class="member"><div class="name">Youcef Belaib</div><div class="role">Designer</div></div>
                                <div class="member"><div class="name">Hamza Fouatih</div><div class="role">Programmer</div></div>
                                <div class="member"><div class="name">Ziti Mohammed</div><div class="role">Data Analytic</div></div>
                            </div>
                    </div>
                </div>
                <button class="button">Delete Team</button>
            </div>

-->