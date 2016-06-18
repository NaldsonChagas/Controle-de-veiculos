<?php

function title() {
    return "Controle do seu veículo - Histórico de abastecimento";
}

require_once "system/connects.php";
require_once "_comum/header.php";
require_once "class/dao/SupplyDao.class.php";
require_once "class/model/Supply.class.php";

$supplyDAO = new supplyDAO($connection);
$supplys = $supplyDAO->listSupply();
?>
<div class="container">
    <div class="col-md-6 center">
        <h2 class="text-center h2">Histórico de abastecimento</h2>
        <br />

        <table class="table table-striped">
            <thead>
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Combustível</th>
                    <th>Valor</th>
                    <th>Nome do posto</th>
                    <th>Kilometragem</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($supplys as $supply):
                    ?>
                    <tr>
                        <td><?= $supply->getDate(); ?></td>
                        <td>
                            <?php
                            if ($supply->getFuel() == 1)
                                echo "Álcool";
                            else
                                echo "Gasolina";
                            ?>
                        </td>
                        <td><?= $supply->getPrice(); ?></td>
                        <td><?= $supply->getGasStation(); ?></td>
                        <td><?= $supply->getMileage(); ?></td>
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