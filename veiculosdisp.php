<?php
require 'config.php';

$lista = [];

	$sql = $pdo->query("SELECT * FROM veiculo");
	if($sql->rowCount() > 0){
	$lista = $sql;
}


?>

<h1>Gerenciamento de veiculos</h1>
<table border ="1">
	<tr>
		<th>ID</th>
		<th>PLACA</th>
		<th>MODELO</th>
		<th>COR</th>
		<th>ANO</th>
		<th>SITUAÇÃO</th>
		<th>LOCADOR</th>
		<th>DEVOLUCAO</th>
	</tr>
<?php foreach ($lista as $veiculo): ?>
	<tr>
		<td><?=$veiculo['id'];?></td>
		<td><?=$veiculo['placa'];?></td>
		<td><?=$veiculo['modelo'];?></td>
		<td><?=$veiculo['cor'];?></td>
		<td><?=$veiculo['ano'];?></td>
		<td><?=$veiculo['situacao'];?></td>
		<td><?=$veiculo['locador'];?></td>
		<td><?=$veiculo['devoulucao'];?></td>
	</tr>
	
<?php endforeach; ?>

</table>
<br><br><h3>
<form method="post" action="alugarveiculo.php">
		Alugar um veiculo: <input type="submit" name="alugar" value="Alugar">
	</form>
</h3>
<br><br><h3>
<form method="post" action="devolverveiculo.php">
		Devolver Veiculo: <input type="submit" name="alugar" value="Devolver">
	</form>
</h3>



