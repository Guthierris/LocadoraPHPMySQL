<?php
require 'config.php';

$placa = filter_input(INPUT_GET, 'placa');


if($placa){

	$sql = $pdo->prepare("DELETE FROM veiculo WHERE placa = :placa");
	$sql->bindvalue(':placa', $placa);
	$sql->execute();

}


header("Location: painel.html");
