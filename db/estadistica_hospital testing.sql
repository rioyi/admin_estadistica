-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-03-2016 a las 11:42:40
-- Versión del servidor: 5.5.47-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `estadistica_hospital`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE IF NOT EXISTS `docente` (
  `id_docente` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_docente` varchar(15) NOT NULL,
  `apellido_docente` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `telefono` varchar(12) DEFAULT NULL,
  `piso` int(2) NOT NULL,
  PRIMARY KEY (`id_docente`),
  KEY `piso` (`piso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id_docente`, `nombre_docente`, `apellido_docente`, `email`, `direccion`, `telefono`, `piso`) VALUES
(1, 'maria', 'angarita', 'dasd@sdsadas.com', 'su casa', '3432432', 1),
(5, '1111', 'DSFDSF', '', 'DSFDSFD', 'DSFSDFSDF', 0),
(9, 'Marilyn', 'Monroe', '', 'USA', '5555555', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mes`
--

CREATE TABLE IF NOT EXISTS `mes` (
  `id_mes` int(2) NOT NULL AUTO_INCREMENT,
  `mes` varchar(10) NOT NULL,
  PRIMARY KEY (`id_mes`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `mes`
--

INSERT INTO `mes` (`id_mes`, `mes`) VALUES
(1, 'ENERO'),
(2, 'FEBRERO'),
(3, 'MARZO'),
(4, 'ABRIL'),
(5, 'MAYO'),
(6, 'JUNIO'),
(7, 'JULIO'),
(8, 'AGOSTO'),
(9, 'SEPTIEMBRE'),
(10, 'OCTUBRE'),
(11, 'NOVIEMBRE'),
(12, 'DICIEMBRE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo_escolar`
--

CREATE TABLE IF NOT EXISTS `periodo_escolar` (
  `id_periodo_escolar` int(10) NOT NULL AUTO_INCREMENT,
  `inicio` int(4) NOT NULL,
  `fin` int(4) NOT NULL,
  PRIMARY KEY (`id_periodo_escolar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `periodo_escolar`
--

INSERT INTO `periodo_escolar` (`id_periodo_escolar`, `inicio`, `fin`) VALUES
(3, 66666, 0),
(6, 2132, 2314),
(7, 2015, 2016);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE IF NOT EXISTS `sexo` (
  `id_sexo` int(1) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(8) NOT NULL,
  PRIMARY KEY (`id_sexo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id_sexo`, `nombre`) VALUES
(1, 'Masculin'),
(2, 'Femenino'),
(3, 'N/A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_atencion`
--

CREATE TABLE IF NOT EXISTS `tipo_atencion` (
  `id_tipo_atencion` int(4) NOT NULL AUTO_INCREMENT,
  `tipo_atencion` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tipo_atencion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `tipo_atencion`
--

INSERT INTO `tipo_atencion` (`id_tipo_atencion`, `tipo_atencion`) VALUES
(1, 'cirugia'),
(2, 'Traumatolog'),
(3, 'Otorrinolaringologo'),
(4, 'Pediatría'),
(5, 'Nerología'),
(6, 'Cadiología'),
(7, 'Nefrología'),
(8, 'Urología'),
(9, 'Neumonología'),
(10, 'Hermatología'),
(11, 'Oncología'),
(12, 'Dermatología'),
(13, 'Gastrología'),
(14, 'Infectología');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_edad`
--

CREATE TABLE IF NOT EXISTS `tipo_edad` (
  `id_tipo_edad` int(4) NOT NULL AUTO_INCREMENT,
  `tipo_edad` int(2) NOT NULL,
  PRIMARY KEY (`id_tipo_edad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `tipo_edad`
--

INSERT INTO `tipo_edad` (`id_tipo_edad`, `tipo_edad`) VALUES
(1, 11),
(2, 1),
(3, 2),
(4, 3),
(5, 4),
(6, 5),
(7, 6),
(8, 7),
(9, 8),
(10, 9),
(11, 2),
(12, 3),
(13, 4),
(14, 5),
(15, 6),
(16, 7),
(17, 8),
(18, 9),
(19, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_escolaridad`
--

CREATE TABLE IF NOT EXISTS `tipo_escolaridad` (
  `id_tipo_escolaridad` int(4) NOT NULL AUTO_INCREMENT,
  `escolaridad` varchar(11) NOT NULL,
  PRIMARY KEY (`id_tipo_escolaridad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `tipo_escolaridad`
--

INSERT INTO `tipo_escolaridad` (`id_tipo_escolaridad`, `escolaridad`) VALUES
(1, 'Maternal'),
(2, 'Nivel I'),
(3, 'Nivel II'),
(4, 'Nivel III'),
(5, '1° Grado'),
(6, '2° Grado'),
(7, '3° Grado'),
(8, '4° Grado'),
(9, '5° Grado'),
(10, '6° Grado'),
(11, '7°mo'),
(12, '8°vo'),
(13, '9°no'),
(14, '4° Año'),
(15, '5° Año'),
(16, 'S/E'),
(17, 'E/E'),
(18, '6° Año');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_permanencia`
--

CREATE TABLE IF NOT EXISTS `tipo_permanencia` (
  `id_tipo_permanencia` int(4) NOT NULL AUTO_INCREMENT,
  `tiempo` varchar(11) NOT NULL,
  PRIMARY KEY (`id_tipo_permanencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `tipo_permanencia`
--

INSERT INTO `tipo_permanencia` (`id_tipo_permanencia`, `tiempo`) VALUES
(1, '0 - 5 Días'),
(2, '6 - 10 Días'),
(3, '11 -15 Días'),
(4, '16 -30 Días'),
(5, '2 Meses'),
(6, '3 Meses'),
(7, '+3 Meses');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_poblacion_atendida`
--

CREATE TABLE IF NOT EXISTS `tipo_poblacion_atendida` (
  `id_tipo_poblacion_atendida` int(4) NOT NULL AUTO_INCREMENT,
  `poblacion_atendida` varchar(15) NOT NULL,
  PRIMARY KEY (`id_tipo_poblacion_atendida`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipo_poblacion_atendida`
--

INSERT INTO `tipo_poblacion_atendida` (`id_tipo_poblacion_atendida`, `poblacion_atendida`) VALUES
(1, 'En Aula'),
(2, 'En Habitación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_referido`
--

CREATE TABLE IF NOT EXISTS `tipo_referido` (
  `id_tipo_referido` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_referido` varchar(15) NOT NULL,
  PRIMARY KEY (`id_tipo_referido`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `tipo_referido`
--

INSERT INTO `tipo_referido` (`id_tipo_referido`, `tipo_referido`) VALUES
(1, 'Defensoria'),
(2, 'CDI'),
(3, 'Seguro Social'),
(4, 'Psicologia'),
(5, 'CAIPA'),
(6, 'Integración'),
(7, 'A. Integral'),
(8, 'CENDA'),
(9, 'UPE'),
(10, 'Articulación'),
(11, 'Otros'),
(12, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_asistencia`
--

CREATE TABLE IF NOT EXISTS `total_asistencia` (
  `id_asistencia` int(4) NOT NULL AUTO_INCREMENT,
  `id_periodo_escolar` int(4) NOT NULL,
  `id_mes` int(4) NOT NULL,
  `id_sexo` int(4) NOT NULL,
  `dia` int(2) NOT NULL,
  `p1` int(4) NOT NULL,
  `p2` int(4) NOT NULL,
  `p3` int(4) NOT NULL,
  `p4` int(4) NOT NULL,
  `p5` int(4) NOT NULL,
  `gi` int(4) NOT NULL,
  `gii` int(4) NOT NULL,
  PRIMARY KEY (`id_asistencia`),
  KEY `id_periodo_escolar` (`id_periodo_escolar`),
  KEY `id_mes` (`id_mes`),
  KEY `id_sexo` (`id_sexo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Volcado de datos para la tabla `total_asistencia`
--

INSERT INTO `total_asistencia` (`id_asistencia`, `id_periodo_escolar`, `id_mes`, `id_sexo`, `dia`, `p1`, `p2`, `p3`, `p4`, `p5`, `gi`, `gii`) VALUES
(40, 7, 1, 1, 1, 1, 2, 3, 0, 0, 0, 0),
(41, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_atencion`
--

CREATE TABLE IF NOT EXISTS `total_atencion` (
  `id_atencion` int(11) NOT NULL AUTO_INCREMENT,
  `id_periodo_escolar` int(4) NOT NULL,
  `id_mes` int(4) NOT NULL,
  `id_sexo` int(4) NOT NULL,
  `id_tipo_atencion` int(4) NOT NULL,
  `p1` int(3) NOT NULL,
  `p2` int(3) NOT NULL,
  `p3` int(3) NOT NULL,
  `p4` int(3) NOT NULL,
  `p5` int(3) NOT NULL,
  `gi` int(3) NOT NULL,
  `gii` int(3) NOT NULL,
  PRIMARY KEY (`id_atencion`),
  KEY `id_periodo_escolar` (`id_periodo_escolar`),
  KEY `id_mes` (`id_mes`),
  KEY `id_sexo` (`id_sexo`),
  KEY `id_tipo_atencion` (`id_tipo_atencion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Volcado de datos para la tabla `total_atencion`
--

INSERT INTO `total_atencion` (`id_atencion`, `id_periodo_escolar`, `id_mes`, `id_sexo`, `id_tipo_atencion`, `p1`, `p2`, `p3`, `p4`, `p5`, `gi`, `gii`) VALUES
(33, 7, 1, 1, 1, 1, 2, 3, 4, 5, 6, 7),
(34, 7, 1, 1, 2, 1, 2, 3, 4, 5, 6, 7),
(35, 7, 1, 1, 3, 1, 2, 3, 4, 5, 6, 7),
(36, 7, 1, 1, 4, 1, 2, 3, 4, 5, 6, 7),
(37, 7, 1, 1, 5, 1, 2, 3, 4, 5, 6, 7),
(38, 7, 1, 1, 6, 1, 2, 3, 4, 5, 6, 7),
(39, 7, 1, 1, 7, 1, 2, 3, 4, 5, 6, 7),
(40, 7, 1, 1, 8, 1, 2, 3, 4, 5, 6, 7),
(41, 7, 1, 1, 9, 1, 2, 3, 4, 5, 6, 7),
(42, 7, 1, 1, 10, 1, 2, 3, 4, 5, 6, 7),
(43, 7, 1, 1, 11, 1, 2, 3, 4, 5, 6, 7),
(44, 7, 1, 1, 12, 1, 2, 3, 4, 5, 6, 7),
(45, 7, 1, 1, 13, 1, 2, 3, 4, 5, 6, 7),
(46, 7, 1, 1, 14, 1, 2, 3, 4, 5, 6, 7),
(47, 7, 1, 2, 1, 1, 2, 3, 4, 5, 6, 7),
(48, 7, 1, 2, 2, 1, 2, 3, 4, 5, 6, 7),
(49, 7, 1, 2, 3, 1, 2, 3, 4, 5, 6, 7),
(50, 7, 1, 2, 4, 1, 2, 3, 4, 5, 6, 7),
(51, 7, 1, 2, 5, 1, 2, 3, 4, 5, 6, 7),
(52, 7, 1, 2, 6, 1, 2, 3, 4, 5, 6, 7),
(53, 7, 1, 2, 7, 1, 2, 3, 4, 5, 6, 7),
(54, 7, 1, 2, 8, 1, 2, 3, 4, 5, 6, 7),
(55, 7, 1, 2, 9, 1, 2, 3, 4, 5, 6, 7),
(56, 7, 1, 2, 10, 1, 2, 3, 4, 5, 6, 7),
(57, 7, 1, 2, 11, 1, 2, 3, 4, 5, 6, 7),
(58, 7, 1, 2, 12, 1, 2, 3, 4, 5, 6, 7),
(59, 7, 1, 2, 13, 1, 2, 3, 4, 5, 6, 7),
(60, 7, 1, 2, 14, 1, 2, 3, 4, 5, 6, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_escolaridad`
--

CREATE TABLE IF NOT EXISTS `total_escolaridad` (
  `id_escolaridad` int(4) NOT NULL AUTO_INCREMENT,
  `id_sexo` int(4) NOT NULL,
  `id_periodo_escolar` int(4) NOT NULL,
  `id_mes` int(4) NOT NULL,
  `id_tipo_escolaridad` int(4) NOT NULL,
  `p1` int(4) NOT NULL,
  `p2` int(4) NOT NULL,
  `p3` int(4) NOT NULL,
  `p4` int(4) NOT NULL,
  `p5` int(4) NOT NULL,
  `gi` int(4) NOT NULL,
  `gii` int(4) NOT NULL,
  PRIMARY KEY (`id_escolaridad`),
  KEY `id_sexo` (`id_sexo`,`id_periodo_escolar`,`id_mes`,`id_tipo_escolaridad`),
  KEY `id_periodo_escolar` (`id_periodo_escolar`),
  KEY `id_mes` (`id_mes`),
  KEY `id_tipo_escolaridad` (`id_tipo_escolaridad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=143 ;

--
-- Volcado de datos para la tabla `total_escolaridad`
--

INSERT INTO `total_escolaridad` (`id_escolaridad`, `id_sexo`, `id_periodo_escolar`, `id_mes`, `id_tipo_escolaridad`, `p1`, `p2`, `p3`, `p4`, `p5`, `gi`, `gii`) VALUES
(107, 1, 7, 3, 1, 1, 2, 3, 4, 5, 6, 7),
(108, 1, 7, 3, 2, 1, 2, 3, 4, 5, 6, 7),
(109, 1, 7, 3, 3, 1, 2, 3, 4, 5, 6, 7),
(110, 1, 7, 3, 4, 1, 2, 3, 4, 5, 6, 7),
(111, 1, 7, 3, 5, 1, 2, 3, 4, 5, 6, 7),
(112, 1, 7, 3, 6, 1, 2, 3, 4, 5, 6, 7),
(113, 1, 7, 3, 7, 1, 2, 3, 4, 5, 6, 7),
(114, 1, 7, 3, 8, 1, 2, 3, 4, 5, 6, 7),
(115, 1, 7, 3, 9, 1, 2, 3, 4, 5, 6, 7),
(116, 1, 7, 3, 10, 1, 2, 3, 4, 5, 6, 7),
(117, 1, 7, 3, 11, 1, 2, 3, 4, 5, 6, 7),
(118, 1, 7, 3, 12, 1, 2, 3, 4, 5, 6, 7),
(119, 1, 7, 3, 13, 1, 2, 3, 4, 5, 6, 7),
(120, 1, 7, 3, 14, 1, 2, 3, 4, 5, 6, 7),
(121, 1, 7, 3, 15, 1, 2, 3, 4, 5, 6, 7),
(122, 1, 7, 3, 16, 1, 2, 3, 4, 5, 6, 7),
(123, 1, 7, 3, 17, 1, 2, 3, 4, 5, 6, 7),
(124, 1, 7, 3, 18, 1, 2, 3, 4, 5, 6, 7),
(125, 2, 7, 3, 1, 1, 2, 3, 4, 5, 6, 7),
(126, 2, 7, 3, 2, 1, 2, 3, 4, 5, 6, 7),
(127, 2, 7, 3, 3, 1, 2, 3, 4, 5, 6, 7),
(128, 2, 7, 3, 4, 1, 2, 3, 4, 5, 6, 7),
(129, 2, 7, 3, 5, 1, 2, 3, 4, 5, 6, 7),
(130, 2, 7, 3, 6, 1, 2, 3, 4, 5, 6, 7),
(131, 2, 7, 3, 7, 1, 2, 3, 4, 5, 6, 7),
(132, 2, 7, 3, 8, 1, 2, 3, 4, 5, 6, 7),
(133, 2, 7, 3, 9, 1, 2, 3, 4, 5, 6, 7),
(134, 2, 7, 3, 10, 1, 2, 3, 4, 5, 6, 7),
(135, 2, 7, 3, 11, 1, 2, 3, 4, 5, 6, 7),
(136, 2, 7, 3, 12, 1, 2, 3, 4, 5, 6, 7),
(137, 2, 7, 3, 13, 1, 2, 3, 4, 5, 6, 7),
(138, 2, 7, 3, 14, 1, 2, 3, 4, 5, 6, 7),
(139, 2, 7, 3, 15, 1, 2, 3, 4, 5, 6, 7),
(140, 2, 7, 3, 16, 1, 2, 3, 4, 5, 6, 7),
(141, 2, 7, 3, 17, 1, 2, 3, 4, 5, 6, 7),
(142, 2, 7, 3, 18, 1, 2, 3, 4, 5, 6, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_poblacion_atendida`
--

CREATE TABLE IF NOT EXISTS `total_poblacion_atendida` (
  `id_poblacion_atendida` int(4) NOT NULL AUTO_INCREMENT,
  `id_sexo` int(4) NOT NULL,
  `id_periodo_escolar` int(4) NOT NULL,
  `id_mes` int(4) NOT NULL,
  `id_tipo_poblacion_atendida` int(4) NOT NULL,
  `p1` int(4) NOT NULL,
  `p2` int(4) NOT NULL,
  `p3` int(4) NOT NULL,
  `p4` int(4) NOT NULL,
  `p5` int(4) NOT NULL,
  `gi` int(4) NOT NULL,
  `gii` int(4) NOT NULL,
  PRIMARY KEY (`id_poblacion_atendida`),
  KEY `id_sexo` (`id_sexo`,`id_periodo_escolar`,`id_mes`,`id_tipo_poblacion_atendida`),
  KEY `id_periodo_escolar` (`id_periodo_escolar`),
  KEY `id_mes` (`id_mes`),
  KEY `id_tipo_poblacion_atendida` (`id_tipo_poblacion_atendida`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `total_poblacion_atendida`
--

INSERT INTO `total_poblacion_atendida` (`id_poblacion_atendida`, `id_sexo`, `id_periodo_escolar`, `id_mes`, `id_tipo_poblacion_atendida`, `p1`, `p2`, `p3`, `p4`, `p5`, `gi`, `gii`) VALUES
(1, 1, 7, 3, 1, 1, 2, 3, 4, 5, 6, 7),
(2, 1, 7, 3, 2, 1, 2, 3, 4, 5, 6, 7),
(3, 1, 7, 3, 1, 1, 2, 3, 4, 5, 6, 7),
(4, 1, 7, 3, 1, 1, 2, 3, 4, 5, 6, 7),
(5, 1, 7, 3, 1, 1, 2, 3, 4, 5, 6, 7),
(6, 1, 7, 3, 2, 1, 2, 3, 4, 5, 6, 7),
(7, 2, 7, 3, 1, 1, 2, 3, 4, 5, 6, 7),
(8, 2, 7, 3, 2, 1, 2, 3, 4, 5, 6, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_referidos`
--

CREATE TABLE IF NOT EXISTS `total_referidos` (
  `id_referido` int(10) NOT NULL AUTO_INCREMENT,
  `id_sexo` int(11) NOT NULL,
  `id_periodo_escolar` int(11) NOT NULL,
  `id_mes` int(11) NOT NULL,
  `id_tipo_referido` int(11) NOT NULL,
  `p1` int(3) NOT NULL,
  `p2` int(3) NOT NULL,
  `p3` int(3) NOT NULL,
  `p4` int(3) NOT NULL,
  `p5` int(3) NOT NULL,
  `gi` int(3) NOT NULL,
  `gii` int(3) NOT NULL,
  PRIMARY KEY (`id_referido`),
  KEY `id_sexo` (`id_sexo`,`id_periodo_escolar`,`id_mes`,`id_tipo_referido`),
  KEY `id_periodo_escolar` (`id_periodo_escolar`),
  KEY `id_mes` (`id_mes`),
  KEY `id_tipo_referido` (`id_tipo_referido`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Volcado de datos para la tabla `total_referidos`
--

INSERT INTO `total_referidos` (`id_referido`, `id_sexo`, `id_periodo_escolar`, `id_mes`, `id_tipo_referido`, `p1`, `p2`, `p3`, `p4`, `p5`, `gi`, `gii`) VALUES
(49, 1, 7, 1, 1, 1, 2, 3, 4, 5, 6, 7),
(50, 1, 7, 1, 2, 1, 2, 3, 4, 5, 6, 7),
(51, 1, 7, 1, 3, 1, 2, 3, 4, 5, 6, 7),
(52, 1, 7, 1, 4, 1, 2, 3, 4, 5, 6, 7),
(53, 1, 7, 1, 5, 1, 2, 3, 4, 5, 6, 7),
(54, 1, 7, 1, 6, 1, 2, 3, 4, 5, 6, 7),
(55, 1, 7, 1, 7, 1, 2, 3, 4, 5, 6, 7),
(56, 1, 7, 1, 8, 1, 2, 3, 4, 5, 6, 7),
(57, 1, 7, 1, 9, 1, 2, 3, 4, 5, 6, 7),
(58, 1, 7, 1, 10, 1, 2, 3, 4, 5, 6, 7),
(59, 1, 7, 1, 11, 1, 2, 3, 4, 5, 6, 7),
(60, 1, 7, 1, 12, 1, 2, 3, 4, 5, 6, 7),
(61, 2, 7, 1, 1, 1, 2, 3, 4, 5, 6, 7),
(62, 2, 7, 1, 2, 1, 2, 3, 4, 5, 6, 7),
(63, 2, 7, 1, 3, 1, 2, 3, 4, 5, 6, 7),
(64, 2, 7, 1, 4, 1, 2, 3, 4, 5, 6, 7),
(65, 2, 7, 1, 5, 1, 2, 3, 4, 5, 6, 7),
(66, 2, 7, 1, 6, 1, 2, 3, 4, 5, 6, 7),
(67, 2, 7, 1, 7, 1, 2, 3, 4, 5, 6, 7),
(68, 2, 7, 1, 8, 1, 2, 3, 4, 5, 6, 7),
(69, 2, 7, 1, 9, 1, 2, 3, 4, 5, 6, 7),
(70, 2, 7, 1, 10, 1, 2, 3, 4, 5, 6, 7),
(71, 2, 7, 1, 11, 1, 2, 3, 4, 5, 6, 7),
(72, 2, 7, 1, 12, 1, 2, 3, 4, 5, 6, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_tiempo_permanencia`
--

CREATE TABLE IF NOT EXISTS `total_tiempo_permanencia` (
  `id_tiempo_permanencia` int(4) NOT NULL AUTO_INCREMENT,
  `id_sexo` int(4) NOT NULL,
  `id_periodo_escolar` int(4) NOT NULL,
  `id_mes` int(4) NOT NULL,
  `id_tipo_permanencia` int(4) NOT NULL,
  `p1` int(4) NOT NULL,
  `p2` int(4) NOT NULL,
  `p3` int(4) NOT NULL,
  `p4` int(4) NOT NULL,
  `p5` int(4) NOT NULL,
  `gi` int(4) NOT NULL,
  `gii` int(4) NOT NULL,
  PRIMARY KEY (`id_tiempo_permanencia`),
  KEY `id_sexo` (`id_sexo`,`id_periodo_escolar`,`id_mes`),
  KEY `id_tipo_permanencia` (`id_tipo_permanencia`),
  KEY `id_sexo_2` (`id_sexo`),
  KEY `id_periodo_escolar` (`id_periodo_escolar`),
  KEY `id_mes` (`id_mes`),
  KEY `id_tipo_permanencia_2` (`id_tipo_permanencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Volcado de datos para la tabla `total_tiempo_permanencia`
--

INSERT INTO `total_tiempo_permanencia` (`id_tiempo_permanencia`, `id_sexo`, `id_periodo_escolar`, `id_mes`, `id_tipo_permanencia`, `p1`, `p2`, `p3`, `p4`, `p5`, `gi`, `gii`) VALUES
(43, 1, 7, 1, 1, 1, 2, 3, 4, 5, 6, 7),
(44, 1, 7, 1, 2, 1, 2, 3, 4, 5, 6, 7),
(45, 1, 7, 1, 3, 1, 2, 3, 4, 5, 6, 7),
(46, 1, 7, 1, 4, 1, 2, 3, 4, 5, 6, 7),
(47, 1, 7, 1, 5, 1, 2, 3, 4, 5, 6, 7),
(48, 1, 7, 1, 6, 1, 2, 3, 4, 5, 6, 7),
(49, 1, 7, 1, 7, 1, 2, 3, 4, 5, 6, 7),
(50, 2, 7, 1, 1, 1, 2, 3, 4, 5, 6, 7),
(51, 2, 7, 1, 2, 1, 2, 3, 4, 5, 6, 7),
(52, 2, 7, 1, 3, 1, 2, 3, 4, 5, 6, 7),
(53, 2, 7, 1, 4, 1, 2, 3, 4, 5, 6, 7),
(54, 2, 7, 1, 5, 1, 2, 3, 4, 5, 6, 7),
(55, 2, 7, 1, 6, 1, 2, 3, 4, 5, 6, 7),
(56, 2, 7, 1, 7, 1, 2, 3, 4, 5, 6, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_visita_edad`
--

CREATE TABLE IF NOT EXISTS `total_visita_edad` (
  `id_visita_edad` int(4) NOT NULL AUTO_INCREMENT,
  `id_periodo_escolar` int(4) NOT NULL,
  `id_mes` int(4) NOT NULL,
  `id_sexo` int(4) NOT NULL,
  `id_tipo_edad` int(4) NOT NULL,
  `p1` int(4) NOT NULL,
  `p2` int(4) NOT NULL,
  `p3` int(4) NOT NULL,
  `p4` int(4) NOT NULL,
  `p5` int(4) NOT NULL,
  `gi` int(4) NOT NULL,
  `gii` int(4) NOT NULL,
  PRIMARY KEY (`id_visita_edad`),
  KEY `id_periodo_escolar` (`id_periodo_escolar`),
  KEY `id_mes` (`id_mes`),
  KEY `id_sexo` (`id_sexo`),
  KEY `id_tipo_edad` (`id_tipo_edad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Volcado de datos para la tabla `total_visita_edad`
--

INSERT INTO `total_visita_edad` (`id_visita_edad`, `id_periodo_escolar`, `id_mes`, `id_sexo`, `id_tipo_edad`, `p1`, `p2`, `p3`, `p4`, `p5`, `gi`, `gii`) VALUES
(37, 7, 3, 1, 1, 1, 2, 3, 4, 5, 6, 2),
(38, 7, 3, 1, 2, 1, 2, 3, 4, 5, 6, 2),
(39, 7, 3, 1, 3, 1, 2, 3, 4, 5, 6, 2),
(40, 7, 3, 1, 4, 1, 2, 3, 4, 5, 6, 2),
(41, 7, 3, 1, 5, 1, 2, 3, 4, 5, 6, 2),
(42, 7, 3, 1, 6, 1, 2, 3, 4, 5, 6, 2),
(43, 7, 3, 1, 7, 1, 2, 3, 4, 5, 6, 7),
(44, 7, 3, 1, 8, 1, 2, 3, 4, 5, 6, 7),
(45, 7, 3, 1, 9, 1, 2, 3, 4, 5, 6, 7),
(46, 7, 3, 1, 10, 1, 2, 3, 4, 5, 6, 7),
(47, 7, 3, 1, 11, 1, 2, 3, 4, 5, 6, 7),
(48, 7, 3, 1, 12, 1, 2, 3, 4, 5, 6, 7),
(49, 7, 3, 1, 13, 1, 2, 3, 4, 5, 6, 7),
(50, 7, 3, 1, 14, 1, 2, 3, 4, 5, 6, 7),
(51, 7, 3, 1, 15, 1, 2, 3, 4, 5, 6, 7),
(52, 7, 3, 1, 16, 1, 2, 3, 4, 5, 6, 7),
(53, 7, 3, 1, 17, 1, 2, 3, 4, 5, 6, 7),
(54, 7, 3, 1, 18, 1, 2, 3, 4, 5, 6, 7),
(55, 7, 3, 1, 1, 1, 2, 3, 4, 5, 6, 2),
(56, 7, 3, 2, 2, 1, 2, 3, 4, 5, 6, 2),
(57, 7, 3, 2, 3, 1, 2, 3, 4, 5, 6, 2),
(58, 7, 3, 2, 4, 1, 2, 3, 4, 5, 6, 2),
(59, 7, 3, 2, 5, 1, 2, 3, 4, 5, 6, 2),
(60, 7, 3, 2, 6, 1, 2, 3, 4, 5, 6, 2),
(61, 7, 3, 2, 7, 1, 2, 3, 4, 5, 6, 7),
(62, 7, 3, 2, 8, 1, 2, 3, 4, 5, 6, 7),
(63, 7, 3, 2, 9, 1, 2, 3, 4, 5, 6, 7),
(64, 7, 3, 2, 10, 1, 2, 3, 4, 5, 6, 7),
(65, 7, 3, 2, 11, 1, 2, 3, 4, 5, 6, 7),
(66, 7, 3, 2, 12, 12, 2, 3, 4, 5, 6, 7),
(67, 7, 3, 2, 13, 1, 2, 3, 4, 5, 6, 7),
(68, 7, 3, 2, 14, 1, 2, 3, 4, 5, 6, 7),
(69, 7, 3, 2, 15, 1, 2, 3, 4, 5, 6, 7),
(70, 7, 3, 2, 16, 1, 2, 3, 4, 5, 6, 7),
(71, 7, 3, 2, 17, 1, 2, 3, 4, 5, 6, 7),
(72, 7, 3, 2, 18, 1, 2, 3, 4, 5, 6, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `pregunta_secreta` varchar(20) NOT NULL,
  `nombre_usuario` varchar(20) NOT NULL,
  `respuesta_secreta` varchar(20) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `clave`, `pregunta_secreta`, `nombre_usuario`, `respuesta_secreta`) VALUES
(1, 'wilbert@gmail.com', '123', 'home', 'Wilbert Angarita', ''),
(2, 'marita@marraida', '123', 'color_favorito', 'Maria Angarita', 'azul'),
(3, 'virginia', '123', 'color_favorito', 'Virginia Lusinchi', 'rojo'),
(4, 'root', 'root', '', '', '');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `total_asistencia`
--
ALTER TABLE `total_asistencia`
  ADD CONSTRAINT `total_asistencia_ibfk_1` FOREIGN KEY (`id_periodo_escolar`) REFERENCES `periodo_escolar` (`id_periodo_escolar`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_asistencia_ibfk_2` FOREIGN KEY (`id_mes`) REFERENCES `mes` (`id_mes`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_asistencia_ibfk_3` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `total_atencion`
--
ALTER TABLE `total_atencion`
  ADD CONSTRAINT `total_atencion_ibfk_1` FOREIGN KEY (`id_periodo_escolar`) REFERENCES `periodo_escolar` (`id_periodo_escolar`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_atencion_ibfk_2` FOREIGN KEY (`id_mes`) REFERENCES `mes` (`id_mes`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_atencion_ibfk_3` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_atencion_ibfk_4` FOREIGN KEY (`id_tipo_atencion`) REFERENCES `tipo_atencion` (`id_tipo_atencion`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `total_escolaridad`
--
ALTER TABLE `total_escolaridad`
  ADD CONSTRAINT `total_escolaridad_ibfk_1` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_escolaridad_ibfk_2` FOREIGN KEY (`id_periodo_escolar`) REFERENCES `periodo_escolar` (`id_periodo_escolar`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_escolaridad_ibfk_3` FOREIGN KEY (`id_mes`) REFERENCES `mes` (`id_mes`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_escolaridad_ibfk_4` FOREIGN KEY (`id_tipo_escolaridad`) REFERENCES `tipo_escolaridad` (`id_tipo_escolaridad`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `total_poblacion_atendida`
--
ALTER TABLE `total_poblacion_atendida`
  ADD CONSTRAINT `total_poblacion_atendida_ibfk_1` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_poblacion_atendida_ibfk_2` FOREIGN KEY (`id_periodo_escolar`) REFERENCES `periodo_escolar` (`id_periodo_escolar`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_poblacion_atendida_ibfk_3` FOREIGN KEY (`id_mes`) REFERENCES `mes` (`id_mes`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_poblacion_atendida_ibfk_4` FOREIGN KEY (`id_tipo_poblacion_atendida`) REFERENCES `tipo_poblacion_atendida` (`id_tipo_poblacion_atendida`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `total_referidos`
--
ALTER TABLE `total_referidos`
  ADD CONSTRAINT `total_referidos_ibfk_1` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_referidos_ibfk_2` FOREIGN KEY (`id_periodo_escolar`) REFERENCES `periodo_escolar` (`id_periodo_escolar`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_referidos_ibfk_3` FOREIGN KEY (`id_mes`) REFERENCES `mes` (`id_mes`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_referidos_ibfk_4` FOREIGN KEY (`id_tipo_referido`) REFERENCES `tipo_referido` (`id_tipo_referido`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `total_tiempo_permanencia`
--
ALTER TABLE `total_tiempo_permanencia`
  ADD CONSTRAINT `total_tiempo_permanencia_ibfk_1` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_tiempo_permanencia_ibfk_2` FOREIGN KEY (`id_periodo_escolar`) REFERENCES `periodo_escolar` (`id_periodo_escolar`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_tiempo_permanencia_ibfk_3` FOREIGN KEY (`id_mes`) REFERENCES `mes` (`id_mes`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_tiempo_permanencia_ibfk_4` FOREIGN KEY (`id_tipo_permanencia`) REFERENCES `tipo_permanencia` (`id_tipo_permanencia`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `total_visita_edad`
--
ALTER TABLE `total_visita_edad`
  ADD CONSTRAINT `total_visita_edad_ibfk_1` FOREIGN KEY (`id_periodo_escolar`) REFERENCES `periodo_escolar` (`id_periodo_escolar`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_visita_edad_ibfk_2` FOREIGN KEY (`id_mes`) REFERENCES `mes` (`id_mes`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_visita_edad_ibfk_3` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_visita_edad_ibfk_4` FOREIGN KEY (`id_tipo_edad`) REFERENCES `tipo_edad` (`id_tipo_edad`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
