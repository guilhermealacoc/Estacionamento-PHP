<?php
        include "conexao.php";

        $id = $_POST["id"];
        $carro = $_POST["carro"];
        $placa = $_POST["placa"];

        $stmt = $conexao->prepare("UPDATE `teste` SET `carro` = '$carro', `placa` = '$placa' WHERE `teste`.`id` = '$id';");
        //UPDATE `teste` SET `carro` = 'RedBull', `placa` = 'ODBC12678' WHERE `teste`.`id` = 1;

        $stmt->execute();

        header("location:index.php");
?>