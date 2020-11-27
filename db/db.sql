CREATE TABLE `user_account` (
`user_id` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
`username` varchar(100) NOT NULL UNIQUE,
`email` varchar(100) NOT NULL UNIQUE,
`password` varchar(100) NOT NULL
)