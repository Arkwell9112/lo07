<!DOCTYPE html>
<?php
require ('tp06_biblio_planning.php');
include ('tp06_biblio_formulaire_bt.php');
$titre = "Formulaire pour le planning des soutenances TP06";
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.css" rel="stylesheet"/>
    <title><?php echo $titre; ?></title>
</head>
<body>
<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $titre; ?></h3>
        </div>
    </div>
    <?php
    form_begin("lo07", "get", "tp06_planning_action.php");
    form_select("JourLabel", "jourlabel", '',listeJourLabel(), 5);
    form_select("JourIndice", "jourIndice", '',listeJourIndice(), 5);
    form_select("Mois", "mois", '',listeMois(), 3);
    form_select("Séance", "seance", 'multiple', listeSeance(), 6);
    form_input_reset("effacer");
    form_input_submit("envoyer");
    form_end();
    ?>
</div>

</body>
</html>




