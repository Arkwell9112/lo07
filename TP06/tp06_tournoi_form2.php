<?php include('tp06_biblio_formulaire_bt.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body class="container">
<div class="panel-success">
    <div class="panel-heading">
        Formulaire numéro 2 de l'éxercice numéro 3
    </div>
    <div class="panel-body">
        <?php
        form_begin('', 'get', 'tp06_tournoi_action.php');
        for ($i = 1; $i <= $_GET['nbPlayer']; $i++) {
            echo "<div class='form-group'>";
            form_text('Nom Joueur ' . $i, 'nameplayer' . $i, '10', '');
            form_text('Prénom Joueur ' . $i, 'surnameplayer' . $i, '10', '');
            form_text('Mail Joueur ' . $i, 'mailplayer' . $i, '10', '');
            echo "</div><br><br>";
        }
        form_input_reset('Remettre à zéro');
        form_input_submit('Envoyer le formulaire');
        form_end();
        ?>
    </div>
</div>
</body>
</html>
