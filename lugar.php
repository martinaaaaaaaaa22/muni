<?php
 include "conexion.php";
$id=$_GET["id"];
$sql=$conexion->query("SELECT * FROM lugares WHERE id=$id");

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lugares</title>
</head>
<body>
<?php
            
            while($datos=$sql->fetch_object()){ ?>

<div class="tarjetas">


<div class="card">

    <div class="card-img">
        <img class="fondo" src="data:image/jpg;base64,<?php echo base64_encode($datos->imagen);?>">
    </div>
    <div class="card-info">
        <div class="card-text">
        <p class="text-title"><?= $datos->nombre?></p>
        <p class="text-subtitle"><?= $datos->mas?></p>
        </div>
        
    </div>
           

</div>





</div>
<?php
        }
            ?>    
</body>
</html>