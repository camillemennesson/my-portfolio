<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About me</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    
</head>

<body>   

    <?php require_once(__DIR__ . '/navbar.php'); ?> 

     <section class="intro">
        <h1>About me</h1>
    </section>

<section id="About">
<div class="about-flex">

<!-- LinkedIn Section-->
 <div class="linkedin-section">
    <div class="linkedin-pic">
        <a href="https://linkedin.com/in/cmennesson">
            <img src="/Images/linkedin picture.png" alt="linkedin picture">
        </a>
    </div>
    <div class="linkedin-description">
        <p> UX/UI designer freelance depuis 3 ans, basée à Bordeaux.</p>
        <p>J'ai +5 ans d'expérience au sein d'équipes tech internationales chez Google et Gameloft.</p>
        <p>Passionnée de jeu vidéo 🎮  et d'expériences digitales immersives, je suis rigoureuse, autonome et excellente communicante.</p>
        <p><b>Compétences clés: recherche & tests utilisateurs, wireframing & prototypage, delivery, intégration front </b></p>
    </div>

</div>


 <!-- CV Picture-->
 <div class="cv">
    <img src="/Images/cv.png" alt="cv">
</div>

</div>
</section>

<!-- Download Resume -->
 <section id="download-resume">
     <div class="download-resume">
        <h2>Download my resume</h2>
        <a class="button" href="https://drive.google.com/file/d/1U_fP0wiJkLxkOayhfzjvmIWLtXmKV_Uo/view?usp=drive_link"
        >Download in PDF</a>
    </div>    
</section>

<div id="footer"></div> <!-- This is where the footer will be loaded -->
    
<script src="script.js"></script>

<?php require_once(__DIR__ . 'footer.php'); ?>

</body>
</html>