CREATE SCHEMA fradyabahana;

CREATE TABLE admin (
		username VARCHAR(20) NOT NULL PRIMARY KEY, 
		password VARCHAR(20),
);

CREATE TABLE category (
		id_category INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR NOT NULL
);

CREATE TABLE products (
		id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
		id_category INTEGER NOT NULL,
		FOREIGN KEY id_category (id_category) REFERENCES category (id_category)  
);

CREATE TABLE products_detail (
		name VARCHAR NOT NULL,
		id INTEGER NOT NULL,
		description VARCHAR,
		link_certificate VARCHAR,
		link_document VARCHAR,
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