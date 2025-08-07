-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 07, 2025 at 07:00 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_manekin`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_file`
--

DROP TABLE IF EXISTS `data_file`;
CREATE TABLE IF NOT EXISTS `data_file` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `user_admin` varchar(100) NOT NULL,
  `tipe_penyimpanan` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `source_file` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `waktu` date NOT NULL,
  PRIMARY KEY (`id_file`)
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_file`
--

INSERT INTO `data_file` (`id_file`, `user_admin`, `tipe_penyimpanan`, `nama_file`, `source_file`, `status`, `waktu`) VALUES
(107, 'admin', 'lokal', 'Filemantap', 'http://localhost/My_Script/SCRIPT_PROJECT/client_product/Konsep_OOP/APP_BASE_CI_3/APP_LMS_CERTARA/service_ci/asset_storage/admin/687e5dea9a821_file_admin2025-07-21_687e5dea9a829.png', 'ACTIVE', '2025-07-21'),
(106, 'admin', 'lokal', 'File shandy', 'http://localhost/My_Script/SCRIPT_PROJECT/client_product/Konsep_OOP/APP_BASE_CI_3/APP_LMS_CERTARA/service_ci/asset_storage/admin/687e53fe76d7a_file_admin2025-07-21_687e53fe76d81.png', 'ACTIVE', '2025-07-21'),
(108, 'admin', 'lokal', 'File 1', 'http://localhost/My_Script/SCRIPT_PROJECT/client_product/Konsep_OOP/APP_BASE_CI_3/APP_LMS_CERTARA/service_ci/asset_storage/admin/687f51706fca8_file_admin2025-07-22_687f51706fcae.png', 'ACTIVE', '2025-07-22'),
(109, 'admin', 'lokal', 'Filemantap', 'http://localhost/My_Script/SCRIPT_PROJECT/client_product/Konsep_OOP/APP_BASE_CI_3/APP_LMS_CERTARA/service_ci/asset_storage/admin/68836ee88ccf9_file_admin2025-07-25_68836ee88ce6e.mp4', 'ACTIVE', '2025-07-25'),
(110, 'user login', 'lokal', 'File baru', 'http://localhost/My_Script/SCRIPT_PROJECT/client_product/Konsep_OOP/APP_BASE_CI_3/APP_LMS_CERTARA/service_ci/asset_storage/user login/68852affb5320_file_user login2025-07-26_68852affb5410.mp4', 'ACTIVE', '2025-07-26'),
(111, 'admin', 'lokal', 'File sahan asdas', 'http://localhost/My_Script/SCRIPT_PROJECT/client_product/Konsep_OOP/APP_BASE_CI_3/APP_LMS_CERTARA/service_file/asset_storage/admin/68856f0c5b444_file_admin2025-07-27_68856f0c5b44c.mp4', 'ACTIVE', '2025-07-27'),
(112, 'admin', 'lokal', 'fILE KEREN', 'http://localhost/My_Script/SCRIPT_PROJECT/client_product/Konsep_OOP/APP_BASE_CI_3/APP_LMS_CERTARA/service_file/asset_storage/admin/6885723a53b07_file_admin2025-07-27_6885723a53b0c.CR2', 'ACTIVE', '2025-07-27'),
(113, 'user login', 'lokal', 'Nama File Baru', 'http://localhost/My_Script/SCRIPT_PROJECT/client_product/Konsep_OOP/APP_BASE_CI_3/APP_LMS_CERTARA/service_file/asset_storage/user login/68862cafeaefd_file_user login2025-07-27_68862cafeaf01.JPG', 'ACTIVE', '2025-07-27'),
(114, 'user login', 'lokal', 'File testing dari App Storage', 'http://localhost/My_Script/SCRIPT_PROJECT/client_product/Konsep_OOP/APP_BASE_CI_3/APP_LMS_CERTARA/service_file/asset_storage/user login/688648e952049_file_user login2025-07-27_688648e95204e.JPG', 'ACTIVE', '2025-07-27'),
(115, 'admin', 'lokal', 'sbhsvsgv', 'http://localhost/My_Script/SCRIPT_PROJECT/client_product/Konsep_OOP/APP_BASE_CI_3/APP_LMS_CERTARA/service_file/asset_storage/admin/68864eded3fe2_file_admin2025-07-27_68864eded3fe7.JPG', 'ACTIVE', '2025-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `data_level`
--

DROP TABLE IF EXISTS `data_level`;
CREATE TABLE IF NOT EXISTS `data_level` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(100) NOT NULL,
  `user_admin` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_level`
--

INSERT INTO `data_level` (`id_level`, `nama_level`, `user_admin`, `waktu`, `status`) VALUES
(18, 'admin', 'admin', '2025-07-10', 'ACTIVE'),
(19, 'mentor', 'admin', '2025-07-10', 'ACTIVE'),
(20, 'user', 'admin', '2025-07-10', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

DROP TABLE IF EXISTS `data_user`;
CREATE TABLE IF NOT EXISTS `data_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `user_pembuat` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `file_gambar` text NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `waktu` date NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id_user`, `user`, `user_pembuat`, `password`, `file_gambar`, `nama`, `alamat`, `email`, `level`, `waktu`, `status`) VALUES
(43, 'admin', 'REGISTER', 'admin', '', 'admin', 'NULL', 'admin@gmail.com', 'admin', '2025-07-10', 'ACTIVE'),
(44, 'shandy2', 'REGISTER', 'admin', '', 'Irshandy Juniar Hardai', 'NULL', 'irsh@gmail.com', 'admin', '2025-07-20', 'ACTIVE'),
(45, 'shandy8888', 'USER_HEADER_LOGIN_TESTING', 'shandy28', '', 'Irshandy', 'NULL', 'ir@gmail.com', 'admin', '2025-07-27', 'ACTIVE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
