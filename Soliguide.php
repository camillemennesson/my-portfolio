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
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MHPSRPR3');</script>
<!-- End Google Tag Manager -->
</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MHPSRPR3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 
<div id="floating-nav-placeholder"></div>

<div id="navbar-placeholder" data-navbar-type="white"></div>
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

    <button
        type="button"
        class="btn-back-to-top"
        id="btn-back-to-top"
        > 
        <i class="bi bi-arrow-up-circle-fill"></i>
    </button>
    
    <script src="scripts/script.js"></script>

</div>

</body>

</html>
