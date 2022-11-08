-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2022 a las 17:22:56
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_dooku`
--
CREATE DATABASE IF NOT EXISTS `bd_dooku` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `bd_dooku`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_man`
--

DROP TABLE IF EXISTS `tbl_man`;
CREATE TABLE IF NOT EXISTS `tbl_man` (
  `id_man` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_man` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` char(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `username` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id_man`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_man`
--

INSERT INTO `tbl_man` (`id_man`, `nombre_man`, `dni`, `username`, `password`) VALUES
(1, 'uiliam', '54987812X', 'luquitas11', '5d56fed4e243d657c6ae1af13adb709690cd7c51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mesa`
--

DROP TABLE IF EXISTS `tbl_mesa`;
CREATE TABLE IF NOT EXISTS `tbl_mesa` (
  `id_mesa` int(11) NOT NULL AUTO_INCREMENT,
  `ubicacion` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `capacidad` int(2) NOT NULL,
  `disponibilidad` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id_mesa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_mesa`
--

INSERT INTO `tbl_mesa` (`id_mesa`, `ubicacion`, `capacidad`, `disponibilidad`) VALUES
(1, 'sala_privada', 8, 'Libre'),
(2, 'terrassa', 4, 'Ocupado  '),
(3, 'principal', 2, 'Libre'),
(4, 'sala_privada', 6, 'Ocupada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reserva`
--

DROP TABLE IF EXISTS `tbl_reserva`;
CREATE TABLE IF NOT EXISTS `tbl_reserva` (
  `id_reserva` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_mesa` int(11) NOT NULL,
  `nom_persona` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `hora_inici` datetime NOT NULL DEFAULT current_timestamp(),
  `hora_fi` datetime DEFAULT NULL,
  PRIMARY KEY (`id_reserva`),
  KEY `id_user` (`id_user`),
  KEY `id_mesa` (`id_mesa`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_reserva`
--

INSERT INTO `tbl_reserva` (`id_reserva`, `id_user`, `id_mesa`, `nom_persona`, `hora_inici`, `hora_fi`) VALUES
(1, 1, 1, 'Pedro', '2022-11-07 18:19:14', NULL),
(2, 2, 1, 'Pedro', '2022-11-07 18:19:26', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_user` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` char(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `username` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nombre_user`, `dni`, `username`, `password`) VALUES
(1, 'uiliam', '54987812X', 'uiliam11', '5d56fed4e243d657c6ae1af13adb709690cd7c51'),
(2, 'alex', '63313410E', 'alex11', 'qweQWE123'),
(3, 'alejandro', '05389476R', 'alejandro1', 'qweQWE123'),
(4, 'pedro', '49841030F', 'pedro11', 'qweQWE123'),
(5, 'orlando', '93283549B', 'orlando11', 'qweQWE123');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  ADD CONSTRAINT `tbl_reserva_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_reserva_ibfk_2` FOREIGN KEY (`id_mesa`) REFERENCES `tbl_mesa` (`id_mesa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
