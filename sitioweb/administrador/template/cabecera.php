<?php

session_start();

  if (!isset($_SESSION['usuario']) ) {
    header("Location:../index.php");
  }else{
    
    if($_SESSION['usuario']=="ok"){
      $nombreUsuario=$_SESSION['nombreUsuario'];


    }

  }

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <!-- FUENTES DE GOOGLE -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- LINKS DE BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- ICONOS FONTAWESOME -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> 

    <!-- MIS ESTILOS -->
    <link rel="stylesheet" href="../../css/estilos.css">

    <link rel="shortcut icon" href="../img/EEST.png">

</head>
<body>
<?php $url = "http://" .$_SERVER['HTTP_HOST']. "proyecto/sitioweb"; ?>


<div class="padre">
        <!-------HEADER---------- -->
        <!--------MENÚ---------- -->
        <header class="header">
           
          <nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu">
              <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="../img/EEST.png">
                </a>
                <div class="titulo">
                  <a href="index.php">
                      <h1>Centro de Estudiantes</h1>
                      <h2>EEST Nº2 "ING. FELIPE SENILLOSA"</h2>
                  </a>
              </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="menu">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.php"><i class="fas fa-sort-down"></i>Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="novedades.php"><i class="fas fa-sort-down"></i>Novedades</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="reclamos.php"><i class="fas fa-sort-down"></i>Reclamos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="propuestas.php"><i class="fas fa-sort-down"></i>Propuestas</a>
                    </li>
                    <li class="nav-item">
                      <a class="login" href="./administrador/index.php">login</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>

      </div>
</header>

  <div class="container">
      <br>
      <div class="row">