<?php 
include_once '../../config/config.php';
include_once '../../controle/usuario/Usuario.DAO.php';

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/styleMenu.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Usuário</title>
</head>
<body>
<?php include_once 'MenuNav.php';  ?>
<h1>LISTAGEM DE EQUIPAMENTO</h1>
<?php 
$resultado = "SELECT * FROM equipamento ORDER BY id ASC";

$resultado = $conecta->prepare($resultado);

$resultado->execute();

?>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="50%">
                  <thead>
                    <tr>
                      <th>Identificador</th>
                      <th>Nome</th>
                      <th>Quantidade</th>
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
   //echo "<a href='TelaEditarUsuario.php?id=" .$resultadoLista['id']."'></a><br>"

   ?>  
 <tr>
      <th> <?php echo $resultadoLista['identificador'] ?> </th>
      <th> <?php echo $resultadoLista['Nome'] ?> </th>
      <th> <?php echo $resultadoLista['quantidade'] ?> </th>
      <th> <?php echo $resultadoLista['campus'] ?> </th>
      <th class="text-center">
      <a href="" class="btn btn-sm btn-danger excluir-usuario" onClick="remover()">
      <span class="fa fa-trash"></span> Excluir</a>
      <a href="TelaEditarEquipamento.php?id= <?php echo $resultadoLista['id'] ?>" class="btn btn-sm btn-primary" >
      <span class="fa fa-cogs"></span> Atualizar</a>
      </th>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>
