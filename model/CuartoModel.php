<?php
require_once("Conexion.php");

class CuartoModel {
    private $connection;

    function __construct () {
        $this->connection = Conexion::getConnection();
    }

    function insertCuarto($cuarto) {
        $sql = "INSERT INTO cuarto (nombre_cuarto) VALUES (?)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$cuarto]);
    }

    function getCuartos() {
        $sql = "SELECT * FROM cuarto";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $resultSet = $statement->fetchAll();
        return $resultSet;
    }

    function getCuartoByName($cuarto) {
        $sql = "SELECT * FROM cuarto WHERE nombre_cuarto = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$cuarto]);
        $resulSet = $statement->fetch();
        return $resulSet;
    }


}

?>