<?php 
include_once '../../config/config.php';
include_once '../../controle/usuario/Usuario.DAO.php';

include_once '../../config/sessions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../../css/styleMenu.css">
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../style/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../style/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../style/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../style/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../css/util.css">
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
    <title>Listar Usuário</title>
</head>
<body>
<?php include_once 'MenuNav.php';  ?>
<?php 
$reser = new usuario_DAO;
$resultado = $reser->listarUsuarios();
?>
<h1>LISTAGEM DE USUÁRIO</h1>
<div class="row">
  <div class="col-md-6">
    <div class="panel panel-primary table-ajustes">
      <div class="panel-heading">
        Tabela de reservas
      </div>
      <div class="form-group" style="margin: 8px 10px;">
      <div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Nome</th>
									<th class="cell100 column2">Login</th>
									<th class="cell100 column3">Email</th>
									<th class="cell100 column4">Ações</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
              <?php
                foreach($resultado as $res){
              ?>  
							<tr class="row100 body">
              <td class="cell100 column1"> <?php echo $res['nome'] ?> </th>
              <td class="cell100 column2"> <?php echo $res['login'] ?> </th>
              <td class="cell100 column3"> <?php echo $res['email'] ?> </th>
              <td class="text-center">
              <a href="../../controle/usuario/Usuario.controller.php?acao=delete&id=<?php echo $res['id'] ?>" name="acao" class="btn btn-sm btn-danger excluir-usuario" onClick="remover()">
              <span class="fa fa-trash"></span> Excluir</a>
              <a href="TelaEditarUsuario.php?id=<?php echo $res['id'] ?>" class="btn btn-sm btn-primary" >
              <span class="fa fa-cogs"></span> Atualizar</a>
              </th>
              <?php } ?>
							</tbody>
						</table>
					</div>
				</div>
        </div>
    </div>
  </div>
</div>
</body>
</html>
