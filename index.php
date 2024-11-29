

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
    <title>Camille Mennesson Portfolio</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo 'styles/styleguide.css?='.time(); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo 'styles/components.css?='.time(); ?>">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo 'styles/style.css?='.time(); ?>"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />

</head>

<div class="navbar-white" id="navbar-white">
    <nav class="nav container">
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
                <li><a href="/index.php" class="nav__link"></a>Projets</li>
                <li><a href="/about.php" class="nav__link"></a>À propos</li>
                <li><a href="/index.php" class="nav__link"></a>Télécharger mon CV</li>
            </ul>
        </div>
    </nav>
</div>

<div id="wrapper">
    
<body id="home">

     <!-- Name and Description Section -->
     <section class="intro">
        <h1>Camille Mennesson</h1>
            <p>Designer Freelance depuis 3 ans pour des projets de conception UX et UI.</p>
            <p>J'ai travaillé pendant 5 ans avec des équipes tech
            internationales et multidisciplinaires.</p>
            <p>J'ai les bases en <u> développement front.</u>
             D'ailleurs, j'ai développé
            ce site 'from scratch' (avec un peu d'aide de l'IA..) !</p>
        
    </section>

    <div class="h2-intro">
            <i class="bi bi-arrow-down-circle"></i>
            <p>Découvrir mes projets</p>
    </div>

    <section id="Work">
    
        <div class="work-flex">

            <!-- Project 1 -->
            <div class="project">
                <a  href="Mavoie.php">
                    <img src="/Images/mavoie.png" class="project-image" alt="mavoie">
                    <h3>MaVoie.org - Web Design</h3>
                </a>
            </div>

            <!-- Project 2-->
            <div class="project">
            <a href="Soliguide.php">
                <img src="/Images/soliguide.png" class="project-image" alt="soliguide">
                <h3>Soliguide - App Mobile</h3>
            </a>
            </div>

            <!-- Osmia-->
            <div class="project">
                <a href="Osmia.php">
                    <img src="/Images/osmia.png" class="project-image" alt="osmia">
                    <h3>Osmia - Web Design</h3>
                </a>
            </div>

            <!-- Catan-->
            <div class="project">
                <a href="Catan.php">
                    <img src="/Images/catan.png" class="project-image" alt="Catan">
                    <h3>Catan - UX Audit</h3>
                </a>
            </div>

            <!-- Project 5-->
            <div class="project">
                <a href="Spotify.php">
                    <img src="/Images/spotify.png" class="project-image" alt="spotify">
                    <h3>Spotify - Nouvelle fonctionnalité</h3>
                </a>
            </div>
            
            <!-- Project 6-->
             <div class="project">
                <a href="Parents.php">
                    <img src="/Images/parents overview.png" class="project-image" alt="parents">
                    <h3>Parents - Mobile App</h3>
                </a>
            </div>

        </div>
    </section>

    <section class="contact">
        <a class="contact-image" target="_blank" href="https://icons8.com/illustrations/illustration/65e0a2d77175d0000117bd46">
            <img src="Images/Doodle character hiding pain at work.png" alt="sculpture le penseur de Rodin">
        </a>  
        <h2>Me contacter</h2>
        <div>
            <a class="button" href="mailto:camille.mennesson@gmail.com">Envoyer un email</a>

        </div>
    </section> 
    <script src="scripts/script.js?=v3"></script>
    <div id="footer-placeholder" data-footer-type="white"></div>
</body>
</div>
</html>
