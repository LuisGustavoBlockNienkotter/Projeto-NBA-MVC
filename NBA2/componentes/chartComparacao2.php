<?php
    require "../vendor/autoload.php";
    use Controller\Controller as Controller;
    use Dto\Chart as Chart;
    $control = new Controller();
    $c2 = $control->graficoBarra($stats1, $stats2, $player1, $player2);
 ?>
<script>
    var array2=<?= isset($c2)?$c2->arrayToJs():"[]"?>;
    var options2 = <?= isset($c2)?$c2->optionsToJs():"[]"?>; 
    div2="chartBar2";
    <?php 
        if (isset($c2)) {
            echo "google.charts.load('current', {callback: function () {
            drawColumnChart(array2, options2, div2);},
            packages: ['corechart']});";
         }
     ?>
 </script>
<div id="chartBar2"></div>