<?php

require_once("../../model/CuartoModel.php");
$cuartoModel = new CuartoModel();

$cuarto = $_POST["cuarto_item"];

if (trim($cuarto) == "") {
    echo json_encode("Por favor ingresa un cuarto");
} else {
    $existencia = $cuartoModel->getCuartoByName($cuarto);
    if (!empty($existencia)) {
        echo jeson_encode(false);
    } else {
        $cuartoModel->insertCuarto($cuarto);
        echo json_encode(true);
    }
}

?>