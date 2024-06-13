CREATE TABLE tbGenero ( 

    codGenero INT AUTO_INCREMENT PRIMARY KEY, 

    genero VARCHAR(255) NOT NULL 

); 

CREATE TABLE tbAutor ( 

    codAutor INT AUTO_INCREMENT PRIMARY KEY, 

    nomeAutor VARCHAR(255) NOT NULL 

); 

CREATE TABLE tbEditora ( 

    codEditora INT AUTO_INCREMENT PRIMARY KEY, 

    nomeEditora VARCHAR(255) NOT NULL 

); 

CREATE TABLE tblivro ( 

    codLivro INT AUTO_INCREMENT PRIMARY KEY, 

    nomeLivro VARCHAR(255) NOT NULL 
    edicao VARCHAR(255)

); 