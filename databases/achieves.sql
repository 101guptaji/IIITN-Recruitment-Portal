Create table achieves(
     userEmail varchar(255) PRIMARY KEY not null, 
	 Research_Projects VARCHAR(30) default null, 
	 Research_publications VARCHAR(30) default null, 
	 Consultancy_works VARCHAR(30) default null,
    PhD_guided varchar(50) default null, 
	MTech_guided varchar(50) default null, 
	BTech_guided varchar(50) default null
);
