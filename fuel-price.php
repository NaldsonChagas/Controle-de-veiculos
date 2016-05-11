<?php
function title() 
{
    return "Controle do seu autumóvel - Auxílio de escolha entre gasolina e álcool";  
}
require_once "_comum/header.php";
?>
    <div class="container">
        <div class="col-md-6 center">
            <h2 class="text-center h2">Tela de preço</h2>
            <br>
            <form action="">
                <div class="form-group">
                    <input type="number" placeholder="Gasolina" name="gasoline" class="form-control" />
                </div>
                
                <div class="form-group">
                    <input type="number" placeholder="Álcool" name="alcohol" class="form-control" />
                </div>
                
                <div class="form-group">
                    <button class="btn btn-primary">Calcular</button>
                </div>
            </form>
        </div>
    </div>    
<?php
require_once "footer.php";
?>