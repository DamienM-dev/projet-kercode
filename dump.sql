CREATE TABLE `product` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(100) NOT NULL,
	`alt` varchar(255) NOT NULL,
	`price` DECIMAL(20) NOT NULL,
	`categories_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `client` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`lastname` varchar(100) NOT NULL,
	`firstname` varchar(100) NOT NULL,
	`address` varchar(255) NOT NULL,
	`codePostal` DECIMAL(5) NOT NULL,
	`ville` varchar(50) NOT NULL,
	`mail` varchar(100) NOT NULL,
	`phone` varchar(30) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `producteur` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`lastname` varchar(100) NOT NULL,
	`firstname` varchar(100) NOT NULL,
	`mail` varchar(100) NOT NULL,
	`phone` varchar(30) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `categories` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `slider` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`url` varchar(255) NOT NULL,
	`alt` varchar(255) NOT NULL,
	`testimonial` varchar(255) NOT NULL,
	`photo` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `contact` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`civility` BINARY NOT NULL,
	`lastname` varchar(100) NOT NULL,
	`firstname` varchar(100) NOT NULL,
	`phone` varchar(30) NOT NULL,
	`mail` varchar(100) NOT NULL,
	`raison` varchar(255) NOT NULL,
	`content` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `product` ADD CONSTRAINT `product_fk0` FOREIGN KEY (`categories_id`) REFERENCES `categories`(`id`);







