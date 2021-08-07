-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 11:19 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlhm`
--

-- --------------------------------------------------------

--
-- Table structure for table `canboyte`
--

CREATE TABLE `canboyte` (
  `MSCBYT` char(10) CHARACTER SET utf8 NOT NULL,
  `CCCD` char(11) CHARACTER SET utf8 DEFAULT NULL,
  `TEN` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `CHUCVU` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `password` char(20) CHARACTER SET utf8 DEFAULT NULL,
  `quyen` tinyint(1) DEFAULT NULL,
  `img` tinyint(1) DEFAULT NULL,
  `email` char(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `canboyte`
--

INSERT INTO `canboyte` (`MSCBYT`, `CCCD`, `TEN`, `CHUCVU`, `password`, `quyen`, `img`, `email`) VALUES
('CB001', '78945612378', 'hoàng văn long', 'lấy máu', '456', 1, NULL, 'vanlong2087.bs@gmail.com'),
('CB002', '98765432111', 'bùi tiến dũng', 'lấy thông tin', '123', 1, NULL, 'tiendung8720.bs@gmail.com'),
('CB003', '11122233344', 'đặng văn lâm', 'lấy máu', '123', 0, NULL, 'vamlam2780.bs@gmail.com'),
('CB004', '55566677788', 'quang hải', 'lấy máu', '123', 0, NULL, 'quanghai0872.bs@gmail.com'),
('CB005', '666354677', 'tiến linh', 'lấy máu', '123', 0, NULL, 'tienlinh8702.bs@gmail.com'),
('CB006', '0254875133', 'triển chính hi', 'lấy thông tin', '123', 0, NULL, 'chinhhi7820.bs@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `hosohienmau`
--

CREATE TABLE `hosohienmau` (
  `MSHSHM` int(10) NOT NULL,
  `LoaiMau` char(4) CHARACTER SET utf8 DEFAULT NULL,
  `thetichmauML` int(10) DEFAULT NULL,
  `ngaydkONLM` date DEFAULT NULL,
  `tungHM` tinyint(1) DEFAULT NULL,
  `id_NHM` char(10) CHARACTER SET utf8 DEFAULT NULL,
  `cacbenh` tinyint(1) DEFAULT NULL,
  `benhkhac` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `sotret12` tinyint(1) DEFAULT NULL,
  `vacxin12` tinyint(1) DEFAULT NULL,
  `vacxincuthe12` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `truyenmau` tinyint(1) DEFAULT NULL,
  `sutcan6` tinyint(1) DEFAULT NULL,
  `noihach6` tinyint(1) DEFAULT NULL,
  `chuarang6` tinyint(1) DEFAULT NULL,
  `xamhinh6` tinyint(1) DEFAULT NULL,
  `xamhinhcuthe6` varchar(22) CHARACTER SET utf8 DEFAULT NULL,
  `matuy6` tinyint(1) DEFAULT NULL,
  `qhHIV6` tinyint(1) DEFAULT NULL,
  `qhcunggioi6` tinyint(1) DEFAULT NULL,
  `tiemtietnieu1` tinyint(1) DEFAULT NULL,
  `tiemtietnieukhac1` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `vacxin1` tinyint(1) DEFAULT NULL,
  `loaivacxin1` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `luuhanh` tinyint(1) DEFAULT NULL,
  `cum7` tinyint(1) DEFAULT NULL,
  `dungthuoc7` tinyint(1) DEFAULT NULL,
  `tiemvacxin7` tinyint(1) DEFAULT NULL,
  `loaivacxin7` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `phunu1` tinyint(1) DEFAULT NULL,
  `phunu2` tinyint(1) DEFAULT NULL,
  `xntbHIV` tinyint(1) DEFAULT NULL,
  `cannangKG` int(11) DEFAULT NULL,
  `HAmmHg` int(11) DEFAULT NULL,
  `mach` int(11) DEFAULT NULL,
  `HA1mmHg` int(11) DEFAULT NULL,
  `mach1` int(11) DEFAULT NULL,
  `giodo1` int(11) DEFAULT NULL,
  `giodo2` int(11) DEFAULT NULL,
  `mach2` int(11) DEFAULT NULL,
  `HA2mmHg` int(11) DEFAULT NULL,
  `ggl` int(11) DEFAULT NULL,
  `viemB` int(11) DEFAULT NULL,
  `xutri` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `lydohoan` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `phanung` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `KETLUAN` tinyint(1) DEFAULT NULL,
  `nhietdoC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hosohienmau`
--

INSERT INTO `hosohienmau` (`MSHSHM`, `LoaiMau`, `thetichmauML`, `ngaydkONLM`, `tungHM`, `id_NHM`, `cacbenh`, `benhkhac`, `sotret12`, `vacxin12`, `vacxincuthe12`, `truyenmau`, `sutcan6`, `noihach6`, `chuarang6`, `xamhinh6`, `xamhinhcuthe6`, `matuy6`, `qhHIV6`, `qhcunggioi6`, `tiemtietnieu1`, `tiemtietnieukhac1`, `vacxin1`, `loaivacxin1`, `luuhanh`, `cum7`, `dungthuoc7`, `tiemvacxin7`, `loaivacxin7`, `phunu1`, `phunu2`, `xntbHIV`, `cannangKG`, `HAmmHg`, `mach`, `HA1mmHg`, `mach1`, `giodo1`, `giodo2`, `mach2`, `HA2mmHg`, `ggl`, `viemB`, `xutri`, `lydohoan`, `phanung`, `KETLUAN`, `nhietdoC`) VALUES
(1, 'A', 250, '2021-06-02', 0, 'HM-0000001', 0, NULL, 0, 0, NULL, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, NULL, 0, NULL, 0, 0, 0, 1, NULL, 0, 0, 1, 43, 120, 80, 120, 120, 80, 80, 80, 120, NULL, NULL, NULL, NULL, 'ninh thuong', 1, 36),
(2, 'AB', 350, '2021-06-09', 1, 'HM-0000002', 0, NULL, 0, 0, NULL, 0, 0, 0, 1, 1, 'tay phai', 0, 0, 0, 0, NULL, 0, NULL, 0, 0, 1, 0, NULL, 0, 0, 1, 43, 120, 80, 120, 120, 80, 80, 80, 120, NULL, NULL, NULL, NULL, 'binh thuong', 1, 36),
(3, 'AB', 350, '2021-07-09', 1, 'HM-0000002', 0, NULL, 0, 0, NULL, 0, 0, 0, 1, 1, 'tay phai', 0, 0, 0, 0, NULL, 0, NULL, 0, 0, 1, 0, NULL, 0, 0, 1, 43, 120, 80, 120, 120, 80, 80, 80, 120, NULL, NULL, NULL, NULL, 'binh thuong', 1, 36),
(4, 'AB', 250, '2021-06-29', 1, 'HM-0000002', 0, NULL, 0, 0, NULL, 0, 0, 0, 1, 1, 'tay phai', 0, 0, 0, 0, NULL, 0, NULL, 0, 0, 1, 0, NULL, 0, 0, 1, 43, 120, 80, 120, 120, 80, 80, 80, 120, NULL, NULL, NULL, NULL, 'binh thuong', 1, 36),
(5, 'B', 350, '2021-06-29', 0, 'HM-0000004', 0, NULL, 0, 0, NULL, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, NULL, 0, NULL, 0, 0, 0, 0, NULL, 0, 0, 1, 43, 80, 120, 80, 120, 120, 120, 120, 120, NULL, NULL, 'hen ngay khac', 'huyet ap len cao', 'tim dap nhanh', 0, 36),
(6, 'A', 250, '2021-06-05', 1, 'HM-0000003', 0, NULL, 0, 0, NULL, 0, 0, 0, 1, 1, 'tay phai', 0, 0, 0, 0, NULL, 0, NULL, 0, 0, 1, 0, NULL, 0, 0, 1, 43, 120, 80, 120, 120, 80, 80, 80, 120, NULL, NULL, NULL, NULL, NULL, 1, 36),
(7, 'A', 350, '2021-06-29', 1, 'HM-0000005', 0, NULL, 0, 0, NULL, 0, 0, 0, 1, 1, 'tay phai', 0, 0, 0, 0, NULL, 0, NULL, 0, 0, NULL, 0, NULL, 0, 0, 1, 43, 120, 80, 120, 120, 80, 80, 80, 120, NULL, NULL, NULL, NULL, 'binh thuong', 1, 36),
(16, NULL, NULL, '2021-07-01', 0, 'HM-0000001', 1, '', 0, 0, '', 1, 0, 0, 0, 1, '', 1, 1, 1, 0, '', 1, '', 0, 0, 0, 1, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, '2021-07-01', 0, 'HM-0000001', 1, '', 0, 0, '', 1, 0, 0, 0, 1, '', 1, 1, 1, 0, '', 1, '', 0, 0, 0, 1, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, NULL, NULL, '2021-07-01', 0, 'HN-0000010', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, NULL, NULL, '2021-07-02', 1, 'HM-0000001', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, NULL, NULL, '2021-07-02', 0, 'HN-0000013', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, NULL, NULL, '2021-07-18', 1, 'HM-0000001', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, NULL, NULL, '2021-07-28', 1, 'HM-0000001', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, NULL, NULL, '2021-07-30', 1, 'HM-0000003', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, NULL, NULL, '2021-07-30', 1, 'HM-0000003', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, NULL, NULL, '2021-07-30', 1, 'HM-0000001', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, NULL, NULL, '2021-07-30', 1, 'HM-0000001', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, NULL, NULL, '2021-07-30', 1, 'HM-0000001', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, NULL, NULL, '2021-07-30', 1, 'HM-0000001', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, NULL, NULL, '2021-07-30', 1, 'HM-0000001', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, NULL, NULL, '2021-07-30', 1, 'HM-0000001', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, NULL, NULL, '2021-07-30', 1, 'HM-0000001', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, NULL, NULL, '2021-07-30', 1, 'HM-0000001', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, NULL, NULL, '2021-07-30', 1, 'HM-0000001', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, NULL, NULL, '2021-07-30', 1, 'HM-0000001', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, NULL, NULL, '2021-07-30', 1, 'HM-0000001', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, NULL, NULL, '2021-07-30', 1, 'HM-0000001', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, NULL, NULL, '2021-07-30', 1, 'HM-0000001', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, NULL, NULL, '2021-07-30', 1, 'HM-0000001', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, NULL, NULL, '2021-07-30', 0, 'HN-0000019', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, NULL, NULL, '2021-07-30', 0, 'HN-0000019', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, NULL, NULL, '2021-07-30', 0, 'HN-0000021', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, NULL, NULL, '2021-07-30', 0, 'HN-0000021', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, NULL, NULL, '2021-07-30', 0, 'HN-0000021', 0, '', 0, 0, '', 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nguoihienmau`
--

CREATE TABLE `nguoihienmau` (
  `MSNHM` char(10) CHARACTER SET utf8 NOT NULL,
  `CCCD` char(11) CHARACTER SET utf8 DEFAULT NULL,
  `id_CBYT` char(10) CHARACTER SET utf8 DEFAULT NULL,
  `HOTEN` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `NGAYSINH` date DEFAULT NULL,
  `DIACHI` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `GIOITINH` tinyint(1) DEFAULT NULL,
  `NGHENGHIEP` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `EMAIL` char(50) CHARACTER SET utf8 DEFAULT NULL,
  `SODT` char(10) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `password` char(20) CHARACTER SET utf8 DEFAULT NULL,
  `trangthai` tinyint(1) DEFAULT NULL,
  `loaimau` char(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `benhnen` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoihienmau`
--

INSERT INTO `nguoihienmau` (`MSNHM`, `CCCD`, `id_CBYT`, `HOTEN`, `NGAYSINH`, `DIACHI`, `GIOITINH`, `NGHENGHIEP`, `EMAIL`, `SODT`, `password`, `trangthai`, `loaimau`, `benhnen`) VALUES
('HM-0000001', '12345678901', NULL, 'nguyễn thị lan anh', '1996-08-13', 'Số 3 An Nhơn, P.17, Gò Vấp', 0, 'giáo viên', 'trinhthanhlong999@gmail.com', '0903384376', '456', 1, NULL, NULL),
('HM-0000002', '88888888888', NULL, 'trần văn bê', '1999-08-06', 'Chung Cư Centana Thủ Thiêm 36 Mai Chí Thọ, P.An Phú, Quận 2', 1, 'giáo sư', 'trinhthanhlong999@gmail.com', '0349665823', '999', 1, NULL, NULL),
('HM-0000003', '12354678546', NULL, 'lê thị ngọc ánh', '1997-08-22', ' 202 Nguyễn Văn Khối, P.9, Gò Vấp', 1, 'sinh viên', 'trinhthanhlong999@gmail.com', '0947991488', '789', 1, NULL, NULL),
('HM-0000004', '66677788899', NULL, 'trần văn an', '1978-08-22', '2A Nguyễn Văn Ngọc, P. Tân Thành, Tân Phú', 0, 'công nhân', 'trinhthanhlong999@gmail.com', '0909307434', '123', 1, NULL, NULL),
('HM-0000005', '67635467888', NULL, 'Nguyễn Văn Toàn', '1987-08-22', '81B Trần Bình Trọng, Phường 1, Quận 5', 0, 'giáo viên', 'trinhthanhlong999@gmail.com', '0984059995', '123', 1, NULL, NULL),
('HN-0000006', '12345678910', 'CB001', 'trần thị lan', '1999-07-08', '02 Bát Nàn, P.Thạnh Mỹ Lợi, Quận 2', 1, 'nội trợ', 'trinhthanhlong999@gmail.com', '0563334567', '123', 1, NULL, NULL),
('HN-0000007', '12345678999', 'CB001', 'hạ thiên', '1993-07-07', '81B Trần Bình Trọng, Phường 1, Quận 5', 1, 'công nhân', 'trinhthanhlong999@gmail.com', '0984059995', '123', 1, NULL, NULL),
('HN-0000008', '99988877744', 'CB001', 'mạc quang sơn', '1996-07-07', '145/6 Lê Thị Hoa, P. Bình Chiểu, Quận Thủ Đức', 1, 'sinh viên', 'trinhthanhlong999@gmail.com', '0899544377', '123', 1, NULL, NULL),
('HN-0000009', '11122233344', 'CB001', 'kiến nhất', '1995-07-21', 'MÌ CAY HACHI - Đ/c: 643 Xô Viết Nghệ Tĩnh, P.26, Bình Thạnh', 1, 'sinh viên', 'trinhthanhlong999@gmail.com', '0779030078', '123', 1, NULL, NULL),
('HN-0000010', '11155599977', 'CB001', 'triển chính hi', '1999-07-15', 'Đường số 2, P. Hiệp Bình Chánh, Thủ Đức ', 1, 'sinh viên', 'papy449@yahoo.com.vn', '0961249841', '123', 1, NULL, NULL),
('HN-0000011', '44455566696', 'CB001', 'hạ hầu xuyên', '1998-07-06', '183 Song Hành, P. Tân Hưng Thuận, Quận 12', 0, 'sinh viên', 'trinhthanhlong999@gmail.com', '0906506720', '123', 1, NULL, NULL),
('HN-0000012', '55522212366', NULL, 'vân thúc', '1997-07-06', '7/89 Thành Thái, P.14, Quận 10 ', 1, 'nhân viên bán hàng', 'trinhthanhlong999@gmail.com', '0909288786', '123', 1, NULL, NULL),
('HN-0000013', '11144477712', NULL, 'Quế Ngọc Hải', '1990-07-13', 'Đ/c: 90 Vườn Lài, P. Tân Thạnh, Tân Phú', 1, 'phi công', 'trinhthanhlong999@gmail.com', '0902893609', '123', 1, NULL, NULL),
('HN-0000014', '01234588811', NULL, 'Nguyễn Thành Chung', '1999-07-01', '18 Trần Hưng Đạo, Phường Cô Giang, Q1, TPHCM', 0, 'nghệ sĩ', 'trinhthanhlong999@gmail.com', '23456799', '123', 1, NULL, NULL),
('HN-0000015', '01234588876', NULL, 'Vũ Văn Thanh', '1999-07-01', '52 Mạc Đĩnh Chi, phường Đakao, Quận 1, TP.HCM', 0, 'bán hàng', 'trinhthanhlong999@gmail.com', '23456799', '123', 1, NULL, NULL),
('HN-0000016', '01234588878', NULL, 'Lương Xuân Trường', '1999-07-01', '17a Ngô Văn Năm, Bến Nghé, quận 1, TP.HCM', 0, 'phụ bếp', 'trinhthanhlong999@gmail.com', '23456799', '123', 1, NULL, NULL),
('HN-0000017', '01234588879', NULL, 'Nguyễn Tuấn Anh', '1999-07-01', '449 Lê Quang Ðịnh, quận Bình Thạnh', 0, 'cơ trưởng', 'trinhthanhlong999@gmail.com', '23456799', '123', 1, NULL, NULL),
('HN-0000018', '01234588870', NULL, 'Nguyễn Hoàng Đức', '1999-07-01', ' 55/19 Vạn Kiếp, phường 3, quận Bình Thạnh', 0, 'công nhân', 'trinhthanhlong999@gmail.com', '23456799', '123', 1, NULL, NULL),
('HN-0000019', '01234588877', NULL, 'la la land', '1998-01-14', '376/24 bình đông', 0, 'gv', 'trinhthanhlong999@gmail.com', '23456799', '123', 1, NULL, NULL),
('HN-0000020', '01234588877', NULL, 'nguyen thi lan anh', '1996-01-30', '376/24', 0, 'phụ bán', 'trinhthanhlong999@gmail.com', '23456799', '123', 1, NULL, NULL),
('HN-0000021', '01234588877', NULL, 'lalaland lanh allalal', '1995-02-07', '376/24', 0, 'phụ bán', 'trinhthanhlong999@gmail.com', '23456799', '123', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thongtinphanhoi`
--

CREATE TABLE `thongtinphanhoi` (
  `id_NHM` char(10) CHARACTER SET utf8 DEFAULT NULL,
  `id_CBYT` char(10) CHARACTER SET utf8 DEFAULT NULL,
  `NOIDUNG` varchar(100) CHARACTER SET utf8 NOT NULL,
  `YKIEN` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `NGAYPH` date DEFAULT NULL,
  `STT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thongtinphanhoi`
--

INSERT INTO `thongtinphanhoi` (`id_NHM`, `id_CBYT`, `NOIDUNG`, `YKIEN`, `NGAYPH`, `STT`) VALUES
('HM-0000001', 'CB002', 'đợi chờ lâu', 'đã tiếp nhận thông tin', '2021-06-09', 1),
('HM-0000002', 'CB002', 'rất yêu thích', 'cảm ơn bạn đã chung tay hiến máu góp phần đẹp cho xã hội', '2021-06-06', 2),
('HM-0000003', 'CB002', 'tạm ổn', NULL, '2021-09-09', 3),
('HM-0000002', NULL, 'đợi chờ lâu', NULL, '2021-07-01', 18),
('HM-0000002', NULL, 'rất nhiệt tình', NULL, '2021-07-01', 19),
('HM-0000002', NULL, 'chung tay vượt qua covid', NULL, '2021-07-01', 20),
('HM-0000002', NULL, 'sẽ thực hiện chỉ thị 16', NULL, '2021-07-01', 21),
('HM-0000002', NULL, 'Hôm nay ngày một tháng ba/ Cả nhà vẫn khỏe đúng hông cả nhà', NULL, '2021-07-01', 22),
('HM-0000001', NULL, 'Nhập môn phòng tránh cô na', NULL, '2021-07-02', 23),
('HM-0000001', NULL, 'khẩu trang bạn nhớ đeo vào', NULL, '2021-07-09', 34),
('HM-0000003', NULL, 'đầy lùi covid', NULL, '2021-07-10', 35),
('HM-0000003', NULL, 'vào rửa tay ra lớp hiểu bài', NULL, '2021-07-10', 36),
('HM-0000003', NULL, 'Cô vid ra đây, ta không sợ\n\nRửa tay đầy đủ, không thờ ơ', NULL, '2021-07-10', 37),
('HM-0000003', NULL, 'Ra đường khẩu trang, tránh tụ tập\n\nNhà nhà không bệnh, xã hội vui', NULL, '2021-07-10', 38);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canboyte`
--
ALTER TABLE `canboyte`
  ADD PRIMARY KEY (`MSCBYT`),
  ADD KEY `CCCD` (`CCCD`);

--
-- Indexes for table `hosohienmau`
--
ALTER TABLE `hosohienmau`
  ADD PRIMARY KEY (`MSHSHM`),
  ADD KEY `id_NHM` (`id_NHM`);

--
-- Indexes for table `nguoihienmau`
--
ALTER TABLE `nguoihienmau`
  ADD PRIMARY KEY (`MSNHM`),
  ADD KEY `CCCD` (`CCCD`),
  ADD KEY `id_CBYT` (`id_CBYT`);

--
-- Indexes for table `thongtinphanhoi`
--
ALTER TABLE `thongtinphanhoi`
  ADD PRIMARY KEY (`STT`),
  ADD KEY `id_NHM` (`id_NHM`,`id_CBYT`),
  ADD KEY `id_CBYT` (`id_CBYT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hosohienmau`
--
ALTER TABLE `hosohienmau`
  MODIFY `MSHSHM` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `thongtinphanhoi`
--
ALTER TABLE `thongtinphanhoi`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hosohienmau`
--
ALTER TABLE `hosohienmau`
  ADD CONSTRAINT `hosohienmau_ibfk_1` FOREIGN KEY (`id_NHM`) REFERENCES `nguoihienmau` (`MSNHM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nguoihienmau`
--
ALTER TABLE `nguoihienmau`
  ADD CONSTRAINT `nguoihienmau_ibfk_1` FOREIGN KEY (`id_CBYT`) REFERENCES `canboyte` (`MSCBYT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thongtinphanhoi`
--
ALTER TABLE `thongtinphanhoi`
  ADD CONSTRAINT `thongtinphanhoi_ibfk_1` FOREIGN KEY (`id_CBYT`) REFERENCES `canboyte` (`MSCBYT`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thongtinphanhoi_ibfk_2` FOREIGN KEY (`id_NHM`) REFERENCES `nguoihienmau` (`MSNHM`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
