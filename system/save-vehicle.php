<?php
require_once "connects.php";
require_once "../class/model/Vehicle.class.php";
require_once "../class/dao/VehicleDao.class.php";
require_once "../class/Image.class.php";

session_start();

$name = $_POST['name'];
$image = $_FILES['image'];
$year = $_POST['year'];
$plate = $_POST['plate'];

$vehicleDao = new VehicleDao($connection);
$saveImage = new Image();
$resultImg = $saveImage->save($image);
$nameImg = $saveImage->getName().".jpg";


$vehicle = new Vehicle($name, $nameImg, $year, $plate);

var_dump($resultImg);

$result = $vehicleDao->saveVehicle($vehicle);

if($result) {
	$_SESSION['success'] = "Veículo salvo com sucesso";
	header("Location: ../cars.php");
	echo "ok";
} else {
	$_SESSION['warning'] = "Não foi possível salvar seu veículo, tente mais tarde";
	$erro = mysqli_error($connection);
	echo $erro;
	header("Location: ../cars.php");
}