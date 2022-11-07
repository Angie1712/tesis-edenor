-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 07-11-2022 a las 12:29:40
-- Versión del servidor: 5.7.39
-- Versión de PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tesis-edenor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Marca`
--

CREATE TABLE `Marca` (
  `id_marca` int(11) NOT NULL,
  `Marca` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Marca`
--

INSERT INTO `Marca` (`id_marca`, `Marca`) VALUES
(1, 'MERCEDES BENZ'),
(2, 'RENAULT'),
(3, 'PEUGEOT'),
(4, 'CHEVROLET'),
(5, 'CITROEN'),
(6, 'VOLKSWAGEN'),
(7, 'FORD'),
(8, 'NISSAN'),
(9, 'MITSUBISHI'),
(10, 'IVECO'),
(11, 'KIA'),
(12, 'FIAT'),
(13, 'TOYOTA'),
(14, 'SUZUKI'),
(15, 'HYUNDAI'),
(16, 'HONDA'),
(17, 'DODGE'),
(18, 'ISUZU'),
(19, 'CHERY'),
(20, 'NISSAN'),
(21, 'JEEP'),
(22, 'BMW'),
(23, 'ALFA ROMEO'),
(24, 'LAND ROVER'),
(25, 'AUDI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Modelo`
--

CREATE TABLE `Modelo` (
  `id_modelo` int(11) NOT NULL,
  `Modelo` varchar(255) NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Modelo`
--

INSERT INTO `Modelo` (`id_modelo`, `Modelo`, `id_marca`) VALUES
(1, 'BERLINA 5 PUERTAS', 2),
(2, 'KANGOO EXP GRAND CONFORT 1.9', 2),
(3, 'PARTNER CONFORT 1.6 HDI', 3),
(4, 'CLIO RN 3PTAS. PACK AA.', 2),
(5, 'CORSA 4 PUERTAS GL 1.7 DIE', 4),
(6, 'BERLINGO FURGON 1.9D PLC', 5),
(7, 'MEGANE RXE BIC ABS F2', 2),
(8, 'SPRINTER 313 CDI/355O MIXTO4+1', 1),
(9, 'BMO 695 VERSION ATRON 1634 51', 1),
(10, 'ATEGO 1725', 1),
(11, 'DUSTER OROCH PRIVILEGE 2.0', 2),
(12, 'S10 CD 2.8 TD 4X4 HC AT', 4),
(13, 'STRADA ADVENTURE 1.6', 12),
(14, 'NP300 FRONTIER LE 4X2 DIESEL', 20),
(15, 'L200 TRITON HPE 3.2 CR', 9),
(16, 'SAVEIRO 1.6', 6),
(17, 'MONTANA  LS', 4),
(18, 'UNO VAN FIRE MPI 8V', 12),
(19, 'SW4 4X4 SRX 2.8 TDI 6 M/T 7A', 13),
(20, 'HILUX SW4 4X4 SRV 3.0 TDI 5 A/T C/CUERO', 13),
(21, 'G.VITARA 5P 2.0 TDI', 14),
(22, 'GOL COUNTRY 1.6', 6),
(23, 'DUNA SL 1.6', 12),
(24, 'QUANTUM/GLS', 6),
(25, 'FIORINO 1.7 DIESEL', 12),
(26, 'F-100', 7),
(27, '958 ATEGO 1720 48', 1),
(28, '207 CC 156 CV', 3),
(29, '170E28 MLC', 10),
(30, 'TRAFIC CORTO NAFTA / DIESEL', 2),
(31, 'A1 1.4T FSI', 25),
(32, 'FUN 1.4', 14),
(33, 'UNO FIRE 1242 MPI 8V', 12),
(34, 'KA FLY VIRAL 1.6L', 7),
(35, 'KANGOO CONFORT 1.6 5A CD DA CA SVT 600KG', 2),
(36, 'FOX1.6', 6),
(37, 'CORSA GL 1.4 E.F.I.', 4),
(38, 'GOL 1.9 SD', 6),
(39, 'PARTNER CONFORT HDI 1.6', 3),
(40, 'FIESTA LX 1.8 D', 7),
(41, 'PALIO FIRE 1242 MPI 16V', 12),
(42, 'CADDY 1.9 SD', 6),
(43, 'KANGOO II EXPRESS CONFORT 5A 1.6 SCE', 2),
(44, 'TRAFIC CORTO DIESEL F8Q', 2),
(45, 'CELTA LS 1.4N AB+ABS', 4),
(46, '206 XR 1.6', 3),
(47, 'ASTRA GLS', 4),
(48, 'KA VIRAL', 7),
(49, 'SAXO 1.1', 5),
(50, 'A3 1.8 T FSI', 25),
(51, 'PALIO YOUNG 1.3 MPI', 12),
(52, 'HIGH UP! 1.0 MPI', 6),
(53, 'SPRINTER 313 CDI/F 3550', 1),
(54, 'BERLINGO FURGON 1.4I PACK SEGURIDAD AM53', 5),
(55, 'KANGOO RL EXPRESS DIE 1 PCL', 2),
(56, 'DS3 1.6 TURBO SPORT CHIC', 5),
(57, 'ACCENT GS', 15),
(58, 'TWINGO', 2),
(59, '106 QUICK SILVER', 3),
(60, 'RS5 4.2 FSI QUATTRO', 25),
(61, 'HILUX 4X4 D/C SRX 2.8 TDI 6 M/T', 13),
(62, 'RANGER2 DC 4X2 XLS 3.2L D', 7),
(63, 'AMAROK 2.0L TDI 180 CV 4X2 387', 6),
(64, '207 COMPACT XT 1.6 3P', 3),
(65, 'KANGOO AUTHENTIQUE 1.9 2PL', 2),
(66, 'AGILE 5P LTZ SPIRIT 1.4/2013', 4),
(67, 'FOCUS TREND PLUS 2.0L NAFTA', 7),
(68, 'ACCELO 815', 1),
(69, 'OF1722', 1),
(70, 'TRANSIT 120-S', 13),
(71, 'ESCORT', 7),
(72, 'SURAN SDI', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Reclamo`
--

CREATE TABLE `Reclamo` (
  `id_Reclamo` int(11) NOT NULL,
  `Reclamo` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_vehiculo` int(11) NOT NULL,
  `id_tipo_reclamo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Rol`
--

CREATE TABLE `Rol` (
  `id_rol` int(11) NOT NULL,
  `detail_rol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Rol`
--

INSERT INTO `Rol` (`id_rol`, `detail_rol`) VALUES
(1, 'Administrador'),
(2, 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipo_reclamo`
--

CREATE TABLE `Tipo_reclamo` (
  `id_tipo_reclamo` int(11) NOT NULL,
  `Tipo_reclamo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Tipo_reclamo`
--

INSERT INTO `Tipo_reclamo` (`id_tipo_reclamo`, `Tipo_reclamo`) VALUES
(1, 'Reparación'),
(2, 'Lavado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Users`
--

CREATE TABLE `Users` (
  `id_user` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `Legajo` varchar(255) NOT NULL,
  `dni` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Users`
--

INSERT INTO `Users` (`id_user`, `Name`, `Surname`, `email`, `id_rol`, `Legajo`, `dni`) VALUES
(1, 'Pedro', 'Barbier', 'Pedro77@gmail.com', 1, '977', '42627749'),
(2, 'Mariela', 'Castro', 'Marcastro@gmail.com', 2, '1132', '42572191');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Vehiculos`
--

CREATE TABLE `Vehiculos` (
  `id_vehiculo` int(11) NOT NULL,
  `Patente` varchar(100) NOT NULL,
  `id_modelo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Marca`
--
ALTER TABLE `Marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `Modelo`
--
ALTER TABLE `Modelo`
  ADD PRIMARY KEY (`id_modelo`),
  ADD KEY `fk_marca` (`id_marca`);

--
-- Indices de la tabla `Reclamo`
--
ALTER TABLE `Reclamo`
  ADD KEY `FK_RECLAMO` (`id_user`),
  ADD KEY `id_vehiculo` (`id_vehiculo`),
  ADD KEY `FK_RECLAMO_reclamo` (`id_tipo_reclamo`);

--
-- Indices de la tabla `Rol`
--
ALTER TABLE `Rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `Tipo_reclamo`
--
ALTER TABLE `Tipo_reclamo`
  ADD KEY `FK_TIPO_RECLAMO` (`id_tipo_reclamo`);

--
-- Indices de la tabla `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `FK_ROL` (`id_rol`);

--
-- Indices de la tabla `Vehiculos`
--
ALTER TABLE `Vehiculos`
  ADD PRIMARY KEY (`id_vehiculo`),
  ADD KEY `FK_MODELO` (`id_modelo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Marca`
--
ALTER TABLE `Marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `Modelo`
--
ALTER TABLE `Modelo`
  MODIFY `id_modelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `Rol`
--
ALTER TABLE `Rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `Users`
--
ALTER TABLE `Users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Modelo`
--
ALTER TABLE `Modelo`
  ADD CONSTRAINT `FK_MARCA` FOREIGN KEY (`id_marca`) REFERENCES `Marca` (`id_marca`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Reclamo`
--
ALTER TABLE `Reclamo`
  ADD CONSTRAINT `FK_RECLAMO` FOREIGN KEY (`id_user`) REFERENCES `Users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reclamo_ibfk_1` FOREIGN KEY (`id_vehiculo`) REFERENCES `Vehiculos` (`id_vehiculo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reclamo_ibfk_2` FOREIGN KEY (`id_tipo_reclamo`) REFERENCES `Tipo_reclamo` (`id_tipo_reclamo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Users`
--
ALTER TABLE `Users`
  ADD CONSTRAINT `FK_ROL` FOREIGN KEY (`id_rol`) REFERENCES `Rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Vehiculos`
--
ALTER TABLE `Vehiculos`
  ADD CONSTRAINT `FK_MODELO` FOREIGN KEY (`id_modelo`) REFERENCES `Modelo` (`id_modelo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`id_vehiculo`) REFERENCES `Reclamo` (`id_vehiculo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
