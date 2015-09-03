CREATE TABLE IF NOT EXISTS `#__sql2json` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`apiname` varchar(255) DEFAULT NULL,
	`sqlaction` TINYTEXT DEFAULT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `apiname_UNIQUE` (`apiname`)
);

