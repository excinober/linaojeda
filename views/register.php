<?php include "header.php"; ?>
<?php include "my_bag.php"; ?>
<div class="container mb-2">
  <div class="col-xs-12 col-md-3">
    <h4>MENÚ</h4>
    <?php include "views/nav_sidebar.php"; ?>
    <h4 class="mt-2">FILTERS</h4>
    <?php filters($categorias_padre); ?>
  </div>
  <div class="col-xs-12 offset-md-2 col-md-5 my-3">
    <h1>REGISTRO DE USUARIO</h1>
    <hr>
    <form method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="" required="required">      
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Apellido</label>
        <input type="text" class="form-control" name="apellido" aria-describedby="emailHelp" placeholder="" required="required">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="" required="required" value="<?=$_POST["email"]?>">   
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Empresa</label>
        <input type="text" class="form-control" name="empresa" aria-describedby="emailHelp" placeholder="">      
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Dirección</label>
        <input type="text" class="form-control" name="direccion" aria-describedby="emailHelp" placeholder="" required="required">      
      </div>      
      <div class="form-group">
        <label for="exampleInputEmail1">Ciudad</label>
        <input type="text" class="form-control" name="ciudad" aria-describedby="emailHelp" placeholder="" required="required">      
      </div>      
      <div class="form-group">
        <label for="exampleInputEmail1">País</label>
        <input type="text" class="form-control" name="pais" aria-describedby="emailHelp" placeholder="" required="required">      
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Código Postal</label>
        <input type="text" class="form-control" name="cod_postal" aria-describedby="emailHelp" placeholder="" required="required">      
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Teléfono Fijo</label>
        <input type="text" class="form-control" name="telefono" aria-describedby="emailHelp" placeholder="">      
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Teléfono Móvil</label>
        <input type="text" class="form-control" name="telefono_m" aria-describedby="emailHelp" placeholder="" required="required">      
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Contraseña</label>
        <input type="password" class="form-control" name="password" aria-describedby="emailHelp" placeholder="" required="required">      
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Repetir contraseña</label>
        <input type="password" class="form-control" name="password2" aria-describedby="emailHelp" placeholder="" required="required">      
      </div>
      <center>
        <button type="submit" name="createUser" class="btn btn-primary">CREAR CUENTA</button>
      </center>
    </form>
  </div>
</div>

<?php include "footer.php" ?>