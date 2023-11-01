-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2023 a las 00:45:10
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `campihappy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `campo1` varchar(50) NOT NULL,
  `campo2` varchar(50) NOT NULL,
  `archivo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`id`, `nombre`, `descripcion`, `precio`, `categoria`, `campo1`, `campo2`, `archivo`) VALUES
(4, 'saddsa', 'esto es otra papa', '12500', 'frutas', 'fea', '32131231', 'indios-1024x576.png'),
(5, 'producto3', 'esto es otro producto', '12500', 'verduras', 'fea', '32131231', 'maxresdefault.jpg'),
(6, 'producto4', 'esto no se que es', '12500', 'granos', 'fea', '32131231', '10813287093_ef3cbdfb15_b.jpg'),
(7, 'Papas', 'Estas son unas papas que compro su papa', '12500', 'verduras', 'sumama', 'supapa', 'lost-in-translation-plano-medio.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mh_tbl_user`
--

CREATE TABLE `mh_tbl_user` (
  `password` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mh_tbl_user`
--

INSERT INTO `mh_tbl_user` (`password`, `correo`) VALUES
('passworduser', 'correouser@gmail.com'),
('passworduser', 'dayxas5@outlook.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_usuario`, `nombre`, `usuario`, `pass`, `tipo`, `correo`, `telefono`) VALUES
(1, 'laura', 'laura', 'sumama', 'admin', 'boba@boba', 'ese mismo'),
(3, 'loura', 'loura', 'sumama', 'user', 'boba@boba', ''),
(5, '', 'karen malparida', 'sumama', 'vendedor', 'boba@boba', '1231312313'),
(6, '', 'Karen', 'samy', 'vendedor', 'karen@karen', '3052515890'),
(7, '', 'KarenS', 'sammy', 'vendedor', 'karen@karen', '3052515890'),
(8, '', 'KarenSM', 'samy', 'admin', 'karen@karen', '3052515890'),
(9, '', 'laura13', 'laura456', 'user', 'papa@papa', ''),
(10, 'andres', 'andres', 'sumama', 'user', 'su@mama', ''),
(11, '', 'laur4', 'sumama', 'admin', 'laura@laura', '3123122222'),
(12, 'hernan', 'harnen', 'hernan', 'user', 'hernan@hernan', ''),
(13, 'heidy', 'heidy23', 'heidy123', 'user', 'heidy@heidy', ''),
(14, 'daniel', 'daniel', 'daniel123', 'user', 'daniel@daniel', ''),
(15, 'alex', 'dayxas', 'dayxas14', 'user', 'dayxas5@outlook.com', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
