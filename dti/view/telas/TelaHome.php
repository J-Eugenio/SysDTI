<?php  
session_start();
if (!isset($_SESSION['logado'])) {
  header("location: TelaLogin.php");

    session_destroy();
} 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sistema de reservas DTI</title>
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
</head>
<body>
<?php include 'MenuNav.php';   ?>

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
									<th class="cell100 column1">Prof°</th>
									<th class="cell100 column2">Data</th>
									<th class="cell100 column3">Equipamento</th>
									<th class="cell100 column4">Entregue</th>
									<th class="cell100 column5">Devolução</th>
								</tr>
							</thead>
						</table>
					</div>
					<div class="table100-body js-pscroll">
						<table>
							<tbody>
							<?php
                				//foreach($resultado as $res){
              				?> 
								<tr class="row100 body">
									<td class="cell100 column1">Like a butterfly</td>	
									<td class="cell100 column2">Like a butterfly</td>	
									<td class="cell100 column3">Like a butterfly</td>	
									<td class="cell100 column4">Like a butterfly</td>	
									<td class="cell100 column5">Like a butterfly</td>	
								</tr>
							<?php //} ?>
							</tbody>
						</table>
					</div>
				</div>
        </div>
    </div>
  </div>
</div>
<!--===============================================================================================-->	
	<script src="../../style/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../../style/bootstrap/js/popper.js"></script>
	<script src="../../style/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../../style/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../../style/perfect-scrollbar/perfect-scrollbar.min.js"></script>
</body>

</html>


   
<!---------------- FIM MENU PRINCIPAL  ------------>