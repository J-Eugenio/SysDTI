<?php 
include_once '../../config/config.php';
// include_once '../../controle/campus/Campus.DAO.php';
include_once '../../controle/salas/Salas.DAO.php';

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
    <title>Listar Salas</title>
</head>
<body>
<?php include_once 'MenuNav.php';  ?>
<h1>LISTAGEM DE SALAS</h1>
<?php 
$resultado = "SELECT  c.*, t.`nome` AS campus FROM salas AS c INNER JOIN `campus` AS t ON c.`idCampus` = t.`id` ORDER BY id ASC ";

$resultado = $conecta->prepare($resultado);

$resultado->execute();

?>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="50%">
                  <thead>
                    <tr>
                      <th>Nome da Sala</th>
                      <th>Campus</th>
                      <th class="text-center">Ações</th>
                    </tr>
                  </thead>
                  <tbody style="overflow: auto; height: 300px">
<?php
while($resultadoLista = $resultado->fetch(PDO::FETCH_ASSOC)){
      //echo  $resultadoLista['id'] "<br>";
   // echo  $resultadoLista['login'] "<br>";
   // echo  $resultadoLista['nome'] "<br>";
   // echo  $resultadoLista['email'] "<br>";   

   ?>  
 <tr>
      <th> <?php echo $resultadoLista['Nome'] ?> </th>
      <th> <?php echo $resultadoLista['campus'] ?> </th>
      <th class="text-center">
      <a href="../../controle/salas/Salas.controller.php?acao=delete&id=<?php echo $resultadoLista['id'] ?>" name="acao" class="btn btn-sm btn-danger excluir-usuario" onClick="remover()">
      <span class="fa fa-trash"></span> Excluir</a>
      <a href="TelaEditarSala.php?id=<?php echo $resultadoLista['id'] ?>" class="btn btn-sm btn-primary" >
      <span class="fa fa-cogs"></span> Atualizar</a>
      </th>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>
