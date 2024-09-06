<!doctype html>
<html lang="en">
<?php
    include("../conexion.php");
?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../estilos/bootstrap.min.css">
    <title>Consultar datos de Trabajador</title>
  </head>
  <body>
  <div class="container">
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
      <h1>Consultar datos de trabajador</h1><br>
        <?php
      if(isset($_GET['buscar_usuario'])){
        $usuario=$_GET['buscar'];
        $res = $conexion->query("select nombre from usuario where nombre='$usuario';");
        if (is_null($res)) {
          echo ("El campo nombre está vacío"); 
        }else{
            $buscar = $_GET['buscar'];
            $res = $conexion->query("select id_usuario, nombre, apellido1, apellido2, edad, genero, direccion, codigo_postal, tipo_licencia, ocupacion, area from usuario where nombre='$buscar';");
            while($var_fila=$res->fetch_array()){
                ?>  
                <h3>Datos encontrados de trabajador</h3>
                <table class="table table-dark">
                  <thead>
                    <tr>
                      <th scope="col">ID trabajador</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Primer apellido</th>
                      <th scope="col">Segundo apellido</th>
                      <th scope="col">Edad</th>
                      <th scope="col">Genero</th>
                      <th scope="col">Direccion</th>
                      <th scope="col">Codigo postal</th>
                      <th scope="col">Tipo de licencia</th>
                      <th scope="col">Ocupacion</th>
                      <th scope="col">Area</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  echo "<tr>";
                  echo "<td>".$var_fila["id_usuario"]."</td>";
                  echo "<td>".$var_fila["nombre"]."</td>";
                  echo "<td>".$var_fila["apellido1"]."</td>";
                  echo "<td>".$var_fila["apellido2"]."</td>";
                  echo "<td>".$var_fila["edad"]."</td>";
                  echo "<td>".$var_fila["genero"]."</td>";
                  echo "<td>".$var_fila["direccion"]."</td>";
                  echo "<td>".$var_fila["codigo_postal"]."</td>";
                  echo "<td>".$var_fila["tipo_licencia"]."</td>";
                  echo "<td>".$var_fila["ocupacion"]."</td>";
                  echo "<td>".$var_fila["area"]."</td>";
                  echo "</tr>";
                  ?>
                  </tbody>
                  </table>
                <?php
            }
      }
    }
    ?>  
 
      <div class="row">
        <div class="form-group col">
          <a class="w-100 btn btn-lg btn-primary" href="consultarTrabajador.php" role="button">Atras</a>
        </div>
        <div class="form-group col">
          <a class="w-100 btn btn-lg btn-primary" href="menutrabajadores.php" role="button">Salir</a>
        </div>
      </div>
      </form>
    </div>
   </div> 
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2021–2022 Sistema Gestor de Carga Automatizado</p>
    </footer>
    

   <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>