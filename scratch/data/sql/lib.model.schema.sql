
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- post
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `post`;


CREATE TABLE `post`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(255),
	`excerpt` TEXT,
	`body` TEXT,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- comment
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `comment`;


CREATE TABLE `comment`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`post_id` INTEGER,
	`author` VARCHAR(255),
	`email` VARCHAR(255),
	`body` TEXT,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `comment_FI_1` (`post_id`),
	CONSTRAINT `comment_FK_1`
		FOREIGN KEY (`post_id`)
		REFERENCES `post` (`id`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
