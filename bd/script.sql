-- MySQL Script generated by MySQL Workbench
-- 10/13/14 21:03:55
-- Model: New Model    Version: 1.0
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
SHOW WARNINGS;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `t_agenciaTuristica`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `t_agenciaTuristica` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `t_agenciaTuristica` (
  `idt_agenciaTuristica` INT NOT NULL,
  `NroRuc` INT NULL,
  `razonSocial` VARCHAR(45) NULL,
  `emial` VARCHAR(45) NULL,
  `telefono` INT NULL,
  `direccion` VARCHAR(45) NULL,
  `LatitudLonguitud` VARCHAR(45) NULL,
  `encargado` VARCHAR(45) NULL,
  `updated_at` DATE NULL,
  `created_at` DATE NULL,
  PRIMARY KEY (`idt_agenciaTuristica`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `t_paqueteTurisitco`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `t_paqueteTurisitco` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `t_paqueteTurisitco` (
  `idt_paqueteTurisitco` INT NOT NULL,
  `nombrePaquete` VARCHAR(45) NULL,
  `fecha_inicio` DATE NULL,
  `fecha_final` DATE NULL,
  `informacionBasica` TEXT NULL,
  `precio` DECIMAL NULL,
  `region` VARCHAR(45) NULL,
  `duracionPaquete` TIME NULL,
  `updated_atl` DATE NULL,
  `created_at` DATE NULL,
  `estadoPaquete` INT NULL,
  `imagen` VARCHAR(45) NULL,
  `t_agenciaTuristica_idt_agenciaTuristica` INT NOT NULL,
  PRIMARY KEY (`idt_paqueteTurisitco`, `t_agenciaTuristica_idt_agenciaTuristica`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `t_usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `t_usuario` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `t_usuario` (
  `idt_usuario` INT NOT NULL,
  `dni` VARCHAR(45) NULL,
  `NombreCompleto` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `celular` INT NULL,
  `clavel` VARCHAR(45) NULL,
  `foto` VARCHAR(45) NULL,
  PRIMARY KEY (`idt_usuario`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `t_paqueteComprado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `t_paqueteComprado` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `t_paqueteComprado` (
  `t_usuario_idt_usuario` INT NOT NULL,
  `t_paqueteTurisitco_idt_paqueteTurisitco` INT NOT NULL,
  `codigoComprado` INT NULL,
  `estadoCompra` VARCHAR(45) NULL,
  `updated_at` DATETIME NULL,
  `created_at` DATETIME NULL,
  `idt_paqueteComprado` INT NOT NULL,
  PRIMARY KEY (`t_usuario_idt_usuario`, `t_paqueteTurisitco_idt_paqueteTurisitco`, `idt_paqueteComprado`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `t_calificacionComentario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `t_calificacionComentario` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `t_calificacionComentario` (
  `idt_calificacion` INT NOT NULL,
  `comentarios` TEXT NULL,
  `valoracion` INT NULL,
  `updated_at` DATETIME NULL,
  `created_at` DATETIME NULL,
  `t_paqueteComprado_idt_paqueteComprado` INT NOT NULL,
  PRIMARY KEY (`idt_calificacion`, `t_paqueteComprado_idt_paqueteComprado`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `t_paqueteDetalle`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `t_paqueteDetalle` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `t_paqueteDetalle` (
  `idt_paqueteDetalle` INT NOT NULL,
  `hora` DATETIME NULL,
  `descripcion` TEXT NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  `t_paqueteDetallecol` VARCHAR(45) NULL,
  `t_paqueteTurisitco_idt_paqueteTurisitco` INT NOT NULL,
  PRIMARY KEY (`idt_paqueteDetalle`, `t_paqueteTurisitco_idt_paqueteTurisitco`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `t_categoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `t_categoria` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `t_categoria` (
  `idt_categoria` INT NOT NULL,
  `nombreCategoria` VARCHAR(45) NULL,
  `updated_at` DATETIME NULL,
  `created_at` DATETIME NULL,
  PRIMARY KEY (`idt_categoria`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `t_lugaresTuristicos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `t_lugaresTuristicos` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `t_lugaresTuristicos` (
  `idt_lugaresTuristicos` INT NOT NULL,
  `nombreLugarTuristico` VARCHAR(45) NULL,
  `LonguitudLatitud` DECIMAL NULL,
  `descripcionLugar` VARCHAR(45) NULL,
  `FotoLugar` VARCHAR(45) NULL,
  `t_categoria_idt_categoria` INT NOT NULL,
  PRIMARY KEY (`idt_lugaresTuristicos`, `t_categoria_idt_categoria`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `t_lugarDetalle`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `t_lugarDetalle` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `t_lugarDetalle` (
  `t_paqueteDetalle_idt_paqueteDetalle` INT NOT NULL,
  `t_lugaresTuristicos_idt_lugaresTuristicos` INT NOT NULL,
  `descripcion` VARCHAR(45) NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`t_paqueteDetalle_idt_paqueteDetalle`, `t_lugaresTuristicos_idt_lugaresTuristicos`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `t_tipoCategoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `t_tipoCategoria` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `t_tipoCategoria` (
  `idt_tipoCategoria` INT NOT NULL,
  `nombreSubCategoria` VARCHAR(45) NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  `t_categoria_idt_categoria` INT NOT NULL,
  PRIMARY KEY (`idt_tipoCategoria`, `t_categoria_idt_categoria`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `t_promocion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `t_promocion` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `t_promocion` (
  `idt_promocion` INT NOT NULL,
  `fechaInicio` DATETIME NULL,
  `fechaFinal` DATETIME NULL,
  `updated_at` DATETIME NULL,
  `created_at` DATETIME NULL,
  `descripcion` VARCHAR(45) NULL,
  `estado` INT NULL,
  `t_paqueteTurisitco_idt_paqueteTurisitco` INT NOT NULL,
  `t_paqueteTurisitco_t_agenciaTuristica_idt_agenciaTuristica` INT NOT NULL,
  PRIMARY KEY (`idt_promocion`, `t_paqueteTurisitco_idt_paqueteTurisitco`, `t_paqueteTurisitco_t_agenciaTuristica_idt_agenciaTuristica`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `t_actividad`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `t_actividad` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `t_actividad` (
  `idt_actividad` INT NOT NULL,
  `nombreActividad` VARCHAR(45) NULL,
  `updated_at` DATETIME NULL,
  `created_at` DATETIME NULL,
  PRIMARY KEY (`idt_actividad`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `t_paqueteTurisitco_has_t_actividad`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `t_paqueteTurisitco_has_t_actividad` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `t_paqueteTurisitco_has_t_actividad` (
  `t_paqueteTurisitco_idt_paqueteTurisitco` INT NOT NULL,
  `t_actividad_idt_actividad` INT NOT NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`t_paqueteTurisitco_idt_paqueteTurisitco`, `t_actividad_idt_actividad`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `table1`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `table1` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `table1` (
)
ENGINE = InnoDB;

SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;