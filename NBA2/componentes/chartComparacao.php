<?php
    require "../vendor/autoload.php";
    use Controller\Controller as Controller;
    use Dto\Chart as Chart;
    $control = new Controller();
    $c = $control->graficoBarraPor($stats1, $stats2, $player1, $player2);
 ?>
<script>
    var array=<?= isset($c)?$c->arrayToJs():"[]"?>;
    var options = <?= isset($c)?$c->optionsToJs():"[]"?>; 
    div="chartBar";
    <?php 
        if (isset($c)) {
            echo "google.charts.load('current', {callback: function () {
            drawBarChart(array, options, div);},
            packages: ['corechart']});";
         }
     ?>
 </script>
<div id="chartBar"></div>