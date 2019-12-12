SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE users (
  id int(11) NOT NULL,
  fullName varchar(255) DEFAULT NULL,
  userEmail varchar(255) not NULL unique,
  password varchar(255) DEFAULT  NULL,
  contactNo bigint(11) not NULL,
  gender VARCHAR(100) default null,
	 age int(2) default null,
	 address varchar(255) default null,
	 pincode int(6) default null,
	 userImage varchar(500) default null,
  regDate timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updationDate timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  status int(1) DEFAULT NULL,
  primary key(id)
);


INSERT INTO users ( id, fullName, userEmail, password, contactNo, regDate, updationDate, status) VALUES
(1, 'himanshu gupta', '101guptaji@gmail.com', 'himanshu@123', 9988448888,  '2019-11-17 11:44:58', '2019-11-18 12:39:44', 1),
(2, 'Aman Kumar', 'amanalpha@gmail.com', 'amanalpha@123', 9999857860,  '2019-11-17 11:44:52', '2019-11-18 12:39:44', 1);

ALTER TABLE users
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;