<?php
include("conecta.php");

$matricula = $_GET["M"];


$comando = $pdo ->prepare("DELETE FROM alunos 
WHERE matricula=$matricula");

$resultados = $comando ->execute();

header("location: cadastro.html");
?>