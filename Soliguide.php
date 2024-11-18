<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camille's Portfolio</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />


    <script>
        function loadHTML(elementId, file) {
            fetch(file)
                .then(response => response.text())
                .then(data => {
                    document.getElementById(elementId).innerHTML = data;
                })
                .catch(error => console.error('Error loading file:', error));
        }
    </script>
    
    
</head>

<body>
    
    <?php require_once(__DIR__ . '/navbar.php'); ?>

    
    <header class="intro">
        <h1>Soliguide</h1>
        <h2>Site web d'aide au retour à l'emploi </h2>
        <img src="Images/soliguide.png" alt="Soliguide Image" class="project-image">
    </header>

    <section class="case-study">
        <h2>Réalisations</h2>
        <p>Provide a brief overview of the project, including the context and objectives.</p>
        
        <h2>Outils</h2>
        <p>Describe the problem you aimed to solve with this project.</p>

        <h2>Aperçu du site</h2>
        <p>Outline the research methods used (e.g., user interviews, surveys) and summarize key findings.</p>
        
        <div class="image-gallery">
            <div class="image-item">
                <p>Page d'accueil</p>
                <img src="homepage.png" alt="Description of image 1" class="site-image">
            </div>
            <div class="image-item">
                <p>Questionnaire</p>
                <img src="test.png" alt="Description of image 2" class="site-image">
            </div>
            <div class="image-item">
                <p>Page mission</p>

                <img src="mission.png" alt="Description of image 3" class="site-image">
            </div>
            <div class="image-item">
                <p>Page formations</p>

                <img src="cards.png" alt="Description of image 4" class="site-image">
            </div>
            <div class="image-item">
                <p>Page équipe</p>

                <img src="equipe.png" alt="Description of image 5" class="site-image">
            </div>
        </div>
        
        <!-- Button to read the next case study -->
    <div class="button-container">
        <a href="next-case-study.html"
        class="next-case-study-button">Lire le prochain case study</a>
    </div>

    </section>

    <div id="footer"></div> <!-- This is where the footer will be loaded -->



    <a href="#" class="back-to-top" id="backToTopButton">
        <i class="bi bi-arrow-up"></i> <!-- Use an appropriate icon for the arrow -->
    </a>


    <script src="script.js"></script>

    <?php require_once(__DIR__ . '/footer.php'); ?>

</body>

</html>
