<?php 
include_once '../../config/sessions.php';
require_once '../../config/DB.php';
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
    $resultaQuery = " SELECT  c.*, t.`nome` AS campus FROM salas AS c INNER JOIN `campus` AS t ON c.`idCampus` = t.`id` ORDER BY id ASC  ";

    //selecionar os registros
    $resulta = $conecta->prepare($resultaQuery);
    $resulta->execute();
    $resultaEditar = $resulta->fetch(PDO::FETCH_ASSOC);

  ?>

  <div class="container">
    <form method="POST" action="../../controle/salas/Salas.controller.php">
      <div class="form-group">
        <label>Nome: </label>
        <input type="text" name="nome" class="form-control" placeholder="Informe o nome da sala.." value="<?php if(isset($resultaEditar['Nome'])) { echo $resultaEditar['Nome']; } ?>" />
      </div>

      <div class="form-group">
        <label>Campus:  </label>
        <select name="select_campus" class="form-control">
           <option>Selecione o campus...</option>
           <?php
              $result_campus = "SELECT * FROM campus";
              $exec = DB::prepare($result_campus);
              $exec->execute();
              while($dados = $exec->fetch(PDO::FETCH_ASSOC)):?>
                <option value="<?php echo $dados['id']?>">
                  <?php echo $dados['nome']?>
                </option>
            <?php
              endwhile;
            ?>
           
        </select>
      </div>
      <div class="form-group">
        <input type="hidden" name="acao" class="form-control" value="update"/>
      </div>

      <button type="submit" class="btn btn-success"><span class="fa fa-check"></span> Salvar</button>
      <button type="reset" class="btn btn-warning"><span class="fa fa-close"></span> Limpar</button>
      <a href="TelaListarSala.php" class="btn btn-info" >Pesquisar</a>
    </form>
  </div>

</body>

</html>