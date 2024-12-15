<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/eventbox.css">
    <script src="../js/navbar.js" defer></script>
    <script src="../js/eventbox_entrance.js" defer></script>
    <script src="../js/clubs.js" defer></script>
    <?php include '../php/clubs_setup.php'; ?>
    <?php include '../php/navbar_setup.php'; ?>
    <title>Clubs</title>
</head>

<body>
    <?php include './navbar.php'; ?>
    <div class="main">
    <div class="clubs-section">
      <h1>Get to join our clubs</h1>
      <p class="align-center">You get to join the clubs of our technological pole </p>
    </div>
    <div class="container-events">
        <div class="filter single">
         <div class="input-container single">
         <form action="clubs.php" method="get">
          <select id="options" name="options" class="floating-select" required>
              <option value="" selected></option>
              <option  value="1">ENSIA</option>
              <option  value="2">NHSM</option>
              <option value="3">ENSSA</option>
            </select>
            <label for="options" class="floating-label">School</label>
            <button type="submit"><div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4859a8" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg></div></button>
          </form>
          </div>
        </div>
        <div class="contents">
          <div class="box-container">
            <img src="img/clubs_logo/etc-logo.webp" alt="logo" class="box-logo">
            <div class="boxtitle">ENSIA Tech Community</div>
            <div class="details">
              <div class="interest box"><img src="img/clubinterest.svg" alt="" class="indice"><span>Web/Mob dev</span></div>
              <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>ENSIA</span></div>
            </div>
            <a class="event-register" href="">Join Now</a>
          </div>

        </div>
    </div>
    </div>

    <input type="hidden" id="clubss" value='<?php echo json_encode($clubss, JSON_HEX_APOS | JSON_HEX_QUOT); ?>'>
    
    <?php include './footer.php'; ?>
</body>
</html>