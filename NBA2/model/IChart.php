<?php
    namespace Model;
    interface IChart
    {
        public function graficoBarra($stats1, $stats2, $player1, $player2);
        public function graficoBarraPor($stats1, $stats2, $player1, $player2);
    }
 ?>