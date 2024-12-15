<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/floatingforms.css">
    <link rel="stylesheet" href="../../css/drop_down.css">
    <script src="../../js/navbar.js" defer></script>
    <script src="../../js/Form_validation.js" defer></script>
    <script src="../../js/dropdown.js" defer></script> 
    <?php include '../../php/navbar_setup.php'; ?>

    <title>Register</title>
</head>
<body>
    <?php include '../navbar.php'; ?>
    <div class="main">
    <div class="container">
        <h1 class="title">Club Register</h1>
        <p class="title">WELCOME</p>
    <form class="frm2 form" action="php/authentification/clubregister_input.php" method="post">
        <div>
            <div class="box">
                <input type="text" name="name" id="name" placeholder=" " required>
                <label for="name" class="floating-label">Club Name</label>
            </div>
            <div class="box">
                <select id="options" name="options" class="floating-select" required>
                    <option value="" selected></option>
                    <option value="1">ENSIA</option>
                    <option value="2">NHSM</option>
                    <option value="3">ENSSA</option>
                  </select>
                <label for="options" class="floating-label">School</label>
            </div>
            <div class="box">
            <div class="dropdown">
                <input type="text" id="dropdown-input" placeholder="Choose options" readonly>
                <div class="dropdown-list" id="dropdown-list">
                    <label class="dropdown-item">
                    <input type="checkbox" name="club_specialit[]" value="1"> Option 1
                    </label>
                    <label class="dropdown-item">
                    <input type="checkbox" name="club_specialit[]" value="2"> Option 2
                    </label>
                    <label class="dropdown-item">
                    <input type="checkbox" name="club_specialit[]" value="3"> Option 3
                    </label>
                    <label class="dropdown-item">
                    <input type="checkbox" name="club_specialit[]" value="4"> Option 4
                    </label>
                </div>
            </div>
            </div>
            <div class="box">
                <input type="email" name="email" id="email" placeholder=" " required>
                <label for="email" class="floating-label">Club's Email</label>
            </div>
            <div class="box">
                <input type="password" name="password" id="password" placeholder=" " autocomplete="off" required>
                <label for="password" class="floating-label">Password</label>
            </div>
            
        <button type="submit" id="submit-btn" class="submit-btn">Register</button>
        </div>
    </form>

    </div>
    </div>
    <?php include '../footer.php'; ?>
</body>
</html>