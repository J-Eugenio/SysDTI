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
        <input type="hidden" name="id" value="" />
        <label>Identificador: </label>
        <input type="text" name="identificador" class="form-control" placeholder="Informe o identificador..">
  </div>
  <div class="form-group">
        <label>Nome: </label>
        <input type="text" name="nome" class="form-control" placeholder="Informe o nome.."/>
  </div>
  <div class="form-group">
        <label>Quantidade: </label>
        <input type="number" name="quantidade" class="form-control" placeholder="Informe a quantidade.." />
  </div>
  <div class="form-group">
        <label>Tipo: </label>
        <input type="text" name="tipo" class="form-control" placeholder="Informe um tipo.."/>
  </div>
  <div class="form-group">
      <label>Descrição:</label>
      <textarea class="form-control" name="descricao" id="descricao" rows="3" placeholder="Informe a descrição.."></textarea>
  </div>

  <div class="form-group">
        <label>Vida Útil: </label>
        <select class="form-control" name="nivel" id="nivel">
          <option value="1">Novo</option>
          <option value="2">Restaurado</option>
          <option value="1">Descartado</option>
          <option value="2">Manutenção</option>
        </select>
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