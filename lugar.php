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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/847028c37f.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/dle7nls.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Lugares para visitar</title>
</head>

<body class="fondo" background="./imagenes/sierras2.png">
    <header>
        <div class="menu">
            <img class="img" src="./imagenes/logo.png" alt="">
            <nav>
            <ul>
                <li><a href="#">Volver</a></li>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Contactanos</a></li>
            </ul>  
            </nav>

        </div>
    </header>
    <div class="pie">
        <div class="cont-pie">
        
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-solid fa-phone"></i>
        <br>
        <br>
        <a class="texto-pie">Municipalidad de Alta Gracia</a>
        <br>
        <a class="sub-texto-pie">Animate a conocer</a>
    </div>
    </div>

    <?php
            
    while($datos=$sql->fetch_object()){ ?>

            <div class="cont">
            
            <div class="card-img" transition-style="in:circle:bottom-left">
                <img class="card" src="data:image/jpg;base64,<?php echo base64_encode($datos->imagen);?>">
            </div>
            <div class="card-info">
                <div class="card-text">
                <p class="text-title"><?= $datos->nombre?></p>
                <p class="text-subtitle"><?= $datos->mas?></p>
                </div>

        </div>
        
       
        <?php
    }
        ?>    



</body>

<style>

    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: quicksand, sans-serif;
    }

    .fondo{
        background-repeat: no-repeat;
        background-size: 100%;
        background-attachment: fixed, fixed;
        
        
    }

            /*Text*/
    p {
        line-height: 140%;
    }

    .text-title {
        font-weight: 900;
        font-size: 30px;
        position: absolute;
        left: 800px;
        top:200px;
        color:black;
    }

    .text-subtitle {
        width:350px;
        position: absolute;
        left: 800px;
        top:250px;
        color: black;
        font-weight: 500;
        font-size: 20px;
    
       
    }


    /* From uiverse.io by @Giuxpro */
    .card {
    background: rgb(46, 44, 44);
    transition: all 100ms;
    width:200px%;
    height:300px;
    position: absolute;
    top:200px;
    left:200px;
    max-width: 500px;
    }

    .card:hover {
    opacity: 0.8;
    transform: scale(1.10);
    }

    .card-img{
        --transition__duration: 3.75s;            /* default: 2.5s */
        --transition__easing: ease-in-out;     /* default: cubic-bezier(.25, 1, .30, 1) */
        --transition__delay: 1.70s; 
    }

    /* BARRA NAVEGACION */
    header{
        background: #CDCFD0 ;
        width: 100%;
        height: 100%;
        clear: both;
        content:'';
        display: table;
    }

    .menu{
        width: 100%;
        height: 100px;
        margin: 0 auto;
    }

    .img{
        position: absolute;
        top: -50px;
        left: 30px;
        width: 170px;
        height: 170px;
        float: left;
    }
    
    nav{
        float: right;
    }

    nav ul li{
        font-weight: 800;
        font-size: 18px;
        list-style: none;
        margin-left:70px;
        float: left;
        padding: 20px 0;
        position: relative;
    }

    nav ul li a{
        text-decoration: none;
        color: black;
        font-weight: bold:

    }



    /* PIE DE LA PAGINA */

    .pie {
    position: absolute;
    top: 920px;
    width: 100%;
    height: 23%;
    background-color: rgb(15, 15, 15);
    color:#CDCFD0;
    cursor: pointer;

    }

    .cont-pie{
        text-align: center;
        margin-top: 20px;
        font-size: 18px;

    }


</style>


</html>

