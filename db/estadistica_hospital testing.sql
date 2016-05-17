-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2016 at 07:58 AM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `estadistica_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `docente`
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
-- Dumping data for table `docente`
--

INSERT INTO `docente` (`id_docente`, `nombre_docente`, `apellido_docente`, `email`, `direccion`, `telefono`, `piso`) VALUES
(1, 'maria', 'angarita', 'dasd@sdsadas.com', 'su casa', '3432432', 1),
(5, '1111', 'DSFDSF', '', 'DSFDSFD', 'DSFSDFSDF', 0),
(9, 'Marilyn', 'Monroe', '', 'USA', '5555555', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mes`
--

CREATE TABLE IF NOT EXISTS `mes` (
  `id_mes` int(2) NOT NULL AUTO_INCREMENT,
  `mes` varchar(10) NOT NULL,
  PRIMARY KEY (`id_mes`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `mes`
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
-- Table structure for table `periodo_escolar`
--

CREATE TABLE IF NOT EXISTS `periodo_escolar` (
  `id_periodo_escolar` int(10) NOT NULL AUTO_INCREMENT,
  `inicio` int(4) NOT NULL,
  `fin` int(4) NOT NULL,
  PRIMARY KEY (`id_periodo_escolar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `periodo_escolar`
--

INSERT INTO `periodo_escolar` (`id_periodo_escolar`, `inicio`, `fin`) VALUES
(3, 66666, 0),
(6, 2132, 2314),
(7, 2015, 2016),
(8, 6666, 6667),
(9, 2000, 2001);

-- --------------------------------------------------------

--
-- Table structure for table `sexo`
--

CREATE TABLE IF NOT EXISTS `sexo` (
  `id_sexo` int(1) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(8) NOT NULL,
  PRIMARY KEY (`id_sexo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sexo`
--

INSERT INTO `sexo` (`id_sexo`, `nombre`) VALUES
(1, 'Masculin'),
(2, 'Femenino'),
(3, 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_atencion`
--

CREATE TABLE IF NOT EXISTS `tipo_atencion` (
  `id_tipo_atencion` int(4) NOT NULL AUTO_INCREMENT,
  `tipo_atencion` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tipo_atencion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tipo_atencion`
--

INSERT INTO `tipo_atencion` (`id_tipo_atencion`, `tipo_atencion`) VALUES
(1, 'cirugia'),
(2, 'Traumatología'),
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
-- Table structure for table `tipo_edad`
--

CREATE TABLE IF NOT EXISTS `tipo_edad` (
  `id_tipo_edad` int(4) NOT NULL AUTO_INCREMENT,
  `tipo_edad` int(2) NOT NULL,
  PRIMARY KEY (`id_tipo_edad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tipo_edad`
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
(11, 10),
(12, 111),
(13, 12),
(14, 13),
(15, 14),
(16, 15),
(17, 16),
(18, 17),
(19, 18);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_escolaridad`
--

CREATE TABLE IF NOT EXISTS `tipo_escolaridad` (
  `id_tipo_escolaridad` int(4) NOT NULL AUTO_INCREMENT,
  `escolaridad` varchar(11) NOT NULL,
  PRIMARY KEY (`id_tipo_escolaridad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tipo_escolaridad`
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
-- Table structure for table `tipo_permanencia`
--

CREATE TABLE IF NOT EXISTS `tipo_permanencia` (
  `id_tipo_permanencia` int(4) NOT NULL AUTO_INCREMENT,
  `tiempo` varchar(11) NOT NULL,
  PRIMARY KEY (`id_tipo_permanencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tipo_permanencia`
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
-- Table structure for table `tipo_poblacion_atendida`
--

CREATE TABLE IF NOT EXISTS `tipo_poblacion_atendida` (
  `id_tipo_poblacion_atendida` int(4) NOT NULL AUTO_INCREMENT,
  `poblacion_atendida` varchar(15) NOT NULL,
  PRIMARY KEY (`id_tipo_poblacion_atendida`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tipo_poblacion_atendida`
--

INSERT INTO `tipo_poblacion_atendida` (`id_tipo_poblacion_atendida`, `poblacion_atendida`) VALUES
(1, 'En Aula'),
(2, 'En Habitación');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_referido`
--

CREATE TABLE IF NOT EXISTS `tipo_referido` (
  `id_tipo_referido` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_referido` varchar(15) NOT NULL,
  PRIMARY KEY (`id_tipo_referido`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tipo_referido`
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
-- Table structure for table `total_asistencia`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=356 ;

--
-- Dumping data for table `total_asistencia`
--

INSERT INTO `total_asistencia` (`id_asistencia`, `id_periodo_escolar`, `id_mes`, `id_sexo`, `dia`, `p1`, `p2`, `p3`, `p4`, `p5`, `gi`, `gii`) VALUES
(316, 7, 6, 1, 1, 1, 2, 3, 4, 5, 6, 7),
(317, 7, 6, 1, 2, 1, 2, 3, 4, 5, 6, 7),
(318, 7, 6, 1, 3, 1, 2, 3, 4, 5, 6, 7),
(319, 7, 6, 1, 4, 1, 2, 3, 4, 5, 6, 7),
(320, 7, 6, 1, 5, 1, 2, 3, 4, 5, 6, 7),
(321, 7, 6, 1, 6, 1, 2, 3, 4, 5, 6, 7),
(322, 7, 6, 1, 7, 1, 2, 3, 4, 5, 6, 7),
(323, 7, 6, 1, 8, 1, 2, 3, 4, 5, 6, 7),
(324, 7, 6, 1, 9, 1, 2, 3, 4, 5, 6, 7),
(325, 7, 6, 1, 10, 1, 2, 3, 4, 5, 6, 7),
(326, 7, 6, 1, 11, 1, 2, 3, 4, 5, 6, 7),
(327, 7, 6, 1, 12, 1, 2, 3, 4, 5, 6, 7),
(328, 7, 6, 1, 13, 1, 2, 3, 4, 5, 6, 7),
(329, 7, 6, 1, 14, 1, 2, 3, 4, 5, 6, 7),
(330, 7, 6, 1, 15, 1, 2, 3, 4, 5, 6, 7),
(331, 7, 6, 1, 16, 1, 2, 3, 4, 5, 6, 7),
(332, 7, 6, 1, 17, 1, 2, 3, 4, 5, 6, 7),
(333, 7, 6, 1, 18, 1, 2, 3, 4, 5, 6, 7),
(334, 7, 6, 1, 19, 1, 2, 3, 4, 5, 6, 7),
(335, 7, 6, 1, 20, 1, 2, 3, 4, 5, 6, 7),
(336, 7, 6, 2, 1, 1, 2, 3, 4, 5, 6, 7),
(337, 7, 6, 2, 2, 1, 2, 3, 4, 5, 6, 7),
(338, 7, 6, 2, 3, 1, 2, 3, 4, 5, 6, 7),
(339, 7, 6, 2, 4, 1, 2, 3, 4, 5, 6, 7),
(340, 7, 6, 2, 5, 1, 2, 3, 4, 5, 6, 7),
(341, 7, 6, 2, 6, 1, 2, 3, 4, 5, 6, 7),
(342, 7, 6, 2, 7, 1, 2, 3, 4, 5, 6, 7),
(343, 7, 6, 2, 8, 1, 2, 3, 4, 5, 6, 7),
(344, 7, 6, 2, 9, 1, 2, 3, 4, 5, 6, 7),
(345, 7, 6, 2, 10, 1, 2, 3, 4, 5, 6, 7),
(346, 7, 6, 2, 11, 1, 2, 3, 4, 5, 6, 7),
(347, 7, 6, 2, 12, 1, 2, 3, 4, 5, 6, 7),
(348, 7, 6, 2, 13, 1, 2, 3, 4, 5, 6, 7),
(349, 7, 6, 2, 14, 1, 2, 3, 4, 5, 6, 7),
(350, 7, 6, 2, 15, 1, 2, 3, 4, 5, 6, 7),
(351, 7, 6, 2, 16, 1, 2, 3, 4, 5, 6, 7),
(352, 7, 6, 2, 17, 1, 2, 3, 4, 5, 6, 7),
(353, 7, 6, 2, 18, 1, 2, 3, 4, 5, 6, 7),
(354, 7, 6, 2, 19, 1, 2, 3, 4, 5, 6, 7),
(355, 7, 6, 2, 20, 1, 2, 3, 4, 5, 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `total_atencion`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Dumping data for table `total_atencion`
--

INSERT INTO `total_atencion` (`id_atencion`, `id_periodo_escolar`, `id_mes`, `id_sexo`, `id_tipo_atencion`, `p1`, `p2`, `p3`, `p4`, `p5`, `gi`, `gii`) VALUES
(61, 7, 6, 1, 1, 1, 2, 3, 4, 5, 6, 7),
(62, 7, 6, 1, 2, 1, 2, 3, 4, 5, 6, 7),
(63, 7, 6, 1, 3, 1, 2, 3, 4, 5, 6, 7),
(64, 7, 6, 1, 4, 1, 2, 3, 4, 5, 6, 7),
(65, 7, 6, 1, 5, 1, 2, 3, 4, 5, 6, 7),
(66, 7, 6, 1, 6, 1, 2, 3, 4, 5, 6, 7),
(67, 7, 6, 1, 7, 1, 2, 3, 4, 5, 6, 7),
(68, 7, 6, 1, 8, 1, 2, 3, 4, 5, 6, 7),
(69, 7, 6, 1, 9, 1, 2, 3, 4, 5, 6, 7),
(70, 7, 6, 1, 10, 1, 2, 3, 4, 5, 6, 7),
(71, 7, 6, 1, 11, 1, 2, 3, 4, 5, 6, 7),
(72, 7, 6, 1, 12, 1, 2, 3, 4, 5, 6, 7),
(73, 7, 6, 1, 13, 1, 2, 3, 4, 5, 6, 7),
(74, 7, 6, 1, 14, 1, 2, 3, 4, 5, 6, 7),
(75, 7, 6, 2, 1, 1, 2, 3, 4, 5, 6, 7),
(76, 7, 6, 2, 2, 1, 2, 3, 4, 5, 6, 7),
(77, 7, 6, 2, 3, 1, 2, 3, 4, 5, 6, 7),
(78, 7, 6, 2, 4, 1, 2, 3, 4, 5, 6, 7),
(79, 7, 6, 2, 5, 1, 2, 3, 4, 5, 6, 7),
(80, 7, 6, 2, 6, 1, 2, 3, 4, 5, 6, 7),
(81, 7, 6, 2, 7, 1, 2, 3, 4, 5, 6, 7),
(82, 7, 6, 2, 8, 1, 2, 3, 4, 5, 6, 7),
(83, 7, 6, 2, 9, 1, 2, 3, 4, 5, 6, 7),
(84, 7, 6, 2, 10, 1, 2, 3, 4, 5, 6, 7),
(85, 7, 6, 2, 11, 1, 2, 3, 4, 5, 6, 7),
(86, 7, 6, 2, 12, 1, 2, 3, 4, 5, 6, 7),
(87, 7, 6, 2, 13, 1, 2, 3, 4, 5, 6, 7),
(88, 7, 6, 2, 14, 1, 2, 3, 4, 5, 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `total_escolaridad`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=179 ;

--
-- Dumping data for table `total_escolaridad`
--

INSERT INTO `total_escolaridad` (`id_escolaridad`, `id_sexo`, `id_periodo_escolar`, `id_mes`, `id_tipo_escolaridad`, `p1`, `p2`, `p3`, `p4`, `p5`, `gi`, `gii`) VALUES
(143, 1, 7, 6, 1, 1, 2, 3, 4, 5, 6, 7),
(144, 1, 7, 6, 2, 1, 2, 3, 4, 5, 6, 7),
(145, 1, 7, 6, 3, 1, 2, 3, 4, 5, 6, 7),
(146, 1, 7, 6, 4, 1, 2, 3, 4, 5, 6, 7),
(147, 1, 7, 6, 5, 1, 2, 3, 4, 5, 6, 7),
(148, 1, 7, 6, 6, 1, 2, 3, 4, 5, 6, 7),
(149, 1, 7, 6, 7, 1, 2, 3, 4, 5, 6, 7),
(150, 1, 7, 6, 8, 1, 2, 33, 4, 5, 6, 7),
(151, 1, 7, 6, 9, 1, 2, 3, 4, 5, 6, 7),
(152, 1, 7, 6, 10, 1, 2, 3, 4, 5, 6, 7),
(153, 1, 7, 6, 11, 1, 2, 3, 4, 5, 6, 7),
(154, 1, 7, 6, 12, 1, 2, 3, 4, 5, 6, 7),
(155, 1, 7, 6, 13, 1, 2, 3, 4, 5, 6, 7),
(156, 1, 7, 6, 14, 1, 2, 3, 4, 5, 6, 7),
(157, 1, 7, 6, 15, 1, 2, 3, 4, 5, 6, 7),
(158, 1, 7, 6, 16, 1, 2, 3, 4, 5, 6, 7),
(159, 1, 7, 6, 17, 1, 2, 3, 4, 5, 6, 7),
(160, 1, 7, 6, 18, 1, 2, 3, 4, 5, 6, 7),
(161, 2, 7, 6, 1, 1, 2, 3, 4, 5, 6, 7),
(162, 2, 7, 6, 2, 1, 2, 3, 4, 5, 6, 7),
(163, 2, 7, 6, 3, 1, 2, 3, 4, 5, 6, 7),
(164, 2, 7, 6, 4, 1, 2, 3, 4, 5, 6, 7),
(165, 2, 7, 6, 5, 1, 2, 3, 4, 5, 6, 7),
(166, 2, 7, 6, 6, 1, 2, 3, 4, 5, 6, 7),
(167, 2, 7, 6, 7, 1, 2, 3, 4, 5, 6, 7),
(168, 2, 7, 6, 8, 1, 2, 3, 4, 5, 6, 7),
(169, 2, 7, 6, 9, 1, 2, 3, 4, 5, 6, 7),
(170, 2, 7, 6, 10, 1, 2, 3, 4, 5, 6, 7),
(171, 2, 7, 6, 11, 1, 2, 3, 4, 5, 6, 7),
(172, 2, 7, 6, 12, 1, 2, 3, 4, 5, 6, 7),
(173, 2, 7, 6, 13, 1, 2, 3, 4, 5, 6, 7),
(174, 2, 7, 6, 14, 1, 2, 3, 4, 5, 6, 7),
(175, 2, 7, 6, 15, 1, 2, 3, 4, 5, 6, 7),
(176, 2, 7, 6, 16, 1, 2, 3, 4, 5, 6, 7),
(177, 2, 7, 6, 17, 1, 2, 3, 4, 5, 6, 7),
(178, 2, 7, 6, 18, 1, 2, 3, 4, 5, 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `total_poblacion_atendida`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `total_poblacion_atendida`
--

INSERT INTO `total_poblacion_atendida` (`id_poblacion_atendida`, `id_sexo`, `id_periodo_escolar`, `id_mes`, `id_tipo_poblacion_atendida`, `p1`, `p2`, `p3`, `p4`, `p5`, `gi`, `gii`) VALUES
(9, 1, 7, 6, 1, 1, 2, 3, 4, 5, 6, 7),
(10, 1, 7, 6, 2, 1, 2, 3, 4, 5, 6, 7),
(11, 2, 7, 6, 1, 1, 2, 3, 4, 5, 6, 7),
(12, 2, 7, 6, 2, 1, 2, 3, 4, 5, 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `total_referidos`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `total_referidos`
--

INSERT INTO `total_referidos` (`id_referido`, `id_sexo`, `id_periodo_escolar`, `id_mes`, `id_tipo_referido`, `p1`, `p2`, `p3`, `p4`, `p5`, `gi`, `gii`) VALUES
(73, 1, 7, 6, 1, 1, 2, 3, 4, 5, 6, 7),
(74, 1, 7, 6, 2, 1, 2, 3, 4, 5, 6, 7),
(75, 1, 7, 6, 3, 1, 2, 3, 4, 5, 6, 7),
(76, 1, 7, 6, 4, 1, 2, 3, 4, 5, 6, 7),
(77, 1, 7, 6, 5, 1, 2, 3, 4, 5, 6, 7),
(78, 1, 7, 6, 6, 1, 2, 3, 4, 5, 6, 7),
(79, 1, 7, 6, 7, 1, 2, 3, 4, 5, 6, 7),
(80, 1, 7, 6, 8, 1, 2, 3, 4, 5, 6, 7),
(81, 1, 7, 6, 9, 1, 2, 3, 4, 5, 6, 7),
(82, 1, 7, 6, 10, 1, 2, 3, 4, 5, 6, 7),
(83, 1, 7, 6, 11, 1, 2, 3, 4, 5, 6, 7),
(84, 1, 7, 6, 12, 1, 2, 3, 4, 5, 6, 7),
(85, 2, 7, 6, 1, 1, 2, 3, 4, 5, 6, 7),
(86, 2, 7, 6, 2, 1, 2, 3, 4, 5, 6, 7),
(87, 2, 7, 6, 3, 1, 2, 3, 4, 5, 6, 7),
(88, 2, 7, 6, 4, 1, 2, 3, 4, 5, 6, 7),
(89, 2, 7, 6, 5, 1, 2, 3, 4, 5, 6, 7),
(90, 2, 7, 6, 6, 1, 2, 3, 4, 5, 6, 7),
(91, 2, 7, 6, 7, 1, 2, 3, 4, 5, 6, 7),
(92, 2, 7, 6, 8, 1, 2, 3, 4, 5, 6, 7),
(93, 2, 7, 6, 9, 1, 2, 3, 4, 5, 6, 7),
(94, 2, 7, 6, 10, 1, 2, 3, 4, 5, 6, 7),
(95, 2, 7, 6, 11, 1, 2, 3, 4, 5, 6, 7),
(96, 2, 7, 6, 12, 1, 2, 3, 4, 5, 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `total_tiempo_permanencia`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `total_tiempo_permanencia`
--

INSERT INTO `total_tiempo_permanencia` (`id_tiempo_permanencia`, `id_sexo`, `id_periodo_escolar`, `id_mes`, `id_tipo_permanencia`, `p1`, `p2`, `p3`, `p4`, `p5`, `gi`, `gii`) VALUES
(57, 1, 7, 6, 1, 1, 2, 3, 4, 5, 6, 7),
(58, 1, 7, 6, 2, 1, 2, 3, 4, 5, 6, 7),
(59, 1, 7, 6, 3, 1, 2, 3, 4, 5, 6, 7),
(60, 1, 7, 6, 4, 1, 2, 3, 4, 5, 6, 7),
(61, 1, 7, 6, 5, 1, 2, 3, 4, 5, 6, 7),
(62, 1, 7, 6, 6, 1, 2, 3, 4, 5, 6, 7),
(63, 1, 7, 6, 7, 1, 2, 3, 4, 5, 6, 7),
(64, 2, 7, 6, 1, 1, 2, 3, 4, 5, 6, 7),
(65, 2, 7, 6, 2, 1, 2, 3, 4, 5, 6, 7),
(66, 2, 7, 6, 3, 1, 2, 3, 4, 5, 6, 7),
(67, 2, 7, 6, 4, 1, 2, 3, 4, 5, 6, 7),
(68, 2, 7, 6, 5, 1, 2, 3, 4, 5, 6, 7),
(69, 2, 7, 6, 6, 1, 2, 3, 4, 5, 6, 7),
(70, 2, 7, 6, 7, 1, 2, 3, 4, 5, 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `total_visita_edad`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

--
-- Dumping data for table `total_visita_edad`
--

INSERT INTO `total_visita_edad` (`id_visita_edad`, `id_periodo_escolar`, `id_mes`, `id_sexo`, `id_tipo_edad`, `p1`, `p2`, `p3`, `p4`, `p5`, `gi`, `gii`) VALUES
(73, 7, 6, 1, 1, 1, 2, 3, 4, 5, 6, 2),
(74, 7, 6, 1, 2, 1, 2, 3, 4, 5, 6, 2),
(75, 7, 6, 1, 3, 1, 2, 3, 4, 5, 6, 2),
(76, 7, 6, 1, 4, 1, 2, 3, 4, 5, 6, 2),
(77, 7, 6, 1, 5, 1, 2, 3, 4, 5, 6, 2),
(78, 7, 6, 1, 6, 1, 2, 3, 4, 5, 6, 2),
(79, 7, 6, 1, 7, 1, 2, 3, 4, 5, 6, 7),
(80, 7, 6, 1, 8, 1, 2, 3, 4, 5, 6, 7),
(81, 7, 6, 1, 9, 1, 2, 3, 4, 5, 6, 7),
(82, 7, 6, 1, 10, 1, 2, 3, 4, 5, 6, 7),
(83, 7, 6, 1, 11, 1, 2, 3, 4, 5, 6, 7),
(84, 7, 6, 1, 12, 1, 2, 3, 4, 5, 6, 7),
(85, 7, 6, 1, 13, 1, 2, 3, 4, 5, 6, 7),
(86, 7, 6, 1, 14, 1, 2, 3, 4, 5, 6, 7),
(87, 7, 6, 1, 15, 1, 2, 3, 4, 5, 6, 7),
(88, 7, 6, 1, 16, 1, 2, 3, 4, 5, 6, 7),
(89, 7, 6, 1, 17, 1, 2, 3, 4, 5, 6, 7),
(90, 7, 6, 1, 18, 1, 2, 3, 4, 5, 6, 7),
(91, 7, 6, 2, 1, 1, 2, 3, 4, 5, 6, 2),
(92, 7, 6, 2, 2, 1, 2, 3, 4, 5, 6, 2),
(93, 7, 6, 2, 3, 1, 2, 3, 4, 5, 6, 2),
(94, 7, 6, 2, 4, 1, 2, 3, 4, 5, 6, 2),
(95, 7, 6, 2, 5, 1, 2, 3, 4, 5, 6, 2),
(96, 7, 6, 2, 6, 1, 2, 3, 4, 5, 6, 2),
(97, 7, 6, 2, 7, 1, 2, 3, 4, 5, 6, 7),
(98, 7, 6, 2, 8, 1, 2, 3, 4, 5, 6, 7),
(99, 7, 6, 2, 9, 1, 2, 3, 4, 5, 6, 7),
(100, 7, 6, 2, 10, 1, 2, 3, 4, 5, 6, 7),
(101, 7, 6, 2, 11, 1, 2, 3, 4, 5, 6, 7),
(102, 7, 6, 2, 12, 1, 2, 3, 4, 5, 6, 7),
(103, 7, 6, 2, 13, 1, 2, 3, 4, 5, 6, 7),
(104, 7, 6, 2, 14, 1, 2, 3, 4, 5, 6, 7),
(105, 7, 6, 2, 15, 1, 2, 3, 4, 5, 6, 7),
(106, 7, 6, 2, 16, 1, 2, 3, 4, 5, 6, 7),
(107, 7, 6, 2, 17, 1, 2, 3, 4, 5, 6, 7),
(108, 7, 6, 2, 18, 1, 2, 3, 4, 5, 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
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
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `clave`, `pregunta_secreta`, `nombre_usuario`, `respuesta_secreta`) VALUES
(1, 'wilbert@gmail.com', '123', 'home', 'Wilbert Angarita', ''),
(2, 'marita@marraida', '123', 'color_favorito', 'Maria Angarita', 'azul'),
(3, 'virginia', '123', 'color_favorito', 'Virginia Lusinchi', 'rojo'),
(4, 'root', 'root', '', 'Root', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `total_asistencia`
--
ALTER TABLE `total_asistencia`
  ADD CONSTRAINT `total_asistencia_ibfk_1` FOREIGN KEY (`id_periodo_escolar`) REFERENCES `periodo_escolar` (`id_periodo_escolar`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_asistencia_ibfk_2` FOREIGN KEY (`id_mes`) REFERENCES `mes` (`id_mes`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_asistencia_ibfk_3` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`) ON UPDATE CASCADE;

--
-- Constraints for table `total_atencion`
--
ALTER TABLE `total_atencion`
  ADD CONSTRAINT `total_atencion_ibfk_1` FOREIGN KEY (`id_periodo_escolar`) REFERENCES `periodo_escolar` (`id_periodo_escolar`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_atencion_ibfk_2` FOREIGN KEY (`id_mes`) REFERENCES `mes` (`id_mes`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_atencion_ibfk_3` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_atencion_ibfk_4` FOREIGN KEY (`id_tipo_atencion`) REFERENCES `tipo_atencion` (`id_tipo_atencion`) ON UPDATE CASCADE;

--
-- Constraints for table `total_escolaridad`
--
ALTER TABLE `total_escolaridad`
  ADD CONSTRAINT `total_escolaridad_ibfk_1` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_escolaridad_ibfk_2` FOREIGN KEY (`id_periodo_escolar`) REFERENCES `periodo_escolar` (`id_periodo_escolar`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_escolaridad_ibfk_3` FOREIGN KEY (`id_mes`) REFERENCES `mes` (`id_mes`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_escolaridad_ibfk_4` FOREIGN KEY (`id_tipo_escolaridad`) REFERENCES `tipo_escolaridad` (`id_tipo_escolaridad`) ON UPDATE CASCADE;

--
-- Constraints for table `total_poblacion_atendida`
--
ALTER TABLE `total_poblacion_atendida`
  ADD CONSTRAINT `total_poblacion_atendida_ibfk_1` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_poblacion_atendida_ibfk_2` FOREIGN KEY (`id_periodo_escolar`) REFERENCES `periodo_escolar` (`id_periodo_escolar`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_poblacion_atendida_ibfk_3` FOREIGN KEY (`id_mes`) REFERENCES `mes` (`id_mes`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_poblacion_atendida_ibfk_4` FOREIGN KEY (`id_tipo_poblacion_atendida`) REFERENCES `tipo_poblacion_atendida` (`id_tipo_poblacion_atendida`) ON UPDATE CASCADE;

--
-- Constraints for table `total_referidos`
--
ALTER TABLE `total_referidos`
  ADD CONSTRAINT `total_referidos_ibfk_1` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_referidos_ibfk_2` FOREIGN KEY (`id_periodo_escolar`) REFERENCES `periodo_escolar` (`id_periodo_escolar`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_referidos_ibfk_3` FOREIGN KEY (`id_mes`) REFERENCES `mes` (`id_mes`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_referidos_ibfk_4` FOREIGN KEY (`id_tipo_referido`) REFERENCES `tipo_referido` (`id_tipo_referido`) ON UPDATE CASCADE;

--
-- Constraints for table `total_tiempo_permanencia`
--
ALTER TABLE `total_tiempo_permanencia`
  ADD CONSTRAINT `total_tiempo_permanencia_ibfk_1` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_tiempo_permanencia_ibfk_2` FOREIGN KEY (`id_periodo_escolar`) REFERENCES `periodo_escolar` (`id_periodo_escolar`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_tiempo_permanencia_ibfk_3` FOREIGN KEY (`id_mes`) REFERENCES `mes` (`id_mes`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_tiempo_permanencia_ibfk_4` FOREIGN KEY (`id_tipo_permanencia`) REFERENCES `tipo_permanencia` (`id_tipo_permanencia`) ON UPDATE CASCADE;

--
-- Constraints for table `total_visita_edad`
--
ALTER TABLE `total_visita_edad`
  ADD CONSTRAINT `total_visita_edad_ibfk_1` FOREIGN KEY (`id_periodo_escolar`) REFERENCES `periodo_escolar` (`id_periodo_escolar`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_visita_edad_ibfk_2` FOREIGN KEY (`id_mes`) REFERENCES `mes` (`id_mes`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_visita_edad_ibfk_3` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `total_visita_edad_ibfk_4` FOREIGN KEY (`id_tipo_edad`) REFERENCES `tipo_edad` (`id_tipo_edad`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
