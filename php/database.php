
create database training;

use training;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100),
  `college` varchar(100),
  `phone` varchar(15),
  `gender` varchaer(20),
  PRIMARY KEY  (`id`)
);