<?php
function title() 
{
    return "Controle do seu automóvel - Auxílio de escolha entre gasolina e álcool";  
}
require_once "_comum/header.php";
?>

<div class="container">
    <div class="col-md-6 center">
        <h2 class="text-center h2">Tela de preço</h2>
        <br>
        <form name="form_calculates" onsubmit="return Calculates()">
            <div class="form-group">
                <input type="number" placeholder="Gasolina" name="gasoline" class="form-control" required max="15.00" min="0"/>
            </div>
            
            <div class="form-group">
                <input type="number" placeholder="Álcool" name="alcohol" class="form-control" required step="0.00" max="15.00" min="0" />
            </div>

            <p id="result"></p>
            
            <div class="form-group">
                <button class="btn btn-primary">Calcular</button>
            </div>
        </form>
    </div>
</div>    

<script>
    function Calculates() {
        var gasoline = document.form_calculates.gasoline.value;
        var alcohol = document.form_calculates.alcohol.value;
        var result = alcohol / gasoline;
    
        if(result < 0.7) {
            document.getElementById('result').innerHTML = "Álcool"
        } else {
            document.getElementById('result').innerHTML = "Gasolina"
        }
        return false;
    }
</script>
<?php
require_once "_comum/footer.php";
?>