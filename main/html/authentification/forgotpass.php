<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/floatingforms.css">
    <script src="../../js/navbar.js" defer></script>
    <script src="../../js/Form_validation.js" defer></script>
    <?php include '../../php/navbar_setup.php'; ?>

    <title>Document</title>
</head>
<body style="display: flex; flex-direction: column; min-height: 100vh;">

  <?php include '../navbar.php'; ?>
    <div class="main">
    <div class="container">
        <h1 class="title">Recover Password</h1>
        <p class="title">Get back access to your account</p>
        <div class="form">
            <div class="box">
                <input type="email" name="email" id="email" placeholder=" ">
                <label for="email" class="floating-label">Email</label>
            </div>
        </div>
        <div class="links">
            <a href="html/authentification/login.php">Go Back</a>
            <button class="button">Proceed</button>
        </div>
        <div class="otp">
            <p class="title">Enter the code sent on your email: </p>
            <div class="otpcode">
                <input type="text" maxlength="1">
                <input type="text" maxlength="1">
                <input type="text" maxlength="1">
                <input type="text" maxlength="1">
            </div>
        </div>
    </div>
    </div>
    <?php include '../footer.php'; ?>

</body>
</html>