-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2014 a las 20:30:42
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `styleu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE IF NOT EXISTS `carrito` (
`id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `precio` varchar(50) DEFAULT NULL,
  `comprado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_productos`
--

CREATE TABLE IF NOT EXISTS `lista_productos` (
`id` int(11) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `precio` decimal(9,2) NOT NULL,
  `url` varchar(250) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `lista_productos`
--

INSERT INTO `lista_productos` (`id`, `producto`, `precio`, `url`) VALUES
(4, 'Florar rose dress', '14.00', 'img/uno.png'),
(5, 'Black dress', '17.00', 'img/dos.png'),
(6, 'Blue dress', '21.00', 'img/tres.png'),
(7, 'May dress', '27.00', 'img/cuatro.png'),
(8, 'Silver dress', '34.00', 'img/cinco.png'),
(9, 'Relax dress', '39.00', 'img/seis.png'),
(10, 'Florar relax dress', '43.00', 'img/siete.png'),
(11, 'Cebra dress', '49.00', 'img/ocho.png'),
(12, 'Stretch black dress', '53.00', 'img/nueve.png'),
(13, 'Red dress', '58.00', 'img/diez.png'),
(14, 'Hi dress', '64.00', 'img/once.png'),
(15, 'Waiou dress', '67.00', 'img/doce.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `correo`, `password`) VALUES
(1, 'malala', 'mariamalala4@gmail.com', 'mariposa'),
(2, '', 'malala1016@hotmail.com', '12345'),
(3, 'mario', 'mario__715@hotmail.com', '12345'),
(4, 'Nicodemus', 'nicocdfvr@vdgbfh.com', '123'),
(5, 'andrea', 'dcfrgthyrtdfdv@vfdbghyjuykiuj.com', '098'),
(6, 'jenniffer', 'rosanegra2323@gmail.com', 'jg'),
(7, 'Alejandra', 'ebgtg@vfbghyj.com', 'bah'),
(8, 'natalia', 'fvbgry etgr', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lista_productos`
--
ALTER TABLE `lista_productos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `lista_productos`
--
ALTER TABLE `lista_productos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
