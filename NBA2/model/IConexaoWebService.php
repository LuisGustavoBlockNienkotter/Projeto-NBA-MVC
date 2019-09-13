<?php
    namespace Model;
    interface IConexaoWebService
    {
        public static function extrairPlayerId($codigo);
        public static function extrairPlayerName($name);
        public static function extrairAveragesPlayer($player, $season);
     }
 ?>