CREATE TABLE IF NOT EXISTS `spa`.`projetos`(
	`id` bigINT AUTO_INCREMENT NOT NULL,
	`nome` VARCHAR(64) NOT NULL,
	`ano` YEAR NOT NULL,
	`semestre` TINYINT,
	`status` TINYINT,
	`supervisor_id` bigint,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`supervisor_id`)
	REFERENCES `spa`.`supervisores`(`id`)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION)
ENGINE = InnoDB;