<?php
function title()
{
	return "Controle do seu automóvel - Meus carros";
}

require_once "_comum/header.php";
?>
<div class="container">
	<div class="col-md-7 center">
	
		<h2 class="text-center h2">Meus carros</h2>
		<br>
		<a href="new-vehicle.php" class="btn btn-primary pull-right">Novo veículo &nbsp; <span class="glyphicon glyphicon-plus"></span></a>

		<table class="table table-striped table-bordered" style="margin-top:50px;">
			<thead>
				<tr>
					<th>Imagem</th>
					<th>Nome</th>
					<th>Placa</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>foto</td>
					<td>nome</td>
					<td>placa</td>
				</tr>
			</tbody>
		</table>

	</div>
</div>
<?php
require_once "_comum/footer.php";
?>