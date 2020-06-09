<?php

    require_once("../../model/BombilloModel.php");
    
    $bombilloModel = new BombilloModel();
    $listadoBombillos = $bombilloModel->getBombillos();
    if (!empty($listadoBombillos)) {
        echo json_encode($listadoBombillos);
    } else {
        echo json_encode(false);
    }

?>