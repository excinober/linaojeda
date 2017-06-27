<?php include "header.php"; ?>
<?php include "my_bag.php"; ?>
<div class="container mb-2">
  <div class="col-xs-12 col-md-3">
    <h4>MENÚ</h4>
    <?php include "views/nav_sidebar.php"; ?>
    <?php 
    if (FILTER_SIDEBAR) {
    ?>
    <h4 class="mt-2"><?=Lenguajes::consultarFrase("FILTERS", $_SESSION["lenguaje"])?></h4>
    <?php filters($categorias_padre); 
    }
    ?>
  </div>
  <div class="mt-3 col-xs-12 offset-md-2 col-md-4">
    <div class="row">
      <h1><?=Lenguajes::consultarFrase("LOGIN", $_SESSION["lenguaje"])?></h1>
      <hr>
      <form method="post">     
        <div class="form-group">
          <label for="exampleInputEmail1"><?=Lenguajes::consultarFrase("EMAIL", $_SESSION["lenguaje"])?></label>
          <input type="email" class="form-control" name="email" placeholder="" required="required">   
        </div>      
        <div class="form-group">
          <label for="exampleInputEmail1"><?=Lenguajes::consultarFrase("PASSWORD", $_SESSION["lenguaje"])?></label>
          <input type="password" class="form-control" name="password" placeholder="" required="required">      
        </div>      
        <center>
          <button type="submit" name="login" class="btn btn-primary"><?=Lenguajes::consultarFrase("SIG IN", $_SESSION["lenguaje"])?></button>
        </center>
      </form>
    </div>
    <hr>
    <div class="row my-3">
      <h2 class="text-xs-center"><?=Lenguajes::consultarFrase("DONT HAVE ACCOUNT", $_SESSION["lenguaje"])?></h2>
      <center>
        <a href="<?=URL_REGISTRO?>" class="btn btn-primary"><?=Lenguajes::consultarFrase("CREATE NOW", $_SESSION["lenguaje"])?></a> 
      </center>
    </div>
  </div>
</div>
<?php include "footer.php" ?>