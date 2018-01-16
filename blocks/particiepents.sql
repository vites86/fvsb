CREATE TABLE `paticiepents` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `img` varchar(500) DEFAULT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `secondName` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL, 
  `unitId` int  NOT NULL,   
  `roleId` varchar(255) NOT NULL,
  `sport_rankId` int NOT NULL,
  `suddiv_rankId` int  NOT NULL,
  `coachId` int NOT NULL,
  `ztu` boolean NOT NULL,
  `coach` boolean NOT NULL,
  `description` text NOT NULL,
  `telephone` text NOT NULL,
  `identCode` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE `sport_ranks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

insert into `sport_ranks`(`name`) values ('МСУ');
insert into `sport_ranks`(`name`) values ('КМСУ');
insert into `sport_ranks`(`name`) values ('МСУМК');
insert into `sport_ranks`(`name`) values ('ЗМСУ');
insert into `sport_ranks`(`name`) values ('1 р.');
insert into `sport_ranks`(`name`) values ('2 р.');
insert into `sport_ranks`(`name`) values ('3 р.');
insert into `sport_ranks`(`name`) values ('1 д.р.');
insert into `sport_ranks`(`name`) values ('2 д.р.');
insert into `sport_ranks`(`name`) values ('3 д.р.');

CREATE TABLE `suddivRanks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

insert into `suddivRanks`(`name`) values ('суддя I категорії');
insert into `suddivRanks`(`name`) values ('суддя II категорії');
insert into `suddivRanks`(`name`) values ('суддя Національної категорії');
insert into `suddivRanks`(`name`) values ('суддя Міжнародної категорії');










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
