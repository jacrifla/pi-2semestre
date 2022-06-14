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
    <article class="container my-5">
        <div class="row align-items-center">
            <div class="col-12">
                <img src="imagens/carlos-moises.jpg" class="img-fluid rounded mx-auto d-block" alt="carlos moises"
                    id="foto">
            </div>
        </div>
        <div class="row align-itens-center">
            <h1 class="col-12 p-4 text-center">Carlos Moisés</h1>
        </div>
        <p>Carlos Moisés da Silva,possui como formação um bacharelado em direito; profissão que acabou não seguindo por
            força das circunstâncias. Iniciou a sua carreira profissional como membro do Corpo de Bombeiros Militar de
            Santa Catarina (de 1987 a 1990), após ter concluído o Curso de Formação de Oficiais da Academia de Polícia.
            Outras funções executadas por Carlos Moisés foram as de Coordenador Regional de Defesa Civil,
            Corregedor-Adjunto do Corpo de Bombeiros de Santa Catarina, Secretário de Justiça e Cidadania, até chegar a
            coronel do Corpo de Bombeiros, onde aposentou-se. Na sua trajetória política no ano de 2018, filiou-se ao
            Partido Social Liberal (PSL), disputou eleições ao cargo de Governador do Estado de Santa Catarina, fez
            campanha como “Comandante Moisés” foi a ida ao segundo turno das eleições para governador de Santa Catarina
            na 2ª colocação, com simplórios 29,72% dos votos no 1º turno, para ao final sair vitorioso com nada mais
            nada menos do que 70% dos votos válidos na disputa com Gelson Merisio do PSD. No início de 2022, com o fim
            do partido PSL, que se juntou ao DEM para fundar o União Brasil, o Governador mudou de partido, a partir de
            março do ano que concorrerá à reeleição, passou para a sigla Republicanos.
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
                <img src="imagens/flavia-arruda.jpg" class="img-thumbnail img-fluid" alt="flavia">
                <h5>Flávia Arruda</h5>
                <p class="secondary-color">Partido Liberal</p>
                <a class="btn link" href="flavia.php">Veja mais</a>
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