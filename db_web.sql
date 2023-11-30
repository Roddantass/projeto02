
CREATE TABLE usuario (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(120) NOT NULL,
    sobrenome VARCHAR(120),
    email VARCHAR(50)
    )
INSERT INTO usuario (nome, sobrenome, email) VALUES ('RENATO','CARDOSO','RENATOCARDOSO77@HOTMAIL.COM');

SELECT nome, sobrenome, email FROM usuario";
    