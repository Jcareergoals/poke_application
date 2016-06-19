-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema poke
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema poke
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `poke` DEFAULT CHARACTER SET utf8 ;
USE `poke` ;

-- -----------------------------------------------------
-- Table `poke`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `poke`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL DEFAULT NULL,
  `alias` VARCHAR(45) NULL DEFAULT NULL,
  `dob` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `password` VARCHAR(45) NULL DEFAULT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `updated_at` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `poke`.`poked_users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `poke`.`poked_users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `poked_user_id` INT(11) NULL DEFAULT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `user_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_poked_users_users_idx` (`user_id` ASC),
  CONSTRAINT `fk_poked_users_users`
    FOREIGN KEY (`user_id`)
    REFERENCES `poke`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 20
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
