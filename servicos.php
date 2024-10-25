<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">

    <title>Villa Pet</title>
</head>
<body>

<?php include("header.php") ?>

<section class="banner">
    <div class="container d-flex justify-content-center align-items-center pb-5">
        <div class="row">
            <div class="col-lg-12">
                <img src="galeria/banner.jpg" alt="" style="width: 1112px; height: 370px; object-fit: cover;">
            </div>
        </div>
    </div>
</section>

<br>

<section>
    <div class="container pb-4 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="creche.php">
                    <img src="galeria/creche.webp" alt="creche" class="img-fluid" style="width: 370px; height: 370px; object-fit: cover;">
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="hotel.php">
                    <img src="galeria/hotel.webp" alt="hotel" class="img-fluid" style="width: 370px; height: 370px; object-fit: cover;">
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="centroestetico.php">
                    <img src="galeria/cte.webp" alt="centro estetico" class="img-fluid" style="width: 370px; height: 370px; object-fit: cover;">
                </a>
            </div>
        </div>
    </div>
</section>






<?php include("footer.php") ?>
    
</body>
</html>