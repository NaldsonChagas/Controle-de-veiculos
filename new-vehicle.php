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
		<form action="system/save-vehicle.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<input type="text" name="name" class="form-control" placeholder=" Nome" required maxlength="15">
			</div>

			<div class="form-group">
				<input type="file" name="image" required>
			</div>

			<div class="form-group">
				<input type="text" name="year" class="form-control" placeholder=" Ano" required maxlength="4">
			</div>

			<div class="form-group">
				<input type="text" name="plate" class="form-control plate" placeholder=" Placa" required>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Salvar veículo</button>
			</div>
		</form> 
	</div>
</div>
<script>
    $(document).ready(function(){
        $('.plate').mask('AAA-9999');
    });
</script>
<?php
require_once "_comum/footer.php";
?>