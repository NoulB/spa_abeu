CREATE TABLE IF NOT EXISTS `spa`.`supervisoes` (
	`id` bigINT AUTO_INCREMENT NOT NULL,
	`agenda_supervisoes_id` bigINT NOT NULL,
	`data` DATE NOT NULL,
	`hora` TIME NOT NULL,
	`local` VARCHAR(45) NULL,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`agenda_supervisoes_id`)
	REFERENCES `spa`.`agenda_supervisoes` (`id`)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION)
ENGINE = InnoDB;