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
        <h1 class="fs-4">Cargos na República Brasileira</h1>
        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odit totam exercitationem ipsum
                deserunt enim, saepe quae obcaecati nulla cumque nostrum vel, minima non ut dolorem consectetur
                officia beatae illo.</p>
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam asperiores voluptatum
                            fuga animi
                            quas iusto quos maxime veniam earum commodi in dicta exercitationem recusandae sit
                            est
                            nesciunt, veritatis, iure ad.</p>
                    </div>
                </div>
            </section>
            <p class="col-1 text-center m-0 p-0 align-self-center fw-bold">x</p>
            <section class="col-5 ps-0">
                <div class="card">
                    <div class="card-body">
                        <h3 class="fs-6 fw-bold">Monarquia Hereditária no Brasil</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam modi nostrum
                            mollitia sequi
                            voluptatem nisi ex aspernatur iure, odit nulla accusantium ullam fuga provident
                            deleniti,
                            architecto magnam, voluptatibus similique ipsum.</p>
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
                        <div class="col-md-6">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius maiores mollitia quibusdam
                                totam maxime earum, architecto, ratione odit dolore quas aut aliquid laboriosam eos,
                                veniam
                                dolorem! Accusamus pariatur unde exercitationem!
                            </p>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione ullam reiciendis dolor
                                sequi ex cupiditate accusantium, consequatur provident et omnis minus, ab at
                                perspiciatis,
                                neque aut rem? Quisquam, consectetur corrupti.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus corrupti dolor unde
                                labore
                                dolores. Distinctio maiores soluta voluptas error, autem voluptatum non veritatis ut ex
                                doloremque a alias quibusdam repellendus.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img class="img-fluid" src="./imagens/urna-4-anos.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-senadores" role="tabpanel" aria-labelledby="nav-senadores-tab">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-6">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius maiores mollitia quibusdam
                                totam maxime earum, architecto, ratione odit dolore quas aut aliquid laboriosam eos,
                                veniam
                                dolorem! Accusamus pariatur unde exercitationem!
                            </p>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione ullam reiciendis dolor
                                sequi ex cupiditate accusantium, consequatur provident et omnis minus, ab at
                                perspiciatis,
                                neque aut rem? Quisquam, consectetur corrupti.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus corrupti dolor unde
                                labore
                                dolores. Distinctio maiores soluta voluptas error, autem voluptatum non veritatis ut ex
                                doloremque a alias quibusdam repellendus.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img class="img-fluid" src="./imagens/urna-8-anos.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-deputados" role="tabpanel" aria-labelledby="nav-deputados-tab">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-6">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius maiores mollitia quibusdam
                                totam maxime earum, architecto, ratione odit dolore quas aut aliquid laboriosam eos,
                                veniam
                                dolorem! Accusamus pariatur unde exercitationem!
                            </p>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione ullam reiciendis dolor
                                sequi ex cupiditate accusantium, consequatur provident et omnis minus, ab at
                                perspiciatis,
                                neque aut rem? Quisquam, consectetur corrupti.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus corrupti dolor unde
                                labore
                                dolores. Distinctio maiores soluta voluptas error, autem voluptatum non veritatis ut ex
                                doloremque a alias quibusdam repellendus.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img class="img-fluid" src="./imagens/urna-4-anos.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-ministros" role="tabpanel" aria-labelledby="nav-ministros-tab">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-6">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius maiores mollitia quibusdam
                                totam maxime earum, architecto, ratione odit dolore quas aut aliquid laboriosam eos,
                                veniam
                                dolorem! Accusamus pariatur unde exercitationem!
                            </p>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione ullam reiciendis dolor
                                sequi ex cupiditate accusantium, consequatur provident et omnis minus, ab at
                                perspiciatis,
                                neque aut rem? Quisquam, consectetur corrupti.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus corrupti dolor unde
                                labore
                                dolores. Distinctio maiores soluta voluptas error, autem voluptatum non veritatis ut ex
                                doloremque a alias quibusdam repellendus.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img class="img-fluid" src="./imagens/carta-stf.jpg" alt="">
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