# tbl schema:- 

CREATE TABLE `user_info` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `first_name` varchar(30) NOT NULL,
 `last_name` varchar(30) NOT NULL,
 `gender` varchar(10) NOT NULL,
 `contact_no` varchar(11) NOT NULL,
 `hobbie` varchar(100) NOT NULL,
 `user_email` varchar(100) NOT NULL,
 `dob` date NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4
