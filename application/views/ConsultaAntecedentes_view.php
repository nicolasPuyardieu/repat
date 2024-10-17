<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Infractores por DNI</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Consultar antecedentes</h1>

        <!-- Formulario de filtro por DNI -->
        <form method="GET" action="<?= site_url('mainController/filtrar_por_dni'); ?>" class="mb-4">
            <div class="form-group">
                <label for="dni">Filtrar por DNI:</label>
                <input type="text" name="dni" id="dni" class="form-control" placeholder="Ingrese el DNI">
            </div>
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </form>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>DNI</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Domicilio Real</th>
                    <th>Correo Electrónico</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($infractores as $infractor): ?>
                <tr>
                    <td><?php echo $infractor->DNI; ?></td>
                    <td><?php echo $infractor->apellido; ?></td>
                    <td><?php echo $infractor->nombre; ?></td>
                    <td><?php echo $infractor->domicilio; ?></td>
                    <td><?php echo $infractor->fecha_nac; ?></td>
                    <td><?php echo $infractor->contacto; ?></td>
                    <td><?php 
                        if ($infractor->estado == 1) echo "Inhabilitado";
                        if ($infractor->estado == 2) echo "Rehabilitado";
                        if ($infractor->estado == 3) echo "Rebelde";
                        if ($infractor->estado == 4) echo "Reincidente";
                        if ($infractor->estado == 5) echo "Suspendido por Ineptitud";
                    ?></td>
                    <td><!-- Acciones --></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
