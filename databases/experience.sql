CREATE TABLE experience (
	 userEmail varchar(255) PRIMARY KEY not null,
	 companyName varchar(255) not null,
	 position VARCHAR(100) not null,
	 startYear date not null,
	 endYear DATE default null
	);
	
