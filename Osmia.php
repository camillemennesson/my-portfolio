<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille's Portfolio</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo 'style.css?='.time(); ?>"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <div id="navbar-placeholder" data-navbar-type="white"></div>

</head>

<div id="wrapper">
<body>
    <header class="intro">
        <h1>Osmia</h1>
        <h2>Création d'un site vitrine pour une cidrerie de l'Oise</h2>
        <img src="Images/osmia.png" alt="MaVoie Image" class="project-image">
    </header>

    <section class="case-study">
        <div class="sommaire">
            <div class="column">
            <h3>Contexte</h3>
                <p>Création du site web pour le lancement 
                    de la marque Osmia, producteur de cidre et jus de pomme artisanal.
                </p>
            </div>
            <div class="column">
            <h3>Réalisations</h3>
                <p><li>Maquettes et prototype interactif sur Figma</li>
                    <li>Handoff au développeur</li>
                </p>
            </div>
            <div class="column">
             <h3>Outils</h3>
                 <p>Figma, Figjam, Webflow
                 </p>
            </div>
        </div>

        
        <div class="image-gallery">
            <div class="image-item">
                <img src="Images/Osmia1.png" alt="Description of image 1" class="site-image">
            </div>
            <div class="image-item">
                <img src="Images/Osmia2.png" alt="Description of image 2" class="site-image">
            </div>
            <div class="image-item">
                <img src="Images/Osmia3.png" alt="Description of image 3" class="site-image">
            </div>
        
        </div>
        
        <!-- Button to read the next case study -->
    <div class="button-container">
        <a href="Catan.html"
        class="next-case-study-button-black">Lire le prochain case study</a>
    </div>

    </section>

    <div id="footer-placeholder" data-footer-type="white"></div>
    

    <script src="script.js"></script>

    <script id="replace_with_footer" src="script.js"></script>

</body>
</div>

</html>