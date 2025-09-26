
<!DOCTYPE html>
<html lang="fr">

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
    <title>Camille Mennesson UX-UI Designer</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <!-- Inter Sans serif -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" 
    rel="stylesheet">
     <!-- Styleguide CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo 'styles/styleguide.css?='.time(); ?>">
     <!-- Components CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo 'styles/components.css?='.time(); ?>">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo 'styles/style.css?='.time(); ?>"/>
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    
</head>
    
<body id="home">

<div class="hero-background">

<div id="navbar-placeholder" data-navbar-type="white"></div>

    <div id="wrapper" >
     <!-- Name and Description Section -->
     <div class="intro-container">
     <section class="intro">
        <h1>UX/UI Designer freelance depuis 4 ans.</h1>
            <p>Je conçois des applications web et mobile pour des clients en France et à l'international.</p>
            <p>Ancienne responsable marketing dans la publicité et les jeux vidéo, je crée des expériences qui captent et accompagnent les utilisateurs. </p>
        
        <div class="ticks-line">
            <span class="tick-item"><span class="icon-wrapper"><i class="bi bi-check"></i></span>Recherche utilisateur</span>
            <span class="tick-item"><span class="icon-wrapper"><i class="bi bi-check"></i></span>Prototypage</span>
            <span class="tick-item"><span class="icon-wrapper"><i class="bi bi-check"></i></span>UI Kit</span>
            <span class="tick-item"><span class="icon-wrapper"><i class="bi bi-check"></i></span>Vibe-coding ✨</span>
        </div>
        
    </section>

   <div class="stamp-container">
  <img src="stamp.png" alt="I coded this site from scratch" class="stamp">
</div>


    </div>
    </div>
        <div class="h2-intro">
            <img src="images/scribblearrow.png" alt="Découvrir mes projets" 
            style="height: 80px; width: auto; filter: drop-shadow(2px 2px 4px rgba(0,0,0,0.1)); transform: rotate(59deg);">
        </div>
</div>

    <section id="Work">
    
        <div class="work-flex">

        <!-- Project 1 -->
        <div id="riseup" class="project">
                <a href="Riseup.php">
                    <img src="/Images/hero/riseup1.jpeg" class="project-image" alt="riseup">
                    <h3>Rise Up - Website redesign and Visual Asset Creation</h3>
                </a>
            </div>

        <!--Bearwww-->
            <div class="project" id="bear">
                <a>
                    <img src="/Images/hero/bear.png" class="project-image" alt="bear" >
                    <h3>Bearwww - Création de landing page</h3>
                </a>
            </div>

            <!-- Project 2 -->
            <div class="project">
                <a  href="Mavoie.php">
                    <img src="/Images/hero/mavoie.jpeg" class="project-image" alt="mavoie">
                    <h3>MaVoie.org - Refonte UX et UI du site web</h3>
                </a>
            </div>

            <!-- Project 2-->
            <div class="project">
            <a href="Soliguide.php">
                <img src="/Images/hero/soliguide.webp" class="project-image" alt="soliguide" >
                <h3>Soliguide - Refonte UX de l'app mobile</h3>
            </a>
            </div>

            <!-- Osmia-->
            <div class="project" id="osmia">
                <a href="Osmia.php">
                    <img src="/Images/hero/osmia.webp" class="project-image" alt="osmia" >
                    <h3>Osmia - Web Design</h3>
                </a>
            </div>

            <!-- Catan-->
            <div class="project">
                <a href="Catan.php">
                    <img src="/Images/hero/catan.webp" class="project-image" alt="Catan">
                    <h3>Catan - UX Audit</h3>
                </a>
            </div>

            <!-- Project 5-->
            <div id="spotify" class="project">
                <a href="Spotify.php">
                    <img src="/Images/hero/spotify.webp" class="project-image" alt="spotify">
                    <h3>Spotify - App Mobile: Nouvelle fonctionnalité</h3>
                </a>
            </div>
            
            <!-- Project 6-->
             <div id="parents" class="project">
                <a href="Parents.php">
                    <img src="/Images/hero/parents.webp" class="project-image" alt="parents">
                    <h3>Parents - Mobile App</h3>
                </a>
            </div>

        </div>
    </section>

    <section class="contact">
       
        <h2>Me contacter</h2>
        <div>
            <a class="button" href="mailto:camille.mennesson@gmail.com">Envoyer un email</a>
        </div>
    </section> 

    <button
        type="button"
        class="btn-back-to-top"
        id="btn-back-to-top"
        > 
        <i class="bi bi-arrow-up-circle-fill"></i>
    </button>

</div>

<div id="footer-placeholder" data-footer-type="white"></div>
<div id="floating-nav-placeholder"></div>


<script src="scripts/script.js?=v3"></script>


</body>

</html>
