<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Ponto</title>
  <link rel="icon" href="img/favicon.ico"></head>
<body>
  <?php require 'header.php'; ?>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <h1 class="h2 mt-3">Meu Ponto</h1>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>CPF</th>
          <th>DATA</th>
          <th>HORA</th>
          <th>TIPO</th>
        </tr>
      </thead>
      <?php require 'classes/ponto.class.php';
        $a = new Ponto();
        $pontos = $a->getPonto();
        foreach ($pontos as $ponto):
      ?>
      <tr>
        <td><?php echo $ponto['cpf_usuario']; ?></td>   
        <td><?php echo date("d/m/Y", strtotime($ponto['data_ponto'])); ?></td>
        <td><?php echo $ponto['hora_ponto']; ?></td>
        <td><?php echo $ponto['entrada_saida']; ?></td>
      </tr>
      <?php endforeach; ?>  
    </table>
  </div>
</body>
</html>