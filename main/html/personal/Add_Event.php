<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Hamza Faiz Ahmed Fouatih & Youcef Belaib">
        <meta name="description" content="Add an Event in a Club">
        <link rel="stylesheet" href="../../css/drop_down.css">
        <link rel="stylesheet" href="../../css/Add_Event.css" type="text/css">
        <script src="../../js/navbar.js" defer></script>
        <script src="../../js/dropdown.js" defer></script> 
        <script src="../../js/Form_validation.js" defer></script>
        <?php session_start(); ?>
        <?php include '../../php/navbar_setup.php'; ?>

        <title>Add an Event</title>

    </head>
    <body>

      <?php include '../navbar.php'; ?>

        <div class="form-container">
            <h1>Add your Event</h1>
        <form class="frm1" action="php/personal/Add_Event_input.php" method="post">
                
            <div class="form-group">
                <div>
                    <label for="implementing_entity">Implementing Entity</label>
                    <input type="text" name="implementing_entity" value="<?php echo htmlspecialchars($club_name)?>" id="implementing_entity" readonly>
                </div>
                <div>
                    <label for="event_name">Event Name</label>
                    <input type="text" name="event_name" id="event_name" required>
                </div>
           
            </div>
            <div class="form-group">
                <div>
                    <label for="event_date">Event Date</label>
                    <input type="date" name="event_date" id="event_date" required>
                    <script>
                        document.getElementById('event_date').valueAsDate = new Date();
                      </script>
                </div>
                <div>
                    <label for="event_end">Event End</label>
                    <input type="date" name="event_end" id="event_end" required>
                    <script>
                        document.getElementById('event_end').valueAsDate = new Date();
                      </script>
                </div>
            </div>
            <div class="form-group">
                
                <div>
                    <label for="event_location">Event Location</label>
                    <input type="text" name="event_location" id="event_location" required>
                </div>
                <div class="dropdown">
                <label for="">speciality</label>
                <input type="text" id="dropdown-input" placeholder="" readonly>
                <div class="dropdown-list" id="dropdown-list">
                    <label class="dropdown-item">
                    <input type="checkbox" name="event_specialit[]" value="1"> Option 1
                    </label>
                    <label class="dropdown-item">
                    <input type="checkbox" name="event_specialit[]" value="2"> Option 2
                    </label>
                    <label class="dropdown-item">
                    <input type="checkbox" name="event_specialit[]" value="3"> Option 3
                    </label>
                    <label class="dropdown-item">
                    <input type="checkbox" name="event_specialit[]" value="4"> Option 4
                    </label>
             
            </div>
                </div>
            </div>

            <div class="form-group">

                <div>
                    <label for="Participants">Participants</label>
                    <!--<input type="s" name="Prize" id="Prize" class="prize-input" required>-->
                    <select name="Participants" id="Participants" required>
                        <option value="" selected></option>
                        <option value="1">Only the club's members</option>
                        <option value="2">Only the school's students</option>
                        <option value="3">All students</option>
                    </select>
                </div>
                <div>
                    <label for="event_link">Event Link</label>
                    <input type="url" name="event_link" id="event_link" pattern="[A-Za-z]+" required>
                </div>

               
            </div> 
            <div class="form-group">

<div>
    <label for="max_people">Max number of people</label>
    <input type="number" name="max_people" min="2" id="max_people" required>
</div>
<div>
    <label for="team_rang">Max number of people</label>
    <input type="number" name="team_rang"  id="team_rang"  required>
</div>

</div> 
<div class="form-group">

<div>
    <label for="Prize">Prize</label>
    <input type="text" name="Prize" id="Prize" class="prize-input" required>
</div>
<div style="visibility: hidden;">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="" readonly>
        </div>
</div> 

            <button type="submit" id="submit-btn" class="submit-btn">Save</button>
        </form>
        
        </div>       
         <div id="customAlert" style="display:none;" class="alert-box success">
            <p id="alertMessage"></p>
        </div>


        <?php include '../footer.php'; ?>

    </body>
</html>

