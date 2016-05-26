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
        
        $query = "INSERT INTO Abastecimento (data, combustivel, valor, nome_posto, km) VALUES ('{$date}', '{$fuel}', {$price}, '{$gasStation}', {$mileage})";
        $result = mysqli_query($this->connection, $query);
        return $result;
    }
}