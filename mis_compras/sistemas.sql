-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-08-2024 a las 20:21:00
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `tipo_categoria` int(11) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Almacena la fecha y la hora en que fue creado en la base de datos.',
  `estado_categoria` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 es activo 0 es eliminado.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `nombre_local` varchar(100) NOT NULL,
  `id_categoria` int(20) NOT NULL,
  `id_usuario` int(20) NOT NULL,
  `nombre_producto` int(11) NOT NULL,
  `precio_producto` int(11) NOT NULL,
  `cantidad_producto` int(11) NOT NULL,
  `fecha_compra` date NOT NULL COMMENT 'Aloja la fecha en que se realizó la compra.',
  `fecha_creacion_registro` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Almacena la fecha en que este registro fue creado en la base de datos.',
  `estado_compra` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 activo - 0 eliminado.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL COMMENT 'Identificador único para los usuarios',
  `tipo_permiso` varchar(255) NOT NULL,
  `fecha_creacion_per` datetime DEFAULT current_timestamp() COMMENT 'Fecha y hora del registro',
  `estado_per` tinyint(1) DEFAULT 1 COMMENT '1 es Permiso activo, 0 permiso eliminado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permiso`, `tipo_permiso`, `fecha_creacion_per`, `estado_per`) VALUES
(1, 'Administrador', '2024-08-04 17:34:03', 1),
(2, 'Estudiante', '2024-08-04 17:34:03', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usu` int(11) NOT NULL COMMENT 'Identificador único para los usuarios',
  `id_permiso` int(11) DEFAULT NULL COMMENT 'Clave foranea de la tabla permisos',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sexo` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 es Ninguno, 1 es Masculino y 2 es Femenino',
  `fecha_creacion_usu` datetime DEFAULT current_timestamp() COMMENT 'Fecha y hora del registro',
  `estado_usu` tinyint(1) DEFAULT 1 COMMENT '1 es Usuario activo, 0 usuario eliminado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `id_permiso`, `username`, `password`, `sexo`, `fecha_creacion_usu`, `estado_usu`) VALUES
(1, 1, 'Sistema', '51573M45', 1, '2024-08-04 17:34:03', 1),
(2, 2, 'prueba', '123456', 2, '2024-08-15 16:25:13', 1),
(3, 1, 'prueba2', '123456', 1, '2024-08-15 16:25:28', 1),
(4, 2, 'prueba3', '123456', 0, '2024-08-15 16:25:56', 1),
(7, 1, 'P', '123456789', 1, '2024-08-28 15:20:12', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permiso`),
  ADD UNIQUE KEY `tipo_permiso` (`tipo_permiso`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usu`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_permiso` (`id_permiso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador único para los usuarios', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador único para los usuarios', AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_permiso`) REFERENCES `permisos` (`id_permiso`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
