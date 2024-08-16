-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2024 a las 18:46:34
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
(4, 2, 'prueba3', '123456', 0, '2024-08-15 16:25:56', 1);

--
-- Índices para tablas volcadas
--

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
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador único para los usuarios', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador único para los usuarios', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
