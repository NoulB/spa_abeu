CREATE TABLE IF NOT EXISTS `spa`.`pacientes` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(250) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `rg` VARCHAR(16) NOT NULL,
  `data_nascimento` DATE NOT NULL ,
  `sexo` VARCHAR(9) NOT NULL,
  `email` VARCHAR(64) NULL,
  `celular` VARCHAR(16) NULL,
  `telefone` VARCHAR(16) NULL,
  `pai` VARCHAR(256) NULL,
  `mae` VARCHAR(256) NOT NULL,
  `estado_civil` VARCHAR(16) NOT NULL,
  `conjuge` VARCHAR(256) NULL,
  `logradouro` VARCHAR(256) NOT NULL,
  `numero` VARCHAR (8) NOT NULL,
  `complemento` VARCHAR(64) NULL,
  `bairro` VARCHAR(64) NOT NULL,
  `cidade` VARCHAR(64) NOT NULL,
  `cep` CHAR(9) NULL,
  `status` tinyint DEFAULT 0,
  disponibilidade text,
  turno varchar(30),
  `created_at`  timestamp DEFAULT CURRENT_TIMESTAMP,
  update_at timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

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

CREATE TABLE IF NOT EXISTS `spa`.`alunos` (
  `id` bigint NOT NULL,
  `nome` VARCHAR(250) NOT NULL,
  `cpf` VARCHAR(14) UNIQUE NOT NULL,
  `rg` VARCHAR(16) NULL,
  `data_nascimento` DATE NOT NULL,
  `email` VARCHAR(64) NULL,
  `celular` VARCHAR(16) NULL,
  `sexo` VARCHAR(9) NOT NULL,
  `status` int NOT NULL DEFAULT 0,
	`createate`  timestamp DEFAULT CURRENT_TIMESTAMP,
  `updateate` timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   PRIMARY KEY (`id`))
ENGINE = InnoDB;

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

CREATE TABLE IF NOT EXISTS `spa`.`agenda_supervisoes` (
	`id` bigINT AUTO_INCREMENT NOT NULL,
	`projeto_id` bigINT NOT NULL ,
	`dia_da_semana` TINYINT NOT NULL,
	`hora` TIME NOT NULL ,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`projeto_id`)
	REFERENCES `spa`.`projetos`(`id`)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION)
ENGINE = InnoDB;

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

CREATE TABLE IF NOT EXISTS `spa`.`pacientes_consultas` (
  `consultas_id` bigint NOT NULL,
  `pacientes_id` bigint NOT NULL,
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

create table failed_jobs
(
	id     	bigint unsigned auto_increment
    	primary key,
	connection text                            	not null,
	queue  	text                            	not null,
	payload	longtext                        	not null,
	exception  longtext                        	not null,
	failed_at  timestamp default CURRENT_TIMESTAMP not null
)
	collate = utf8mb4_unicode_ci;
    
	create table users
(
	id            	bigint unsigned auto_increment
    	primary key,
	name          	varchar(255) not null,
	email         	varchar(255) not null,
	email_verified_at timestamp	null,
	password      	varchar(255) not null,
	remember_token	varchar(100) null,
	created_at    	timestamp	null,
	updated_at    	timestamp	null,
	constraint users_email_unique
    	unique (email)
)
	collate = utf8mb4_unicode_ci;
	create table password_resets
(
	email  	varchar(255) not null,
	token  	varchar(255) not null,
	created_at timestamp	null
)
	collate = utf8mb4_unicode_ci;

create index password_resets_email_index
	on password_resets (email);


