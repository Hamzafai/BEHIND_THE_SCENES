<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/info.css">
    <script src="../../js/navbar.js" defer></script>
    <?php include '../../php/personal/personalinfo_setup.php'; ?>
    <?php include '../../php/navbar_setup.php'; ?>
    <title>Document</title>
</head>
<body>
    <?php include '../navbar.php'; ?>
    <div class="container">
    <div class="split">
    <div class="left">
    <img src="<?php echo htmlspecialchars($photo_src); ?>" class="pfp" alt="Profile Picture">
    <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EF0107" class="bi bi-pen" viewBox="0 0 16 16"><path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/></svg></div> 
        <p class="nameprofile"><?php echo htmlspecialchars($user_name); ?></p>
        <p class="email"><?php echo htmlspecialchars($user_email); ?></p>
        <div class="links">
            <a href="html/personal/personalinfo.php">Personal Info</a>
            <a href="html/personal/myteams.php">My Teams</a>
            <a href="html/personal/myclubs.php">Clubs</a>
        </div>
    </div>
    <div class="right">
    <div class="infosection one">
        <div class="title">Personal Informations</div>
        <div class="subheading">Main Informations</div>
        <div class="fields">
            <div class="box">
                <input  value="<?php echo htmlspecialchars($user_name); ?>" readonly>
                <label >username</label>
            </div>
            <div class="box">
                <input value="<?php echo htmlspecialchars($user_fullname); ?>" readonly>
                <label >Full Name</label>
            </div>
            <div class="box">
                <input value="<?php echo htmlspecialchars($user_phone) ?>" readonly>
                <label >Phone Number</label>
            </div>
            <div class="box">
                <input value="<?php echo htmlspecialchars($user_school); ?>" readonly>
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
            <input value="<?php echo htmlspecialchars($user_github ?? ''); ?>" readonly>
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

