-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2019 a las 01:16:02
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `genezi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  `Clave` text NOT NULL,
  `Estado` int(11) NOT NULL,
  `Creado` timestamp NOT NULL,
  `Actualizado` timestamp NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`Id`, `Nombre`, `Clave`, `Estado`, `Creado`, `Actualizado`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '2019-04-24 13:43:16', '2019-04-24 13:43:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CodigoCat` varchar(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Descripcion` text NOT NULL,
  `Estado` int(11) NOT NULL,
  `Creado` timestamp NOT NULL,
  `Actualizado` timestamp NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`Id`, `CodigoCat`, `Nombre`, `Descripcion`, `Estado`, `Creado`, `Actualizado`) VALUES
(1, 'C1', 'Monitores', 'Articulos de entretenimiento y diversión', 1, '2019-04-24 13:43:06', '2019-04-24 13:43:06'),
(2, 'C2', 'Multimedia', 'Articulos de entretenimiento y diversión', 1, '2019-04-24 13:43:04', '2019-04-24 13:43:04'),
(3, 'C3', 'Móviles', 'Teléfonos celulares smartphones', 1, '2019-04-24 13:43:01', '2019-04-24 13:43:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nit` varchar(30) NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `NombreCompleto` varchar(70) NOT NULL,
  `Apellido` varchar(70) NOT NULL,
  `Clave` text NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Estado` int(11) NOT NULL DEFAULT '1',
  `Creado` timestamp NOT NULL,
  `Actualizado` timestamp NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE IF NOT EXISTS `detalle` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NumPedido` int(20) NOT NULL,
  `CantidadProductos` int(20) NOT NULL,
  `Promocion` int(11) NOT NULL,
  `IdProducto` int(30) NOT NULL,
  `Estado` int(11) NOT NULL DEFAULT '1',
  `Creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Actualizado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parameters`
--

CREATE TABLE IF NOT EXISTS `parameters` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `parameters`
--

INSERT INTO `parameters` (`Id`, `name`, `value`, `description`, `status`) VALUES
(1, 'messages', '{"mensajes":{"user_autenticated":"Usuario autenticado","user_autenticated_error":"Error nombre o contraseña invalido","user_created":"Usuario creado correctamente","user_created_error":"Error al crear el usuario","duplicate_user":"El usuario y/o Nit ya se encuentra registrado"}}', 'Mensajes de la aplicacion', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CodigoProd` varchar(30) NOT NULL,
  `NombreProd` varchar(30) NOT NULL,
  `Precio` decimal(30,2) NOT NULL,
  `Modelo` varchar(30) NOT NULL,
  `Marca` varchar(30) NOT NULL,
  `Stock` int(20) NOT NULL,
  `Imagen` varchar(150) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `IdProveedor` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `Estado` int(11) NOT NULL DEFAULT '1',
  `Creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Actualizado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`),
  KEY `IdProveedor` (`IdProveedor`),
  KEY `idCategoria` (`idCategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id`, `CodigoProd`, `NombreProd`, `Precio`, `Modelo`, `Marca`, `Stock`, `Imagen`, `Nombre`, `IdProveedor`, `idCategoria`, `Estado`, `Creado`, `Actualizado`) VALUES
(1, '0001', 'Videocámara con zoom óptico', '559.00', 'HMX-F90', 'Samsung', 25, 'Samsung-HMX-F90-video-camera-2.jpg', 'admin', 4, 2, 1, '2019-04-24 14:22:11', '2019-04-24 14:22:11'),
(2, '0002', 'Altavoz Multiroom 360 R6', '99.00', 'WAM6500', 'Samsung', 25, 'es_WAM6500-ZF_001_Front_black.jpg', 'admin', 4, 2, 1, '2019-04-24 14:22:53', '2019-04-24 14:22:53'),
(3, '0003', 'Galaxy J5', '555.00', 'J5', 'Samsung', 25, 'j5.jpg', 'admin', 4, 3, 1, '2019-04-24 14:23:33', '2019-04-24 14:23:33'),
(4, '0004', 'Monitor TV LED 32"', '999.00', 'T32E310EW', 'Samsung', 25, 'es_LT32E310EW-EN_001_Front_black.jpg', 'admin', 4, 1, 1, '2019-04-24 14:25:02', '2019-04-24 14:25:02'),
(5, '0005', 'Camara Digital Sony Cyber-shot', '999.00', 'DSC-WX9', 'Sony', 25, 'camara.jpg', 'admin', 1, 2, 1, '2019-04-24 14:25:56', '2019-04-24 14:25:56'),
(6, '0006', 'LG G4 Stylus', '600.00', 'G4', 'LG', 25, 'lg-g4-stylus-1.jpg', 'admin', 5, 3, 1, '2019-04-24 14:27:12', '2019-04-24 14:27:12'),
(7, '0007', 'Altavoz Multiroom 360 R1', '199.00', 'WAM1500', 'Samsung', 25, 'es_WAM1500-ZF_004_ExtreamLookdown_black.jpg', 'admin', 4, 2, 1, '2019-04-24 14:28:28', '2019-04-24 14:28:28'),
(8, '0008', 'Galaxy Tab S (10.5, Wi-Fi)', '399.00', 'TAB4', 'Samsung', 25, 'es_SM-T800NZWAPHE_001_Front_apricot.jpg', 'admin', 4, 3, 1, '2019-04-24 14:28:53', '2019-04-24 14:28:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NitProveedor` varchar(30) NOT NULL,
  `NombreProveedor` varchar(30) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Telefono` int(20) NOT NULL,
  `PaginaWeb` varchar(30) NOT NULL,
  `Estado` int(11) NOT NULL DEFAULT '1',
  `Creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Actualizado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`Id`, `NitProveedor`, `NombreProveedor`, `Direccion`, `Telefono`, `PaginaWeb`, `Estado`, `Creado`, `Actualizado`) VALUES
(1, '0001781', 'Sony', 'Minato, Tokio, Japón', 22596485, 'www.sony.com', 1, '2019-04-24 13:34:15', '2019-04-24 13:34:15'),
(2, '0001782', 'HTC', 'Taoyuan, Taiwán, (República de China)', 25987456, 'www.htc.com', 1, '2019-04-24 13:34:15', '2019-04-24 13:34:15'),
(3, '0001783', 'TCL', 'Huizhou, Guangdong, China', 25698745, 'tcl.com.ar', 1, '2019-04-24 13:34:15', '2019-04-24 13:34:15'),
(4, '0001785', 'Samsung', 'Samsung Town, Seúl, Corea del Sur', 22504787, 'www.samsung.com', 1, '2019-04-24 13:34:15', '2019-04-24 13:34:15'),
(5, '0001787', 'LG', 'Seúl,Corea del Sur', 26589874, 'www.lg.com', 1, '2019-04-24 13:34:15', '2019-04-24 13:34:15'),
(6, '0001788', 'Compaq', 'Houston, Texas, EE.UU', 24569875, 'www.compaq.com', 1, '2019-04-24 13:34:15', '2019-04-24 13:34:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NumPedido` int(20) NOT NULL,
  `TotalPagar` decimal(30,2) NOT NULL,
  `IdCliente` int(11) NOT NULL,
  `Estado` varchar(150) NOT NULL,
  `Creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Actualizado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`),
  KEY `IdCliente` (`IdCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`IdProveedor`) REFERENCES `proveedor` (`Id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`Id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
