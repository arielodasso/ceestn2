<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FUENTES DE GOOGLE -->

        <link rel="preconnect" href="https://fonts.googleapis.com">

<!-- LINKS DE BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<!-- ICONOS FONTAWESOME -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Estilos CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="../img/EEST.png">
    <title>Novedades</title>
</head>
<body>
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
                      <a class="nav-link" href="productos.php"><i class="fas fa-sort-down"></i>Novedades</a>
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
            </nav>
        </header>
      </div>


<?php 
include("administrador/config/bd.php");
$sentenciaSQL=$conexion->prepare("SELECT * FROM noticias");
$sentenciaSQL->execute();
$listaNoticias=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($listaNoticias as $noticia ) { ?>

<div class="col-md-3 m-2">
    <div class="card">
        <img class="card-img-top" src="./img/<?php echo $noticia['imagen'];?>" alt="">
        <div class="card-body bg-light">
            <h4 class="card-title"><?php echo $noticia['titulo'];?></h4>
            <a name="" id="botonNoticia" class="btn btn-secondary" href="noticia.php" role="button">Ver mas</a>
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



</div>


</body>
