-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Oct 20, 2015 at 07:48 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `lo071617`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserEmail` varchar(500) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserPassword` varchar(500) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserFirstName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserLastName` varchar(50) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserCity` varchar(90) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserState` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserZip` varchar(12) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserRegistrationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UserPhone` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserCountry` varchar(20) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserAddress` varchar(100) COLLATE latin1_german2_ci DEFAULT NULL,
  `UserAddress2` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `UserFirstBill` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `UserLastBill` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `UserCreditCard` bigint(16) NOT NULL,
  `UserCCV` int(3) NOT NULL,
  `UserAddressBill` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `UserAddress2Bill` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `UserCityBill` varchar(90) COLLATE latin1_german2_ci NOT NULL,
  `UserStateBill` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `UserZipBill` varchar(12) COLLATE latin1_german2_ci NOT NULL,
  `UserCountryBill` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `UserFirstNameShip` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `UserLastNameShip` varchar(50) COLLATE latin1_german2_ci NOT NULL,
  `UserAddressShip` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `UserAddress2Ship` varchar(100) COLLATE latin1_german2_ci NOT NULL,
  `UserCityShip` varchar(90) COLLATE latin1_german2_ci NOT NULL,
  `UserStateShip` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `UserZipShip` varchar(12) COLLATE latin1_german2_ci NOT NULL,
  `UserCountryShip` varchar(20) COLLATE latin1_german2_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `UserStatus` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_german2_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserEmail`, `UserPassword`, `UserFirstName`, `UserLastName`, `UserCity`, `UserState`, `UserZip`, `UserRegistrationDate`, `UserPhone`, `UserCountry`, `UserAddress`, `UserAddress2`, `UserFirstBill`, `UserLastBill`, `UserCreditCard`, `UserCCV`, `UserAddressBill`, `UserAddress2Bill`, `UserCityBill`, `UserStateBill`, `UserZipBill`, `UserCountryBill`, `UserFirstNameShip`, `UserLastNameShip`, `UserAddressShip`, `UserAddress2Ship`, `UserCityShip`, `UserStateShip`, `UserZipShip`, `UserCountryShip`, `timestamp`, `UserStatus`) VALUES
(1, 'wednesdayadmin@wednesday.com', '209236a2b31080a8a80ecb8bbf427c5ea476e196', 'Wednesday', 'Admin', 'Orlando', 'FL', '32816', '2015-10-13 17:53:17', '3866828625 ', 'United States', '4000 Central Florida Boulevard', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', 3),
(2, 'lavigne.logan@hotmail.com', '05057a9cffb14dab4c45a6815933431335aaeb01', 'Logan', 'La Vigne', 'West Melbourne', 'FL', '32904', '2015-10-13 17:56:07', '8287838129', 'United States', '825 Greenwood Manor Circle', '', 'Logan', 'La Vigne', 1234567812345678, 123, '825 Greenwood Manor Circle', '', 'West Melbourne', 'FL', '32904', 'United States', 'Logan', 'La Vigne', '825 Greenwood Manor Circle', '', 'West Melbourne', 'FL', '32904', 'United States', '0000-00-00 00:00:00', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;