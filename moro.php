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
    <title>Sergio Moro</title>
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">

</head>

<body id="moro">
    <?php include_once('php/header.php'); ?>
    <article class="container  my-5">
        <div class="row align-items-center">
            <div class="col-12">
                <img src="imagens/sergio-moro.jpg" class="img-fluid rounded mx-auto d-block" alt="moro" id="foto">
            </div>
        </div>
        <div class="row align-itens-center">
            <h1 class="col-12 p-4 text-center">Sergio Moro</h1>
        </div>
        <p>Sérgio Fernando Moro ex-juiz da policia federal ficou nacionalmente conhecido por atuar nos casos de grande
            destaque da Lava Jato, que foi considerado a maior e a mais duradora operação contra corrupção no âmbito
            federal, outros casos se destacam em sua carreira como juiz dentre elas a operação do Farol Colina nas
            ainvestigações sobre o Banco do Estado do Paraná e o desdobramento do primeiro onde houve a condenação do
            traficante Fernandinho Beira Mar. Em 2019 entra pra o seu cargo com maior destaque, a convite do Presidente
            Jair Messias Bolsonaro a assumir o cargo de Ministro da Justiça, porém, em 2020 ele renuncia. Sérgio Moro
            não havia pronunciado nenhuma proposta e no dia 31 de março ele anuncia oficialmente a sua desistência de
            sua pré-candidatura a presidência.</p>
    </article>
    <div class="container" id="gallery-container">
        <div class="col-12 p-4">
            <h3>Acompanhe outros candidatos</h3>
        </div>
        <div class="row d-flex justify-content-center">
            <section class="col-sm-12 col-md-3 col-lg-3 m-3 border senador">
                <img src="imagens/carlos-moises.jpg" class="img-thumbnail img-fluid" alt="carlos">
                <h5>Carlos Moises</h5>
                <p class="secondary-color">Partido Republicanos</p>
                <a class="btn link" href="carlos.php">Veja mais</a>
            </section>

            <section class="col-sm-12 col-md-3 col-lg-3 m-3 border senador">
                <img src="imagens/flavia-arruda.jpg" class="img-thumbnail img-fluid" alt="flavia">
                <h5>Flávia Arruda</h5>
                <p class="secondary-color">partido Liberal</p>
                <a class="btn link" href="flavia.php">Veja mais</a>
            </section>

            <section class="col-sm-12 col-md-3 col-lg-3 m-3 boder senador">
                <img src="imagens/marilia-arraes.jpg" class="img-thumbnail img-fluid" alt="marilia">
                <h5>Marília Arraes</h5>
                <p class="secondary-color">Solidariedade</p>
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