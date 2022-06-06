<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recrutamento</title>
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <?php include_once('php/header.php'); ?>

    <div class="container-fluid">
        <main class="d-flex justify-content-center m-2 row">
            <article class="col-md-4 me-6">
                <h1>Recrutamento</h1>
                <p>Não se assuste com essa sessão é só pra você fazer parte do pessoal e compartilhar conteúdos conosco! Estamos ansiosos para você se juntar a causa.</p>
            </article>
            <form class="col-md-5">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" placeholder="John Doe">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="johndoe@example.com">
                </div>
                <div class="mb-3">
                    <label for="textarea" class="form-label">Por que você quer ser recrutado?</label>
                    <textarea class="form-control" id="textarea" rows="3" placeholder="Escreva aqui"></textarea>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">Aceitar</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">Não aceitar</label>
                </div>
                <button type="button" class="btn btn-danger">Enviar</button>
            </form>
        </main>

    </div>
    <?php include_once('php/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>