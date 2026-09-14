
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
    <title>About</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo 'styles/styleguide.css?='.time(); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo 'styles/components.css?='.time(); ?>">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo 'styles/style.css?='.time(); ?>"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <div id="navbar-placeholder" data-navbar-type="white"></div>
    <script src="components/components.js"></script>


</head>

<body id="about">   

<div id="floating-nav-placeholder"></div>

<div id="navbar-placeholder" data-navbar-type="white"></div>
   
<div id="wrapper">

    <section class="intro">
        <div class="intro-content">

            <h1>À propos</h1>
        </div>
    </section>

<div class="about-flex">

 <!-- CV Picture-->
    <div class="cv">
    <img src="images/CV SEPT 2026.png" alt="cv">

     <section id="download-resume">
    <div>
    <a  target="_blank" href="https://drive.google.com/file/d/10bYCUsJTXBLWlujWnEio1DunCQzuk6rj/view?usp=sharing">
        <img src="images/two doodle characters shaking hands.png" alt="doodle characters shaking hands">
    </a>  
</div>

     <div>
        <a class="button" target="_blank" class="telecharger-cv" id="button-black" href="https://drive.google.com/file/d/1tiIu4o7SXfrFsMHR9MInZTcw9TVvFEQF/view?usp=sharing"
        >Télécharger mon CV</a>
    </div>   

</section>
    </div>

<section class="parcours-pro">


  <ul class="timeline">
    <li class="timeline-item">
      <time class="pill pill--purple">2025</time>
      <article>
        <h3>Premiers pas dans le design graphique</h3>
        <p>Pour la première fois, j'ai conçu des assets statiques et des vidéos pour un (vrai) client.</p>
      </article>
    </li>

    <li class="timeline-item">
      <time class="pill pill--yellow">2024</time>
      <article>
        <h3>Je sais coder 🥹</h3>
        <p>J'ai appris les bases du HTML, CSS, et JS. Résultat ? j'ai codé mon portfolio toute seule. Merci l'IA.</p>
      </article>
    </li>

    <li class="timeline-item">
      <time class="pill pill--green">2023</time>
      <article>
        <h3>La recherche utilisateur, la vraie</h3>
        <p>J’ai mené des recherches terrain auprès de personnes en situation de précarité pour identifier leurs besoins et concevoir une application réellement utile pour une asso.</p>
      </article>
    </li>

    <li class="timeline-item">
      <time class="pill pill--pink">2022</time>
      <article>
        <h3>Mon premier client</h3>
        <p>J'ai paniqué mais c'était génial, j'ai enfin pu tester mes compétences UX au service de vrais humains. #jesaispasjaiprisnimportequoi</p>
      </article>
    </li>

    <li class="timeline-item">
      <time class="pill pill--blue">2021</time>
      <article>
        <h3>La reconversion</h3>
        <p>Du marketing à la conception d'expériences: je commence le bootcamp UX/UI design chez Ironhack.</p>
      </article>
    </li>
  </ul>
</section>
</div>

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

</html>
