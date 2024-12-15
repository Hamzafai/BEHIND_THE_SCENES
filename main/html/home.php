<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/eventbox.css">
    <script src="../js/navbar.js" defer></script>
    <script src="../js/slider.js" defer></script>
    <?php session_start(); ?>
    <?php include '../php/navbar_setup.php'; ?>
    <title>Maelma Hub</title>
</head>
<body>
  <?php include 'navbar.php'; ?>
  <div class="main">
    <section class="first">
        <div class="text">
            <h1 class="align-center">Maelma Hub</h1>
            <p class="align-center">Get to know everything about the technological pole of sidi Abdellah</p>
            <a class="button break center-hor" href="html/events.php">Browse Events</a>
        </div>
        <div class="pic"><img src="img/landing-hero.svg" alt=""></div>
    </section>
    <section class="second" >
      <div class="container" >
          <h1 class="align-center">Recently Added</h1>
      </div>
      <div class="containerslide">
          <button class="prev">❮</button>
          <div class="contents1" >
            <div class="box-list">
                <div class="box-container">
                  <img src="img/events_logo/636.png" alt="logo" class="box-logo">
                  <div class="boxtitle">IGNITE the new amazing event</div>
                  <div class="details">
                    <div class="organizer box"><img src="img/organizer.svg" alt="" class="indice"><span>Ebec club</span></div>
                    <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>ENSIA</span></div>
                    <div class="date box"><img src="img/date.svg" alt="" class="indice"><span>26 Oct 2024</span></div>
                  </div>
                  <a class="event-register" href="">Join Now</a>
                </div>
                <div class="box-container">
                  <img src="img/events_logo/636.png" alt="logo" class="box-logo">
                  <div class="boxtitle">Some other amazing event</div>
                  <div class="details">
                    <div class="organizer box"><img src="img/organizer.svg" alt="" class="indice"><span>Eureka Club</span></div>
                    <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>NHSM</span></div>
                    <div class="date box"><img src="img/date.svg" alt="" class="indice"><span>14 Feb 2024</span></div>
                  </div>
                  <a class="event-register" href="">Join Now</a>
                </div>
                <div class="box-container">
                  <img src="img/events_logo/636.png" alt="logo" class="box-logo">
                  <div class="boxtitle">Visit to Bomar factory</div>
                  <div class="details">
                    <div class="organizer box"><img src="img/organizer.svg" alt="" class="indice"><span>ENSIA Administration</span></div>
                    <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>Bomar enterprise</span></div>
                    <div class="date box"><img src="img/date.svg" alt="" class="indice"><span>12 Oct 2024</span></div>
                  </div>
                  <a class="event-register" href="">Join Now</a>
                </div>
                <div class="box-container">
                  <img src="img/events_logo/636.png" alt="logo" class="box-logo">
                  <div class="boxtitle">Visit to Bomar factory</div>
                  <div class="details">
                    <div class="organizer box"><img src="img/organizer.svg" alt="" class="indice"><span>ENSIA Administration</span></div>
                    <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>Bomar enterprise</span></div>
                    <div class="date box"><img src="img/date.svg" alt="" class="indice"><span>12 Oct 2024</span></div>
                  </div>
                  <a class="event-register" href="">Join Now</a>
                </div>
                <div class="box-container">
                  <img src="img/events_logo/636.png" alt="logo" class="box-logo">
                  <div class="boxtitle">Visit to Bomar factory</div>
                  <div class="details">
                    <div class="organizer box"><img src="img/organizer.svg" alt="" class="indice"><span>ENSIA Administration</span></div>
                    <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>Bomar enterprise</span></div>
                    <div class="date box"><img src="img/date.svg" alt="" class="indice"><span>12 Oct 2024</span></div>
                  </div>
                  <a class="event-register" href="">Join Now</a>
                </div>
                <div class="box-container">
                  <img src="img/events_logo/636.png" alt="logo" class="box-logo">
                  <div class="boxtitle">Visit to Bomar factory</div>
                  <div class="details">
                    <div class="organizer box"><img src="img/organizer.svg" alt="" class="indice"><span>ENSIA Administration</span></div>
                    <div class="location box"><img src="img/location.svg" alt="" class="indice"><span>Bomar enterprise</span></div>
                    <div class="date box"><img src="img/date.svg" alt="" class="indice"><span>12 Oct 2024</span></div>
                  </div>
                  <a class="event-register" href="">Join Now</a>
                </div>    
          </div>
      </div>
      <button class="next">❯</button>
    </div> 
   
  </section>

    <hr>
    <section class="third">
        <div class="container-third">
        <div class="add-event">
            <h1>Join us and add your event now!</h1>
            <p>With this service you are able to add your hackathon, competition or event on the platform.</p>
            <a href="html/Add_Event.php" class="button break">Add your event</a>
        </div>
        <div class="pic pic2"><img src="img/add_competition.svg" alt=""></div>
        </div>
    </section>
    <hr>
    <section class="fourth">
      <div class="container-fourth">
        <h1 class="align-center">Already published on our platform</h1>
        <div class="stat">
          <div class="stat-box">
            <img src="img/stat_icons/training.png" alt="" class="img-stat">
            <h1 class="align-center">N/A</h1>
            <p class="align-center">Events</p>
          </div>
          <div class="stat-box">
            <img src="img/stat_icons/training.png" alt="" class="img-stat">
            <h1 class="align-center">N/A</h1>
            <p class="align-center">Workshops</p>
          </div>
          <div class="stat-box">
            <img src="img/stat_icons/training.png" alt="" class="img-stat">
            <h1 class="align-center">N/A</h1>
            <p class="align-center">Hackathons</p>
          </div>
        </div>
      

      </div>
    </section>
    <hr>
    <section class="fifth">
      <div class="container-fifth">
        <h1 class="align-center">Contact us</h1>
        <form action="html/home.php" method="post">
          <fieldset>
          <input type="text" name="name" placeholder="Name">
          <input type="text" name="email" placeholder="Email">
          </fieldset>
          <textarea placeholder="Write your message here" rows="5" name="message"></textarea>
          <button type="submit"  class="button">Submit</button>
        </form>

        <div id="customAlert" style="display:none;" class="alert-box success">
            <p id="alertMessage"></p>
        </div>

        <?php
          if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            function isEmail($email) { 
                return filter_var($email, FILTER_VALIDATE_EMAIL);
            }  

            if (isEmail($email)) {
                // Command to run the Python script with arguments
                $command = escapeshellcmd("python ../php/send_email.py \"$name\" \"$email\" \"$message\"");
                
                // Execute the command and capture output
                $output = shell_exec($command);
                
                if (strpos($output, "Success") !== false) {
                      echo '<script type="text/javascript">
                      document.getElementById("alertMessage").textContent = "Email sent successfully!";
                      document.getElementById("customAlert").style.display = "block";
                      setTimeout(function() {
                          document.getElementById("customAlert").style.display = "none";
                        }, 3000);
                      </script>';
                  } else {
                      echo '<script type="text/javascript">
                            document.getElementById("alertMessage").textContent = "There was an error sending your message.";
                            document.getElementById("customAlert").classList.add("error");
                            document.getElementById("customAlert").style.display = "block";
                            setTimeout(function() {
                                document.getElementById("customAlert").style.display = "none";
                            }, 3000);
                          </script>';
                }
              } else {
                    echo '<script type="text/javascript">
                            document.getElementById("alertMessage").textContent = "Invalid email address.";
                            document.getElementById("customAlert").classList.add("error");
                            document.getElementById("customAlert").style.display = "block";
                            setTimeout(function() {
                                document.getElementById("customAlert").style.display = "none";
                            }, 3000);
                          </script>';
              }
          }
        ?>

      </div>
    </section>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>