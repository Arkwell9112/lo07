<?php
include ("Module.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Présentation du module instancié</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            Voici le module :
        </div>
        <div class="panel-body">
            <?php
                if(isset($_GET['sigle']) && isset($_GET['label']) && isset($_GET['cat']) && isset($_GET['eff'])){
                    $mod = new Module($_GET['sigle'], $_GET['label'], $_GET['cat'], $_GET['eff']);
                    echo $mod->sauveTXT() . '<br>';
                    echo $mod->sauveBDR('modules');
                    echo $mod->createTable('Tableau du module');
                }
            ?>
        </div>
    </div>
</body>
</html>
