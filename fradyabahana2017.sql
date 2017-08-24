-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2017 at 09:01 AM
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
-- Table structure for table `concentration_produk`
--

CREATE TABLE `concentration_produk` (
  `nama` varchar(100) NOT NULL,
  `concentration` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('Others'),
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
('N,N-Dimethylethanolamine S', 'Industrial Chemicals'),
('Triethanolamine', 'Industrial Chemicals'),
('N,N-Dimethylethanolamine S', 'Auxiuliary Chemicals'),
('Triethanolamine', 'Water Treatment Chemicals'),
('Diethanolamine', 'Agro Chemicals'),
('Diethanolamine', 'Auxiuliary Chemicals'),
('Ethanolamine', 'Auxiuliary Chemicals'),
('Ethanolamine', 'Cleaning Chemicals'),
('Citric Acid', 'Agro Chemicals'),
('Citric Acid', 'Auxiuliary Chemicals'),
('Citric Acid', 'Food and Feed Chemicals'),
('Citric Acid', 'Industrial Chemicals'),
('Lactic Acid', 'Agro Chemicals'),
('Potassium Nitrate', 'Agro Chemicals'),
('Potassium Nitrate', 'Industrial Chemicals');

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
('About Us', 'Fradya Bahana Innovation adalah sebuah perusahaan yang bergerak di bidang penyediaan bahan-bahan kimia berkualitas sejak tahun 2000. Ini adalah dummy text, harap mengubah text ini di halaman dashboard admin pada bagian edit content'),
('Footer Bio', 'Fradya Bahana Innovation adalah sebuah perusahaan yang bergerak di bidang penyediaan bahan-bahan kimia berkualitas sejak tahun 2000. Ini adalah dummy text, harap mengubah text ini di halaman dashboard admin pada bagian edit content'),
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
  `deskripsi` text,
  `state` varchar(100) DEFAULT NULL,
  `concentration` varchar(100) DEFAULT NULL,
  `packaging` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`nama`, `deskripsi`, `state`, `concentration`) VALUES
('Citric Acid', 'Citric acid is a weak organic tricarboxylic acid having the chemical formula C6H8O7. It occurs naturally in citrus fruits. In biochemistry, it is an intermediate in the citric acid cycle, which occurs in the metabolism of all aerobic organisms.\r\nMore than a million tons of citric acid are manufactured every year. It is used widely as an acidifier, as a flavoring and chelating agent', 'Liquid', '50%, 100%'),
('Diethanolamine', 'Diethanolamine, often abbreviated as DEA or DEOA, is an organic compound with the formula HN(CH2CH2OH)2. Pure diethanolamine is a white solid at room temperature, but its tendency to absorb water and to supercool[2] mean it is often encountered as a colorless, viscous liquid. Diethanolamine is polyfunctional, being a secondary amine and a diol. Like other organic amines, diethanolamine acts as a weak base. Reflecting the hydrophilic character of the secondary amine and hydroxyl groups, DEA is soluble in water. Amides prepared from DEA are often also hydrophilic. Recently, the chemical has been classified by the International Agency for Research on Cancer as \"possibly carcinogenic to humans (Group 2B)\".', 'Liquid, Solid, Gas', '20%, 30%, 50%'),
('Ethanolamine', 'Ethanolamine, also called 2-aminoethanol or monoethanolamine (often abbreviated as ETA or MEA), is an organic chemical compound with the formula HOCH2CH2NH2. The molecule is both a primary amine and a primary alcohol (due to a hydroxyl group). Ethanolamine is a colorless, viscous liquid with an odor reminiscent to that of ammonia. Its derivatives are widespread in nature, e.g., lipids.', 'Liquid', '25%, 50%'),
('Lactic Acid', 'Lactic acid is an organic compound with the formula CH3CH(OH)COOH. In its solid state, it is white and water-soluble. In its liquid state, it is clear. It is produced both naturally and synthetically. With a hydroxyl group adjacent to the carboxyl group, lactic acid is classified as an alpha-hydroxy acid (AHA). In the form of its conjugate base called lactate, it plays a role in several biochemical processes.', 'Liquid, Solid', '50%, 100%'),
('Potassium Nitrate', 'Membuat pupuk dan bahan bakar serbaguna', 'Solid, Gel, Crystal', '50%, 100%');

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
('Delivery Management', 'Delivery Management Description'),
('Distribution Management', 'Distribution Management Description'),
('HSE Management', 'HSE Management Description'),
('Lab and Sample Management', 'Lab and Sample Management Description'),
('Stock Management', 'Stock Management Description');

-- --------------------------------------------------------

--
-- Table structure for table `state_produk`
--

CREATE TABLE `state_produk` (
  `nama` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `concentration_produk`
--
ALTER TABLE `concentration_produk`
  ADD KEY `nama` (`nama`);

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
-- Indexes for table `state_produk`
--
ALTER TABLE `state_produk`
  ADD KEY `nama` (`nama`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `concentration_produk`
--
ALTER TABLE `concentration_produk`
  ADD CONSTRAINT `concentration_produk_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `produk` (`nama`);

--
-- Constraints for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD CONSTRAINT `kategori_produk_ibfk_1` FOREIGN KEY (`nama_kategori`) REFERENCES `kategori` (`nama_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `state_produk`
--
ALTER TABLE `state_produk`
  ADD CONSTRAINT `state_produk_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `produk` (`nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
