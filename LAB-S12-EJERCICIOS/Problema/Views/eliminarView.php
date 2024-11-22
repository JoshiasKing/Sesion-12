<?php include '../Controllers/eliminar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Venta</title>
    <link rel="stylesheet" href="../public/css/styles2.css">
</head>
<body>
    <main class="conteiner">
        <div class="p-3 rounded">
            <h3>
                <?php if ($numElimina > 0) { ?>
                    Venta Eliminada
                <?php } else { ?>
                    Error al eliminar la venta
                <?php } ?>
            </h3>
            <a class="btn" href="index.php">Regresar</a>
        </div>
    </main>
</body>
</html>