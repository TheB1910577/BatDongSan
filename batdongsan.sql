-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 08:38 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batdongsan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bat_dong_san`
--

CREATE TABLE `bat_dong_san` (
  `ma_bds` int(11) NOT NULL,
  `tieu_de` varchar(250) DEFAULT NULL,
  `diachi` varchar(250) DEFAULT NULL,
  `gia_bds` decimal(12,2) NOT NULL,
  `maplink` varchar(250) NOT NULL,
  `mo_ta` longtext NOT NULL,
  `dien_tich` varchar(250) NOT NULL,
  `so_phong` varchar(250) NOT NULL,
  `so_tang` varchar(250) NOT NULL,
  `loai_bds` varchar(250) NOT NULL,
  `phap_ly` varchar(250) NOT NULL,
  `loai_tin_dang` varchar(250) NOT NULL,
  `so_ngay_hien_thi` varchar(250) NOT NULL,
  `may_lanh` tinyint(1) NOT NULL,
  `tu_lanh` tinyint(1) NOT NULL,
  `lo_suoi` tinyint(1) NOT NULL,
  `ho_boi` tinyint(1) NOT NULL,
  `san_vuon` tinyint(1) NOT NULL,
  `hang_rao` tinyint(1) NOT NULL,
  `phong_tam` tinyint(1) NOT NULL,
  `nha_ve_sinh` tinyint(1) NOT NULL,
  `may_giat` tinyint(1) NOT NULL,
  `tu_bep` tinyint(1) NOT NULL,
  `tinh_thanh` varchar(250) NOT NULL,
  `id_taikhoan` int(11) DEFAULT NULL,
  `trang_thai` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bat_dong_san`
--

INSERT INTO `bat_dong_san` (`ma_bds`, `tieu_de`, `diachi`, `gia_bds`, `maplink`, `mo_ta`, `dien_tich`, `so_phong`, `so_tang`, `loai_bds`, `phap_ly`, `loai_tin_dang`, `so_ngay_hien_thi`, `may_lanh`, `tu_lanh`, `lo_suoi`, `ho_boi`, `san_vuon`, `hang_rao`, `phong_tam`, `nha_ve_sinh`, `may_giat`, `tu_bep`, `tinh_thanh`, `id_taikhoan`, `trang_thai`) VALUES
(1, 'pokemon', 'dia chi', '100.00', 'link ne', 'mota ne', 'dien tich ne', '103', '20', 'can ho', 'so do', 'better', '5', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Cần thơ', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `id_anh` int(11) NOT NULL,
  `link_anh` varchar(250) DEFAULT NULL,
  `ma_bds` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hinhanh`
--

INSERT INTO `hinhanh` (`id_anh`, `link_anh`, `ma_bds`) VALUES
(2, 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pokemon.com%2F&psig=AOvVaw2wP0C7mfIPGlh3oWrv_tIu&ust=1684976855026000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCOjv-IvijP8CFQAAAAAdAAAAABAD', 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_taikhoan` int(11) NOT NULL,
  `ten_taikhoan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `avata` varchar(250) NOT NULL,
  `sdt` char(13) NOT NULL,
  `cccd` char(12) NOT NULL,
  `birthday` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id_taikhoan`, `ten_taikhoan`, `email`, `matkhau`, `avata`, `sdt`, `cccd`, `birthday`, `status`) VALUES
(1, 'Chú Tư', 'chutu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pokemon.com%2F&psig=AOvVaw2wP0C7mfIPGlh3oWrv_tIu&ust=1684976855026000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCOjv-IvijP8CFQAAAAAdAAAAABAD', '0969880802', '123456789123', '2023-05-17', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bat_dong_san`
--
ALTER TABLE `bat_dong_san`
  ADD PRIMARY KEY (`ma_bds`),
  ADD KEY `id_taikhoan` (`id_taikhoan`);

--
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`id_anh`),
  ADD KEY `fk_htk_ma_bds` (`ma_bds`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_taikhoan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bat_dong_san`
--
ALTER TABLE `bat_dong_san`
  MODIFY `ma_bds` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `id_anh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_taikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bat_dong_san`
--
ALTER TABLE `bat_dong_san`
  ADD CONSTRAINT `id_taikhoan` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id_taikhoan`);

--
-- Constraints for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `fk_htk_ma_bds` FOREIGN KEY (`ma_bds`) REFERENCES `bat_dong_san` (`ma_bds`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
