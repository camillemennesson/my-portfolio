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
    <script src="components/components.js"></script>

</head>

<body class="spotify">


<div id="navbar-placeholder" data-navbar-type="black"></div>
<div id="wrapper">

    <header class="intro">
        <h1>Spotify</h1>

        <div class="intro-flex">
            <div class="flex-text">
                <h2>Nouvelle fonctionnalité Spotify</h2>
                <p>Il s'agit d'un projet personnel basé sur l'UI de l'app.
                    Étant une utilisatrice quotidienne de Spotify, j'ai toujours 
                    voulu une fonctionnalité dédiée aux amoureux de la musique.
                    <br><br> Voici la présentation d'une interface repensée pour les amateurs 
                    de chansons avec une fonctionnalité centrée sur les chansons samplées 
                    et leurs originaux.
                </p>
            </div>
            <div class="flex-image">
            <img src="Images/spotify1.png">
        </div>
        </div>
    </header>

    <section class="case-study">
        <h2 id="h2-center">Redesign page d'accueil </h2>
    <div class="flex-section">
        <div class="project-image">
            <img src="Images/spotify2.png" >
        </div>
    
        <div class="card-container">
            <div class="right-card">
                <p class="card-text">Zoom sur les chansons les plus samplées selon le genre de musique préféré
                </p>
            </div>
            <div class="left-card">
                <p class="card-text">Nouveau style du lecteur - on enlève les éléments non nécéssaires 
                pour se recenttrer sur la chanson en cours de 
                </p>
            </div>
        </div>

    </div>

    <div class="div-center">
        <div>
            <h2 id="h2-center">Jeux de lumière en background</h2>
         <p>J'ai ajouté des animations de lumières floutées en arrière-plan
             pour donner une ambiance de musique live
         </p>
        </div>
        <div class="animation">
        <img  src="Images/spotify.gif" alt="card-animation">
        </div>
    </div>

<div class="disiz" class="project-image">
    <img src="Images/spotify.png" alt="spotify lecteur" >
</div>

<div class="flex-image-left" >
<div class="project-image">
    <img src="Images/spotify player.gif">
</div>
        <div class="box"><div class="ellipse"></div></div>

        <div>
            <h2>Le Lecteur</h2>
             <p>Un lecteur qui donne plus de place aux 
                visuels de l'artiste. Effet de navigation 
                pour voir plus de pochettes d'albums
            </p>
        </div>
</div>

<div class="flex-image-right">
        <div class>
            <h2 class="h2-left">Les chansons samplées</h2>
             <p>Un accès aux chansons samplées dans le titre
                 en cours de lecture (même position que la
                  fonctionnalité paroles dans l'application 
                  réelle)
            </p>
        </div>
        <div class="project-image">
        <img src="Images/spotify samples.png" >  
    </div>   
        <div class="box"><div class="ellipse"></div></div>
</div>

<div class="div-center">
    <div>
        <h2 id="h2-center">Prototype</h2>
    </div>
    <div class="project-image">
    <img  src="Images/spotify prototype.gif" alt="prototype video">
    </div>
</div>
        
        <!-- Button to read the next case study -->
    <div class="button-container">
        <a href="Parents.php"
        class="next-case-study-button-purple">Lire le prochain case study</a>
    </div>

    </section>

    <div id="footer-placeholder" data-footer-type="black"></div>

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
