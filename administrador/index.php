<?php
session_start();
if ($_POST) {
    if (($_POST['usuario'] == 'Kevin') && ($_POST['contrasenia'] == '0117')) {
        $_SESSION['usuario'] = 'ok';
        $_SESSION['nombreUsuario'] = 'Kevin';
        header('Location: inicio.php');
    } else {
        $mensaje = 'Error: El usuario o contraseña son incorrectos';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador del sitio web</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/index2.css">
</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col-md-4">

            </div>

            <div class="col-md-4">
                <br><br><br>
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">

                        <?php if (isset($mensaje)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $mensaje; ?>
                            </div>
                        <?php } ?>
                        <form method="post">

                            <div class="form-group">
                                <label>Usuario</label>
                                <input type="text" class="form-control" name="usuario">
                            </div>

                            <div class="form-group">
                                <label>Contraseña</label>
                                <input type="password" class="form-control" name="contrasenia">
                            </div>

                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </form>



                    </div>
                </div>

            </div>

        </div>
    </div>

</body>

</html>