<?php
include '../array.php';
$s = $students[8];
$pro = $s['projects'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../bootstrap.min.css">


    <title>Profile</title>
</head>

<body>
    <?php echo $navBar; ?>

    <div class="container" style="min-height: 100vh;">
        <div class="row">
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row container d-flex justify-content-center">
                        <div class="col-xl-6 col-md-12">
                            <div class="card user-card-full">
                                <div class="row m-l-0 m-r-0">
                                    <div class="col-sm-4 bg-c-lite-green user-profile">
                                        <div class="card-block text-center text-white">
                                            <div class="m-b-25 "> <img src=<?php echo '.' . $s['image']; ?> class="img-radius imageProf" alt="User-Profile-Image"> </div>
                                            <h6 class="f-w-600"><?php echo $s['name']; ?></h6>
                                            <p>Web Developer</p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card-block">
                                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Birthday</p>
                                                    <h6 class="text-muted f-w-400"><?php echo $s['birthday']; ?></h6>
                                                </div>
                                            </div>
                                            <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6>
                                            <div class="row">
                                                <?php
                                                foreach ($pro as $p) {
                                                    echo "
                                                    <div class='col-sm-6'>
                                                    <p class='m-b-10 f-w-600'> {$p['PName']}</p>
                                                    <h6 class='text-muted f-w-400'>{$p['isCom']}</h6>
                                                </div>
                                                 ";
                                                };
                                                ?>


                                            </div>
                                            <ul class="social-link list-unstyled m-t-40 m-b-10">
                                                <li><a href=<?php echo "{$s['github']}"; ?> data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" target='_blank' data-abc="true"><i class="fab fa-github-square" aria-hidden="true"></i></a></li>
                                                <li><a href=<?php echo "{$s['linkedin']}"; ?> data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" target='_blank' data-abc="true"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>