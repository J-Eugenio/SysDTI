<?php if (!isset($_SESSION)) {
  session_start();
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="../../css/styleMenu.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Sistema de reservas DTI</title>
</head>

<body>

  <?php include_once 'MenuNav.php'; ?>

  <div class="container">
    <form method="POST" action="../../controle/usuario/Usuario.controller.php">
      <div class="form-group">
        <label>Nome: </label>
        <input type="text" name="nome" class="form-control" placeholder="Informe o nome do campus.." />
      </div>

      <div class="form-group">
        <label>CNPJ:  </label>
        <input type="text" name="cnpj" class="form-control" placeholder="Informe o CNPJ do campus.." />
      </div>
      
      <label> Endereço  </label>

      <div class="form-group">
        <label>Rua:  </label>
        <input type="text" name="rua" class="form-control" placeholder="Informe a rua.." />
      </div>

       <div class="form-group">
        <label>Número:  </label>
        <input type="text" name="numero" class="form-control" placeholder="Informe a rua.." />
      </div>  



      <div class="form-group">
        <input type="hidden" name="acao" class="form-control" value="inserir"/>
      </div>

      <button type="submit" class="btn btn-success"><span class="fa fa-check"></span> Salvar</button>
      <button type="reset" class="btn btn-warning"><span class="fa fa-close"></span> Limpar</button>
    </form>
  </div>

</body>

</html>