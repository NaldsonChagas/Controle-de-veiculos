<?php

/*
 * @author: Naldson
 * @version: 1.0
 */

class VehicleDao {

    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function saveVehicle($vehicle) {
        $name = mysqli_real_escape_string($this->connection, $vehicle->getName());
        $year = mysqli_real_escape_string($this->connection, $vehicle->getYear());
        $plate = mysqli_real_escape_string($this->connection, $vehicle->getPlate());
        $image = mysqli_real_escape_string($this->connection, $vehicle->getImage());

        echo $query = "INSERT INTO Carro (nome, ano, placa, foto) VALUES ('{$name}', {$year}, '{$plate}', '{$vehicle->getImage()}')";
        $result = mysqli_query($this->connection, $query);
        return $result;
    }

    public function listVehicle() {
        $vehicles = array();
        $query = "SELECT * FROM Carro";
        $result = mysqli_query($this->connection, $query);
        while ($array = mysqli_fetch_assoc($result)) {
            $vehicle = new Vehicle($array['nome'], $array['foto'], $array['ano'], $array['placa']);
            $vehicle->setId($array['id']);
            array_push($vehicles, $vehicle);
        }
        return $vehicles;
    }

    public function searchVehicleById($id) {
        $query = "SELECT * FROM Carro WHERE id = {$id}";
        $result = mysqli_query($this->connection, $query);
        $vehicle = mysqli_fetch_assoc($result);
        return $vehicle;
    }

    public function delete($id) {
        $query = "DELETE FROM Carro WHERE id = '{$id}'";
        $result = mysqli_query($this->connection, $query);
        return $result;
    }

    public function update($vehicle, $id) {
        $name = mysqli_real_escape_string($this->connection, $vehicle->getName());
        $year = mysqli_real_escape_string($this->connection, $vehicle->getYear());
        $plate = mysqli_real_escape_string($this->connection, $vehicle->getPlate());
        $image = mysqli_real_escape_string($this->connection, $vehicle->getImage());

        echo $query = "UPDATE Carro SET nome = '{$name}', ano = {$year}, placa = '{$plate}', foto = '{$image}' WHERE id = {$id}";
        $result = mysqli_query($this->connection, $query);
        return $result;
    }

    public function getImage($id) {
        $id = mysqli_real_escape_string($this->connection, $id);
        $query = "SELECT foto FROM Carro WHERE id = {$id}";
        $result = mysqli_query($this->connection, $query);
        $image = mysqli_fetch_assoc($result);
        return $image;
    }

}
