
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

<div id="navbar-placeholder" data-navbar-type="white"></div>

<div id="wrapper">
<div id="wrapper">

    <div class="intro-container">
        <section class="intro">
            <h1 data-i18n="intro.title">Ex-marketing chez Gameloft & Google, aujourd'hui UX/UI designer freelance.</h1>
            <p data-i18n="intro.text">Je rejoins des équipes en France et à l'international pour concevoir des produits web et mobile.</p>

            <div class="ticks-line">
                <span class="tick-item" data-i18n="intro.tick1">Recherche utilisateur</span>
                <span class="tick-item" data-i18n="intro.tick2">Prototypage</span>
                <span class="tick-item">UI Kit</span>
                <span class="tick-item">Vibe-coding</span>
            </div>
        </section>

        <div class="stamp-container">
            <img src="images/stamp-blue.png" alt="Vibe-coded from scratch" class="stamp">
        </div>
    </div>

    <section id="Work">
        <div class="work-flex">

            <div id="audion" class="project">
                <a href="Audion.php">
                    <img src="images/audion/cover.png" class="project-image" alt="audion">
                    <h3>Audion - Landing page de campagne LinkedIn</h3>
                </a>
            </div>

            <div id="riseup" class="project">
                <a href="Riseup.php">
                    <img src="images/riseupcover.jpg" class="project-image" alt="riseup">
                    <h3>Rise Up - Website redesign and Visual Asset Creation</h3>
                </a>
            </div>

            <div class="project" id="bear">
                <a href="#">
                    <img src="images/hero/bear.png" class="project-image" alt="bear">
                    <h3>Bearwww - Création de landing page</h3>
                </a>
            </div>

            <div class="project" id="mavoie">
                <a href="Mavoie.php">
                    <img src="images/hero/mavoie.jpeg" class="project-image" alt="mavoie">
                    <h3>MaVoie.org - Refonte UX et UI du site web</h3>
                </a>
            </div>

            <div class="project" id="soliguide">
                <a href="Soliguide.php">
                    <img src="images/soliguide.webp" class="project-image" alt="soliguide">
                    <h3>Soliguide - Refonte UX de l'app mobile</h3>
                </a>
            </div>

            <div class="project" id="osmia">
                <a href="Osmia.php">
                    <img src="images/hero/osmia.webp" class="project-image" alt="osmia">
                    <h3>Osmia - Web Design</h3>
                </a>
            </div>

            <div class="project" id="catan">
                <a href="Catan.php">
                    <img src="images/hero/catan.webp" class="project-image" alt="Catan">
                    <h3 data-i18n="work.catan">Catan - UX Audit</h3>
                </a>
            </div>

            <div id="spotify" class="project">
                <a href="Spotify.php">
                    <img src="images/hero/spotify.webp" class="project-image" alt="spotify">
                    <h3>Spotify - App Mobile: Nouvelle fonctionnalité</h3>
                </a>
            </div>

            <div id="parents" class="project">
                <a href="Parents.php">
                    <img src="images/hero/parents.webp" class="project-image" alt="parents">
                    <h3>Parents - Mobile App</h3>
                </a>
            </div>
        </div>
    </section>

    <section class="contact">
        <h2 data-i18n="contact.title">Me contacter</h2>
        <div>
            <a
            class="btn"
            href="mailto:camille.mennesson@gmail.com"
            data-i18n="contact.button"
            >
            Envoyer un email
            </a>
        </div>
    </section>

    <button
        type="button"
        class="btn btn--back-to-top"
        id="btn-back-to-top"
        aria-label="Retour en haut"
        >
        <i class="bi bi-arrow-up-circle-fill" aria-hidden="true"></i>
    </button>
    
</div>

<div id="footer-placeholder" data-footer-type="white"></div>
<script src="scripts/i18n.js"></script>
<script src="scripts/script.js?=v3"></script>

</body>

</html>
