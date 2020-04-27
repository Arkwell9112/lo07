<?php
include ("tp06_biblio_formulaire_bt.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire création d'un module</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            Entrez les informations ici.
        </div>
        <div class="panel-body">
            <?php
            form_begin('', 'get', 'cursus_action.php');
            form_text('Sigle', 'sigle', 4, '');
            form_text('Label', 'label', 20, '');
            $selection = array(
                'CS' => 'CS',
                'TM' => 'TM',
                'EC' => 'EC',
                'ME' => 'ME',
                'CT' => 'CT'
            );
            form_select('Catégorie', 'cat', '', $selection, 6);
            form_text('Effectif', 'eff', 5, '');
            form_input_submit('Envoyez le formulaire');
            form_end();
            ?>
        </div>
    </div>
</body>
</html>