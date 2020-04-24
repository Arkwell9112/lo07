<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.css">
    <title>TP07 Session</title>
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

<?php
session_start();
$_SESSION['isi'] = 'Informatique et systèmes d\'information';
$_SESSION['liste'] = array('ISI', 'RT', 'GI', 'GM', 'MTE');
?>
