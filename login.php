<?php
require 'config.php';
require 'classes/usuarios.class.php';
$u = new Usuarios();
if (isset($_POST['usuario']) && !empty($_POST['usuario'])) {
    $usuario = addslashes($_POST['usuario']);
    $senha = md5(addslashes($_POST['senha']));

    if($u->login($usuario, $senha)) {
      ?>
      <script type="text/javascript">window.location.href="dash.php";</script>
      <?php
    } else {
      ?>
      <div class="alert alert-danger">
        Usuário e/ou senha incorretos.
      </div>
      <?php
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <form class="form-signin" method="POST">
  <img class="mb-3" src="img/img-3.png" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Área Restrita</h1>
  <label for="inputEmail" class="sr-only">Email address</label>

  <input type="text" name="usuario"class="form-control" placeholder="Endereço de E-mail" required autofocus>

  <label for="inputPassword" class="sr-only">Password</label>

  <input type="password" name="senha" class="form-control mt-3" placeholder="Senha" required>
  <!--<div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>-->
  <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
  <p class="mt-5 mb-3 text-muted">&copy;Digiponto 2019</p>
</form>
</body>
</html>