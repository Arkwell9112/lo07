<?php
include("fragmentCaveHeader.html");
include("PDOManager.php");
?>
<body class="container">
<?php
include("fragmentCaveMenu.html");
$bdd = PDOManager::panel_head("Connexion à lo07_2020", true);
include("tp06_biblio_formulaire_bt.php") ?>
<div class="panel panel-info">
    <div class="panel-heading">
        Complétez le formulaire pour ajouter un nouveau vin.
    </div>
    <div class="panel-body">
        <?php
        form_begin("", "get", "page_vin_ajoute_action.php");
        form_text("Nom du cru", "cru", 0, "");
        form_text("Année du cru", "year", 0, "");
        form_text("Degré du cru", "degree", 0, "");
        form_input_submit("Envoyer !");
        form_end();
        ?>
    </div>
</div>
<?php include("fragmentCaveFooter.html") ?>

