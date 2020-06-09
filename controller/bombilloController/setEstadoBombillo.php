<?php

require_once("../../model/BombilloModel.php");
$bombilloModel = new BombilloModel();

$id_bombillo = (int) $_POST["id"];
$estado = $_POST["state"];

$bombilloModel->cambiarEstadoBombillo($id_bombillo, $estado);
if ($estado == "1") {
    echo json_encode(true);
} else {
    echo json_encode(false);
}


?>