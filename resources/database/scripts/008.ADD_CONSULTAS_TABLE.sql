CREATE TABLE IF NOT EXISTS `spa`.`consultas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `alunos_id` INT NOT NULL,
  `supervisores_id` INT NULL,
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
