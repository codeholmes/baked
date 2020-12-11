CREATE TABLE `user_account` (
`user_id` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
`username` varchar(100) NOT NULL UNIQUE,
`email` varchar(100) NOT NULL UNIQUE,
`password` varchar(100) NOT NULL
);

ALTER TABLE user_account add name varchar(30);

CREATE TABLE `user_wallet` (
`user_id` int NOT NULL,
`amount` int DEFAULT 0
);

create table user_data
(data_id int primary key auto_increment, user_id int, raw_data BLOB);



create table admin_account
(admin_id int(20) primary key auto_increment,
username varchar(20),
password varchar(100));


create table coupon (coupon_id int(10) auto_increment primary key, coupon_name varchar(20), coupon_amount int(20) default 0);