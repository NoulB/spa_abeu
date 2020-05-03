CREATE TABLE IF NOT EXISTS `spa`.`pacientes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(250) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `rg` VARCHAR(16) NOT NULL,
  `data_nascimento` DATE NOT NULL ,
  `sexo` VARCHAR(9) NOT NULL,
  `email` VARCHAR(64) NULL,
  `celular` VARCHAR(16) NULL,
  `telefone` VARCHAR(16) NULL,
  `pai` VARCHAR(256) NULL,
  `mae` VARCHAR(256) NOT NULL,
  `estado_civil` VARCHAR(16) NOT NULL,
  `conjuge` VARCHAR(256) NULL,
  `logradouro` VARCHAR(256) NOT NULL,
  `numero` VARCHAR (8) NOT NULL,
  `complemento` VARCHAR(64) NULL,
  `bairro` VARCHAR(64) NOT NULL,
  `cidade` VARCHAR(64) NOT NULL,
  `cep` CHAR(9) NULL,
  `cadastred_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;
