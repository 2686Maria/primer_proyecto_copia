<!--login-->
<div class="p-3" style="background-color: rgb(250, 215, 160 )"><!--color de fondo-->

<h1 class="display-2 mb-5"><strong>Iniciar </strong> sesión</h1> 

<br>

<!--- Alerta de error--->

<?php if(session()->getFlashdata('msg')): ?>
       <div class="alert alert-warning">
       <?= session()->getFlashdata('msg') ?>
       </div>
<?php endif;?>
<!--- Fin alerta -->


<section class="container" style="width: 30rem;">
    <form method="post" action="<?php echo base_url('enviar_login') ?>">
      <!-- Email input -->
      <div class="form-outline mb-4">
        <input name="email" type="email" id="form2Example1" class="form-control" />
        <label class="form-label" for="form2Example1">E-mail</label>
      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input name="password" type="password" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">Contraseña</label>
      </div>

      <!-- 2 column grid layout for inline styling -->
      <div class="row mb-4">
        <div class="col d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
            <label class="form-check-label" for="form2Example31"> Recordar mi usuario </label>
          </div>
        </div>

        <div class="col">
          <!-- Simple link -->
          <a href="#!">Olvidaste tu contraseña?</a>
        </div>
      </div>

      <!-- Submit button -->

      <input type="submit" value="Ingresar" class="btn btn-primary btn-block mb-4">


      <!-- Register buttons -->
      <div class="text-center">
        <p>Aún no adoptaste? <a href="<?php echo base_url('registrarse'); ?>">Registrate</a></p>
      </div>
    </form>
</section>
</div>
