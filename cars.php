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
$vehicles = $vehicleDao->listVehicle();

?>
<div class="container">
	<div class="col-md-7 center">
        <?php
        showAlert('success');
        showAlert('warning');
        ?>
		<?php
		if(count($vehicles) == 0) {
		?>
			<h3 class="h3 text-center">Ainda não temos nenhum veículo salvo.</h3>
			<br>
			<div style="text-align: center;">
				<a href="new-vehicle.php" class="btn btn-primary">Que tal adicionar um novo veículo?</a>
			</div>
		<?php
		} else {
			?>

			<h2 class="text-center h2">Meus carros</h2>
			<br>
			<a href="new-vehicle.php" class="btn btn-primary pull-right">Novo veículo &nbsp; <span
					class="glyphicon glyphicon-plus"></span></a>

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
				foreach ($vehicles as $vehicle):
					?>
					<tr>
                        <?php
                            if(file_exists("public/img/vehicles/".$vehicle->getImage())) {
                        ?>
						<td><img src="public/img/vehicles/<?= $vehicle->getImage(); ?>" width="50" height="50"></td>
                        <?php
                            } else {
                        ?>
                        <td><img src="public/img/car.png" width="50" height="50"></td>
                        <?php
                            }
                        ?>
						<td><?= $vehicle->getName(); ?></td>
						<td><?= $vehicle->getYear(); ?></td>
						<td><?= $vehicle->getPlate(); ?></td>
						<td>
							<div class="dropdown">
								<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
										data-toggle="dropdown" aria-haspopup="true" aria-expended="true">
									Ações
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									<li><a href="change.php?id=<?= $vehicle->getId(); ?>">Alterar <span class="glyphicon glyphicon-cog"></span></a></li>
									<li><a href="system/delete.php?id=<?= $vehicle->getId(); ?>">Deletar <span
												class="glyphicon glyphicon-trash"></span></a></li>
								</ul>
							</div>
						</td>
					</tr>
					<?php
				endforeach;
				?>
				</tbody>
			</table>

			</div>
			</div>
			<?php
		}
require_once "_comum/footer.php";
?>