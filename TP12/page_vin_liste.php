<?php
include("PDOManager.php");
include("fragmentCaveHeader.html");
?>
<body class="container">
<?php
include("fragmentCaveMenu.html");
$bdd = PDOManager::panel_head("Connexion lo07_2020", true);
if ($bdd) {
    try {
        $request = $bdd->prepare("SELECT * FROM vin");
        $request->execute();
        include("fragmentVinResultats.php");
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

