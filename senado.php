<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Pré Candidatos Senado</title>
  <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">

</head>

<body id="senado">
  <?php include_once('php/header.php'); ?>
  <main class="my-5">
    <article class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <img src="imagens/camara.jpg" class="img-fluid rounded mx-auto d-block" alt="camara" id="camara-senado">
        </div>
      </div>
      <div class="row align-itens-center p-4">
        <h1 class="text-center">Pré-Candidatos ao Senado</h1>
        <p>Agora chegamos no momento de falar quem são os pré-candidatos para a
          eleição que
          acontecerá em outubro de
          2022. Iremos listar alguns dos pricipais candidados ao cargo de Senadores.
          Falaremos um pouco de suas trajetorias politica.</p>
          <p>Por se tratar de pré-candidatura até o presado momento não obtivemos informações sobre suas propostas mas você pode conferir com mais detalhes quais são suas funções em nossa página <a href="cargos.html" id="funcoes">Cargos</a>.</p>
      </div>
    </article>

    <div class="container g-0" id="gallery-container">
      <div class="col-12 p-4">
        <h3>Veja Também</h3>
      </div>
      <div class="row d-flex justify-content-center">
        <section class="col-sm-12 col-md-6 col-lg-3 border card-pres mx-1 senador">
          <img src="imagens/sergio-moro.jpg" class="img-thumbnail img-fluid" alt="moro">
          <h5>Sergio Moro</h5>
          <p class="secondary-color">Partido União Brasil</p>
          <a class="btn link" href="moro.php">Veja mais</a>
        </section>

        <section class="col-sm-12 col-md-6 col-lg-3  border card-pres mx-1 senador">
          <img src="imagens/carlos-moises.jpg" class="img-thumbnail img-fluid" alt="carlos">
          <h5>Carlos Moises</h5>
          <p class="secondary-color">Partido Republicanos</p>
          <a class="btn link" href="carlos.php">Veja mais</a>
        </section>

        <section class="col-sm-12 col-md-6 col-lg-3 border card-pres mx-1 senador">
          <img src="imagens/flavia-arruda.jpg" class="img-thumbnail img-fluid" alt="flavia">
          <h5>Flávia Arruda</h5>
          <p class="secondary-color">Partido Liberal</p>
          <a class="btn link" href="flavia.php">Veja mais</a>
        </section>

        <section class="col-sm-12 col-md-6 col-lg-3 border card-pres mx-1 senador">
          <img src="imagens/marilia-arraes.jpg" class="img-thumbnail img-fluid" alt="marilia">
          <h5>Marília Arraes</h5>
          <p class="secondary-color">Solidariedade</p>
          <a class="btn link" href="marilia.php">Veja mais</a>
        </section>
      </div>
    </div>
  </main>
  <p class="referencias-footer text-center m-0">
    <small class="paleta-preto-color ">Acesse também: <a class="paleta-preto-color fw-bold"
        href="referencias.html#Candidaturas" target="_blank">Referências dessa página</a></small>

  </p>
  <?php include_once('php/footer.php'); ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
  </script>


</body>

</html>