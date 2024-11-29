
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo 'styles/styleguide.css?='.time(); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo 'styles/components.css?='.time(); ?>">

    <link rel="stylesheet" type="text/css" media="all" href="<?php echo 'styles/style.css?='.time(); ?>"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <div id="navbar-placeholder" data-navbar-type="white"></div>
    <script src="components/components.js"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VQSFXRTNCS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VQSFXRTNCS');
</script>
</head>

<div id="wrapper">

<body id="about">   
<div class="navbar-white" id="navbar-white">
    <nav class="nav-container">
        <div class="nav__data">
            <a href="index.php" class="nav__Logo">
                <img src="https://framerusercontent.com/images/6UMHSnwC3fA1yCrXEpBFuMAwMcs.png?scale-down-to=512" 
                 alt="Logo noir"  width="40" height="40">
            </a>

            <div class="nav__toggle" id="nav-toggle">
                <i class="bi bi-list nav__burger"></i>
                <i class="bi bi-x-lg nav__close"></i>
            </div>      
        </div>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li><a href="/index.php" class="nav__link"></a>Projets </li>
                <li><a href="/about.php" class="nav__link"></a>À propos</li>
               <li> <a target="_blank" class="button" href="https://drive.google.com/file/d/1Os1gjZnW4bBV3VlxIyzZhQj7twOIt31w/view?usp=drive_link"
               >Télécharger mon CV</a></li>
            </ul>
        </div>
    </nav>
</div>
    <section class="intro">
        <div class="intro-content">

            <h1>À propos</h1>
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
        <a target="_blank" class="button" href="https://drive.google.com/file/d/1Os1gjZnW4bBV3VlxIyzZhQj7twOIt31w/view?usp=drive_link"
        >Télécharger en PDF</a>
    </div>   
</section>

<div id="footer-placeholder" data-footer-type="white"></div>
    
<script src="scripts/script.js"></script>

<footer class="footer-white" id="footer-white">

<div class="footer-content">
    <div class="footer-border"></div> <!-- Liseret ajouté -->

    <p>Copyright &copy;
        <script>new Date().getFullYear()>2015&&document.write(+new Date().getFullYear());
        </script>
        Camille Mennesson
    </p>

    <ul class="footer-links">
        <li><a href="/index.php">Projets</a></li>
        <li><a href="/about.php">À propos</a></li>
        <li class="h1"><a href="/h1.html">Gallerie des &lt;h1&gt;</a></li>
        <li><a href="mailto:camille.mennesson@gmail.com">Contact</a></li>

        <li>
            <a 
            href="https://drive.google.com/file/d/1Os1gjZnW4bBV3VlxIyzZhQj7twOIt31w/view"
            class="download-resume" target="_blank" >
            Télécharger mon CV
        </a>
        </li>
    </ul>
    <div class="footer-icons">
        <a href="https://github.com/camillemennesson/"
        target="_blank"
        class="footer-icon">
        <i class="bi bi-github"></i>
        </a>
        <a href="https://linkedin.com/in/cmennesson"
        target="_blank"
        class="footer-icon">
        <i class="bi bi-linkedin"></i>
        </a>
        <a href="https://www.figma.com/@cmennesson"
        target="_blank"
        class="footer-icon">
        <img src="/Images/figma.svg" alt="Figma" class="figma-icon">
        </a>
    </div>
</div>
</footer>
</body>
</html>
