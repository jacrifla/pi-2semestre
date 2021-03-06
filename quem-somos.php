<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos</title>
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body id="quem-somos">
    <?php include_once('php/header.php'); ?>
    <div class="container my-5 g-0">
        <article>
            <h1 class="text-center">Quem Somos</h1>
            <div class="row d-flex flex-row justify-content-evenly align-items-center align-self-center">
                <img src="imagens/ufc.png" class="img-fluid img-thumbnail col-sm-4 col-md-4 col-lg-3" alt="Logo do Grupo">
                <p class="col-sm-12 col-md-8 col-lg-7">Somos os Ursinhos Felizes em Chamas, mas pode nos chamar por UFC, o grupo é formado por Daniel,
                    Jaquelini, José Guilherme e Sthefani, um grupo novo com quatro pessoas totalmente distintas e que
                    até então não tinham trabalhados juntos, mas com o mesmo intuito de trabalho, fazer um portal
                    informativo, um portal onde o eleitor possa entender melhor sobre o modelo político de nosso país,
                    quais as funções de cada cargo e seus futuros candidatos, para que ele saia mais consciente do valor
                    de seu voto. E essa foi a nossa meta desde a primeira reunião, todos respectivos para as propostas
                    de ideias, ajudando uns aos outros em suas dificuldades para que o resultado seja o melhor possível
                    para você leitor, abaixo você encontrará mais sobre cada um dos membros, curiosidades, funções, etc.
                </p>
                <a href="recrutamento.php" class="btn btn-success col-sm-12 col-md-12 col-lg-1">Junte-se</a>
            </div>
        </article>
        <aside class="row d-flex justify-content-center align-items-start p-4">

            <div class="card col-sm-12 col-md-6 col-lg-3 mx-1">
                <img src="imagens/daniel.jpg" class="card-img-top py-2" alt="Daniel">
                <div class="card-body">
                    <p class="card-text">Daniel</p>
                    <p class="card-text">O Integrante que inventa problema para o resto do time. Gosto de
                        <i>streams</i>, jogos e, quando sobra tempo, de escrever histórias. Adoro enigmas e desafios que
                        me façam pensar. Demoro muito para aderir a uma causa, mas depois também não abandono por nada
                        desse mundo.</p>
                    <p class="card-text">RA: 2650832123013</p>
                    <p class="card-text">Função do Grupo: O cara que gostou do Bootstrap</p>
                    <ul>
                        <li><a href="cidadania.php">Cidadania</a></li>
                        <li><a href="democracia_autoritarismo.php">Democracia vs Autoritarismo</a></li>
                        <li><a href="linha_do_tempo.php">Linha do Tempo dos Presidentes</a></li>
                        <li><a href="galeria_juizes.php">Galeria dos Juízes do STF</a></li>
                    </ul>
                </div>
            </div>

            <div class="card col-sm-12 col-md-6 col-lg-3 mx-1">
                <img src="imagens/jaque.jpg" class="card-img-top py-2" alt="integrante do grupo, Jaquelini">
                <div class="card-body">
                    <p class="card-text">Jaquelini</p>
                    <p class="card-text">A Integrante que reprime a criatividade dos outros integrantes. Gosta de
                        maratonar animes e séries. Seus filmes preferidos são Matrix, Senhor dos Anéis e Harry Potter.
                        Seus passatempos são cantar e jogar e de vez enquando estudar.</p>
                    <p class="card-text">RA: 2650832123022</p>
                    <p class="card-text">Função do Grupo: Destruidora de Criatividade, Menos é Mais</p>
                    <ul>
                        <li><a href="executivo.php">Executivo</a></li>
                        <li><a href="legislativo.php">Legislativo</a></li>
                        <li><a href="judiciario.php">Judiciário</a></li>
                    </ul>
                </div>
            </div>

            <div class="card col-sm-12 col-md-6 col-lg-3 mx-1">
                <img src="imagens/guilherme.jpg" class="card-img-top py-2" alt="...">
                <div class="card-body">
                    <p class="card-text">José Guilherme</p>
                    <p class="card-text">O integrante mais calmo do grupo. Gosto muito de estar com os meus amigos,
                        conversando, fazendo um churrasco, etc. Gosto de cozinhar, ir ao cinema e também em alguns
                        momentos ficar sozinho enquanto escuto uma musica e fumo meu charuto</p>
                    <p class="card-text">RA: 2650832123019</p>
                    <p class="card-text">Função do Grupo: Pesquisa dos candidatos </p>
                    <ul>
                        <li><a href="presidente.php">Pré-Candidatos Presidência</a></li>
                        <li><a href="senado.php">Pré-Candidatos Senado</a></li>
                    </ul>
                </div>
            </div>

            <div class="card col-sm-12 col-md-6 col-lg-3 mx-1">
                <img src="imagens/sthefani.jpg" class="card-img-top py-2" alt="Sthefani">
                <div class="card-body">
                    <p class="card-text">Sthefani</p>
                    <p class="card-text">A integrante mais estressada e desesperada. Nas horas vagas gosta de maratonar
                        séries, jogar videogames e jogos de tabuleiro com os amigos. Temáticas preferidas: zumbis,
                        investigação, terror, piratas e xianxia.</p>
                    <p class="card-text">RA: 2650832123006</p>
                    <p class="card-text">Função do Grupo: Pesquisa, design, ajudante de git, edição de imagens, "maluca"
                        das padronizações. </p>
                    <ul>
                        <li><a href="cargos.php">Cargos</a></li>
                        <li><a href="partidos.php">Partidos</a></li>
                    </ul>
                </div>
            </div>

        </aside>
    </div>
    <?php include_once('php/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>