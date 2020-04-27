<?php
include ("Module.php");
include ("Cursus.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Main Cursus</title>
</head>
<body class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            Création modules.
        </div>
        <div class="panel-body">
            <?php
                $mod1 = new Module('LO07', 'Technologies du Web', 'TM', 140);
                $mod2 = new Module('LO09', 'Construction d\'applications réparties', 'TM', 24);
                echo $mod1->__toString() . '<br>';
                echo $mod2->__toString();
            ?>
        </div>
    </div>
    <div class="panel panel-success">
        <div class="panel-heading">
            Création et affichage cursus.
        </div>
        <div class="panel-body">
            <?php
            $curs = new Cursus();
            $curs->addModule($mod1);
            $curs->addModule($mod2);
            echo $curs->affiche();
            ?>
        </div>
    </div>
</body>
</html>
