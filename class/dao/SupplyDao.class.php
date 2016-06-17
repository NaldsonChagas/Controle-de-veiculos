<?php
/*
* @author: Naldson
* @version: 1.0
*/

class SupplyDao
{
    private $connection;
    
    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    
    public function saveSupply($supply)
    {
        $date = mysqli_real_escape_string($this->connection, $supply->getDate());
        $fuel = mysqli_real_escape_string($this->connection, $supply->getFuel());
        $price = mysqli_real_escape_string($this->connection, $supply->getPrice());
        $gasStation = mysqli_real_escape_string($this->connection, $supply->getGasStation());    
        $mileage = mysqli_real_escape_string($this->connection, $supply->getMileage());
        
        echo $query = "INSERT INTO Abastecimento (data, combustivel, valor, nome_posto, km) VALUES ('{$date}', '{$fuel}', {$price}, '{$gasStation}', {$mileage})";
        $result = mysqli_query($this->connection, $query);
        return $result;
    }

    
    public function listSupply()
    {
        $supplys = array();
        $query = "SELECT * FROM Abastecimento";
        $result = mysqli_query($this->connection, $query);
        while ($array = mysqli_fetch_assoc($result)) {
            $supply = new Supply($array['data'], $array['combustivel'], $array['valor'], $array['nome_posto'], $array['km']);
            array_push($supplys, $supply);
        }
        return $supplys;
    }
}