<head>
    <base href="http://localhost/BEHIND_THE_SCENES/main/">
    <link rel="stylesheet" href="css/nav&foot.css">
</head>

<header>

    <nav class="navbar">
                <!-- Logo -->
        <div class="navbar-brand">logo</div>
                <!-- Links (inside ul) -->
        <ul class="navbar-links">
                <li><a href="html/home.php">Home</a></li>
                <li><a href="html/events.php">Events</a></li>
                <li><a href="html/blog.php">Blog</a></li>
                <li><a href="html/clubs.php">Clubs</a></li>
        </ul>            
                <!-- Login Button OR detailed format-->  
                <div><?php echo ($login);?></div> 
                <input type="hidden" id="to_see" value="<?php echo htmlspecialchars($to_see); ?>">
               
                <!-- Toggle Button -->
        <button class="navbar-toggle" onclick="toggleMenu()" >☰</button>
    </nav>
</header>

<div id="branchc"></div>