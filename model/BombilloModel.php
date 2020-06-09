<?php
require_once("Conexion.php");

class BombilloModel {
    private $connection;

    function __construct () {
        $this->connection = Conexion::getConnection();
    }

    function insertBombillo($nombre_bombillo, $id_cuartp_fk) {
        $sql = "INSERT INTO bombillo (nombre_bombillo, estado, id_cuarto_fk) VALUES (?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$nombre_bombillo, false, $id_cuartp_fk]);
    }

    function getBombillos() {
        $sql = "SELECT * FROM bombillo";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $resultSet = $statement->fetchAll();
        return $resultSet;
    }

    function getBombilloById($nombre_bombillo) {
        $sql = "SELECT * FROM bombillo WHERE id_bombillo = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$nombre_bombillo]);
        $resulSet = $statement->fetch();
        return $resulSet;
    }

    function getBombilloByName($nombre_bombillo) {
        $sql = "SELECT * FROM bombillo WHERE nombre_bombillo = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$nombre_bombillo]);
        $resulSet = $statement->fetch();
        return $resulSet;
    }

    function cambiarEstadoBombillo($id_bombillo, $estado) {
        $sql = "UPDATE bombillo SET estado = ? WHERE id_bombillo = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$estado, $id_bombillo]);
    }

    function actualizarBombillo($nombre_bombillo, $id_bombillo, $id_cuarto) {
        $sql = "UPDATE bombillo SET nombre_bombillo = ?, id_cuarto_fk = ? WHERE id_bombillo = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$nombre_bombillo, $id_cuarto, $id_bombillo]);
    }

    function eliminarBombillo($id_bombillo) {
        $sql = "DELETE FROM bombillo WHERE id_bombillo = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$id_bombillo]);
    }

}

?>