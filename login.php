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
<!Doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Digiponto</title>
    <link rel="icon" href="img/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" method="POST">
      <img class="mb-3" src="img/icone-principal.png" alt="" width="72" height="72"/>
      <h1 class="h3 mb-3 font-weight-normal">Digiponto</h1>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="text" name="usuario"class="form-control" placeholder="Endereço de E-mail" required autofocus>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="senha" class="form-control mt-3" placeholder="Senha" required>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">Digiponto &copy; 2020</p>
    </form>
  </body>
</html>