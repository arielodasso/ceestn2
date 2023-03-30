<?php include("../../template/cabecera.php");?>
<?php

session_start();
if(!isset($_SESSION['usuario'])){
    header("location: ../index.php");
}

$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtTitulo=(isset($_POST['txtTitulo']))?$_POST['txtTitulo']:"";
$txtDescripcion=(isset($_POST['txtDescripcion']))?$_POST['txtDescripcion']:"";
$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("../config/bd.php");

switch ($accion) {

    // Agregar NOTICIA

    case "Agregar":
        $sentenciaSQL=$conexion->prepare("INSERT INTO noticias (titulo, imagen, descripcion) VALUES (:titulo, :imagen, :descripcion);");
        $sentenciaSQL->bindParam(':titulo',$txtTitulo);
        $sentenciaSQL->bindParam(':descripcion',$txtDescripcion);

        // Para no repetir IMAGEN
        $fecha= new DateTime();
        $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
        
        $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

        if($tmpImagen!=""){

            move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo);
        }



        $sentenciaSQL->bindParam(':imagen',$nombreArchivo);
        $sentenciaSQL->execute();

        header("Location:novedades.php");
        break;

    case "Modificar":

        // Modificar TITULO Y DESCRIPCION

        $sentenciaSQL=$conexion->prepare("UPDATE noticias set titulo=:titulo where id=:id");
        $sentenciaSQL->bindParam(':titulo',$txtTitulo);
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();

        $sentenciaSQL=$conexion->prepare("UPDATE noticias set descripcion=:descripcion where id=:id");
        $sentenciaSQL->bindParam(':descripcion',$txtDescripcion);
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();

        // Modificar IMAGEN

        if($txtImagen!=""){

            $fecha= new DateTime();
            $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
            $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

            move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo);


            $sentenciaSQL=$conexion->prepare("SELECT imagen FROM noticias where id=:id");
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute();
            $noticia=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
    
    
            if (isset($noticia["imagen"]) &&($noticia["imagen"]!="imagen.jpg") ) {
    
                if (file_exists("../../img/".$noticia["imagen"])) {

                    unlink("../../img/".$noticia["imagen"]);
                    
                }
                
            }


            $sentenciaSQL=$conexion->prepare("UPDATE noticias set imagen=:imagen where id=:id");
            $sentenciaSQL->bindParam(':imagen',$nombreArchivo);
            $sentenciaSQL->bindParam(':id',$txtID);
            $sentenciaSQL->execute();
        }
        header("Location:novedades.php");
        break;

    case "Cancelar":
        header("Location:novedades.php");
        break;

    case "Seleccionar":

        $sentenciaSQL=$conexion->prepare("SELECT * FROM noticias where id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
        $noticia=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

        $txtTitulo=$noticia['titulo'];
        $txtImagen=$noticia['imagen'];
        $txtDescripcion=$noticia['descripcion'];


    break;

    case "Borrar":

        $sentenciaSQL=$conexion->prepare("SELECT imagen FROM noticias where id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
        $noticia=$sentenciaSQL->fetch(PDO::FETCH_LAZY);


        // Busca si existe la imagen
        if (isset($noticia["imagen"]) &&($noticia["imagen"]!="imagen.jpg") ) {

            if (file_exists("../../img/".$noticia["imagen"])) {
                // Elimina la imagen
                unlink("../../img/".$noticia["imagen"]);
                
            }
            
        }


        $sentenciaSQL=$conexion->prepare("DELETE FROM noticias where id=:id");
        $sentenciaSQL->bindParam(':id',$txtID);
        $sentenciaSQL->execute();
        header("Location:novedades.php");
    break;



    }

    $sentenciaSQL=$conexion->prepare("SELECT * FROM noticias");
    $sentenciaSQL->execute();
    $listaNoticias=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<!-- formulario agregar noticias -->
<div class="col-md-5">
    

    <div class="card">
        <div class="card-header">
            Datos de la Noticia
        </div>
        <div class="card-body">

        <form method="POST" enctype="multipart/form-data">

            <!--<div class = "form-group">
            <label for="textID">ID:</label>
            <input type="text" required readonly class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID" placeholder="ID">
            </div>-->

            <div class = "form-group">
            <label for="txtTitulo">Titulo:</label>
            <input type="text" required class="form-control" value="<?php echo $txtTitulo; ?>" name="txtTitulo" id="txtTitulo" placeholder="Titulo de la noticia">
            </div>

            <div class = "form-group">
            <label for="txtImagen">Imagen:</label>

            <br>

            <?php  if ($txtImagen!="") { ?>

                <img class="img-thumbnail rounded" src="../../img/<?php echo $txtImagen; ?>" max-widht="" alt="" srcset="">

            <?php } ?>

            <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Titulo de la noticia">
            </div>

            <div class = "form-group">
            <label for="textDescripcion">Descripcion:</label>
            <input type="text" required class="form-control" value="<?php echo $txtDescripcion; ?>" name="txtDescripcion" id="txtDescripcion" placeholder="Descripcion">
            </div>

            <div class="btn-group" role="group" aria-label="">
                <button type="submit" name="accion" <?php echo($accion=="Seleccionar")?"disabled":""; ?> value="Agregar" class="btn btn-success">Agregar</button>
                <button type="submit" name="accion" <?php echo($accion!="Seleccionar")?"disabled":""; ?> value="Modificar" class="btn btn-warning">Modificar</button>
                <button type="submit" name="accion" <?php echo($accion!="Seleccionar")?"disabled":""; ?> value="Cancelar" class="btn btn-info">Cancelar</button>
            </div>

        </form>

        </div>

    </div>

    
    
    

</div>
<!-- tabla de noticias(mostrar los datos de las noticias) -->
<div class="col-md-7">
    <table class="table table-bordered bg-light">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaNoticias as $noticia) {?>
            <tr>
                <td><?php echo $noticia['titulo']; ?></td>
                
                <td>

                    <img class="img-thumbnail rounded" src="../../img/<?php echo $noticia['imagen']; ?>" widht="50" alt="">
                    
                </td>
                
                <td><?php echo $noticia['descripcion']; ?></td>

                <td>


                    <form method="post">

                        <input type="hidden" name="txtID" id="txtID" value="<?php echo $noticia['id']; ?>">

                        <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary">

                        <input type="submit" name="accion" value="Borrar" class="btn btn-danger">

                    </form>



                </td>

            </tr>
            <?php } ?>

        </tbody>
    </table>
    
</div>



<?php include("../template/pie.php");?>