<!doctype html>
<html lang="en">
<?php
  include("conexion.php")
?>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="estilos/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    
    <script>
        function txNombres() {
            if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122)) event.returnValue = false;
        }

        function ValidaSoloNumeros() {
            if ((event.keyCode < 48) || (event.keyCode > 57)) event.returnValue = false;
        }
    </script>
    <title>Almacen</title>
  </head>
  <body>  
  <?php
    if(isset($_GET['registrar'])){
      $nombre = $_GET['nombre'];
      $apellido1 = $_GET['apellido1'];
      $apellido2 = $_GET['apellido2'];
      $edad = $_GET['edad'];
      $usuario_cuenta = $_GET['usuario_cuenta'];
      $contraseña_cuenta = $_GET['contraseña_cuenta'];
     
        $res = $conexion->query("insert into cuenta values(NULL,'$usuario_cuenta','$contraseña_cuenta','$nombre','$apellido1','$apellido2','$edad');");

    ?>
            <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Registro completo!</h4>
            <p>Los datos del producto han sido guardados en la base de datos</p>
            </div>
            <?php
        }
    ?> 
      <div class="container">
      <div class="py-5 text-center">
        <h2>Registrar nueva cuenta de usuario</h2>
      </div>
        <h4>Porfavor ingrese sus datos</h4>
        <form class="fregisttro" id="fregistro" method="get">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Nombre" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Primer apellido</label>
            <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="Primer apellido" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Segundo apellido</label>
            <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="Segundo apellido"  required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Usuario</label>
            <input type="user" class="form-control" id="usuario_cuenta" name="usuario_cuenta" placeholder="Usuario" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Contraseña</label>
            <input type="password" class="form-control" id="contraseña_cuenta" name="contraseña_cuenta" placeholder="Contraseña" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Repetir contraseña</label>
            <input type="password" class="form-control" id="rcontraseña" name="rcontraseña" placeholder="Repetir contraseña" required>
        </div><br><br>
        
        <div class="row">
          <div class="form-group col">
              <button type="submit" class="w-100 btn btn-lg btn-primary" name="registrar">Registrar</button>
          </div>
          <div class="col">
            <a class="w-100 btn btn-lg btn-primary" href="login.php" role="button">Salir</a>
          </div>
      </div><br>
      </form>
      </div>
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2021–2022 Sistema Gestor de Carga Automatizado</p>
      </footer>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
