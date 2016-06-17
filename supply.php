<?php
function title()
{
	return "Controle do seu veículo - Adicione um abastecimento ao histórico";
}

require_once "_comum/header.php";
?>
<div class="container">
	<div class="col-md-6 center">
		<h2 class="text-center h2">Informe-nos seus abastecimentos recentes</h2>
        <div style="text-align:center;">
            <p>Salvando seus abastecimentos recentes você pode ter acesso ao nosso relatório</p>
        </div>
		<br>
        
        <form method="post" action="system/save-supply.php">
            <div class="form-group">
                <label for="date">Data</label>
                <input type="text" name="date" class="form-control" placeholder=" Data" id="date"/>
            </div>
            
            <div class="form-group">
                <label for="fuel">Combustivel</label>
                <select class="form-control" name="fuel">
                    <option value="1">Álcool</option>
                    <option value="2">Gasolina</option>
                </select>
            </div>

            <div class="control-group input-group" style="margin-bottom: 30px; margin-top: 30px">
                <span class="input-group-addon" id="basic-addon1">R$</span> 
                <input type="text" name="contact.twitter" placeholder=" Preço" class="form-control" aria-describedby="basic-addon1" id="price" maxlenght="5" />
            </div>
            
            <div class="form-group">
                <label for="gas_station">Nome do posto</label>
                <input type="text" name="gas_station" class="form-control" placeholder=" Nome do posto" id="gas_station" maxlength="20"/>
            </div>
            
            <div class="form-group">
                <label for="mileage">Quilometragem</label>
                <input type="text" name="mileage" class="form-control" placeholder=" Quilometragem" id="mileage" maxlength="6"/>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn-primary btn">Salvar&nbsp;&nbsp;<span class="glyphicon glyphicon-ok"></span></button>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#date').mask('00/00/0000');
        $('#price').mask('000,00', {selectOnFocus: true});
        $('#mileage').mask('00.00');
    });
</script>
<?php
require_once "_comum/footer.php";
?>