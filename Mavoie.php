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
<div id="floating-nav-placeholder"></div>

<div id="navbar-placeholder" data-navbar-type="white"></div>

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
        <a href="Soliguide"
        class="next-case-study-button-black">Lire le prochain case study</a>
    </div>

    </section>

    <div id="footer-placeholder" data-footer-type="white"></div>
    
    <button
        type="button"
        class="btn-back-to-top"
        id="btn-back-to-top"
        > 
        <i class="bi bi-arrow-up-circle-fill"></i>
    </button>
    <script src="/scripts/script.js"></script>
    
</body>
</div>

</html>
