<?php
require '../Model/database.php';

$db = new Database();
$con = $db->conectar();

$idVenta = isset($_GET['idVenta']) && is_numeric($_GET['idVenta']) ? (int) $_GET['idVenta'] : null;

if ($idVenta === null) {
    header("Location: index.php");
    exit;
}

$query = $con->prepare("
    SELECT idVenta, nombre, dni, producto, cantidad, precio_unitario, total 
    FROM ventas 
    WHERE idVenta = :idVenta
");
$query->execute(['idVenta' => $idVenta]);

if ($query->rowCount() > 0) {
    $row = $query->fetch(PDO::FETCH_ASSOC);
} else {
    header("Location: ../Views/guardarView.php");
    exit;
}
?>
