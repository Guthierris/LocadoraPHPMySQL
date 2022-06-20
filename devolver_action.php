<?php
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$situacao = filter_input(INPUT_POST, 'situacao');
$locador = filter_input(INPUT_POST, 'locador');
$devoulucao = filter_input(INPUT_POST, 'devoulucao');

if($id && $situacao){
	$sql = $pdo->prepare("UPDATE veiculo SET situacao = :situacao, locador = :locador, devoulucao = :devoulucao WHERE id = :id");
	$sql ->bindValue(':situacao', $situacao);
	$sql ->bindValue(':locador', $locador);
	$sql ->bindValue(':devoulucao', $devoulucao);
	$sql ->bindvalue(':id', $id);
	$sql ->execute();

	header("Location: Painel.html");
	exit;
}else{
	echo "aqui";
}

?>