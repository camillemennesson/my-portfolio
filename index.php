<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille's Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href='style.css?<?= filemtime($_SERVER["DOCUMENT_ROOT"] . "style.css"); ?>' type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <div id="navbar-placeholder" data-navbar-type="white"></div>

  
@param $file  The file to be loaded. works on all type of paths.
 
function auto_version($file) {
  if($file[0] !== '/') {
    $file = rtrim(str_replace(DIRECTORY_SEPARATOR, '/', dirname($_SERVER['PHP_SELF'])), '/') . '/' . $file;
  }
  
  if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $file))
  return $file;
  
  $mtime = filemtime($_SERVER['DOCUMENT_ROOT'] . $file);
  return preg_replace('{\\.([^./]+)$}', ".$mtime.\$1", $file);
}

</head>

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
                <a  href="Mavoie.html">
                    <img src="/Images/mavoie.png" class="project-image" alt="mavoie">
                    <h3>MaVoie.org - Web Design</h3>
                </a>
            </div>

            <!-- Project 2-->
            <div class="project">
            <a href="Soliguide.html">
                <img src="/Images/soliguide.png" class="project-image" alt="soliguide">
                <h3>Soliguide - App Mobile</h3>
            </a>
            </div>

            <!-- Osmia-->
            <div class="project">
                <a href="Osmia.html">
                    <img src="/Images/osmia.png" class="project-image" alt="osmia">
                    <h3>Osmia - Web Design</h3>
                </a>
            </div>

            <!-- Catan-->
            <div class="project">
                <a href="Catan.html">
                    <img src="/Images/catan.png" class="project-image" alt="Catan">
                    <h3>Catan - UX Audit</h3>
                </a>
            </div>

            <!-- Project 5-->
            <div class="project">
                <a href="Spotify.html">
                    <img src="/Images/spotify.png" class="project-image" alt="spotify">
                    <h3>Spotify - Nouvelle fonctionnalité</h3>
                </a>
            </div>
            
            <!-- Project 6-->
             <div class="project">
                <a href="Parents.html">
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


    <div id="footer-placeholder" data-footer-type="white"></div>

    <script src="script.js?=v2"></script>
    
</body>
</html>