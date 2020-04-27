<?php
include ("Module.php");
include ("Cursus2.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Action Cursus</title>
</head>
<body class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            Cursus :
        </div>
        <div class="panel-body">
            <?php
            if(isset($_GET['sigle']) && isset($_GET['label']) && isset($_GET['cat']) && isset($_GET['eff'])){
                $mod = new Module($_GET['sigle'], $_GET['label'], $_GET['cat'], $_GET['eff']);
                $curs = new Cursus2();
                $curs->addModule($mod);
                echo $curs->affiche();
            }
            ?>
        </div>
    </div>
</body>
</html>

<!-- Il n'y aura toujours qu'un seul module dans le cursus car à chaque chargement de la page un nouveau cursus est crée et complété avec le module en cours. -->
