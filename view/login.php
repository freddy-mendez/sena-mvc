<!DOCTYPE html>
<html lang="es">
<?php
$titulo="Login de Usuario";
include_once('head.php');
?>
<body>
    <div class="container">
        <div class="row mt-2">
            <div class="col-md-6 offset-md-3">
                <form method="post" action="index.php?action=login">
                    <input type="text" name="username" class="form-control" placeholder="Username" />
                    <input type="password" class="form-control" placeholder="Contraseña" name="password" />
                    <button type="submit" name="login" class="btn btn-success"><i class="fa-solid fa-hammer"></i></button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>