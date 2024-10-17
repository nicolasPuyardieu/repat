<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($infractor) ? 'Editar Infractor' : 'Crear Infractor'; ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5"><?php echo isset($infractor) ? 'Editar Infractor' : 'Crear Infractor'; ?></h1>
        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
        <?php echo form_open(isset($infractor) ? 'infractor/edit/'.$infractor->id : 'infractor/create'); ?>

        <div class="form-group">
            <label for="documento">Documento</label>
            <input type="number" class="form-control" id="documento" name="documento" value="<?php echo set_value('documento', isset($infractor) ? $infractor->documento : ''); ?>" required>
        </div>

        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo set_value('apellido', isset($infractor) ? $infractor->apellido : ''); ?>" required>
        </div>

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo set_value('nombre', isset($infractor) ? $infractor->nombre : ''); ?>" required>
        </div>

        <div class="form-group">
            <label for="fechaNac">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fechaNac" name="fechaNac" value="<?php echo set_value('fechaNac', isset($infractor) ? $infractor->fechaNac : ''); ?>" required>
        </div>

        <div class="form-group">
            <label for="contacto">Correo Electrónico</label>
            <input type="email" class="form-control" id="contacto" name="contacto" value="<?php echo set_value('contacto', isset($infractor) ? $infractor->contacto : ''); ?>" required>
        </div>

        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="number" class="form-control" id="estado" name="estado" value="<?php echo set_value('estado', isset($infractor) ? $infractor->estado : ''); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary"><?php echo isset($infractor) ? 'Actualizar' : 'Guardar'; ?></button>
        <a href="<?php echo site_url('infractor'); ?>" class="btn btn-secondary">Cancelar</a>
        
        <?php echo form_close(); ?>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>