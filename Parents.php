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

<body id="parents">
    
<div id="navbar-placeholder" data-navbar-type="white"></div>
<div id="wrapper">

    <header class="intro">
        <h1>Parents</h1>
        <h2>Mobile App for Postpartum</h2>
        <img src="Images/parents hero.gif" alt="Parents Hero" class="project-image">
    </header>

    <section class="case-study">
        <div class="sommaire">
            <div class="column">
            <h3>Context</h3>
                <p>Parents is a wellness app for postpartum 
                    support developed during my design studies.
                    This was a 2-weeks collaboration with another
                    designer
                </p>
            </div>
            <div class="column">
            <h3>My Role</h3>
                <p>
                    User interviews, User flows, 
                    Wireframes & interactive prototypes,
                     Visual identity & components, Design critiques 
                </p>
            </div>
            <div class="column">
             <h3>Tools</h3>
                 <p> Figma, Usebberry, Google Forms, Miro
                </p>
            </div>
        </div>
        
    <div id="sommaire-clic">
        <div class="sections-container">
        <div class="section" onclick="location.href='#research'">
            <div class="section-title">
                Research
            </div>
        </div>

        <div class="section" onclick="location.href='#define'">
            <div class="section-title">
                Define
            </div>
        </div>

        <div class="section" onclick="location.href='#mvp'">
            <div class="section-title">
                MVP
            </div>
        </div>

        <div class="section" onclick="location.href='#test'">
            <div class="section-title">
                Test
            </div>
        </div>

        <div class="section" onclick="location.href='#prototype'">
            <div class="section-title">
                Final Prototype
            </div>
        </div>
    </div>
    </div>

    <div id="research">
        <h3>Research</h3>
        <h4> Market Analysis</h4>
            <p>Existing applications focus exclusively on pregnancy or baby health.
                 Parents lack information and resources about potential post-birth challenges.
            </p>
        <h4> Competitive Analysis</h4>
        <p> Most parenting applications are designed for women, 
            focusing on their general health during pregnancy and 
            their baby's development. The appearance and user-friendliness of
             these applications tend to follow conventional "feminine" colors and
              tones, with a light and playful design style.
        </p>
        <div class="image-item">
            <img src="Images/parents overview.png" alt="Description of image 1" class="site-image">
        </div>    
        <h4>User Research</h4>
        <p> Parents feel unsupported post-birth:
            <br><br>
            <li><b>Isolation: </b>Feelings of loneliness and confusion post-delivery, 
                contrasting with the support received during pregnancy.</li>
             <li><b>Lack of Guidance:</b> Uncertainty about which specialist to
                 consult for specific issues.</li>
             <li><b>Information Gap: </b> A dearth of reliable and practical
                 information to prepare for pregnancy, childbirth, and postnatal care.</li>
                </p>        

        <div class="banner">
            <h3>At the end of research</h3>
            <p>Parents need physical and psychological support post-birth:
           they struggle to find reliable support and guidance after childbirth, 
            unsure of where to look or whom to approach.
            <br><br> I believe that access to workshops and in-depth exercises focused on 
            postnatal issues will help them navigate this period positively.
            </p>
        </div>

        <div id="define">
            <h3>Define</h3>
            <h4>Problem Statement</h4>
                <p>We observed that Mother Mathilda needs a way to find more physical 
                    and psychological support after giving birth because she’s in pain
                     and she has no one to talk to.      
                </p>
                <p>
                    We believe that giving Mother Mathilda an access to mind and body 
                     after-birth exercices will help her going through her post partum period. 
                </p>

            <h4>User Flow</h4>
            <p>
                Ce user flow représente la manière dont les utilisateurs s'inscrivent 
                et participent à un atelier, évaluent leur ressenti et suivent leurs progrès.
            </p>

            <div class="image-item slideshow">
                <img src="Images/Parents UF1.png" alt="Description of image 1" class="site-image">
            </div>      
            <div class="image-item slideshow">
                <img src="Images/Parents UF2.png" alt="Description of image 1" class="site-image">
            </div>  

        <div id="mvp">
            <h3>MVP (Minimum Viable Product)</h3>
                <p>Parents est une application mobile communautaire qui propose des exercices
                     et des ateliers en direct avec des spécialistes de la grossesse et du post-partum.
                    <br><br>Les fonctionnalités indispensables :
                    <br><li>Ateliers thématiques en direct avec des spécialistes</li>
                    <li>Possibilité de fixer des objectifs et de les suivre pour voir les progrès sur le long terme</li>       
                </p>
                <div class="image-item">
                    <img src="Images/Parents MVP.png" alt="Description of image 1" class="site-image">
                </div> 
        </div>

        <div id="test">
            <h3>Test</h3>
                <p>Plusieurs tests d'utilisateurs ont eu un impact sur la façon dont la solution finale a été élaborée.
                <br><br>L'application Parents ne concerne pas seulement les femmes, mais tous les partenaires impliqués :
                     le processus d'inscription a été mis à jour pour ajouter le mot "père" comme option d'inscription.      
                </p>
                <div class="image-item">
                    <img src="Images/parents test2.png" alt="Description of image 1" class="site-image">
                </div> 
                <p>
                    Les utilisateurs sont là pour trouver des solutions fiables et à long terme 
                        à leurs problèmes post-partum : nous avons ajouté des critères liés au corps 
                        et à l'esprit pour suivre les ateliers.
                </p>
                <div class="image-item">
                    <img src="Images/Parents TEST GOALS.png" alt="Description of image 1" class="site-image">
                </div> 
        </div>

        <div id="prototype">
            <h3>Final Prototype</h3>
            <h4>UI: Dersign Principles</h4>
                <p><b>Clair</b> : les parents qui utilisent l'application sont déjà dans un état d'esprit
                    stressant et accablant. Le contenu et l'architecture de l'application sont 
                    simples et faciles à comprendre
                <br><br><b>Positif </b>: l'application utilise un ton positif et encourageant dans son contenu
                <br><br><b>Responsabilisant </b>: les parents sont ici pour une raison spécifique, 
                à la recherche d'informations directes et véridiques. Le contenu et
                    les couleurs de l'application traduisent l'autonomisation des utilisateurs      
                </p>
                <div class="image-item">
                    <img src="Images/Parents DESIGN PRINCIPLES.png" alt="Description of image 1" class="site-image">
                </div> 
                <div class="video-prototype">
            <h4>Interactive Prototype</h4>
            <div class="image-item">
                <img src="Images/parents proto.gif" alt="Description of image 1" class="prototype">
                <p class="figma-link">
                    <a href="https://www.figma.com/proto/AJk56y4M9QdxRwQ9CPSrxu/PARENTS-USE-CASE-INTERNAL?node-id=1535-10021&node-type=frame&t=VFL0L1Vg7DxztiM9-1&scaling=scale-down&content-scaling=fixed&page-id=2%3A18&starting-point-node-id=1535%3A10021&show-proto-sidebar=1" target="_blank" style="text-decoration: underline; color: #000;">
                    Click here to try it on Figma!
                    </a>
                </p>    
            </div> 
                </div>
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

 
</body>
</div>

</html>
