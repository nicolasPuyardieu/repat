<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Sentencias</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Formulario de Sentencias</h2>


        <div class="form-group">
            <label for="organoJuzgamiento">Órgano de Juzgamiento</label>
            <input type="text" class="form-control" id="organoJuzgamiento" name="organoJuzgamiento" value="" required>
        </div>

        <div class="form-group">
            <label for="nroExpediente">Número de Sentencia</label>
            <input type="number" class="form-control" id="nroExpediente" name="nroExpediente" value="" required>
        </div>

        <div class="form-group">
            <label for="fechaSentencia">Fecha de Sentencia</label>
            <input type="date" class="form-control" id="fechaSentencia" name="fechaSentencia" value="" required>
        </div>


         <div class="mb-3">
                <label for="localidad" class="form-label">lugar:</label>
                <select class="form-control" id="localidad" name="localidad">
                    <option value="">Selecciona...</option>
                </select>
            </div>

        <div class="form-group">
            <label for="infractorId">DNI del Infractor</label>
            <input type="number" class="form-control" id="infractorId" name="infractorId" value="" required>
        </div>
        <div class="form-group">
            <label for="organoJuzgamiento">Jurisdiccion</label>
            <input type="text" class="form-control" id="organoJuzgamiento" name="organoJuzgamiento" value="" required>
        </div>



        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="<?php echo site_url('sentencia'); ?>" class="btn btn-secondary">Cancelar</a>
            </div>



    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
