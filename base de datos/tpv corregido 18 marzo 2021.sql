-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: database-empresaurios.crf8ien6xwwp.us-west-1.rds.amazonaws.com:3306
-- Tiempo de generación: 18-03-2021 a las 21:23:22
-- Versión del servidor: 8.0.20
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int DEFAULT NULL,
  `detalles` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`, `estado`, `detalles`) VALUES
(1, 'papeleria', 0, ''),
(2, 'verduras', 0, ''),
(3, 'bebidas', 0, ''),
(4, 'Carnes', 1, 'Carnes Frias'),
(6, 'Lacteos', 1, 'qwerty'),
(9, 'Botanas', 1, 'Botanas en bolsas'),
(10, 'Moviles', 1, 'Dispositivos electronicos'),
(11, 'Telefonia Movil', 1, 'N/D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `codigo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int NOT NULL,
  `ciudad` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `colonia` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `codigo`, `nombres`, `telefono`, `ciudad`, `colonia`, `direccion`, `correo`, `fecha_registro`) VALUES
(1, 'si', 'como cno', 123123123, '', '', 'sds', 'luis@ejemplo.com', '0000-00-00'),
(3, '9989894udd', 'maria', 2, '', '', 'colonia 21 entr 69 y 12', 'luis@ejemplo.com', '0000-00-00'),
(5, 'sdsd3e3rd', 'sds', 22133, '', '', 'enrique segonviano', 'feik@hotmail.com', '0000-00-00'),
(6, 'sdsdsdssdsdsdsdsd', 'sds ', 22133, '', '', 'enrique segonviano', 'feik@hotmail.com', '0000-00-00'),
(8, '45849fjf4', 'hola pero sin 1', 123123123, '', '', 'calle 332 entr 678 y 79', 'hola@hotmail.com', '0000-00-00'),
(11, '1', '1', 23232, '', '', '1', 'hola@hotmail.com', '2021-03-17'),
(12, '2222323ddd', 'JUAN DE LA MANCHA', 112, 'CANCUN', 'NOSE', 'CANCUN AVENDIA CANCUN', 'cancun@hotmail.com', '2021-03-17'),
(13, '22deded3e', 'señora y', 2232321, 'ciudad de la señora x', 'colonia de la señora x', 'direccion de la señora x', 'señorax@gmail.com', '2021-02-06'),
(14, 'asd', 'sdsd', 0, 'sd', 'sd', 'sd', 'sdsdsd', '2021-02-06'),
(15, 'pedro juan2321', 'pedro juan', 33453, 'ciuad e juan', 'colonia de juan', 'direccion de pedro jua', 'coloina@hotmail.com', '2021-02-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

DROP TABLE IF EXISTS `detalle_pedido`;
CREATE TABLE IF NOT EXISTS `detalle_pedido` (
  `id_detalle_pedido` int NOT NULL AUTO_INCREMENT,
  `id_pedido` int DEFAULT NULL,
  `id_usuario` int NOT NULL,
  `id_producto` int NOT NULL,
  `nombre_producto` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_proveedor` int NOT NULL,
  `cantidad` float NOT NULL,
  `precio_venta` float NOT NULL,
  `importe` float NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`id_detalle_pedido`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `detalle_pedido`
--

INSERT INTO `detalle_pedido` (`id_detalle_pedido`, `id_pedido`, `id_usuario`, `id_producto`, `nombre_producto`, `id_proveedor`, `cantidad`, `precio_venta`, `importe`, `estado`) VALUES
(4, NULL, 1, 3, 'leche', 30, 2, 25, 50, 0),
(5, NULL, 1, 3, 'leche', 30, 2, 25, 50, 0),
(6, NULL, 1, 3, 'leche', 30, 4, 25, 100, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

DROP TABLE IF EXISTS `detalle_venta`;
CREATE TABLE IF NOT EXISTS `detalle_venta` (
  `id_detalle_venta` int NOT NULL AUTO_INCREMENT,
  `id_venta` int NOT NULL,
  `id_producto` int NOT NULL,
  `precio_venta` int NOT NULL,
  `cantidad` int NOT NULL,
  `importe` float NOT NULL,
  PRIMARY KEY (`id_detalle_venta`)
) ENGINE=InnoDB AUTO_INCREMENT=183 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`id_detalle_venta`, `id_venta`, `id_producto`, `precio_venta`, `cantidad`, `importe`) VALUES
(1, 1, 1, 0, 1, 40),
(2, 1, 1, 0, 13, 633),
(3, 1, 3, 0, 1, 25),
(4, 1, 2, 0, 1, 40),
(5, 1, 1, 0, 1, 60),
(6, 1, 1, 0, 1, 60),
(7, 1, 1, 0, 1, 60),
(8, 1, 1, 0, 1, 60),
(9, 1, 1, 0, 1, 60),
(10, 1, 2, 0, 1, 40),
(11, 1, 1, 0, 1, 60),
(12, 1, 1, 0, 1, 60),
(13, 1, 1, 0, 1, 60),
(14, 1, 1, 0, 1, 60),
(15, 1, 1, 0, 1, 60),
(16, 1, 1, 0, 1, 60),
(17, 1, 1, 0, 1, 60),
(18, 1, 1, 0, 1, 60),
(19, 1, 1, 0, 1, 60),
(20, 1, 1, 0, 3, 60),
(21, 1, 1, 0, 1, 60),
(22, 1, 1, 0, 1, 60),
(23, 1, 1, 0, 1, 60),
(24, 1, 1, 0, 1, 60),
(25, 1, 1, 0, 1, 60),
(26, 1, 2, 0, 1, 40),
(27, 1, 2, 0, 1, 40),
(28, 1, 1, 0, 1, 60),
(29, 1, 1, 0, 2, 60),
(30, 1, 2, 0, 2, 40),
(31, 1, 3, 0, 2, 25),
(32, 1, 3, 0, 2, 25),
(33, 1, 3, 0, 2, 25),
(34, 1, 4, 0, 2, 32),
(35, 1, 1, 0, 2, 60),
(36, 2, 1, 0, 5, 300),
(37, 2, 2, 0, 3, 120),
(38, 2, 2, 0, 3, 120),
(39, 2, 2, 0, 3, 120),
(40, 2, 4, 0, 14, 448),
(41, 2, 1, 0, 1, 60),
(42, 2, 1, 0, 1, 60),
(43, 2, 2, 0, 3, 120),
(45, 3, 1, 0, 3, 180),
(46, 3, 2, 0, 3, 120),
(47, 3, 1, 0, 1, 60),
(48, 3, 1, 0, 1, 60),
(49, 3, 1, 0, 1, 60),
(50, 3, 1, 0, 1, 60),
(51, 3, 1, 0, 1, 60),
(52, 3, 1, 0, 1, 60),
(53, 3, 1, 0, 1, 60),
(54, 3, 1, 0, 1, 60),
(55, 3, 1, 0, 1, 60),
(56, 3, 1, 0, 1, 60),
(57, 3, 1, 0, 1, 60),
(58, 3, 1, 0, 1, 60),
(59, 3, 1, 0, 1, 60),
(60, 3, 1, 0, 1, 60),
(61, 3, 2, 0, 6, 240),
(78, 4, 2, 0, 3, 120),
(79, 4, 2, 0, 9, 360),
(80, 13, 1, 0, 2, 120),
(81, 13, 3, 0, 4, 100),
(82, 13, 5, 0, 4, 88),
(83, 14, 5, 0, 8, 176),
(84, 15, 5, 0, 3, 66),
(85, 15, 2, 0, 3, 120),
(86, 16, 2, 0, 6, 240),
(87, 17, 2, 0, 5, 200),
(88, 17, 5, 0, 8, 176),
(89, 17, 1, 0, 1, 60),
(90, 17, 1, 0, 3, 180),
(91, 18, 1, 0, 17, 1020),
(92, 18, 5, 0, 6, 132),
(93, 18, 2, 0, 4, 160),
(94, 19, 2, 0, 5, 200),
(95, 19, 5, 0, 4, 88),
(96, 20, 5, 0, 3, 66),
(97, 21, 2, 0, 5, 200),
(98, 21, 1, 0, 3, 180),
(99, 21, 5, 0, 2, 44),
(100, 21, 3, 0, 2, 50),
(101, 22, 3, 0, 3, 75),
(102, 23, 1, 0, 1, 60),
(103, 24, 1, 0, 2, 120),
(104, 24, 2, 0, 1, 40),
(105, 25, 2, 0, 3, 120),
(106, 26, 2, 0, 3, 120),
(107, 27, 2, 0, 9, 360),
(108, 28, 1, 0, 1, 60),
(109, 29, 1, 0, 1, 60),
(110, 29, 1, 0, 1, 60),
(111, 29, 1, 0, 1, 60),
(112, 31, 1, 0, 1, 60),
(113, 32, 1, 0, 1, 60),
(114, 32, 1, 0, 1, 60),
(115, 33, 1, 0, 6, 360),
(116, 34, 1, 0, 1, 60),
(117, 34, 1, 0, 3, 180),
(118, 35, 1, 0, 2, 120),
(124, 37, 1, 0, 10, 600),
(126, 39, 1, 0, 1, 60),
(127, 40, 1, 0, 1, 60),
(128, 41, 2, 0, 1, 40),
(130, 43, 26, 0, 1, 200),
(131, 43, 26, 0, 4, 800),
(132, 44, 26, 0, 3, 600),
(133, 44, 27, 0, 2, 444),
(134, 44, 2, 0, 1, 40),
(135, 45, 2, 0, 1, 40),
(136, 45, 27, 0, 1, 222),
(137, 47, 27, 0, 4, 888),
(138, 47, 2, 0, 2, 80),
(139, 47, 1, 0, 5, 300),
(140, 48, 5, 0, 1, 22),
(141, 48, 2, 0, 2, 80),
(142, 48, 3, 0, 1, 25),
(143, 48, 4, 0, 1, 32),
(144, 48, 1, 0, 2, 120),
(145, 49, 2, 0, 5, 200),
(146, 49, 1, 0, 1, 60),
(147, 49, 27, 0, 4, 888),
(148, 49, 5, 0, 3, 66),
(149, 49, 25, 0, 1, 999),
(150, 51, 27, 0, 3, 666),
(151, 51, 2, 0, 2, 80),
(152, 53, 2, 0, 1, 40),
(153, 54, 2, 0, 2, 80),
(154, 54, 2, 0, 2, 80),
(155, 55, 2, 0, 2, 80),
(156, 55, 2, 0, 4, 160),
(157, 56, 2, 0, 2, 80),
(158, 57, 2, 0, 2, 80),
(159, 58, 2, 0, 4, 160),
(160, 58, 1, 0, 2, 120),
(161, 59, 2, 0, 1, 40),
(162, 60, 1, 0, 1, 60),
(163, 61, 1, 0, 3, 180),
(164, 62, 1, 0, 1, 60),
(165, 62, 1, 0, 4, 240),
(166, 63, 1, 0, 3, 180),
(167, 64, 1, 0, 3, 180),
(168, 65, 1, 0, 1, 60),
(169, 67, 1, 0, 4, 240),
(170, 68, 1, 0, 1, 60),
(171, 69, 1, 0, 2, 120),
(172, 70, 1, 0, 3, 180),
(173, 71, 1, 0, 2, 120),
(177, 75, 1, 0, 2, 120),
(178, 76, 1, 0, 2, 120),
(179, 77, 1, 0, 2, 120),
(180, 79, 1, 0, 2, 120),
(181, 79, 28, 0, 1, 7000),
(182, 79, 29, 0, 1, 600);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE IF NOT EXISTS `empleados` (
  `id_empleado` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `id_puesto` int NOT NULL,
  `id_jornada` int NOT NULL,
  PRIMARY KEY (`id_empleado`),
  UNIQUE KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `id_usuario`, `id_puesto`, `id_jornada`) VALUES
(1, 1, 9, 1),
(2, 28, 9, 1),
(3, 26, 9, 1),
(4, 27, 10, 5),
(5, 29, 9, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornadas_trabajo`
--

DROP TABLE IF EXISTS `jornadas_trabajo`;
CREATE TABLE IF NOT EXISTS `jornadas_trabajo` (
  `id_jornada` int NOT NULL AUTO_INCREMENT,
  `nombre_horario` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_entrada` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_salida` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_jornada`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `jornadas_trabajo`
--

INSERT INTO `jornadas_trabajo` (`id_jornada`, `nombre_horario`, `h_entrada`, `h_salida`) VALUES
(1, 'matutino', '09:00', '15:00'),
(5, 'nocturno', '18:00', '23:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

DROP TABLE IF EXISTS `marcas`;
CREATE TABLE IF NOT EXISTS `marcas` (
  `id_marcas` int NOT NULL AUTO_INCREMENT,
  `id_categoria` int NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_marcas`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marcas`, `id_categoria`, `nombre`) VALUES
(1, 3, 'nestle'),
(3, 1, 'Marca1'),
(4, 2, 'Foca'),
(5, 10, 'Samsung'),
(6, 11, 'Telcel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id_pedido` int NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`id_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_inventario`
--

DROP TABLE IF EXISTS `productos_inventario`;
CREATE TABLE IF NOT EXISTS `productos_inventario` (
  `id_producto` int NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio_costo` float DEFAULT NULL,
  `precio_venta` float DEFAULT NULL,
  `precio_mayoreo` float DEFAULT NULL,
  `unidad` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cantidad_stock` int DEFAULT NULL,
  `fecha_caducidad` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_categoria` int DEFAULT NULL,
  `id_marca` int DEFAULT NULL,
  `estado` int DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos_inventario`
--

INSERT INTO `productos_inventario` (`id_producto`, `nombre_producto`, `descripcion`, `codigo`, `precio_costo`, `precio_venta`, `precio_mayoreo`, `unidad`, `cantidad_stock`, `fecha_caducidad`, `foto`, `id_categoria`, `id_marca`, `estado`) VALUES
(1, 'cereal', 'cereal de la marca nestle', '01010101', 40, 60, 55, 'gramos', 10, '2021-02-28', '', 1, 1, 1),
(2, 'arroz', 'arroz de mexico', '20202', 30, 40, 35, 'gramos', 40, '2021-03-08', '', 2, 2, 1),
(3, 'leche', 'leche de 1 litro lala', '23123', 20, 25, 22, 'litros', 6, '2021-03-07', '', 3, 3, 1),
(4, 'pan', 'pan de bimbo', '4431', 12, 32, 22, 'gramos', 21, '2021-03-11', '', 4, 4, 1),
(5, 'jaobnes', 'jabones caros', '99999', 12, 22, 20, 'kg', 6, '2021-03-11', '', 5, 5, 1),
(26, 'bbbbbb', 'holaholahola', '8001', 150, 200, 180, 'Kilogramos', 401, '', NULL, 1, NULL, 1),
(27, 'actualizopro', 'bbbbcccc', '123123123', 200, 250, 444, 'nose', 645, '2022-12-06', NULL, 1, 2, 1),
(28, 'Celular Samsung A10 +plus', 'Celular Samsung A10 +plus 64Gb 4Ram', '336699', 6000, 7000, 6500, 'piezas', 50, '', NULL, NULL, 5, 1),
(29, 'Audifonos Samsung J3', 'Audífonos inalámbricos Samsung J3', '884411', 500, 600, 550, 'piezas', 40, '', NULL, NULL, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE IF NOT EXISTS `proveedores` (
  `id_proveedor` int NOT NULL AUTO_INCREMENT,
  `folio` int NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `localidad` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int NOT NULL,
  `correo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `rfc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `razon_social` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotografia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado_proveedor` int NOT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `folio`, `nombre`, `estado`, `municipio`, `localidad`, `direccion`, `telefono`, `correo`, `fecha_registro`, `rfc`, `razon_social`, `fotografia`, `estado_proveedor`) VALUES
(10, 2147483647, 'juan perez', 's', '', 'por ahi', 'como va sr', 2112344321, 'feik@hotmail.com', '0000-00-00', 'aqui esta', 'sdsdsdssdsdsdsdsdsdsd', '', 0),
(24, 666777444, 'katy perry', '', '', 'dsadasd', 'new york', 44439984, 'sadsdsaf@eqwe', '0000-00-00', 'nuevo rfc', 'eventos sociales', '', 0),
(27, 666777444, 'lady gaga', '', '', 'dsadasd', 'los angeles', 44439984, 'sadsdsaf@eqwe', '0000-00-00', '22323', 'eventos grandes', '', 0),
(28, 11111, 'Sabritas', '', '', 'papacity', 'papascalle', 24325980, 'papas@mail.com', '0000-00-00', '3323232', 'venta de sabritas', '', 0),
(29, 33434, 'saul santiago', '', '', 'cancun', 'cancun city', 222312341, 'saul@ejemplo.com', '0000-00-00', '222', 'estudiante', '', 0),
(30, 10101010, 'señor 100', 'quintana roo', '', 'cancun', 'sdsd4', 0, 'luis@ejemplo.com.mx', '2021-02-06', 'dsds', 'sdsd', '', 1),
(31, 2147483647, 'juan de la mancha', 'yucatan', '', 'merida', 'calle3332 entre 432 y 21 colonia imagina', 2147483647, 'juan_del_mancha@hotmail.com', '2021-02-06', '2323232frfrf2323ff', 'Si jalaaaaaaaa', '', 1),
(35, 49989892, 'pppp', 'ppp', '', 'ppp', 'ppp', 231110, 'ppp@gmail.com', '2021-02-06', 'pppp', 'ppp', '', 1),
(36, 0, 'maria antonieta', '', '', '', 'enrique segoviano', 445555998, '', '2021-02-06', 'chavo_8asociado22s', 'actriz de comedia', '', 1),
(37, 2147483647, 'ProveedorEjemplo', 'activo', '', 'ciudadproveedor', 'Direccionproveedor', 2147483647, 'proveedor@mail.com', '2021-02-00', 'rfcproveedor', 'RazonProveedor', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

DROP TABLE IF EXISTS `puestos`;
CREATE TABLE IF NOT EXISTS `puestos` (
  `id_puesto` int NOT NULL AUTO_INCREMENT,
  `nombre_puesto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`id_puesto`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`id_puesto`, `nombre_puesto`, `estado`) VALUES
(9, 'administrador', 1),
(10, 'cajero', 1),
(11, 'prueba', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

DROP TABLE IF EXISTS `unidades`;
CREATE TABLE IF NOT EXISTS `unidades` (
  `id_unidad` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`id_unidad`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`id_unidad`, `nombre`) VALUES
(1, 'piezas'),
(2, 'kilogramos'),
(3, 'cajas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contrasenia` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotografia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `telefono`, `correo`, `usuario`, `contrasenia`, `fotografia`, `estado`) VALUES
(1, 'john', 'doe', 1234567890, 'john@email.com', 'admin', 'd^3pcLCFO@Ix', '1.jpg', 1),
(26, 'hola', 'prueba', 1112223334, 'hola@email.com', 'root', 'luB$#u3**Sr0', '1.jpg', 1),
(27, 'hola', 'asdf', 1112223334, 'hola@email.com', 'asdfads', 'adminadmin', '4.jpg', 1),
(28, 'hol', 'gonzalez', 1112223334, 'luis@email.com', 'asdfasdfasdfasdfa', 'adminadmin', '2.jpg', 1),
(29, 'prueba', 'prueba', 1234567890, 'hola@email.com', 'qwertyuiop', 'adminadmin', '1.jpg', 1),
(30, 'miguel ', 'garrido', 1234567890, 'miguel_g@email.com', 'miguel_garrido', 'rootadmin', '1.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

DROP TABLE IF EXISTS `ventas`;
CREATE TABLE IF NOT EXISTS `ventas` (
  `id_venta` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int NOT NULL,
  `id_empleado` int NOT NULL,
  `importe` int NOT NULL,
  PRIMARY KEY (`id_venta`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `id_cliente`, `id_empleado`, `importe`) VALUES
(1, 10, 23, 0),
(2, 3, 2, 10),
(3, 3, 3, 4),
(4, 3, 3, 480),
(7, 1, 1, 480),
(8, 1, 1, 480),
(9, 1, 1, 480),
(10, 1, 1, 480),
(11, 1, 1, 480),
(12, 1, 1, 480),
(13, 1, 1, 264),
(14, 1, 1, 22),
(15, 1, 1, 62),
(16, 1, 1, 102),
(17, 1, 1, 616),
(18, 1, 1, 1312),
(19, 1, 1, 288),
(20, 1, 1, 66),
(21, 1, 1, 474),
(22, 1, 1, 75),
(23, 1, 1, 60),
(24, 1, 1, 160),
(25, 1, 1, 120),
(26, 1, 1, 120),
(27, 1, 1, 360),
(28, 1, 1, 60),
(29, 1, 1, 180),
(30, 1, 1, 180),
(31, 1, 1, 60),
(32, 1, 1, 120),
(33, 1, 1, 360),
(34, 1, 1, 240),
(35, 1, 1, 120),
(37, 1, 1, 600),
(39, 1, 1, 60),
(40, 1, 1, 60),
(41, 1, 1, 40),
(43, 1, 1, 1000),
(44, 1, 1, 1084),
(45, 1, 1, 262),
(47, 1, 1, 2536),
(48, 1, 1, 279),
(49, 1, 1, 2213),
(50, 1, 1, 2213),
(51, 1, 1, 746),
(52, 1, 1, 0),
(53, 1, 1, 40),
(54, 1, 1, 80),
(55, 1, 1, 1),
(56, 1, 1, 0),
(57, 1, 1, 1),
(58, 1, 1, 280),
(59, 1, 1, 40),
(60, 1, 1, 60),
(61, 1, 1, 180),
(62, 1, 1, 300),
(63, 1, 1, 180),
(64, 1, 1, 180),
(65, 1, 1, 60),
(66, 1, 1, 1),
(67, 1, 1, 240),
(68, 1, 1, 60),
(69, 1, 1, 120),
(70, 1, 1, 180),
(71, 1, 1, 120),
(75, 1, 1, 120),
(76, 1, 1, 120),
(77, 1, 1, 120),
(78, 1, 1, 1),
(79, 1, 1, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
