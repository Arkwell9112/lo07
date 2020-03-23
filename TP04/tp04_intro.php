<?php
    $attributes = array(
        'Nom' => 'Edouard',
        'Prénom' => 'Bergé',
        'Age' => 20,
        'Ingénieur' => false
    );

    function badge_danger($label, $count){
        return '<button class="btn btn-danger" type="button">'.$label.'<span class="badge">'.$count.'</span>'.'</button>';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LO07 TP04 Intro PHP</title>
        <link rel="stylesheet" href="../tp03/css/bootstrap.css">
    </head>
    <body class="container" style="margin-top: 80px">
    <nav class="navbar-inverse navbar-fixed-top">
        <a class="navbar-brand" >Module LO07</a>
        <ul class="nav navbar-nav">
            <li><a href="#2">Exercice 2</a></li>
            <li><a href="#3">Exercice 3</a></li>
            <li><a href="#4">Exercice 4</a></li>
            <li><a href="#5">Exercice 5</a></li>
        </ul>
    </nav>
            <div class="panel panel-success" id="2">
                <h2 class="panel-heading">Exercice 2</h2>
                <div class="panel-body">
                    <ul class="list-group">
                        <?php
                        foreach($attributes as $key => $attribute){
                            echo '<li class="list-group-item">'.$key.' = '.$attribute.'</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <?php
            $capitales = array(
                'Pretoria',
                'Alger',
                'Cotonou',
                'Gaborone',
                'Ouagadougou',
                'Bujumbura',
                'Yaoundé',
                'Bangui',
                'Moroni',
                'Yamoussoukro'
            );

            $capitales[] = 'Maputo';
            unset($capitales[4]);
            ?>
    <div class="panel panel-success" id="3">
        <h2 class="panel-heading">Exercice 3</h2>
        <div class="panel-body">
            <pre>
                <?php
                print_r($capitales);
                ?>
            </pre>
        </div>
    </div>
            <div class="panel panel-success">
                <h2 class="panel-heading">Exercice 3-2</h2>
                <div class="panel-body">
            <ul class="list-group">
                <?php
                foreach ($capitales as $city){
                    echo '<li class="list-group-item">'.$city.'</li>';
                }
                ?>
            </ul>
                </div>
            </div>
            <div class="panel panel-success">
                <h2 class="panel-heading">Exercice 3-3</h2>
                    <p class="panel-body">
                        <?php
                            echo implode(' ; ', $capitales);
                        ?>
                    </p>
                <h2 class="panel-title">Nb</h2>
                <div class="panel-body">Nombre : <?php echo count($capitales); ?></div>
                <h2 class="panel-title">Liste trièe</h2>
                <div class="panel-body"><?php sort($capitales); print_r($capitales); ?></div>
            </div>
            <?php
            $capitalesE = array(
              'France' => 'Paris',
              'Italie' => 'Rome',
              'Belgique' => 'Bruxelles',
              'Espagne' => 'Madrid',
              'Allemagne' => 'Berlin',
                'Portugal' => 'Lisbonne'
            );
            ?>
            <div class="panel panel-success" id="4">
                <h2 class="panel-heading">Exercice 4</h2>
                <div class="panel-body">
                    <ul class="list-group">
                        <?php
                        foreach ($capitalesE as $keys => $city){
                            echo '<li class="list-group-item"> '.$keys.' = '.$city.'</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="panel panel-success" id="5">
                <h2 class="panel-heading">Exercice 5</h2>
                <div class="panel-body">
                        <?php
                        foreach ($capitales as $city){
                            $nb = strlen($city);
                            $string = badge_danger($city, $nb);
                            echo $string;
                        }
                        ?>
                </div>
            </div>
    </body>
</html>
