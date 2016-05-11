<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?= title(); ?></title>
    <link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="public/css/style.css" />
</head>

<body>
    <script src="public/js/jquery-1.12.3.min.js"></script>
    <script src="public/bootstrap/js/bootstrap.min.js"></script>
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="javascript:void(0)">Controle do seu automóvel</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="fuel-price.php">Preço de combustível</a></li>
                <li><a href="cars.php">Carros</a></li>
                <li><a href="supply.php">Abastecimento</a></li>
                <li><a href="history.php">Histórico</a></li>
                <li><a href="maintenance.php">Manutenção</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="system/logout.php">Sair &nbsp;<span class="glyphicon glyphicon-off"></span></a>
                </li>
            </ul>
        </div>
    </nav>