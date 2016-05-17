<?php
function title()
{
	return "Controle do seu automóvel - Adicione um novo veículo";
}

require_once "_comum/header.php";
?>

<div class="container">
	<div class="col-md-6 center">
		<h2 class="text-center h2">Adicione um novo veículo</h2>
		<br>
		<form action="save-vehicle.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<input type="text" name="name" class="form-control" placeholder=" Nome">
			</div>

			<div class="form-group">
				<input type="file" name="image">
			</div>

			<div class="form-group">
				<input type="number" name="year" class="form-control" placeholder=" Ano">
			</div>

			<div class="form-group">
				<input type="placa" name="plate" class="form-control" placeholder=" Placa">
			</div>

			<div class="form-group">
				<button class="btn btn-primary">Salvar veículo</button>
			</div>
		</form> 
	</div>
</div>

<?php
require_once "_comum/footer.php";
?>