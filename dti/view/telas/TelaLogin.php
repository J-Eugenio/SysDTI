
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="logo" href="logo.png">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/estilo.css">
  </head>

  <body class="text-center">  
    <form class="cor" method="POST" action="../../controle/usuario/Usuario.controller.php">
      <div class="logo">
        <img class="mb-3" src="logo.png" alt="logo" width="300" height="140">
      </div>
      <h1 class="h3 mb-3 font-weight-normal"></h1>
      <div class="input-group input-group-sm mb-4">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
      </div>
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        <input type="password" id="Password" name="senha" class="form-control" placeholder="Senha" required>
      </div>
      <div class="input-group input-group-sm mb-3">
        <input type="hidden" id="acao" name="acao" value="autenticar">
      </div><br>

      <div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </div>

        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>

      
    </form>
  </body>
</html>
