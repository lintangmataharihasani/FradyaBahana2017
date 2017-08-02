-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2017 at 03:45 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fradyabahana2017`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`, `email`) VALUES
('admin', 'adminfradyabahana123', 'admin@fradyabahana.com'),
('contact', 'adminfradyabahana123', 'contact@fradyabahana.com');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `nama_produk` varchar(100) NOT NULL,
  `concentration` int(11) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`nama_produk`, `concentration`, `state`) VALUES
('Diethanolamine', 75, 'Liquid'),
('Diethanolamine', 50, 'Liquid'),
('Diethanolamine', 25, 'Liquid'),
('Monoethanolamine', 75, 'Liquid'),
('Monoethanolamine', 50, 'Liquid'),
('Monoethanolamine', 25, 'Liquid');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`nama_kategori`) VALUES
('Agro Chemicals'),
('Auxiuliary Chemicals'),
('Cleaning Chemicals'),
('Construction Chemicals'),
('Electronic Chemicals'),
('Fine Chemicals'),
('Food and Feed Chemicals'),
('Industrial Chemicals'),
('Oil Field Chemicals'),
('Resin, Adhesive, Paint, and Coating Chemicals'),
('Specialty Chemicals'),
('Water Treatment Chemicals');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `nama_produk` varchar(100) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`nama_produk`, `nama_kategori`) VALUES
('Diethanolamine', 'Industrial Chemicals'),
('Diethylethanolamine', 'Industrial Chemicals'),
('Monoethanolamine', 'Industrial Chemicals'),
('N,N-Dimethylethanolamine S', 'Industrial Chemicals'),
('Triethanolamine', 'Industrial Chemicals'),
('Monoethanolamine', 'Specialty Chemicals'),
('N,N-Dimethylethanolamine S', 'Auxiuliary Chemicals'),
('Triethanolamine', 'Water Treatment Chemicals');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `nama_konten` varchar(100) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`nama_konten`, `konten`) VALUES
('About Us', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae'),
('Footer Bio', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae'),
('Tagline Header Home', 'A reliable partner in total chemicals management'),
('Tagline Header Product', 'We provide best chemical products for your industry needs'),
('Tagline Header Service', 'We provide high quality and personalized services your industry needs'),
('Tagline Section Home', 'A reliable partner in total chemicals management');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `nama` varchar(100) NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`nama`, `deskripsi`) VALUES
('Diethanolamine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. \r\n	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.'),
('Diethylethanolamine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. \r\n	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.'),
('Monoethanolamine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. \r\n	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.'),
('Triethanolamine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. \r\n	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `nama` varchar(100) NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`nama`, `deskripsi`) VALUES
('Chemicals Supply Management', '17 Agustus Tahun 45 Itulah Hari Kemerdekaan Kita. Hari Merdeka Nusa dan Bangsa. Hari Lahirnya Bangsa Indonesia. Merdeka. Sekali Merdeka Tetap Merdeka Selama Hayat Masih Dikandung Badan. Kita Tetap Setia Tetap Sedia Mempertahankan Indonesia Kita Tetap Setia Tetap Sedia Membela Negara Kita'),
('Delivery Management', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. \r\n	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.'),
('Distribution Management', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. \r\n	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.'),
('HSE Management', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. \r\n	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.'),
('Lab and Sample Management', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. \r\n	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.'),
('Stock Management', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. \r\n	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD KEY `nama_produk` (`nama_produk`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`nama_kategori`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD KEY `nama_kategori` (`nama_kategori`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`nama_konten`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`nama`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD CONSTRAINT `jenis_produk_ibfk_1` FOREIGN KEY (`nama_produk`) REFERENCES `produk` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD CONSTRAINT `kategori_produk_ibfk_1` FOREIGN KEY (`nama_kategori`) REFERENCES `kategori` (`nama_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
