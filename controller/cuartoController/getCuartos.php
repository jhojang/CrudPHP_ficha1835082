<?php

require_once("../../model/CuartoModel.php");
$cuartoModel = new CuartoModel();
$listadoCuartos = $cuartoModel->getCuartos();
if (!empty($listadoCuartos)) {
    echo json_encode($listadoCuartos);
} else {
    echo json_encode(false);
}


?>