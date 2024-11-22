<?php include '../Controllers/editar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Venta</title>
    <link rel="stylesheet" href="../public/css/styles1.css">
</head>
<body>
    <main class="contenedor">
        <h4>Editar Venta</h4>
        <form method="POST" action="guardarView.php" autocomplete="off">
            <input type="hidden" id="idVenta" name="idVenta" value="<?php echo htmlspecialchars($row['idVenta']); ?>">

            <div class="form-control">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" 
                       value="<?php echo htmlspecialchars($row['nombre']); ?>" required>
            </div>

            <div class="form-control">
                <label for="dni">DNI</label>
                <input type="text" id="dni" name="dni" 
                       value="<?php echo htmlspecialchars($row['dni']); ?>" required>
            </div>

            <div class="form-control">
                <label for="producto">Producto</label>
                <input type="text" id="producto" name="producto" 
                       value="<?php echo htmlspecialchars($row['producto']); ?>" required>
            </div>

            <div class="form-control">
                <label for="cantidad">Cantidad</label>
                <input type="number" id="cantidad" name="cantidad" 
                       value="<?php echo htmlspecialchars($row['cantidad']); ?>" required>
            </div>

            <div class="form-control">
                <label for="precio_unitario">Precio Unitario (S/)</label>
                <input type="number" step="0.01" id="precio_unitario" name="precio_unitario" 
                       value="<?php echo htmlspecialchars($row['precio_unitario']); ?>" required>
            </div>

            <div class="btn-container">
                <a href="index.php" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-primary" name="actualizar">Actualizar</button>
            </div>
        </form>
    </main>
</body>
</html>