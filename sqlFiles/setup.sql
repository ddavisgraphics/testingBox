-- -----------------------------------------------------
-- Create the DB and give the permissions
-- -----------------------------------------------------
DROP DATABASE IF EXISTS `test`;
CREATE DATABASE IF NOT EXISTS `test`;
GRANT ALL PRIVILEGES ON `test`.* TO 'username'@'localhost';
USE `test`;