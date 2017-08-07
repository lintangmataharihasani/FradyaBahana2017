-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 02:31 PM
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

--
-- Dumping data for table `concentration_produk`
--

INSERT INTO `concentration_produk` (`nama`, `concentration`) VALUES
('Monoethanolamine', 50),
('Monoethanolamine', 75),
('Monoethanolamine', 80),
('Monoethanolamine', 100),
('Diethanolamine', 25),
('Diethanolamine', 50),
('Diethylethanolamine', 100);

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
  `concentration` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`nama`, `deskripsi`, `state`, `concentration`) VALUES
('Diethanolamine', 'Produk ini bisa buat obat keselek', 'liquid', 50),
('Diethylethanolamine', 'kalo ini obat apa ya????eaaa', 'crystal', NULL),
('Monoethanolamine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. \r\n	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.', 'liquid', 70);

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
('Delivery Management', 'Ini Budi. Budi Bermain Bola'),
('Distribution Management', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. \r\n	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.'),
('HSE Management', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. \r\n	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.'),
('Lab and Sample Management', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. \r\n	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.'),
('Panjat Sosial', 'Fenomena anak sekarang ye\r\nHobi pamerin barang ye\r\nPos di grup wa, sc, ig ye\r\nDemi like dan komen orang ye\r\n\r\nGaul setiap hari wajib nge-path\r\nArtis selebriti dia pepet\r\nPencitraan ga sesuai daun perak\r\nPinjem duit dulu kagak malu\r\n\r\nAnak nongkrong ibu kota\r\nAmet gosip dan berita\r\nGayanya sosialita\r\nUangnya enggak ada\r\nCari simpati buka kartu cari status baru\r\n\r\nHati hati zaman sekarang\r\nBanyak orang berteman punya maksud tujuan\r\nMengumbar kedekatan dapatin keuntungan\r\nAbis manis lo dibuang\r\n\r\nPanjat panjat panjat panjat\r\nPanjat panjat panjat panjat\r\nPanjat sosial\r\nPanjat sosial\r\nPanjat sosial terus bro sampai naik status\r\n\r\nPanjat panjat panjat panjat\r\nPanjat panjat panjat panjat\r\nPanjat sosial\r\nPanjat sosial\r\nPanjatin terus bro sampai naik status\r\n\r\nBanyak yang ingin panjat\r\nBanyak yang cara jahat oma oma\r\nSemua sosial kalian panjat\r\nKalian panjat\r\n\r\nAda yang tipe sok terkenal sok dikenal\r\nBerteman sebatas nominal faktalah\r\nKan ngikut gaya baju sampai model rambut\r\n\r\nOla komosta ise koniciwa\r\nAze bonzu madam\r\nPerfoma mulu foto lu lu trus minta difollow\r\nUdah cup plis plis unfollow oh no\r\nLu dan gua makin padat\r\n\r\nHati hati zaman sekarang\r\nBanyak orang berteman punya maksud tujuan\r\nMengumbar kedekatan dapatin keuntungan\r\nAbis manis lo dibuang\r\n\r\nHati hati zaman sekarang\r\nBanyak orang berteman punya maksud tujuan\r\nMengumbar kedekatan dapatin keuntungan\r\nAbis manis lo dibuang\r\n\r\nPanjat panjat panjat panjat\r\nPanjat panjat panjat panjat\r\nPanjat sosial\r\nPanjat sosial\r\nPanjat sosial terus bro sampai naik status\r\n\r\nPanjat panjat panjat panjat\r\nPanjat panjat panjat panjat\r\nPanjat sosial\r\nPanjat sosial\r\nPanjatin terus bro sampai naik status\r\n\r\nPanjat panjat panjat panjat\r\nPanjat panjat panjat panjat\r\nPanjat sosial\r\nPanjat sosial\r\nPanjat sosial terus bro sampai naik status'),
('Stock Management', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. \r\n	Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac.');

-- --------------------------------------------------------

--
-- Table structure for table `state_produk`
--

CREATE TABLE `state_produk` (
  `nama` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_produk`
--

INSERT INTO `state_produk` (`nama`, `state`) VALUES
('Diethanolamine', 'liquid'),
('Diethanolamine', 'crystal'),
('Diethanolamine', 'solid'),
('Diethylethanolamine', 'liquid'),
('Diethylethanolamine', 'solid'),
('Monoethanolamine', 'liquid');

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
