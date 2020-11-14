<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <link rel="icon" href="img/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php require 'header.php'; ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <h1 class="h2 mt-3">Meu Perfil</h1>
    <hr>
    <div class="form-perfil">
        <form action="">
            <label for="inputName" class="">Nome</label>
            <input type="text" name="usuario" class="form-control" placeholder="Nome" required autofocus>

            <label for="inputCPF" class="">CPF</label>
            <input type="text" name="usuario"class="form-control" placeholder="Endereço de E-mail" required autofocus>

            <label for="inputEmail" class="">CEP</label>
            <input type="text" name="usuario"class="form-control" placeholder="Endereço de E-mail" required autofocus>

            <label for="inputEmail" class="">Endereço</label>
            <input type="text" name="usuario"class="form-control" placeholder="Endereço de E-mail" required autofocus>

            <label for="inputEmail" class="">N°</label>
            <input type="text" name="usuario"class="form-control" placeholder="Endereço de E-mail" required autofocus>

            <label for="inputEmail" class="">Email</label>
            <input type="text" name="usuario"class="form-control" placeholder="Endereço de E-mail" required autofocus>

            <label for="inputPassword" class="">Password</label>
            <input type="password" name="senha" class="form-control mt-3" placeholder="Senha" required>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">Salvar</button>
            </form>
        </div>
    </div>
</body>
</html>