-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 14, 2020 at 01:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `AirlineReservationSystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `aircrafts`
--

CREATE TABLE `aircrafts` (
  `ACID` varchar(20) NOT NULL,
  `Model` varchar(32) NOT NULL,
  `Capacity` int(11) NOT NULL,
  `MfgBy` varchar(128) NOT NULL,
  `MfgOn` datetime NOT NULL,
  `Airline` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aircrafts`
--

INSERT INTO `aircrafts` (`ACID`, `Model`, `Capacity`, `MfgBy`, `MfgOn`, `Airline`) VALUES
('6E101', 'Airbus 130', 200, 'Airbus USA Pvt. Ltd.', '2019-10-08 15:57:58', 1),
('6E102', 'Airbus 130', 150, 'Airbus USA Pvt. Ltd.', '2018-12-04 16:17:59', 1),
('6E103', 'Airbus 530', 400, 'Airbus USA Pvt. Ltd.', '2018-12-04 16:17:59', 1),
('SJ101', 'Airbus 100', 100, 'Airbus USA Pvt. Ltd.', '2016-11-08 17:12:23', 2),
('UK101', 'Airbus 360', 200, 'Airbus USA Pvt. Ltd.', '2017-09-13 17:10:44', 3);

-- --------------------------------------------------------

--
-- Table structure for table `airlines`
--

CREATE TABLE `airlines` (
  `AirID` int(32) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`AirID`, `Name`, `Logo`) VALUES
(1, 'Indigo						', 'Images/goAir.png'),
(2, 'SpiceJet', 'Images/spiceJet.png'),
(3, 'AirVistara', 'Images/airVistara.png');

-- --------------------------------------------------------

--
-- Table structure for table `authentication`
--

CREATE TABLE `authentication` (
  `AutID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authentication`
--

INSERT INTO `authentication` (`AutID`, `Username`, `Password`) VALUES
(5, 'gaurav@gmail.com', 'password123'),
(6, 'vaidehitewari@gmail.com', 'password'),
(7, 'divyamahur@gmail.com', 'password'),
(8, 'adityaswamy@gmail.com', 'password'),
(9, 'nikhilbhagiya@gmail.com', 'password'),
(10, 'manishbhagiya@gmail.com', 'password'),
(11, 'ishantewari92@gmail.com', 'password'),
(12, 'hetaltewari@gmail.com', 'PASSWORD'),
(14, 'test@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `FlightID` int(32) NOT NULL,
  `FlightDate` date NOT NULL,
  `Departure` time NOT NULL,
  `Arrival` time NOT NULL,
  `Airline` varchar(20) NOT NULL,
  `FlightTime` double NOT NULL,
  `Source` varchar(32) NOT NULL,
  `Destination` varchar(32) NOT NULL,
  `Fare` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`FlightID`, `FlightDate`, `Departure`, `Arrival`, `Airline`, `FlightTime`, `Source`, `Destination`, `Fare`) VALUES
(2, '2020-04-06', '06:00:00', '08:00:00', '6E101', 2, 'AMD', 'DEL', 5000),
(3, '2020-04-06', '07:00:00', '09:00:00', '6E103', 2, 'AMD', 'DEL', 4000),
(4, '2020-04-06', '20:00:00', '22:00:00', '6E102', 2, 'AMD', 'DEL', 7000),
(5, '2020-04-06', '07:30:00', '09:30:00', 'SJ101', 2, 'AMD', 'DEL', 2800),
(6, '2020-04-06', '04:30:00', '06:30:00', 'UK101', 2, 'AMD', 'DEL', 4500),
(7, '2020-04-30', '15:00:00', '18:00:00', 'UK101', 3, 'DEL', 'DXB', 15000),
(8, '2020-04-30', '07:30:00', '10:30:00', 'SJ101', 3, 'DEL', 'DXB', 12000),
(9, '2020-04-30', '10:00:00', '01:00:00', '6E102', 3, 'DEL', 'DXB', 11000),
(10, '2020-04-30', '12:00:00', '03:00:00', '6E101', 3, 'DEL', 'DXB', 18000);

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `PId` int(32) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`PId`, `Username`, `Name`) VALUES
(1, 'vaidehitewari@gmail.com', 'Ishan Tewari'),
(2, 'vaidehitewari@gmail.com', 'Manish Gupta'),
(6, 'vaidehitewari@gmail.com', 'Divya Mahur'),
(10, 'vaidehitewari@gmail.com', 'Nandit  Pujara'),
(40, 'vaidehitewari@gmail.com', 'Mahesh Giri'),
(41, 'hetaltewari@gmail.com', 'Ishan Tewari'),
(42, 'hetaltewari@gmail.com', 'Hetal Tewari'),
(43, 'hetaltewari@gmail.com', 'Divya Mahur'),
(44, 'test@gmail.com', 'Ishan Tewari'),
(45, 'test@gmail.com', 'Manish Gupta'),
(46, 'test@gmail.com', 'Divya Mahur'),
(47, 'test@gmail.com', 'Nandit  Pujara'),
(48, 'ishantewari92@gmail.com', 'Ishan Tewari'),
(49, 'ishantewari92@gmail.com', 'Manish Gupta'),
(50, 'manishbhagiya@gmail.com', 'Mahesh Giri'),
(51, 'manishbhagiya@gmail.com', 'Sailesh Shah'),
(52, 'ishantewari92@gmail.com', 'Jevika Shah'),
(53, 'ishantewari92@gmail.com', 'Divya Mahur'),
(54, 'ishantewari92@gmail.com', 'Vishal Shah'),
(55, 'ishantewari92@gmail.com', 'Vatsal Shah'),
(56, 'ishantewari92@gmail.com', 'Meet Shah'),
(57, 'ishantewari92@gmail.com', 'Jevika Kinger');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `RevID` int(32) NOT NULL,
  `PassengerName` varchar(25) NOT NULL,
  `BookingDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `DepartureDate` date NOT NULL,
  `Fare` varchar(20) NOT NULL,
  `Flight` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`RevID`, `PassengerName`, `BookingDate`, `DepartureDate`, `Fare`, `Flight`) VALUES
(1, 'ishantewari92@gmail.com', '2020-04-14 10:38:58', '2020-04-30', '30000', 'UK101'),
(2, 'manishbhagiya@gmail.com', '2020-04-14 10:43:00', '2020-04-30', '30000', 'UK101'),
(3, 'ishantewari92@gmail.com', '2020-04-14 10:45:29', '2020-04-06', '7000', '6E102'),
(4, 'ishantewari92@gmail.com', '2020-04-14 10:51:04', '2020-04-06', '15000', '6E101'),
(5, 'ishantewari92@gmail.com', '2020-04-14 11:05:42', '2020-04-30', '36000', 'SJ101'),
(6, 'ishantewari92@gmail.com', '2020-04-14 11:07:13', '2020-04-30', '11000', '6E102'),
(7, 'ishantewari92@gmail.com', '2020-04-14 11:08:47', '2020-04-30', '12000', 'SJ101');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(50) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Age` int(3) NOT NULL,
  `ContactNo` bigint(13) NOT NULL,
  `Street` varchar(80) NOT NULL,
  `State` varchar(30) NOT NULL,
  `Country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Name`, `Age`, `ContactNo`, `Street`, `State`, `Country`) VALUES
('adityaswamy@gmail.com', 'Aditya Swamy', 19, 23123, '231', 'asd', 'sad'),
('divyamahur@gmail.com', 'Divya Mahur', 23, 123123, 'fa', 'asdaas', 'adsasd'),
('gaurav@gmail.com', 'Gaurav Bhambhani', 19, 123123, 'sdd', 'sdasd', 'asdasda'),
('hetaltewari@gmail.com', 'Hetal Tewari', 34, 2342342, 'E-504 Dharti Crystal', 'IOC to Tragad Road, Chandkheda', 'India'),
('ishantewari92@gmail.com', 'Ishan Tewari', 19, 2342342, 'E-504 Dharti Crystal', 'IOC to Tragad Road, Chandkheda', 'India'),
('manishbhagiya@gmail.com', 'Manish Bhagiya', 19, 1231, 'sdfsf', 'fsdf', 'sdf'),
('nikhilbhagiya@gmail.com', 'Nikhil Bhagiya', 19, 1231, 'sdfsf', 'fsdf', 'sdf'),
('test@gmail.com', 'Test Person', 19, 2342342, 'E-504 Dharti Crystal', 'IOC to Tragad Road, Chandkheda', 'India'),
('vaidehitewari@gmail.com', 'Vaidehi Tewari', 23, 123123, 'fa', 'asdaas', 'adsasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aircrafts`
--
ALTER TABLE `aircrafts`
  ADD PRIMARY KEY (`ACID`),
  ADD KEY `fk_airlines` (`Airline`);

--
-- Indexes for table `airlines`
--
ALTER TABLE `airlines`
  ADD PRIMARY KEY (`AirID`);

--
-- Indexes for table `authentication`
--
ALTER TABLE `authentication`
  ADD PRIMARY KEY (`AutID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`FlightID`),
  ADD KEY `fk_airline_flight` (`Airline`);

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`PId`),
  ADD KEY `fk_username` (`Username`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`RevID`),
  ADD KEY `fk_flight` (`Flight`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airlines`
--
ALTER TABLE `airlines`
  MODIFY `AirID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `authentication`
--
ALTER TABLE `authentication`
  MODIFY `AutID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `FlightID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `PId` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `RevID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aircrafts`
--
ALTER TABLE `aircrafts`
  ADD CONSTRAINT `fk_airlines` FOREIGN KEY (`Airline`) REFERENCES `airlines` (`AirID`);

--
-- Constraints for table `flights`
--
ALTER TABLE `flights`
  ADD CONSTRAINT `fk_aircraft` FOREIGN KEY (`Airline`) REFERENCES `aircrafts` (`ACID`);

--
-- Constraints for table `passengers`
--
ALTER TABLE `passengers`
  ADD CONSTRAINT `fk_username` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `fk_flight` FOREIGN KEY (`Flight`) REFERENCES `aircrafts` (`ACID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
