-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 07:28 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prodental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `emailaddress` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `uniqueId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `emailaddress`, `password`, `uniqueId`) VALUES
(2, 'otuulaa@gmail.com', '4b40df605e3c6bf5cdec9f1e7faea7c0', 897745268);

-- --------------------------------------------------------

--
-- Table structure for table `ajilchid`
--

CREATE TABLE `ajilchid` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `rd` varchar(10) NOT NULL,
  `utas` int(8) DEFAULT NULL,
  `albanTushaal` varchar(50) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `uniqueId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ajilchid`
--

INSERT INTO `ajilchid` (`id`, `fname`, `rd`, `utas`, `albanTushaal`, `pass`, `uniqueId`) VALUES
(1, 'tuul', 'teaa0', 91932122, 'emch bas zahiral', '4b40df605e3c6bf5cdec9f1e7faea7c0', 1236921787),
(2, 'tuul111', 'teaa01', 919322, 'emch bas zahiral', '4b40df605e3c6bf5cdec9f1e7faea7c0', 242026316),
(3, 'test', 'asfsad', 123123, 'emch', '81dc9bdb52d04dc20036dbd8313ed055', 1181941008),
(4, 'test', 'asfsad', 123123, 'emch', '81dc9bdb52d04dc20036dbd8313ed055', 738340135),
(5, 'test', 'asfsad', 123123, 'emch', '81dc9bdb52d04dc20036dbd8313ed055', 1080770007),
(6, 'test', 'asfsad', 123123, 'emch', '81dc9bdb52d04dc20036dbd8313ed055', 1459779338);

-- --------------------------------------------------------

--
-- Table structure for table `setgegdel`
--

CREATE TABLE `setgegdel` (
  `id` int(11) NOT NULL,
  `UserId` varchar(25) NOT NULL,
  `setgegdel` varchar(255) NOT NULL,
  `crdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setgegdel`
--

INSERT INTO `setgegdel` (`id`, `UserId`, `setgegdel`, `crdate`) VALUES
(1, 'otuulaa', 'saihan emneleg шүү', '2021-05-25'),
(2, 'otuulaa', 'saihan amitan shuu neeren', '2021-05-25'),
(3, 'tuulaa', 'saihan amitan ymaa neeren', '2021-05-25'),
(5, 'otuulaa', '`', '2021-05-25'),
(6, 'otuulaa', 'saihan', '2021-05-25'),
(8, 'otuula', 'shalgalt', '2021-05-25'),
(9, 'test', 'tset', '2021-05-26'),
(10, 'test', 'test', '2021-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `tsag`
--

CREATE TABLE `tsag` (
  `Id` int(11) NOT NULL,
  `tsag` enum('09:00','10:00','11:00','12:00','13:00','14:30','15:30','16:30','17:30','18:00') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tsag`
--

INSERT INTO `tsag` (`Id`, `tsag`) VALUES
(1, '09:00'),
(2, '10:00'),
(3, '11:00'),
(4, '12:00'),
(5, '13:00'),
(6, '14:30'),
(7, '15:30'),
(8, '16:30'),
(9, '17:30'),
(10, '18:00');

-- --------------------------------------------------------

--
-- Table structure for table `tulbur`
--

CREATE TABLE `tulbur` (
  `Id` int(11) NOT NULL,
  `uilchluulegchRd` varchar(8) NOT NULL,
  `uniinDun` int(11) NOT NULL,
  `crDate` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tulbur`
--

INSERT INTO `tulbur` (`Id`, `uilchluulegchRd`, `uniinDun`, `crDate`) VALUES
(1, 'test', 80000, '0000-00-00'),
(2, 'test', 80000, '2021-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `tuluv`
--

CREATE TABLE `tuluv` (
  `id` int(11) NOT NULL,
  `tuluv` enum('Эмчилж эхэлсэн','Эмчилж дууссан','Эмчилж эхлээгүй') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tuluv`
--

INSERT INTO `tuluv` (`id`, `tuluv`) VALUES
(1, 'Эмчилж эхлээгүй'),
(2, 'Эмчилж эхэлсэн'),
(3, 'Эмчилж дууссан');

-- --------------------------------------------------------

--
-- Table structure for table `uilchilgee`
--

CREATE TABLE `uilchilgee` (
  `Id` int(11) NOT NULL,
  `emchilgee` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uilchilgee`
--

INSERT INTO `uilchilgee` (`Id`, `emchilgee`) VALUES
(1, 'Үзлэг оношлогоо'),
(2, 'Шүдний гоо сайхны эмчилгээ'),
(3, 'Шүдний гажиг засал'),
(4, 'Имплант эмчилгээ'),
(5, 'Урьдчилсан сэргийлэлт болон шүдний тулгуур эдийн эмчилгээ'),
(6, 'Шүдний сувгийн эмчилгээ'),
(7, 'Шүдний хоршихуй сэргээх буюу согог засал'),
(8, 'Шүдний мэс заслын эмчилгээ'),
(9, 'Ломбо, шүдний чулуу түүх'),
(10, 'Шүдний бүрээс хийх'),
(11, 'Хиймэл шүд хийх'),
(12, 'Шүд авах'),
(13, 'Шүдний аппарат'),
(14, 'Шүд цайруулах'),
(15, 'Бусад үйлчилгээ');

-- --------------------------------------------------------

--
-- Table structure for table `uilchluulegch`
--

CREATE TABLE `uilchluulegch` (
  `id` int(11) NOT NULL,
  `rd` varchar(8) NOT NULL,
  `ner` varchar(25) NOT NULL,
  `utas` int(8) NOT NULL,
  `uilchilgeeId` int(11) NOT NULL,
  `tsagAvsanUdur` date NOT NULL,
  `tsagId` int(11) NOT NULL,
  `tuluv` int(11) NOT NULL DEFAULT 1,
  `tuhai` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uilchluulegch`
--

INSERT INTO `uilchluulegch` (`id`, `rd`, `ner`, `utas`, `uilchilgeeId`, `tsagAvsanUdur`, `tsagId`, `tuluv`, `tuhai`) VALUES
(4, 'ewr', 'wer', 12, 1, '2021-05-25', 1, 1, NULL),
(5, 'qe', 'qwe12', 123, 15, '2021-05-25', 2, 1, NULL),
(6, 'te', 'tq', 11, 2, '2021-05-25', 3, 3, NULL),
(7, 'ASDF', 'SD', 123, 4, '2021-05-25', 4, 1, NULL),
(8, 'DFA', 'SAD', 123, 13, '2021-05-25', 5, 1, NULL),
(9, 'SDFASDF', 'SADF', 132, 10, '2021-05-25', 6, 2, NULL),
(10, 'ASDF', 'QWER', 123, 2, '2021-05-25', 7, 1, NULL),
(11, 'qweqwe', 'qwe', 123, 14, '2021-05-25', 8, 1, NULL),
(12, 'qe', 'qwe', 123, 5, '2021-05-25', 9, 1, NULL),
(80, 'wre', 'test', 123123123, 13, '2021-05-26', 1, 1, NULL),
(81, 'test', 'test', 91283293, 13, '2021-05-26', 9, 1, NULL),
(82, 'test', 'test', 555, 4, '2021-05-27', 2, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ajilchid`
--
ALTER TABLE `ajilchid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setgegdel`
--
ALTER TABLE `setgegdel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tsag`
--
ALTER TABLE `tsag`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tulbur`
--
ALTER TABLE `tulbur`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tuluv`
--
ALTER TABLE `tuluv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uilchilgee`
--
ALTER TABLE `uilchilgee`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `uilchluulegch`
--
ALTER TABLE `uilchluulegch`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uilchilgeeId` (`uilchilgeeId`),
  ADD KEY `tsagId` (`tsagId`),
  ADD KEY `uilchluulegch_ibfk_3` (`tuluv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ajilchid`
--
ALTER TABLE `ajilchid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `setgegdel`
--
ALTER TABLE `setgegdel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tsag`
--
ALTER TABLE `tsag`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tulbur`
--
ALTER TABLE `tulbur`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tuluv`
--
ALTER TABLE `tuluv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uilchilgee`
--
ALTER TABLE `uilchilgee`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `uilchluulegch`
--
ALTER TABLE `uilchluulegch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `uilchluulegch`
--
ALTER TABLE `uilchluulegch`
  ADD CONSTRAINT `uilchluulegch_ibfk_1` FOREIGN KEY (`uilchilgeeId`) REFERENCES `uilchilgee` (`Id`),
  ADD CONSTRAINT `uilchluulegch_ibfk_2` FOREIGN KEY (`tsagId`) REFERENCES `tsag` (`Id`),
  ADD CONSTRAINT `uilchluulegch_ibfk_3` FOREIGN KEY (`tuluv`) REFERENCES `tuluv` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
