<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gestión de Infractores</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="mb-4">Gestión de Infractores</h1>
                <div class="list-group">
                    <a href="<?= site_url('mainController/cargarInfractor'); ?>" class="list-group-item list-group-item-action">Cargar Infractor</a>
                    <a href="<?= site_url('mainController/listarInfractores'); ?>" class="list-group-item list-group-item-action">Listar Infractores</a>
                    <a href="<?= site_url('mainController/buscarInfractor'); ?>" class="list-group-item list-group-item-action">Gestión Antecedentes</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

