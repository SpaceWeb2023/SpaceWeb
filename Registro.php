<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPACE WEB</title>
    <link rel="stylesheet" href="index.html">
    <link rel="icon" href="img/icono1.png" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>
<body>
    

    <section class="tank-bootstrap-header">
        <nav class="navbar navbar-expand-lg navbar-light py-lg-3 py-2">
            <div class="container">
                <a class="navbar-brand" href="index.html">SPACE WEB</a>
                <button class="navbar-toggler" type="button" 
                data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse"  id="navbarSupportedContent" >
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Registro.php">Registro</a>
                        </li>
                    </ul>
                </div>
           </div> 
        </nav>
    </section>

    <div class="container">
    <form action="" method="POST" class="form">
        <h2 class="titulo">REGISTRARSE</h2>
        <?php
        include("conexion.php");
        include("controlador.php");
        ?><br>
    
    <img src="img/regis.gif" alt="Animated GIF" style="float: right; margin: 0 0 10px 10px; width:40%";>
    <br>
        <div class="padre">
            <div class="nombre">
                <label for="">Nombres</label>
                <input type="text" name="nombre">
            </div>
            <div class="apellido">
                <Label for="">Apellidos</label>
                <input type="text" name="apellido">
            </div>
            <div class="usuario">
                <label for="">Usuario</label>
                <input type="text" name="usuario">
            </div>
            <div CLass="clave">
                <label for="">Contraseña</label>
                <input type="password" name="clave">
            </div>
            <div class="cuenta">
                <input class="boton" type="submit" value="Registrar" name="registro">
                <a href="login.php">Salir</a>
            </div>
        
    </form>
    </div>
</body>
</html>

