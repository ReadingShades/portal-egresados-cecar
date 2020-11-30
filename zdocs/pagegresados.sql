create database pagegresados;
use pagegresados;

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

INSERT INTO `oferta` (`ofertaID`, `userID`, `Titulo`, `Contenido`, `FechaPub`, `FechaInicio`, `FechaExp`, `TipoOferta`) VALUES
(6, 1102840310, 'asdasdadas', 'lorem', '2020-11-28', '2020-11-28', '2020-11-29', 'trabajo'),
(8, 1102840310, 'asdasdadas', 'lorem', '2020-11-28', '2020-11-28', '2020-11-29', 'trabajo'),
(10, 1102840310, 'asdasdadas', 'lorem', '2020-11-28', '2020-11-28', '2020-11-29', 'trabajo'),
(11, 1102840310, 'asdasdadas', 'lorem', '2020-11-28', '2020-11-28', '2020-11-29', 'trabajo'),
(12, 1102840310, 'asdasdadas', 'lorem', '2020-11-28', '2020-11-28', '2020-11-29', 'trabajo');
DELIMITER $$
CREATE TRIGGER `insertar_oferta` AFTER INSERT ON `oferta` FOR EACH ROW INSERT INTO `twitter` (`tIDPub`, `url`, `publicado`, `ofertaID`) VALUES (NULL, NULL, '0', new.ofertaID)
$$
DELIMITER ;

CREATE TABLE `twitter` (
  `tIDPub` int(11) NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `publicado` tinyint(1) NOT NULL DEFAULT '0',
  `ofertaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `twitter` (`tIDPub`, `url`, `publicado`, `ofertaID`) VALUES
(1, NULL, 0, 12);

CREATE TABLE `usuario` (
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `TipoUser` varchar(20) NOT NULL,
  `userID` int(15) NOT NULL,
  `userID-tipo` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuario` (`Nombre`, `Apellido`, `Password`, `email`, `TipoUser`, `userID`, `userID-tipo`) VALUES
('carlos', 'Ramirez', '123456', 'carlos.ramirezm@cecar.edu.co', 'egresado', 1102840310, 'cc');


ALTER TABLE `oferta`
  ADD PRIMARY KEY (`ofertaID`),
  ADD KEY `userID` (`userID`);

ALTER TABLE `twitter`
  ADD PRIMARY KEY (`tIDPub`),
  ADD KEY `ofertaID` (`ofertaID`);

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`userID`);


ALTER TABLE `oferta`
  MODIFY `ofertaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `twitter`
  MODIFY `tIDPub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `oferta`
  ADD CONSTRAINT `oferta_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `usuario` (`userID`);

ALTER TABLE `twitter`
  ADD CONSTRAINT `twitter_ibfk_1` FOREIGN KEY (`ofertaID`) REFERENCES `oferta` (`ofertaID`);