-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-08-2024 a las 00:39:47
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

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
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_per` int(11) NOT NULL,
  `tipo_permiso` varchar(50) NOT NULL,
  `fecha_creacion_per` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Almacena la fecha de creación del registro',
  `estado_per` tinyint(1) DEFAULT 1 COMMENT '1 es permiso activo, 0 es permiso eliminado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_per`, `tipo_permiso`, `fecha_creacion_per`, `estado_per`) VALUES
(1, 'Administrador', '2024-08-04 22:26:40', 1),
(2, 'Estudiante', '2024-08-04 22:26:41', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usu` int(11) NOT NULL,
  `id_permiso` int(11) DEFAULT NULL,
  `nom_usu` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `sexo` bit(1) NOT NULL COMMENT '1 es Masculino y 2 es Femenino',
  `fecha_creacion_usu` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Almacena la fecha de creación del registro',
  `estado_usu` tinyint(1) DEFAULT 1 COMMENT '1 es usuario activo, 0 es usuario eliminado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `id_permiso`, `nom_usu`, `pass`, `sexo`, `fecha_creacion_usu`, `estado_usu`) VALUES
(1, 1, 'Admin', '51573M45', b'1', '2024-08-04 22:26:41', 1),
(2, 2, 'Estudiante', 'PRUEBA', b'1', '2024-08-04 22:26:41', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_per`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
