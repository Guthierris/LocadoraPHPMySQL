<?php
require 'config.php';
$veiculo = [];

$id = filter_input(INPUT_GET, 'id');

if($id){
	$sql = $pdo->prepare("SELECT * FROM veiculo WHERE id = :id");
	$sql ->bindValue(':id', $id);
	$sql ->execute();

	if($sql->rowCount() > 0){
		$veiculo = $sql->fetch(PDO::FETCH_ASSOC);
	}else{
		header("Location: Painel.html");
		exit;
	}
}

?>


<h1>ALUGAR VEICULO</h1>

<form method="POST" action="alugar_action.php">
	ID do veiculo: <input type="text" name="id" value=""><br><br>
		<label> 
		Situacão: <input type="text" name="situacao"><br><br>
	</label>
	<label>
		Locador: <input type="text" name="locador"><br><br>
	</label>
		<label>
		Devolucao: <input type="text" name="devoulucao"><br><br>
	</label>
	<input type="submit" value="Alugar">
</form>

