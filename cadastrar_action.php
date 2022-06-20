<?php
require 'config.php';

$placa = filter_input(INPUT_POST, 'placa');
$modelo = filter_input(INPUT_POST, 'modelo');
$cor = filter_input(INPUT_POST, 'cor');
$ano = filter_input(INPUT_POST, 'ano');
$situacao = filter_input(INPUT_POST, 'situacao');

$sql = $pdo->prepare("INSERT INTO veiculo (placa, modelo, cor, ano, situacao) VALUES (:placa, :modelo, :cor, :ano, :situacao)");

$sql->bindvalue(':placa', $placa);
$sql->bindvalue(':modelo', $modelo);
$sql->bindvalue(':cor', $cor);
$sql->bindvalue(':ano', $ano);
$sql->bindvalue(':situacao', $situacao);

$sql->execute();
header("Location: painel.html");

