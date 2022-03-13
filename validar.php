<?php
include('con_db.php');
$nombre=$_POST['nombre'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['nombre']=$nombre;


$conexion=mysqli_connect("localhost","root","","Registro");

$consulta="SELECT*FROM datos2 where nombre='$nombre' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.html");

}else{
    ?>
    <?php
    include("IniciarSesion.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
