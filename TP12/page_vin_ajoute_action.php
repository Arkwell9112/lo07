<?php
include("fragmentCaveHeader.html");
include("PDOManager.php");
?>
<body class="container">
<?php
include("fragmentCaveMenu.html");
$bdd = PDOManager::panel_head("Connexion à lo07_2020", true);
if (isset($_GET['cru']) && isset($_GET['year']) && isset($_GET['degree'])) {
    if ($bdd && preg_match("#^[0-9]{4}$#", $_GET['year']) && preg_match("#^[0-9]{1,2}(\.[0-9]{1,2})?$#", $_GET['degree'])) {
        try {
            $request = $bdd->prepare("INSERT INTO vin VALUES (0, :cr, :year, :deg)");
            $request->execute(array(
                'cr' => $_GET['cru'],
                'year' => $_GET['year'],
                'deg' => $_GET['degree']
            ));
            echo
            "
            <div class='panel panel-success'>
                <div class='panel-heading'>
                    Votre vin a bien été ajouté à la base de donnée.
                </div>
                <div class='panel-body'>
                    Opération réussie.
                </div>
            </div>
            ";
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
    } else {
        echo
        "
            <div class='panel panel-danger'>
                <div class='panel-heading'>
                    Une erreur est survenue.
                </div>
                <div class='panel-body'>
                    Les données ne sont pas au bon format.
                </div>
            </div>
            ";
    }
}
?>

<?php include("fragmentCaveFooter.html") ?>

