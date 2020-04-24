<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Print GLOBAL Script</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body class="container">
    <?php
    session_start();
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
        $base2 = str_replace('GET', 'POST', $base);
        echo str_replace('&here&', $inner, $base2);
    }

    if(isset($_COOKIE) && count($_COOKIE) > 0){

        $inner = '';
        foreach ($_COOKIE as $keys => $values){
            if(gettype($values) != 'string'){
                $values = implode(', ', $values);
            }
            $current = str_replace('&name&', $keys, $pieces);
            $current = str_replace('&valeur&', $values, $current);
            $inner = $inner . $current;
        }
        $base3 = str_replace('GET', 'COOKIE', $base);
        echo str_replace('&here&', $inner, $base3);
    }

    if(isset($_SESSION) && count($_SESSION) > 0){

        $inner = '';
        foreach ($_SESSION as $keys => $values){
            if(gettype($values) != 'string'){
                $values = implode(', ', $values);
            }
            $current = str_replace('&name&', $keys, $pieces);
            $current = str_replace('&valeur&', $values, $current);
            $inner = $inner . $current;
        }
        $base4 = str_replace('GET', 'SESSION', $base);
        echo str_replace('&here&', $inner, $base4);
    }
    ?>
</body>
</html>
