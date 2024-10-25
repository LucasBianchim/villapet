<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">

  <title>Villa Pet</title>

</head>

<body>

  <?php include("header.php") ?>



  <section class="bg-dark rounded mb-5 shadow p-4" style="height:400px;">
  <div class="container d-flex justify-content-center align-items-center" style="height: 100%;">
    <div class="row">
      <div class="col-lg-12 text-center">
        <video src="./video/villapet.mp4" controls  height="350px" autoplay muted>
        </video>
      </div>
    </div>
  </div>
</section>


  <section>
    <div class="container pt-5">
      <div class="row d-flex align-items-center">
        <!-- Coluna de texto -->
        <div class="col-lg-6">
          <p>Nosso trabalho é feito com muita transparência com os clientes e muita responsabilidade e carinho com
            nossos dogs. Cada unidade possui 1.000m2 com amplos espaços externos e internos, limpos e seguros para que
            os cães se sintam bem e felizes.</p>

          <p>O hotel funciona todos os dias, com check-in e check-out inclusive nos domingos e feriados. A creche
            funciona todos os dias na Unidade Campo Belo e de segunda à sexta na Unidade Jardins, das 7h às 20h30.</p>

          <p>Uma rotina de atividades físicas e mentais pensada com carinho para proporcionar o máximo de bem estar e
            equilíbrio. Equipe de monitores treinados e apaixonados por cães. Sistema de câmeras 24 horas que os
            clientes podem acessar a hora que desejarem via aplicativo no celular.</p>

          <p>Aqui, separamos sempre cães de porte pequeno e grande e todos devem, antes, ser aprovados em uma avaliação
            comportamental. Entre em contato e agende uma visita! Será um prazer recebê-los!</p>
        </div>

        <!-- Coluna de imagem -->
        <div class="col-lg-6">
          <img src="galeria/imagem1.webp" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container pt-5 text-center">

      <h2>UNIDADE PIRACICABA</h2>
      <br>
      <p class="fs-5">R. Marcílio Dias, 196 - Santa Terezinha, Piracicaba - SP, 13411-031</p>

    </div>
  </section>

  <?php include("footer.php") ?>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>