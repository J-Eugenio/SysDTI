<?php if (!isset($_SESSION)) {
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
    <form method="POST" action="../../controle/usuario/Usuario.controller.php">
      <div class="form-group">
        <input type="hidden" name="id" value="" />
        <label>Login: </label>
        <input type="text" name="login" class="form-control" placeholder="Informe o login..">
      </div>
      <div class="form-group">
        <label>Senha: </label>
        <input type="password" name="senha" class="form-control" placeholder="Informe a senha.."/>
      </div>
      <div class="form-group">
        <label>Nome: </label>
        <input type="text" name="nome" class="form-control" placeholder="Informe um nome.." />
      </div>
      <div class="form-group">
        <label>Email: </label>
        <input type="email" name="email" class="form-control" placeholder="Informe um email.."/>
      </div>
      <div class="form-group">
        <label>CPF: </label>
        <input type="text" name="cpf" class="form-control" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="Digite o CPF no formato nnn.nnn.nnn-nn"  />
      </div>
      <div class="form-group">
        <label>Nível: </label>
        <select class="form-control" name="nivel" id="nivel">
          <option value="1">Administrador / Funcionário</option>
          <option value="2">Professor</option>
        </select>
      </div>
      <div class="form-group">
        <input type="hidden" name="acao" class="form-control" value="inserir"/>
      </div>
      <button type="submit" class="btn btn-success"><span class="fa fa-check"></span> Salvar</button>
      <button type="reset" class="btn btn-warning"><span class="fa fa-close"></span> Limpar</button>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#listarModal">
        Listar
      </button>
    </form>
  </div>

<!-- Modal -->
<div class="modal fade" id="listarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Listar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--corpo do modal
          para o listar-->
        


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>