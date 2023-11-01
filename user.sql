-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2023 a las 23:49:14
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

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
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_usuario`, `usuario`, `pass`, `tipo`, `direccion`, `correo`, `nombre`) VALUES
(1, 'laura', 'laura123', 'admin', '', '', ''),
(2, 'danny', 'danny123', 'user', '', '', ''),
(3, 'laura', 'laura123', '', '', '', ''),
(4, 'danny', 'danny123', '', '', '', ''),
(5, 'heydi11', 'hedyi123', 'admin', '', '', 'heydi'),
(6, 'sara22', 'sara123', 'user', '', '', 'sara'),
(7, '', '', '', '', '', ''),
(8, 'sofiaplus', '1234', '', 'dgisfgi', 'jshjs@gmail.com', 'sofia'),
(9, 'daniela1', 'danny123', '', 'cr 48a #82-14', 'daniela1@gmail.com', 'Daniela zapata'),
(10, 'dsasadds', '123456', '', 'asddsaasdasd', 'nasdnkjsad@gmadda', 'andres'),
(11, 'pupu', 'pupú', '', 'pupu', 'pupu@pupu', 'pupu'),
(12, 'papa', 'papa', '', 'papa', 'papa@papa', 'papa'),
(13, 'lauri', 'lauri', '', 'lauri', 'lauri', 'lauri'),
(14, 'pedro', 'pedro', '', 'pedro', 'pedro', 'pedro'),
(15, 'pjpj', 'pjpj', '', 'pjpj', 'pjpj', 'pjpj'),
(16, 'ciro', 'ciro', '', 'ciro', 'ciro', 'ciro'),
(17, 'veneca', 'veneca', 'user', '', '', 'veneca'),
(18, 'sebitas', 'sebitas1', 'user', '', '', 'sebas'),
(19, 'juliancito', 'julian1', 'user', 'la casa de su mama', 'julian@julian', 'julian');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
