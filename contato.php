<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contato</title>
        <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

    </head>

    <body>
    <?php include_once('php/header.php'); ?>

        <div class="container d-flex align-items-center flex-column">
            
            <main class="row ">

                <h3 class="text-center">Contato</h3>
                <div class="d-flex flex-wrap align-content-between justify-content-evenly">
                    <div class="card card-home mb-3 p-3">
                        <h3 class="card-title">Redes Sociais</h3>

                        <ul class="card-body">
                            <li><a href="#" class="no-line">Instagram</a></li>
                            <li><a href="#" class="no-line">Facebook</a></li>
                            <li><a href="#" class="no-line">Twitter</a></li>
                        </ul>
                    </div>
                    <div class="card card-home mb-3 p-3">
                        <h3 class="card-title">Conheça Nossa Equipe</h3>
                        <p class="card-text"><a href="quem-somos.php" class="no-line">Ursinhos Fofinhos em Chamas</a></p>
                    </div>

                </div>
            </main>
            <form class="col-11 col-lg-7 my-2">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Escreva pra gente:</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"></label>
                    <textarea class="form-control" placeholder="Escreva sua dúvida" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="button" class="d-grid gap-2 col-4 mx-auto btn-dark rounded me-md-2">Enviar</button>
            </form>

            </div>

    <?php include_once('php/footer.php'); ?>
        
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    </body>

</html>
