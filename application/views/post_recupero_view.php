<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($sentencia) ? 'Editar Sentencia' : 'Crear Sentencia'; ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .login-container {
            max-width: 400px;
            margin: auto;
            padding-top: 100px;
        }
        .login-form {
            padding: 20px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            background-color: #f8f9fa;
        }
        .login-header {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
    	<div class="login-container">
        <div class="login-form">
            <div class="login-header">
                <h3 class="text-center">Recuperacion de contraseña</h3>
            </div>
            <form method="post" action="<?= site_url('LoginController/index') ?>">
                <div class="form-group">
                    <label for="">se ha enviado un correo por favor veirifiquelo para continuar</label>

                </div>
                <button type="submit" class="btn btn-primary btn-block" >volver</button>
            </form>
        </div>
    </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>





 


