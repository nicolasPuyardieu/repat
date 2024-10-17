<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Inhabilitaciones</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Lista de Inhabilitaciones</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Tipo de Inhabilitación</th>
                    <th>Fecha de Inicio</th>
                    <th>Fecha de Fin</th>
                    <th>Fecha de Carga</th>
                    <th>DNI del Infractor</th>
                    <th>NRO de la Sentencia</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inhabilitaciones as $inhabilitacion): ?>
                <tr>
                    <td><?php echo $inhabilitacion->tipo_inhabilitacion; ?></td>
                    <td><?php echo $inhabilitacion->fecha_inicio; ?></td>
                    <td><?php echo $inhabilitacion->fecha_fin; ?></td>
                    <td><?php echo $inhabilitacion->fecha_carga; ?></td>
                    <td><?php echo $inhabilitacion->infractor_id; ?></td>
                    <td><?php echo $inhabilitacion->sentencia_id; ?></td>
                    <td><?php echo $inhabilitacion->estado; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
