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

$id = $_GET['id'];

$vehicleDao = new VehicleDao($connection);
$saveImage = new Image();
$resultImg = $saveImage->save($image);
$nameImg = $saveImage->getName() . ".jpg";


$vehicle = new Vehicle($name, $nameImg, $year, $plate);

$result = $vehicleDao->update($vehicle, $id);

if ($result) {
    $_SESSION['success'] = "Veículo alterado com sucesso";
    header("Location: ../cars.php");
} else {
    $erro = mysqli_error($connection);
    echo $erro;
    $_SESSION['warning'] = "Não foi possível alterar o veículo. Por favor, tente mais tarde!";
    header("Location: ../cars.php");
}