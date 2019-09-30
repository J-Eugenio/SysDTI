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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <title>Listar Reservas</title>
</head>
<body>
<?php include_once 'MenuNav.php';  ?>

<?php 
$reser = new reserva_DAO;
$resultado = $reser->ListarReservas();
?>
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
									<th class="cell100 column1">Horario</th>
									<th class="cell100 column2">Turno</th>
									<th class="cell100 column3">Campus</th>
									<th class="cell100 column4">Sala</th>
									<th class="cell100 column5">Ações</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
              <?php
                if(!empty($resultado)){
                foreach($resultado as $res){
              ?>  
							<tr class="row100 body">
              <td class="cell100 column1"> <?php echo $res['horario'] ?> </th>
              <td class="cell100 column2"> <?php echo $res['turno'] ?> </th>
              <td class="cell100 column3"> <?php echo $res['campus'] ?> </th>
              <td class="cell100 column4"> <?php echo $res['sala'] ?> </th>
              <td class="text-center">
              <a href="../../controle/reserva/Reserva.controller.php?acao=delete&id=<?php echo $res['id'] ?>" name="acao" class="btn btn-sm btn-danger excluir-usuario" onClick="remover()">
              <span class="fa fa-trash"></span> Excluir</a>
              <a href="TelaEditarReserva.php?id=<?php echo $res['id'] ?>" class="btn btn-sm btn-primary" >
              <span class="fa fa-cogs"></span> Atualizar</a>
              </th>
              <?php }}else{
                echo "Nenhum registro encontrado!!";
              } ?>
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
