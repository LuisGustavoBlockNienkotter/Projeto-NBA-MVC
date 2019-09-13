<?php
	require "../vendor/autoload.php";
	use Dto\Player as Player;
	use Bo\ChartBO as ChartBO;
	use Controller\Controller as Controller;
	$control = new Controller();
	$player_id1 = isset($_POST['player_id1']) ? $_POST['player_id1']: "";
	$player_id2 = isset($_POST['player_id2']) ? $_POST['player_id2']: "";

	$background = "";

	$player1 = null;
	$player2 = null;
	if($player_id1!=""){
		$player1 = $control->extrairPlayerId($player_id1);
		if (!is_null($player1)) {
			$stats1 = $control->extrairAveragesPlayer($player1);
		 }
	 } 
	if($player_id2!=""){
		$player2 = $control->extrairPlayerId($player_id2);
		if (!is_null($player2)) {
			$stats2 = $control->extrairAveragesPlayer($player2);
		 }
	 } 

	if (!is_null($player1) && !is_null($player2)) {
		$background = "background: linear-gradient(to right, ".$player1->getTeam()->getColor()." 0%,".
	              $player1->getTeam()->getColor()." 50%,".$player1->getTeam()->getColor()." 50%,".
	              $player2->getTeam()->getColor()." 50%,".$player2->getTeam()->getColor()." 100%);";
	}elseif (!is_null($player1)) {
		$background = "background: linear-gradient(to right, ".$player1->getTeam()->getColor()." 0%,".
				  $player1->getTeam()->getColor()." 50%,".$player1->getTeam()->getColor()." 50%, 
				  #ffffff 50%,#ffffff 100%);";
	}elseif (!is_null($player2)) {
		$background = "background: linear-gradient(to right, #ffffff 0%,#ffffff 50%,#ffffff 50%,".
	              $player2->getTeam()->getColor()." 50%,".$player2->getTeam()->getColor()." 100%);";
	 }
	
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="../bootstrap.css">
		<title>NBA</title>
		<script type="text/javascript" src="../javascript/charts.js"></script>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	 </head>
	<body style=<?php echo "'".$background."'";?>>
		<div class="container">
			<br>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4 d-flex justify-content-center">
					<h1>NBA</h1>
				</div>
				<div class="col-md-4 d-flex justify-content-end">
					<a href="busca.php"><button class="btn btn-primary">Buscas</button></a>
				</div>
			 </div>
			<form method="post">
				<div class="row">
					<div class="col-md-4">
						<?php include_once "../componentes/inputPlayer1.php";?>
					 </div>
					 
					<div class="col-md-4 offset-md-4">
						<?php include_once "../componentes/inputPlayer2.php";?>
					 </div>
				 </div>
			 </form>
			<div class="row">
				<div class="col-md-4">
					<?php
						if(!is_null($player1)){
							include_once "../componentes/cardInfoPlayer1.php";
						 } 
					 ?>
				 </div>
				<div class="col-md-4">
					<?php
						if((!is_null($player1))&&(!is_null($player2))){
							include_once "../componentes/chartComparacao.php";
						 } 
					?>
				 </div>
				<div class="col-md-4">
					<?php
						if(!is_null($player2)){
							include_once "../componentes/cardInfoPlayer2.php";
						 } 
					 ?>
				 </div>
			 </div>
			<br>
			<div class="row">
				<div class="col-md-12">
					<?php
						if((!is_null($player1))&&(!is_null($player2))){
							include_once "../componentes/chartComparacao2.php";
						 } 
					 ?>
				 </div>
			 </div>
		 </div>
	 </body>
 </html>