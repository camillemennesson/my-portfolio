<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VQSFXRTNCS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VQSFXRTNCS');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille Mennesson Portfolio</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo 'styles/styleguide.css?='.time(); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo 'styles/components.css?='.time(); ?>">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo 'styles/style.css?='.time(); ?>"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <div id="navbar-placeholder" data-navbar-type="white"></div>
    <script src="components/components.js"></script>

</head>

<body id="soliguide">

<div id="floating-nav-placeholder"></div>

<div id="navbar-placeholder" data-navbar-type="white"></div>

<div id="wrapper">

<header class="intro">
<div class="intro-body">
    <div class="intro-text">
        <h1>Optimisations UX & UI de l'app Soliguide</h1>
        <h2>Soliguide est une plateforme solidaire portée par l’association Solinum qui référence 
            gratuitement des services essentiels pour les personnes en situation de précarité en France
             (alimentation, hébergement, soins, etc.).</h2>
    </div>
    <div class="intro-meta">
        <dl>
            <dt>Rôle</dt>
            <dd>RECHERCHE, DESIGN</dd>
        </dl>
        <dl>
            <dt>Équipe</dt>
            <dd>PRODUCT MANAGER, CTO</dd>
        </dl>
        <dl>
            <dt>Durée</dt>
            <dd>6 MOIS</dd>
        </dl>
       <dl>
            <dt>Outils</dt>
                <div class="intro-badges">
                    <div class="badge" title="Figma">
                        <img src="images/figma2.svg" loading="lazy" alt="figma logo">
                    </div>
                    <div class="badge" title="UsabilityHub">
                        <img src="images/usabilityhub.png" loading="lazy" alt="usabilityhub logo">
                    </div>
                    <div class="badge" title="Google Analytics">
                        <img src="images/analytics.png" loading="lazy" alt="google analytics logo">
                    </div>
                </div>
        </dl>
    
    </div>
</div>
     <div class="intro-image">
        <img src="images/soliguide.png" alt="Soliguide Image" class="project-image" id="hero-soliguide">
    </div>
</header>

<section class="case-study">
<div class="case-study-container">

    <nav id="sticky-toc" class="sticky-toc">
        <h4 class="toc-title">Table of contents</h4>
        <ul>
            <li><a href="#challenge">Challenges</a></li>
            <li><a href="#research">Recherche Utilisateur</a></li>
            <li><a href="#solution">Solution</a></li>
            <li><a href="#aperçu">Aperçu du Site</a></li>
            <li><a href="#résultats">Résultats</a></li>
        </ul>
    </nav>

<div class="case-study-content">
    <div id="introduction">
        <h3>Contexte</h3>
        <p>
        Soliguide c'est le guide de la solidarité en ligne. La plateforme vise à aider les personnes en situation de précarité 
        à accéder à des services essentiels. Les objectifs principaux:
        améliorer l'expérience (suite à des retours terrains), de mieux comprendre
         les différents utilisateurs, et d'optimiser les parcours clés.
        </p>
        <h3>Objectifs</h3>
        <p>
            <li>Améliorer l'éxperience globale de l'interface web et mobile</li>
            <li>Optimiser les principaux parcours utilisateurs</li>
            <li>Mieux comprendre l'uilisation de Soliguide en contexte de mobilité (sur le terrain) </li>
        </p>
    </div>

    <div id="challenge">
        <h3>Challenges</h3>
        <h4>Cibles sensibles</h4>
            <p>Le projet présentait plusieurs défis en raison de la nature des cibles :
                Les utilisateurs incluent des personnes à la rue et en situation de
                 précarité, peu habituées à la technologie.</p>
        <h4>Double cible</h4>
        <p>En plus des personnes en situation de précarité, les professionnels 
            des associations utilisent également le site pour aider les utilisateurs
             finaux.</p>
    </div>       

    <div id="solution">
        <h3>Solutions mises en place</h3>
            <h4>Recherche et Compréhension des Utilisateurs</h4>
                <p><li>Définition des cibles : Identification des deux types principaux
                 d'utilisateurs : les personnes en situation de précarité et 
                 les professionnels des associations.</li>
                    <li>Méthodologie : Réalisation d'interviews et d'observations sur
                    le terrain, notamment lors de maraudes ou dans des centres
                    de la Croix-Rouge.</li></p>
            <h4>Simplification des Parcours Clés</h4>
                 <p><li>Recherche par besoin ou lieu : Mise en place d'une fonctionnalité 
                permettant de lancer une recherche à partir d'un besoin spécifique 
                ou d'une localisation.</li>
                    <li>Filtres personnalisés : Ajout de filtres pour affiner les résultats
                    en fonction des besoins spécifiques des utilisateurs.</li></p> 
            <h4>Adaptation à la Mobilité</h4>
                <p><li>Compréhension des usages: Analyse de l'utilisation de 
                    l'application dans des conditions de mobilité, comme lors 
                    de déplacements ou de maraudes.
                   </li>
                    <li>Optimisation pour les smartphones : Adaptation de l'interfac
                        pour une utilisation optimale sur smartphone, en tenant
                        compte des contraintes des utilisateurs peu familiers
                        avec la technologie.
                    </li>
                </p>
                <h4>Audit et refonte de l'UI</h4>
                <p><li>Simplification visuelle: Refonte de l'interface utilisateur
                     pour la rendre plus claire et accessible, en particulier pour 
                     les utilisateurs éloignés du numérique.
                   </li>
                    <li>Respect des normes: Adaptation aux "normes" d'utilisation 
                        courantes sur internet tout en restant accessible pour les 
                        utilisateurs novices.
                    </li>
                </p> 
    </div>

    <div id="aperçu">
        <h3>Aperçu de l'app</h3>
        <div class="image-gallery">
            <div class="image-item">
                <p>Onboarding (FTUE)</p>
                <img src="images/Soliguide1.png" alt="Description of image 1" class="site-image">
            </div>
            <div class="image-item">
                <p>Démarrer une recherche</p>

                <img src="images/Soliguide3.png" alt="Description of image 3" class="site-image">
            </div>
            <div class="image-item">
                <p>Consulter un résultat de recherche</p>
                <img src="images/Soliguide2.png" alt="Description of image 2" class="site-image">
            </div>
        </div>
    </div>


    <div id="results">
        <h3>Résultats et Impact</h3>
            <h4>Amélioration de l'UX</h4>
                <p><li>Les utilisateurs ont signalé une
                     meilleure compréhension et une utilisation plus aisée de la 
                     plateforme.
                    </li>
            <h4>Meilleure adéquation aux besoins</h4>
                    <li>Les parcours utilisateurs
                         ont été simplifiés, permettant une recherche plus efficace 
                         des services.
                    </li></p>
            <h4>Satisfaction des professionnels </h4>
                    <li>Les professionnels des associations ont trouvé l'outil plus adapté à leurs
                        besoins pour aider les personnes en situation de précarité.
                    </li></p>
    </div>

</div>
</div>
</section>
        
<section id="case-study-footer">
        <!-- Button to read the next case study -->
        <div class="button-container">
            <a href="Soliguide.php"
            class="button case-study-button">Lire le prochain case study</a>
        </div>
        <div id="footer-placeholder" data-footer-type="white"></div>
</section>

    <button
        type="button"
        class="btn-back-to-top"
        id="btn-back-to-top"
        > 
        <i class="bi bi-arrow-up-circle-fill"></i>
    </button>
    
    <script src="scripts/script.js"></script>

</body>

</html>
