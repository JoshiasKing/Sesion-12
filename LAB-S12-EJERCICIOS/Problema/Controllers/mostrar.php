<?php 

require '../Model/database.php';

$db =new Database();
$con =$db->conectar();

$activo = 1;

$comando = $con->prepare("SELECT idVenta, nombre, dni, producto, precio_unitario, cantidad, total FROM ventas
WHERE activo= :mi_activo ORDER BY idVenta ASC");
$comando->execute(['mi_activo' => $activo]);
$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
?>