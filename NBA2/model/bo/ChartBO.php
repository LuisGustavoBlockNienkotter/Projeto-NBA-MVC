<?php
    namespace Bo;
    require "../vendor/autoload.php";
    use Dto\Chart as Chart;
    use Dao\ChartDao as ChartDao;
    use Model\IChart as IChart;
    class ChartBO implements IChart
    {
        private $chartDao;
        public function __construct() {
            $this->chartDao = new ChartDao();
        }
        public function graficoBarra($stats1, $stats2, $player1, $player2){
            return $this->chartDao->graficoBarra($stats1, $stats2, $player1, $player2);
        }
        public function graficoBarraPor($stats1, $stats2, $player1, $player2){
            return $this->chartDao->graficoBarraPor($stats1, $stats2, $player1, $player2);
        }
    }
 ?>