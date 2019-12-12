SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE userlog (
  id int(11) NOT NULL,
  userId int(11) NOT NULL,
  username varchar(255) NOT NULL,
  userip binary(16) NOT NULL,
  loginTime timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  status int(11) NOT NULL,
  primary key (id)
);

INSERT INTO userlog (id, userId, username, userip, loginTime, status) VALUES
(1, 1, '101guptaji@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-28 17:04:36', 1),
(2, 2, 'amanalpha@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-29 15:02:26', 1),
(3, 1, '101guptaji@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-30 14:58:00', 1);

ALTER TABLE userlog
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;