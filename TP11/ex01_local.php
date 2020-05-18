<?php
function panel_head(String $title): Array
{
    $dsn = "mysql:host=localhost;port=3308;dbname=lo07_2020";
    $username = "root";
    $password = "11022000";
    $state = "";
    $back = array();

    try {
        $bdd = new PDO($dsn, $username, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $state = "Connexion réussie !";
        $back[] = $bdd;
    } catch (Exception $e) {
        $state = $e->getMessage();
    }

    $head = "
        <div class='panel panel-default'>
            <div class='panel-heading'>
                $title
            </div>
            <div class='panel-body'>
                Nom d'utilisateur : $username<br>
                Mot de passe : $password<br>
                DSN : $dsn<br>
                Retour : $state
            </div>
        </div>";
    $back[] = $head;
    return $back;
}

$heading = panel_head("Connexion local BDD lo07_2020 MYSQL");
$panelhead = $heading[1];
$bdd = $heading[0];
?>
<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <title>SQL TP11</title>
    <link rel='stylesheet' href='bootstrap.css'>
</head>
<body class='container'>
<?php echo $panelhead ?>
<div class="panel panel-success">
    <div class="panel-heading">
        Affichage requête : SELECT * FROM vin WHERE annee=1976
    </div>
    <div class="panel-body">
        <?php
        $request = $bdd->query("SELECT * FROM vin WHERE annee=1976");
        $request = $request->fetchALL();
        foreach ($request as $key => $value) {
            echo "$key. vin(" . $value['id'] . "," . $value['cru'] . "," . $value['annee'] . "," . $value['degre'] . ")<br>";
        }
        ?>
    </div>
</div>
<div class="panel panel-success">
    <div class="panel-heading">
        Affichage requête : INSERT INTO vin VALUES (1002, 'Champagne de Troyes', 2019, 11.45)
    </div>
    <div class="panel-body">
        <?php
        try {
            $request = $bdd->exec("INSERT INTO vin VALUES (1002, 'Champagne de Troyes', 2019, 11.45)");
        } catch (Exception $e) {
            $request = false;
        }
        if ($request == false) {
            $request = 0;
        }
        ?>
        Nombre de tuples ajoutés : <?php echo $request; ?>
    </div>
</div>
<div class="panel panel-success">
    <div class="panel-heading">
        Tableau auto-affichage : SELECT * FROM vin WHERE annee=1976
    </div>
    <div class="panel-body">
        <?php
        $request = $bdd->query("SELECT * FROM vin WHERE annee=1976");
        ?>
        <table class="table table-striped table-bordered">
            <thead>
            <?php
            for ($i = 0; $i <= $request->columnCount() - 1; $i++) {
                $current = $request->getColumnMeta($i)['name'];
                echo "<th scope='col'>$current</th>";
            }
            ?>
            </thead>
            <tbody>
            <?php
            $return = $request->fetchAll();
            foreach ($return as $value) {
                $string = "";
                for ($i = 0; $i <= count($value) / 2 - 1; $i++) {
                    $neo = $value[$i];
                    $string = $string . "<td>$neo</td>";
                }
                $string = "<tr>$string</tr>";
                echo $string;
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<div class="panel panel-success">
    <div class="panel-heading">
        Tableau auto-affichage : SELECT id,cru FROM vin WHERE annee=1976
    </div>
    <div class="panel-body">
        <?php
        $request = $bdd->query("SELECT id,cru FROM vin WHERE annee=1976");
        ?>
        <table class="table table-striped table-bordered">
            <thead>
            <?php
            for ($i = 0; $i <= $request->columnCount() - 1; $i++) {
                $current = $request->getColumnMeta($i)['name'];
                echo "<th scope='col'>$current</th>";
            }
            ?>
            </thead>
            <tbody>
            <?php
            $return = $request->fetchAll();
            foreach ($return as $value) {
                $string = "";
                for ($i = 0; $i <= count($value) / 2 - 1; $i++) {
                    $neo = $value[$i];
                    $string = $string . "<td>$neo</td>";
                }
                $string = "<tr>$string</tr>";
                echo $string;
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<div class="panel panel-success">
    <div class="panel-heading">
        Tableau auto-affichage : SELECT cru,annee FROM vin WHERE annee=? => 1980
    </div>
    <div class="panel-body">
        <?php
        $request = $bdd->prepare("SELECT cru,annee FROM vin WHERE annee=?");
        $request->execute(array(
            '0' => '1980'
        ));
        ?>
        <table class="table table-striped table-bordered">
            <thead>
            <?php
            for ($i = 0; $i <= $request->columnCount() - 1; $i++) {
                $current = $request->getColumnMeta($i)['name'];
                echo "<th scope='col'>$current</th>";
            }
            ?>
            </thead>
            <tbody>
            <?php
            $return = $request->fetchAll();
            foreach ($return as $value) {
                $string = "";
                for ($i = 0; $i <= count($value) / 2 - 1; $i++) {
                    $neo = $value[$i];
                    $string = $string . "<td>$neo</td>";
                }
                $string = "<tr>$string</tr>";
                echo $string;
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<div class="panel panel-success">
    <div class="panel-heading">
        Tableau auto-affichage : SELECT cru,annee FROM vin WHERE annee=:an and degre=:dg => an=1980 dg=10.0
    </div>
    <div class="panel-body">
        <?php
        $request = $bdd->prepare("SELECT cru,annee FROM vin WHERE annee=:an AND degre=:dg");
        $request->execute(array(
            'an' => '1980',
            'dg' => '10.0'
        ));
        ?>
        <table class="table table-striped table-bordered">
            <thead>
            <?php
            for ($i = 0; $i <= $request->columnCount() - 1; $i++) {
                $current = $request->getColumnMeta($i)['name'];
                echo "<th scope='col'>$current</th>";
            }
            ?>
            </thead>
            <tbody>
            <?php
            $return = $request->fetchAll();
            foreach ($return as $value) {
                $string = "";
                for ($i = 0; $i <= count($value) / 2 - 1; $i++) {
                    $neo = $value[$i];
                    $string = $string . "<td>$neo</td>";
                }
                $string = "<tr>$string</tr>";
                echo $string;
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<div class="panel panel-success">
    <div class="panel-heading">
        Gestion des erreurs
    </div>
    <div class="panel-body">
        <?php
        try {
            $request = $bdd->prepare("SELECT cru,annee FROM vinXYZ WHERE annee=:an AND degre=:dg");
            $request->execute(array(
                'an' => '1980',
                'dg' => '10.0'
            ));
            $error = false;
        } catch (Exception $e2) {
            $error = true;
            echo $e2->getMessage();
        }
        ?>
        <table class="table table-striped table-bordered">
            <thead>
            <?php
            if ($error == false) {
                for ($i = 0; $i <= $request->columnCount() - 1; $i++) {
                    $current = $request->getColumnMeta($i)['name'];
                    echo "<th scope='col'>$current</th>";
                }
            }
            ?>
            </thead>
            <tbody>
            <?php
            if ($error == false) {
                $return = $request->fetchAll();
                foreach ($return as $value) {
                    $string = "";
                    for ($i = 0; $i <= count($value) / 2 - 1; $i++) {
                        $neo = $value[$i];
                        $string = $string . "<td>$neo</td>";
                    }
                    $string = "<tr>$string</tr>";
                    echo $string;
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
    <div class="panel panel-success">
        <div class="panel-heading">
            Gestion des transactions. (Insert et commit suivis d'un select pour vérifier l'absence).
        </div>
        <div class="panel-body">
            <?php
                try {
                    $bdd->beginTransaction();
                    echo 'Premier<br>';
                    $request = $bdd->prepare("INSERT INTO vin VALUES (2000, 'Champagne de REIMS', 2019, 11.45)");
                    $request->execute();
                    echo 'Second<br>';
                    $request = $bdd->prepare("INSERT INTO vin VALUES (2000, 'Champagne de REIMS', 2019, 11.45)");
                    $request->execute();
                    echo 'Commit or not<br>';
                    $bdd->commit();
                } catch (Exception $e) {
                    $bdd->rollBack();
                    echo $e->getMessage();
                }
                $request = $bdd->prepare("SELECT * FROM vin WHERE id=2000");
                $request->execute();
                var_dump($request->fetchAll());
            ?>
        </div>
    </div>
</body>
</html>