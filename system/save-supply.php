<?php
require_once "connects.php";
require_once "../class/model/Supply.class.php";

$date = $_POST['date'];
$fuel = $_POST['fuel'];
$price = $_POST['price'];
$gasStation = $_POST['gas_station'];

$supply = new Supply($date, $fuel, $price, $gasStation);