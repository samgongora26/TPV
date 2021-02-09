-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 09, 2021 at 04:38 AM
-- Server version: 10.5.8-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpv`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(10) NOT NULL,
  `nombre_categoria` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(10) NOT NULL,
  `nombres` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(10) NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `colonia` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(10) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `id_empleado` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detalle_compra`
--

CREATE TABLE `detalle_compra` (
  `id_detalle_compra` int(10) NOT NULL,
  `id_producto` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `importe` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id_detalle_pedido` int(10) NOT NULL,
  `id_producto` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `importe` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `id_puesto` int(10) NOT NULL,
  `id_jornada` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jornadas_trabajo`
--

CREATE TABLE `jornadas_trabajo` (
  `id_jornada` int(10) NOT NULL,
  `h_entrada` time NOT NULL,
  `h_salida` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marcas`
--

CREATE TABLE `marcas` (
  `id_marcas` int(10) NOT NULL,
  `id_categoria` int(10) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(10) NOT NULL,
  `id_proveedor` int(10) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productos_inventario`
--

CREATE TABLE `productos_inventario` (
  `id_producto` int(10) NOT NULL,
  `nombre_producto` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio_costo` float NOT NULL,
  `precio_venta` float NOT NULL,
  `precio_mayoreo` float NOT NULL,
  `cantidad_stock` int(10) NOT NULL,
  `fecha_caducidad` date NOT NULL,
  `id_categoria` int(10) NOT NULL,
  `id_marca` int(10) NOT NULL,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(10) NOT NULL,
  `folio` int(10) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipio` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localidad` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(10) NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado_proveedor` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) NOT NULL,
  `nombres` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contrasenia` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`);

--
-- Indexes for table `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD PRIMARY KEY (`id_detalle_compra`);

--
-- Indexes for table `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id_detalle_pedido`);

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indexes for table `jornadas_trabajo`
--
ALTER TABLE `jornadas_trabajo`
  ADD PRIMARY KEY (`id_jornada`);

--
-- Indexes for table `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marcas`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indexes for table `productos_inventario`
--
ALTER TABLE `productos_inventario`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indexes for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detalle_compra`
--
ALTER TABLE `detalle_compra`
  MODIFY `id_detalle_compra` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id_detalle_pedido` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jornadas_trabajo`
--
ALTER TABLE `jornadas_trabajo`
  MODIFY `id_jornada` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marcas` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productos_inventario`
--
ALTER TABLE `productos_inventario`
  MODIFY `id_producto` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
