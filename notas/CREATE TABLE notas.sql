CREATE TABLE tbAluno ( 

    RAAluno INT AUTO_INCREMENT PRIMARY KEY, 

    nomeAluno VARCHAR(255) NOT NULL 

); 

CREATE TABLE tbProfessor ( 

    codProfessor INT AUTO_INCREMENT PRIMARY KEY, 

    nomeProfessor VARCHAR(255) NOT NULL 

); 

CREATE TABLE tbDisciplina ( 

    codDisciplina INT AUTO_INCREMENT PRIMARY KEY, 

    disciplina VARCHAR(255) NOT NULL 

); 

CREATE TABLE tbNota ( 

    codNota INT AUTO_INCREMENT PRIMARY KEY, 
    RAAluno INT,
    codProfessor INT,
    codDisciplina INT,
    nota VARCHAR(255) NOT NULL,
    faltas VARCHAR(255) NOT NULL,




    FOREIGN KEY (RAAluno) REFERENCES tbAluno(RAAluno),
    FOREIGN KEY (codProfessor) REFERENCES tbProfessor(codProfessor ),
    FOREIGN KEY (codDisciplina) REFERENCES tbDisciplina(codDisciplina)
); 