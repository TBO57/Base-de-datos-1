
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <?php
     $Id_prov = $_REQUEST["Id_proveedor"];
     $Nom = $_REQUEST["Nombre"];  
     $url = $_REQUEST["Pagina_web"]; 
     
    // echo $codigodpto;
     //echo $nombredpto;
    // echo $economiadpto;

    //  $conexion = mysqli_connect("localhost","root","","Pais");
    include("conexion.php");

    $con = conectar();
    
    $sql = "INSERT INTO proveedor(id_proveedor,nombre,pagina_web) VALUES ('$Id_prov','$Nom','$url')";
    // VALUES ("4081","Semic","https://www.semic.es/");
     
    // echo $sql;

     $consulta = mysqli_query($con,$sql) or die ("No se pudieron guardar los datos");

     if ($consulta = 1)
     {
        print "Datos guardados con Exito ";
     }
    ?>
</body>
</html>