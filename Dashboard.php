<?php
include './array.php';
$s = $students;
$arr =  ProjectsCount($s);
$studentCom = $arr['sPro'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="./Dashboard.css">

    <title>Document</title>
</head>

<body>
    <?php echo $navBar; ?>
    <div class="container">
        <div class="cer">

            <div class=" Circle StudentNumber">
                <p>
                    Total students <br>
                    <?php echo count($s) ?>
                </p>
            </div>
            <div class=" Circle Projects">
                <p>
                    completed projects
                    <?php
                    echo $arr['completed'] . '/' . $arr['total']; ?>
                </p>
            </div>
        </div>

        <?php
        echo "
            <table class='table table-bordered'>
            <thead>
                    <tr class='table-light'>
                    <th scope='col'>ID </th>
                    <th scope='col'>Name</th>
                    <th scope='col'>Completed projects</th>
                </tr>
            </thead>

            <tbody>";
        foreach ($students as $st) {

            echo " <tr >
                    <th scope='row'>{$st['id']}</th>
                    <td>{$st['name']}</td>
                    <td>{$studentCom[$st['name']]}</td>
                   </tr>";
        }

        echo "</tbody></table>";
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>