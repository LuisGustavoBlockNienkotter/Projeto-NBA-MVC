<?php
    namespace Bo;
    require "../vendor/autoload.php";
    use Dao\ConexaoWebService as ConexaoWebService;
    use Model\IConexaoWebService as IConexaoWebService;
    class ConexaoWebServiceBO implements IConexaoWebService{
        public static function extrairPlayerId($codigo){
            return ConexaoWebService::extrairPlayerId($codigo);
         }
        public static function extrairPlayerName($name){
            return ConexaoWebService::extrairPlayerName($name);
         }
        public static function extrairAveragesPlayer($player, $season = '2018'){
            return ConexaoWebService::extrairAveragesPlayer($player, $season);
         }
     }
 ?>