<?php
require_once "connects.php";
require_once "../class/model/Supply.class.php";
require_once "../class/dao/SupplyDao.class.php";

$date = $_POST['date'];
$fuel = $_POST['fuel'];
$price = $_POST['price'];
$gasStation = $_POST['gas_station'];
$mileage = $_POST['mileage'];

$supply = new Supply($date, $fuel, $price, $gasStation, $mileage);
$supplyDao = new SupplyDao($connection);


echo $supply->getDate();

if($supplyDao->saveSupply($supply)) {
    $_SESSION['success'] = "Dados salvos com sucesso";
    echo "ok";
    #header("Location: ../history.php");
} else {
    $_SESSION['warning'] = "Não foi possível salvar seus dados. Por favor, tente mais tarde!";
    $error = mysqli_error($connection);
    echo $error;
    #header("Location: ../supply.php");
}