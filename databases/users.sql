CREATE TABLE Users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fname VARCHAR(127) NOT NULL,
	lname VARCHAR(127) NOT NULL, 
    email VARCHAR(127) NOT NULL,
    pwd VARCHAR(127) NOT NULL
);