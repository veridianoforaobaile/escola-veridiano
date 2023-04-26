<?php   
    include("conecta.php");

    $matricula = $_POST["matricula"];
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    $comando = $pdo ->prepare("INSERT INTO alunos VALUES($matricula,'$nome',$idade)" );

    $resultados = $comando ->execute();

    header("location: cadastro.html");
?>