-- phpMyAdmin SQL Dump
-- version 4.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2015 at 09:38 AM
-- Server version: 5.6.23
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


drop table if exists administrator;
drop table if exists employee;
drop table if exists btr;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
--
-- Database: `phms`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `AId` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--


-- --------------------------------------------------------

--
-- Table structure for table `btr`
--

CREATE TABLE IF NOT EXISTS `btr` (
  `BId` int(11) NOT NULL,
  `EmId` text NOT NULL,
  `dateConducted` date NOT NULL,
  `annual` text NOT NULL,
  `T1` double NOT NULL,
  `T2` double NOT NULL,
  `T3` double NOT NULL,
  `T4` double NOT NULL,
  `T5` double NOT NULL,
  `T6` double NOT NULL,
  `T7` double NOT NULL,
  `T8` double NOT NULL,
  `T9` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `btr`
--

INSERT INTO `btr` (`BId`, `EmId`, `dateConducted`, `annual`, `T1`, `T2`, `T3`, `T4`, `T5`, `T6`, `T7`, `T8`, `T9`) VALUES
(17, '90-60005-2', '2015-04-05', '2015', 86.2, 7.16, 170, 158, 108.9, 29.5, 1.21, 0, 67.2),
(18, '90-60005-2', '2013-03-03', '2013', 80.5, 9.18, 152, 199, 87.2, 20.8, 0.95, 0, 65.8),
(19, '90-60005-2', '2012-04-18', '2012', 79, 8.88, 157, 200, 92, 10, 1.16, 0, 56.4),
(20, '90-60005-2', '2011-03-10', '2011', 70, 8.96, 149, 164, 91.2, 21.7, 1.07, 0, 0),
(21, '94-60009-0', '2015-04-14', '2015', 87.6, 6.59, 174, 131, 114.6, 33.2, 1.05, 0, 60.6),
(22, '94-60009-0', '2011-03-09', '2011', 94.9, 7.98, 218, 109, 171.2, 21.6, 0.921, 0, 0),
(23, '94-60009-0', '2012-04-18', '2012', 77, 8.27, 155, 120, 89.7, 41.3, 1.07, 0, 78.1),
(24, '91-60071-4', '2015-05-13', '2015', 111, 3.91, 132, 225, 62, 13.1, 0.95, 0, 26.2),
(25, '91-60071-4', '2014-05-12', '2014', 98.4, 4.32, 149, 198, 84.4, 19.4, 0.984, 0, 62.5),
(26, '91-60071-4', '2012-06-19', '2012', 87, 4.03, 147, 147, 92.6, 15.5, 0.876, 0, 74.5),
(27, '91-60071-4', '2011-03-15', '2011', 90, 3.74, 147, 167, 88.6, 18, 0.891, 0, 0),
(28, '76-60207-7', '2015-04-11', '2015', 194, 11.1, 155, 210, 87.1, 25.9, 1.47, 0, 23.1),
(29, '76-60207-7', '2014-04-22', '2014', 263, 10.2, 171, 190, 106.2, 26.8, 1.6, 0, 24),
(30, '76-60207-7', '2012-04-19', '2012', 139, 10.1, 146, 166, 82.1, 30.7, 1.45, 0, 8.84),
(31, '77-60184-8', '2015-05-12', '2015', 82, 8.06, 102, 138, 49.4, 14.8, 1.18, 0, 42.8),
(32, '77-60184-8', '2014-05-13', '2014', 102, 7.36, 154, 128, 100.6, 27.8, 0.978, 0, 26.9),
(33, '77-60184-8', '2013-03-25', '2013', 102, 6.8, 150, 70, 110.9, 25.1, 1.08, 0, 21.1),
(34, '77-60184-8', '2012-04-17', '2012', 87, 6.06, 153, 184, 85.3, 30.9, 0.927, 0, 18.1),
(35, '77-60184-8', '2011-03-11', '2011', 80, 6.57, 194, 146, 139.6, 25.2, 0.849, 0, 0),
(36, '81-60035-0', '2015-05-20', '2015', 86.3, 6.67, 202, 329, 111.2, 20.6, 0.628, 0, 34.7),
(37, '81-60035-0', '2014-05-21', '2014', 80.9, 9.08, 261, 491, 156, 21.6, 0.853, 0, 90.6),
(38, '81-60035-0', '2013-03-22', '2013', 116, 6.68, 207, 385, 105, 19.8, 0.792, 0, 38),
(39, '81-60035-0', '2012-04-27', '2012', 80, 6.73, 194, 214, 125.4, 25.8, 0.698, 0, 21.4),
(40, '81-60035-0', '2011-04-04', '2011', 86, 6.14, 201, 368, 108.4, 21, 0.684, 0, 0),
(41, '76-60223-9', '2015-05-12', '2015', 101, 6.93, 163, 70, 117.4, 31.6, 0.865, 0, 15.5),
(42, '76-60223-9', '2014-05-22', '2014', 107, 15, 148, 152, 86.9, 30.7, 0.77, 0, 10.8),
(43, '76-60223-9', '2012-04-17', '2012', 89, 7.06, 172, 106, 113, 37.8, 0.843, 0, 17.5),
(44, '76-60223-9', '2011-03-11', '2011', 85, 7.29, 157, 132, 105.6, 24.3, 0.787, 0, 0),
(45, '77-60067-1', '2012-04-20', '2012', 256, 9.89, 204, 112, 154.3, 27.3, 1.06, 0, 14.3),
(46, '94-60009-0', '2013-05-13', '2013', 118, 7.38, 164, 165, 106, 20.4, 1.01, 0, 168),
(47, '76-60207-7', '2011-03-08', '2011', 132, 9.98, 109, 104, 63.2, 17.2, 1.2, 0, 0),
(48, '76-60223-9', '2013-03-22', '2013', 111, 6.54, 183, 156, 116.6, 35.2, 0.794, 0, 21.6),
(49, '76-60032-5', '2015-05-14', '2015', 99.3, 4.61, 117, 70, 75.5, 27.5, 0.787, 0, 19.8),
(50, '76-60032-5', '2014-05-14', '2014', 102, 5.06, 100, 134, 47.1, 26.1, 0.618, 0, 52.9),
(51, '76-60032-5', '2013-03-25', '2013', 98.1, 5.08, 116, 124, 66.2, 20.9, 0.825, 0, 24.4),
(52, '90-60044-3', '2015-05-14', '2015', 92.4, 7.53, 212, 85, 149, 46, 0.668, 0, 7.39),
(53, '90-60044-3', '2014-05-14', '2014', 83.4, 7.02, 198, 138, 133.7, 36.7, 0.568, 0, 15.8),
(54, '90-60044-3', '2013-03-15', '2013', 82.7, 7.53, 213, 77.5, 152.3, 45.2, 0.78, 0, 14.3),
(55, '90-60044-3', '2012-04-24', '2012', 90, 5.71, 200, 107, 136.4, 42.2, 0.608, 0, 14.3),
(56, '90-60044-3', '2011-03-16', '2011', 87, 5.64, 210, 294, 113.7, 37.5, 0.629, 0, 0),
(57, '76-60032-5', '2012-04-17', '2012', 79, 5.58, 102, 189, 39.2, 23.4, 0.796, 0, 28.4),
(58, '76-60032-5', '2011-03-11', '2011', 84, 5.52, 112, 161, 51.2, 28.6, 0.635, 0, 0),
(59, '70-60002-1', '2015-05-19', '2015', 93.7, 8.78, 231, 78.6, 179.78, 35.5, 1.01, 0, 41.7),
(60, '70-60002-1', '2014-05-12', '2014', 101, 8.75, 158, 141, 104.8, 21.7, 0.767, 0, 23.1),
(61, '70-60002-1', '2012-04-18', '2012', 89, 9.23, 158, 223, 88.4, 20.4, 0.926, 0, 14.7),
(62, '70-60002-1', '2011-03-08', '2011', 79.3, 7.18, 158, 171, 98.8, 12.3, 0.63, 0, 0),
(63, '70-60002-1', '2013-05-13', '2013', 87.1, 7.79, 163, 150, 108, 20.8, 0.922, 0, 17.8),
(64, '76-60011-9', '2015-05-12', '2015', 71.7, 8.31, 207, 278, 113.8, 37.6, 0.954, 0, 27.1),
(65, '83-60014-4', '2015-05-13', '2015', 94.4, 6.06, 259, 156, 199.6, 28.2, 0.958, 0, 36.7),
(66, '83-60014-4', '2013-03-13', '2013', 92.6, 5.32, 237, 99, 185.9, 31.3, 0.939, 0, 30.2),
(67, '83-60014-4', '2014-05-21', '2014', 76.2, 6.69, 330, 134, 252.7, 50.5, 1.09, 0, 39.5),
(68, '83-60014-4', '2012-04-19', '2012', 78, 5.62, 202, 123, 136.4, 41, 1.09, 0, 23.9),
(69, '83-60014-4', '2011-03-16', '2011', 80, 4.96, 199, 107, 141, 36.6, 1.04, 0, 0),
(70, '77-60018-3', '2015-05-14', '2015', 142, 7.57, 251, 82.5, 171.4, 63.1, 0.938, 0, 30.9),
(71, '77-60018-3', '2014-05-14', '2014', 124, 9.62, 225, 169, 162.3, 28.9, 1.01, 0, 18.8),
(72, '77-60018-3', '2013-03-25', '2013', 155, 9.53, 267, 70, 210.6, 42.4, 1.06, 0, 25.7),
(73, '77-60018-3', '2012-04-17', '2012', 78, 9.23, 235, 113, 160.7, 51.7, 1.01, 0, 23.5),
(74, '77-60018-3', '2011-03-11', '2011', 77, 8.51, 286, 83.5, 225.6, 43.7, 0.863, 0, 0),
(75, '72-6003-7', '2015-05-13', '2015', 95.9, 7.49, 181, 70, 133.2, 33.8, 1.21, 0, 48.2),
(76, '72-6003-7', '2011-03-09', '2011', 90, 11.4, 188, 133, 134.4, 27, 1.21, 0, 0),
(77, '72-6003-7', '2013-03-22', '2013', 93.8, 8.58, 129, 118, 76.5, 28.9, 1.32, 0, 23.8),
(78, '90-60077-0', '2015-05-14', '2015', 83.4, 7.95, 149, 70, 97.6, 37.4, 0.954, 0, 24.7),
(79, '90-60077-0', '2014-05-14', '2014', 71.1, 8.51, 150, 123, 100.4, 20, 0.921, 0, 19.8),
(80, '90-60077-0', '2012-04-26', '2012', 79, 9.46, 155, 99.2, 110.16, 22.7, 0.859, 0, 31.7),
(81, '90-60077-0', '2011-04-04', '2011', 88, 8.76, 145, 70, 100.1, 30.9, 0.917, 0, 0),
(82, '90-60077-0', '2013-03-22', '2013', 103, 9.63, 136, 85.4, 87.62, 31.3, 0.982, 0, 18.8),
(83, '89-60032-4', '2015-05-13', '2015', 95.3, 7.77, 224, 198, 156.8, 27.6, 0.783, 0, 28.3),
(84, '89-60032-4', '2014-05-14', '2014', 77.3, 5.96, 257, 130, 204.6, 26.4, 0.729, 0, 43.3),
(85, '89-60032-4', '2013-03-14', '2013', 76.3, 7.42, 238, 95.8, 184.64, 34.2, 0.893, 0, 25.6),
(87, '89-60032-4', '2012-04-25', '2012', 67, 9.12, 212, 143, 155.9, 27.5, 0.901, 0, 54.5),
(88, '89-60032-4', '2011-04-04', '2011', 64, 7.74, 231, 150, 171.2, 29.8, 0, 0, 0),
(89, '75-60017-8', '2015-05-14', '2015', 113, 8.38, 183, 115, 135, 22, 0.986, 0, 63),
(90, '75-60017-8', '2013-03-19', '2013', 97.5, 7.34, 143, 75, 103, 17.6, 0.96, 0, 34.1),
(91, '75-60017-8', '2012-04-25', '2012', 84, 9.37, 145, 86.3, 96.24, 34.5, 0.956, 0, 50.4),
(92, '75-60017-8', '2011-03-17', '2011', 88, 8.06, 154, 131, 102.8, 19.6, 1.03, 0, 0),
(93, '90-60070-2', '2015-05-11', '2015', 179, 6.25, 179, 207, 109.6, 28, 0.924, 0, 36.5),
(94, '90-60070-2', '2014-05-14', '2014', 252, 6.11, 206, 127, 148, 32.6, 0.912, 0, 47.4),
(95, '90-60070-2', '2013-03-14', '2013', 217, 5.17, 184, 124, 134.2, 21.8, 1.02, 0, 29.4),
(96, '90-60070-2', '2012-04-19', '2012', 165, 5.93, 168, 219, 99.2, 21.4, 0.954, 0, 81.8),
(97, '90-60070-2', '2011-03-08', '2011', 155, 3.73, 174, 81.9, 135.62, 23.3, 0.669, 0, 0),
(98, '93-60035-5', '2015-05-14', '2015', 78, 7.11, 242, 112, 179.3, 40.3, 0.901, 0, 31),
(99, '93-60035-5', '2014-05-14', '2014', 89.4, 7.06, 217, 136, 160.3, 29.5, 0.772, 0, 19.8),
(100, '93-60035-5', '2012-04-17', '2012', 74, 7.36, 199, 158, 142.4, 24.7, 0.975, 0, 58.8),
(101, '93-60035-5', '2011-03-11', '2011', 87, 6.55, 220, 110, 173, 15.7, 0.946, 0, 0),
(102, '93-60035-5', '2013-03-22', '2013', 106, 7.27, 192, 239, 119.2, 24, 0.855, 0, 29.5),
(103, '77-60004-3', '2015-05-11', '2015', 124, 9.34, 127, 70, 85.4, 27.6, 0.848, 0, 51.6),
(104, '77-60004-3', '2014-05-12', '2014', 106, 9.03, 109, 128, 48.6, 34.8, 0.87, 0, 30.2),
(105, '77-60004-3', '2012-04-20', '2012', 108, 8.78, 197, 146, 134.8, 33, 0.792, 0, 23.5),
(106, '77-60004-3', '2011-03-09', '2011', 129, 8.21, 184, 107, 137.6, 20.8, 0.7, 0, 0),
(107, '77-60004-3', '2013-03-15', '2013', 151, 7.72, 193, 111, 145.8, 23.8, 0.864, 0, 38.6),
(108, '91-60056-0', '2015-05-13', '2015', 97.8, 9.77, 186, 193, 117.2, 30.2, 0.833, 0, 30.5),
(109, '91-60056-0', '2014-05-14', '2014', 87.6, 10.3, 178, 199, 113.2, 16.7, 0.736, 0, 43.3),
(110, '91-60056-0', '2013-03-15', '2013', 90.8, 10.3, 206, 171, 146.8, 17.6, 0.852, 0, 24.2),
(111, '91-60056-0', '2012-04-20', '2012', 82, 9.75, 178, 187, 114.2, 26.4, 0.816, 0, 22.7),
(112, '91-60056-0', '2011-03-09', '2011', 89.8, 10.2, 189, 296, 102.8, 27, 0.906, 0, 0),
(113, '12-65008-6', '2015-05-20', '2015', 90.4, 5.73, 178, 70, 133.6, 30.4, 0.5, 0, 10.6),
(114, '12-65008-6', '2014-05-21', '2014', 77.7, 5.83, 186, 139, 120.2, 38, 0.597, 0, 14.7),
(115, '12-65008-6', '2013-03-22', '2013', 86.5, 5.37, 178, 70, 129.1, 34.9, 0.576, 0, 9.2),
(116, '12-65007-8', '2014-05-22', '2014', 72.5, 8.12, 123, 138, 63, 32.4, 0.894, 0, 20.8),
(117, '12-65007-8', '2013-03-26', '2013', 87.5, 8.09, 186, 92.3, 142.54, 21.6, 0.961, 0, 18.6),
(118, '77-60182-1', '2015-05-14', '2015', 80, 6.67, 104, 155, 48, 22.3, 0.732, 0, 30.8),
(119, '77-60182-1', '2014-05-14', '2014', 87.5, 6.28, 117, 241, 43.8, 17.5, 0.627, 0, 56.3),
(120, '77-60182-1', '2013-03-25', '2013', 85.1, 11, 100, 82, 56.8, 18.1, 0.891, 0, 26),
(121, '77-60182-1', '2012-05-17', '2012', 65, 7.54, 125, 115, 77, 19.8, 0.701, 0, 38.1),
(122, '77-60182-1', '2011-03-11', '2011', 74, 7.84, 122, 85.6, 79.88, 15.5, 0.799, 0, 0),
(123, '13-65020-9', '2015-05-20', '2015', 109, 7.68, 197, 78.5, 155.1, 26.2, 0.862, 0, 23.2),
(124, '13-65020-9', '2014-05-22', '2014', 87.6, 6.21, 228, 167, 167.4, 33.2, 0.643, 0, 5.78);

-- --------------------------------------------------------

--
-- Table structure for table `employee`http://localhost/phpmyadmin/tbl_import.php?db=phms&table=employee&token=34aee952816bf9d4677ae699b1f88269
--

CREATE TABLE IF NOT EXISTS `employee` (
  `EmId` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `Fname` text NOT NULL,
  `Mname` text NOT NULL,
  `Lname` text NOT NULL,
  `position` text NOT NULL,
  `gender` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmId`, `username`, `password`, `Fname`, `Mname`, `Lname`, `position`, `gender`, `status` ) VALUES
('1', 'admin', 'npcadmin', '', '', '', '', '', ''),
('83-60014-4', '83-60014-4', 'acoba.123', 'Abraham', 'C.', 'Acoba', 'superintendent', 'M', 'Regular'),
('77-60067-1', '77-60067-1', 'agcopra.123', 'Rico, Sr.', 'A.', 'Agcopra', 'sr.electrician', 'M', 'Regular'),
('77-60184-8', '77-60184-8', 'alcover.123', 'Santiago', 'B.', 'Alcover', 'EO-C', 'M', 'Regular'),
('90-60005-2', '90-60005-2', 'alfeche.123', 'Ruel', 'B.', 'Alfeche', 'EO-C', 'M', 'Regular'),
('94-60009-0', '94-60009-0', 'alfeche.123', 'Wilfredo', 'A.', 'Alfeche', 'PE-B', 'M', 'Regular'),
('91-60071-4', '91-60071-4', 'alip.123', 'Abdulkhalik', 'O.', 'Alip', 'PE-C', 'M', 'Regular'),
('76-60207-7', '76-60207-7', 'ambito.123', 'Rogelio', 'A.', 'Ambito', 'EO-C', 'M', 'Regular'),
('76-60223-9', '76-60223-9', 'andaloc.123', 'Alfredo', 'Q.', 'Andaloc', 'SUPT./ACTG. PLT OM MGR.', 'M', 'Regular'),
('76-60032-5', '76-60032-5', 'barinque.123', 'Peddie', 'G.', 'Barinque', 'EO-D', 'M', 'Regular'),
('76-60011-9', '76-60011-9', 'bas.123', 'Edgar', 'N.', 'Bas', 'sr.electrician', 'M', 'Regular'),
('70-60002-1', '70-60002-1', 'besas.123', 'Francisco, Sr.', 'D.', 'Besas', 'EO-C', 'M', 'Regular'),
('94-55329-6', '94-55329-6', 'bliss.123', 'Alfonso', 'L.', 'Bliss', 'PE-B', 'M', 'Regular'),
('76-60013-9', '76-60013-9', 'Yap.123', 'Henry', 'B.', 'Yap', 'Electrician B', 'M', 'Regular'),
('92-60046-7', '92-60046-7', 'Budiongan.123', 'Julian, Jr.', 'G.', 'Budiongan', 'PE-C', 'M', 'Regular'),
('89-60032-4', '89-60032-4', 'Cabusas.123', 'Auxiliador', 'Y.', 'Cabusas', 'SR. TECHN', 'M', 'Regular'),
('90-60077-0', '90-60077-0', 'Caneos.123', 'Andres', 'P.', 'Caneos', 'MECHANIC C', 'M', 'Regular'),
('77-60018-3', '77-60018-3', 'Canares.123', 'Concordio', 'L.', 'Canares', 'EO-C', 'M', 'Regular'),
('75-60017-8', '75-60017-8', 'Cardines.123', 'Alfredo', 'J.', 'Cardines', 'SR. MECHANIC', 'M', 'Regular'),
('72-60003-7', '72-60003-7', 'Cata-al.123', 'Danilo', 'A.', 'Cata-al', 'ECO-B', 'M', 'Regular'),
('77-60043-4', '77-60043-4', 'Chan.123', 'Delinda', 'M.', 'Chan', 'SR FIN SPLST B', 'F', 'Regular'),
('77-60182-1', '77-60182-1', 'Coyoca.123', 'Carlito', 'V.', 'Coyoca', 'EO-C', 'M', 'Regular'),
('93-60035-5', '93-60035-5', 'David.123', 'Erick Antonio', 'D.', 'David', 'PE-B', 'M', 'Regular'),
('90-60070-2', '90-60070-2', 'Dela Rosa.123', 'Nazario', 'A.', 'Dela Rosa', 'EO-D', 'M', 'Regular'),
('77-60004-3', '77-60004-3', 'Destura.123', 'Romeo', 'A.', 'Destura', 'SUPERINTENDENT', 'M', 'Regular'),
('91-60056-0', '91-60056-0', 'Doctor.123', 'Henry', 'H.', 'Doctor', 'EO-C', 'M', 'Regular'),
('73-60094-4', '73-60094-4', 'Edrozo.123', 'Henry', 'A.', 'Edrozo', 'ECO-B', 'M', 'Regular'),
('82-60004-3', '82-60004-3', 'Encabo.123', 'Romeo', 'A.', 'Encabo', 'DIV MANAGER', 'M', 'Regular'),
('88-60021-5', '88-60021-5', 'Enriquez.123', 'Nelson', 'D.', 'Enriquez', 'PE-B(QA/SAFETY)', 'M', 'Regular'),
('78-60102-7', '78-60102-7', 'Evardone.123', 'Antonio', 'A.', 'Evardone', 'ECO-B', 'M', 'Regular'),
('90-60042-7', '90-60042-7', 'Fausto.123', 'Rey', 'R.', 'Fausto', 'MTLS.MGNT.SPECIALIST B', 'M', 'Regular'),
('82-60019-1', '82-60019-1', 'Garrido.123', 'Elizabeth', 'P.', 'Garrido', 'Div MANAGER', 'F', 'Regular'),
('92-60004-1', '92-60004-1', 'Gelacio.123', 'Juliet', 'G.', 'Gelacio', 'SR FIN SPLST B', 'F', 'Regular'),
('03-60005-0', '03-60005-0', 'Generalao.123', 'Katy', 'C.', 'Generalao', 'SR NURSE', 'F', 'Regular'),
('73-60126-6', '73-60126-6', 'Gillo.123', 'Ruperto', 'S.', 'Gillo', 'SR. ELECTRICIAN', 'M', 'Regular'),
('79-60029-6', '79-60029-6', 'Gimena.123', 'Yolando', 'J.', 'Gimena', 'SR SECU OFFICER A', 'M', 'Regular'),
('75-60098-4', '75-60098-4', 'Gloria.123', 'Floro, Jr.', 'C.', 'Gloria', 'EO-C', 'M', 'Regular'),
('79-60097-0', '79-60097-0', 'Hiceta.123', 'Henry', 'B.', 'Hiceta', 'DIV MANAGER', 'M', 'Regular'),
('90-60072-9', '90-60072-9', 'Hinaloc.123', 'Reynaldo', 'W.', 'Hinaloc', 'SR. ELECTRICIAN', 'M', 'Regular'),
('89-60003-0', '89-60003-0', 'Hoyohoy.123', 'Cerilo, Sr.', 'A.', 'Hoyohoy', 'SR. TECHN', 'M', 'Regular'),
('93-60073-4', '93-60073-4', 'Iban.123', 'Ralph', 'T.', 'Iban', 'PE-B', 'M', 'Regular'),
('86-60027-7', '86-60027-7', 'Jabay.123', 'Manuel', 'B.', 'Jabay', 'SUPERINTENDENT', 'M', 'Regular'),
('82-60049-3', '82-60049-3', 'Jacinto.123', 'Wanda', 'R.', 'Jacinto', 'SECTION CHIEF', 'F', 'Regular'),
('91-60126-5', '91-60126-5', 'Jamil.123', 'Dionila', 'M.', 'Jamil', 'SR ACCOUNTANT', 'F', 'Regular'),
('87-60001-7', '87-60001-7', 'Janolino.123', 'Jessica', 'G.', 'Janolino', 'SR. FIN ANALYST', 'F', 'Regular'),
('90-60035-4', '90-60035-4', 'Kho.123', 'Antonio', 'B.', 'Kho', 'EO-D', 'M', 'Regular'),
('86-60040-4', '86-60040-4', 'Kuan.123', 'Henry', 'R.', 'Kuan', 'PE-B', 'M', 'Regular'),
('76-60138-0', '76-60138-0', 'Lacar.123', 'Vicente', 'Q.', 'Lacar', 'PE-B(POLL/COMREL)', 'M', 'Regular'),
('76-60166-6', '76-60166-6', 'Lasmarias.123', 'Manuel', 'D.', 'Lasmarias', 'SUPERINTENDENT', 'M', 'Regular'),
('71-60013-0', '71-60013-0', 'Lebumfacil.123', 'Fluerdeliza', 'G.', 'Lebumfacil', 'SECTION CHIEF', 'F', 'Regular'),
('07-60004-6', '07-60004-6', 'Lemence.123', 'Rolando', 'S.', 'Lemence', 'PE-C', 'M', 'Regular'),
('77-60114-7', '77-60114-7', 'Mabala.123', 'Antonio', 'B.', 'Mabala', 'SUPERINTENDENT', 'M', 'Regular'),
('94-60026-0', '94-60026-0', 'Macalisang.123', 'Evan', 'D.', 'Macalisang', 'SR. ELECTRICIAN', 'M', 'Regular'),
('03-60010-6', '03-60010-6', 'Mamad.123', 'Abdulhakim', 'R.', 'Mamad', 'PRIN. ENGR. C', 'M', 'Regular'),
('91-60157-5', '91-60157-5', 'Mamauag.123', 'Robert', 'S.', 'Mamauag', 'MAINT.FRMAN', 'M', 'Regular'),
('03-65026-0', '03-65026-0', 'Manigque.123', 'Edzel', 'A.', 'Manigque', 'EQUIPT. OPERATOR D', 'M', 'Regular'),
('78-60051-9', '78-60051-9', 'Manuta.123', 'Manuel', 'A.', 'Manuta', 'SUPERINTENDENT', 'M', 'Regular'),
('77-60141-4', '77-60141-4', 'Mejias.123', 'Edmund', 'E.', 'Mejias', 'SR. MECHANIC', 'M', 'Regular'),
('75-60060-7', '75-60060-7', 'Moncay.123', 'Eduardo', 'E.', 'Moncay', 'PE-B(QA/SAFETY)', 'M', 'Regular'),
('86-60036-6', '86-60036-6', 'Morales.123', 'Gonzalo III', 'B.', 'Morales', 'SUPERINTENDENT', 'M', 'Regular'),
('90-60037-0', '90-60037-0', 'Moste.123', 'Cesar', 'B.', 'Moste', 'PROP.OFFICER A', 'M', 'Regular'),
('76-60154-2', '76-60154-2', 'Mulig.123', 'Arnulfo', 'D.', 'Mulig', 'ECO-B', 'M', 'Regular'),
('86-60078-1', '86-60078-1', 'Navarro.123', 'Emilio', 'B.', 'Navarro', 'PE-B', 'M', 'Regular'),
('75-60071-2', '75-60071-2', 'Obatay.123', 'Tomas, Sr.', 'B.', 'Obatay', 'SR. MECHANIC', 'M', 'Regular'),
('77-60064-7', '77-60064-7', 'ONG.123', 'Teresita', 'S.', 'ONG', 'HR SPECIALIST', 'F', 'Regular'),
('75-60090-9', '75-60090-9', 'Pagente.123', 'Claudio', 'S.', 'Pagente', 'EO-C', 'M', 'Regular'),
('82-60021-3', '82-60021-3', 'Panizales.123', 'Helen', 'Y.', 'Panizales', 'CASHIER C', 'F', 'Regular'),
('78-60002-0', '78-60002-0', 'Pates.123', 'Jose, JR.', 'S.', 'Pates', 'PLANT MANAGER', 'M', 'Regular'),
('78-60013-6', '78-60013-6', 'Pedrano.123', 'Nilo', 'C.', 'Pedrano', 'SR. WELDER', 'M', 'Regular'),
('03-65028-6', '03-65028-6', 'Perez.123', 'Percy, Jr.', 'T.', 'Perez', 'EQUIPT. OPERATOR D', 'M', 'Regular'),
('07-60010-0', '07-60010-0', 'Radia.123', 'Ameroden', 'C.', 'Radia', 'MECHANIC C', 'M', 'Regular'),
('75-60096-8', '75-60096-8', 'Ramo.123', 'Expedito', 'T.', 'Ramo', 'EO-C', 'M', 'Regular'),
('86-60076-5', '86-60076-5', 'Regino.123', 'Ronilo', 'P.', 'Regino', 'SUPERINTENDENT', 'M', 'Regular'),
('79-60036-9', '79-60036-9', 'Rublico.123', 'Marilyn', 'J.', 'Rublico', 'PROP.OFFICER A', 'F', 'Regular'),
('90-60071-0', '90-60071-0', 'Sailago.123', 'Mario', 'U.', 'Sailago', 'EO-D', 'M', 'Regular'),
('15-60001-2', '15-60001-2', 'Salomon.123', 'Dominique', 'O.', 'Salomon', 'SR. ELECTRICIAN', 'M', 'Regular'),
('72-60016-9', '72-60016-9', 'Saludo.123', 'Wilfredo', 'A.', 'Saludo', 'SR. MECHANIC', 'M', 'Regular'),
('75-60016-0', '75-60016-0', 'Simera.123', 'Lamberto, Jr.', 'R.', 'Simera', 'EO-D', 'M', 'Regular'),
('81-60008-2', '81-60008-2', 'Sinal.123', 'Dakulah', 'A.', 'Sinal', 'EO-C', 'M', 'Regular'),
('86-60102-8', '86-60102-8', 'Sorilla.123', 'Joel', 'T.', 'Sorilla', 'PE-B', 'M', 'Regular'),
('76-60004-0', '76-60004-0', 'Sumaya.123', 'Loreto', 'A.', 'Sumaya', 'EO-C', 'M', 'Regular'),
('94-05642-0', '94-05642-0', 'Tabuada.123', 'Edgar Raymund', 'P.', 'Tabuada', 'PE-C', 'M', 'Regular'),
('86-60098-6', '86-60098-6', 'Tadulan.123', 'Edwin', 'L.', 'Tadulan', 'SUPERINTENDENT', 'M', 'Regular'),
('89-60031-6', '89-60031-6', 'Talandron.123', 'Rodolfo', 'P.', 'Talandron', 'EO-D', 'M', 'Regular'),
('88-60074-6', '88-60074-6', 'Tumampil.123', 'James', 'D.', 'Tumampil', 'EO-D', 'M', 'Regular'),
('77-60014-0', '77-60014-0', 'Undag.123', 'Arsenio', 'P.', 'Undag', 'PE-B', 'M', 'Regular'),
('77-60014-0', '77-60014-0', 'Vega.123', 'Romualdo, Jr.', 'L.', 'Vega', 'SUPERINTENDENT', 'M', 'Regular'),
('89-60028-6', '89-60028-6', 'Yanez.123', 'Elmer', 'C.', 'Yañez', 'EO-D', 'M', 'Regular'),
('90-60041-9', '90-60041-9', 'Zabate.123', 'Macario', 'M.', 'Zabate', 'EO-D', 'M', 'Regular'),
('81-60035-0', '81-60035-0', 'Alag.123', 'Marietta', 'A.', 'Alag', 'CORP.BOOKKEEPER', 'F', 'Regular'),
('97-65188-4', '97-65188-4', 'Leyco.123', 'Raquel', 'B.', 'Leyco', 'SECRETARY D', 'F', 'Casual/JO'),
('89-60083-9', '89-60083-9', 'Perez.123', 'Lorna', 'L.', 'Perez', 'DATA C/E', 'F', 'Casual/JO'),
('76-60013-9', '76-60013-9', 'Yap.123', 'Henry', 'B.', 'Yap', 'Electrician B', 'M', 'Regular'),
('90-60044-3', '90-60044-3', 'Daño.123', 'Rolinette', 'R.', 'Daño', 'IS/IT SPECIALIST', 'F', 'Regular'),
('03-65035-0', '03-65035-0', 'Quinlantang.123', 'Edgar', 'R.', 'Quinlantang', 'Mechanic C', 'M', 'Regular'),
('08-65040-3', '08-65040-3', 'Sansona.123', 'Elvin', 'R.', 'Sansona', 'Sr. Envi. Mngt. Analyst (SEMA)', 'M', 'Casual/JO'),
('09-65028-8', '09-65028-8', 'Palermo.123', 'Ivy', 'O.', 'Palermo', 'Sr. Engineer', 'F', 'Casual/JO'),
('12-65007-8', '12-65007-8', 'burgos.123', 'Reynor', 'S.', 'Burgos', 'Draftsman', 'M', 'Casual/JO'),
('12-65008-6', '12-65008-6', 'Bantilan.123', 'Kathyline', 'P.', 'Bantilan', 'Data Controller / Encoder', 'F', 'Casual/JO'),
('13-65006-3', '13-65006-3', 'Sarol.123', 'Vincent', 'A.', 'Sarol', 'Data Controller / Encoder', 'M', 'Casual/JO'),
('13-65020-9', '13-65020-9', 'Ciudad.123', 'Mary Jane', 'G.', 'Ciudad', 'Data Controller / Encoder', 'F', 'Casual/JO'),
('14-65002-4', '14-65002-4', 'Suezo.123', 'Bren Anthony', 'M.', 'Suezo', 'Clerk Processor B', 'M', 'Casual/JO'),
('04-65136-7', '04-65136-7', 'Castillo.123', 'Franco', 'L.', 'Castillo', 'Clerk Processor A', 'M', 'Casual/JO'),
('12-65019-1', '12-65019-1', 'Tagaro.123', 'Girley Joy', 'R.', 'Tagaro', 'Clerk Processor A', 'F', 'Casual/JO'),
('13-65025-0', '13-65025-0', 'Macalisang.123', 'Arnold', 'A', 'Macalisang', 'Clerk Processor B', 'M', 'Casual/JO'),
('13-65026-8', '13-65026-8', 'Alfeche.123', 'Renante', 'C.', 'Alfeche', 'Clerk Processor B', 'M', 'Casual/JO'),
('73-60067-1', '73-60067-1', 'Alcazaren.123', 'Emilio, Jr.', 'A.', 'Alcazaren', 'PEB', 'M', 'Regular'),
('75-60103-4', '75-60103-4', 'Matias.123', 'Matias', 'F.', 'Busquit', 'Sr. Technician', 'M', 'Regular'),
('77-60202-0', '77-60202-0', 'Zosimo.123', 'Zosimo', 'V.', 'Clerigo', 'Superintendent', 'M', 'Regular'),
('90-60079-6', '90-60079-6', 'Geromo.123', 'Santiago', 'C.', 'Geromo', 'Sr. Welder', 'M', 'Regular'),
('07-60005-4', '07-60005-4', 'Lugatiman.123', 'Danilo', 'R.', 'Lugatiman', 'Sr. Mechanic', 'M', 'Regular'),
('77-60200-3', '77-60200-3', 'Madrid.123', 'Noe', 'L.', 'Madrid', 'Superintendent', 'M', 'Regular'),
('77-60034-5', '77-60034-5', 'Patalinghug.123', 'Ruperto', 'M.', 'Patalinghug', 'EO-D', 'M', 'Regular'),
('73-60103-7', '73-60103-7', 'Penpeña.123', 'Arnold', 'P.', 'Penpeña', 'MATL''S MGMT SPLST B', 'M', 'Regular'),
('76-60212-3', '76-60212-3', 'Samson.123', 'Francisco, Sr.', 'L.', 'Samson', 'Superintendent', 'M', 'Regular'),
('76-60072-4', '76-60072-4', 'Suezo.123', 'Antonio, Jr.', 'F.', 'Suezo', 'Plant Manager', 'M', 'Regular'),
('77-60015-9', '77-60015-9', 'Tompong.123', 'Luisito, Sr.', 'A.', 'Tompong', 'Sr. Technician', 'M', 'Regular'),
('88-60035-5', '88-60035-5', 'Agawin.123', 'Nilen', 'O.', 'Agawin', 'GSM Worker I', 'M','Casual/JO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`AId`);

--
-- Indexes for table `btr`
--
ALTER TABLE `btr`
  ADD PRIMARY KEY (`BId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `AId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `btr`
--
ALTER TABLE `btr`
  MODIFY `BId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=126;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
