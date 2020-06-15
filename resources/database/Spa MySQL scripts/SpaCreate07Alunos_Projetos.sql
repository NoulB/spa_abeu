CREATE TABLE IF NOT EXISTS `spa`.`alunos_projetos` (
  `alunos_id` bigint NOT NULL,
  `projetos_id` bigint NOT NULL,
  PRIMARY KEY (`alunos_id`, `projetos_id`),
  FOREIGN KEY (`alunos_id`)
  REFERENCES `spa`.`alunos` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
  CONSTRAINT `fk_alunos_projetos_projetos1`
  FOREIGN KEY (`projetos_id` )
  REFERENCES `spa`.`projetos` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION)
ENGINE = InnoDB;