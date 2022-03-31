<?php

require_once('../entity/Usuario.php');

session_start();

//echo var_dump($_FILES);

$user = $_SESSION['user'];

$dir_subida = 'images/'.$user->username.'-';
$fichero_subido = $dir_subida . basename($_FILES['archivo']['name']);

//echo $fichero_subido;

if (move_uploaded_file($_FILES['archivo']['tmp_name'], '../'.$fichero_subido)) {
    echo "<script>alert('El fichero es válido y se subió con éxito.');";
    echo "//window.location.href='../index.php';";
    echo "</script>";
    header("Location: ../index.php?action=save-foto&file_name=".$fichero_subido);
} else {
    echo "<script>alert('¡Posible ataque de subida de ficheros!.');";
    echo "//window.location.href='../index.php';";
    echo "</script>";
}





?>