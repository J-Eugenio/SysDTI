<?php  if(!isset($_SESSION)){
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
    <form action="" method="post">
      <fieldset>
        <legend class="fw" style="text-align: center;">Cadastro Usuário</legend>
        
        <div class="form-group">
          <label id="nome" class="fw">Login:</label>
          <input type="text" name="login" class="form-control" id="login" placeholder="Informe o login que deseja">
        </div>

        <div class="form-group">
          <label id="dataNasc" class="fw">Nome:</label>
          <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome" required autofocus>
        </div>

        <div class="form-group">
          <label id="nome" class="fw">Senha:</label>
          <input type="password" name="senha" class="form-control" id="senha" placeholder="Insira sua senha">
        </div>

        <div class="form-group">
          <label id="cpf" class="fw">CPF:</label>
          <input type="text" name="cpf" class="form-control" id="cpf" placeholder="Informe seu CPF">
        </div>

        <div class="form-group">
          <label id="nome" class="fw">E-mail:</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="Informe seu e-mail">
        </div>

  <div class="form-group">
    	 <label for="exampleFormControlSelect1">Nivel</label>
   		 <select class="form-control" id="nivel">
      	 <option>Administrador 1</option>
     	 <option>Professor 2</option>
      	 <option>Funcionário</option>
   		 </select>
  </div>

  <div class="form-group">
    	 <label for="exampleFormControlSelect1">Acesso</label>
   	<select class="form-control" id="acesso">
      	 <option>Administrador 1</option>
     	 <option>Professor 2</option>
      	 <option>Funcionário</option>
   	</select>
  </div>
        <button type="submit" value="cadastrar" class="btn btn-outline-success">ENVIAR</button>
        <button type="submit" class="btn btn-outline-success">LIMPAR</button>
        <br>
        <br>
      </fieldset>  
    </form>   
  </div>
  
</body>
</html>