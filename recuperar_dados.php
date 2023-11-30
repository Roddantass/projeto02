<?php
    $servidor = "localhost";
    $usuario = "renato";
    $senha = "123";
    $banco = "db_web";
    try {
        $conn = new PDO("mysql:host=$servidor;dbname=$banco",$usuario, $senha);
        // Configurar erros
        $conn->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);

        // Select
        $sql = "
        SELECT nome, sobrenome, email FROM usuario";
        $dado = $conn->query($sql)->fetchAll();

        //Percorre dados e exibe
        foreach($dado as $item) {
            echo $item['nome'] . "<br>";
        }
        echo "Comando executado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao conectar com o banco: " .$e->getMessage();
    } 

?>