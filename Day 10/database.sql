CREATE DATABASE sales;
USE sales;

CREATE TABLE `salesinfo` (
    `id` INT NOT NULL auto_increment,
    `productName` VARCHAR (30) NOT NULL,
    `productDescription` VARCHAR(50),
    `productCount` INT NOT NULL,
    `sellerName` VARCHAR(30),
    PRIMARY KEY(`id`);
)