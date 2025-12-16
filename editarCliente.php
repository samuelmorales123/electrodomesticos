<?php
require "conexion.php";

$id = $_POST["id"];

$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$mesa = $_POST["mesa"];
$turno = $_POST["turno"];
$productos = $_POST["productos"];
$stock = $_POST["stock"];
$total = $_POST["total"];
$pago = $_POST["pago"];

$sql = "UPDATE clientes SET
    nombre='$nombre',
    telefono='$telefono',
    direccion='$direccion',
    mesa=$mesa,
    turno='$turno',
    productos='$productos',
    stock=$stock,
    total=$total,
    pago='$pago'
WHERE id=$id";

if ($conexion->query($sql)) {
    echo "OK";
} else {
    echo "ERROR";
}
