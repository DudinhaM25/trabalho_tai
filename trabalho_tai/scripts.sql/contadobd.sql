CREATE DATABASE `trabalho_avaliativo`
USE ` trabalho_avaliativo` ;

CREATE TABLE `contatos` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_bin',
	`sobrenome` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_bin',
	`telefone01` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_bin',
	`tipo_telefone01` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_bin',
	`telefone02` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_bin',
	`tipo_telefone02` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_bin',
	`email` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_bin',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8mb4_bin'
ENGINE=InnoDB
AUTO_INCREMENT=4
;

INSERT INTO `contatos` (`id`, `nome`, `sobrenome`, `telefone01`, `tipo_telefone01`, `telefone02`, `tipo_telefone02`, `email`)
 VALUES (1, 'Pedro', 'Da Silva', '(77) 97712-7656', 'Celular', '(45) 99955-7744', 'Principal', 'pedrodasilva_01@gmail.com');
        (2, 'Silvana', 'Estrela', '3353-8877', 'Casa', '(55) 98877-7666', 'Comercial', 'silvana2233@gmail.com');
        (3, 'Sandra', 'Paula', '(77) 96521-3445', 'Principal', '3245-4466', 'Comercial', 'sandra1234@gmail.com');
