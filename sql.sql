CREATE SCHEMA `contact_form`;

CREATE TABLE `contact_form`.`contact_form` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fullname` VARCHAR(50) NOT NULL,
  `phonenumber` VARCHAR(20) NOT NULL,
  `Email` VARCHAR(100) NOT NULL,
  `Subject` VARCHAR(200) NOT NULL,
  `Message` TEXT NOT NULL,
  PRIMARY KEY (`id`)
);
