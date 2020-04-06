<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Print GLOBAL Script</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body class="container">
    <?php

    $base = '
        <div class="panel panel-success">
            <div class="panel-heading">
                Présentons la super-variable GET
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th scope="col">Nom valeur</th>
                        <th scope="col">Valeur</th>
                    </thead>
                    <tbody>
                        &here&
                    </tbody>
                </table>
            </div>
        </div>
        ';

    $pieces = '
        <tr>
            <td>&name&</td>
            <td>&valeur&</td>
        </tr>
    ';

    if(isset($_GET) && count($_GET) > 0){
        $inner = '';
        foreach ($_GET as $keys => $values){
            if(gettype($values) != 'string'){
                $values = implode(', ', $values);
            }
            $current = str_replace('&name&', $keys, $pieces);
            $current = str_replace('&valeur&', $values, $current);
            $inner = $inner . $current;
        }

        echo str_replace('&here&', $inner, $base);
    }

    if(isset($_POST) && count($_POST) > 0){

        $inner = '';
        foreach ($_POST as $keys => $values){
            if(gettype($values) != 'string'){
                $values = implode(', ', $values);
            }
            $current = str_replace('&name&', $keys, $pieces);
            $current = str_replace('&valeur&', $values, $current);
            $inner = $inner . $current;
        }
        $base = str_replace('GET', 'POST', $base);
        echo str_replace('&here&', $inner, $base);
    }
    ?>
</body>
</html>
