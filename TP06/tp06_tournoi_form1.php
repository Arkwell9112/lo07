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
            Formulaire numéro 1 de l'éxercice numéro 3
        </div>
        <div class="panel-body">
            <?php
            form_begin('', 'get', 'tp06_tournoi_form2.php');
            $values = array();
            for($i = 2; $i <=5; $i++){
                $values[$i] = $i;
            }
            form_select('Nombre de Joueurs', 'nbPlayer', '', $values, 1);
            form_input_reset('Remettre à zéro');
            form_input_submit('Envoyer le formulaire');
            form_end();
            ?>
        </div>
    </div>
</body>
</html>
