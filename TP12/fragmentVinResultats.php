<div class="panel panel-success">
    <div class="panel-heading">
        Voici tous les vins que nous avons en cave.
    </div>
    <div class="panel-body">
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
