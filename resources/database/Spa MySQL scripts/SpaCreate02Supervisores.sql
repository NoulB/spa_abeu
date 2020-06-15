CREATE TABLE IF NOT EXISTS `spa`.`supervisores` (
  `id` bigint NOT NULL,
  `nome` VARCHAR(256) NOT NULL,
  `crp` VARCHAR(16) NULL,
  `email` VARCHAR(64) NOT NULL,
  `celular` VARCHAR(16) NOT NULL,
  `status` int NOT NULL DEFAULT 1,
  `createate`  timestamp DEFAULT CURRENT_TIMESTAMP,
  `updateate` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,  PRIMARY KEY (`id`))
ENGINE = InnoDB;