<?php 

session_start();

if ($_POST) {
    if (($_POST['usuario']=="centro")&&($_POST['contrasenia']=="123")) {

      $_SESSION['usuario']="ok";
      $_SESSION['nombreUsuario']="centro";

      header('Location:inicio.php');
    }else{
      $mensaje="Error: El usuario o contraseña son incorrectos";
    }
}


?>


<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!--MIS ESTILOS-->
    <link rel="stylesheet" href="../../css/estilos.css">
    <link rel="shortcut icon" href="../img/EEST.png">

  </head>
  <body>

  
    
    <div class="container p-5">
      <br>
        <div class="row">
            
            <div class="card form-login p-0">
                <div class="card-header ml-2">
                    Login
                </div>

                <div class="card-body">
                  <?php if(isset($mensaje)) {?>
                    <div class="alert alert-danger" role="alert">
                      <?php echo $mensaje?>
                    </div>
                    <?php } ?>
                    
                    <form method="POST" class= "formLogin p-0">
                    <div class = "form-group">
                    <label>Usuario</label>
                    <input type="text" class="form-control" name="usuario" placeholder="Ingrese su usuario">
                    </div>

                    <div class="form-group">
                    <label>Contraseña:</label>
                    <input type="password" class="form-control" name="contrasenia" placeholder="Ingrese su contraseña">
                    </div>

                    <button type="submit" class="btn btn-primary" class="submit">Ingresar</button>
                    </form>
                    
                </div>
                
            </div>

            
        </div>
    </div>
    
  </body>
</html>