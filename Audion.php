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
    <title>Camille Mennesson Portfolio - Audion</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo 'styles/styleguide.css?='.time(); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo 'styles/components.css?='.time(); ?>">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo 'styles/style.css?='.time(); ?>"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <script src="components/components.js"></script>

</head>

<div id="floating-nav-placeholder"></div>

<body id="audion">


<div id="navbar-placeholder" data-navbar-type="white"></div>

<div id="wrapper">

<header class="intro">
<div class="intro-body">
    <div class="intro-text">
        <h1>Audion: transformer un clic LinkedIn en lead</h1>
        <h2>Pour le lancement d’Audion aux États-Unis, 
            j’ai créé la landing page de leur campagne LinkedIn:
             design, textes et intégration Webflow.
        </h2>
    </div>
    <div class="intro-meta">
        <dl>
            <dt>Rôle</dt>
            <dd> UX/UI DESIGN, COPYWRITING, INTÉGRATION WEBFLOW</dd>
        </dl>
         <dl>
            <dt>Équipe</dt>
            <dd>Chef de projet, SEO, SEA, tracking</dd>
        </dl>
        <dl>
            <dt>Durée</dt>
            <dd>6 SEMAINES</dd>
        </dl>
       
         <dl>
            <dt>Lien</dt>
            <dd><a href="https://resources.audion.ai/" target="_blank" rel="noopener noreferrer">VIEW WEBSITE <i class="bi bi-arrow-up-right"></i></a></dd>
        </dl>
         <dl>
            <dt>Outils</dt>
                <div class="intro-badges">
                    <div class="badge" title="Figma">
                        <img src="images/figma2.svg" loading="lazy" alt="figma logo">
                    </div>
                    <div class="badge" title="Notion">
                        <img src="images/notionlogo.svg" loading="lazy" alt="notion logo">
                    </div>
                    <div class="badge" title="Webflow">
                        <img src="images/webflow-icon.svg" loading="lazy" alt="webflow logo">
                    </div>
        
                 
                </div>
        </dl>
    </div>
</div>
     <div class="intro-image">
<video class="site-image" autoplay loop muted playsinline preload="metadata"
           poster="images/audion/demo-poster.jpg">
        <source src="images/audion/herovideo.webm" type="video/webm">
    </video>    </div>
</header>


<section class="case-study">
<div class="case-study-container">
    <nav id="sticky-toc" class="sticky-toc">

    <h4 class="toc-title">Table of contents</h4>
    <ul>
        <li><a href="#contexte">Contexte</a></li>
        <li><a href="#strategie">Stratégie</a></li>
        <li><a href="#decisions">Décisions clés</a></li>
        <li><a href="#resultats">Résultats</a></li>
    </ul>
    </nav>

<div class="case-study-content">
 
        <hr style="border:none; border-top:1px solid #d3d3d3; margin:1rem 0;" />
 
        <div id="contexte">
            <h3>Contexte</h3>
            <p>Audion, une plateforme d'IA pour la publicité audio, se lance aux États-Unis avec une campagne de publicités LinkedIn
                ciblant les CMOs. L'appât : un livre blanc de 22 pages, le <em>2026 US Channel Mix Report</em>, sur la répartition des budgets média américains.
                Ma mission : concevoir la landing page où arrivent les clics, pour transformer ce trafic en leads qualifiés.
                Je suis intervenue uniquement sur cette page de campagne, pas sur le site officiel d'Audion.</p>
            <p>Le chef de projet me briefait. J'ai travaillé avec le SEO, le SEA et le tracking, et validé les choix avec les CMOs et les sales d'Audion.</p>
 
            <ul class="key-challenges">
                <li><b>Un public mobile</b> La plupart des utilisateurs de LinkedIn naviguent depuis leur téléphone : la page devait d'abord fonctionner sur mobile.
                    <!-- À VÉRIFIER : si tu as une source pour "environ 80 %", ajoute le chiffre ici. Sinon laisse tel quel. -->
                </li>
                <li><b>Une attention courte</b> Après un clic sur une pub, la page doit confirmer la promesse de la créa en quelques secondes.
                </li>
                <li><b>Des décideurs très sollicités</b> Convaincre un CMO de laisser ses coordonnées, pour une marque encore peu connue aux États-Unis.
                </li>
                <li><b>Deux objectifs</b> Obtenir des leads avant tout, et faire découvrir Audion à ceux qui arrivent sur la page.
                </li>
            </ul>
        </div>
 
    <div id="strategie">
        <h3>Stratégie</h3>
        <div class="process-steps">
            <div class="step">
               <h4>Deux objectifs</h4>
                <p>Obtenir des leads qualifiés grâce au formulaire, puis présenter Audion à ceux qui arrivent sur la page.
                </p>
            </div>
            <div class="step">
                <h4>Version A : conversion d'abord</h4>
                <p>Un hero centré sur le livre blanc et le formulaire, un aperçu du contenu, de la preuve sociale,
                    puis une présentation d'Audion.</p>
            </div>
            <div class="step">
                <h4>Version B : marque et conversion</h4>
                <p>Un hero qui mêle proposition de valeur et formulaire, puis « pourquoi l'audio ? »
                    et une présentation plus poussée d'Audion.</p>
            </div>
        </div>
 
        <!-- Les ids image-1, image-2, image-3 suivent le même mécanisme que dans ta version précédente (une image par étape) -->
        <div class="image-item" id="image-1">
                <img src="images/audion/heroaudion.png" alt="Objectifs et stratégie de la landing page" class="site-image">
            </div>
        <div class="image-item" id="image-2" >
                <img src="images/audion/audionscreen01.png" alt="Proposition A de la landing page" class="site-image">
            </div>
        <div class="image-item" id="image-3" >
                <img src="images/audion/audionscreen02.png" alt="Proposition B de la landing page" class="site-image">
            </div>
 
        <!-- À VÉRIFIER : la page en ligne ressemble à la version A avec une section "The Audio Advantage" venue de la B. Corrige si besoin. -->
        <p>La page finale reprend la structure de la version A, avec une section sur les atouts de l'audio issue de la B.</p>
    </div>
 
    <div id="decisions">
        <h3>Décisions clés</h3>
        <ul class="key-challenges">
            <li><b>Un formulaire à 3 champs au lieu de 5</b>
            Les sales voulaient 5 champs pour récolter un maximum de données. J'ai recommandé 2 à 3 champs maximum,
            car chaque champ en plus fait chuter le taux de complétion, surtout sur mobile.
            Le formulaire final compte 3 champs : nom, rôle (annonceur, agence ou adtech) et e-mail professionnel.
            <!-- À VÉRIFIER : confirme que le champ "rôle" sert bien à segmenter les leads pour les sales -->
            </li>
            <li><b>Un hero qui donne envie de télécharger</b>
            Dès le premier écran : un titre centré sur le bénéfice, un visuel du rapport, la mention « 22 pages »,
            des logos de marques pour rassurer et le formulaire.
            </li>
            <li><b>Une page de remerciement qui prolonge la visite</b>
            Une confirmation du téléchargement, puis un appel à l'action vers Audion et trois cartes pour continuer à explorer.
            </li>
            <li><b>Des itérations sans test utilisateur</b>
            Pas de test utilisateur sur ce projet : j'ai ajusté la page avec mon expérience des landing pages et les retours
            des sales et des CMOs. Les allers-retours ont porté sur le formulaire, les visuels, le titre et les textes,
            les icônes, les logos et les boutons.
            </li>
        </ul>
        
        <div class="image-item">
    <video class="site-image" autoplay loop muted playsinline preload="metadata"
           poster="images/audion/demo-poster.jpg">
        <source src="images/audion/logoaudion.webm" type="video/webm">
    </video>
</div>
    </div>
 
    <div id="resultats">
        <h3>Résultats</h3>
            <p>La landing est livrée en 6 semaines et en ligne : elle a servi de destination aux publicités LinkedIn.
                Elle arrive en bout de funnel et le trafic est resté limité, donc je n'ai pas de données de conversion fiables à partager.
            </p>
            <!-- Si tu obtiens un chiffre (visites, taux de complétion, téléchargements, CTR), ajoute-le ici avec sa période. Le score Lighthouse mobile est aussi un indicateur que tu peux mesurer toi-même. -->
        <h4>Ce que j'en retiens</h4>
        <p>Proposer deux versions rend la discussion plus concrète. Et sur le formulaire, parler en leads
            et en taux de complétion m'a aidée à convaincre les sales : mon passé marketing a servi.</p>
        <h4>Ce que je ferais ensuite</h4>
        <p>Tester deux titres et deux longueurs de formulaire, et analyser les sessions mobiles pour repérer où les utilisateurs abandonnent.</p>
    
    <div class="image-item" >
                <img src="images/audion/thankyoupage.png"  class="site-image">
            </div>

    </div>
 
</div>
</div>
</section>
 
    <section id="case-study-footer">
        <!-- Button to read the next case study -->
        <div class="button-container">
            <a href="Riseup.php"
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
 
</div>
 <script src="scripts/i18n.js"></script>

<script src="/scripts/script.js?v=100"></script>
 
</body>
</html>