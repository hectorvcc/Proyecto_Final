-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2014 a las 00:59:54
-- Versión del servidor: 5.6.11
-- Versión de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


--
-- Base de datos: `bolsaempleo`
--
CREATE DATABASE IF NOT EXISTS `bolsaempleo` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `bolsaempleo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `DNI` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `EXP` int(5) NOT NULL,
  `IDPROF` int(3) NOT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`DNI`),
  KEY `IDPROF` (`IDPROF`),
  KEY `IDPROF_2` (`IDPROF`),
  KEY `IDPROF_3` (`IDPROF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`DNI`, `EXP`, `IDPROF`, `NOMBRE`) VALUES
('11000000A', 1111, 19, 'Sandra'),
('11111111A', 1111, 17, 'Cristina'),
('22000000B', 2222, 19, 'Daniel'),
('22222222B', 2222, 17, 'Joel'),
('33000000C', 3333, 19, 'Irene'),
('33333333C', 3333, 17, 'Lucia'),
('44000000D', 4444, 19, 'Ivan'),
('44444444D', 4444, 17, 'Xin'),
('55000000E', 5555, 19, 'Elisa'),
('66000000F', 6666, 19, 'Adolfo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cestudios`
--

CREATE TABLE IF NOT EXISTS `cestudios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DNI` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `ESTUDIO` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `FECINI` date NOT NULL,
  `FECFIN` date NOT NULL,
  `TITULO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `DNI` (`DNI`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=59 ;

--
-- Volcado de datos para la tabla `cestudios`
--

INSERT INTO `cestudios` (`ID`, `DNI`, `ESTUDIO`, `FECINI`, `FECFIN`, `TITULO`) VALUES
(46, '11000000A', 'Ciclo Formativo Grado Superior', '2010-10-14', '2012-06-22', 'Imagen'),
(47, '11000000A', 'Ciclo Formativo Grado Superior', '2012-06-19', '2014-06-23', 'DAM'),
(48, '33000000C', 'Ciclo Formativo Grado Medio', '2008-04-30', '2010-08-07', 'Estetica'),
(49, '33000000C', 'Ciclo Formativo Grado Superior', '2012-06-04', '2014-07-08', 'DAW'),
(50, '44000000D', 'Ciclo Formativo Grado Superior', '2010-04-03', '2014-06-02', 'DAM'),
(51, '55000000E', 'Ciclo Formativo Grado Superior', '2006-07-08', '2008-09-08', 'DAW'),
(52, '55000000E', 'Ciclo Formativo Grado Superior', '2010-08-09', '2013-06-03', 'DAM'),
(53, '66000000F', 'Licenciado', '2000-04-09', '2008-06-07', 'Derecho'),
(54, '66000000F', 'Ciclo Formativo Grado Superior', '2010-08-09', '2013-08-09', 'DAM'),
(55, '11111111A', 'Ciclo Formativo Grado Superior', '2012-08-09', '2014-05-09', 'RealizaciÃ³n'),
(56, '22222222B', 'Ciclo Formativo Grado Superior', '2012-08-09', '2014-05-09', 'DAW'),
(57, '33333333C', 'Ciclo Formativo Grado Superior', '2012-08-09', '2014-03-08', 'DAM'),
(58, '44444444D', 'Postgrado', '2005-09-08', '2014-08-09', 'Informatica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cexperiencia`
--

CREATE TABLE IF NOT EXISTS `cexperiencia` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DNI` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `EMPRESA` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `SECTOR` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `FECINI` date NOT NULL,
  `FECFIN` date NOT NULL,
  `PUESTO` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `DNI` (`DNI`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=43 ;

--
-- Volcado de datos para la tabla `cexperiencia`
--

INSERT INTO `cexperiencia` (`ID`, `DNI`, `EMPRESA`, `SECTOR`, `FECINI`, `FECFIN`, `PUESTO`) VALUES
(35, '11000000A', 'Mediapro', 'Correos y Telecomunicaciones', '2010-02-17', '2012-07-04', 'Empleado'),
(36, '33000000C', 'Nails Factory', 'Servicios Personales', '2009-01-02', '2012-04-07', 'Especialista'),
(37, '44000000D', 'Jack&Jones', 'Comercio(al por mayor y al por menor)', '2004-05-07', '2008-09-08', 'Empleado'),
(38, '44000000D', 'G-Star', 'Comercio(al por mayor y al por menor)', '2008-09-08', '2013-09-05', 'Especialista'),
(39, '55000000E', 'Altin', 'Actividades Informaticas', '2006-08-09', '2013-08-09', 'Empleado'),
(40, '66000000F', 'Alcampo', 'Comercio(al por mayor y al por menor)', '2000-08-09', '2005-07-08', 'Empleado'),
(41, '22222222B', 'BQ ', 'Correos y Telecomunicaciones', '2010-09-08', '2013-05-06', 'Empleado'),
(42, '44444444D', 'Google', 'Actividades Informaticas', '2007-03-09', '2014-07-08', 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cidioma`
--

CREATE TABLE IF NOT EXISTS `cidioma` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DNI` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `IDIOMA` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `NIVEL` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `DNI` (`DNI`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=65 ;

--
-- Volcado de datos para la tabla `cidioma`
--

INSERT INTO `cidioma` (`ID`, `DNI`, `IDIOMA`, `NIVEL`) VALUES
(45, '11000000A', 'Ingles', 'Bajo'),
(46, '11000000A', 'Ingles', 'Bajo'),
(47, '22000000B', 'Ingles', 'Alto'),
(48, '22000000B', 'Ingles', 'Alto'),
(49, '33000000C', 'Ingles', 'Bajo'),
(50, '33000000C', 'Ingles', 'Bajo'),
(51, '44000000D', 'ingles', 'ingles'),
(52, '44000000D', '', ''),
(53, '55000000E', 'ingles', 'ingles'),
(54, '55000000E', '', ''),
(55, '66000000F', 'ingles', 'ingles'),
(56, '66000000F', '', ''),
(57, '11111111A', 'ingles', 'ingles'),
(58, '11111111A', '', ''),
(59, '22222222B', 'ingles', 'ingles'),
(60, '22222222B', 'ingles', 'ingles'),
(61, '33333333C', 'Ingles', 'Bajo'),
(62, '33333333C', 'Ingles', 'Bajo'),
(63, '44444444D', 'ingles', 'ingles'),
(64, '44444444D', 'ingles', 'ingles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curriculum`
--

CREATE TABLE IF NOT EXISTS `curriculum` (
  `DNI` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `NOMBRE` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `APE` varchar(35) COLLATE utf8_spanish2_ci NOT NULL,
  `FEC_NAC` date NOT NULL,
  `SEXO` varchar(6) COLLATE utf8_spanish2_ci NOT NULL,
  `DIREC` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `LOC` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `PROV` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `CP` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `TEL` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `MOV` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `MAIL` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `VEHICULO` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `CARNE` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `FECHA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `FOTO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `OBSER` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`DNI`),
  KEY `DNI` (`DNI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `curriculum`
--

INSERT INTO `curriculum` (`DNI`, `NOMBRE`, `APE`, `FEC_NAC`, `SEXO`, `DIREC`, `LOC`, `PROV`, `CP`, `TEL`, `MOV`, `MAIL`, `VEHICULO`, `CARNE`, `FECHA`, `FOTO`, `OBSER`) VALUES
('11000000A', 'Sandra', 'Lopez', '1992-02-06', 'mujer', 'Paseo del pireo 14', 'Fuenlabrada', 'MADRID', '28943', '916077644', '680453277', 'sandra@gmail.com', 'no', 'B', '2014-06-18 16:52:17', 'imagenes/11000000A', ''),
('11111111A', 'Cristina', 'Garcia', '1990-08-09', 'mujer', 'calle lluvia', 'mostoles', 'PONTEVEDRA', '29837', '918769027', '908276354', 'cristina@gmail.com', 'no', 'Sin permiso', '2014-06-18 18:36:35', 'imagenes/11111111A', ''),
('22000000B', 'Daniel', 'Arevalo', '1990-03-15', 'hombre', 'julio gonzalezPARLAS', '', '', '', '', '', '', 'no', 'Sin permiso', '2014-06-18 16:57:44', 'imagenes/22000000B', ''),
('22222222B', 'Joel', 'Martin', '1992-06-18', 'hombre', 'calle almocha', 'madrid', 'MADRID', '28983', '917823984', '093874676', 'joel@gmail.com', 'no', 'Sin permiso', '2014-06-18 18:40:06', 'imagenes/22222222B', ''),
('33000000C', 'Irene', 'Arenas', '1991-07-22', 'mujer', 'calle falsa 3', 'pinto', 'TOLEDO', '28567', '917685434', '786528967', 'irene@gmail.es', 'no', 'Sin permiso', '2014-06-18 17:26:09', 'imagenes/33000000C', ''),
('33333333C', 'Lucia', 'Constantino', '1991-05-22', 'mujer', 'calle cojin', 'pinto', '', '', '915642873', '765287394', 'lucia@gmail.com', 'no', 'B', '2014-06-18 18:42:09', 'imagenes/33333333C', ''),
('44000000D', 'Ivan', 'Archidona', '1987-12-03', 'hombre', 'calle gloria', 'leganes', 'HUELVA', '28945', '917864973', '987367482', 'ivan@gmail.com', 'si', 'BTP', '2014-06-18 17:37:07', 'imagenes/44000000D', ''),
('44444444D', 'Xin', 'Fao', '1986-08-09', 'hombre', 'calle lejos', 'guanyu', 'SEGOVIA', '28763', '91786476', '876123452', 'xin@gmail.com', 'no', 'Sin permiso', '2014-06-18 18:45:45', 'imagenes/44444444D', ''),
('55000000E', 'Elisa', 'Urbina', '1985-03-06', 'mujer', 'calle molino 5', 'mostoles', 'CADIZ', '25643', '918763487', '982675345', 'elisa@gmail.es', 'si', 'B', '2014-06-18 17:43:06', 'imagenes/55000000E', ''),
('66000000F', 'Adolfo', 'Segura', '1990-08-09', 'hombre', 'calle remolino 3', 'alcorcon', 'ISLAS BALEARES', '29887', '927653874', '982876947', 'adolfo@gmail.com', 'no', 'Sin permiso', '2014-06-18 17:48:33', 'imagenes/66000000F', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `CIF` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `CLAVE` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `NOMBRE` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `SECTOR` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `DIREC` varchar(35) COLLATE utf8_spanish2_ci NOT NULL,
  `LOC` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `PROV` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `CP` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `TEL` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `WEB` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `NOM_REP` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `TEL_REP` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `MAIL_REP` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `FECHA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `FOTO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`CIF`),
  KEY `CIF` (`CIF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`CIF`, `CLAVE`, `NOMBRE`, `SECTOR`, `DIREC`, `LOC`, `PROV`, `CP`, `TEL`, `WEB`, `NOM_REP`, `TEL_REP`, `MAIL_REP`, `FECHA`, `FOTO`) VALUES
('A11111111', '123', 'Altin', 'Actividades Informaticas', 'calle genial', 'las rozas', 'MADRID', '27654', '918763726', 'www.altin.es', 'Contacto Altin', '918273874', 'contacto@altin.es', '2014-06-18 17:54:02', 'imagenes/A11111111'),
('B22222222', '123', 'Everis', 'Actividades Informaticas', 'calle galicia', 'aranjuez', 'MADRID', '20983', '916528734', 'www.everis.com', 'Contacto Everis', '918762938', 'contacto@everis.com', '2014-06-18 17:56:19', 'imagenes/B22222222'),
('C33333333', '123', 'Indra', 'Actividades Informaticas', 'calle manopla', 'mahadaonda', 'MADRID', '29873', '926739847', 'www.indracompany.com', 'Contacto Indra', '918762673', 'contacto@indra.com', '2014-06-18 17:59:02', 'imagenes/C33333333'),
('D44444444', '123', 'Accenture', 'Actividades Informaticas', 'calle recinto', 'madrid', 'MADRID', '27654', '918762983', 'www.accenture.com', 'Contacto Accenture', '916729834', 'contacto@accenture.com', '2014-06-18 18:01:17', 'imagenes/D44444444'),
('E55555555', '123', 'Vass', 'Actividades Informaticas', 'calle templado', 'fuenlabrada', 'MADRID', '28943', '918792345', 'www.vass.es', 'Contacto Vass', '917682534', 'contacto@vass.com', '2014-06-18 18:03:35', 'imagenes/E55555555');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudio`
--

CREATE TABLE IF NOT EXISTS `estudio` (
  `estudio` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`estudio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudio`
--

INSERT INTO `estudio` (`estudio`) VALUES
('Bachillerato'),
('Ciclo Formativo Grado Medio'),
('Ciclo Formativo Grado Superior'),
('Diplomado'),
('Educacion Secundaria Obligatoria'),
('Ensenianzas Artisticas'),
('Ensenianzas Deportivas'),
('Ingeniero Superior'),
('Ingeniero Tecnico'),
('Licenciado'),
('Master'),
('Postgrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscritos`
--

CREATE TABLE IF NOT EXISTS `inscritos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDOFERTA` int(11) NOT NULL,
  `DNI` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `CIF` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `IDOFERTA` (`IDOFERTA`),
  KEY `DNI` (`DNI`),
  KEY `CIF` (`CIF`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=105 ;

--
-- Volcado de datos para la tabla `inscritos`
--

INSERT INTO `inscritos` (`ID`, `IDOFERTA`, `DNI`, `CIF`) VALUES
(65, 19, '44444444D', 'D44444444'),
(66, 17, '44444444D', 'C33333333'),
(67, 13, '44444444D', 'A11111111'),
(68, 15, '11111111A', 'B22222222'),
(69, 12, '11111111A', 'A11111111'),
(70, 16, '11111111A', 'C33333333'),
(72, 21, '11111111A', 'E55555555'),
(73, 16, '22222222B', 'C33333333'),
(74, 12, '22222222B', 'A11111111'),
(75, 20, '22222222B', 'E55555555'),
(76, 14, '22222222B', 'B22222222'),
(77, 15, '33333333C', 'B22222222'),
(78, 18, '33333333C', 'D44444444'),
(79, 16, '33333333C', 'C33333333'),
(80, 15, '11000000A', 'B22222222'),
(81, 16, '11000000A', 'C33333333'),
(82, 18, '11000000A', 'D44444444'),
(83, 19, '11000000A', 'D44444444'),
(84, 21, '11000000A', 'E55555555'),
(85, 14, '22000000B', 'B22222222'),
(86, 13, '22000000B', 'A11111111'),
(87, 15, '22000000B', 'B22222222'),
(88, 18, '22000000B', 'D44444444'),
(89, 20, '33000000C', 'E55555555'),
(90, 16, '33000000C', 'C33333333'),
(91, 12, '33000000C', 'A11111111'),
(92, 15, '33000000C', 'B22222222'),
(93, 20, '44000000D', 'E55555555'),
(94, 17, '44000000D', 'C33333333'),
(95, 15, '44000000D', 'B22222222'),
(96, 18, '44000000D', 'D44444444'),
(97, 13, '44000000D', 'A11111111'),
(98, 14, '55000000E', 'B22222222'),
(99, 20, '55000000E', 'E55555555'),
(100, 21, '55000000E', 'E55555555'),
(101, 12, '55000000E', 'A11111111'),
(102, 17, '66000000F', 'C33333333'),
(103, 13, '66000000F', 'A11111111'),
(104, 19, '66000000F', 'D44444444');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

CREATE TABLE IF NOT EXISTS `oferta` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CIF` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `DESCRIP` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `PUESTO` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `SECTOR` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `VACANTES` int(3) NOT NULL,
  `CONTRATO` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `HORARIO` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `ESTUDIOS` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `LOC` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `PROV` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `EXPMIN` int(2) NOT NULL,
  `FECHA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ESTADO` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`),
  KEY `CIF` (`CIF`),
  KEY `CIF_2` (`CIF`),
  KEY `CIF_3` (`CIF`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `oferta`
--

INSERT INTO `oferta` (`ID`, `CIF`, `DESCRIP`, `PUESTO`, `SECTOR`, `VACANTES`, `CONTRATO`, `HORARIO`, `ESTUDIOS`, `LOC`, `PROV`, `EXPMIN`, `FECHA`, `ESTADO`) VALUES
(12, 'A11111111', 'Ayudante de desarollo de aplicaciones web', 'Becario/Practicas', '', 5, '1 aÃ±o', '9:00-14:00', 'Ciclo Formativo Grado Superior', 'las rozas', 'MADRID', 1, '2014-06-18 18:09:20', 1),
(13, 'A11111111', 'Jefe de departamento de gestiÃ³n de clientes/ Se requiere nivel alto de inglÃ©s', 'Especialista', '', 1, 'Indefinido', '9:00-18:00', 'Diplomado', 'madrid', 'madrid', 2, '2014-06-18 18:12:09', 1),
(14, 'B22222222', 'Mantenimiento de equipos informaticos', 'Empleado', '', 3, 'A media jornada', '10:00-15:00', 'Ciclo Formativo Grado Superior', 'getafe', 'MADRID', 1, '2014-06-18 18:13:28', 0),
(15, 'B22222222', 'Comercial / Requiere buena presencia y facilidad de habla ', 'Empleado', '', 2, '2 aÃ±os', '9:00-18:00', 'Ciclo Formativo Grado Superior', 'parla', 'MADRID', 2, '2014-06-18 18:15:18', 0),
(16, 'C33333333', 'DiseÃ±o y mantenimiento de paginas web', 'Becario/Practicas', '', 10, '6 meses', '10:00-16:00', 'Ciclo Formativo Grado Superior', 'benidorm', 'VALENCIA', 1, '2014-06-18 18:17:40', 1),
(17, 'C33333333', 'Director comercial / Requiere nivel alto de ingles y aleman', 'Direccion/Gerencia', '', 1, 'Indefinido', '9:00-18:00', 'Master', 'benalmadena', 'MALAGA', 4, '2014-06-18 18:19:19', 1),
(18, 'D44444444', 'Desarollo de base datos', 'Empleado', '', 2, 'Indefinido', '9:00-16:00', 'Ciclo Formativo Grado Superior', 'leganes', 'HUELVA', 2, '2014-06-18 18:20:32', 1),
(19, 'D44444444', 'DiseÃ±ador de paginas web', 'Especialista', '', 2, '2 aÃ±os', '9:00-16:00', 'Ciclo Formativo Grado Superior', 'Fuenlabrada', 'MADRID', 2, '2014-06-18 18:21:40', 1),
(20, 'E55555555', 'Mantenimiento de paginas web y equipos informaticos', 'Becario/Practicas', '', 4, '1 aÃ±o', '9:00-14:00', 'Ciclo Formativo Grado Superior', 'malasaÃ±a', 'CADIZ', 1, '2014-06-18 18:22:36', 1),
(21, 'E55555555', 'Desarollo de aplicaciones web y multiplataforma', 'Empleado', '', 2, 'Indefinido', '9:00-18:00', 'Ciclo Formativo Grado Superior', 'grande', 'SEVILLA', 2, '2014-06-18 18:23:48', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE IF NOT EXISTS `permiso` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`ID`, `TIPO`) VALUES
(1, 'Sin permiso'),
(2, 'A1'),
(3, 'A2'),
(4, 'AM'),
(5, 'B'),
(6, 'B+E'),
(7, 'BTP'),
(8, 'C'),
(9, 'C+E'),
(10, 'C1'),
(11, 'C1+E'),
(12, 'D'),
(13, 'D+E'),
(14, 'D1'),
(15, 'D1+E');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proceso`
--

CREATE TABLE IF NOT EXISTS `proceso` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DNI` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `IDOFERTA` int(11) NOT NULL,
  `LLAMADA` int(11) NOT NULL,
  `ENTREVISTA` int(11) NOT NULL,
  `CONTRATO` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `DNI` (`DNI`),
  KEY `IDOFERTA` (`IDOFERTA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=93 ;

--
-- Volcado de datos para la tabla `proceso`
--

INSERT INTO `proceso` (`ID`, `DNI`, `IDOFERTA`, `LLAMADA`, `ENTREVISTA`, `CONTRATO`) VALUES
(53, '44444444D', 19, 1, 1, 0),
(54, '44444444D', 17, 1, 1, 1),
(55, '44444444D', 13, 1, 1, 1),
(56, '11111111A', 15, 1, 0, 0),
(57, '11111111A', 12, 0, 0, 0),
(58, '11111111A', 16, 1, 1, 0),
(59, '11111111A', 19, 0, 0, 0),
(60, '11111111A', 21, 1, 1, 1),
(61, '22222222B', 16, 1, 1, 0),
(62, '22222222B', 12, 1, 1, 1),
(63, '22222222B', 20, 1, 1, 0),
(64, '22222222B', 14, 1, 0, 0),
(65, '33333333C', 15, 1, 1, 1),
(66, '33333333C', 18, 1, 1, 0),
(67, '33333333C', 16, 1, 1, 0),
(68, '11000000A', 15, 1, 1, 1),
(69, '11000000A', 16, 1, 1, 0),
(70, '11000000A', 18, 0, 0, 0),
(71, '11000000A', 19, 0, 0, 0),
(72, '11000000A', 21, 0, 0, 0),
(73, '22000000B', 14, 1, 1, 0),
(74, '22000000B', 13, 0, 1, 1),
(75, '22000000B', 15, 1, 0, 0),
(76, '22000000B', 18, 1, 0, 0),
(77, '33000000C', 20, 1, 0, 0),
(78, '33000000C', 16, 1, 1, 0),
(79, '33000000C', 12, 1, 0, 0),
(80, '33000000C', 15, 0, 0, 0),
(81, '44000000D', 20, 1, 1, 0),
(82, '44000000D', 17, 1, 0, 0),
(83, '44000000D', 15, 0, 0, 0),
(84, '44000000D', 18, 1, 1, 0),
(85, '44000000D', 13, 1, 0, 1),
(86, '55000000E', 14, 1, 0, 0),
(87, '55000000E', 20, 1, 1, 1),
(88, '55000000E', 21, 0, 0, 0),
(89, '55000000E', 12, 1, 1, 0),
(90, '66000000F', 17, 0, 0, 0),
(91, '66000000F', 13, 0, 0, 0),
(92, '66000000F', 19, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE IF NOT EXISTS `profesores` (
  `IDPROF` int(3) NOT NULL AUTO_INCREMENT,
  `USU` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `PASS` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`IDPROF`),
  KEY `IDPROF` (`IDPROF`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`IDPROF`, `USU`, `PASS`, `NOMBRE`) VALUES
(1, 'admin', 'admin', 'Administrador'),
(17, 'luis', 'luis', 'Luis Gutierrez '),
(18, 'juan', 'juan', 'Juan PÃ©rez'),
(19, 'jesus', 'jesus', 'JesÃºs Ortiz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE IF NOT EXISTS `provincia` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=53 ;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`ID`, `NOMBRE`) VALUES
(1, 'ALAVA'),
(2, 'ALBACETE'),
(3, 'ALICANTE'),
(4, 'ALMERIA'),
(5, 'ASTURIAS'),
(6, 'AVILA'),
(7, 'BADAJOZ'),
(8, 'BARCELONA'),
(9, 'BURGOS'),
(10, 'CACERES'),
(11, 'CADIZ'),
(12, 'CANTABRIA'),
(13, 'CASTELLON'),
(14, 'CEUTA'),
(15, 'CIUDAD REAL'),
(16, 'CORDOBA'),
(17, 'CUENCA'),
(18, 'GERONA'),
(19, 'GRANADA'),
(20, 'GUADALAJARA'),
(21, 'GUIPUZCOA'),
(22, 'HUELVA'),
(23, 'HUESCA'),
(24, 'ISLAS BALEARES'),
(25, 'JAEN'),
(26, 'LA CORUÑA'),
(27, 'LA RIOJA'),
(28, 'LAS PALMAS'),
(29, 'LEON'),
(30, 'LERIDA'),
(31, 'LUGO'),
(32, 'MADRID'),
(33, 'MALAGA'),
(34, 'MELILLA'),
(35, 'MURCIA'),
(36, 'NAVARRA'),
(37, 'ORENSE'),
(38, 'PALENCIA'),
(39, 'PONTEVEDRA'),
(40, 'SALAMANCA'),
(41, 'SANTA CRUZ DE TENERIFE'),
(42, 'SEGOVIA'),
(43, 'SEVILLA'),
(44, 'SORIA'),
(45, 'TARRAGONA'),
(46, 'TERUEL'),
(47, 'TOLEDO'),
(48, 'VALENCIA'),
(49, 'VALLADOLID'),
(50, 'VIZCAYA'),
(51, 'ZAMORA'),
(52, 'ZARAGOZA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto`
--

CREATE TABLE IF NOT EXISTS `puesto` (
  `puesto` varchar(40) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`puesto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puesto`
--

INSERT INTO `puesto` (`puesto`) VALUES
('Becario/Practicas'),
('Direccion/Gerencia'),
('Empleado'),
('Especialista'),
('Mando Intermedio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector`
--

CREATE TABLE IF NOT EXISTS `sector` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `SECTOR` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `sector`
--

INSERT INTO `sector` (`ID`, `SECTOR`) VALUES
(1, 'Actividades Informaticas'),
(2, 'Actividades Inmobiliarias'),
(3, 'Actividades Recreativas, Culturales y Deportivas'),
(4, 'Administracion Publica y Defensa'),
(5, 'Agricultura, Ganaderia y Pesca'),
(6, 'Alimentacion y Productos Afines'),
(7, 'Automocion'),
(8, 'Comercio(al por mayor y al por menor)'),
(9, 'Construccion'),
(10, 'Correos y Telecomunicaciones'),
(11, 'Edicion, Artes Graficas y Reproduccion de soportes'),
(12, 'Educacion'),
(13, 'Electronica y Electricidad'),
(14, 'Energia, Mineria y Medio Ambiente'),
(15, 'Fuerza de Ventas'),
(16, 'Industria del Transporte'),
(17, 'Industria Ligera(mobiliario)'),
(18, 'Industria Madera/Papel'),
(19, 'Industria Pesada(maquinaria)'),
(20, 'Industria Quimica y Farmaceutica'),
(21, 'Industria Textil(textil/moda/hogar)'),
(22, 'Investigacion y Desarrollo'),
(23, 'ONG y Servicios Sociales'),
(24, 'Sanidad'),
(25, 'Servicios (hosteleria,viajes,restauracion)'),
(26, 'Servicios de Consultoria,Asesoria y Auditoria'),
(27, 'Servicios de Publicidad'),
(28, 'Servicios de RRHH'),
(29, 'Servicios de TI'),
(30, 'Servicios Financieros'),
(31, 'Servicios Personales'),
(32, 'Telemarketing');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`IDPROF`) REFERENCES `profesores` (`IDPROF`);

--
-- Filtros para la tabla `cestudios`
--
ALTER TABLE `cestudios`
  ADD CONSTRAINT `ESTUDIOS` FOREIGN KEY (`DNI`) REFERENCES `alumnos` (`DNI`);

--
-- Filtros para la tabla `cexperiencia`
--
ALTER TABLE `cexperiencia`
  ADD CONSTRAINT `cexperiencia_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `alumnos` (`DNI`);

--
-- Filtros para la tabla `cidioma`
--
ALTER TABLE `cidioma`
  ADD CONSTRAINT `cidioma_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `alumnos` (`DNI`);

--
-- Filtros para la tabla `curriculum`
--
ALTER TABLE `curriculum`
  ADD CONSTRAINT `curriculum_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `alumnos` (`DNI`);

--
-- Filtros para la tabla `inscritos`
--
ALTER TABLE `inscritos`
  ADD CONSTRAINT `inscritos_ibfk_4` FOREIGN KEY (`CIF`) REFERENCES `empresa` (`CIF`),
  ADD CONSTRAINT `inscritos_ibfk_2` FOREIGN KEY (`DNI`) REFERENCES `alumnos` (`DNI`),
  ADD CONSTRAINT `inscritos_ibfk_3` FOREIGN KEY (`IDOFERTA`) REFERENCES `oferta` (`ID`);

--
-- Filtros para la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD CONSTRAINT `oferta_ibfk_1` FOREIGN KEY (`CIF`) REFERENCES `empresa` (`CIF`);

--
-- Filtros para la tabla `proceso`
--
ALTER TABLE `proceso`
  ADD CONSTRAINT `proceso_ibfk_2` FOREIGN KEY (`IDOFERTA`) REFERENCES `oferta` (`ID`),
  ADD CONSTRAINT `proceso_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `alumnos` (`DNI`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
