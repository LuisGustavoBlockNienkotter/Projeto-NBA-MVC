<?php
require "../vendor/autoload.php";
use Controller\controller as Controller;

$control = new Controller();
$nameBusca = isset($_POST['nameBusca']) ? $_POST['nameBusca']: "";

$jpogadores = array();
if (isset($_POST['nameBusca'])) {
    $jogadores = $control->extrairPlayerName($nameBusca);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap.css">    
    <title>Buscas</title>
</head>
<body>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-4 d-flex justify-content-start">
                <a href="index.php"><button class="btn btn-primary">Voltar</button></a>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <h1>NBA</h1>
            </div>
            <div class="col-md-4">
            </div>
        </div>
        <br>
        <form method='post'>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-6 d-flex justify-content-end">
                    <input type="text" class='form-control' placeholder='Nome do player' name='nameBusca' value="<?= $nameBusca?>">
                </div>
                <div class="col-md-4">
                    <input type="submit" value="Buscar" class="btn btn-primary">
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-md-12">
                <?php
                    require_once "../componentes/tabelaBuscaNome.php";
                ?>
            </div>
        </div>
    </div>
</body>
</html>