<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- LINKS DE BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
        <!-- FUENTES DE GOOGLE -->

	<link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- ICONOS FONTAWESOME -->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> 

    <!-- MIS ESTILOS -->
    <link rel="stylesheet" href="../../css/estilos.css">
    <link rel="shortcut icon" href="../img/EEST.png">
</head>
<body>

<?php $url = "http://" .$_SERVER['HTTP_HOST']. "/proyecto/sitioweb" ?>

<div class="padre">

        <!-------HEADER---------- -->
        <!-------MENÚ---------- -->
        <header class="header">
           
          <nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu">
              <div class="container-fluid">
                <a class="navbar-brand" href="../../index.php">
                    <img src="../../img/EEST.png">
                </a>
                <div class="titulo">
                  <a href="../../index.php">
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
                      <a class="nav-link active" aria-current="page" href="<?php echo $url?> /administrador/inicio.php"><i class="fas fa-sort-down"></i>Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $url?>"><i class="fas fa-sort-down"></i>Ver sitio web</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $url?> ../administrador/seccion/cerrar.php"><i class="fas fa-sort-down"></i>Cerrar sesion</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>

      </div>
    
    <div class="container">
        <br>
        <div class="row">