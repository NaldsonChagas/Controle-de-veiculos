<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="public/css/style.css" />
    <link rel="icon" href="public/img/icon.ico">
    <title><?= title(); ?></title>
</head>

<body>
    <script src="public/js/jquery-1.12.3.min.js"></script>
    <script src="public/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/js/jquery.mask.min.js"></script>
    <script type="text/javascript">
      WebFontConfig = {
        google: { families: [ 'Open+Sans:400,700:latin' ] }
      };
      (function() {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })(); 
    </script>
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Controle do seu automóvel</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="fuel-price.php">Preço de combustível</a></li>
                <li><a href="cars.php">Carros</a></li>
                <li><a href="supply.php">Abastecimento</a></li>
                <li><a href="history.php">Histórico</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                
            </ul>
        </div>
    </nav>
    