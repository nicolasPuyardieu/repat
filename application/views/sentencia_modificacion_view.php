<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($sentencia) ? 'Editar Sentencia' : 'Crear Sentencia'; ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5"><?php echo isset($sentencia) ? 'Editar Sentencia' : 'Crear Sentencia'; ?></h1>
        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
        <?php echo form_open(isset($sentencia) ? 'sentencia/edit/'.$sentencia->sentenciaId : 'sentencia/create'); ?>

        <div class="form-group">
            <label for="organoJuzgamiento">Órgano de Juzgamiento</label>
            <input type="number" class="form-control" id="organoJuzgamiento" name="organoJuzgamiento" value="<?php echo set_value('organoJuzgamiento', isset($sentencia) ? $sentencia->organoJuzgamiento : ''); ?>" required>
        </div>

        <div class="form-group">
            <label for="nroExpediente">Número de Expediente</label>
            <input type="number" class="form-control" id="nroExpediente" name="nroExpediente" value="<?php echo set_value('nroExpediente', isset($sentencia) ? $sentencia->nroExpediente : ''); ?>" required>
        </div>

        <div class="form-group">
            <label for="fechaSentencia">Fecha de Sentencia</label>
            <input type="date" class="form-control" id="fechaSentencia" name="fechaSentencia" value="<?php echo set_value('fechaSentencia', isset($sentencia) ? $sentencia->fechaSentencia : ''); ?>" required>
        </div>

        <div class="form-group">
            <label for="fechaCarga">Fecha de Carga</label>
            <input type="date" class="form-control" id="fechaCarga" name="fechaCarga" value="<?php echo set_value('fechaCarga', isset($sentencia) ? $sentencia->fechaCarga : ''); ?>" required>
        </div>

        <div class="form-group">
            <label for="lugar">Lugar</label>
            <input type="text" class="form-control" id="lugar" name="lugar" value="<?php echo set_value('lugar', isset($sentencia) ? $sentencia->lugar : ''); ?>" required>
        </div>

        <div class="form-group">
            <label for="infractorId">ID del Infractor</label>
            <input type="number" class="form-control" id="infractorId" name="infractorId" value="<?php echo set_value('infractorId', isset($sentencia) ? $sentencia->infractorId : ''); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary"><?php echo isset($sentencia) ? 'Actualizar' : 'Guardar'; ?></button>
        <a href="<?php echo site_url('sentencia'); ?>" class="btn btn-secondary">Cancelar</a>
        
        <?php echo form_close(); ?>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>