<?php

require_once("../../model/BombilloModel.php");
$bombilloModel = new BombilloModel();

$nombre_bombillo = $_POST["get_nombre_bombillo"];
$id_bombillo = (int) $_POST["id_bombillo"];
$id_cuarto = (int) $_POST["get_cuarto_bombillo"];

if (trim($nombre_bombillo) == "") {
    echo json_encode("Por favor ingrese el nombre del bombillo");
} else {
    $existencia = $bombilloModel->getBombilloByName($nombre_bombillo);
    if (!empty($existencia)) {
        echo json_encode(false);
    } else {
        $bombilloModel->actualizarBombillo($nombre_bombillo, $id_bombillo, $id_cuarto);
        echo json_encode(true);
    }
}

?>