<?php
include './array.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="./galary.css">

    <title>Document</title>
</head>

<body>
    <?php echo $navBar; ?>
    <div class="container">
        <div class="gallery">
            <?php
            foreach ($students as $s) {
                echo "
       <div class='img'><img src='{$s['image']}' alt='pic' /></div>
       ";
            }

            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>