-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.37-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para carrito
CREATE DATABASE IF NOT EXISTS `carrito` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `carrito`;

-- Volcando estructura para tabla carrito.articulo
CREATE TABLE IF NOT EXISTS `articulo` (
  `ArtCodigo` int(11) NOT NULL AUTO_INCREMENT,
  `ArtFoto` varchar(150) NOT NULL,
  `ArtNombre` varchar(50) NOT NULL,
  `ArtDescripcion` varchar(50) NOT NULL,
  `CatCodigo` int(11) NOT NULL,
  `MarCodigo` int(11) NOT NULL,
  `ProCodigo` int(11) NOT NULL,
  `ArtPrecio` decimal(10,2) NOT NULL,
  `ArtStock` int(11) NOT NULL,
  `ArtEstado` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`ArtCodigo`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla carrito.articulo: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `articulo` DISABLE KEYS */;
REPLACE INTO `articulo` (`ArtCodigo`, `ArtFoto`, `ArtNombre`, `ArtDescripcion`, `CatCodigo`, `MarCodigo`, `ProCodigo`, `ArtPrecio`, `ArtStock`, `ArtEstado`) VALUES
	(3, '../../static/img/articulo/vestido adidas mujer.jpg', 'Vestido', 'Vestido adidas color negro para damas', 6, 2, 1, 66.00, 12, b'1'),
	(4, '../../static/img/articulo/dividi puma hombre 1.jpg', 'DividÃ­', 'DividÃ­ puma para caballero con franjas', 2, 3, 1, 15.00, 2, b'1'),
	(5, '../../static/img/articulo/jean hollister hombre.jpg', 'Jean', 'Jean hollister para caballeros tono azul ', 1, 2, 1, 49.00, 1, b'1'),
	(6, '../../static/img/articulo/camiseta tomy.jpg', 'Camiseta', 'Camiseta Tomy color blanco con cuello ', 2, 9, 25, 42.00, 12, b'1'),
	(7, '../../static/img/articulo/blusa tomy.jpg', 'Blusa', 'Blusa Tomy silueta recta color turquesa', 2, 9, 1, 35.00, 3, b'1'),
	(8, '../../static/img/articulo/camisa hollister.jpg', 'Camisa', 'Camisa Hollister para caballeros manga larga', 3, 6, 1, 48.00, 1, b'1'),
	(9, '../../static/img/articulo/camiseta tomy mujer.jpg', 'Camiseta', 'Camiseta Tomy para damas con cuello', 2, 9, 1, 45.00, 3, b'1'),
	(10, '../../static/img/articulo/vestido damas.jpg', 'Vestido', 'Vestido silueta larga con decoraciÃ³n campana', 6, 2, 1, 70.00, 12, b'1'),
	(11, '../../static/img/articulo/camiseta nike.JPG', 'Camiseta ', 'Camiseta Nike para caballero sin cuello ', 2, 1, 1, 45.00, 9, b'1'),
	(12, '../../static/img/articulo/camiseta tomy1.jpg', 'Camiseta', 'Camiseta Tomy sin cuello ton gris', 2, 9, 1, 35.00, 2, b'1'),
	(13, '../../static/img/articulo/camisa cortita.jpg', 'Camisa ', 'Camisa manga corta silueta ajustada', 3, 9, 1, 42.00, 3, b'1'),
	(14, '../../static/img/articulo/short.jpg', 'Short', 'Short silueda semi ajustada color azul', 5, 6, 25, 30.00, 2, b'1');
/*!40000 ALTER TABLE `articulo` ENABLE KEYS */;

-- Volcando estructura para tabla carrito.banco
CREATE TABLE IF NOT EXISTS `banco` (
  `BanCodigo` int(11) NOT NULL AUTO_INCREMENT,
  `BanDescripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`BanCodigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla carrito.banco: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `banco` DISABLE KEYS */;
REPLACE INTO `banco` (`BanCodigo`, `BanDescripcion`) VALUES
	(1, 'Banco Guayaquil'),
	(2, 'Banco Pichincha'),
	(3, 'Banco del Pacifico');
/*!40000 ALTER TABLE `banco` ENABLE KEYS */;

-- Volcando estructura para tabla carrito.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `CatCodigo` int(11) NOT NULL AUTO_INCREMENT,
  `CatDescripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`CatCodigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla carrito.categoria: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
REPLACE INTO `categoria` (`CatCodigo`, `CatDescripcion`) VALUES
	(1, 'Pantalon'),
	(2, 'Camiseta'),
	(3, 'Camisa'),
	(4, 'Blusas'),
	(5, 'Short'),
	(6, 'Vestido');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Volcando estructura para tabla carrito.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `CliCodigo` int(11) NOT NULL AUTO_INCREMENT,
  `CliNombre` varchar(10) NOT NULL,
  `CliApellido` varchar(50) DEFAULT NULL,
  `CliTelefono` varchar(50) DEFAULT NULL,
  `CliCorreo` varchar(50) DEFAULT NULL,
  `CliClave` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CliCodigo`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla carrito.cliente: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
REPLACE INTO `cliente` (`CliCodigo`, `CliNombre`, `CliApellido`, `CliTelefono`, `CliCorreo`, `CliClave`) VALUES
	(14, 'Bryan', 'PazmiÃ±o', '0979955447', 'bpazmino@gmail.com', 'bryan12'),
	(15, 'Maria', 'Perez', '09738838483', 'marianj122@gmail.com', '1234567'),
	(16, 'Bryan', 'rosado', '09883478848', 'brosadop@gmail.com', '1234567'),
	(17, 'Julisa', 'Peres', '09738838483', 'julisap@gmail.com', '123456'),
	(18, 'Manuel', 'Zambrano', '0979955447', 'manuel@gmail.com', '123456'),
	(19, 'Marcelo', 'NuÃ±ez', '08823928392', 'nnumez@gmail.com', '123456'),
	(20, 'Leo', 'Kennedy', '0979918750', 'leo@gmail.com', '123456');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Volcando estructura para tabla carrito.marca
CREATE TABLE IF NOT EXISTS `marca` (
  `MarCodigo` int(11) NOT NULL AUTO_INCREMENT,
  `MarDescripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`MarCodigo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla carrito.marca: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `marca` DISABLE KEYS */;
REPLACE INTO `marca` (`MarCodigo`, `MarDescripcion`) VALUES
	(1, 'Nike'),
	(2, 'Adidas'),
	(3, 'Puma'),
	(4, 'Totto'),
	(6, 'Hollister'),
	(9, 'Tomy');
/*!40000 ALTER TABLE `marca` ENABLE KEYS */;

-- Volcando estructura para tabla carrito.proveedor
CREATE TABLE IF NOT EXISTS `proveedor` (
  `ProCodigo` int(11) NOT NULL AUTO_INCREMENT,
  `ProNombre` varchar(50) NOT NULL,
  `ProRuc` varchar(12) NOT NULL,
  `ProDireccion` varchar(50) NOT NULL,
  `ProTelefono` varchar(50) NOT NULL,
  `ProCorreo` varchar(50) DEFAULT NULL,
  `ProEstado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ProCodigo`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla carrito.proveedor: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
REPLACE INTO `proveedor` (`ProCodigo`, `ProNombre`, `ProRuc`, `ProDireccion`, `ProTelefono`, `ProCorreo`, `ProEstado`) VALUES
	(1, 'ModasEcu', '1001478526', 'Guayaquil', '0917584213', 'ecuamoda@gmail.com', 1),
	(25, 'Clover_Ecu', '080273435909', 'Guayaquil', '0455-3434-33', 'clovermodaecu@outlook.com', 1);
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;

-- Volcando estructura para tabla carrito.rol
CREATE TABLE IF NOT EXISTS `rol` (
  `RolCodigo` int(11) NOT NULL AUTO_INCREMENT,
  `RolDescripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`RolCodigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla carrito.rol: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
REPLACE INTO `rol` (`RolCodigo`, `RolDescripcion`) VALUES
	(1, 'Administrador'),
	(2, 'Cliente');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;

-- Volcando estructura para tabla carrito.tipocuenta
CREATE TABLE IF NOT EXISTS `tipocuenta` (
  `TipCodigo` int(11) NOT NULL AUTO_INCREMENT,
  `TipDescripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`TipCodigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla carrito.tipocuenta: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tipocuenta` DISABLE KEYS */;
REPLACE INTO `tipocuenta` (`TipCodigo`, `TipDescripcion`) VALUES
	(1, 'Cuenta Corriente'),
	(2, 'Cuenta de Ahorros');
/*!40000 ALTER TABLE `tipocuenta` ENABLE KEYS */;

-- Volcando estructura para tabla carrito.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `UsuCodigo` int(11) NOT NULL AUTO_INCREMENT,
  `UsuNombre` varchar(50) NOT NULL,
  `UsuApellido` varchar(50) NOT NULL,
  `UsuCorreo` varchar(50) NOT NULL,
  `UsuUsername` varchar(50) NOT NULL,
  `UsuPassword` varchar(50) NOT NULL,
  `RolCodigo` int(11) NOT NULL,
  `UsuEstado` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`UsuCodigo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla carrito.usuario: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
REPLACE INTO `usuario` (`UsuCodigo`, `UsuNombre`, `UsuApellido`, `UsuCorreo`, `UsuUsername`, `UsuPassword`, `RolCodigo`, `UsuEstado`) VALUES
	(1, 'Angel', 'Silva', 'asilvaa4@unemi.edu.ec', 'asilva', 'silvaa', 1, b'1'),
	(2, 'Bryan', 'Pazmiño', 'bpazmino@unemi.edu.ec', 'bpazminol', '123456', 1, b'1'),
	(9, 'Marcelo', 'NuÃ±ez', 'nnumez@gmail.com', 'nnumez@gmail.com', '123456', 2, b'1'),
	(10, 'Leo', 'Kennedy', 'leo@gmail.com', 'leo@gmail.com', '123456', 2, b'1');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

-- Volcando estructura para tabla carrito.venta
CREATE TABLE IF NOT EXISTS `venta` (
  `VenCodigo` int(11) NOT NULL AUTO_INCREMENT,
  `UsuCodigo` int(11) NOT NULL,
  `ArtCodigo` int(11) NOT NULL,
  `VenCuenta` varchar(16) NOT NULL,
  `BanCodigo` int(11) NOT NULL,
  `TipCodigo` int(11) NOT NULL,
  `VenCantidad` int(11) NOT NULL,
  `VenTotal` decimal(10,2) NOT NULL,
  `VenFecha` datetime NOT NULL,
  PRIMARY KEY (`VenCodigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla carrito.venta: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
REPLACE INTO `venta` (`VenCodigo`, `UsuCodigo`, `ArtCodigo`, `VenCuenta`, `BanCodigo`, `TipCodigo`, `VenCantidad`, `VenTotal`, `VenFecha`) VALUES
	(1, 9, 3, '1111111111111111', 1, 2, 2, 132.00, '2019-01-31 16:34:31'),
	(2, 9, 6, '1111111111111112', 3, 1, 2, 84.00, '2019-01-31 17:58:40'),
	(3, 9, 5, '1243711896111100', 2, 1, 1, 49.00, '2019-02-01 00:00:00'),
	(4, 10, 8, '1111111111111119', 1, 1, 1, 48.00, '2019-02-01 00:46:49'),
	(5, 10, 10, '1454511111111111', 2, 2, 1, 70.00, '2019-02-01 00:47:17');
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
