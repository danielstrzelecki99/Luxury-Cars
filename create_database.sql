CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
`surname` varchar(100) NOT NULL,
`country` varchar(20) NOT NULL,
`email` varchar(255) NOT NULL,
`phone_number` varchar(20) NOT NULL,
`password` varchar(255) NOT NULL,
`date` datetime NOT NULL,
PRIMARY KEY (`id`),
UNIQUE KEY `email`
(`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `logged_in_users` (
`sessionId` varchar(100) NOT NULL,
`userId` int(11) NOT NULL,
`lastUpdate` datetime NOT NULL,
PRIMARY KEY (`sessionId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `orders` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`customerId` int(11) NOT NULL,
`car` varchar(100) NOT NULL,
`engine` varchar(20) NOT NULL,
`type` varchar(255) NOT NULL,
`color` varchar(20) NOT NULL,
`equipment` varchar(255) NOT NULL,
`payment_method` varchar(30) NOT NULL,
`date` datetime NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
AUTO_INCREMENT=1 ;