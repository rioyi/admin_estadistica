-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-02-2016 a las 21:24:24
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
  `id_tipo_atencion` int(10) NOT NULL AUTO_INCREMENT,
  `tipo_atencion` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tipo_atencion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `tipo_atencion`
--

INSERT INTO `tipo_atencion` (`id_tipo_atencion`, `tipo_atencion`) VALUES
(1, 'cirujia'),
(2, 'traumatología'),
(3, 'orl'),
(4, 'pediatria'),
(5, 'neurología'),
(6, 'cardiología'),
(7, 'nefrología'),
(8, 'urología'),
(9, 'neumología'),
(10, 'hermatología'),
(21, 'oncología'),
(22, 'dermatología'),
(25, 'gastrología'),
(26, 'infectología');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_edad`
--

CREATE TABLE IF NOT EXISTS `tipo_edad` (
  `id_tipo_edad` int(4) NOT NULL AUTO_INCREMENT,
  `tipo_edad` int(2) NOT NULL,
  PRIMARY KEY (`id_tipo_edad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `poblacion_atendida` int(15) NOT NULL,
  PRIMARY KEY (`id_tipo_poblacion_atendida`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_referido`
--

CREATE TABLE IF NOT EXISTS `tipo_referido` (
  `id_tipo_referido` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_referido` int(11) NOT NULL,
  PRIMARY KEY (`id_tipo_referido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_asistencia`
--

CREATE TABLE IF NOT EXISTS `total_asistencia` (
  `id_asistencia` int(4) NOT NULL AUTO_INCREMENT,
  `id_periodo_escolar` int(4) NOT NULL,
  `id_mes` int(4) NOT NULL,
  `id_sexo` int(4) NOT NULL,
  `fecha` date NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  KEY `id_sexo` (`id_sexo`,`id_periodo_escolar`,`id_mes`,`id_tipo_escolaridad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  KEY `id_sexo` (`id_sexo`,`id_periodo_escolar`,`id_mes`,`id_tipo_poblacion_atendida`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  KEY `id_sexo` (`id_sexo`,`id_periodo_escolar`,`id_mes`,`id_tipo_referido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  KEY `id_tipo_permanencia` (`id_tipo_permanencia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_visita_edad`
--

CREATE TABLE IF NOT EXISTS `total_visita_edad` (
  `id_visita_edad` int(11) NOT NULL,
  `id_periodo_escolar` int(11) NOT NULL,
  `id_mes` int(11) NOT NULL,
  `id_sexo` int(11) NOT NULL,
  `id_tipo_edad` int(11) NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `p4` int(11) NOT NULL,
  `p5` int(11) NOT NULL,
  `gi` int(11) NOT NULL,
  `gii` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
