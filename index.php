<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille's Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    
   
</head>

<body>

    <?php require_once(__DIR__ . '/navbar.php'); ?>

     <!-- Name and Description Section -->
     <section class="intro">
        <h1>Camille Mennesson</h1>
        <p>UX/UI Designer Freelance depuis 3 ans.</p>
        <p>J'ai travaillé pendant 5 ans avec des équipes tech
            internationales et multidisciplinaires.</p>
        <p  >Je code aussi un peu ! <i>D'ailleurs, j'ai développé
            ce site 'from scratch' (avec un peu d'aide de l'IA..)</i></p>

    </section>

    <div class="h2-intro">
            <i class="bi bi-arrow-down-circle"></i>
            <p>Découvrir mes projets</p>
    </div>

    <section id="Work">
    
        <div class="work-flex">

            <!-- Project 1 -->
            <div class="project">
                <a  href="mavoie.php">
                <img src="/Images/mavoie.png" class="project-image">
                <h3>MaVoie.org - Web Design</h3>
            </a>
            </div>

            <!-- Project 2-->
            <div class="project">
            <a href="Soliguide.html">
                <img src="/Images/soliguide.png" class="project-image">
                <h3>Soliguide - App Mobile</h3>
            </a>
            </div>

            <!-- Osmia-->
            <div class="project">
                <a href="Osmia.html">
                    <img src="/Images/osmia.png" class="project-image">
                    <h3>Osmia - Web Design</h3>
                </a>
            </div>

            <!-- Catan-->
            <div class="project">
                <a href="Catan.html">
                    <img src="/Images/catan3.png"
                        class="project-image"
                        alt="Catan">
                    <h3>Catan - Audit UX</h3>
                </a>
            </div>

            <!-- Project 5-->
            <div class="project">
                <a href="Spotify.html">
                <img src="/Images/spotify.png" class="project-image">
                <h3>Spotify - Nouvelle fonctionnalité</h3>
            </a>
            </div>
            
            <!-- Project 6-->
             <div class="project">
                <a href="Parents.html">
            <img src="/Images/parents.png" class="project-image">
            <h3>Parents - App Mobile</h3>
        </a>
            </div>

        </div>
    </section>

    <script>
        // Replace 'data.json' with the path to your JSON file
        fetch('button-hover-effect.json')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.json();
            })
            .then(data => {
                const container = document.getElementById('data-container');
                container.innerHTML = JSON.stringify(data, null, 2); // Display JSON data
            })
            .catch(error => {
                console.error('There has been a problem with your fetch operation:', error);
            });
    </script>

    <section>
        <div class="contact">
            <h2>Me contacter</h2>
            <a class="button" href="mailto:camille.mennesson@gmail.com">Envoyer un email</a>
        </div>
    </section>    

    <?php require_once(__DIR__ . 'footer.php'); ?>

     <script src="/script.js"></script>
     
</body>
</html>