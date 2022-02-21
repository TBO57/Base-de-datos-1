<?php 

include("conexion.php");

$con=conectar();

$Id_pedido = $_GET['Id'];

$sql="SELECT * FROM producto_pedido WHERE Id_pedido='$Id_pedido'";

$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <b><title>Actualizar Pedido del producto</title></b>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/actualizar.css">
</head>


<body>

<div class="title text-center py-3">
    <h1>Actualizando pedido...</h1> 
</div>

    <div class="tarjeta">

     <div class="row justify-content-center">
      <div style="display: flex; align-items:center;">
        <form action="up_producto_pedido.php?$row['Estado']&$row['Id_pedido']&$row['Codigo_producto']" method="POST">
         <p class="parr mt-2">Estado</p>
         <input type="text" class="form-control mb-2" name="Estado" placeholder="Estado" value="<?php echo $row['Estado']   ?>">
         <p class="parr">Id Pedido</p>
         <input type="text" readonly class="form-control mb-2" name="Id_pedido" placeholder="Id Pedido" value="<?php echo $row['Id_pedido']   ?>">
         <p class="parr">Codigo Producto</p> 
         <input type="text" readonly class="form-control mb-2" name="Codigo_producto" placeholder="Codigo Producto" value="<?php echo $row ['Codigo_producto']  ?>">      
         <div class="parr">     
         <input type="submit" class="btn btn-success mb-2 px-4" value="Actualizar" >
         </div>
        </form>
       
      </div> 
     </div>
    </div>

</body>
</html>