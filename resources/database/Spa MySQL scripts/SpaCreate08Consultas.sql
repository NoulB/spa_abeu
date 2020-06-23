CREATE TABLE IF NOT EXISTS `spa`.`consultas` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `alunos_id` bigint NOT NULL,
  `supervisores_id` bigint NULL,
  `dia` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `consultorio` VARCHAR(16) NOT NULL,
  `status` varchar(16) DEFAULT 'não realizada',
  PRIMARY KEY (`id`),
  FOREIGN KEY (`alunos_id`)
	REFERENCES `spa`.`alunos` (`id`)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
  FOREIGN KEY (`supervisores_id`)
	REFERENCES `spa`.`supervisores` (`id`)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION)
ENGINE = InnoDB;