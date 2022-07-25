-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-07-2022 a las 20:43:08
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usu`, `Nombre_usu`, `Email_usu`, `Telefono_usu`, `Contra_usu`, `Tipo_usu`) VALUES
(1, 'Prueba de usuario', 'prueba_usu@hotmail.com', 1122334455, '123456', 1),
(2, 'Prueba 2', 'fjga1704@hotmail.com', 123456, '123456', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
