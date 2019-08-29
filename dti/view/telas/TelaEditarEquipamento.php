<?php 
session_start();
if (!isset($_SESSION['logado'])) {
  header("location: TelaLogin.php");
  session_destroy();


 $id =  filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
}
include_once '../../config/config.php';

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

<?php
   include_once 'MenuNav.php'; 
  //sql de retornar
   $resultaQuery = "SELECT * FROM equipamento where id= $id";

  //selecionar os registros
  $resulta = $conecta->prepare($resultaQuery);
  $resulta->execute();
  $resultaEditar = $resulta->fetch(PDO::FETCH_ASSOC);
  ?>

  <div class="container">
    <form method="POST" action="../../controle/equipamento/Equipamento.controller.php">
  <div class="form-group">
        <input type="hidden" name="id" value="" />
        <label>Identificador: </label>
        <input type="text" name="identificador" class="form-control" placeholder="Informe o identificador.." value="<?php if(isset($resultaEditar['identificador'])) { echo $resultaEditar['identificador']; } ?>">
  </div>
  <div class="form-group">
        <label>Nome: </label>
        <input type="text" name="nome" class="form-control" placeholder="Informe o nome.." value="<?php if(isset($resultaEditar['Nome'])) { echo $resultaEditar['Nome']; } ?>"/>
  </div>
  <div class="form-group">
        <label>Quantidade: </label>
        <input type="number" name="quantidade" class="form-control" placeholder="Informe a quantidade.." value="<?php if(isset($resultaEditar['quantidade'])) { echo $resultaEditar['quantidade']; } ?>" />
  </div>
  <div class="form-group">
        <label>Tipo: </label>
        <input type="text" name="tipo" class="form-control" placeholder="Informe um tipo.." value="<?php if(isset($resultaEditar['tipo'])) { echo $resultaEditar['tipo']; } ?>"/>
  </div>
  <div class="form-group">
      <label>Descrição:</label>
      <input type="text" name="descricao" class="form-control" placeholder="Informe um tipo.." value="<?php if(isset($resultaEditar['descricao'])) { echo $resultaEditar['descricao']; } ?>"/>
  </div>

  <div class="form-group">
      <label>Campus:</label>
      <input type="text" name="campus" class="form-control" placeholder="Informe um tipo.." value="<?php if(isset($resultaEditar['campus'])) { echo $resultaEditar['campus']; } ?>"/>
  </div>

  <div class="form-group">
        <label>Vida Útil: </label>
        <select class="form-control" name="vidaUtil" id="vidaUtil" value="<?php if(isset($resultaEditar['vidaUtil'])) { echo $resultaEditar['vidaUtil']; } ?>">
          <option value="Novo">Novo</option>
          <option value="Restaurado">Restaurado</option>
          <option value="Descartado">Descartado</option>
          <option value="Manutenção">Manutenção</option>
        </select>
      </div>

      <div class="form-group">
        <input type="hidden" name="acao" class="form-control" value="update"/>
        <input type="hidden" name="id" class="form-control" value="<?php echo $id?>"/>
      </div>
      <button type="submit" class="btn btn-success"><span class="fa fa-check"></span> Salvar</button>
      <button type="reset" class="btn btn-warning"><span class="fa fa-close"></span> Limpar</button>
      <a href="TelaListarEquipamento.php" class="btn btn-info" >Listar</a>
    </form>
  </div>

</body>

</html>