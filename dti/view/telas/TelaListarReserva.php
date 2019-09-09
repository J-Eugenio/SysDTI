<?php 
include_once '../../config/config.php';
// include_once '../../controle/campus/Campus.DAO.php';
include_once '../../controle/reserva/Reserva.DAO.php';

include_once '../../config/sessions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/styleMenu.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script>
      function remover(id){
      
      }
    </script>
    <title>Listar Reservas</title>
</head>
<body>
<?php include_once 'MenuNav.php';  ?>
<h1>LISTAGEM DE RESERVA</h1>
<?php 
$resultado = "SELECT r.*, camp.`nome` AS campus, equip.`nome` AS equipamento, 
salaP.`nome` AS sala FROM reserva AS r 
INNER JOIN `campus` AS camp 
INNER JOIN salas AS salaP
INNER JOIN equipamento AS equip 
ON r.`idCampus`=camp.`id` 
AND r.`idEquipamento`=equip.`id` 
AND r.`idSala`=salaP.`id` 
ORDER BY id ASC
";

$resultado = $conecta->prepare($resultado);

$resultado->execute();

?>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="50%">
                  <thead>
                    <tr>
                      <th>Horario</th>
                      <th>Turno</th>
                      <th>Campus</th>
                      <th>Sala</th>
                      <th class="text-center">Ações</th>
                    </tr>
                  </thead>
                  <tbody style="overflow: auto; height: 300px">
<?php
while($resultadoLista = $resultado->fetch(PDO::FETCH_ASSOC)){

   ?>  
 <tr>
      <th> <?php echo $resultadoLista['horario'] ?> </th>
      <th> <?php echo $resultadoLista['turno'] ?> </th>
      <th> <?php echo $resultadoLista['campus'] ?> </th>
      <th> <?php echo $resultadoLista['sala'] ?> </th>
      <th class="text-center">
      <a href="../../controle/reserva/Reserva.controller.php?acao=delete&id=<?php echo $resultadoLista['id'] ?>" name="acao" class="btn btn-sm btn-danger excluir-usuario" onClick="remover()">
      <span class="fa fa-trash"></span> Excluir</a>
      <a href="TelaEditarReserva.php?id=<?php echo $resultadoLista['id'] ?>" class="btn btn-sm btn-primary" >
      <span class="fa fa-cogs"></span> Atualizar</a>
      </th>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>
