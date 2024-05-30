<?php
if(isset($_POST['nombre']) && isset($_POST['direccion']) && isset($_POST['teléfono']) && isset($_POST['correo'])) {
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $obj->guardar($_POST['nombre'],$_POST['direccion'],$_POST['teléfono'],$_POST['correo']);
}
?>
