<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">
  <title>RM Food</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img
          src="https://raw.githubusercontent.com/hafizha19/Product-Landing-Page/master/images/logo.png"
          style="max-width: 50px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active text-white" href="#">All Menu<span class="sr-only">(current)</span></a>
          <a class="nav-link text-white" href="#">Gamis</a>
          <a class="nav-link text-white" href="#">Jilbab</a>
          <a class="nav-link text-white" href="#">Rok</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- category -->
  <!-- <div class="row mt-3 justify-content-center text-center" id="category">
    <button class="btn btn-aku ml-3 align-items-center"><i class="fa fa-globe"> Gamis</i> </button>
    <button class="btn btn-aku ml-3 align-items-center"><i class="fas fa-ice-cream"> Jilbab</i> </button>
    <button class="btn btn-aku ml-3 align-items-center"><i class="fas fa-utensils"> Rok/Celana</i> </button>
  </div> -->

  <?php  

  $data = file_get_contents('data.json');
  $barang = json_decode($data, true);

  $barang = $barang["barang"];
  ?>

  <?php foreach($barang as $b) ?>
  <!-- list -->
  <div class="mt-3 container-fluid row justify-content-center" id="list">
    <?php foreach ($barang as $b) : ?>
    <div class="col-md-3">
      <div class="card">
        <img src="images/<?php echo $b['gambar'] ?>" class="card-img-top" alt="...">
        <div class="card-body col">
          <h5 class="card-title"><?php echo $b['nama'] ?></h5>
          <p class="card-text"><?php echo $b['deskripsi'] ?></p>
          <p><strong style="color: orange">Rp. </strong><?php echo $b['harga'] ?>.000</p>
          <a href="#" class="btn btn-success d-block align-items-center">Beli</a>
        </div>
      </div>
    </div>
    <?php endforeach ?>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
  <script src="script.js"></script>
</body>

</html>