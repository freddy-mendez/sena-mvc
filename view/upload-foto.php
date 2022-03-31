<!DOCTYPE html>
<html lang="en">
<?php 
$titulo = "Cargar Foto Usuario";
include ('head.php');
?>
<body>
    <div class="container">
        <form action="save-foto.php" method="post" enctype="multipart/form-data">
            <input class="form-control" type="file" name="archivo" accept=".jpg,.jpeg,.png" />
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>
</body>
</html>