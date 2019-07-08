<?php 
include_once '../../config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/styleMenu.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include_once 'MenuNav.php';  ?>
<h1>LISTAGEM DE USUÁRIO</h1>
<?php 
$resultado = "SELECT * FROM usuario ORDER BY id ASC";

$resultado = $conecta->prepare($resultado);

$resultado->execute();

while($resultadoLista = $resultado->fetch(PDO::FETCH_ASSOC)){
      //echo  $resultadoLista['id'] "<br>";
   // echo  $resultadoLista['login'] "<br>";
   // echo  $resultadoLista['nome'] "<br>";
   // echo  $resultadoLista['email'] "<br>";   
   ?>  
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="50%">
                  <thead>
                    <tr>
                      <th>Nome do Usuário</th>
                      <th>Login</th>
					  <th>E-mail</th>
                      <th class="text-center">Ações</th>
                    </tr>
                  </thead>
                  <tbody style="overflow: auto; height: 300px">

                      <tr>
                        <th> <?php echo $resultadoLista['nome'] ?> </th>
                        <th> <?php echo $resultadoLista['login'] ?> </th>
						<th> <?php echo $resultadoLista['email'] ?> </th>
                        <th class="text-center">
                          <a href=" ?>"
                            class="btn btn-sm btn-danger excluir-usuario">
                            <span class="fa fa-trash"></span> Excluir</a>
                          <a href=" "
                            class="btn btn-sm btn-primary">
                            <span class="fa fa-cogs"></span> Atualizar</a>
                        </th>
                      </tr>
                      <?php } ?>
                  </tbody>
                </table>
</body>
</html>
