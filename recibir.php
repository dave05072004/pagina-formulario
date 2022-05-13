<?php 
     $con=mysqli_connect('localhost', 'root','','formulari') or die('Error en la
conexion servidor');

     $sql="INSERT INTO registro
VALUES(null, '".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["email"]."' ,'".$_POST["pass"]."','".$_POST["sexo"]."')";
     
     $resultado=mysqli_query($con, $sql) or die ('Error en el query database'); mysqli_close($con);
echo 'El ingresado es: '.$_POST["nombre"].$_POST["apellido"].'<br>';
echo 'El correo es: '.$_POST["email"].'<br>';
echo 'El sexo es: '.$_POST["sexo"].'<br>';

?>