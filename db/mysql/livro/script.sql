CREATE DATABASE `comercial` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `comercial`;


CREATE TABLE IF NOT EXISTS `comclien` (
  `n_numeclien` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `c_codiclien` VARCHAR(10),
  `c_nomeclien` VARCHAR(100),
  `c_razaclien` VARCHAR(100),
  `d_dataclien` DATE,
  `c_cnpjclien` VARCHAR(20),
  `c_foneclien` VARCHAR(20),
  PRIMARY KEY `pk_id`(`n_numeclien`)
) ENGINE = InnoDB;

/*
|---------------------------------------|
|Para verificar a tabela criada rode:   |
|---------------------------------------|
|DESC comclien;                         |
|---------------------------------------|
/*

