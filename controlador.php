<?php 
if (!empty($_POST["registro"])) {
    if (empty($_POST["nombre"]) or empty ($_POST["apellido"]) or empty ($_POST["usuario"]) or empty ($_POST["clave"])){
        echo '<div class="alerta">Uno de los campos está vacio</div>';
    } else {
}
}