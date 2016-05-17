<?php
function title()
{
	return "Controle do seu automóvel - Meus carros";
}

require_once "_comum/header.php";
require_once "system/connects.php";
require_once "system/show-alerts.php";
require_once "class/model/Vehicle.class.php";
require_once "class/dao/VehicleDao.class.php";

$vehicleDao = new VehicleDao($connection);
$vehicles = $vehicleDao->list();

?>
<div class="container">
	<div class="col-md-7 center">
	
		<h2 class="text-center h2">Meus carros</h2>
		<br>
		<?php
			showAlert('success');
			showAlert('warning');
		?>
		<a href="new-vehicle.php" class="btn btn-primary pull-right">Novo veículo &nbsp; <span class="glyphicon glyphicon-plus"></span></a>

		<table class="table table-striped table-bordered" style="margin-top:50px;">
			<thead>
				<tr>
					<th>Imagem</th>
					<th>Nome</th>
					<th>Ano</th>
					<th>Placa</th>
				</tr>
			</thead>

			<tbody>
				<?php
				foreach($vehicles as $vehicle):
				?>
				<tr>
					<td><img src="<?= $vehicle->getImage(); ?>" width="50" height="50"></td>
					<td><?= $vehicle->getName(); ?></td>
					<td><?= $vehicle->getYear(); ?></td>
					<td><?= $vehicle->getPlate(); ?></td>
				</tr>
				<?php
				endforeach;
				?>
			</tbody>
		</table>

	</div>
</div>
<?php
require_once "_comum/footer.php";
?>