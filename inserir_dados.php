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

        // Define SQL para criar uma tabela
        $sql = "
        INSERT INTO usuario (nome, sobrenome, email) VALUES ('RENATO','CARDOSO','RENATOCARDOSO77@HOTMAIL.COM');
        ";
        $conn-> exec($sql);
        echo "Comando executado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao conectar com o banco: " .$e->getMessage();
    } 

?>