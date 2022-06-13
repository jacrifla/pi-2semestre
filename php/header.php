<?php
function active($pagina_ativa){
  $link_pagina =  explode('/', $_SERVER['REQUEST_URI']) ;
  $pagina = end($link_pagina);  
  if($pagina_ativa == $pagina){
      echo 'active'; //class name in css 
  } 
}
?>
<div id="header">
    <header class="text-center  paleta-preto-bg">
            <img class="img-fluid" src="imagens/portal-intelecto.png" alt="logo do site">
        </header>
        <nav class="navbar navbar-expand-lg paleta-preto-bg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                <img src="imagens/icon-menu48x48.png" alt="logo do site" >
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-evenly">
                    <li class="nav-item">
                    <a class="nav-link <?php active('index.php');?>" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="DropdownConceitos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Conceitos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="DropdownConceitos">
                        <li><a class="dropdown-item <?php active('cidadania.php');?>" href="cidadania.php">Cidadania</a></li>
                        <li><a class="dropdown-item <?php active('democracia_autoritarismo.php');?>" href="democracia_autoritarismo.php">Democracia vs Autoritarismo</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="DropdownTripartite" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tripartite
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="DropdownTripartite">
                        <li><a class="dropdown-item <?php active('executivo.php');?>" href="executivo.php">Executivo</a></li>
                        <li><a class="dropdown-item <?php active('legislativo.php');?>" href="legislativo.php">Legislativo</a></li>
                        <li><a class="dropdown-item <?php active('judiciario.php');?>" href="judiciario.php">Judiciário</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="DropdownCandidaturas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Candidaturas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="DropdownCandidaturas">
                        <li><a class="dropdown-item <?php active('presidente.php');?>" href="presidente.php">Presidente</a></li>
                        <li><a class="dropdown-item <?php active('senado.php');?>" href="senado.php">Senadores</a></li>
                    </ul>
                    </li>
                    <li class="nav-item"><a href="cargos.php" class="nav-link <?php active('cargos.php');?>">Cargos</a></li>
                    <li class="nav-item">
                    <a href="partidos.php" class="nav-link <?php active('partidos.php');?>">Partidos</a>
                    </li>
                    <li class="nav-item">
                    <a href="linha_do_tempo.php" class="nav-link <?php active('linha_do_tempo.php');?>">Linha do Tempo</a>
                    </li><li class="nav-item">
                    <a href="galeria_juizes.php" class="nav-link <?php active('galeria_juizes.php');?>">Galeria de Juízes</a>
                    </li><li class="nav-item">
                    <a href="contato.php" class="nav-link <?php active('contato.php');?>">Contato</a>
                    </li>
                    <li class="nav-item">
                    <a href="quem-somos.php" class="nav-link <?php active('quem-somos.php');?>">Quem Somos</a>
                    </li>
                </ul>

                </div>
            </div>
        </nav>
</div>
