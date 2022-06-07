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
        <div class="container-fluid">
            <article>
                <h1 class="text-center">Quem Somos</h1>
                <div class="d-flex flex-row justify-content-evenly align-items-center align-self-center">
                    <img src="imagens/ufc.png" class="py-3" alt="Logo do Grupo" >
                    <p>Somos os Ursinhos Felizes em Chamas, mas pode nos chamar por UFC, </p>
                    <a href="recrutamento.html"  class="btn btn-success">Aliste-se</a>
                </div>
            </article>
            <aside class="d-flex justify-content-center align-items-start row">

                <div class="card col-sm-12 mx-md-4 my-2" >
                    <img src="imagens/daniel.jpg" class="card-img-top py-2" alt="...">
                    <div class="card-body">
                        <p class="card-text">Daniel</p>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi iure optio voluptatem vel eligendi repellat veniam magnam quibusdam doloribus atque a placeat</p>
                        <p class="card-text">RA: 2650832123013</p>
                        <p class="card-text">Função do Grupo: </p>
                        <ul>
                            <li><a href="#">-</a></li>
                            <li><a href="#">-</a></li>
                            <li><a href="#">-</a></li>
                        </ul>
                    </div>
                </div>

                <div class="card col-sm-12 mx-md-4 my-2" >
                    <img src="imagens/jaque.jpg" class="card-img-top py-2" alt="integrante do grupo, Jaquelini">
                    <div class="card-body">
                        <p class="card-text">Jaquelini</p>
                        <p class="card-text">A Integrante que reprime a criatividade dos outros integrantes. Gosta de maratonar animes e séries. Seus filmes preferidos são Matrix, Senhor dos Anéis e Harry Potter. Seus passatempos são cantar e jogar e de vez enquando estudar.</p>
                        <p class="card-text">RA: 2650832123022</p>
                        <p class="card-text">Função do Grupo: Destruidora de Criatividade</p>
                        <ul>
                            <li><a href="executivo.html">Executivo</a></li>
                            <li><a href="legislativo.html">Legislativo</a></li>
                            <li><a href="judiciario.html">Judiciário</a></li>
                        </ul>
                    </div>
                </div>

                <div class="card col-sm-12 mx-md-4 my-2">
                    <img src="imagens/guilherme.jpg" class="card-img-top py-2" alt="...">
                    <div class="card-body">
                        <p class="card-text">José Guilherme</p>
                        <p class="card-text">O integrante mais calmo do grupo. Gosto muito de estar com os meus amigos, conversando, fazendo um churrasco, etc. Gosto de cozinhar, ir ao cinema e também em alguns momentos ficar sozinho enquanto escuto uma musica e fumo meu charuto</p>
                        <p class="card-text">RA: 2650832123019</p>
                        <p class="card-text">Função do Grupo: Pesquisa dos candidatos </p>
                        <ul>
                            <li><a href="presidente.php">Pré-Candidatos Presidência</a></li>
                            <li><a href="senado.php">Pré-Candidatos Senado</a></li>
                        </ul>
                    </div>
                </div>

                <div class="card col-sm-12 mx-md-4 my-2">
                    <img src="imagens/sthefani.jpg" class="card-img-top py-2" alt="Sthefani">
                    <div class="card-body">
                        <p class="card-text">Sthefani</p>
                        <p class="card-text">A integrante mais estressada e desesperada. Nas horas vagas gosta de maratonar séries, jogar videogames e jogos de tabuleiro com os amigos. Temáticas preferidas: zumbis, investigação, terror, piratas e xianxia.</p>
                        <p class="card-text">RA: 2650832123006</p>
                        <p class="card-text">Função do Grupo: Pesquisa, design, ajudante de git, edição de imagens, "maluca" das padronizações. </p>
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