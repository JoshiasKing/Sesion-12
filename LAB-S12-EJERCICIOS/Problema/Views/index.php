<?php include '../Controllers/mostrar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Ventas</title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../public/css/styles.css">
</head>
<body>
    <div class="contenedor">
        <div class="header-bar">
            <div class="header-title">
            <h1><i class="fas fa-store"></i>
                Gestión de Ventas</h1>
            </div>
            <div class="button-container">
                <a href="../generar_pdf.php" class="btn-gradient"> Generar PDF</a>
                <a href="ingresarView.php" class="btn-gradient">Agregar Venta</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>DNI</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>Total</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultado as $row) { ?>
                        <tr>
                            <td><?php echo $row['idVenta']; ?></td>
                            <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($row['dni']); ?></td>
                            <td><?php echo htmlspecialchars($row['producto']); ?></td>
                            <td><?php echo $row['cantidad']; ?></td>
                            <td>S/. <?php echo number_format($row['precio_unitario'], 2); ?></td>
                            <td>S/. <?php echo number_format($row['total'], 2); ?></td>
                            <td>
                                <a href="editarView.php?idVenta=<?php echo $row['idVenta']; ?>" class="btn-action text-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="eliminarView.php?idVenta=<?php echo $row['idVenta']; ?>" class="btn-action text-danger">
                                    <i class="fas fa-file-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>