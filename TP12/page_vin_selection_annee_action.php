<?php
include("fragmentCaveHeader.html");
include("PDOManager.php");
?>
    <body class="container">
<?php
include("fragmentCaveMenu.html");
$bdd = PDOManager::panel_head("Connexion à lo07_2020", true);
if (isset($_GET['annee'])) {
    if ($bdd) {
        try{
            $request = $bdd->prepare("SELECT * FROM vin WHERE annee=:value");
            $request->execute(array(
                'value' => $_GET['annee']
            ));
            include("fragmentVinResultats.php");
        } catch (Exception $e){
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
}
include("fragmentCaveFooter.html");
?>