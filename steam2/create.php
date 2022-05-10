<?php
include_once("connect.php");


    $nome = $_POST['nome'];
    $descricao = $_POST['desc'];
    $plataforma = $_POST['plat'];
    $tags = $_POST['tag'];
    $valor = $_POST['valor'];

    //O banco está inserindo valores na respectiva ordem do EXECUTE
    $result = $pdo->prepare("INSERT INTO users VALUES(null, ?, ?, ?,?,?)");
    $result->execute(array($_POST['nome'],  $_POST['desc'],  $_POST['plat'],$_POST['tag'],$_POST['valor'] ));
    
    header("Location: index.php");

?>