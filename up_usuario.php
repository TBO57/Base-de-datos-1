
<?php

include("conexion.php");

$con=conectar();

$Id_user = $_POST['Id_usuario'];
$Tel =$_POST['Telefono'];
$Nom =$_POST['Nombre'];
$email =$_POST['Correo'];
$pwd =$_POST['Contraseña'];

$sql="UPDATE usuario SET Telefono='$Tel',Nombre='$Nom',Correo='$email',Contraseña='$pwd' WHERE Id='$Id_user'";
// $sql="UPDATE departamentos SET Nombre='$nombre_',Economia='$economia_' WHERE IdDpto='$codigo_dpto_'";

$query=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

 if($query){

  Header("Location: mostrar_usuario.php");
 }
 
?>

</body>
</html>
<!-- Ventana de Confirmación -->