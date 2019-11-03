<?php
        include "conexao.php";

        $id = $_POST["id"];
        $carro = $_POST["carro"];
        $placa = $_POST["placa"];

        $stmt = $conexao->prepare("UPDATE teste SET (carro, placa) values ('$carro', '$placa') WHERE id = '$id'");

        $stmt->execute();

        header("location:index.php");
?>