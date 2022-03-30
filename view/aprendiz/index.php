<?php
require_once('entity/Aprendiz.php');
require_once('entity/Usuario.php');

$user = $_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="es">
<?php
$titulo="Lista de Aprendices";
include ('view/head.php');
?>
<body>
    <div class="container">
        <h1 class="mt-3"><?php echo $titulo; ?></h1>
        <br><br>
        <?php
        if ($user->rol == 'Admin') {
        ?>
        <a href="index.php?obj=aprendiz&action=agregar" class="btn btn-success">Crear Aprendiz</a>
        <?php } ?>
        <br><br>
        <?php
        if (count($aprendices)>0) {
            ?>
            <table class="table table-striped">
                <thead>
                    <th>Id</th>
                    <th>Documento</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <?php
                        if ($user->rol == 'Admin') {
                    ?>
                    <th>Opciones</th>
                    <?php
                        }
                        ?>
                </thead>
                <tbody>
                    <?php
                    foreach($aprendices as $aprendiz) {
                        echo "<tr>";
                        echo "<td>$aprendiz->id</td>";
                        echo "<td>$aprendiz->documento</td>";
                        echo "<td>$aprendiz->nombres</td>";
                        echo "<td>".$aprendiz->apellidos."</td>";
                        echo "<td>".(($aprendiz->email)?$aprendiz->email:"No tienen Email")."</td>";
                        echo "<td>";
                        if ($user->rol == 'Admin') {
                        echo "<a href='index.php?obj=aprendiz&action=editar&id=$aprendiz->id' class='btn btn-warning me-1'>Editar</a>";
                        echo "<a href='index.php?obj=aprendiz&action=eliminar&id=$aprendiz->id' class='btn btn-danger'>Eliminar</a>";
                        }
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <?php
        } else {
            echo "<h2>No existen aprendices</h2>";
        }
        ?>
    </div>
</body>
</html>