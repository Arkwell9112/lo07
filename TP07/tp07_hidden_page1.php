<?php
include ("tp06_biblio_formulaire_bt.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.css">
    <title>TP07 Hidden 1</title>
</head>
<body class="container">
    <div class="panel-success panel">
        <div class="panel-heading">
            Bouton 1
        </div>
        <div class="panel-body">
            <form method="get" action="tp07_hidden_page2.php">
                <?php
                input_hidden('ville', 'Troyes');
                input_hidden('effectif', '3000');
                ?>
                <button type="submit" class="btn btn-success">UTT</button>
            </form>
        </div>
    </div>
    <div class="panel-success panel">
        <div class="panel-heading">
            Bouton 2
        </div>
        <div class="panel-body">
            <form method="get" action="tp07_hidden_page2.php">
                <?php
                input_hidden('ville', 'Compiègne');
                input_hidden('effectif', '3200');
                ?>
                <button type="submit" class="btn btn-success">UTC</button>
            </form>
        </div>
    </div>
    <div class="panel-success panel">
        <div class="panel-heading">
            Bouton 3
        </div>
        <div class="panel-body">
            <form method="get" action="tp07_hidden_page2.php">
                <?php
                input_hidden('ville', 'Belfort');
                input_hidden('effectif', '3100');
                ?>
                <button type="submit" class="btn btn-success">UTBM</button>
            </form>
        </div>
    </div>
</body>
</html>
