<div class="card">
    <div class="card-body">
        <h5 class="card-title d-flex justify-content-center"><?php echo $player1->getFirst_name()." ".$player1->getLast_name()?></h5>
        <table>
           <tr><th>Position</th><td><?= $player1->getPosition()?></td></tr>
           <tr><th>Height</th><td><?= $player1->getHeight_feet()."'".$player1->getHeight_inches()?></td></tr>
           <tr><th>Weight</th><td><?= $player1->getWeight_pounds()?></td></tr>
           <tr><th>Team Name</th><td><?= $player1->getTeam()->getFull_name()?></td></tr>
           <?php
            for ($i=1; $i < 12; $i++) { 
               $str = "<tr><th>".$stats1[$i][1]."</th><td>".$stats1[$i][2]."</td></tr>";
               echo $str;
            }
           ?>
        </table>
     </div>
</div>