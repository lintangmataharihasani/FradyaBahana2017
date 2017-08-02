CREATE TABLE produk (
	nama VARCHAR(100) PRIMARY KEY,
	deskripsi TEXT
);

CREATE TABLE kategori (
	nama_kategori VARCHAR(100) PRIMARY KEY
);

CREATE TABLE jenis_produk (
	nama_produk VARCHAR(100) NOT NULL,
	concentration INT,
	state VARCHAR(100),
	FOREIGN KEY (nama_produk) REFERENCES produk (nama) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE kategori_produk (
	nama_produk VARCHAR(100) NOT NULL,
	nama_kategori VARCHAR(100) NOT NULL,
	FOREIGN KEY (nama_kategori) REFERENCES kategori (nama_kategori) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE service (
	nama VARCHAR(100) PRIMARY KEY,
	deskripsi TEXT
);

CREATE TABLE akun (
	username VARCHAR(100) PRIMARY KEY,
	password VARCHAR(100) NOT NULL,
	email VARCHAR(100)
);

CREATE TABLE konten (
	nama_konten VARCHAR(100) PRIMARY KEY,
	konten TEXT NOT NULL
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
INSERT INTO produk (nama, deskripsi) VALUES ("N-Dimethylethanolamine S", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
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

INSERT INTO konten (nama_konten, konten) VALUES ("About Us", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae");
INSERT INTO konten (nama_konten, konten) VALUES ("Footer Bio", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae");
INSERT INTO konten (nama_konten, konten) VALUES ("Tagline Header Home", "A reliable partner in total chemicals management");
INSERT INTO konten (nama_konten, konten) VALUES ("Tagline Section Home", "A reliable partner in total chemicals management");
INSERT INTO konten (nama_konten, konten) VALUES ("Tagline Header Product", "We provide best chemical products for your industry needs");
INSERT INTO konten (nama_konten, konten) VALUES ("Tagline Header Service", "We provide high quality and personalized services your industry needs");
