-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-09-2018 a las 22:44:42
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sns1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE IF NOT EXISTS `ciudad` (
  `id_ciudad` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_ciudad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dato_persona`
--

DROP TABLE IF EXISTS `dato_persona`;
CREATE TABLE IF NOT EXISTS `dato_persona` (
  `documento` varchar(45) NOT NULL,
  `primer_nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `segundo_nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `primer_apellido` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `segundo_apellido` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `contrasena` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT 'Null',
  `fk_estado` int(2) NOT NULL DEFAULT '1',
  `fk_ficha` int(11) NOT NULL DEFAULT '0',
  `fk_tipo_documento` bigint(11) NOT NULL,
  PRIMARY KEY (`documento`),
  KEY `fk_datos_personas_tipo_documentos_idx` (`fk_tipo_documento`),
  KEY `fk_datos_personas_Estado1_idx` (`fk_estado`),
  KEY `fk_datos_personas_Fichas1_idx` (`fk_ficha`),
  KEY `fk_dato_persona_permiso1_idx` (`documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int(2) NOT NULL AUTO_INCREMENT,
  `estado` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

DROP TABLE IF EXISTS `ficha`;
CREATE TABLE IF NOT EXISTS `ficha` (
  `codigo_ficha` int(11) NOT NULL DEFAULT '0',
  `fk_sede` int(11) NOT NULL DEFAULT '0',
  `fk_jornada` int(11) NOT NULL DEFAULT '0',
  `fk_tipo_formacion` int(11) NOT NULL DEFAULT '0',
  `fk_modalidad` int(11) NOT NULL DEFAULT '0',
  `fk_programa_formacion` int(11) NOT NULL DEFAULT '0',
  `trimestre_formacion` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codigo_ficha`),
  KEY `fk_Fichas_Sedes1_idx` (`fk_sede`),
  KEY `fk_Fichas_Jornadas1_idx` (`fk_jornada`),
  KEY `fk_Fichas_Tipos_de_formacion2_idx` (`fk_tipo_formacion`),
  KEY `fk_Fichas_Modalidades1_idx` (`fk_modalidad`),
  KEY `fk_Fichas_Programas_formacion1_idx` (`fk_programa_formacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada`
--

DROP TABLE IF EXISTS `jornada`;
CREATE TABLE IF NOT EXISTS `jornada` (
  `id_jornadas` int(11) NOT NULL AUTO_INCREMENT,
  `jornada` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_jornadas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

DROP TABLE IF EXISTS `modalidad`;
CREATE TABLE IF NOT EXISTS `modalidad` (
  `id_modalidades` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_modalidad` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_modalidades`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad`
--

DROP TABLE IF EXISTS `novedad`;
CREATE TABLE IF NOT EXISTS `novedad` (
  `id_novedad` int(2) NOT NULL AUTO_INCREMENT,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `motivo` text,
  `respuesta` varchar(45) DEFAULT NULL,
  `fallas` varchar(45) DEFAULT NULL,
  `fk_tipo_novedad` int(2) NOT NULL,
  `fk_documento` varchar(45) NOT NULL,
  PRIMARY KEY (`id_novedad`),
  KEY `fk_Novedad_Tipo_novedad1_idx` (`fk_tipo_novedad`),
  KEY `fk_novedad_dato_persona1_idx` (`fk_documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

DROP TABLE IF EXISTS `permiso`;
CREATE TABLE IF NOT EXISTS `permiso` (
  `id_documento` varchar(45) NOT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas_formacion`
--

DROP TABLE IF EXISTS `programas_formacion`;
CREATE TABLE IF NOT EXISTS `programas_formacion` (
  `id_programa_formacion` int(11) NOT NULL AUTO_INCREMENT,
  `programa_formacion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_programa_formacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` int(11) NOT NULL,
  `fk_tipo_rol` int(11) NOT NULL,
  `fk_documento` varchar(45) NOT NULL,
  PRIMARY KEY (`id_rol`),
  KEY `fk_Permisos_Rol1_idx` (`fk_tipo_rol`),
  KEY `fk_rol_dato_persona1_idx` (`fk_documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

DROP TABLE IF EXISTS `sede`;
CREATE TABLE IF NOT EXISTS `sede` (
  `id_sede` int(11) NOT NULL AUTO_INCREMENT,
  `sede` varchar(100) DEFAULT NULL,
  `fk_ciudad` int(11) NOT NULL,
  PRIMARY KEY (`id_sede`),
  KEY `fk_sedes_ciudad1_idx` (`fk_ciudad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_formacion`
--

DROP TABLE IF EXISTS `tipo_de_formacion`;
CREATE TABLE IF NOT EXISTS `tipo_de_formacion` (
  `id_tipos_de_formacion` int(11) NOT NULL AUTO_INCREMENT,
  `tipos_de_formacion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_tipos_de_formacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

DROP TABLE IF EXISTS `tipo_documento`;
CREATE TABLE IF NOT EXISTS `tipo_documento` (
  `id_tipo_documento` bigint(11) NOT NULL AUTO_INCREMENT,
  `tipo_documento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_novedad`
--

DROP TABLE IF EXISTS `tipo_novedad`;
CREATE TABLE IF NOT EXISTS `tipo_novedad` (
  `id_tipo_novedad` int(2) NOT NULL AUTO_INCREMENT,
  `tipo_novedad` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_novedad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_rol`
--

DROP TABLE IF EXISTS `tipo_rol`;
CREATE TABLE IF NOT EXISTS `tipo_rol` (
  `id_tipo_rol` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_rol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dato_persona`
--
ALTER TABLE `dato_persona`
  ADD CONSTRAINT `fk_dato_persona_permiso1` FOREIGN KEY (`documento`) REFERENCES `permiso` (`id_documento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_datos_personas_Estado1` FOREIGN KEY (`fk_estado`) REFERENCES `estado` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_datos_personas_Fichas1` FOREIGN KEY (`fk_ficha`) REFERENCES `ficha` (`codigo_ficha`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_datos_personas_tipo_documentos` FOREIGN KEY (`fk_tipo_documento`) REFERENCES `tipo_documento` (`id_tipo_documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD CONSTRAINT `fk_Fichas_Jornadas1` FOREIGN KEY (`fk_jornada`) REFERENCES `jornada` (`id_jornadas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Fichas_Modalidades1` FOREIGN KEY (`fk_modalidad`) REFERENCES `modalidad` (`id_modalidades`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Fichas_Programas_formacion1` FOREIGN KEY (`fk_programa_formacion`) REFERENCES `programas_formacion` (`id_programa_formacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Fichas_Sedes1` FOREIGN KEY (`fk_sede`) REFERENCES `sede` (`id_sede`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Fichas_Tipos_de_formacion2` FOREIGN KEY (`fk_tipo_formacion`) REFERENCES `tipo_de_formacion` (`id_tipos_de_formacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `novedad`
--
ALTER TABLE `novedad`
  ADD CONSTRAINT `fk_Novedad_Tipo_novedad1` FOREIGN KEY (`fk_tipo_novedad`) REFERENCES `tipo_novedad` (`id_tipo_novedad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_novedad_dato_persona1` FOREIGN KEY (`fk_documento`) REFERENCES `dato_persona` (`documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rol`
--
ALTER TABLE `rol`
  ADD CONSTRAINT `fk_Permisos_Rol1` FOREIGN KEY (`fk_tipo_rol`) REFERENCES `tipo_rol` (`id_tipo_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rol_dato_persona1` FOREIGN KEY (`fk_documento`) REFERENCES `dato_persona` (`documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sede`
--
ALTER TABLE `sede`
  ADD CONSTRAINT `fk_sedes_ciudad1` FOREIGN KEY (`fk_ciudad`) REFERENCES `ciudad` (`id_ciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
