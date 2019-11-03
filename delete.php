<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estacionamento</title>
</head>
<?php 
    try {
        $conexao = new PDO("mysql:host=localhost; dbname=teste_pdo", "root", "");
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->exec("set names utf8");
    } catch (PDOException $erro) {
        echo "Erro na conexão:" . $erro->getMessage();
    }
?>
<body>
    <form action="insert.php" method="POST" name="form1" >
          <h1>Cadastro Estacionamento</h1>
        <p>Digite o ID do veículo que deseja excluir</p>
        <hr>;
            ID:
          <input type="number" name="id"  />
          <input type="submit" value="EXCLUIR" />
        <hr>
        <?php 
            $conn = new PDO("mysql:dbname=teste_pdo;host=localhost", "root", "");

            $stmt = $conn->prepare("SELECT * FROM teste");

            $stmt->execute();

            $resultado = $stmt->fetchAll(PDO :: FETCH_ASSOC);

            foreach ($resultado as $row){
                
                foreach ($row as $key => $value){

                    echo "<strong>".$key."</strong>".$value."<br/>";

                }
                echo "<hr>";
            }
        ?>
    </form>
</body>
</html>