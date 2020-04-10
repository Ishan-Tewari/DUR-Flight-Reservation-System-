-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2020 at 01:40 AM
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
(11, 'ishantewari92@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `CouponCode` varchar(10) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Amount` int(10) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fares`
--

CREATE TABLE `fares` (
  `FareID` varchar(20) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(6, '2020-04-06', '04:30:00', '06:30:00', 'UK101', 2, 'AMD', 'DEL', 4500);

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
(40, 'vaidehitewari@gmail.com', 'Mahesh Giri');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `RevID` varchar(32) NOT NULL,
  `PassengerName` varchar(25) NOT NULL,
  `BookingDate` datetime NOT NULL,
  `DepartureDate` datetime NOT NULL,
  `Fare` varchar(20) NOT NULL,
  `Flight` varchar(32) NOT NULL,
  `Type` varchar(32) NOT NULL,
  `Discount` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('ishantewari92@gmail.com', 'Ishan Tewari', 19, 2342342, 'E-504 Dharti Crystal', 'IOC to Tragad Road, Chandkheda', 'India'),
('manishbhagiya@gmail.com', 'Manish Bhagiya', 19, 1231, 'sdfsf', 'fsdf', 'sdf'),
('nikhilbhagiya@gmail.com', 'Nikhil Bhagiya', 19, 1231, 'sdfsf', 'fsdf', 'sdf'),
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
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`CouponCode`);

--
-- Indexes for table `fares`
--
ALTER TABLE `fares`
  ADD PRIMARY KEY (`FareID`);

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
  ADD KEY `fk_passenger` (`PassengerName`),
  ADD KEY `fk_flight` (`Flight`),
  ADD KEY `fk_fare` (`Fare`),
  ADD KEY `fk_discount` (`Discount`);

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
  MODIFY `AutID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `FlightID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `PId` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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
  ADD CONSTRAINT `fk_discount` FOREIGN KEY (`Discount`) REFERENCES `discounts` (`CouponCode`),
  ADD CONSTRAINT `fk_fare` FOREIGN KEY (`Fare`) REFERENCES `fares` (`FareID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
