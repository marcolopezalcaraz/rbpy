<?php
require '../config.php';

$ruc = $_POST['ruc'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$phone1 = $_POST['phone1'];
$email = $_POST['email'];
$email1 = $_POST['email1'];
$city_id = $_POST['city_id'];
$address = $_POST['address'];
$tipo_id = $_POST['tipo_id'];
$ramo_id = $_POST['ramo_id'];
$user_id = $_POST['user_id'];
$status = $_POST['status'];

$conexion = mysqli_connect("192.168.0.10", "root", "kakokeko", "rbpy");

// Insertar los datos en la tabla
$sql = "INSERT INTO rb_customer (ruc, name, phone, phone1, email, email1, city_id, address, tipo_id, ramo_id, user_id, status)
        VALUES ('$ruc', '$name', '$phone', '$phone1', '$email', '$email1', '$city_id', '$address', '$tipo_id', '$ramo_id', '$user_id', '$status')";
mysqli_query($conexion, $sql);



// Cerrar la conexión a la base de datos
mysqli_close($conexion);

// Redireccionar al formulario para ingresar otro contrato
header("Location: ../clientesForm.php");
?>