<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/eventbox.css">
    <script src="../js/navbar.js" defer></script>
    <script src="../js/eventbox_entrance.js" defer></script>
    <?php session_start(); ?>
    <?php include '../php/navbar_setup.php'; ?>
    <title>Events</title>
</head>
<body>
  
  <?php include './navbar.php'; ?>
  <div class="main">
    <div class="clubs-section">
        <h1>Browse our latest events!</h1>
        <p class="align-center">You get to join the clubs of our technological pole </p>
      </div>
    <div class="container-events" style="margin-top: 1em;">
        <div class="filter single">
        <div class="input-container">
            <select id="options" class="floating-select" required>
              <option value="" selected></option>
              <option value="option1">ENSIA</option>
              <option value="option2">NHSM</option>
              <option value="option3">ENSSA</option>
            </select>
            <label for="options" class="floating-label">School</label>
        </div>
        <div class="input-container">
            <select id="options" class="floating-select" required>
              <option value="" selected></option>
              <option value="option1">Mobius</option>
              <option value="option2">ETC</option>
              <option value="option3">EBEC</option>
            </select>
            <label for="options" class="floating-label">Club</label>
        </div>
        <div class="input-container">
            <select id="options" class="floating-select" required>
              <option value="" selected></option>
              <option value="option1">Hackathons</option>
              <option value="option2">Workshops</option>
              <option value="option3">Other</option>
            </select>
            <label for="options" class="floating-label">Type of event</label>
        </div>
        </div>
        <div class="contents">
          <div class="box-container">
            <img src="img/events_logo/636.png" alt="logo" class="box-logo">
            <div class="boxtitle">Visit to Bomar factory</div>
            <div class="details">
              <div class="organizer box"><img src="img/organizer.svg" alt="" class="indice"><span>ENSIA Administration</span></div>
              <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>Bomar enterprise</span></div>
              <div class="date box"><img src="img/date.svg" alt="" class="indice"><span>12 Oct 2024</span></div>
            </div>
            <a class="event-register" href="eventoverview.php">Join Now</a>
          </div>
          <div class="box-container">
            <img src="img/clubs_logo/ebec.jpg" alt="logo" class="box-logo">
            <div class="boxtitle">IGNITE</div>
            <div class="details">
              <div class="organizer box"><img src="img/organizer.svg" alt="" class="indice"><span>Ebec club</span></div>
              <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>ENSIA</span></div>
              <div class="date box"><img src="img/date.svg" alt="" class="indice"><span>26 Oct 2024</span></div>
            </div>
            <a class="event-register" href="eventoverview.php">Join Now</a>
          </div>
          <div class="box-container">
            <img src="img/clubs_logo/ebec.jpg" alt="logo" class="box-logo">
            <div class="boxtitle">IGNITE</div>
            <div class="details">
              <div class="organizer box"><img src="img/organizer.svg" alt="" class="indice"><span>Ebec club</span></div>
              <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>ENSIA</span></div>
              <div class="date box"><img src="img/date.svg" alt="" class="indice"><span>26 Oct 2024</span></div>
            </div>
            <a class="event-register" href="eventoverview.php">Join Now</a>
          </div>
          <div class="box-container">
            <img src="img/clubs_logo/ebec.jpg" alt="logo" class="box-logo">
            <div class="boxtitle">IGNITE</div>
            <div class="details">
              <div class="organizer box"><img src="img/organizer.svg" alt="" class="indice"><span>Ebec club</span></div>
              <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>ENSIA</span></div>
              <div class="date box"><img src="img/date.svg" alt="" class="indice"><span>26 Oct 2024</span></div>
            </div>
            <a class="event-register" href="eventoverview.php">Join Now</a>
          </div>
          <div class="box-container">
            <img src="img/clubs_logo/ebec.jpg" alt="logo" class="box-logo">
            <div class="boxtitle">IGNITE</div>
            <div class="details">
              <div class="organizer box"><img src="img/organizer.svg" alt="" class="indice"><span>Ebec club</span></div>
              <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>ENSIA</span></div>
              <div class="date box"><img src="img/date.svg" alt="" class="indice"><span>26 Oct 2024</span></div>
            </div>
            <a class="event-register" href="eventoverview.php">Join Now</a>
          </div>
          <div class="box-container">
            <img src="img/clubs_logo/ebec.jpg" alt="logo" class="box-logo">
            <div class="boxtitle">IGNITE</div>
            <div class="details">
              <div class="organizer box"><img src="img/organizer.svg" alt="" class="indice"><span>Ebec club</span></div>
              <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>ENSIA</span></div>
              <div class="date box"><img src="img/date.svg" alt="" class="indice"><span>26 Oct 2024</span></div>
            </div>
            <a class="event-register" href="html/eventoverview.php">Join Now</a>
          </div>

          
        </div>
    </div>
    </div>
    <?php include './footer.php'; ?>

</body>
<script>
  document.querySelectorAll(".event-register").forEach((btn) => {
    btn.addEventListener("click", () => {
      btn.classList.add("clicked");
      setTimeout(() => btn.classList.remove("clicked"), 300); // Remove after animation
    });
  });
  
</script>
</html>