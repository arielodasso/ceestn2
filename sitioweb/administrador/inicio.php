<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("location: ../index.php");
}
?>
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

<?php include("../template/cabecera.php");?>
    
    <div class="container">
        <br>
        <div class="row">

            <div class="col-md-12">
                <div class="jumbotron text-white">
                    <h1 class="display-3">Bienvenido <b>Administrador</b></h1>
                    <p class="lead">Vamos a administrar nuestras noticias en la página web</p>
                    <hr class="my-2">
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="seccion/novedades.php" role="button">Administrar noticias</a>
                    </p>
                </div>
              
            </div>



          
 