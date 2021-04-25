-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: database-empresaurios.crf8ien6xwwp.us-west-1.rds.amazonaws.com
-- Tiempo de generación: 14-04-2021 a las 03:55:29
-- Versión del servidor: 8.0.20
-- Versión de PHP: 7.3.10

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
-- Estructura de tabla para la tabla `cajas`
--

CREATE TABLE `cajas` (
  `id_caja` int NOT NULL,
  `id_usuario` int NOT NULL,
  `fecha_abertura` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_cierre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monto_inicial` float NOT NULL,
  `monto_final` float DEFAULT NULL,
  `monto_final_ventas` float DEFAULT NULL,
  `corte` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cajas`
--

INSERT INTO `cajas` (`id_caja`, `id_usuario`, `fecha_abertura`, `fecha_cierre`, `monto_inicial`, `monto_final`, `monto_final_ventas`, `corte`) VALUES
(12, 1, '2021-04-10 22:58:45', '2021-04-11 00:37:26', 100, 5000, 672940, 1),
(13, 43, '2021-04-10 23:21:08', '', 10000, 0, NULL, 0),
(15, 44, '2021-04-11 00:33:03', '', 500, 0, NULL, 0),
(16, 1, '2021-04-11 00:40:53', '2021-04-11 02:41:55', 500, 100, 89, 1),
(17, 1, '2021-04-11 02:45:16', '2021-04-11 02:45:34', 100, 100, 0, 1),
(18, 1, '2021-04-11 03:05:49', '', 100, 0, NULL, 0),
(19, 35, '2021-04-13 06:01:25', '', 1500, 0, NULL, 0),
(20, 45, '2021-04-13 06:06:07', '', 2000, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int NOT NULL,
  `nombre_categoria` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `detalles` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_marca` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`, `detalles`, `id_marca`) VALUES
(1, 'papeleria', '', 0),
(2, 'verduras', '', 0),
(3, 'bebidas', '', 0),
(4, 'Carnes', 'Carnes Frias', 0),
(6, 'Lacteos', 'qwerty', 0),
(9, 'Botanas', 'Botanas en bolsas', 0),
(10, 'Moviles', 'Dispositivos electronicos', 0),
(11, 'Telefonia Movil', 'N/D', 0),
(12, 'CategoriaNuevoEjemplo', 'Holaholaaaaa', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int NOT NULL,
  `codigo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int NOT NULL,
  `ciudad` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `colonia` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `detalle_pedido` (
  `id_detalle_pedido` int NOT NULL,
  `id_pedido` int DEFAULT NULL,
  `id_usuario` int NOT NULL,
  `id_producto` int NOT NULL,
  `nombre_producto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` float NOT NULL,
  `precio_compra` float NOT NULL,
  `importe` float NOT NULL,
  `estado` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `detalle_pedido`
--

INSERT INTO `detalle_pedido` (`id_detalle_pedido`, `id_pedido`, `id_usuario`, `id_producto`, `nombre_producto`, `cantidad`, `precio_compra`, `importe`, `estado`) VALUES
(16, 14, 1, 3, 'leche', 2, 20, 40, 1),
(17, 15, 1, 3, 'leche', 1, 20, 20, 1),
(18, 16, 1, 1, 'cereal', 2, 40, 80, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id_detalle_venta` int NOT NULL,
  `id_venta` int NOT NULL,
  `id_producto` int NOT NULL,
  `precio_venta` int NOT NULL,
  `cantidad` int NOT NULL,
  `importe` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`id_detalle_venta`, `id_venta`, `id_producto`, `precio_venta`, `cantidad`, `importe`) VALUES
(286, 188, 4, 32, 11, 352),
(287, 188, 26, 200, 6, 1200),
(288, 190, 1, 60, 1, 60),
(289, 190, 26, 200, 7, 1400),
(290, 191, 4, 32, 1, 32),
(291, 186, 4, 32, 2, 64),
(292, 193, 3, 25, 1, 25),
(293, 193, 4, 32, 1, 32),
(294, 189, 2, 40, 2, 80),
(295, 189, 28, 7000, 1, 7000),
(296, 189, 30, 550, 2, 1100),
(297, 194, 4, 32, 1, 32),
(298, 195, 30, 550, 2, 1100),
(299, 197, 26, 200, 0, 0),
(300, 198, 2, 40, 2, 80),
(301, 198, 30, 550, 1, 550),
(302, 203, 2, 40, 1, 28),
(303, 203, 30, 550, 1, 550),
(304, 200, 28, 7000, 2, 14000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int NOT NULL,
  `id_usuario` int NOT NULL,
  `id_puesto` int NOT NULL,
  `id_jornada` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `id_usuario`, `id_puesto`, `id_jornada`) VALUES
(1, 1, 9, 5),
(4, 27, 9, 1),
(8, 31, 9, 1),
(10, 30, 10, 5),
(11, 28, 9, 5),
(12, 26, 9, 5),
(18, 35, 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornadas_trabajo`
--

CREATE TABLE `jornadas_trabajo` (
  `id_jornada` int NOT NULL,
  `nombre_horario` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_entrada` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_salida` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `marcas` (
  `id_marcas` int NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marcas`, `nombre`, `estado`) VALUES
(1, 'nestle', 0),
(3, 'Marca1', 0),
(4, 'Foca', 0),
(5, 'Samsung', 0),
(6, 'Telcel', 0),
(7, '1', 0),
(8, 'MarcaNuevoEjemplo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int NOT NULL,
  `id_usuario` int NOT NULL,
  `fecha` date NOT NULL,
  `total` float NOT NULL,
  `pagado` float NOT NULL,
  `estado` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_usuario`, `fecha`, `total`, `pagado`, `estado`) VALUES
(14, 1, '2021-04-10', 40, 40, 1),
(15, 1, '2021-04-09', 20, 20, 1),
(16, 1, '2021-04-09', 80, 100, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_inventario`
--

CREATE TABLE `productos_inventario` (
  `id_producto` int NOT NULL,
  `nombre_producto` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio_costo` float DEFAULT NULL,
  `precio_venta` float DEFAULT NULL,
  `precio_mayoreo` float DEFAULT NULL,
  `unidad` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cantidad_stock` int DEFAULT NULL,
  `stock_min` int DEFAULT NULL,
  `stock_max` int DEFAULT NULL,
  `fecha_caducidad` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_categoria` int DEFAULT NULL,
  `id_marca` int DEFAULT NULL,
  `promocion_porcentaje` int DEFAULT NULL,
  `estado` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos_inventario`
--

INSERT INTO `productos_inventario` (`id_producto`, `nombre_producto`, `descripcion`, `codigo`, `precio_costo`, `precio_venta`, `precio_mayoreo`, `unidad`, `cantidad_stock`, `stock_min`, `stock_max`, `fecha_caducidad`, `foto`, `id_categoria`, `id_marca`, `promocion_porcentaje`, `estado`) VALUES
(1, 'cereal', 'cereal de la marca nestle', '01010101', 40, 60, 55, 'gramos', 12, NULL, NULL, '2021-02-28', '', 1, 1, 0, 1),
(2, 'arroz', 'arroz de mexico', '20202', 30, 40, 35, 'gramos', 47, NULL, NULL, '2021-03-08', 'arroz.jpeg', 2, 2, 30, 1),
(3, 'leche', 'leche de 1 litro lala', '23123', 20, 25, 22, 'litros', 37, NULL, NULL, '2021-03-07', 'leche_lala.jpeg', 3, 3, 20, 1),
(4, 'pan', 'pan de bimbo', '4431', 12, 32, 22, 'gramos', 21, NULL, NULL, '2021-03-11', '', 4, 4, 0, 1),
(5, 'jaobnes', 'jabones caros', '99999', 12, 22, 20, 'kg', 8, NULL, NULL, '2021-03-11', '', 5, 5, 0, 1),
(26, 'bbbbbb', 'holaholahola', '8001', 150, 200, 180, 'Kilogramos', 419, NULL, NULL, '', NULL, 1, NULL, 0, 1),
(27, 'actualizopro', 'bbbbcccc', '123123123', 200, 250, 444, 'nose', 645, NULL, NULL, '2022-12-06', NULL, 1, 2, 0, 1),
(28, 'Celular Samsung A10 +plus', 'Celular Samsung A10 +plus 64Gb 4Ram', '336699', 6000, 7000, 6500, 'piezas', 50, NULL, NULL, '', NULL, NULL, 5, 0, 1),
(29, 'Audifonos Samsung J3', 'Audífonos inalámbricos Samsung J3', '884411', 500, 600, 550, 'piezas', 40, NULL, NULL, '', NULL, NULL, 5, 0, 1),
(30, 'Reloj Samsung KLMXD', 'Reloj Samsung KLMXD Color Rojo/Verde/Amarillo/Negr', '554433', 500, 550, 530, 'piezas', 60, NULL, NULL, '', NULL, NULL, 5, 0, 1),
(31, 'Leche Nestle Fresa', 'Leche Nestle Sabor Fresa 700ml', '545421', 50, 60, 55, 'cajas', 50, 5, 100, '2021-10-28', NULL, NULL, 1, 0, 1),
(32, 'Yogurt sabor Fresa Nestle', 'Yogurt sabor Fresa Nestle 1L', '8855222', 20, 30, 25, 'piezas', 60, 20, 150, '2021-11-10', NULL, NULL, 1, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int NOT NULL,
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
  `estado_proveedor` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `folio`, `nombre`, `estado`, `municipio`, `localidad`, `direccion`, `telefono`, `correo`, `fecha_registro`, `rfc`, `razon_social`, `fotografia`, `estado_proveedor`) VALUES
(10, 2147483647, 'juan perez', 's', '', 'por ahi', 'como va sr', 2112344321, 'feik@hotmail.com', '0000-00-00', 'aqui esta', 'sdsdsdssdsdsdsdsdsdsd', '', 0),
(24, 666777444, 'katy perry', '', '', 'dsadasd', 'new york', 44439984, 'sadsdsaf@eqwe', '0000-00-00', 'nuevo rfc', 'eventos sociales', '', 0),
(27, 666777444, 'lady gaga', '', '', 'dsadasd', 'los angelesssssssssssssssssssssssssssss', 44439984, 'sadsdsaf@eqwe', '0000-00-00', '22323', 'eventos grandes', '', 0),
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

CREATE TABLE `puestos` (
  `id_puesto` int NOT NULL,
  `nombre_puesto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`id_puesto`, `nombre_puesto`) VALUES
(9, 'administrador'),
(10, 'cajero'),
(13, 'Cerillito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE `unidades` (
  `id_unidad` int NOT NULL,
  `nombre` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `usuarios` (
  `id_usuario` int NOT NULL,
  `nombres` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contrasenia` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotografia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `telefono`, `correo`, `usuario`, `contrasenia`, `fotografia`, `estado`) VALUES
(1, 'john', 'doe', 1234567890, 'john@email.com', 'admin', 'ulala', '1.jpg', 1),
(26, 'hola', 'prueba', 1112223334, 'hola@email.com', 'root', 'luB$#u3**Sr0', '2.jpg', 1),
(27, 'hola', 'asdf', 1112223334, 'hola@email.com', 'asdfads', 'adminadmin', '1.jpg', 1),
(28, 'daniel', 'gonzalez', 1112223334, 'daniel@email.com', 'holahola', 'qwerty', '1.jpg', 1),
(30, 'miguel ', 'garrido', 1234567890, 'miguel_g@email.com', 'miguel_garrido', 'rootadmin', '1.jpg', 1),
(31, 'prueba', 'garrido', 1112223334, 'miguel@email.com', 'asdfasdfa', 'qwerty', '1.jpg', 2),
(35, 'nuevo ', 'usuario', 1324657980, 'asdf@email.com', 'user1', 'adminadmin', '1.jpg', 1),
(43, 'luis', 'tzun', 1234567890, 'luis@email.com', 'acamas123', 'acamas123', '1.jpg', 1),
(44, 'Daniel', 'Gonzalez', 2147483647, 'feltydany.dgm@gmail.com', 'daniel', 'qwertyuiop', '1.jpg', 1),
(45, 'Osly', 'Rodriguez', 2147483647, 'ovni@gmail.com', 'oossllyy', '1234567890', '1.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int NOT NULL,
  `id_cliente` int NOT NULL,
  `id_empleado` int NOT NULL,
  `importe` int NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `corte` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `id_cliente`, `id_empleado`, `importe`, `estado`, `corte`) VALUES
(1, 10, 23, 35000, 0, 0),
(2, 3, 2, 10, 0, 0),
(3, 3, 3, 4, 0, 0),
(4, 3, 3, 480, 0, 0),
(7, 1, 1, 480, 0, 1),
(8, 1, 1, 480, 0, 1),
(9, 1, 1, 480, 0, 1),
(10, 1, 1, 480, 0, 1),
(11, 1, 1, 480, 0, 1),
(12, 1, 1, 480, 0, 1),
(13, 1, 1, 264, 0, 1),
(14, 1, 1, 22, 0, 1),
(15, 1, 1, 62, 0, 1),
(16, 1, 1, 102, 0, 1),
(17, 1, 1, 616, 0, 1),
(18, 1, 1, 1312, 0, 1),
(19, 1, 1, 288, 0, 1),
(20, 1, 1, 66, 0, 1),
(21, 1, 1, 474, 0, 1),
(22, 1, 1, 75, 0, 1),
(23, 1, 1, 60, 0, 1),
(24, 1, 1, 160, 0, 1),
(25, 1, 1, 120, 0, 1),
(26, 1, 1, 120, 0, 1),
(27, 1, 1, 360, 0, 1),
(28, 1, 1, 60, 0, 1),
(29, 1, 1, 180, 0, 1),
(30, 1, 1, 180, 0, 1),
(31, 1, 1, 60, 0, 1),
(32, 1, 1, 120, 0, 1),
(33, 1, 1, 360, 0, 1),
(34, 1, 1, 240, 0, 1),
(35, 1, 1, 120, 0, 1),
(37, 1, 1, 600, 0, 1),
(39, 1, 1, 60, 0, 1),
(40, 1, 1, 60, 0, 1),
(41, 1, 1, 40, 0, 1),
(43, 1, 1, 1000, 0, 1),
(44, 1, 1, 1084, 0, 1),
(45, 1, 1, 262, 0, 1),
(47, 1, 1, 2536, 0, 1),
(48, 1, 1, 279, 0, 1),
(49, 1, 1, 2213, 0, 1),
(50, 1, 1, 2213, 0, 1),
(51, 1, 1, 746, 0, 1),
(52, 1, 1, 0, 0, 1),
(53, 1, 1, 40, 0, 1),
(54, 1, 1, 80, 0, 1),
(55, 1, 1, 1, 0, 1),
(56, 1, 1, 0, 0, 1),
(57, 1, 1, 1, 0, 1),
(58, 1, 1, 280, 0, 1),
(59, 1, 1, 40, 0, 1),
(60, 1, 1, 60, 0, 1),
(61, 1, 1, 180, 0, 1),
(62, 1, 1, 300, 0, 1),
(63, 1, 1, 180, 0, 1),
(64, 1, 1, 180, 0, 1),
(65, 1, 1, 60, 0, 1),
(66, 1, 1, 1, 0, 1),
(67, 1, 1, 240, 0, 1),
(68, 1, 1, 60, 0, 1),
(69, 1, 1, 120, 0, 1),
(70, 1, 1, 180, 0, 1),
(71, 1, 1, 120, 0, 1),
(75, 1, 1, 120, 0, 1),
(76, 1, 1, 120, 0, 1),
(77, 1, 1, 120, 0, 1),
(78, 1, 1, 1, 0, 1),
(79, 1, 1, 7720, 0, 1),
(80, 1, 1, 480, 0, 1),
(81, 1, 1, 8001, 0, 1),
(82, 1, 1, 14092, 0, 1),
(83, 1, 1, 1, 0, 1),
(84, 1, 1, 1, 0, 1),
(85, 1, 1, 1, 0, 1),
(86, 1, 1, 1, 0, 1),
(87, 1, 1, 1, 0, 1),
(88, 1, 1, 1, 0, 1),
(89, 1, 1, 1, 0, 1),
(90, 1, 1, 1, 0, 1),
(91, 1, 1, 1, 0, 1),
(92, 1, 1, 1, 0, 1),
(93, 1, 1, 1, 0, 1),
(94, 1, 1, 56000, 0, 1),
(95, 1, 1, 1, 0, 1),
(96, 1, 1, 1, 0, 1),
(97, 1, 1, 1, 0, 1),
(98, 1, 1, 192, 0, 1),
(99, 1, 1, 32, 0, 1),
(100, 1, 1, 49128, 0, 1),
(101, 1, 1, 14000, 0, 1),
(103, 1, 1, 32, 0, 1),
(104, 1, 1, 1, 0, 1),
(105, 1, 1, 1, 0, 1),
(106, 1, 1, 192, 0, 1),
(107, 1, 1, 256, 0, 1),
(108, 1, 1, 42096, 0, 1),
(109, 1, 1, 1, 0, 1),
(110, 1, 1, 1, 0, 1),
(111, 1, 1, 42000, 1, 1),
(114, 1, 1, 56920, 1, 1),
(115, 1, 27, 120, 0, 0),
(116, 1, 29, 7000, 1, 0),
(117, 1, 27, 0, 0, 0),
(118, 1, 29, 7000, 1, 0),
(119, 1, 27, 7000, 0, 0),
(120, 1, 27, 42000, 1, 0),
(121, 1, 29, 7000, 1, 0),
(122, 1, 29, 0, 1, 0),
(123, 1, 29, 35000, 1, 0),
(124, 1, 29, 35000, 1, 0),
(126, 1, 1, 72820, 1, 1),
(127, 1, 29, 7000, 1, 0),
(129, 1, 29, 0, 1, 0),
(130, 1, 1, 245000, 1, 1),
(131, 1, 29, 49000, 1, 0),
(132, 1, 0, 0, 0, 0),
(133, 1, 29, 7000, 1, 0),
(134, 1, 29, 0, 1, 0),
(135, 1, 29, 420, 1, 0),
(136, 1, 29, 0, 1, 0),
(137, 1, 31, 35000, 1, 0),
(138, 1, 1, 42000, 1, 1),
(139, 1, 1, 0, 0, 1),
(140, 1, 31, 80, 1, 0),
(141, 1, 29, 84200, 1, 0),
(142, 1, 31, 322, 1, 0),
(143, 1, 29, 43825, 1, 0),
(146, 1, 1, 1, 0, 1),
(147, 1, 31, 1407, 1, 0),
(148, 1, 31, 0, 0, 0),
(149, 1, 26, 0, 0, 0),
(150, 1, 33, 7798, 1, 0),
(151, 1, 33, 0, 0, 0),
(152, 1, 33, 0, 0, 0),
(153, 1, 33, 730, 1, 0),
(155, 1, 1, 80, 1, 1),
(156, 1, 33, 0, 0, 0),
(158, 1, 33, 500, 1, 0),
(159, 1, 33, 0, 0, 0),
(160, 1, 1, 1, 0, 1),
(162, 1, 29, 70480, 1, 0),
(163, 1, 32, 0, 0, 0),
(164, 1, 29, 0, 0, 0),
(165, 1, 29, 42000, 1, 0),
(166, 1, 29, 28000, 1, 0),
(167, 1, 29, 0, 0, 0),
(168, 1, 10, 0, 0, 0),
(169, 1, 10, 0, 0, 0),
(170, 1, 10, 0, 0, 0),
(171, 1, 10, 0, 0, 0),
(172, 1, 10, 0, 0, 0),
(173, 1, 10, 0, 0, 0),
(174, 1, 10, 0, 0, 0),
(175, 1, 10, 0, 0, 0),
(176, 1, 10, 0, 0, 0),
(177, 1, 10, 0, 0, 0),
(178, 1, 29, 0, 0, 0),
(179, 1, 29, 0, 0, 0),
(180, 1, 99999, 0, 0, 0),
(181, 1, 99999, 0, 0, 0),
(182, 1, 99999, 0, 0, 0),
(183, 1, 999888, 0, 0, 0),
(184, 1, 999888, 0, 0, 0),
(185, 1, 27, 0, 0, 0),
(186, 1, 1, 64, 1, 1),
(187, 1, 43, 600, 1, 0),
(188, 1, 43, 1552, 1, 0),
(189, 1, 44, 8180, 1, 0),
(190, 1, 43, 1460, 1, 0),
(191, 1, 43, 32, 1, 0),
(193, 1, 1, 57, 1, 1),
(194, 1, 1, 32, 1, 1),
(195, 1, 44, 1100, 1, 0),
(196, 1, 1, 0, 0, 1),
(197, 1, 44, 0, 1, 0),
(198, 1, 44, 630, 1, 0),
(199, 1, 1, 1, 0, 0),
(200, 1, 43, 14000, 1, 0),
(201, 1, 44, 0, 0, 0),
(202, 1, 35, 0, 0, 0),
(203, 1, 45, 578, 1, 0),
(204, 1, 45, 0, 0, 0),
(205, 1, 43, 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cajas`
--
ALTER TABLE `cajas`
  ADD PRIMARY KEY (`id_caja`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id_detalle_pedido`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id_detalle_venta`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `jornadas_trabajo`
--
ALTER TABLE `jornadas_trabajo`
  ADD PRIMARY KEY (`id_jornada`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marcas`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `productos_inventario`
--
ALTER TABLE `productos_inventario`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`id_puesto`);

--
-- Indices de la tabla `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`id_unidad`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cajas`
--
ALTER TABLE `cajas`
  MODIFY `id_caja` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id_detalle_pedido` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id_detalle_venta` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `jornadas_trabajo`
--
ALTER TABLE `jornadas_trabajo`
  MODIFY `id_jornada` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marcas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `productos_inventario`
--
ALTER TABLE `productos_inventario`
  MODIFY `id_producto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `puestos`
--
ALTER TABLE `puestos`
  MODIFY `id_puesto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id_unidad` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

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
