<?php
require "conexion.php";

$sql = "SELECT * FROM clientes ORDER BY id DESC";
$result = $conexion->query($sql);

$clientes = [];

while ($row = $result->fetch_assoc()) {
    $clientes[] = $row;
}

echo json_encode($clientes);
