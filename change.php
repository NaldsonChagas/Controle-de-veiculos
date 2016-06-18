<?php

function title() {
    return "Controle de seu automóvel - Altere seu veículo";
}

require_once "_comum/header.php";
require_once "system/connects.php";
require_once "class/dao/VehicleDao.class.php";
require_once "class/model/Vehicle.class.php";


$vehicleDao = new VehicleDao($connection);
$array = $vehicleDao->searchVehicleById($_GET['id']);

$vehicle = new Vehicle($array['nome'], $array['imagem'], $array['ano'], $array['placa']);

$action = "system/change.php?id=" . $_GET['id'];
?>
<div class="container">
    <div class="col-md-6 center">
        <h2 class="text-center h2">Alterando veículo: <?= $vehicle->getName(); ?></h2>
        <br>
        <?php
        require_once "_comum/form.php";
        ?>
    </div>
</div>

<?php
require_once "_comum/footer.php";
