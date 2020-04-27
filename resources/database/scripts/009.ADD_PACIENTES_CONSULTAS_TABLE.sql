CREATE TABLE IF NOT EXISTS `spa`.`pacientes_consultas` (
  `consultas_id` INT NOT NULL,
  `pacientes_id` INT NOT NULL,
  PRIMARY KEY (`consultas_id`, `pacientes_id`),
    FOREIGN KEY (`pacientes_id`)
    REFERENCES `spa`.`pacientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  FOREIGN KEY (`consultas_id`)
    REFERENCES `spa`.`consultas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;