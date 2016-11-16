-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2016 a las 05:14:41
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `contabilidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_abono`
--

CREATE TABLE `tbl_abono` (
  `bono_cod` int(11) NOT NULL,
  `pres_cod` int(11) NOT NULL,
  `bono` decimal(10,0) NOT NULL,
  `fecha` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_prestamo`
--

CREATE TABLE `tbl_prestamo` (
  `pres_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `fecha_prestamo` varchar(10) COLLATE utf8_bin NOT NULL,
  `plazo_prestamo` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `usu` int(11) NOT NULL,
  `cedula` varchar(15) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(80) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(80) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(12) COLLATE utf8_bin NOT NULL,
  `pass` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`usu`, `cedula`, `nombre`, `apellido`, `telefono`, `pass`) VALUES
(1, '1036660480', 'wilton', 'acuÃ±a requena', '31111', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_rol`
--

CREATE TABLE `tb_rol` (
  `rol_cod` int(11) NOT NULL,
  `rol` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tb_rol`
--

INSERT INTO `tb_rol` (`rol_cod`, `rol`) VALUES
(1, 'Administrador'),
(2, 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_abono`
--
ALTER TABLE `tbl_abono`
  ADD KEY `pres_cod` (`pres_cod`);

--
-- Indices de la tabla `tbl_prestamo`
--
ALTER TABLE `tbl_prestamo`
  ADD PRIMARY KEY (`pres_cod`),
  ADD KEY `usu_cod` (`usu_cod`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`usu`);

--
-- Indices de la tabla `tb_rol`
--
ALTER TABLE `tb_rol`
  ADD PRIMARY KEY (`rol_cod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_prestamo`
--
ALTER TABLE `tbl_prestamo`
  MODIFY `pres_cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tb_rol`
--
ALTER TABLE `tb_rol`
  MODIFY `rol_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_abono`
--
ALTER TABLE `tbl_abono`
  ADD CONSTRAINT `tbl_abono_ibfk_1` FOREIGN KEY (`pres_cod`) REFERENCES `tbl_prestamo` (`pres_cod`);

--
-- Filtros para la tabla `tbl_prestamo`
--
ALTER TABLE `tbl_prestamo`
  ADD CONSTRAINT `tbl_prestamo_ibfk_1` FOREIGN KEY (`usu_cod`) REFERENCES `tbl_usuario` (`usu`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
