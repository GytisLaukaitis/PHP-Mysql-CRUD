CREATE DATABASE `people` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Project_name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `Deadline` date NOT NULL,
  `Names` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
CREATE TABLE `users` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `Surname` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `Age` int(11) NOT NULL,
  `Project_id` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
