<?php
session_start();
// session_unset();
unset($_SESSION['usuario']);
unset($_SESSION['nombreUsuario']);
session_destroy();
header('Location:../../index.php');
?>