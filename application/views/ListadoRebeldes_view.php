<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Infractores con Estado 3</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Lista de Infractores</h1>

        <!-- Formulario de filtro -->
        <form method="GET" action="<?= site_url('mainController/filtrar'); ?>" class="mb-4">
            <div class="form-group">
                <label for="estado">Filtrar por Estado:</label>
                <select name="estado" id="estado" class="form-control">
                    <option value="">Todos</option>
                    <option value="1">Inhabilitado</option>
                    <option value="2">Rehabilitado</option>
                    <option value="3">Rebelde</option>
                    <option value="4">Reincidente</option>
                    <option value="5">Sancionado con multa</option>
                    <!--<option value="6">Sancionado con multa</option>-->
                </select>
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
