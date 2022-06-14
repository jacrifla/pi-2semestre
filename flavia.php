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
    <title>Flávia Arruda</title>
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">

</head>

<body id="flavia">
    <?php include_once('php/header.php'); ?>
    <article class="container  my-5">
        <div class="row align-items-center">
            <div class="col-12">
                <img src="imagens/flavia-arruda.jpg" class="img-fluid rounded mx-auto d-block" alt="flavia" id="foto">
            </div>
        </div>
        <div class="row align-itens-center">
            <h1 class="col-12 p-4 text-center">Flávia Arruda</h1>
        </div>
        <p>Flávia Carolina Péres, mais conhecida como Flávia Arruda, filiada ao Partido Liberal (PL) e presidente da
            sigla do Distrito Federal. Foi ministra-chefe da Secretaria de Governo do Brasil de 2021 a 2022. Flávia
            trabalhou em Taguatinga por um período, até decidir montar uma escola, no Recanto das Emas. Casada com o
            político José Roberto Arruda, é mãe de duas filhas. Em 2019, concluiu o curso de Direito. Em 2021, foi
            eleita presidente da Comissão Mista de Planos, Orçamentos Públicos e Fiscalização (CMO) do Congresso
            Nacional. No mesmo ano, foi nomeada Ministra-chefe da Secretaria de Governo do Brasil. Em sua primeira
            incursão na política, Flávia tornou-se vice-governadora na chapa de Jofran Frejat. Isso ocorreu devido a
            Justiça Eleitoral indeferir a candidatura a governador de seu companheiro, José Roberto Arruda, após ter
            sido de preso de maneira preventiva pelo seu envolvimento no Mensalão do DEM. Com 428.522 votos, a chapa
            ficou em segundo lugar, sendo derrotada para Rodrigo Rollemberg do Partido Socialista Brasileiro (PSB). Nas
            eleições distritais de 2018 foi eleita deputada federal pelo Distrito Federal e obteve 121.340 votos
            totalizados (8,43% dos votos válidos), sendo a deputada mais votada para o cargo.
        </p>
    </article>
    <div class="container" id="gallery-container">
        <div class="col-12 p-4">
            <h3>Acompanhe outros candidatos</h3>
        </div>
        <div class="row d-flex justify-content-center">
            <section class="col-sm-12 col-md-3 col-lg-3 m-3 border senador">
                <img src="imagens/sergio-moro.jpg" class="img-thumbnail img-fluid" alt="moro">
                <h5>Sérgio Moro</h5>
                <p class="secondary-color">Partido União Brasil</p>
                <a class="btn link" href="moro.php">Veja mais</a>
            </section>

            <section class="col-sm-12 col-md-3 col-lg-3 m-3 border senador">
                <img src="imagens/carlos-moises.jpg" class="img-thumbnail img-fluid" alt="carlos">
                <h5>Carlos Moises</h5>
                <p class="secondary-color">Partido Republicanos</p>
                <a class="btn link" href="carlos.php">Veja mais</a>
            </section>

            <section class="col-sm-12 col-md-3 col-lg-3 m-3 border senador">
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