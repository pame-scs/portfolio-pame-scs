<?php require_once("traduction/trad.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pamela Castaneda Portfolio</title>
    <link rel="icon" href="assets/favicon.png" type="image/png">
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php include "php/nav.php" ?>
    <main class="project-page">
        <h1><?php echo $TRAD["memoire-master-title"] ?></h1>
        <p><?php echo $TRAD["memoire-master-desc"] ?></p>
        <section>
            <h2><?php echo $TRAD["memoire-master-research-question"] ?></h2>
            <p class="abstract"><?php echo $TRAD["memoire-master-abstract"] ?></p>
        </section>
        <section>
            <h2><?php echo $TRAD["used-tech"] ?></h2>
            <div class="skills">
                <div class="skill-item">
                    <img src="assets/html.png" alt="HTML logo">
                    <p>HTML</p>
                </div>
                <div class="skill-item">
                    <img src="assets/css.png" alt="CSS logo">
                    <p>CSS</p>
                </div>
                <div class="skill-item">
                    <img src="assets/js.png" alt="JavaScript logo">
                    <p>JavaScript</p>
                </div>
                <div class="skill-item">
                    <img src="assets/R.png" alt="R logo">
                    <p>R</p>
                </div>
                <div class="skill-item">
                        <img src="assets/pavlovia.png" alt="Pavlovia logo">
                        <p>Pavlovia</p>
                </div>
                <div class="skill-item">
                    <img src="assets/overleaf.jpg" alt="Overleaf logo">
                    <p>Overleaf</p>
                </div>
                <div class="skill-item">
                    <img src="assets/canva.png" alt="Canva logo">
                    <p>Canva</p>
                 </div>
            </div>
        </section>
        <section>
            <h2><?php echo $TRAD["galery"] ?></h2>
            <div class="galery">
                <img src="assets/project-8/memoir-1.png" alt="memoir-1">
                <img src="assets/project-8/memoir-2.png" alt="memoir-2">
                <img src="assets/project-8/memoir-3.png" alt="memoir-3">
            </div>
        </section>
    </main>
    <?php include "php/footer.php" ?>
    <script src="script.js"></script>
</body>

</html>