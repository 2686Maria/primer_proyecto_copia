<!--menu de navegación-->

<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>


<nav class="navbar navbar-expand-lg " style="background-color: rgba(229, 185, 113)">
  <div class="container-fluid">
    <a class="navbar-brand" href='<?php echo base_url('principal')?>'>
    <!--logo empresa-->
       <img src="<?php echo base_url('assets/img/Patitas-logo.png')?>" 
                alt="marca" width="75" height="30" class="img-fluid"/></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
             data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php if(session()->perfil_id == 1):?>
               <div class="btn btn-secondary active btnUser btn-sm">
                 <a href="">ADMIN:  <?php echo session ('nombre');?></a>
           </div>
      <!--Navbar para ADMIN-->
     <a class="navbar-brand" href='#'></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href='registrarse'><b>Registrarse</b></a>
        </li>
       
        
       
       
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <b>Adopta</b>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href='requisitos_para_adoptar'>Requisitos para adoptar</a></li>
            <li><a class="dropdown-item" href="#">Patitas de perros</a></li>
            <li><a class="dropdown-item" href="#">Patitas de gatos</a></li>
          </ul>
        </li> -->
        

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('logout')?>" tabindex="-1" aria_disabled="true"><b>Cerrar sesión</b></a>
        </li>
    </ul>
    </div>

    <?php elseif(session()->perfil_id == 2):?>
               <div class="btn btn-info active btnUser btn-sm">
                 <a href="">SOCI@:  <?php echo session ('nombre');?></a>
           </div>

            <!-- NAVBAR PARA SOCIOS  -->


      <a class="navbar-brand" href='#'></a>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
          <a class="nav-link" href='quienes_somos'><b>Quienes Somos</b></a>
        </li>

        <li class="nav-item">
          <a class="nav-link " aria-current="page" href='requisitos_para_adoptar'><b>Requisitos para adoptar</b></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('logout')?>" tabindex="-1" aria_disabled="true"><b>Cerrar sesión</b></a>
        </li>
    </ul>
    </div>


    <?php else:?>
          <!-- NAVBAR PARA SOCIOS NO LOGUEADOS -->

          <a class="navbar-brand" href='#'></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
          <a class="nav-link" href='quienes_somos'><b>Quienes Somos</b></a>
        </li>

          <li class="nav-item">
          <a class="nav-link" href='acercade'><b>Acerca de</b></a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link" href='registrarse'><b>Registrarse</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href='login'><b>Iniciar sesión</b></a>
        </li>
      </ul>
    </div>


      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
      </form>

      <?php endif;?>

    </div>
  </div>
</nav>