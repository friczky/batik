-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Jan 17, 2022 at 03:17 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id` int(11) NOT NULL,
  `id_user` int(111) NOT NULL,
  `kategori` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id`, `id_user`, `kategori`) VALUES
(3, 1, 'Primissima'),
(4, 1, 'Katun Prima'),
(5, 1, 'Katun Paris');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id` int(11) NOT NULL,
  `id_produk` int(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `komentar` text NOT NULL,
  `waktu` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_komentar`
--

INSERT INTO `tb_komentar` (`id`, `id_produk`, `nama`, `email`, `komentar`, `waktu`) VALUES
(11, 13, 'Fadilah Riczky', 'friczky@gmail.com', 'sssss', '17-01-2022');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(222) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(222) NOT NULL,
  `telpon` varchar(222) NOT NULL,
  `instagram` varchar(111) NOT NULL,
  `maps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kontak`
--

INSERT INTO `tb_kontak` (`id`, `nama`, `alamat`, `email`, `telpon`, `instagram`, `maps`) VALUES
(1, 'Abhinaya Batique', 'Daerah Istimewa Yogyakarta', 'batique@gmail.com', '089715215672', 'abhinaya', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31622.98852020562!2d110.35733535565821!3d-7.803207571827799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5787bd5b6bc5%3A0x21723fd4d3684f71!2sYogyakarta%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1636555457948!5m2!1sid!2sid\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id` int(11) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `nama` varchar(222) NOT NULL,
  `id_user` int(111) NOT NULL,
  `id_kategori` int(111) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(222) NOT NULL,
  `foto` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id`, `slug`, `nama`, `id_user`, `id_kategori`, `deskripsi`, `harga`, `foto`) VALUES
(8, 'jumputan-5-katurn-paris-gradasi-ungu-200-cm-x-230-cm.html', 'Jumputan 5 Katurn Paris Gradasi Ungu | 200 cm x 230 Cm', 1, 5, '<p>Jumputan 5</p>', '230.000', 'jumputan-52.png'),
(9, 'jumputan-not-balok-katun-prima-orange-200-x-115-cm.html', 'Jumputan Not Balok Katun Prima Orange - 200 x 115 cm', 1, 4, '<p>Jumputan Not Balok Katun Prima Orange - 200 x 115 cm</p>', '230.000', 'jumputan-not-balok1.png'),
(10, 'jumputan-segi-3-primissima-ungu-200-x-105-cm.html', 'Jumputan Segi 3 - Primissima - Ungu 200 x 105 cm', 1, 3, '<p>Jumputan Segi 3 - Primissima - Ungu 200 x 105 cm</p>', '230.000', 'jumputan-segi-31.png'),
(11, 'jumputan-kotak-katun-prima-coklat-200-x-115-cm.html', 'Jumputan Kotak Katun Prima Coklat - 200 x 115 cm', 1, 4, '<p>Jumputan Kotak Katun Prima Coklat - 200 x 115 cm</p>', '245.000', 'jumputan-kotak1.png'),
(12, 'jumputan-marble-primissima-200-x-106-cm-coklat.html', 'Jumputan Marble Primissima 200 x 106 cm - Coklat', 1, 3, '<p>Jumputan Marble Primissima 200 x 106 cm - Coklat</p>', '245.000', 'jumputan-marble.png'),
(13, 'rectangle-tiedye-primissima-200-x-105-cm-coklat-muda.html', 'Rectangle Tiedye Primissima 200 x 105 cm - Coklat Muda ', 1, 3, '<p>Rectangle Tiedye Primissima 200 x 105 cm - Coklat Muda</p>', '235.000', 'jumputan-ractangle.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slide`
--

CREATE TABLE `tb_slide` (
  `id` int(11) NOT NULL,
  `id_user` int(111) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `subjudul` text NOT NULL,
  `foto` varchar(222) DEFAULT NULL,
  `link` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_slide`
--

INSERT INTO `tb_slide` (`id`, `id_user`, `judul`, `subjudul`, `foto`, `link`) VALUES
(6, 1, 'Jumputan 5', 'New Product Jumputan 5 Katun Paris', 'jumputan-52.png', 'http://localhost/batik/detail/jumputan-5-katurn-paris-gradasi-ungu-200-cm-x-230-cm.html');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tentang`
--

CREATE TABLE `tb_tentang` (
  `id` int(11) NOT NULL,
  `judul` varchar(222) NOT NULL,
  `foto` varchar(222) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tentang`
--

INSERT INTO `tb_tentang` (`id`, `judul`, `foto`, `deskripsi`) VALUES
(1, 'Abhinaya Batique', 'logo-mini11.png', '<p><i><strong>Despite its small size, Singapore is known for its transition as a third-world country to the first-world country. Singapore also was known as the Asian Tiger economy, based on external trade and its workforce. Singapore size is not as big as Indonesia, but the city ranks highly in numerous international rankings for its education, entertainment, finance, healthcare, human capital, innovation, logistics, manufacturing, technology, tourism, trade, and transport. Singapore is home to 5.6 million people with a diverse culture. Majority ethnic groups in Singapore are Chinese, Malay, and Indian. Singapore Independence Day was on the 9th of August 1965. Merlion Statue is the official mascot of Singapore. Singapore is famous for its Garden by the Bay, Marina Bay Sands, dan Orchard Road (description).</strong></i></p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `role` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `email`, `role`, `foto`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', 'Super Admin', '155145815.png'),
(4, 'Karyawan', 'karyawan', '827ccb0eea8a706c4c34a16891f84e7b', 'karyawan@gmail.com', 'Karyawan', 'PAS_FOTO.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_slide`
--
ALTER TABLE `tb_slide`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_tentang`
--
ALTER TABLE `tb_tentang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_slide`
--
ALTER TABLE `tb_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_tentang`
--
ALTER TABLE `tb_tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD CONSTRAINT `tb_kategori_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_produk_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tb_slide`
--
ALTER TABLE `tb_slide`
  ADD CONSTRAINT `tb_slide_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
