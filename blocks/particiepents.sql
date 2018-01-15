CREATE TABLE `paticiepents` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `sport_rank` varchar(25) NOT NULL,
  `suddiv_rank` varchar(25) NOT NULL,
  `ztu` boolean NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;


CREATE TABLE `paticiepent_status` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

insert into  `paticiepent_status` values ('голова обласного підрозділу')
insert into  `paticiepent_status` values ('голова районого підрозділу')
insert into  `paticiepent_status` values ('голова міського підрозділу')
insert into  `paticiepent_status` values ('тренер')
insert into  `paticiepent_status` values ('спортсмен')
insert into  `paticiepent_status` values ('суддя')
