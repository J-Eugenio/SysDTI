<?php 
include_once '../../config/sessions.php';
require_once '../../config/DB.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="../../css/styleMenu.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistema de reservas DTI</title>
</head>

<body>

  <?php include_once 'MenuNav.php'; ?>

  <div class="container">
    <form method="POST" action="../../controle/reserva/Reserva.controller.php">
 
    <div class="form-group">
        <label>Campus:  </label>
        <select name="select_campus" id="select_campus" class="form-control">
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
        <label id="select_salas">Sala:  </label>
        <select   class="form-control">
           <option>Selecione a sala...</option>
        </select>
      </div>
      <div class="form-group">
        <label>Equipamento: </label>
        <select name="select_equipamento" class="form-control">
           <option>Selecione o Equipamento...</option>
           <?php
              $result_equip = "SELECT * FROM equipamento";
              $exec = DB::prepare($result_equip);
              $exec->execute();
              while($dados = $exec->fetch(PDO::FETCH_ASSOC)):?>
                <option value="<?php echo $dados['id']?>">
                  <?php echo $dados['Nome']?>
                </option>
            <?php
              endwhile;
            ?>      
        </select>
      </div>
      <label>Data:</label>
   <div class="form-group row">
      <div class="col-10">
      <input class="form-control" type="date" id="data" name="data">
   </div>
   </div>

   <div class="form-group">
        <label>Turno:  </label>
        <select name="select_turno" class="form-control">
           <option>Selecione o turno...</option>
           <option value="Manha">Manha</option>
           <option value="Tarde">Tarde</option>
           <option value="Noite">Noite</option>
        </select>
      </div>

      <div class="form-group">
        <label>Horário:  </label>
        <select name="select_horario" class="form-control">
           <option>Selecione o horário...</option>
           <option value="AB">AB</option>
           <option value="CD">CD</option>
        </select>
      </div>

      <div class="form-group">
         <label for="exampleFormControlTextarea1">Observação:</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="observacao"></textarea>
    </div>
      
      <div class="form-group">
        <input type="hidden" name="acao" class="form-control" value="inserir"/>
      </div>

      <button type="submit" class="btn btn-success"><span class="fa fa-check"></span> Salvar</button>
      <button type="reset" class="btn btn-warning"><span class="fa fa-close"></span> Limpar</button>
      <a href="TelaListarReserva.php" class="btn btn-info" >Pesquisar</a>
    </form>
  </div>
  <!-- JS -->
  <script type="text/javascript">
    $(function(){
      $('#select_campus').change(function(){
        if($(this).val()){
          $.getJSON('../../querys/querys.php?seach=',{select_campus: $(this).val(),
           ajax: 'true'}, function(j){
             var valor = 'tettet';
             for(var i = 0; i < j.length; i++){
               valor +="tettet";
             }
             $('#select_salas').html(valor).show();
           });
        }else{

        }
      })
    });   
  </script>
</body>

</html>