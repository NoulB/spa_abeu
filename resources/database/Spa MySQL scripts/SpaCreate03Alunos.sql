CREATE TABLE IF NOT EXISTS `spa`.`alunos` (
  `id` bigint NOT NULL,
  `nome` VARCHAR(250) NOT NULL,
  `cpf` VARCHAR(14) UNIQUE NOT NULL,
  `rg` VARCHAR(16) NULL,
  `data_nascimento` DATE NOT NULL,
  `email` VARCHAR(64) NULL,
  `celular` VARCHAR(16) NULL,
  `sexo` VARCHAR(9) NOT NULL,
  `status` int NOT NULL DEFAULT 0,
	`createate`  timestamp DEFAULT CURRENT_TIMESTAMP,
  `updateate` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   PRIMARY KEY (`id`))
ENGINE = InnoDB;