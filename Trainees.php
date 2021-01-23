<?php
include 'array.php';

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
    <style>
        .row {
            align-items: center;
            justify-content: center;
        }

        .fab {
            font-size: 1.3rem;
            margin: 0 5px;
        }
    </style>
</head>

<body>
    <?php echo $navBar; ?>

    <div class="container">
        <div class="row">

            <?php

            foreach ($students as $s) {


                echo "<div class='card' style='width: 18rem;  '>
                        <div class='img'  style='height: 10rem; overflow: hidden; display: grid;  place-items: center;' >
                        <img src={$s['image']} class='card-img-top' alt='...'>
                        </div>
                        <div class='card-body'>
                         <h5 class='card-title'>{$s['name']}</h5>
                         <p class='card-text'>
                         <a href={$s['github']} target='_blank' ><i class='fab fa-github-square'></i></a>
                         <a href={$s['linkedin']} target='_blank' ><i class='fab fa-linkedin'></i></a>
                         
                         </p>
                          <a href='http://localhost/learnPHP/PHP---Mini-Project/Profile/{$s['id']}.php' class='btn btn-primary'>Profile</a>
                        </div>
                </div>
                    ";
            };

            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>