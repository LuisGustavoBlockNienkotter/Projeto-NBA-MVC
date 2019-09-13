<div class="card">
    <div class="card-body">
        <h5 class="card-title d-flex justify-content-center"><?php echo $player2->getFirst_name()." ".$player2->getLast_name()?></h5>
        <table>
           <tr><th>Position</th><td><?= $player2->getPosition()?></td></tr>
           <tr><th>Height</th><td><?= $player2->getHeight_feet()."'".$player2->getHeight_inches()?></td></tr>
           <tr><th>Weight</th><td><?= $player2->getWeight_pounds()?></td></tr>
           <tr><th>Team Name</th><td><?= $player2->getTeam()->getFull_name()?></td></tr>
           <?php
            for ($i=1; $i < 12; $i++) { 
               $str = "<tr><th>".$stats2[$i][1]."</th><td>".$stats2[$i][2]."</td></tr>";
               echo $str;
            }
           ?>
        </table>
     </div>
</div>