<?php
require_once "system/connection.php";
require_once "class/model/Vehicle.class.php";
require_once "class/dao/VehicleDao.class.php";

$name = $_POST['name'];
$image = $_FILE['image'];
$year = $_POST['year'];
$plate = $_POST['plate'];