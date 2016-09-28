-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema cumulocl_laravel
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema cumulocl_laravel
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `cumulocl_laravel` DEFAULT CHARACTER SET utf8 ;
USE `cumulocl_laravel` ;

-- -----------------------------------------------------
-- Table `cumulocl_laravel`.`empresas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cumulocl_laravel`.`empresas` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rut` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `nombre` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `fecha_inicio_actividades` DATE NOT NULL,
  `fecha_ingreso_sistema` DATE NOT NULL,
  `telefono` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `comuna` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `ciudad` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `direccion` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `pais` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `clasificacion` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `invitable` TINYINT(1) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `empresas_rut_unique` (`rut` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `cumulocl_laravel`.`empresa_empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cumulocl_laravel`.`empresa_empresa` (
  `invita_id` INT(10) UNSIGNED NOT NULL,
  `invitado_id` INT(10) UNSIGNED NOT NULL,
  `mensaje` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `respuesta` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `resultado` TINYINT(1) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`invita_id`, `invitado_id`),
  INDEX `empresa_empresa_invita_id_index` (`invita_id` ASC),
  INDEX `empresa_empresa_invitado_id_index` (`invitado_id` ASC),
  CONSTRAINT `empresa_empresa_invita_id_foreign`
    FOREIGN KEY (`invita_id`)
    REFERENCES `cumulocl_laravel`.`empresas` (`id`)
    ON DELETE CASCADE,
  CONSTRAINT `empresa_empresa_invitado_id_foreign`
    FOREIGN KEY (`invitado_id`)
    REFERENCES `cumulocl_laravel`.`empresas` (`id`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `cumulocl_laravel`.`estados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cumulocl_laravel`.`estados` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre_validador` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `documentacion_entregada` TINYINT(1) NOT NULL,
  `aprobado` TINYINT(1) NOT NULL,
  `fecha_aprobado` DATE NOT NULL,
  `aprovacion_vigente` TINYINT(1) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `cumulocl_laravel`.`empresa_estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cumulocl_laravel`.`empresa_estado` (
  `empresa_id` INT(10) UNSIGNED NOT NULL,
  `estado_id` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`empresa_id`, `estado_id`),
  INDEX `empresa_estado_empresa_id_index` (`empresa_id` ASC),
  INDEX `empresa_estado_estado_id_index` (`estado_id` ASC),
  CONSTRAINT `empresa_estado_empresa_id_foreign`
    FOREIGN KEY (`empresa_id`)
    REFERENCES `cumulocl_laravel`.`empresas` (`id`)
    ON DELETE CASCADE,
  CONSTRAINT `empresa_estado_estado_id_foreign`
    FOREIGN KEY (`estado_id`)
    REFERENCES `cumulocl_laravel`.`estados` (`id`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `cumulocl_laravel`.`grupos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cumulocl_laravel`.`grupos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `descripcion` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `fecha_creacion` DATE NOT NULL,
  `activo` TINYINT(1) NOT NULL,
  `fecha_inactivo` DATE NOT NULL,
  `caracter_legal` TINYINT(1) NOT NULL,
  `rol_personalidad_juridica` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `cumulocl_laravel`.`licitacions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cumulocl_laravel`.`licitacions` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `es_privada` TINYINT(1) NOT NULL,
  `fecha_inicio` DATE NOT NULL,
  `fecha_termino` DATE NOT NULL,
  `minimo_ofertas` INT(11) NOT NULL,
  `maximo_ofertas` INT(11) NOT NULL,
  `costo_minimo` DOUBLE(8,2) NOT NULL,
  `costo_maximo` DOUBLE(8,2) NOT NULL,
  `es_desierta` TINYINT(1) NOT NULL,
  `fecha_desierta` DATE NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `cumulocl_laravel`.`migrations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cumulocl_laravel`.`migrations` (
  `migration` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `batch` INT(11) NOT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `cumulocl_laravel`.`ofertas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cumulocl_laravel`.`ofertas` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fecha_oferta` DATE NOT NULL,
  `monto_oferta` DOUBLE(8,2) NOT NULL,
  `es_aprobada_oferta` TINYINT(1) NOT NULL,
  `fecha_aprobada_oferta` DATE NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `cumulocl_laravel`.`password_resets`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cumulocl_laravel`.`password_resets` (
  `email` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `token` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  INDEX `password_resets_email_index` (`email` ASC),
  INDEX `password_resets_token_index` (`token` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `cumulocl_laravel`.`permisos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cumulocl_laravel`.`permisos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `descripcion` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `fecha_creacion` DATE NOT NULL,
  `estado_activo` TINYINT(1) NOT NULL,
  `fecha_desactiva` DATE NOT NULL,
  `fecha_actualizacion` DATE NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `cumulocl_laravel`.`proyectos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cumulocl_laravel`.`proyectos` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `esta_activo` TINYINT(1) NOT NULL,
  `fecha_desactiva` DATE NOT NULL,
  `fecha_creacion` DATE NOT NULL,
  `fecha_inicio_provable` DATE NOT NULL,
  `fecha_inicio_real` DATE NOT NULL,
  `fecha_termino_provable` DATE NOT NULL,
  `fecha_termino_real` DATE NOT NULL,
  `tir` DOUBLE(8,2) NOT NULL,
  `tasa_exigida_pesimista` DOUBLE(8,2) NOT NULL,
  `tasa_exigida_moderada` DOUBLE(8,2) NOT NULL,
  `tasa_exigida_optimista` DOUBLE(8,2) NOT NULL,
  `van` DOUBLE(8,2) NOT NULL,
  `presupuesto_inicial` DOUBLE(8,2) NOT NULL,
  `presupuesto_licitado` DOUBLE(8,2) NOT NULL,
  `presupuesto_aprobado` DOUBLE(8,2) NOT NULL,
  `minimo_socios` INT(11) NOT NULL,
  `maximo_socios` INT(11) NOT NULL,
  `capital_minimo_participacion` DOUBLE(8,2) NOT NULL,
  `capital_maximo_participacion` DOUBLE(8,2) NOT NULL,
  `porcentaje_minimo_participacion` DOUBLE(8,2) NOT NULL,
  `porcentaje_maximo_participacion` DOUBLE(8,2) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


-- -----------------------------------------------------
-- Table `cumulocl_laravel`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cumulocl_laravel`.`users` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `email` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `password` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL,
  `remember_token` VARCHAR(100) CHARACTER SET 'utf8' NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `users_email_unique` (`email` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
