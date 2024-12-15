<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/info.css">
    <script src="../../js/navbar.js" defer></script>
    <script src="../../js/eventsat.js" defer></script>
    <?php include '../../php/personal/clubinfo_setup.php'; ?>
    <?php include '../../php/navbar_setup.php'; ?>
    <title>Document</title>
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
    <div class="infosection one">
        <div class="title">Personal Informations</div>
        <div class="subheading">Main Informations</div>
        <div class="fields">
            <div class="box">
                <input  value="<?php echo htmlspecialchars($club_name); ?>" readonly>
                <label >username</label>
            </div>
            <div class="box">
                <input  value="<?php echo htmlspecialchars($start_date); ?>" readonly>
                <label >Start In</label>
            </div>
            <div class="box">
                <input value="<?php echo htmlspecialchars($club_phone) ?>" readonly>
                <label >Phone Number</label>
            </div>
            <div class="box">
                <input value="<?php echo htmlspecialchars($school_name); ?>" readonly>
                <label >School</label>
            </div>
        </div>
        <div class="subheading">Additional Informations</div>
        <div class="fields">

        <div class="box">
            <input value="<?php echo htmlspecialchars($user_specialties); ?>" readonly>
            <label for="specialty">Specialty</label>
        </div> 
            
        <div class="box">
            <input value="<?php echo htmlspecialchars($club_github ?? ''); ?>" readonly>
            <label >Github Profile</label>
        </div>

            <!--        
                <div class="box">
                    <label for="bio">Tell us more about yourself: </label>
                    <textarea name="bio" id="bio"></textarea>
                </div>
            -->
        </div>
        <button class="button">Save</button>
    </div>
    </div>
    </div></div>
    <?php include '../footer.php'; ?>

</body>
</html>

