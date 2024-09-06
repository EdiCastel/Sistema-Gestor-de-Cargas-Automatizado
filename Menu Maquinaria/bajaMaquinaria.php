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
    <title>Baja Maquinaria</title>
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
      <h1>Dar de baja datos de maquinaria</h1><br>
      <p>Ingrese las placas de la maquinaria que desea buscar</p>
      <form class="fregisttro" id="fregistro" action="DarBajaMaquinaria.php" method="get">
      <div class="row">
        <div class="form-group col-9">
            <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Buscar" >
        </div>
          <div class="col-3">
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg btn-block" name="buscar_usuario">Buscar</button>
            </div>
        </div>
      </div> 
      <div class="row">
        <div class="form-group col">
        </div>
        <div class="form-group col">
        <a class="w-100 btn btn-lg btn-primary" href="menumaquinaria.php" role="button">Atras</a>
        </div>
        <div class="form-group col">
        </div>
      </div>
      </form>
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