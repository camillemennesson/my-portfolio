<?php
// Function to auto-version files based on their last modified time
function auto_version($file) {
    if ($file[0] !== '/') {
        $file = rtrim(str_replace(DIRECTORY_SEPARATOR, '/', dirname($_SERVER['PHP_SELF'])), '/') . '/' . $file;
    }
    if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $file)) return $file;
    $mtime = filemtime($_SERVER['DOCUMENT_ROOT'] . $file);
    return preg_replace('{\\.([^./]+)$}', ".$mtime.\$1", $file);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo auto_version('style.css'); ?>" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <div id="navbar-placeholder" data-navbar-type="white"></div>

</head>

<div id="wrapper">

<body id="about">   
    
    <section class="intro">
        <div class="intro-content">

            <h1>À propos de moi</h1>
        </div>
    </section>

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

<!-- Download Resume -->
 <section id="download-resume">
    <div class="download-resume-image">
    <a  target="_blank" href="https://icons8.com/illustrations/illustration/65e0a2d77175d0000117bd46">
        <img src="Images/two doodle characters shaking hands.png" alt="sculpture le penseur de Rodin">
    </a>  
</div>
     <div class="download-resume">
        <h2>Télécharger mon CV</h2>
        <a target="_blank" class="button" href="https://drive.google.com/file/d/1U_fP0wiJkLxkOayhfzjvmIWLtXmKV_Uo/view?usp=drive_link"
        >Télécharger en PDF</a>
    </div>   
</section>

<div id="footer-placeholder" data-footer-type="white"></div>
    
<script src="script.js"></script>

<script id="replace_with_footer" src="script.js"></script>

</body>
</html>