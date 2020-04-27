CREATE TABLE IF NOT EXISTS `spa`.`supervisores` (
  `id` VARCHAR(16),
  `nome` VARCHAR(256) NOT NULL,
  `crp` VARCHAR(16) NULL,
  `email` VARCHAR(64) NOT NULL,
  `celular` VARCHAR(16) NOT NULL,
  `status` int NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;