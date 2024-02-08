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

<main id="detail-oeuvre">
<?php
    // Récupérer ID présent dans l'URL
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $oeuvre_id = $_GET['id'];
        
        // Inclusion du tableau d'oeuvres
        include('oeuvres.php');

        // Rechercher l'oeuvre avec ID correspondant
        $selected_oeuvre = null;
        $oeuvres_count = count($oeuvres);
        for ($i = 0; $i < $oeuvres_count; $i++) {
            if ($oeuvres[$i]['id'] == $oeuvre_id) {
                $selected_oeuvre = $oeuvres[$i];
                break;
            }
        }

       // Si l'oeuvre est trouvée, affichez les détails
if ($selected_oeuvre) {
    echo '<div id="img-oeuvre">';
    echo '<img src="' . $selected_oeuvre['image'] . '" alt="' . $selected_oeuvre['alt'] . '">';
    echo '</div>';
    
    echo '<div id="contenu-oeuvre">';
    echo '<h1>' . $selected_oeuvre['titre'] . '</h1>';
    echo '<p class="description">' . $selected_oeuvre['description'] . '</p>';
    echo '<p class="description-complete">' . $selected_oeuvre['description-complete'] . '</p>';
    echo '</div>';

} else {
    // Si l'oeuvre n'est pas trouvée, affichez un message d'erreur
    echo '<p>Aucune oeuvre trouvée avec cet identifiant.</p>';
}
    } else {
        // Si aucun ID n'est passé, affichez un message d'erreur
        echo '<p>Aucun identifiant d\'oeuvre fourni.</p>';
    }
?>

</main>

<?php include('footer.php'); ?>

</body>
</html>
