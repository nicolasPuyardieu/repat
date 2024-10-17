<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cargar Infractor</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Cargar Infractor</h1>

        <form method="post" action="<?php echo site_url('mainController/cargarInfractor'); ?>">
            <div class="form-group">
                <label for="documento">Documento</label>
                <input type="number" class="form-control" id="documento" name="documento" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="domicilio">Domicilio</label>
                <input type="text" class="form-control" id="domicilio" name="domicilio" required>
                <div>

       
                    <tr>
                        
                        <label for="localidad" >localidad</label>
                        <select class="form-control" id="domicilio" name="domicilio" required> Localidad 
                <?php foreach ($localidades as $localidad): ?>
                    <td><?php echo $localidad->nombre; ?></td>
                 <option value="<?php echo $localidad->nombre; ?>">
                    <?php echo $localidad->nombre; ?></option>
                <?php endforeach; ?>
            </select>

                </div>
            </div>
            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
            </div>
            <div class="form-group">
                <label for="contacto">Contacto (Email)</label>
                <input type="email" class="form-control" id="contacto" name="contacto" required>
            </div>

            <button type="submit" class="btn btn-primary">Cargar</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
