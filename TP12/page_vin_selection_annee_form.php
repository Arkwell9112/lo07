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
        Choisissez une année à afficher.
    </div>
    <div class="panel-body">
        <?php
        if ($bdd) {
            try {
                $request = $bdd->prepare("SELECT DISTINCT annee FROM vin ORDER BY annee");
                $request->execute();
                $result = $request->fetchAll();
                $selection = array();
                for ($i = 0; $i <= count($result) - 1; $i++) {
                    $year = $result[$i]["annee"];
                    $selection["$year"] = $year;
                }

                form_begin('', 'get', 'page_vin_selection_annee_action.php');
                form_select("Année du cru", "annee", "", $selection, 0);
                form_input_submit("Envoyer !");
                form_end();
            } catch (Exception $e) {
                $error = $e->getMessage();
                echo
                "
                <div class='panel panel-danger'>
                    <div class='panel-heading'>
                        Une erreur est survenue.
                    </div>
                    <div class='panel-body'>
                        $error
                    </div>
                </div>
            ";
            }
        }
        ?>
    </div>
</div>
<?php include("fragmentCaveFooter.html") ?>
