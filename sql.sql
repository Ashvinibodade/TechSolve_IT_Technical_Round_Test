CREATE SCHEMA `contact_form` ;

CREATE TABLE `contact_form`.`contact_form` (
  `id` INT NOT NULL,
  `fullname` VARCHAR(20) NOT NULL,
  `phonenumber` INT NOT NULL,
  `Email` VARCHAR(20) NOT NULL,
  `Subject` VARCHAR(20) NOT NULL,
  `Message` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idnew_table`));