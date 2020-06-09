<?php

require_once("../../model/BombilloModel.php");
$bombilloModel = new BombilloModel();

$id_bombillo = (int) $_POST["id_bombillo"];

$bombilloModel->eliminarBombillo($id_bombillo);
echo json_encode(true);

?>