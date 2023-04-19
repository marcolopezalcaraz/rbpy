<?php
require '../config.php';

$ruc = $_POST['ruc'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$city = $_POST['city'];
$address = $_POST['address'];
$contacto = $_POST['contacto'];
$gerente = $_POST['gerente'];
$estado = $_POST['estado'];


$conexion = mysqli_connect("192.168.0.10", "root", "kakokeko", "rbpy");

// Insertar los datos en la tabla
$sql = "INSERT INTO rb_clientes (ruc, name, phone, email, city, address, contacto, gerente, estado)
        VALUES ('$ruc', '$name', '$phone', '$email', '$city', '$address', '$contacto', '$gerente', '$estado')";
mysqli_query($conexion, $sql);



// Cerrar la conexión a la base de datos
mysqli_close($conexion);

// Redireccionar al formulario para ingresar otro contrato
header("Location: ../clientesForm.php");
?>