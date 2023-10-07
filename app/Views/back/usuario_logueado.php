<!--USUARIO LOGUEADO-->
<div class="p-3" style="background-color: rgb(250, 215, 160  )"><!--color de fondo-->

<h1 class="display-2 mb-5"><strong>Usuario  </strong> Logueado</h1> 

<?php if(session()->getFlashdata('msg')): ?>
       <div class="alert alert-warning">
       <?= session()->getFlashdata('msg') ?>
       </div>
    <?php endif;?>
    <br><br>
    <?php if(session()->perfil_id == 1):?>
    <div>
        <img class="center" heigth="100px" width="100px" src="<?php echo base_url('assets/img/inicio_admin.jpeg');?>">
        <br><br>
    </div>
    <?php elseif(session()->perfil_id == 2):?>
    <div>
        <img class="center" heigth="100px" width="100px" src="<?php echo base_url('assets/img/inicio_socio.jpeg');?>">
        <br><br>
    </div>
    <?php endif;?>



</div>

</div><!--fin color de fondo-->




                