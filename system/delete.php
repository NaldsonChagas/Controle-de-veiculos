<?php
require_once "../class/dao/VehicleDao.class.php";
require_once "../class/Image.class.php";
require_once "connects.php";

$id = $_GET['id'];

$vehicleDao = new VehicleDao($connection);
$destination = $vehicleDao->getImage($id);

$image = new Image();
$image->deleteImage($destination['foto']);

if($vehicleDao->delete($id)) {
	$_SESSION['success'] = "Veículo deletado com sucesso";
	header("Location: ../cars.php");
} else {
	$_SESSION['warning'] = "Não foi possível deletar o veículo. Por favor, tente mais tarde";
	header("Location: ../cars.php");
}