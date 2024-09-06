<!doctype html>
<html lang="en">
<?php
  include("conexion.php");
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Login</title>
    <link rel="stylesheet" href="estilos/bootstrap.css">

    <!-- Bootstrap core CSS -->
    
    </head>
    <?php
        if(isset($_GET['registrar'])){
          $usuario = $_GET['usuario'];
          $contraseña = $_GET['contraseña'];
          $res = $conexion->query("select usuario_cuenta, contraseña_cuenta from cuenta where usuario_cuenta='$usuario' and contraseña_cuenta='$contraseña';");
          $filas=mysqli_num_rows($res);
          if($filas){
            header("location:index.php");
          }else{
            ?>
          <?php
        ?>
        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">Registro completo!</h4>
          <p>Los datos han del nuevo trabajador sido guardados correctamente</p>
        </div>
        <?php  
        header("location:login.php");
          }
        }
      ?> 


        <body class="text-center" ><br><br>
        <div class="container">
          <div class="row justify-content-md-center">
            <form class="fregisttro" id="fregistro" method="get">
              <div class="container">
                <div class="row">
                  <div class="col"></div>
                <div class="col">
              <h1 class="btn btn-lg" style="color: white; font-size: 40px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); margin-top: 5px;">SISTEMA GESTOR DE CARGAS AUTOMATIZADO</h1>
              
              <h4 class="btn btn-lg" style="color: white; font-family: Arial, sans-serif; text-align: center; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); letter-spacing: 2px; margin-top: 10px;">INICIO DE SESIÓN</h4>
              <div class="form-floating">
                <label for="exampleFormControlInput1" style="color: white; font-family: Arial, sans-serif; font-size: 15px; text-align: center; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Usuario</label><br><br>
                <input type="user" class="form-control" id="usuario" name="usuario" placeholder="Usuario">  
              </div>
              </div>
              <div class="col"></div>
              </div>
              <div class="row">
                <div class="col"></div>
                <div class="col">
              <div class="form-floating">
                <label for="exampleFormControlInput1" style="color: white; font-family: Arial, sans-serif; font-size: 15px; text-align: center; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); ">Contraseña</label><br><br>
                <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Contraseña">
              </div><br>
              </div>
              <div class="col"></div>
              </div>

              <div class="container">
              <div class="row">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                  <button class="w-100 btn btn-lg btn-primary" name="registrar" type="submit">Ingresar</button>
                </div>
                <div class="col">
                  <a class="w-100 btn btn-lg btn-primary" href="cuenta.php" type="submit">Registrarse</a>
                </div>
                <div class="col"></div>
                <div class="col"></div>
              </div>
              </div>
              </div>
            </form>
          </div>
        </div>

  </body>
</html>
