

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema civue_intervention
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `civue_intervention` ;

-- -----------------------------------------------------
-- Schema civue_intervention
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `civue_intervention` DEFAULT CHARACTER SET utf8 ;
USE `civue_intervention` ;

-- -----------------------------------------------------
-- Table `civue_intervention`.`failed_jobs`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `civue_intervention`.`failed_jobs` ;

CREATE TABLE IF NOT EXISTS `civue_intervention`.`failed_jobs` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` TEXT NOT NULL,
  `queue` TEXT NOT NULL,
  `payload` LONGTEXT NOT NULL,
  `exception` LONGTEXT NOT NULL,
  `failed_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `civue_intervention`.`migrations`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `civue_intervention`.`migrations` ;

CREATE TABLE IF NOT EXISTS `civue_intervention`.`migrations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` VARCHAR(255) NOT NULL,
  `batch` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = MyISAM
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `civue_intervention`.`password_resets`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `civue_intervention`.`password_resets` ;

CREATE TABLE IF NOT EXISTS `civue_intervention`.`password_resets` (
  `email` VARCHAR(255) NOT NULL,
  `token` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  INDEX `password_resets_email_index` (`email` ASC))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `civue_intervention`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `civue_intervention`.`users` ;

CREATE TABLE IF NOT EXISTS `civue_intervention`.`users` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `users_email_unique` (`email` ASC))
ENGINE = MyISAM
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `civue_intervention`.`websockets_statistics_entries`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `civue_intervention`.`websockets_statistics_entries` ;

CREATE TABLE IF NOT EXISTS `civue_intervention`.`websockets_statistics_entries` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `app_id` VARCHAR(255) NOT NULL,
  `peak_connection_count` INT(11) NOT NULL,
  `websocket_message_count` INT(11) NOT NULL,
  `api_message_count` INT(11) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `civue_intervention`.`details_user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `civue_intervention`.`details_user` ;

CREATE TABLE IF NOT EXISTS `civue_intervention`.`details_user` (
  `id_details` INT NOT NULL AUTO_INCREMENT,
  `phone_user` VARCHAR(255) NOT NULL,
  `adress_user` VARCHAR(255) NOT NULL,
  `photo_user` VARCHAR(255) NOT NULL,
  `user_id` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_details`),
  CONSTRAINT `FK_USER_ID`
    FOREIGN KEY (`user_id`)
    REFERENCES `civue_intervention`.`users` (`id`))
ENGINE = MyISAM;
