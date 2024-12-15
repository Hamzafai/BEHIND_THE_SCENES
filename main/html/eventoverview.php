
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/BEHIND_THE_SCENES/main/css/event.css">
    <link rel="stylesheet" href="http://localhost/BEHIND_THE_SCENES/main/css/Club_Card.css">
    <script src="http://localhost/BEHIND_THE_SCENES/main/js/navbar.js" defer></script>
    <script src="http://localhost/BEHIND_THE_SCENES/main/js/teamsat_event.js" defer></script>
    <?php include '../php/eventoverview_setup.php' ?>
    <?php include '../php/navbar_setup.php' ?>
    <title>Event View</title>
</head>
<body>

    <?php include './navbar.php'; ?>
    
    <div class="main">
        <div class="card" style="margin-top: 10em;">
            <div class="block">
                <div class="left">
                    <img src="<?php echo htmlspecialchars($photo_src); ?>" alt="Club's name" width="100%" height="100%">
                </div>
                <div class="content">
                    <h2><?php echo htmlspecialchars($event_name); ?></h2>
                    <p>Make sure to fill out your profile information before creating a new team or requesting to join a team.
                        Who are interested : <?php echo htmlspecialchars($event_participant); ?> .
                    </p>
                </div>
            </div>
            <hr>
            <div class="icons">
                <button class="join-btn" onclick="window.location.href='<?php echo htmlspecialchars($event_link); ?>'">Join us</button>
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16"><path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/><path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/></svg>
                    <span class="icon-text"><?php echo htmlspecialchars($club_name) ?></span>
                </div>
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cpu-fill" viewBox="0 0 16 16"><path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"/><path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5"/></svg>
                    <span class="icon-text"><?php echo htmlspecialchars($specialities) ?></span>
                </div>
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"  viewBox="0 0 23 30"><g id="location" transform="translate(586.386 -77.095)" style="isolation: isolate"><path id="Path_432" data-name="Path 432" d="M-576.013,77.095h2.153a10.2,10.2,0,0,0,1.151.19A11.4,11.4,0,0,1-563.6,90.713a19.742,19.742,0,0,1-2.276,5.953,41.907,41.907,0,0,1-8.2,10.067,2.784,2.784,0,0,1-.554.361h-.538a4.2,4.2,0,0,1-.665-.522,45.506,45.506,0,0,1-5.932-6.638,25.848,25.848,0,0,1-3.951-7.507,11.658,11.658,0,0,1-.288-6.739,11.251,11.251,0,0,1,9.176-8.432A2.511,2.511,0,0,0-576.013,77.095Zm1.125,17.492a6.313,6.313,0,0,0,6.381-6.239,6.308,6.308,0,0,0-6.344-6.245,6.314,6.314,0,0,0-6.4,6.223A6.312,6.312,0,0,0-574.887,94.587Z" transform="translate(0 0)" fill="#4859a8"/></g></svg>
                  <span class="icon-text"><?php echo htmlspecialchars($event_location)?></span>
                </div>

                <div class="icon">
                   <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="16" height="16" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs"><g width="100%" height="100%" transform="matrix(1,0,0,1,0,0)"><path d="m0,19c0,2.757,2.243,5,5,5h14c2.757,0,5-2.243,5-5v-9H0v9Zm3-4c0-1.103.897-2,2-2h2c1.103,0,2,.897,2,2v2c0,1.103-.897,2-2,2h-2c-1.103,0-2-.897-2-2v-2Zm4.001,2h-2.001v-2h2v2ZM24,7v1H0v-1C0,4.243,2.243,2,5,2h1v-1c0-.552.448-1,1-1s1,.448,1,1v1h8v-1c0-.552.448-1,1-1s1,.448,1,1v1h1c2.757,0,5,2.243,5,5Z" fill="#4859a8" fill-opacity="1" data-original-color="#000000ff" stroke="none" stroke-opacity="1"/></g></svg>
                   <span class="icon-text"><?php echo htmlspecialchars($event_start_date)?></span>
                </div>

                <div class="icon">
                   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4859A8" class="bi bi-hourglass" viewBox="0 0 16 16"><path d="M2 1.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1-.5-.5m2.5.5v1a3.5 3.5 0 0 0 1.989 3.158c.533.256 1.011.791 1.011 1.491v.702c0 .7-.478 1.235-1.011 1.491A3.5 3.5 0 0 0 4.5 13v1h7v-1a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351v-.702c0-.7.478-1.235 1.011-1.491A3.5 3.5 0 0 0 11.5 3V2z"/></svg>
                   <span class="icon-text"><?php echo htmlspecialchars($event_end_date)?></span>
                </div>
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#4859A8" class="bi bi-people-fill" viewBox="0 0 16 16"><path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/></svg>
                <span class="icon-text"><?php echo htmlspecialchars($event_max_num)?></span>
                </div>
            </div>
        </div>
        
        <div class="teams-container">

        </div>
    </div>

    <input type="hidden" id="teamsat_event" value='<?php echo json_encode($teamsat_event, JSON_HEX_APOS | JSON_HEX_QUOT); ?>'>

    <?php include './footer.php'; ?>
  
</body>
</html>


<!-- 
            <div class="team">
             <div class="teamname">Team du kachir</div>
                <div class="teamcontainer">
                    <div class="teamsection" style="display: block;">
                        <div class="team-title">Members</div>
                            <div class="members">
                                <div class="member"><div class="name">Youcef Belaib</div><div class="role">Designer</div></div>
                                <div class="member"><div class="name">Hamza Fouatih</div><div class="role">Programmer</div></div>
                                <div class="member"><div class="name">Ziti Mohammed</div><div class="role">Data Analytic</div></div>
                            </div>
                    </div>
                    <div class="teamsection">
                        <div class="team-title">Demanded Roles:</div>
                        <div class="demmanded">
                            <div class="role">Designer</div>
                            <div class="role">Programmer</div>
                        </div>
                    </div>
                    <div class="teamsection">
                        <div class="team-title">Demanded Number:</div>
                        <div class="demmanded"><div class="role">2</div></div>
                    </div>
                </div>
                <button class="button">Send Invit</button>
            </div>
-->