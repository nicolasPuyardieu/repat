<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cargar Inhabilitación</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Cargar Inhabilitación</h1>
        <form method="post" action="<?php echo site_url('mainController/cargarInhabilitacion'); ?>">
            <div class="form-group">
                <label for="tipo_inhabilitacion">Tipo de Inhabilitación</label>
                <select class="form-control" id="tipo_inhabilitacion" name="tipo_inhabilitacion" required>
                    <option value="administrativa">Administrativa</option>
                    <option value="judicial">Judicial</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fecha_inicio">Fecha de Inicio</label>
                <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
            </div>
            <div class="form-group">
                <label for="fecha_fin">Fecha de Fin</label>
                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required>
            </div>
            <div class="form-group">
                <label for="documento_infractor">Documento del Infractor</label>
                <input type="number" class="form-control" id="documento_infractor" name="documento_infractor" required>
            </div>
            <div class="form-group">
                <label for="numero_sentencia">Número de Sentencia</label>
                <input type="number" class="form-control" id="numero_sentencia" name="numero_sentencia" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" required>
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
