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
    <title>Actualizar Datos De Maquinaria</title>
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
      <h1>Actualizar Datos De Maquinaria</h1><br>
  <?php
    if(isset($_GET['registrar'])){
      $id = $_GET['id'];
      $marca = $_GET['marca'];
      $modelo = $_GET['modelo'];
      $placas = $_GET['placas'];
      $tipo = $_GET['tipo'];

      $res = $conexion->query("UPDATE maquinaria SET id_maquinaria=id_maquinaria, marca='$marca', modelo='$modelo', placas='$placas', tipo='$tipo' WHERE  id_maquinaria='$id';");
    ?>
        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Registro completo!</h4>
        <p>Los datos de la maquinaria han sido actualizados en la base de datos</p>
        </div>
        <?php
    }
  ?> 
        <?php
      if(isset($_GET['buscar_usuario'])){
        $usuario=$_GET['buscar'];
        $res = $conexion->query("select placas from maquinaria where placas='$usuario';");
        if (is_null($res)) {
          echo ("El campo nombre está vacío"); 
        }else{
            $buscar = $_GET['buscar'];
            $res = $conexion->query("select id_maquinaria, marca, modelo, placas, tipo from maquinaria where placas='$buscar';");
            while($var_fila=$res->fetch_array()){
                ?>  
                <h3>Datos actuales de la maquinaria</h3>
                <table class="table table-dark">
                  <thead>
                    <tr>
                      <th scope="col">ID maquinaria</th>
                      <th scope="col">Marca</th>
                      <th scope="col">Modelo</th>
                      <th scope="col">Placas</th>
                      <th scope="col">Tipo</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  echo "<tr>";
                  echo "<td>".$var_fila["id_maquinaria"]."</td>";
                  echo "<td>".$var_fila["marca"]."</td>";
                  echo "<td>".$var_fila["modelo"]."</td>";
                  echo "<td>".$var_fila["placas"]."</td>";
                  echo "<td>".$var_fila["tipo"]."</td>";
                  echo "</tr>";
                  ?>
                  </tbody>
                  </table>
                  <div class="py-5 text-center">
                    <h2>Actualizar los datos de la maquinaria</h2>
                  </div>
                    <form class="fregisttro" id="fregistro" method="get">
                    <h4>Porfavor ingrese el id actual de la maquinaria</h4>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">ID actual de la maquinaria</label>
                        <input type="number" class="form-control" id="id" name="id" placeholder="Id" required>
                    </div>
                    <h4>Ingrese los nuevos datos de la maquinaria</h4>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Marca</label>
                          <input type="text" class="form-control" id="marca" name="marca"  placeholder="Marca" required>
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Modelo</label>
                          <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo" required>
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Placas</label>
                          <input type="text" class="form-control" id="placas" name="placas" placeholder="Placas"  required>
                      </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tipo</label>
                        <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Tipo" required>
                    </div><br>
                    <div class="form-group">
                      <button type="submit" class="w-100 btn btn-lg btn-primary" name="registrar">Actualizar</button>
                    </div>
                  </form><br>
                
                <?php
            }
      }
    }
    ?>  
 
      <div class="row">
        <div class="form-group col">
          <a class="w-100 btn btn-lg btn-primary" href="ActualizarMaquinaria.php" role="button">Atras</a>
        </div>
        <div class="form-group col">
          <a class="w-100 btn btn-lg btn-primary" href="menumaquinaria.php" role="button">Salir</a>
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