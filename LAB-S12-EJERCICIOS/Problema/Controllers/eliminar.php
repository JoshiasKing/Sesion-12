<?php
require '../Model/database.php';

$db = new Database();
$con = $db->conectar();

$idVenta = isset($_GET['idVenta']) && is_numeric($_GET['idVenta']) ? (int) $_GET['idVenta'] : null;

if ($idVenta === null) {
    header("Location: index.php?mensaje=error");
    exit;
}

$query = $con->prepare("DELETE FROM ventas WHERE idVenta = ?");
$query->execute([$idVenta]);

if ($query->rowCount() > 0) {
    header("Location: index.php?mensaje=exito");
} else {
    header("Location: index.php?mensaje=error");
}
exit;
?>
