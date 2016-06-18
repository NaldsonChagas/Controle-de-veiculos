<form action="<?= $action ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder=" Nome" required maxlength="15" value="<?= $vehicle->getName(); ?>">
    </div>

    <div class="form-group">
        <input type="file" name="image">
    </div>

    <div class="form-group">
        <input type="text" name="year" class="form-control" placeholder=" Ano" required maxlength="4" value="<?= $vehicle->getYear(); ?>">
    </div>

    <div class="form-group">
        <input type="text" name="plate" class="form-control plate" placeholder=" Placa" required value="<?= $vehicle->getPlate(); ?>">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Concluir</button>
    </div>
</form> 