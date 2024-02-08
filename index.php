<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<body>
    <?php include("header.php"); ?>

    <main>
        <div id="liste-oeuvres">
            <?php
            // Inclusion du tableau d'oeuvres
            include('oeuvres.php');

            // Boucle pour afficher toutes les vignettes
            foreach ($oeuvres as $oeuvre) {
                echo '<article class="oeuvre">';
                echo '<a href="oeuvre.php?id=' . $oeuvre['id'] . '">';
                echo '<img src="' . $oeuvre['image'] . '" alt="' . $oeuvre['titre'] . '">';
                echo '<h2>' . $oeuvre['titre'] . '</h2>';
                echo '<p class="description">' . $oeuvre['description'] . '</p>';
                echo '</a>';
                echo '</article>';
            }
            ?>
        </div>
    </main>

    <?php include('footer.php'); ?>
</body>

</html>
