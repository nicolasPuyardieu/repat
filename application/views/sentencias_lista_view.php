<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lista de Sentencias</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Lista de Sentencias</h1>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Órgano de Juzgamiento</th>
                    <th>Número de Expediente</th>
                    <th>Fecha de Sentencia</th>
                    <th>Fecha de Carga</th>
                    <th>Lugar</th>
                    <th>ID del Infractor</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sentencias as $sentencia): ?>
                <tr>
                    <td><?php echo $sentencia->sentenciaId; ?></td>
                    <td><?php echo $sentencia->organoJuzgamiento; ?></td>
                    <td><?php echo $sentencia->nroExpediente; ?></td>
                    <td><?php echo $sentencia->fechaSentencia; ?></td>
                    <td><?php echo $sentencia->fechaCarga; ?></td>
                    <td><?php echo $sentencia->lugar; ?></td>
                    <td><?php echo $sentencia->infractorId; ?></td>
                    <td>
                        <a href="<?php echo site_url('sentencias/editar/'.$sentencia->sentenciaId); ?>" class="btn btn-sm btn-warning">Editar</a>
                        <a href="<?php echo site_url('sentencias/eliminar/'.$sentencia->sentenciaId); ?>" class="btn btn-sm btn-danger">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

