-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-08-2022 a las 00:20:12
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_10`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocina`
--

DROP TABLE IF EXISTS `cocina`;
CREATE TABLE IF NOT EXISTS `cocina` (
  `id_cocina` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_cocina` varchar(250) NOT NULL,
  `Direc_cocina` varchar(250) NOT NULL,
  `Doc_cocina1` longblob NOT NULL,
  `Doc_cocina2` longblob NOT NULL,
  `Doc_cocina3` longblob NOT NULL,
  `Doc_cocina4` longblob,
  `Doc_cocina5` longblob,
  `id_usu` int(11) NOT NULL,
  PRIMARY KEY (`id_cocina`),
  KEY `id_usu` (`id_usu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

DROP TABLE IF EXISTS `mensaje`;
CREATE TABLE IF NOT EXISTS `mensaje` (
  `id_mensaje` int(11) NOT NULL AUTO_INCREMENT,
  `usu_envia` varchar(255) NOT NULL,
  `usu_recive` varchar(255) NOT NULL,
  `msg` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id_mensaje`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `incoming_msg_id` varchar(255) NOT NULL,
  `outgoing_msg_id` varchar(255) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 'Prueba 2', 'Prueba de usuario', 'asdfg'),
(2, 'asd', 'Prueba 2', 'Prueba'),
(3, 'Restaurante', 'Prueba 2', 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usu` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_usu` varchar(250) NOT NULL,
  `Email_usu` varchar(150) NOT NULL,
  `Telefono_usu` int(11) NOT NULL,
  `Contra_usu` varchar(30) NOT NULL,
  `Tipo_usu` int(11) NOT NULL,
  PRIMARY KEY (`id_usu`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usu`, `Nombre_usu`, `Email_usu`, `Telefono_usu`, `Contra_usu`, `Tipo_usu`) VALUES
(1, 'Prueba de usuario', 'prueba_usu@hotmail.com', 1122334455, '123456', 1),
(2, 'Prueba 2', 'fjga1704@hotmail.com', 123456, '123456', 2),
(3, 'asd', 'asd@asd.com', 123456, '1234567', 2),
(4, 'Restaurante', 'restaurante@hotmail.com', 22556688, '123456', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
