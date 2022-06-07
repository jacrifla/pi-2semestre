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
    <title>Carlos Moisés</title>
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">

</head>

<body id="carlos">
    <?php include_once('php/header.php'); ?>
    <article class="container mt-5 mb-5">
        <div class="row align-items-center">
            <div class="col-12">
                <img src="imagens/carlos-moises.jpg" class="img-fluid rounded mx-auto d-block" alt="carlos moises"
                    id="foto">
            </div>
        </div>
        <div class="row align-itens-center">
            <h1 class="col-12 p-4 text-center"><strong>Carlos Moisés</strong></h1>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos itaque culpa dicta reprehenderit natus aliquid
            distinctio veniam vero. Quibusdam voluptate numquam placeat dolorem perferendis, aliquid delectus similique
            impedit magni</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quas, praesentium asperiores alias qui
            officiis, ut nihil placeat odit quasi impedit tempore odio dolore doloribus sint earum voluptate dolorem
            nam.</p>
    </article>
    <div class="container" id="gallery-container">
        <div class="col-12 p-4">
            <h3><strong>Acompanhe outros candidatos</strong></h3>
        </div>
        <div class="row d-flex justify-content-center">
            <section class="col-sm-12 col-md-3 col-lg-3 m-3 border senador">
                <img src="imagens/sergio-moro.jpg" class="img-thumbnail img-fluid" alt="moro">
                <h5><strong>Sérgio Moro</strong></h5>
                <p class="secondary-color">Realizada em: 14/06/2021</p>
                <a class="btn link" href="moro.php">Veja mais</a>
            </section>

            <section class="col-sm-12 col-md-3 col-lg-3 m-3 border senador">
                <img src="imagens/flavia-arruda.jpg" class="img-thumbnail img-fluid" alt="flavia">
                <h5><strong>Flávia Arruda</strong></h5>
                <p class="secondary-color">Realizada em: 19/01/2018</p>
                <a class="btn link" href="flavia.php">Veja mais</a>
            </section>

            <section class="col-sm-12 col-md-3 col-lg-3 m-3 border senador">
                <img src="imagens/marilia-arraes.jpg" class="img-thumbnail img-fluid" alt="marilia">
                <h5><strong>Marília Arraes</strong></h5>
                <p class="secondary-color">Realizada em: 12/12/2015</p>
                <a class="btn link" href="marilia.php">Veja mais</a>
            </section>
        </div>
    </div>
    <div class=" d-flex justify-content-center p-4">
        <a class="btn link" href="senado.php">Voltar</a></div>

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