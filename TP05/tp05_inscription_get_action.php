<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PHP Script printer</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            Tableau affichant les entrées du formulaire (sans foreach).
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <th scope="col">Nom</th>
                    <th scope="col">Valeur</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Nom</td>
                        <td><?php echo $_GET['nom']; ?></td>
                    </tr>
                    <tr>
                        <td>Prénom</td>
                        <td><?php echo $_GET['prenom']; ?></td>
                    </tr>
                    <tr>
                        <td>Mail</td>
                        <td><?php echo $_GET['mail']; ?></td>
                    </tr>
                    <tr>
                        <td>Date de naissance</td>
                        <td><?php echo $_GET['date']; ?></td>
                    </tr>
                    <tr>
                        <td>Sexe</td>
                        <td><?php if(isset($_GET['sexe'])){
                                echo $_GET['sexe'];
                            }
                            ?></td>
                    </tr>
                    <tr>
                        <td>Origine</td>
                        <td><?php echo $_GET['etu']; ?></td>
                    </tr>
                    <tr>
                        <td>ST07</td>
                        <td><?php if(isset($_GET['stage']) && in_array('ST07', $_GET['stage'])){
                                echo 'OUI';
                            } else {
                                echo 'NON';
                            }
                        ?></td>
                    </tr>
                    <tr>
                        <td>ST09</td>
                        <td><?php if(isset($_GET['stage']) && in_array('ST09', $_GET['stage'])){
                                echo 'OUI';
                            } else {
                                echo 'NON';
                            }
                            ?></td>
                    </tr>
                    <tr>
                        <td>ST10</td>
                        <td><?php if(isset($_GET['stage']) && in_array('ST10', $_GET['stage'])){
                                echo 'OUI';
                            } else {
                                echo 'NON';
                            }
                            ?></td>
                    </tr>
                    <tr>
                        <td>SE</td>
                        <td><?php if(isset($_GET['stage']) && in_array('SE', $_GET['stage'])){
                                echo 'OUI';
                            } else {
                                echo 'NON';
                            }
                            ?></td>
                    </tr>
                    <tr>
                        <td>Modules</td>
                        <td><?php if(isset($_GET['mods'])){
                            echo implode(', ', $_GET['mods']);
                            }
                            ?></td>
                    </tr>
                    <tr>
                        <td>Informations complémentaires</td>
                        <td><?php echo $_GET['infos']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
