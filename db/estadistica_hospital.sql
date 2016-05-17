-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-02-2016 a las 14:58:40
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
-- Estructura de tabla para la tabla `atencion`
--

CREATE TABLE IF NOT EXISTS `atencion` (
  `id_atencion` int(11) NOT NULL AUTO_INCREMENT,
  `id_sexo` int(11) NOT NULL,
  `id_periodo_escolar` int(11) NOT NULL,
  `id_mes` int(11) NOT NULL,
  `id_piso` int(11) NOT NULL,
  `id_tipo_atencion` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id_atencion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `id_ciudad` int(2) NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(20) NOT NULL,
  `id_estado` int(2) NOT NULL,
  PRIMARY KEY (`id_ciudad`),
  KEY `id_estado` (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Estructura de tabla para la tabla `edu_especial`
--

CREATE TABLE IF NOT EXISTS `edu_especial` (
  `id_edu_esp_total` int(10) NOT NULL AUTO_INCREMENT,
  `id_sexo` int(2) NOT NULL,
  `id_periodo_escolar` int(2) NOT NULL,
  `id_mes` int(2) NOT NULL,
  `id_piso` int(2) NOT NULL,
  `id_tipo_edu_esp` int(2) NOT NULL,
  `total` int(3) NOT NULL,
  PRIMARY KEY (`id_edu_esp_total`),
  KEY `id_sexo` (`id_sexo`,`id_periodo_escolar`,`id_mes`,`id_piso`,`id_tipo_edu_esp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escolaridad`
--

CREATE TABLE IF NOT EXISTS `escolaridad` (
  `id_escolaridad` int(10) NOT NULL AUTO_INCREMENT,
  `id_sexo` int(2) NOT NULL,
  `id_periodo_escolar` int(10) NOT NULL,
  `id_mes` int(2) NOT NULL,
  `id_piso` int(2) NOT NULL,
  `id_tipo_escolaridad` int(10) NOT NULL,
  `total` int(5) NOT NULL,
  PRIMARY KEY (`id_escolaridad`),
  KEY `id_sexo` (`id_sexo`,`id_periodo_escolar`,`id_mes`,`id_piso`,`id_tipo_escolaridad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int(2) NOT NULL AUTO_INCREMENT,
  `estado` varchar(2) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mes`
--

CREATE TABLE IF NOT EXISTS `mes` (
  `id_mes` int(2) NOT NULL AUTO_INCREMENT,
  `mes` varchar(10) NOT NULL,
  PRIMARY KEY (`id_mes`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

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
(21, 'NOVIEMBRE'),
(22, 'DICIEMBRE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
  `id_minicipio` int(2) NOT NULL AUTO_INCREMENT,
  `municipio` varchar(20) NOT NULL,
  `id_ciudad` int(2) NOT NULL,
  PRIMARY KEY (`id_minicipio`),
  KEY `id_ciudad` (`id_ciudad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `origen`
--

CREATE TABLE IF NOT EXISTS `origen` (
  `id_origen` int(10) NOT NULL AUTO_INCREMENT,
  `id_sexo` int(2) NOT NULL,
  `id_estado` int(2) NOT NULL,
  `id_mes` int(2) NOT NULL,
  `id_piso` int(2) NOT NULL,
  `id_municipio` int(2) NOT NULL,
  `total_origen` int(3) NOT NULL,
  PRIMARY KEY (`id_origen`),
  KEY `id_sexo` (`id_sexo`,`id_estado`,`id_mes`,`id_piso`,`id_municipio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo_escolar`
--

CREATE TABLE IF NOT EXISTS `periodo_escolar` (
  `id_periodo_escolar` int(10) NOT NULL AUTO_INCREMENT,
  `inicio` int(4) NOT NULL,
  `fin` int(4) NOT NULL,
  PRIMARY KEY (`id_periodo_escolar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `periodo_escolar`
--

INSERT INTO `periodo_escolar` (`id_periodo_escolar`, `inicio`, `fin`) VALUES
(3, 66666, 0),
(6, 2132, 2314),
(7, 2015, 2016),
(8, 2222, 2225),
(9, 2016, 2017);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piso`
--

CREATE TABLE IF NOT EXISTS `piso` (
  `id_piso` int(2) NOT NULL AUTO_INCREMENT,
  `descripcion_piso` varchar(50) DEFAULT NULL,
  `numero_piso` int(11) NOT NULL,
  PRIMARY KEY (`id_piso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `piso`
--

INSERT INTO `piso` (`id_piso`, `descripcion_piso`, `numero_piso`) VALUES
(3, 'Mediciona 1', 1),
(4, 'Medicina 2', 2),
(5, 'cirujia', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referido`
--

CREATE TABLE IF NOT EXISTS `referido` (
  `id_referido` int(10) NOT NULL AUTO_INCREMENT,
  `id_sexo` int(11) NOT NULL,
  `id_periodo_escolar` int(11) NOT NULL,
  `id_mes` int(11) NOT NULL,
  `id_piso` int(11) NOT NULL,
  `id_tipo_referido` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id_referido`),
  KEY `id_sexo` (`id_sexo`,`id_periodo_escolar`,`id_mes`,`id_piso`,`id_tipo_referido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_apoyo`
--

CREATE TABLE IF NOT EXISTS `servicio_apoyo` (
  `id_servicio_apoyo` int(10) NOT NULL AUTO_INCREMENT,
  `id_sexo` int(11) NOT NULL,
  `id_periodo_escolar` int(11) NOT NULL,
  `id_mes` int(11) NOT NULL,
  `id_piso` int(11) NOT NULL,
  `id_tipo_servicio` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id_servicio_apoyo`),
  KEY `id_sexo` (`id_sexo`,`id_periodo_escolar`,`id_mes`,`id_piso`,`id_tipo_servicio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Estructura de tabla para la tabla `tiempo_permanencia`
--

CREATE TABLE IF NOT EXISTS `tiempo_permanencia` (
  `id_tiempo_permanencia` int(11) NOT NULL AUTO_INCREMENT,
  `id_sexo` int(11) NOT NULL,
  `id_periodo_escolar` int(11) NOT NULL,
  `id_mes` int(11) NOT NULL,
  `id_piso` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `dias` int(11) NOT NULL,
  PRIMARY KEY (`id_tiempo_permanencia`),
  KEY `id_sexo` (`id_sexo`,`id_periodo_escolar`,`id_mes`,`id_piso`,`total`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_atencion`
--

CREATE TABLE IF NOT EXISTS `tipo_atencion` (
  `id_tipo_atencion` int(10) NOT NULL AUTO_INCREMENT,
  `tipo_atencion` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tipo_atencion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_edu_especial`
--

CREATE TABLE IF NOT EXISTS `tipo_edu_especial` (
  `id_tipo_edu_esp` int(2) NOT NULL AUTO_INCREMENT,
  `edu_especial` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tipo_edu_esp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_escolaridad`
--

CREATE TABLE IF NOT EXISTS `tipo_escolaridad` (
  `id_tipo_escolaridad` int(2) NOT NULL AUTO_INCREMENT,
  `tipo_escolaridad` varchar(10) NOT NULL,
  PRIMARY KEY (`id_tipo_escolaridad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_referido`
--

CREATE TABLE IF NOT EXISTS `tipo_referido` (
  `id_tipo_referido` int(2) NOT NULL,
  `tipo_referido` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_servicio`
--

CREATE TABLE IF NOT EXISTS `tipo_servicio` (
  `id_tipo_servicio` int(2) NOT NULL AUTO_INCREMENT,
  `tipo_servicio` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tipo_servicio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `clave`, `pregunta_secreta`, `nombre_usuario`, `respuesta_secreta`) VALUES
(1, 'wilbert@gmail.com', '123', 'home', 'Wilbert Angarita', ''),
(2, 'marita@marraida', '123', 'color_favorito', 'Maria Angarita', 'azul'),
(3, 'virginia', '123', 'color_favorito', 'Virginia Lusinchi', 'rojo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
