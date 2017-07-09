CREATE SCHEMA fradyabahana;

CREATE TABLE admin (
		username VARCHAR(20) NOT NULL PRIMARY KEY, 
		password VARCHAR(20),
);

CREATE TABLE category (
		id_category INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR NOT NULL
);

CREATE TABLE industry (
		id_industry INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR NOT NULL
);

CREATE TABLE industry_implementation (
		id_implementation INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR NOT NULL,
		id_industry VARCHAR NOT NULL,
		FOREIGN KEY id_industry (id_industry) REFERENCES industry (id_industry)  
);

CREATE TABLE products (
		id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
		id_category INTEGER NOT NULL,
		FOREIGN KEY id_category (id_category) REFERENCES category (id_category)  
);

CREATE TABLE products_detail (
		name VARCHAR NOT NULL,
		id INTEGER NOT NULL,
		description VARCHAR NOT NULL,
		usage VARCHAR,
		benefit VARCHAR,
		delivering_method VARCHAR,
		link_certificate VARCHAR,
		link_document VARCHAR,
		availability BOOLEAN NOT NULL,
		FOREIGN KEY id (id) REFERENCES products (id)
);

CREATE TABLE services (
		id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR NOT NULL,
		detail VARCHAR NOT NULL
);

INSERT INTO admin (username, password) VALUES ("admin", "adminfradyabahana123");
INSERT INTO admin (username, password) VALUES ("author", "adminfradyabahana123");

INSERT INTO category (id_category, name) VALUES ("1", "Industrial Chemicals");
INSERT INTO category (id_category, name) VALUES ("2", "Water Treatment Chemicals");
INSERT INTO category (id_category, name) VALUES ("3", "Oil Field Chemicals");
INSERT INTO category (id_category, name) VALUES ("4", "Electronic Chemicals");
INSERT INTO category (id_category, name) VALUES ("5", "Agro Chemicals");
INSERT INTO category (id_category, name) VALUES ("6", "Cleaning Chemicals");
INSERT INTO category (id_category, name) VALUES ("7", "Resin, Adhesive, Paint, and Coating Chemicals");
INSERT INTO category (id_category, name) VALUES ("8", "Fine Chemicals");
INSERT INTO category (id_category, name) VALUES ("9", "Construction Chemicals");
INSERT INTO category (id_category, name) VALUES ("10", "Food and Feed Chemicals");
INSERT INTO category (id_category, name) VALUES ("11", "Auxiuliary Chemicals");
INSERT INTO category (id_category, name) VALUES ("12", "Specialty Chemicals");

INSERT INTO industry (id_industry, name) VALUES ("1" , "Agriculture");
INSERT INTO industry (id_industry, name) VALUES ("2" , "Chemicals");
INSERT INTO industry (id_industry, name) VALUES ("3" , "Construction");
INSERT INTO industry (id_industry, name) VALUES ("4" , "Pulp and Paper");
INSERT INTO industry (id_industry, name) VALUES ("5" , "Paint and Coating");
INSERT INTO industry (id_industry, name) VALUES ("6" , "Personal Care and Hygiene");
INSERT INTO industry (id_industry, name) VALUES ("7" , "Textile, Leather and Footwear");

INSERT INTO industry_implementation (id_implementation, name, id_industry) VALUES ("1" , "Crop Protection", "1");
INSERT INTO industry_implementation (id_implementation, name, id_industry) VALUES ("2" , "Pest Control", "1");
INSERT INTO industry_implementation (id_implementation, name, id_industry) VALUES ("3" , "Automotive and Transportation Coatings", "5");
INSERT INTO industry_implementation (id_implementation, name, id_industry) VALUES ("4" , "Industrial Coatings", "5");
INSERT INTO industry_implementation (id_implementation, name, id_industry) VALUES ("5" , "Hygiene", "6");
INSERT INTO industry_implementation (id_implementation, name, id_industry) VALUES ("6" , "Paper", "4");
INSERT INTO industry_implementation (id_implementation, name, id_industry) VALUES ("7" , "Textile", "7");