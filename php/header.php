<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="text-center">
            <img class="img-fluid" src="imagens/portal-intelecto.png" alt="logo do site">
        </header>
        <nav class="navbar navbar-expand-lg navbar-dark paleta-preto-bg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                <img src="imagens/icon-menu48x48.png" alt="logo do site" >
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="DropdownConceitos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Conceitos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="DropdownConceitos">
                        <li><a class="dropdown-item" href="#">Cidadania</a></li>
                        <li><a class="dropdown-item" href="#">Democracia vs Autoritarismo</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="DropdownTripartite" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tripartite
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="DropdownTripartite">
                        <li><a class="dropdown-item" href="executivo.php">Executivo</a></li>
                        <li><a class="dropdown-item" href="legislativo.php">Legislativo</a></li>
                        <li><a class="dropdown-item" href="judiciario.php">Judiciário</a></li>
                    </ul>
                    </li>                 
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="DropdownCandidaturas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Candidaturas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="DropdownCandidaturas">
                        <li><a class="dropdown-item" href="#">Presidente</a></li>
                        <li><a class="dropdown-item" href="#">Senadores</a></li>
                    </ul>
                    </li>
                    <li class="nav-item"><a href="partidos.php" class="nav-link">Cargos</a></li>
                    <li class="nav-item">
                    <a href="partidos.php" class="nav-link">Partidos</a>
                    </li>
                    <li class="nav-item">
                    <a href="linha_do_tempo.php" class="nav-link">Linha do Tempo</a>
                    </li><li class="nav-item">
                    <a href="galeria_juizes.php" class="nav-link">Galeria</a>
                    </li><li class="nav-item">
                    <a href="contato.php" class="nav-link">Contato</a>
                    </li>
                    <li class="nav-item">
                    <a href="quem-somos.php" class="nav-link">Quem Somos</a>
                    </li>
                </ul>
                
                </div>
            </div>
        </nav>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>    
</body>
</html>
