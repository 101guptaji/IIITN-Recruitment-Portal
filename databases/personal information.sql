CREATE TABLE perinfo (
	 userEmail varchar(255) PRIMARY KEY not null,
	 fullName varchar(255) not null,
	 gender VARCHAR(100) default null,
	 age int(2) default null,
	 address varchar(255) default null,
	 pincode int(6) not null,
	 contactNo bigint(11) not NULL
	);
	
insert into PerInfo (userEmail,fullName,gender, age, address,pincode,contactNo) values
	('101guptaji@gmail.com','himanshu gupta', 'male', 21,'niagr jsabda, nagpur',440006, 9299915624),
		('rajunai','raju nai','male', 25,'sdhs shd',335566,5841435624);
		
		