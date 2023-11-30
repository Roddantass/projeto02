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
    } catch (PDOException $e) {
        echo "Erro ao conectar com o banco: " .$e->getMessage();
    } 

?>