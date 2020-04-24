<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.css">
    <title>TP07 Hidden 2</title>
</head>
<body class="container">
    <div class="panel-success panel">
        <div class="panel-heading">
            URL
        </div>
        <div class="panel-body">
            <?php
            $return = '?';
            foreach ($_GET as $keys => $values){
                $return = $return . $keys . '=' . $values . '&';
            }
            ?>
            <a href="printglobal.php<?php echo $return ?>">La suite est par ici</a>
        </div>
    </div>
</body>
</html>