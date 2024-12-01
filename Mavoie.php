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


<body id="mavoie">
<div id="navbar-placeholder"></div>

<div id="wrapper">

    <header class="intro">
        <h1>MaVoie</h1>
        <h2>Site web d'aide au retour à l'emploi </h2>
        <img src="Images/mavoie.png" alt="MaVoie Image" class="project-image">
    </header>

    <section class="case-study">
        <div class="sommaire">
            <div class="column">
            <h3>Contexte</h3>
                <p>Mission d'1 an avec un UX Designer Senior, une PM, et deux développeurs
                </p>
            </div>
            <div class="column">
            <h3>Missions</h3>
                <li>Améliorer l'UX globale du site et son principal user flow
                <li>Recherche et tests utilisateurs</li>
                <li>Refonte UI et création d'un design system</li>
                <li>Intégration landing page sur Webflow</li>
                </p>
            </div>
            <div class="column">
             <h3>Outils</h3>
                 <p>Figma, Airtable, Webflow, Maze, Google Analytics, Hotjar
                 </p>
            </div>
        </div>
        
        <div class="image-gallery">
            <h3>Aperçu du site</h3>

            <div class="image-item">
                <p>Page d'accueil</p>
                <img src="Images/homepage.png" alt="Description of image 1" class="site-image">
            </div>
            <div class="image-item">
                <p>Questionnaire</p>
                <img src="Images/test.png" alt="Description of image 2" class="site-image">
            </div>
            <div class="image-item">
                <p>Page mission</p>

                <img src="Images/mission.png" alt="Description of image 3" class="site-image">
            </div>
            <div class="image-item">
                <p>Page formations</p>

                <img src="Images/cards.png" alt="Description of image 4" class="site-image">
            </div>
            <div class="image-item">
                <p>Page équipe</p>

                <img src="Images/equipe.png" alt="Description of image 5" class="site-image">
            </div>
        </div>
        
        <!-- Button to read the next case study -->
    <div class="button-container">
        <a href="Soliguide.php"
        class="next-case-study-button-black">Lire le prochain case study</a>
    </div>

    </section>

    <div id="footer-placeholder" data-footer-type="white"></div>
    

    <script src="/scripts/script.js"></script>
    
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
</div>

</html>
