<?php
include './array.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <?php echo $navBar; ?>

    <div class="container">
        <?php
        foreach ($students as $s) {
            echo "
            <table class='table table-bordered'>
            <thead>
                <tr>
                    {$s['name']} 
                
                </tr>
                <tr class='table-light'>
                    <th scope='col'>date </th>
                    <th scope='col'>In</th>
                    <th scope='col'>Out</th>
                    <th scope='col'>Time</th>
                </tr>
            </thead>

            <tbody>";
            foreach ($s['attendance'] as $day) {
                $In = GetTime($day["cIn"]);
                $Out = GetTime($day["cOut"]);
                $duration = ($Out['dur'] - $In['dur']);
                if ($duration < 421) {
                    $class = 'table-danger';
                } else {
                    $class = 'table-success';
                }
                $dDuration = ceil($duration / 60) . ':' . round(strstr($duration / 60, '.') * 60);
                echo " <tr class={$class}>
                    <th scope='row'>{$In['date']}</th>
                    <td>{$In['time']}</td>
                    <td>{$Out['time']}</td>
                    <td>{$dDuration}</td>
                   </tr>";
            }
            echo "</tbody></table>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>