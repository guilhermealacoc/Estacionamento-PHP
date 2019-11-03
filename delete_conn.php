<?php
        include "conexao.php";

        $id = $_POST["id"];

        $stmt = $conexao->prepare("DELETE FROM teste WHERE id =  '$id' ");
        //

        $stmt->execute();

        header("location:index.php");
?>