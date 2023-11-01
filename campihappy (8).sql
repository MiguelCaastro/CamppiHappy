-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2023 a las 18:49:12
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
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `campo1` varchar(50) NOT NULL,
  `campo2` varchar(50) NOT NULL,
  `archivo` varchar(50) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`id`, `nombre`, `descripcion`, `precio`, `categoria`, `campo1`, `campo2`, `archivo`, `id_usuario`) VALUES
(13, 'Champiñon', 'Tenemos buenos productos', '12500', 'verduras', 'www.facebook.com', 'https://wa.me/qr/LZIXIQKFM2RKM1', 'champiñon.jpeg', NULL),
(14, 'Brocoli', 'Brocoli Bueno y Fresco', '5000', 'verduras', 'www.facebook.com', 'https://wa.me/qr/LZIXIQKFM2RKM1', 'brocoli.jpg', NULL),
(15, 'Cebolla Larga', 'Fresca Cebolla ', '3000', 'verduras', 'www.facebook.com', 'https://wa.me/qr/LZIXIQKFM2RKM1', 'cebolla larga.jpg', NULL),
(16, 'Zanahoria', 'zanahoria fresca', '4000', 'verduras', 'www.facebook.com', 'https://wa.me/qr/LZIXIQKFM2RKM1', 'zanahoria.jpeg', NULL),
(17, 'Papa', 'Papas Buenas', '3500', 'verduras', 'www.facebook.com', 'https://wa.me/qr/LZIXIQKFM2RKM1', 'papa pastusa.jpg', NULL),
(18, 'Banano', 'Bananos Frescos', '5000', 'frutas', 'www.facebook.com', 'https://wa.me/qr/LZIXIQKFM2RKM1', 'banano.jpg', NULL),
(19, 'Mango', 'Mango Fresco', '5000', 'frutas', 'www.facebook.com', 'https://wa.me/qr/LZIXIQKFM2RKM1', 'mango.jpg', NULL),
(20, 'Papaya', 'Papaya Fresca', '4500', 'frutas', 'www.facebook.com', 'https://wa.me/qr/LZIXIQKFM2RKM1', 'papaya.jpg', NULL),
(21, 'Pera', 'Pera Fresca', '4200', 'frutas', 'www.facebook.com', 'https://wa.me/qr/LZIXIQKFM2RKM1', 'pera.jpg', NULL),
(22, 'Uvas', 'Uva Reina', '7000', 'frutas', 'www.facebook.com', 'https://wa.me/qr/LZIXIQKFM2RKM1', 'uva.jpg', NULL),
(23, 'Trigo', 'Trigo Certificado', '30000', 'granoss', 'www.facebook.com', 'https://wa.me/qr/LZIXIQKFM2RKM1', 'trigo.jpg', NULL),
(24, 'Maiz ', 'Mazorca O Granel', '10000', 'granoss', 'www.facebook.com', 'https://wa.me/qr/LZIXIQKFM2RKM1', 'maiz.jpg', NULL),
(25, 'Huevos', 'Huevos de Gallina', '20000', 'huevos', 'www.facebook.com', 'https://wa.me/qr/LZIXIQKFM2RKM1', 'huevo gallina.jpg', NULL),
(26, 'H. Codorniz', 'H. de Codorniz', '10000', 'huevos', 'www.facebook.com', 'https://wa.me/qr/LZIXIQKFM2RKM1', 'huevos-de-codorniz-1.jpg', NULL),
(27, 'Caballos', 'Buen Caballo', '1200000', 'ganaderia', 'www.facebook.com', 'https://wa.me/qr/LZIXIQKFM2RKM1', 'caballo.jpg', NULL),
(28, 'Cerdos', 'Cerdos de Cria', '800000', 'ganaderia', 'www.facebook.com', 'https://wa.me/qr/LZIXIQKFM2RKM1', 'cerdos de cria.jpg', NULL),
(29, 'Gallinas Criollas', 'Galllinas Buenas', '50000', 'ganaderia', 'www.facebook.com', 'https://wa.me/qr/LZIXIQKFM2RKM1', 'gallinas.jpeg', NULL),
(30, 'Pitaya', 'Pitaya', '4000', 'frutas', 'day_Xas', 'https://wa.me/qr/LZIXIQKFM2RKM1', 'pitaya-x-500-g.jpg', NULL),
(48, 'Pitaya', 'pitaya', '12500', 'frutas', 'www.facebook.com', '3124328796', 'pitaya-x-500-g.jpg', NULL),
(49, 'fresas', 'Es una unidad de 20 fresas', '10000', 'frutas', 'Heydi Roldan', '3042766500', 'istockphoto-477834644-612x612.jpg', NULL),
(50, 'papa', '1 kilo de papa', '10000', 'verduras', 'Samu ', '3128191690', 'bodoque.jpg', NULL),
(51, 'verengena', '1kilo de verengena', '5000', 'verduras', 'Jose luis', '3004562456', 'bodoque.jpg', NULL),
(52, 'ramirez', 'un niño x ', '2000', 'huevos', 'ramires233', '323076790', '450_1000.jpg', NULL),
(53, 'fresas', 'son rojas, jugosas y dulces', '5000', 'frutas', 'Samu ', '3128191690', 'bodoque.jpg', NULL),
(54, 'marihuna', 'ewewewewew', '2000', 'verduras', 'rewrwrrw', '1231321313', 'mari.jpg', NULL),
(55, 'Papas', 'Papa pastusa narural', '120000', 'verduras', 'www.facebook.com', 'https://wa.me/qr/LZIXIQKFM2RKM1', 'pitaya-x-500-g.jpg', NULL);

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
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `talla` varchar(10) NOT NULL,
  `colores` varchar(255) NOT NULL,
  `imagen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'laura', 'laura', 'sumama', 'admin', 'boba@hi', 'laura'),
(3, 'loura', 'loura', 'sumama', 'user', 'boba@boba', 'loura'),
(9, '', 'laura13', 'laura456', 'user', 'papa@papa', ''),
(10, 'andres', 'andres', 'sumama', 'user', 'su@mama', ''),
(11, '', 'laur4', 'sumama', 'admin', 'laura@laura', '3123122222'),
(12, 'hernan', 'harnen', 'hernan', 'user', 'hernan@hernan', ''),
(13, 'heidy', 'heidy23', 'heidy123', 'user', 'heidy@heidy', ''),
(14, 'daniel', 'daniel', 'daniel123', 'user', 'daniel@daniel', ''),
(15, 'alex', 'dayxas', 'dayxas14', 'user', 'dayxas5@outlook.com', ''),
(16, '', 'yo', 'sumama', 'admin', 'yo@yo', '12331312'),
(17, '', 'Camppi', 'campi', 'admin', 'campihappy1@gmail.com', ''),
(19, '', 'Castro', 'dayxas14', 'admin', 'dayxas5@outlook.com', '3238631704'),
(20, 'samuel', 'samu11', 'samu123', 'user', 'samu@gmail.com', ''),
(21, 'jose luis', 'joselito', 'jose123', 'user', 'joseluis@gmail.com', ''),
(22, 'juli', 'juki22', 'jukli123', 'user', 'juli@gmail.com', ''),
(23, 'isaac', 'isaac19', 'isaac123', 'user', 'isaac@gmail.com', ''),
(24, 'julian', 'juli123', 'juli123', 'user', 'juli@gmail.com', ''),
(25, 'mery', 'shantal', '0722', 'user', 'mery@gmail.com', ''),
(26, 'jostin ', 'jose6', '123', 'user', '', ''),
(27, 'jose', 'jose66', 'jose123', 'user', 'jose@gmail.com', ''),
(28, 'naomi', 'naomi', '123', 'user', 'juli@gmail.com', ''),
(29, 'samantha', 'sama12', '1234567', 'user', 'juli@gmail.com', ''),
(30, 'samuel', 'samuel3', 'samu123', 'user', 'samuel@gmail.com', ''),
(31, 'dilan', 'dilan5', 'dilan123', 'user', 'juli@gmail.com', ''),
(32, 'jose', 'jose123', 'jose123', 'user', 'jose@gmail.com', ''),
(33, 'santiago', 'hola', '1032019060', 'user', 'saristizabal41@gmail.com', ''),
(34, 'henry velandia', 'henrypapasito', 'Hvelandia123.', 'user', 'henry@gmail.com', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario` (`id_usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `user` (`id_usuario`),
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `user` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
