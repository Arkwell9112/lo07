<?php
setcookie('utt', 'Troyes');
setcookie('utseus', 'Shanghai');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.css">
    <title>TP07 Cookie</title>
</head>
<body class="container">
    <div class="panel-success panel">
        <div class="panel-heading">
            Lien vers la suite
        </div>
        <div class="panel-body">
            <a href="printglobal.php">Next</a>
        </div>
    </div>
</body>
</html>

<!-- Le script ne fonctionne pas car des données d'entête html sont envoyé après la fermeture de celui-ci (présence d'un setcookie après
 le début de code html)-->
