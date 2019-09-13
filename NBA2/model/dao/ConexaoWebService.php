<?php
    namespace Dao;
    require "../vendor/autoload.php";
    use Dto\Player as Player;
    use Dto\Team as Team;
    use Model\IConexaoWebService as IConexaoWebService;
    class ConexaoWebService implements IConexaoWebService{ 
        public static function extrairPlayerId($codigo){
            $file = @file_get_contents("https://www.balldontlie.io/api/v1/players/".$codigo);
            if ($file==false) {
                return null;
            }
            $json = json_decode($file, true);
            $player = new Player();
            $player->setId($json['id']);
            $player->setFirst_name($json['first_name']);
            $player->setLast_name($json['last_name']);
            $player->setPosition($json['position']);
            $player->setHeight_feet($json['height_feet']);
            $player->setHeight_inches($json['height_inches']);
            $player->setWeight_pounds($json['weight_pounds']);
            $team = new Team();
            $team->setId($json['team']['id']);
            $team->setAbbreviation($json['team']['abbreviation']);
            $team->setCity($json['team']['city']);
            $team->setConference($json['team']['conference']);
            $team->setDivision($json['team']['division']);
            $team->setFull_name($json['team']['full_name']);
            $team->setName($json['team']['name']);
            $player->setTeam($team);
            return $player;
         }
        public static function extrairPlayerName($name){
            $file = @file_get_contents("https://www.balldontlie.io/api/v1/players?search=".$name);
            if ($file==false) {
                return null;
            }
            $json = json_decode($file, true);
            $array = array();
            if (sizeof($json['data']) > 0) {
                foreach ($json['data'] as $key => $value) {
                    $player = new Player();
                    $player->setId($value['id']);
                    $player->setFirst_name($value['first_name']);
                    $player->setLast_name($value['last_name']);
                    $player->setPosition($value['position']);
                    $player->setHeight_feet($value['height_feet']);
                    $player->setHeight_inches($value['height_inches']);
                    $player->setWeight_pounds($value['weight_pounds']);
                        $team = new Team();
                        $team->setId($value['team']['id']);
                        $team->setAbbreviation($value['team']['abbreviation']);
                        $team->setCity($value['team']['city']);
                        $team->setConference($value['team']['conference']);
                        $team->setDivision($value['team']['division']);
                        $team->setFull_name($value['team']['full_name']);
                        $team->setName($value['team']['name']);
                    $player->setTeam($team);
                    array_push($array, $player);
                }
                return $array;
            }
         }
        public static function extrairAveragesPlayer($player, $season = '2018'){
            $file = @file_get_contents("https://www.balldontlie.io/api/v1/season_averages".
                                        "?season=".$season."&player_ids[]=".$player->getId());
            $stats = array();
            $stats[1][1] = "Games Played";
            $stats[2][1] = "Minutes/GM";
            $stats[3][1] = "Rebounds/GM";
            $stats[4][1] = "Assists/GM";
            $stats[5][1] = "Steals/GM";
            $stats[6][1] = "Blocks/GM";
            $stats[7][1] = "Turnovers/GM";
            $stats[8][1] = "Points/GM";
            $stats[9][1] = "FG/GM";
            $stats[10][1] = "FG 3PT/GM";
            $stats[11][1] = "FT/GM";
            $json = json_decode($file, true);
            $stats[1][2] = $json['data'][0]['games_played'];
            $stats[2][2] = $json['data'][0]['min'];
            $stats[3][2] = $json['data'][0]['reb'];
            $stats[4][2] = $json['data'][0]['ast'];
            $stats[5][2] = $json['data'][0]['stl'];
            $stats[6][2] = $json['data'][0]['blk'];
            $stats[7][2] = $json['data'][0]['turnover'];
            $stats[8][2] = $json['data'][0]['pts'];
            $stats[9][2] = ($json['data'][0]['fg_pct']*100)."%";
            $stats[10][2] = ($json['data'][0]['fg3_pct']*100)."%";
            $stats[11][2] = ($json['data'][0]['ft_pct']*100)."%";            
            return $stats;
         }
        
     }   
 ?>