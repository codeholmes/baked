CREATE TABLE `user_account` (
`user_id` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
`username` varchar(100) NOT NULL UNIQUE,
`email` varchar(100) NOT NULL UNIQUE,
`password` varchar(100) NOT NULL
)

CREATE TABLE `user_wallet` (
`user_id` int NOT NULL,
`amount` int DEFAULT 0
)

create table user_data
(data_id int primary key auto_increment, user_id int, raw_data BLOB);

