<!--formulario-->
<div class="p-3" style="background-color: rgb(250, 215, 160 )"><!--color de fondo-->

<h1 class="display-2 mb-5"><strong>Registrate </strong> y adopta un amigo</h1>

<br>
<br>
    <?php $validation = \config\Services::validation();?>

<section class="container " style="width: 100rem;">
<form method="post" action="<?php echo base_url('datos_registro')?>"class="row g-3 needs-validation" novalidate> <!-- OJOFALTA -->

<!--- Alerta de campos vacios--->
<?php if(!empty (session()->getFlashdata('fail'))): ?>
<div class="alert alert-danger"><?=session()->getFlashdata('fail'); ?></div>
<?php endif?>
<?php if(!empty (session()->getFlashdata('success'))): ?>
<div class="alert alert-danger"><?=session()->getFlashdata('success'); ?></div>
<?php endif?>

<!--- Fin alerta -->




<div class="col-md-4">
<label for="validationCustom01" class="form-label">Nombre</label>
<input name="nombre" type="text" class="form-control" id="validationCustom01" placeholder="nombre" required>

<!---error-->
<?php if($validation->getError('nombre')) { ?> 
    <div class='alert alert-danger mt-2'> 
    <?= $error = $validation->getError('nombre'); ?> 
    </div> 
<?php } ?>

<div class="valid-feedback">
Looks good!
</div>
</div>
<div class="col-md-4">
<label for="validationCustom02" class="form-label">Apellido</label>
<input name= "apellido" type="text" class="form-control" id="validationCustom02" value="" required>

<!---error-->
<?php if($validation->getError('apellido')) { ?> 
    <div class='alert alert-danger mt-2'> 
    <?= $error = $validation->getError('apellido'); ?> 
    </div> 
<?php } ?>



<div class="valid-feedback">
Looks good!
</div>
</div>



<div class="col-md-4">
<label for="validationCustom03" class="form-label">Usuario</label>
<input name= "usuario" type="text" class="form-control" id="validationCustom03" required>
<!---error-->
<?php if($validation->getError('usuario')) { ?> 
    <div class='alert alert-danger mt-2'> 
    <?= $error = $validation->getError('usuario'); ?> 
    </div> 
<?php } ?>


<div class="invalid-feedback">
Please provide a valid city.
</div>
</div>


<div class="col-md-4">
<label for="validationCustomUsername" class="form-label">E-mail</label>
<div class="input-group has-validation">
<span class="input-group-text" id="inputGroupPrepend">@</span>
<input name="email" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>

<!---error-->
<?php if($validation->getError('email')) { ?> 
    <div class='alert alert-danger mt-2'> 
    <?= $error = $validation->getError('email'); ?> 
    </div> 
<?php } ?>



<div class="invalid-feedback">
Please choose a username.
</div>
</div>
</div>

<div class="col-md-4">
<label for="validationCustom05" class="form-label">Contraseña</label>
<input name="password" type="password" class="form-control" id="validationCustom05" required>

<!---error-->
<?php if($validation->getError('password')) { ?> 
    <div class='alert alert-danger mt-2'> 
    <?= $error = $validation->getError('password'); ?> 
    </div> 
<?php } ?>


<div class="invalid-feedback">
Please provide a valid zip.
</div>
</div>
<div class="col-12">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
<label class="form-check-label" for="invalidCheck">
Acepta los terminos y condiciones
</label>
<div class="invalid-feedback">
You must agree before submitting.
</div>
</div>
</div>
<div class="col-12">
<button class="btn btn-primary" type="submit">Registrarse</button>

</div>
</form>
<br>
<br> 
</section>
</div>