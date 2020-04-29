CREATE TABLE IF NOT EXISTS `spa`.`agenda_supervisoes` (
    `id` INT AUTO_INCREMENT NOT NULL,
    `projeto_id` INT NOT NULL ,
    `dia_da_semana` TINYINT NOT NULL,
    `hora` TIME NOT NULL ,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`projeto_id`)
    REFERENCES `spa`.`projetos`(`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;