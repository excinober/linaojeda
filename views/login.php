<?php include "header.php"; ?>
<?php include "my_bag.php"; ?>
<div class="container mb-2">
  <div class="col-xs-12 col-md-3">
    <h4>MENÚ</h4>
    <?php include "views/nav_sidebar.php"; ?>
    <h4 class="mt-2">FILTERS</h4>
    <?php filters($categorias_padre); ?>
  </div>
  <div class="mt-3 col-xs-12 offset-md-2 col-md-4">
    <div class="row">
      <h1>LOGIN</h1>
      <hr>
      <form method="post">     
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" name="email" placeholder="" required="required">   
        </div>      
        <div class="form-group">
          <label for="exampleInputEmail1">Contraseña</label>
          <input type="password" class="form-control" name="password" placeholder="" required="required">      
        </div>      
        <center>
          <button type="submit" name="login" class="btn btn-primary">INGRESAR</button>
        </center>
      </form>
    </div>
    <hr>
    <div class="row my-3">
      <h2 class="text-xs-center">¿No tienes una cuenta?</h2>
      <center>
        <a href="<?=URL_REGISTRO?>" class="btn btn-primary">CREALA AHORA</a> 
      </center>
    </div>
  </div>
</div>
<?php include "footer.php" ?>