CREATE TABLE IF NOT EXISTS `spa`.`supervisoes` (
    `id` INT AUTO_INCREMENT NOT NULL,
    `agenda_supervisoes_id` INT NOT NULL,
    `data` DATE NOT NULL,
    `hora` TIME NOT NULL,
    `local` VARCHAR(45) NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`agenda_supervisoes_id`)
    REFERENCES `spa`.`agenda_supervisoes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
