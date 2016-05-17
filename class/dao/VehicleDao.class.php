<?php
/*
* @author: Naldson
* @version: 1.0
*/
class VechicleDao
{
	private $connection;

	public function __construct($connection)
	{
		$this->connection = $connection;
	}

	public function saveVehicle($vehicle)
	{
		$name = mysqli_real_scape_string($this->connection, $vehicle->getName());
		$year = mysqli_real_scape_string($this->connection, $vehicle->getYear());
		$plate = mysqli_real_scape_string($this->connection, $vehicle->getPlate());
		$image = mysqli_real_scape_string($this->connection, $vehicle->getImage());

		$query = "INSERT INTO Carro (nome, ano, placa, foto) VALUES ('{$name}', {$year}, '{$plate}', '{$vehicle->getImage()}')";
		$result = mysqli_query($this->connection, $query);
		return $result;
	}
}