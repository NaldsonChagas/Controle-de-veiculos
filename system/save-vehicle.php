<?php
require_once "connects.php";
require_once "../class/model/Vehicle.class.php";
require_once "../class/dao/VehicleDao.class.php";
require_once "../class/SaveImage.class.php";

$name = $_POST['name'];
$image = $_FILE['image'];
$year = $_POST['year'];
$plate = $_POST['plate'];

echo $name;

$vehicleDao = new VehicleDao($connection);
$saveImage = new SaveImage($image);
$resultImg = $saveImage->generateName();
$vehicle = new Vehicle($name, $resultImg, $year, $plate);


if($vehicleDao->saveVehicle($vehicle)) {
	$_SESSION['success'] = "Veículo salvo com sucesso";
	header("Location: ../cars.php");
} else {
	$_SESSION['warning'] = "Não foi possível salvar seu veículo, tente mais tarde";
	header("Location: ../cars.php");
}