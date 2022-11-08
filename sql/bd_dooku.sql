-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2022 a las 15:13:25
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_man`
--

CREATE TABLE `tbl_man` (
  `id_man` int(11) NOT NULL,
  `nombre_man` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` char(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `username` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_man`
--

INSERT INTO `tbl_man` (`id_man`, `nombre_man`, `dni`, `username`, `password`) VALUES
(1, 'uiliam', '54987812X', 'luquitas11', '5d56fed4e243d657c6ae1af13adb709690cd7c51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mesa`
--

CREATE TABLE `tbl_mesa` (
  `id_mesa` int(11) NOT NULL,
  `ubicacion` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `capacidad` int(2) NOT NULL,
  `disponibilidad` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_mesa`
--

INSERT INTO `tbl_mesa` (`id_mesa`, `ubicacion`, `capacidad`, `disponibilidad`) VALUES
(1, 'sala_privada', 8, 'Libre'),
(2, 'terrassa', 4, 'Libre'),
(3, 'principal', 2, 'Libre'),
(4, 'sala_privada', 6, 'Ocupada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reserva`
--

CREATE TABLE `tbl_reserva` (
  `id_reserva` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_mesa` int(11) NOT NULL,
  `nom_persona` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `hora_inici` datetime NOT NULL DEFAULT current_timestamp(),
  `hora_fi` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nombre_user` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` char(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `username` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_man`
--
ALTER TABLE `tbl_man`
  ADD PRIMARY KEY (`id_man`);

--
-- Indices de la tabla `tbl_mesa`
--
ALTER TABLE `tbl_mesa`
  ADD PRIMARY KEY (`id_mesa`);

--
-- Indices de la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_mesa` (`id_mesa`);

--
-- Indices de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_man`
--
ALTER TABLE `tbl_man`
  MODIFY `id_man` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_mesa`
--
ALTER TABLE `tbl_mesa`
  MODIFY `id_mesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
