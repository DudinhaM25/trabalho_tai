CREATE DATABASE `trabalho_avaliativo`
USE ` trabalho_avaliativo` ;

CREATE TABLE `agenda` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`titulo` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_bin',
	`data_inicio` DATE NULL DEFAULT NULL,
	`hora_inicio` TIME NULL DEFAULT NULL,
	`data_fim` DATE NULL DEFAULT NULL,
	`hora_fim` TIME NULL DEFAULT NULL,
	`local` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_bin',
	`descricao` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_bin',
	`id_convidado` INT(11) NULL DEFAULT NULL,
	PRIMARY KEY (`id`) USING BTREE,
	INDEX `id_convidado` (`id_convidado`) USING BTREE
)
COLLATE='utf8mb4_bin'
ENGINE=InnoDB
AUTO_INCREMENT=4
;

INSERT INTO ` agenda ` ( ` id ` , ` titulo` , ` data_inicio` , ` hora_inicio `, `data_fim`,`hora_fim`, `local`, `descricao` )
 VALUES (1, 'reunião escola', '2022-05-25', '20:00:00', '2022-05-25', '21:30:00', 'Escola Neusa Massolinni', 'Reunião da Lua', NULL);	
        (2, 'reunião creche', '2022-05-30', '19:30:00', '2022-05-30', '20:30:00', 'Creche sonho feliz', 'Reunião do pedro', NULL);
        (3, 'trabalho', '2022-05-15', '13:30:00', '2022-05-12', '16:00:00', 'trabalho', 'Ideias', NULL);
