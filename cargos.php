<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Cargos Federais</title>
</head>

<body id="cargos">
    <?php include_once('php/header.php'); ?>
    <article class="container  my-5">
        <h1 class="text-center mb-4">Cargos na República Brasileira</h1>
        <div>
            <p>A República no Brasil foi proclamada em 15 de novembro de 1889, e encerrou o período imperial brasileiro.
                O Brasil, denominado oficialmente República Federativa do Brasil, é uma federação formada por 26 Estados
                e um distrito federal. Desde a Proclamação da República, o Brasil tem sido governado por três poderes, o
                Legislativo, o Judiciário e o Executivo, separado pelos seguintes cargos:</p>
            <div class="table-responsive-sm my-5">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Executivo</th>
                            <th>Legislativo</th>
                            <th>Judiciário</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <ul class="ps-3">
                                    <li>Presidente</li>
                                    <li>Governadores</li>
                                    <li>Prefeitos</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="ps-3">
                                    <li>Deputados Federais</li>
                                    <li>Deputados Estaduais</li>
                                    <li>Senadores</li>
                                    <li>Vereadores</li>
                                </ul>
                            </td>
                            <td>
                                <ul class="ps-3">
                                    <li>Ministros do Supremo</li>
                                    <li>Desembargadores</li>
                                    <li>Juízes</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="row d-flex justify-content-center">
            <section class="col-5 pe-0">
                <div class="card">
                    <div class="card-body">
                        <h3 class="fs-6 fw-bold">Presidencialismo no Brasil</h3>
                        <p>O presidencialismo é o sistema de governo que se afirmou desde a primeira constituição
                            republicana e caracteriza-se, por possuir o grande acúmulo de poder na função do Presidente
                            da República como chefe do Executivo. Esse modelo define a separação na competência das
                            funções em três Poderes: Executivo, Legislativo e Judiciário. As eleições são feitas por
                            voto popular, salvo à cargos de nomeação.</p>
                    </div>
                </div>
            </section>
            <p class="col-1 text-center m-0 p-0 align-self-center fw-bold">x</p>
            <section class="col-5 ps-0">
                <div class="card">
                    <div class="card-body">
                        <h3 class="fs-6 fw-bold">Monarquia Hereditária no Brasil</h3>
                        <p>
                            A Monarquia Hereditária foi adotada como forma de governo logo após a independência
                            declarada por d. Pedro I, era constitucional e representativa, sendo o país dividido
                            formalmente em províncias. O poder político estava dividido em quatro: Executivo,
                            Legislativo, Judiciário e o Poder Moderador, exercido pelo imperador que permitia interferir
                            nos outros três poderes.</p>
                    </div>
                </div>

            </section>
        </div>

        <p class="my-5">
            Confira em maior detalhe os cargos no espectro da União:
        </p>
        <div>
            <nav class="nav nav-tabs" id="nav-tab" role="tablist">

                <button class="nav-link active fs-md-3 text-black fw-bold" id="nav-presidente-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-presidente" type="button" role="tab" aria-controls="nav-presidente"
                    aria-selected="true">Presidente</button>
                <button class="nav-link text-black fw-bold" id="nav-senadores-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-senadores" type="button" role="tab" aria-controls="nav-senadores"
                    aria-selected="false">Senadores</button>
                <button class="nav-link text-black fw-bold" id="nav-deputados-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-deputados" type="button" role="tab" aria-controls="nav-deputados"
                    aria-selected="false">Deputados</button>
                <button class="nav-link text-black fw-bold" id="nav-ministros-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-ministros" type="button" role="tab" aria-controls="nav-ministros"
                    aria-selected="false">Ministros</button>

            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-presidente" role="tabpanel"
                    aria-labelledby="nav-presidente-tab">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-8">
                            <p>
                                Na União, o Poder Executivo é exercido pelo Presidente da República e auxiliado pelos
                                Ministros de Estado. O Presidente é eleito através da votação direta da população e seu
                                mandato é de quatro anos, podendo se reeleger após esse período por mais quatro anos.
                                Além disso, o Presidente pode governar por menos tempo caso ações configurem crime de
                                responsabilidade e assim sofrerá o processo de <strong>impeachment</strong>.
                            </p>
                            <p>
                                De forma resumida, a função do Presidente da República é fazer a gestão do país, isto é
                                propondo, sancionando, vetando leis e projetos, além de ser a representação e fazer a
                                relação do país internacionalmente. As funções do cargo de Presidente da República, são
                                mais detalhadas conforme a <a
                                    href="https://normas.leg.br/?urn=urn:lex:br:federal:constituicao:1988-10-05;1988!art84"
                                    target="_blank">Constituição Federal</a>, porém de forma resumida, as principais
                                são:
                            </p>
                            <ul>
                                <li>
                                    Gerir a organização da administração federal criando ou eliminando cargos públicos
                                    federais, ministérios, nomeando ou exonerando cargos de ministros e comandantes das
                                    forças armadas;
                                </li>
                                <li>
                                    No processo legislativo pode sancionar, promulgar e fazer publicar as leis, vetar
                                    projetos de lei, editar medidas provisórias e também decretar regulamentações para
                                    suas execuções.
                                </li>
                                <li>
                                    Deve implementar a política fiscal, enviar ao Congresso Nacional o plano plurianual,
                                    o projeto de lei de diretrizes orçamentárias e as propostas de orçamento para que
                                    seja aprovado como será a gestão e partição dos recursos econômicos do país.
                                </li>
                                <li>
                                    Manter relações e representar diplomaticamente o país internacionalmente,
                                    participando da celebração de tratados e convenções.
                                </li>
                                <li>
                                    Em defesa e segurança nacional, o Presidente pode declarar guerra a um país, pode
                                    permitir que forças estrangeiras transitem pelo território nacional, pode decretar o
                                    estado de defesa, estado de sítio e intervenção federal, em caso de situações
                                    extremas.
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid" src="./imagens/urna-4-anos.jpg"
                                alt="Urna eletrônica escrito: Mandato de 4 anos">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-senadores" role="tabpanel" aria-labelledby="nav-senadores-tab">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-8">
                            <p>
                                Os Senadores representam o Poder Legislativo, assim como os Deputados. Possuem mandato
                                de oito anos e são eleitos por votação popular de quatro em quatro anos, alternadamente,
                                por um e dois terços.
                            </p>
                            <p>
                                As funções dos senadores são melhor detalhadas conforme a <a
                                    href="https://normas.leg.br/?urn=urn:lex:br:federal:constituicao:1988-10-05;1988!art52"
                                    target="_blank">Constituição Federal</a>, porém de forma resumida, as principais
                                são:
                            </p>
                            <ul>
                                <li>
                                    Processar e julgar o Presidente, ministros e os comandantes e outros membros da
                                    União por crimes de responsabilidade.
                                </li>
                                <li>
                                    Aprovar a indicação dos Ministros do Tribunal de Contas da União pelo Presidente da
                                    República,
                                    presidente e diretores do Banco Central e também titulares de outros cargos.
                                </li>
                                <li>
                                    Autorizar operações financeiras como operações de crédito limites e dívida
                                    consolidada da União.
                                </li>
                                <li>
                                    Participar das comissões do senado para discutir projetos de lei, emendas
                                    constitucionais, propor novas leis, normas e alterações na Constituição.
                                </li>
                                <li>
                                    Avaliar e revisar as propostas e projetos enviados pelos deputados que já foram
                                    votados na Câmara.
                                </li>
                                <li>
                                    Rejeitar o veto do Presidente por meio de votação em conjunto com os Deputados em
                                    maioria absoluta.
                                </li>


                            </ul>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid" src="./imagens/urna-8-anos.jpg"
                                alt="Urna eletrônica escrito: Mandato de 8 anos">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-deputados" role="tabpanel" aria-labelledby="nav-deputados-tab">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-8">
                            <p>
                                Os Deputados representam o Poder Legislativo, assim como os Senadores. São eleitos a
                                cada quatro anos pelo sistema proporcional, em cada Estado, em cada Território e no
                                Distrito Federal.
                            </p>
                            <p>
                                As funções dos Deputados são mais detalhadas conforme a <a
                                    href="https://normas.leg.br/?urn=urn:lex:br:federal:constituicao:1988-10-05;1988!art51"
                                    target="_blank">Constituição Federal</a>, porém de forma resumida, as principais
                                são:
                            </p>
                            <ul>
                                <li>
                                    Propor novas leis, sugerir a alteração ou revogação das já existentes, discutir e
                                    votar medidas provisórias, editadas pelo governo federal.
                                </li>
                                <li>
                                    Discutir e votar dos projetos de lei de iniciativa do Presidente da República, do
                                    Supremo Tribunal Federal e dos Tribunais Superiores. Essas ações possuem início na
                                    Câmara dos Deputados, e após votação são passadas para o Senado.
                                </li>
                                <li>
                                    Controlar os atos do Presidente da República e fiscalizar as ações do Executivo,
                                    podendo autorizar, por dois terços de seus membros, a instauração de processo contra
                                    o Executivo.
                                </li>
                                <li>
                                    Rejeitar o veto do Presidente por meio de votação em conjunto com os Senadores em
                                    maioria absoluta.
                                </li>

                            </ul>

                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid" src="./imagens/urna-4-anos.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-ministros" role="tabpanel" aria-labelledby="nav-ministros-tab">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-8">
                            <p>
                                Os ministros do Supremo Tribunal Federal representam o Poder Judiciário, são
                                responsáveis pela garantia do respeito e cumprimento da Constituição Federal. O cargo de
                                ministro é vitalício, portanto poderá ocupar a vaga até sua aposentadoria, exceto por
                                processo de impeachment. A escolha dos mistros são feitas pelo Presidente da República,
                                indicados em lista tríplice e precisam da aprovação do Senado Federal.

                            </p>
                            <p>
                                As funções dos Ministros são mais detalhadas conforme a <a
                                    href="https://normas.leg.br/?urn=urn:lex:br:federal:constituicao:1988-10-05;1988!art101"
                                    target="_blank">Constituição Federal</a>, porém de forma resumida, as principais
                                são:
                            </p>
                            <ul>
                                <li>
                                    Processar e julgar ações de inconstitucionalidade de lei, nas infrações penais
                                    comuns e nos crimes de responsabilidade, causas e conflitos entre a União e os
                                    Estados.
                                </li>
                                <li>
                                    Propor a ação direta de inconstitucionalidade e declarar a inconstitucionalidade de
                                    tratado ou lei federal;
                                </li>
                                <li>
                                    Julgar se lei ou ato de governo são válidos conforme a Constituição.
                                </li>
                                <li>
                                    Controlar da atuação administrativa e financeira do Poder Judiciário e do
                                    cumprimento dos deveres funcionais dos juízes.
                                </li>
                                <li>
                                    Representar ao Ministério Público, no caso de crime contra a administração pública
                                    ou de abuso de autoridade;
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid" src="./imagens/carta-stf.jpg"
                                alt="Decreto de Nomeação dos Ministros com passo a passo ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <p class="referencias-footer text-center m-0">
        <small class="paleta-preto-color ">Acesse também: <a class="paleta-preto-color fw-bold"
                href="referencias.html#Cargos" target="_blank">Referências dessa página</a></small>
    </p>
    <?php include_once('php/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>

</html>