<?php
require '../Model/database.php';

$db = new Database();
$con = $db->conectar();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idVenta = isset($_POST['idVenta']) && is_numeric($_POST['idVenta']) ? (int) $_POST['idVenta'] : null;
    $nombre = trim($_POST['nombre'] ?? '');
    $dni = trim($_POST['dni'] ?? '');
    $producto = trim($_POST['producto'] ?? '');
    $cantidad = isset($_POST['cantidad']) && is_numeric($_POST['cantidad']) ? (int) $_POST['cantidad'] : 0;
    $precio_unitario = isset($_POST['precio_unitario']) && is_numeric($_POST['precio_unitario']) ? (float) $_POST['precio_unitario'] : 0.0;

    if (empty($nombre) || empty($dni) || empty($producto) || $cantidad <= 0 || $precio_unitario <= 0) {
        die("Todos los campos son obligatorios y deben tener valores válidos.");
    }

    $total = $cantidad * $precio_unitario;

    if (!empty($idVenta)) {
        $query = $con->prepare("
            UPDATE ventas 
            SET nombre = :nombre,
                dni = :dni,
                producto = :producto,
                cantidad = :cantidad,
                precio_unitario = :precio_unitario,
                total = :total
            WHERE idVenta = :idVenta
        ");
        $resultado = $query->execute([
            'nombre' => $nombre,
            'dni' => $dni,
            'producto' => $producto,
            'cantidad' => $cantidad,
            'precio_unitario' => $precio_unitario,
            'total' => $total,
            'idVenta' => $idVenta,
        ]);
    } else {
        $query = $con->prepare("
            INSERT INTO ventas (nombre, dni, producto, cantidad, precio_unitario, total, activo)
            VALUES (:nombre, :dni, :producto, :cantidad, :precio_unitario, :total, :activo)
        ");
        $resultado = $query->execute([
            'nombre' => $nombre,
            'dni' => $dni,
            'producto' => $producto,
            'cantidad' => $cantidad,
            'precio_unitario' => $precio_unitario,
            'total' => $total,
            'activo' => 1,
        ]);
    }

    if ($resultado) {
        header("Location: index.php?mensaje=exito");
        exit;
    } else {
        die("Error al guardar los datos.");
    }
}
?>