<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Venta</title>
    <link rel="stylesheet" href="../public/css/styles1.css">
</head>
<body>
    <main class="contenedor">
        <h4>Nueva Venta</h4>
        <form method="POST" action="guardarView.php" autocomplete="off">
            <div class="form-control">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-control">
                <label for="dni">DNI</label>
                <input type="text" id="dni" name="dni" required>
            </div>
            <div class="form-control">
                <label for="producto">Producto</label>
                <input type="text" id="producto" name="producto" required>
            </div>
            <div class="form-control">
                <label for="cantidad">Cantidad</label>
                <input type="number" id="cantidad" name="cantidad" required>
            </div>
            <div class="form-control">
                <label for="precio_unitario">Precio Unitario</label>
                <input type="number" step="0.01" id="precio_unitario" name="precio_unitario" required>
            </div>
            <div class="btn-container">
                <a href="index.php" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </main>
</body>
</html>