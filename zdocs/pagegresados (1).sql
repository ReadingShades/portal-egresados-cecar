-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2020 at 11:35 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pagegresados`
--

-- --------------------------------------------------------

--
-- Table structure for table `oferta`
--

CREATE TABLE `oferta` (
  `ofertaID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `Titulo` varchar(30) NOT NULL,
  `Contenido` varchar(750) NOT NULL,
  `FechaPub` date NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaExp` date NOT NULL,
  `TipoOferta` varchar(15) NOT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `twitter`
--

CREATE TABLE `twitter` (
  `tIDPub` int(11) NOT NULL,
  `Formato` varchar(15) NOT NULL,
  `url` varchar(100) NOT NULL,
  `publicado` boolean NOT NULL DEFAULT 0,
  `ofertaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `TipoUser` varchar(20) NOT NULL,
  `userID` int(15) NOT NULL,
  `userID-tipo` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`Nombre`, `Apellido`, `Password`, `email`, `TipoUser`, `userID`, `userID-tipo`) VALUES
('Carlos', 'Ramirez', 'fdasfsfasd\"', 'carlos.ramirezm@cecar.edu.co\"', 'egresado', 111223, 'c'),
('Carlos Andres', 'Muï¿½iz', 'qewq\"', 'carlos.ramirezm@cecar.edu.co\"', 'egresado', 1112232, 'cc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`ofertaID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `twitter`
--
ALTER TABLE `twitter`
  ADD PRIMARY KEY (`tIDPub`),
  ADD KEY `ofertaID` (`ofertaID`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`userID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `oferta`
--
ALTER TABLE `oferta`
  ADD CONSTRAINT `oferta_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `usuario` (`userID`);

--
-- Constraints for table `twitter`
--
ALTER TABLE `twitter`
  ADD CONSTRAINT `twitter_ibfk_1` FOREIGN KEY (`ofertaID`) REFERENCES `oferta` (`ofertaID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
