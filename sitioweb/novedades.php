<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- FUENTES DE GOOGLE -->

  <link rel="preconnect" href="https://fonts.googleapis.com">

  

    <!-- LINKS DE MENU -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



  <!-- LINKS DE BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <!-- ICONOS FONTAWESOME -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!-- Estilos CSS -->
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="../css/estilos.css">
  <!-- <link rel="stylesheet" href="css/estilos.css">  -->
  <link rel="shortcut icon" href="../img/EEST.png">
  <title>Novedades</title>
</head>

<body>
  <div class="padre">
    <!-------HEADER---------- -->
    <!--------MENÚ---------- -->
    <header class="header">
        <nav class="navbar navbar-expand-md navbar-light bg-light" id="menu">
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
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav bg-light">
                    <li class="nav-item bg-light">
                      <a class="nav-link active" aria-current="page" href="index.php"><i class="fas fa-sort-down"></i>Inicio</a>
                    </li>
                    <li class="nav-item bg-light">
                      <a class="nav-link" href="novedades.php"><i class="fas fa-sort-down"></i>Novedades</a>
                    </li>
                    <li class="nav-item bg-light">
                      <a class="nav-link" href="reclamos.php"><i class="fas fa-sort-down"></i>Reclamos</a>
                    </li>
                    <li class="nav-item bg-light">
                      <a class="nav-link" href="propuestas.php"><i class="fas fa-sort-down"></i>Propuestas</a>
                    </li>
                    <li class="nav-item bg-light">
                      <a class="login" href="./administrador/index.php">login</a>
                    </li>
                  </ul>
                </div>
                </div>
            </nav>
        </header> 


  <?php 
        include("administrador/config/bd.php");
        $sentenciaSQL=$conexion->prepare("SELECT * FROM noticias");
        $sentenciaSQL->execute();
        $listaNoticias=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


   foreach($listaNoticias as $noticia ) { ?>
  <div class="row row-cols-1 row-cols-md-2 g-4">

    <div class="col">
      <div class="card m-4">
        <img src="./img/<?php echo $noticia['imagen'];?>" class="card-img-top"  alt="...">
        <div class="card-body">
          <h5 class="card-title">
            <?php echo $noticia['titulo'];?>
          </h5>
          <a name="" id="botonNoticia" class="btn btn-primary"
            href="noticia.php?noticia=<?php echo $noticia['titulo'];?>" role="button">Ver mas</a>
        </div>
      </div>
    </div>

  </div>
  <?php } ?>


  <!------------ FOOTER ----------- -->


  <footer>

    <div class="redes">
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-facebook-square"></i></a>
    </div>
    <div class="direccion">
      <p><b>Leandro Alem 285</b> - CP 7000 - Tandil - Bs. As. - Argentina</p>
    </div>

    <div class="telefono">
      <p><b>Teléfono:</b> 0249 444-2633</p>
    </div>

    <div class="mapa">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3172.564826246463!2d-59.13326178410808!3d-37.32913461424129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95911fe9bee81c69%3A0xf6709ebe0d9afc0!2sTecnica!5e0!3m2!1ses-419!2sar!4v1630502988060!5m2!1ses-419!2sar"
        width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="copyright">
      <p>© 2021 - Centro de Estudiantes Escuela Secundaria Técnica N°2 | All rights reserved</p>
    </div>

  </footer>



  


</body>