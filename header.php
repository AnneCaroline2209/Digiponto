<?php require 'config.php'; ?>
<!Doctype html>
<html lang="pt-BR" onclick="ExibirLocalizacao()">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script type="text/javascript" src="hppt://maps.google.com/maps/api/js?sensor=false"></script>
    <title>Inicio</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body >
    <nav class="navbar navbar-dark fixed-top bg-primary flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dash.php">DIGIPONTO</a>
      <a class="nav-link text-white ml-auto">Bem Vindo, <?php /*echo $user['usuarios'] */?>!</a>
      <a class="nav-link text-white" href="sair.php">Sair</a>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-ligh sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="dash.php">
                  <i class="fas fa-home"></i>
                  Administrativo <span class="sr-only">(atual)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cadastro_consulta.php">
                  <i class="fas fa-user-clock"></i>                  
                    Meu Perfil
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="meuponto.php">
                  <i class="fas fa-clock"></i>
                    Meu Ponto
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </body>
</html>
      