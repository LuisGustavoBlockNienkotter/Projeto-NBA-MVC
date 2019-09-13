<?php
    namespace Dao;
    require "../vendor/autoload.php";
    use Dto\Chart as Chart;
    use Dto\Player as Player;
    use Model\IChart as IChart;
    class ChartDao implements IChart{
        public function graficoBarra($stats1, $stats2, $player1, $player2){
            if((is_null($stats1))||(is_null($stats2))){
                return null;
            }
            $c = new Chart;
            $arr=array();
            $cab=array();
            array_push($cab, "Categoria");
            array_push($cab, $player1->getName());
            array_push($cab, $player2->getName());
            array_push($arr, $cab);
            for ($i=3; $i < 9; $i++) { 
                $a=array();
                array_push($a, $stats1[$i][1]);
                array_push($a, $stats1[$i][2]);
                array_push($a, $stats2[$i][2]);
                array_push($arr, $a);
             }
            $c->setArray($arr);
            $title=$player1->getName()." X ".$player2->getName();
            $width=1110;
            $height=350;            
            $group=40;
            $pos="bottom";
            $c->setOptions(array(
                "title"=> $title,
                "width"=> $width,
                "height"=> $height,
                "bar"=> "{groupWidth: '".$group."%'}",
                "legend"=> "{ position: '".$pos."' }"
             ));
            return $c;
         }
        public function graficoBarraPor($stats1, $stats2, $player1, $player2){
            if((is_null($stats1))||(is_null($stats2))){
                return null;
            }
            $c = new Chart;
            $arr=array();
            $cab=array();
            array_push($cab, "Categoria");
            array_push($cab, $player1->getName());
            array_push($cab, $player2->getName());
            array_push($arr, $cab);
            for ($i=9; $i < 12; $i++) { 
                $a=array();
                array_push($a, $stats1[$i][1]);
                array_push($a, floatval(substr_replace($stats1[$i][2], "", -1)));
                array_push($a, floatval(substr_replace($stats2[$i][2], "", -1)));
                array_push($arr, $a);
             }
            $c->setArray($arr);
            $title=$player1->getName()." X ".$player2->getName()." %";
            $width=350;
            $height=467;            
            $group=40;
            $pos="bottom";
            $c->setOptions(array(
                "title"=> $title,
                "width"=> $width,
                "height"=> $height,
                "bar"=> "{groupWidth: '".$group."%'}",
                "legend"=> "{ position: '".$pos."' }"
             ));
            return $c;
         }
     }
 ?>