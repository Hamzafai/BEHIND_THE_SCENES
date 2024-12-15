<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Hamza Faiz Ahmed Fouatih & Youcef Belaib">
        <meta name="description" content="Add an Event in a Club">
        <link rel="stylesheet" href="../css/Club_Card.css" type="text/css">
        <script src="../js/navbar.js" defer></script>
        <?php session_start(); ?>
        <?php include '../php/navbar_setup.php'; ?>
        <!--<script src="../js/blogcard_entrance.js" defer></script>-->
        <title>Blog</title>
    </head>

    <body>
    <?php include './navbar.php'; ?>
    <div class="main">
          <div style="margin: 8em auto 1em; text-align: center;" class="blogtitle">
            <h1>Always stay informed</h1>
            <p style="margin: auto;">Keep an eye on everything that's happening in our technological pole </p>
          </div>
     <div class="news">
            <div class="card">
                <div class="block">
                    <div class="left">
                        <img src="img/blog/1672225598612.jpg" alt="description" width="100%" height="100%">
                    </div>
                    <div class="content">
                        <h2>Mr Bachir Did it!!!</h2>
                        <p>Mr Bachir promise us that on Mars you can make another strike, as ISE DEPT sent us on tuesday a -un-official mail that there will be no Master diploma neither fablab nor PFE.</p>
                    </div>
                    <button class="join-btn">Read more</button>
                </div>
            </div>  
            <div class="card">
                <div class="block">
                    <div class="left">
                        <img src="img/blog/blogsample.jpg" alt="description" width="100%" height="100%">
                    </div>
                    <div class="content">
                        <h2>Strike in ENSIA</h2>
                        <p>Students of the National School Of Artificial Intelligence are on a strike for their rights</p>
                    </div>
                    <button class="join-btn">Read more</button>
                </div>
            </div>
            <div class="card">
                <div class="block">
                    <div class="left">
                        <img src="img/blog/blogsample2.jpg" alt="description" width="100%" height="100%">
                    </div>
                    <div class="content">
                        <h2>India President visit</h2>
                        <p>This monday, the president of India Droupadi Murmu paid visit to the Technological Pole Of Sidi Abdellah.</p>
                    </div>
                    <button class="join-btn">Read more</button>
                </div>
            </div>
    </div>
    </div>
    <?php include './footer.php'; ?>
    </body>
    
</html>
