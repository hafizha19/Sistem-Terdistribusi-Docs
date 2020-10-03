<?php

include 'curl.php';

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>RM Clothes</title>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg sticky-top" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="https://raw.githubusercontent.com/hafizha19/Product-Landing-Page/master/images/logo.png" style="max-width: 50px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="#">Menu</a>
                    <a class="nav-item nav-link" href="#">Gamis</a>
                    <a class="nav-item nav-link active" href="#">Jilbab</a>
                    <a class="nav-item nav-link" href="#">Rok</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-4 align-items-center justify-content-center">
            <h4>Semua <span id="category">Items</span></h4>
        </div>
        <hr>
    </div>

    <!-- list -->
    <div class="mt-4 container-fluid row justify-content-center" id="list">
    </div>

    <div class="sosmed p-5 mt-2" id="sosmed" style="background-color: #e3f2fd;">
        <div class="container">
            <div class="row justify-content-center my-3">
                <h5>Follow Our Instagram and get Daily Discount Information</h5>
            </div>
            <div class="row justify-content-around mt-5">
                <div class="col-md-1">
                    <img src="<?php echo $foto ?>" alt="" width="100" class="rounded-circle">
                </div>
                <div class="col-md-2 ml-4 justify-content-between">
                    <b>@<?php echo $username ?></b>
                    <p>Followers: <?php echo $followers ?></p>
                    <button class="btn btn-md btn-light">Follow</button>
                </div>
                <?php foreach (array_slice($resultPosts, 0, 4) as $post) {
                ?>
                    <div class="col-md-2">
                        <img src="<?php echo $post['media_url'] ?>" alt="" class="img-fluid">
                    </div>

                <?php
                } ?>
            </div>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

    <script src="script.js"></script>
</body>

</html>