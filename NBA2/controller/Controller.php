<?php
    namespace Controller;
    require "../vendor/autoload.php";
    use Bo\ConexaoWebServiceBO as ConexaoWebServiceBO;
    use Bo\ChartBO as ChartBO;
    use Dto\ChartDao as ChartDao;
    use Dto\Chart as Chart;
    use Dto\Player as Player;
    use Model\IChart as IChart;
    class Controller
    {
        private $chartBO;
        public function __construct() {
            $this->chartBO = new ChartBO();
        }
        public function extrairPlayerId($id)
        {
            return ConexaoWebServiceBO::extrairPlayerId($id);
        }
        public function extrairPlayerName($name)
        {
            return ConexaoWebServiceBO::extrairPlayerName($name);
        }
        public function extrairAveragesPlayer($player, $season = '2018')
        {
            return ConexaoWebServiceBO::extrairAveragesPlayer($player, $season);
        }
        public function graficoBarra($stats1, $stats2, $player1, $player2)
        {
            return $this->chartBO->graficoBarra($stats1, $stats2, $player1, $player2);
        }
        public function graficoBarraPor($stats1, $stats2, $player1, $player2)
        {
            return $this->chartBO->graficoBarraPor($stats1, $stats2, $player1, $player2);
        }
    }
?>