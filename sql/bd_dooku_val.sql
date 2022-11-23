-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2022 a las 17:15:56
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

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
-- Estructura de tabla para la tabla `tbl_incidencia`
--

CREATE TABLE IF NOT EXISTS `tbl_incidencia` (
  `id_inc` int(11) NOT NULL AUTO_INCREMENT,
  `desc_inc` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `solu_inc` varchar(200) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `id_man_fk` int(11) DEFAULT NULL,
  `id_user_fk` int(11) NOT NULL,
  `id_mesa_fk` int(11) NOT NULL,
  PRIMARY KEY (`id_inc`),
  KEY `id_man_fk` (`id_man_fk`),
  KEY `id_user_fk` (`id_user_fk`),
  KEY `id_mesa_fk` (`id_mesa_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_incidencia`
--

INSERT INTO `tbl_incidencia` (`id_inc`, `desc_inc`, `solu_inc`, `id_man_fk`, `id_user_fk`, `id_mesa_fk`) VALUES
(9, 'La pata de una de las sillas se ha roto.', 'Arreglo de la pata izquierda de la silla.', 2, 1, 2),
(10, 'Porque es una mierda!', 'Ya no es una mierda lol', 2, 1, 6),
(11, 'La pata de una de las sillas se ha roto.', 'asd', 2, 1, 1),
(12, 'La pata de una de las sillas se ha roto.', 'Arreglo de la pata izquierda de la silla.', 2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_man`
--

CREATE TABLE IF NOT EXISTS `tbl_man` (
  `id_man` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_man` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` char(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `username` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id_man`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_man`
--

INSERT INTO `tbl_man` (`id_man`, `nombre_man`, `dni`, `username`, `password`) VALUES
(1, 'uiliam', '54987812X', 'luquitas11', '5d56fed4e243d657c6ae1af13adb709690cd7c51'),
(2, 'Alex', '46488089Y', 'alexm', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(4, 'mantenimiento1', '11111111A', 'mantenimie', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(5, 'mantenimiento2', '2222222A', 'mantenimie', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(6, 'mantenimiento3', '3333333F', 'mantenimie', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(7, 'mantenimiento4', '4444444F', 'mantenimie', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(8, 'mantenimiento5', '5555555R', 'mantenimie', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(9, 'Alex', '46488089F', 'asdafas', '12345'),
(10, 'Manel', 'AUCSYGJK9', 'Manel1', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mesa`
--

CREATE TABLE IF NOT EXISTS `tbl_mesa` (
  `id_mesa` int(11) NOT NULL AUTO_INCREMENT,
  `ubicacion` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `capacidad` int(2) NOT NULL,
  `disponibilidad` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id_mesa`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_mesa`
--

INSERT INTO `tbl_mesa` (`id_mesa`, `ubicacion`, `capacidad`, `disponibilidad`) VALUES
(1, 'salon', 4, 'Libre'),
(2, 'salon', 2, 'Libre'),
(3, 'salon', 2, 'Libre'),
(4, 'salon', 4, 'Libre'),
(5, 'salon', 4, 'Libre'),
(6, 'salon', 6, 'Libre'),
(7, 'salon', 2, 'Libre'),
(8, 'salon', 4, 'Libre'),
(9, 'salon', 6, 'Libre'),
(10, 'terraza', 2, 'Libre'),
(11, 'terraza', 4, 'Libre'),
(12, 'terraza', 4, 'Libre'),
(13, 'terraza', 4, 'Libre'),
(14, 'terraza', 2, 'Libre'),
(15, 'sala_privada1', 12, 'Libre'),
(16, 'sala_privada1', 12, 'Libre'),
(17, 'sala_privada2', 10, 'Libre'),
(18, 'sala_privada2', 2, 'Libre'),
(19, 'sala_privada2', 4, 'Libre'),
(20, 'sala_privada2', 6, 'Libre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reserva`
--

CREATE TABLE IF NOT EXISTS `tbl_reserva` (
  `id_reserva` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_mesa` int(11) NOT NULL,
  `nom_persona` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido_persona` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono_persona` char(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ocupacion_res` int(2) NOT NULL,
  `hora_inici` datetime NOT NULL DEFAULT current_timestamp(),
  `hora_fi` datetime DEFAULT NULL,
  `duracion` time DEFAULT NULL,
  PRIMARY KEY (`id_reserva`),
  KEY `id_user` (`id_user`),
  KEY `id_mesa` (`id_mesa`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_reserva`
--

INSERT INTO `tbl_reserva` (`id_reserva`, `id_user`, `id_mesa`, `nom_persona`, `apellido_persona`, `telefono_persona`, `ocupacion_res`, `hora_inici`, `hora_fi`, `duracion`) VALUES
(1, 1, 1, 'Pedro', '', '', 0, '2022-11-07 18:19:14', '2022-11-10 19:40:57', '00:00:00'),
(2, 2, 1, 'Pedro', '', '', 0, '2022-11-07 18:19:26', '2022-11-10 19:40:57', '00:00:00'),
(3, 1, 2, 'asdas', 'das', '654423432', 0, '2022-11-09 18:36:55', '2022-11-10 19:36:28', '00:00:00'),
(4, 1, 1, 'Funcioan', 'profa', '543123121', 0, '2022-11-09 18:37:44', '2022-11-10 19:40:57', '00:00:00'),
(5, 1, 3, 'Italo', 'Marques', '549878121', 0, '2022-11-09 19:30:03', '2022-11-09 19:31:35', '00:00:00'),
(19, 1, 1, 'asd', 'asda', '123456789', 0, '2022-11-11 15:20:46', '2022-11-11 18:16:21', '02:55:35'),
(20, 1, 2, 'Josejuan', 'asdad', '123456789', 0, '2022-11-11 15:20:57', '2022-11-14 23:34:16', '80:13:19'),
(21, 1, 3, 'Manel', 'Garcia Moreno', '676272272', 0, '2022-11-11 15:21:26', NULL, '00:00:00'),
(22, 1, 15, 'Alex', 'Garcia Moreno', '123123123', 0, '2022-11-11 17:55:25', '2022-11-11 17:56:03', '00:00:38'),
(23, 1, 3, 'Manel', 'Muga Lopez', '123123123', 0, '2022-11-11 17:58:57', NULL, '00:00:00'),
(24, 1, 5, 'Alex', 'Muga', '123123123', 0, '2022-11-11 18:00:46', '2022-11-11 18:00:59', '00:00:13'),
(25, 1, 1, 'asdsa', 'assda', '123123123', 0, '2022-11-11 18:10:53', '2022-11-11 18:16:21', '00:05:28'),
(26, 1, 1, 'asda', 'asd', '123123123', 0, '2022-11-11 18:12:13', '2022-11-11 18:16:21', '00:04:08'),
(27, 1, 1, 'asda', 'asda', '123123123', 0, '2022-11-11 18:16:38', '2022-11-14 18:30:05', '72:13:27'),
(28, 1, 1, 'Alex', 'Muga Lopez', '123321123', 0, '2022-11-11 18:20:32', '2022-11-14 18:30:05', '72:09:33'),
(29, 1, 9, 'Manel', 'Bear', '123456789', 0, '2022-11-14 18:40:00', NULL, NULL),
(30, 1, 1, 'as', 'as', '123456789', 0, '2022-11-14 23:13:57', '2022-11-14 23:14:22', '00:00:25'),
(32, 1, 2, 'Lucía', 'Martín Perez', '676676676', 0, '2022-11-15 22:57:06', '2022-11-15 22:57:45', '00:00:39'),
(33, 1, 1, 'ads', 'sadas', '123123123', 1, '2022-11-17 16:50:28', '2022-11-17 16:55:13', '00:04:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_user` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido_user` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` char(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `username` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nombre_user`, `apellido_user`, `dni`, `username`, `password`) VALUES
(1, 'uiliam', '0', '54987812X', 'uiliam11', '5d56fed4e243d657c6ae1af13adb709690cd7c51'),
(2, 'alex', '0', '63313410E', 'alex11', 'qweQWE123'),
(3, 'alejandro', '0', '05389476R', 'alejandro1', 'qweQWE123'),
(4, 'pedro', '0', '49841030F', 'pedro11', 'qweQWE123'),
(5, 'orlando', '0', '93283549B', 'orlando11', 'qweQWE123'),
(6, 'camarero1', 'muga1', '11111111A', 'camarero1', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(7, 'camarero2', 'muga2', '2222222A', 'camarero2', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(8, 'camarero3', 'muga3', '3333333F', 'camarero3', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(9, 'camarero4', '0', '4444444F', 'camarero4', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(10, 'camarero5', '0', '5555555U', 'camarero5', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_incidencia`
--
ALTER TABLE `tbl_incidencia`
  ADD CONSTRAINT `tbl_incidencia_ibfk_1` FOREIGN KEY (`id_user_fk`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_incidencia_ibfk_2` FOREIGN KEY (`id_man_fk`) REFERENCES `tbl_man` (`id_man`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_incidencia_ibfk_3` FOREIGN KEY (`id_mesa_fk`) REFERENCES `tbl_mesa` (`id_mesa`) ON DELETE CASCADE ON UPDATE CASCADE;

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
