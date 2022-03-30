<!DOCTYPE html>
<html lang="es">
<?php


$user = $_SESSION['user'];

$titulo="Menu Principal";
include ('head.php');
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-body">
                        Bienvenido <?php echo $user->nombre." ".$user->apellido; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-8 offset-lg-2 text-center">
                <a href="index.php?obj=aprendiz" class="btn btn-primary ">Gestionar Aprendiz</a><br>
                <a href="index.php?obj=instructor" class="btn btn-primary mt-2">Gestionar Instructor</a><br>
                <a href="index.php?obj=curso" class="btn btn-primary mt-2">Gestionar Curso</a><br>
                <br><br>
                <a href="index.php?action=logout" class="btn btn-primary mt-2">Cerrar Sesion</a>
            </div>
        </div>
    </div>
</body>
</html>