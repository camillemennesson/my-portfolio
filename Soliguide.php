<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille's Portfolio</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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

<body>

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
        <ul class="footer-links">
        <li><a href="/index.php">Projets</a></li>
        <li><a href="/about.php">À propos</a></li>

        <li>
            <a 
            href="https://drive.google.com/file/d/1Os1gjZnW4bBV3VlxIyzZhQj7twOIt31w/view"
            class="download-resume" target="_blank" >
            Télécharger mon CV
        </a>
        </li>
    </ul>
        </div>
    </nav>
</div>

<div id="wrapper">

    <header class="intro">
        <h1>Soliguide</h1>
        <h2>App mobile pour les personnes en situation de précarité </h2>
        <img src="Images/soliguide.png" alt="Soliguide Image" class="project-image">
    </header>

    <section class="case-study">
        <div class="sommaire">
            <div class="column">
            <h3>Contexte</h3>
                <p>Mission de 6 mois avec un UX Designer Senior, un PM, et un Responsable tech
                </p>
            </div>
            <div class="column">
            <h3>Missions</h3>
                <li>Audit UX et UI de l'app mobile</li>
                <li>Nouvelle proposition du parcours utilisateurs</li>
                <li>Session de recherche utilisateur sur le terrain 
                    (entretiens individuels et de groupe) </li>
                </p>
            </div>

            <div class="column">
             <h3>Outils</h3>
                 <p>Figma, Figjam, UsabilityHub, Analytics
                 </p>
            </div>
        </div>

        <div class="image-gallery">
            <h3>Aperçu de l'app</h3>
            <div class="image-item">
                <p>Onboarding (FTUE)</p>
                <img src="Images/Soliguide1.png" alt="Description of image 1" class="site-image">
            </div>
            <div class="image-item">
                <p>Démarrer une recherche</p>

                <img src="Images/Soliguide3.png" alt="Description of image 3" class="site-image">
            </div>
            <div class="image-item">
                <p>Consulter un résultat de recherche</p>
                <img src="Images/Soliguide2.png" alt="Description of image 2" class="site-image">
            </div>
            
        </div>
        
        <!-- Button to read the next case study -->
    <div class="button-container">
        <a href="Osmia.php"
        class="next-case-study-button-black">Lire le prochain case study</a>
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
</div></div>

</body>

</html>
