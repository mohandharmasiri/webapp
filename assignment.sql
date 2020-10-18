CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Patient_Details`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Patient_Details` (
  `lab_number` INT NOT NULL AUTO_INCREMENT,
  `title` ENUM('Mr', 'Ms', 'Dr', 'Rev') NULL,
  `first_name` VARCHAR(45) NOT NULL,
  `middle_name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NULL,
  `gender` ENUM('m', 'f', 't') NOT NULL,
  `date_of_birth` DATE NULL,
  `address_line1` VARCHAR(45) NULL,
  `address_line2` VARCHAR(45) NULL,
  `address_line3` VARCHAR(45) NULL,
  `symptoms` ENUM('y', 'n') NOT NULL,
  PRIMARY KEY (`lab_number`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pcr_results`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`pcr_results` (
  `date_of_collection` DATE NOT NULL,
  `date_of_pcr` DATE NOT NULL,
  `pcr_results` ENUM('p', 'n', 'i') NOT NULL,
  `Patient_Details_lab_number` INT NOT NULL,
  PRIMARY KEY (`Patient_Details_lab_number`),
  CONSTRAINT `fk_pcr_results_Patient_Details`
    FOREIGN KEY (`Patient_Details_lab_number`)
    REFERENCES `mydb`.`Patient_Details` (`lab_number`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
