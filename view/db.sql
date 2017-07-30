CREATE TABLE produk (
	nama varchar NOT NULL PRIMARY KEY,
	deskripsi text,
);

CREATE TABLE kategori (
	nama_kategori varchar(100) NOT NULL PRIMARY KEY
);

CREATE TABLE jenis_produk (
	nama_produk varchar NOT NULL,
	concentration int,
	state varchar,
	FOREIGN KEY nama_produk REFERENCES produk (nama);
);

CREATE TABLE kategori_produk (
	nama_produk varchar NOT NULL,
	nama_kategori varchar(100) NOT NULL,
	FOREIGN KEY nama_kategori REFERENCES kategori (nama_kategori);
);

CREATE TABLE service (
	nama varchar NOT NULL PRIMARY KEY,
	deskripsi text
);

CREATE TABLE akun (
	username varchar NOT NULL PRIMARY KEY,
	password varchar NOT NULL,
	email varchar
);

CREATE TABLE konten (
	nama_konten varchar NOT NULL PRIMARY KEY,
	konten text NOT NULL,
);


INSERT INTO akun (username, password, email) VALUES ("admin", "adminfradyabahana123", "admin@fradyabahana.com");
INSERT INTO akun (username, password, email) VALUES ("contact", "adminfradyabahana123", "contact@fradyabahana.com");

INSERT INTO kategori (nama_kategori) VALUES ("Industrial Chemicals");
INSERT INTO kategori (nama_kategori) VALUES ("Water Treatment Chemicals");
INSERT INTO kategori (nama_kategori) VALUES ("Oil Field Chemicals");
INSERT INTO kategori (nama_kategori) VALUES ("Electronic Chemicals");
INSERT INTO kategori (nama_kategori) VALUES ("Agro Chemicals");
INSERT INTO kategori (nama_kategori) VALUES ("Cleaning Chemicals");
INSERT INTO kategori (nama_kategori) VALUES ("Resin, Adhesive, Paint, and Coating Chemicals");
INSERT INTO kategori (nama_kategori) VALUES ("Fine Chemicals");
INSERT INTO kategori (nama_kategori) VALUES ("Construction Chemicals");
INSERT INTO kategori (nama_kategori) VALUES ("Food and Feed Chemicals");
INSERT INTO kategori (nama_kategori) VALUES ("Auxiuliary Chemicals");
INSERT INTO kategori (nama_kategori) VALUES ("Specialty Chemicals");

INSERT INTO produk (nama, deskripsi) VALUES ("Diethanolamine", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.");
INSERT INTO produk (nama, deskripsi) VALUES ("Diethylethanolamine", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.");
INSERT INTO produk (nama, deskripsi) VALUES ("Monoethanolamine", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.");
INSERT INTO produk (nama, deskripsi) VALUES ("N,N-Dimethylethanolamine S", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.");
INSERT INTO produk (nama, deskripsi) VALUES ("Triethanolamine", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.");

INSERT INTO kategori_produk (nama_produk, nama_kategori) VALUES ("Diethanolamine", "Industrial Chemicals");
INSERT INTO kategori_produk (nama_produk, nama_kategori) VALUES ("Diethylethanolamine", "Industrial Chemicals");
INSERT INTO kategori_produk (nama_produk, nama_kategori) VALUES ("Monoethanolamine", "Industrial Chemicals");
INSERT INTO kategori_produk (nama_produk, nama_kategori) VALUES ("N,N-Dimethylethanolamine S", "Industrial Chemicals");
INSERT INTO kategori_produk (nama_produk, nama_kategori) VALUES ("Triethanolamine", "Industrial Chemicals");
INSERT INTO kategori_produk (nama_produk, nama_kategori) VALUES ("Monoethanolamine", "Specialty Chemicals");
INSERT INTO kategori_produk (nama_produk, nama_kategori) VALUES ("N,N-Dimethylethanolamine S", "Auxiuliary Chemicals");
INSERT INTO kategori_produk (nama_produk, nama_kategori) VALUES ("Triethanolamine", "Water Treatment Chemicals");

INSERT INTO jenis_produk (nama_produk, concentration, state) VALUES ("Diethanolamine", 75, "Liquid");
INSERT INTO jenis_produk (nama_produk, concentration, state) VALUES ("Diethanolamine", 50, "Liquid");
INSERT INTO jenis_produk (nama_produk, concentration, state) VALUES ("Diethanolamine", 25, "Liquid");
INSERT INTO jenis_produk (nama_produk, concentration, state) VALUES ("Monoethanolamine", 75, "Liquid");
INSERT INTO jenis_produk (nama_produk, concentration, state) VALUES ("Monoethanolamine", 50, "Liquid");
INSERT INTO jenis_produk (nama_produk, concentration, state) VALUES ("Monoethanolamine", 25, "Liquid");
INSERT INTO jenis_produk (nama_produk, state) VALUES ("N-Dimethylethanolamine S", "Crystal");
INSERT INTO jenis_produk (nama_produk, state) VALUES ("N-Dimethylethanolamine S", "Solid");
INSERT INTO jenis_produk (nama_produk, concentration, state) VALUES ("N,N-Dimethylethanolamine", 75, "Gel");
INSERT INTO jenis_produk (nama_produk, state) VALUES ("Triethanolamine", "Solid");

INSERT INTO service (nama, deskripsi) VALUES ("Chemicals Supply Management", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.");
INSERT INTO service (nama, deskripsi) VALUES ("Delivery Management", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.");
INSERT INTO service (nama, deskripsi) VALUES ("Stock Management", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.");
INSERT INTO service (nama, deskripsi) VALUES ("Distribution Management", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.");
INSERT INTO service (nama, deskripsi) VALUES ("Lab and Sample Management", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.");
INSERT INTO service (nama, deskripsi) VALUES ("HSE Management", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.");



