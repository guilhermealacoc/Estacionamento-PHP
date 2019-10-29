<?php
        include "conexao.php";

        $carro = $_POST["carro"];
        $placa = $_POST["placa"];

        $stmt = $conexao->prepare("INSERT INTO teste (carro, placa) values ('$carro', '$placa')");

        $stmt->execute();

        header("location:index.php");
?>