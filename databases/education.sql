CREATE TABLE Education (
	 userEmail varchar(255)  not null,
	 educationType varchar(255) not null,
	 instituteName VARCHAR(100) not null,
	 score VARCHAR(50) not null,
	 passingYear DATE default null,
	 primary key(userEmail,educationType)
	);
	
insert into Education (userEmail,educationType,instituteName, score, passingYear) values
	('101guptaji@gmail.com','higher secondary', 'lal sr. secondary school', '96.6%', 2016/06/06),
		('amanalpha@gmail.com','higher secondary', 'sarsvati sr. secondary school', '91.6%', 2016/06/07);