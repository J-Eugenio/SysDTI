<!---- MENU PRINCIPAL  ---->
   <nav class="navbar navbar-expand-lg navbar-light" id="nav-menu">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#abrirMenuResponsivo" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" id="barra-menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="abrirMenuResponsivo">
      <img src="logo.png" alt="logo" class="logo-menu">
      <a class="navbar-brand" href="#" id="nome-logo">Sistema Reserva DTI</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="menu-opcoes">
            <li class="nav-item active"  id="items-li">
              <a class="nav-link" href="TelaHome.php" id="items-a">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active" id="items-li">
              <a class="nav-link" id="items-a">Cadastro<span class="sr-only">(current)</span></a>
                <ul class="sub-menu">
                  <li class="sub-menu-li"><a href="TelaCadastroUsuario.php">Usuário</a></li>
                  <li class="sub-menu-li"><a href="#">Professor</a></li>
                  <li class="sub-menu-li"><a href="#">Equipamento</a></li>
                  <li class="sub-menu-li"><a href="#">Campus</a></li>
                </ul>
            </li>
            <li class="nav-item active"  id="items-li">
              <a class="nav-link" href="#" id="items-a">Envio<span class="sr-only">(current)</span></a>
                 <ul class="sub-menu">
                  <li class="sub-menu-li"><a href="#">Notificação</a></li>
                </ul>
            </li>
            <li class="nav-item active"  id="items-li">
              <a class="nav-link" href="#" id="items-a">Relatório<span class="sr-only">(current)</span></a>
                 <ul class="sub-menu">
                  <li class="sub-menu-li"><a href="#">Por campus</a></li>
                  <li class="sub-menu-li"><a href="#">Geral</a></li>
                  
                </ul>
            </li>
            
            <li class="nav-item active"  id="items-li">
              <a class="nav-link" href="" id="items-a">Sair<i class="fas fa-sign-out-alt"></i></a>
            </li>
        </ul>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav" id="menu-logado">
             <li class="nav-item">
                <span><i class= "fas fa-user"></i><?php echo $_SESSION['user_name']; ?> </span>
             </li>
        </ul>
    </div>
  </nav>