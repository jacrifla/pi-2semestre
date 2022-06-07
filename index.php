<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="home">
  <?php include_once('php/header.php'); ?>
  <div class="container">

    <article class="d-flex flex-wrap my-3 justify-content-lg-evenly">
      <div class="align-self-center col-md-6 p-4">
        <h1>Bem Vindo</h1>
        <p>Portal Intelecto foi desenvolvido como um porta-voz à todos os brasileiros que desejam conhecer mais sobre a
          democracia presidencialista no Brasil. Além de oferecer o conteúdo teórico e histórico de forma leve, também
          unifica em uma só
          plataforma os partidos, candidaturas e propostas atuais do país.</p>
      </div>

      <img class="img-fluid" src="imagens/img-home.jpg" alt="Fachada do Palacio do Planalto">

    </article>

    <div class="d-flex flex-wrap justify-content-md-between justify-content-lg-evenly">
      <!-- <div class="row"> -->
        <div class="col-md-4 d-flex flex-column align-items-center justify-content-sm-center">
          <section class="card card-home mb-3">
            <div class="row g-0">
              <div class="col-3 d-flex justify-content-center align-items-center">
                <img src="imagens/ico-candidaturas.png" class="img-fluid img-thumbnail"
                  alt="icone representando candidaturas">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <a href="">
                    <h5 class="card-title">Candidaturas</h5>
                  </a>
                  <p class="card-text">Conheça os candidatos à Presidente e Senadores!</p>

                </div>
              </div>
            </div>
          </section>
          <section class="card card-home mb-3 ">
            <div class="row g-0">
              <div class="col-3 d-flex justify-content-center align-items-center">
                <img src="imagens/ico-cidadania.png" class="img-fluid img-thumbnail rounded-start"
                  alt="icone representando cidadania">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <a href="cidadania.php">
                    <h5 class="card-title">Cidadania</h5>
                  </a>
                  <p class="card-text">O significado de fazer parte de algo maior! Ética e ser cidadão</p>

                </div>
              </div>
            </div>
          </section>
        </div>

        <div class="col-md-4 d-flex flex-column align-items-center justify-content-sm-center">
          <section class="card card-home mb-3">
            <div class="row g-0">
              <div class="col-3 d-flex justify-content-center align-items-center">
                <img src="imagens/ico-linha-tempo.png" class="img-fluid img-thumbnail rounded-start"
                  alt="icone representando linha do tempo">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <a href="linha_do_tempo.php">
                    <h5 class="card-title">Linha do Tempo</h5>
                  </a>
                  <p class="card-text">Linha do tempo de todos os presidentes da República do Brasil</p>

                </div>
              </div>
            </div>
          </section>
          <section class="card card-home mb-3">
            <div class="row g-0">
              <div class="col-3 d-flex justify-content-center align-items-center">
                <img src="imagens/ico-tripartite.png" class="img-fluid img-thumbnail rounded-start"
                  alt="icone representando tripartite">
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title">Tripartite</h5>
                  <ul>
                    <li class="card-text"><a href="executivo.php">Executivo</a></li>
                    <li class="card-text"><a href="judiciario.php">Judiciario</a></li>
                    <li class="card-text"><a href="legislativo.php">Legislativo</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        </div>

      <!-- </div> -->
    </div>

  </div>
  <?php include_once('php/footer.php'); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>