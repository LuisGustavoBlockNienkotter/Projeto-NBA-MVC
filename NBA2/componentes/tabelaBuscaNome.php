<?php
    use Dto\Player as Player;
    $tabela="";
    if (!empty($jogadores)) {
        foreach ($jogadores as $key => $value) {
            $tabela.="<tr><td>".$value->getId()."</td><td>".$value->getName()."</td>".
            "<td>".$value->getTeam()->getName()."</td><td>".$value->getPosition()."</td>".
            "<td>".$value->getHeight()."</td><td>".$value->getWeight()." Kg</td></tr>";
        }
    }
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<table id="tabelaTurma" class="display">
<thead><tr><th>ID</th><th>Name</th><th>Team</th><th>Position</th><th>Height</th><th>Weight</th></tr></thead>
    <form method="post" name="Form">
        <input type="hidden" name="codigo" id="codigo">
        <tbody><?= $tabela?></tbody>
    </form>
</table>
<script>
    $(document).ready( function () {
        $('#tabelaTurma').DataTable();
    });
</script>