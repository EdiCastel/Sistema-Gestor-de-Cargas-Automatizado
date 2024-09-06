<!doctype html>
<html lang="en">
<?php
 include("../conexion.php");
?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../estilos/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->
    <script>
        function txNombres() {
            if ((event.keyCode != 32) && (event.keyCode < 65) || (event.keyCode > 90) && (event.keyCode < 97) || (event.keyCode > 122)) event.returnValue = false;
        }

        function ValidaSoloNumeros() {
            if ((event.keyCode < 48) || (event.keyCode > 57)) event.returnValue = false;
        }
    </script>
    <title>Registrar trabajador</title>
  </head>
  <body> 
  <div class="container"> 
  <?php
    if(isset($_GET['registrar'])){
      $nombre = $_GET['nombre'];
      $apellido1 = $_GET['apellido1'];
      $apellido2 = $_GET['apellido2'];
      $edad = $_GET['edad'];
      $genero = $_GET['genero'];
      $direccion = $_GET['direccion'];
      $codigo_postal = $_GET['codigo_postal'];
      $tipo_licencia = $_GET['tipo_licencia'];
      $ocupacion = $_GET['ocupacion'];
      $area = $_GET['area'];
     
      $res = $conexion->query("insert into usuario values(NULL,'$nombre','$apellido1','$apellido2','$edad','$genero','$direccion','$codigo_postal','$tipo_licencia','$ocupacion','$area')");
    ?>
        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Registro completo!</h4>
        <p>Los datos han del nuevo trabajador sido guardados correctamente</p>
        </div>
        <?php
    }
  ?> 
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Sistema Gestor de Carga Automatizado</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Menu
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../Menu Choferes/menuchoferes.php">Choferes</a>
                <a class="dropdown-item" href="../Menu Operador/menuoperador.php">Operadores</a>
                <a class="dropdown-item" href="../Menu Camiones/menucamiones.php">Camiones</a>
                <a class="dropdown-item" href="../Menu Mercancia/menumercancia.php">Mercancias</a>
                <a class="dropdown-item" href="../Menu Maquinaria/menumaquinaria.php">Maquinaria</a>
                <a class="dropdown-item" href="../Menu Trabajador/menutrabajadores.php">Trabajadores</a>
            </li>
          </ul>
        </div>
      </nav><br>        
      <div class="text-center">
        <h2>Registrar nuevo trabajador</h2>
      </div>
        <h4>Porfavor ingrese sus datos</h4>
        <form class="fregisttro" id="fregistro" method="get">
        <div class="row">
          <div class="form-group col">
              <label for="exampleFormControlInput1">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Nombre" required>
          </div>
          <div class="form-group col">
              <label for="exampleFormControlInput1">Primer apellido</label>
              <input type="text" class="form-control" id="apellido1" name="apellido1" placeholder="Primer apellido" required>
          </div>
          <div class="form-group col">
              <label for="exampleFormControlInput1">Segundo apellido</label>
              <input type="text" class="form-control" id="apellido2" name="apellido2" placeholder="Segundo apellido"  required>
          </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Genero</label>
            <input type="text" class="form-control" id="genero" name="genero" placeholder="Genero" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Codigo postal</label>
            <input type="number" class="form-control" id="codigo_postal" name="codigo_postal" placeholder="Codigo Postal" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tipo de licencia</label>
            <input type="text" class="form-control" id="tipo_licencia" name="tipo_licencia" placeholder="Tipo de licencia" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Ocupacion</label>
            <input type="list" class="form-control" id="ocupacion" name="ocupacion" placeholder="Ocupacion" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Area</label>
            <input type="text" class="form-control" id="area" name="area" placeholder="Area" required>
        </div><br><br>
        <div class="row">
          <div class="form-group col">
              <button type="submit" class="w-100 btn btn-lg btn-primary" name="registrar">Registrar</button>
          </div>
          <div class="col">
            <a class="w-100 btn btn-lg btn-primary" href="../index.php" role="button">Salir</a>
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
