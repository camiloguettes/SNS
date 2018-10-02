-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2018 a las 00:06:03
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

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

CREATE TABLE `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `ciudad` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `ciudad`) VALUES
(1, 'Bogotá');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(2) NOT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`) VALUES
(1, 'habilitado'),
(2, 'inhabilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `codigo_ficha` int(11) NOT NULL DEFAULT '0',
  `fk_sede` int(11) NOT NULL DEFAULT '0',
  `fk_jornada` int(11) NOT NULL DEFAULT '0',
  `fk_tipo_formacion` int(11) NOT NULL DEFAULT '0',
  `fk_modalidad` int(11) NOT NULL DEFAULT '0',
  `fk_programa_formacion` int(11) NOT NULL DEFAULT '0',
  `trimestre_formacion` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`codigo_ficha`, `fk_sede`, `fk_jornada`, `fk_tipo_formacion`, `fk_modalidad`, `fk_programa_formacion`, `trimestre_formacion`) VALUES
(0, 5, 1, 4, 1, 1, '0'),
(1438303, 5, 1, 2, 1, 1, '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada`
--

CREATE TABLE `jornada` (
  `id_jornadas` int(11) NOT NULL,
  `jornada` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `jornada`
--

INSERT INTO `jornada` (`id_jornadas`, `jornada`) VALUES
(1, 'diurna'),
(2, 'Nocturna'),
(3, 'Madrugada'),
(4, 'Mixta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE `modalidad` (
  `id_modalidades` int(11) NOT NULL,
  `tipo_modalidad` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modalidad`
--

INSERT INTO `modalidad` (`id_modalidades`, `tipo_modalidad`) VALUES
(1, 'Presencial'),
(2, 'Virtual');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad`
--

CREATE TABLE `novedad` (
  `id_novedad` int(2) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `motivo` text,
  `respuesta` varchar(45) DEFAULT NULL,
  `fallas` varchar(45) DEFAULT NULL,
  `fk_tipo_novedad` int(2) NOT NULL,
  `fk_documento` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `id_documento` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`id_documento`) VALUES
('123'),
('1234'),
('55'),
('99');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `documento` varchar(45) NOT NULL,
  `primer_nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `segundo_nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `primer_apellido` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `segundo_apellido` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `contrasena` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT 'Null',
  `fk_estado` int(2) NOT NULL DEFAULT '1',
  `fk_ficha` int(11) NOT NULL DEFAULT '0',
  `fk_tipo_documento` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`documento`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `correo`, `contrasena`, `fk_estado`, `fk_ficha`, `fk_tipo_documento`) VALUES
('123', 'q', 'q', 'q', 'q', 'q@q.q', '1234', 1, 1438303, 1),
('1234', 's', 's', 's', 's', 's@s.q', '1234', 1, 0, 1),
('55', 'i', 'i', 'i', 'i', 'i@i.i', '1234', 1, 0, 1),
('99', 'gabriel', 'alexander', 'torres', 'pantoja', 's@s.s', '1234', 1, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas_formacion`
--

CREATE TABLE `programas_formacion` (
  `id_programa_formacion` int(11) NOT NULL,
  `programa_formacion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `programas_formacion`
--

INSERT INTO `programas_formacion` (`id_programa_formacion`, `programa_formacion`) VALUES
(1, 'Análisis y Desarrollo De Sistemas de Información'),
(2, 'Técnico en Programación de Software');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `fk_tipo_rol` int(11) NOT NULL DEFAULT '4',
  `fk_documento` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `fk_tipo_rol`, `fk_documento`) VALUES
(1, 1, '123'),
(2, 4, '1234'),
(5, 2, '55'),
(7, 1, '99');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `id_sede` int(11) NOT NULL,
  `sede` varchar(100) DEFAULT NULL,
  `fk_ciudad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id_sede`, `sede`, `fk_ciudad`) VALUES
(1, 'Complejo sur', 1),
(2, 'Ricaurte', 1),
(3, 'Álamos', 1),
(4, 'Restrepo', 1),
(5, 'Colombia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_formacion`
--

CREATE TABLE `tipo_de_formacion` (
  `id_tipos_de_formacion` int(11) NOT NULL,
  `tipos_de_formacion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_de_formacion`
--

INSERT INTO `tipo_de_formacion` (`id_tipos_de_formacion`, `tipos_de_formacion`) VALUES
(1, 'Técnico'),
(2, 'Tecnólogo '),
(3, 'Especialización'),
(4, 'Complementaria'),
(5, 'Curso Corto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_tipo_documento` bigint(11) NOT NULL,
  `tipo_documento` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_tipo_documento`, `tipo_documento`) VALUES
(1, 'Cédula de ciudadanía'),
(2, 'Cédula de extrajería'),
(3, 'Tarjeta de identidad'),
(4, 'Pasaporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_novedad`
--

CREATE TABLE `tipo_novedad` (
  `id_tipo_novedad` int(2) NOT NULL,
  `tipo_novedad` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_novedad`
--

INSERT INTO `tipo_novedad` (`id_tipo_novedad`, `tipo_novedad`) VALUES
(1, 'Aplazamiento'),
(2, 'Cambio de jornada'),
(3, 'Deserción'),
(4, 'Reintegro'),
(5, 'Retiro Voluntario'),
(6, 'Traslado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_rol`
--

CREATE TABLE `tipo_rol` (
  `id_tipo_rol` int(11) NOT NULL,
  `tipo_rol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_rol`
--

INSERT INTO `tipo_rol` (`id_tipo_rol`, `tipo_rol`) VALUES
(1, 'Administrador'),
(2, 'Apoyo Administrador'),
(3, 'Instructor'),
(4, '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`codigo_ficha`),
  ADD KEY `fk_Fichas_Sedes1_idx` (`fk_sede`),
  ADD KEY `fk_Fichas_Jornadas1_idx` (`fk_jornada`),
  ADD KEY `fk_Fichas_Tipos_de_formacion2_idx` (`fk_tipo_formacion`),
  ADD KEY `fk_Fichas_Modalidades1_idx` (`fk_modalidad`),
  ADD KEY `fk_Fichas_Programas_formacion1_idx` (`fk_programa_formacion`);

--
-- Indices de la tabla `jornada`
--
ALTER TABLE `jornada`
  ADD PRIMARY KEY (`id_jornadas`);

--
-- Indices de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  ADD PRIMARY KEY (`id_modalidades`);

--
-- Indices de la tabla `novedad`
--
ALTER TABLE `novedad`
  ADD PRIMARY KEY (`id_novedad`),
  ADD KEY `fk_Novedad_Tipo_novedad1_idx` (`fk_tipo_novedad`),
  ADD KEY `fk_novedad_dato_persona1_idx` (`fk_documento`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`documento`),
  ADD KEY `fk_datos_personas_tipo_documentos_idx` (`fk_tipo_documento`),
  ADD KEY `fk_datos_personas_Estado1_idx` (`fk_estado`),
  ADD KEY `fk_datos_personas_Fichas1_idx` (`fk_ficha`),
  ADD KEY `fk_dato_persona_permiso1_idx` (`documento`);

--
-- Indices de la tabla `programas_formacion`
--
ALTER TABLE `programas_formacion`
  ADD PRIMARY KEY (`id_programa_formacion`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`),
  ADD KEY `fk_Permisos_Rol1_idx` (`fk_tipo_rol`),
  ADD KEY `fk_rol_dato_persona1_idx` (`fk_documento`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`id_sede`),
  ADD KEY `fk_sedes_ciudad1_idx` (`fk_ciudad`);

--
-- Indices de la tabla `tipo_de_formacion`
--
ALTER TABLE `tipo_de_formacion`
  ADD PRIMARY KEY (`id_tipos_de_formacion`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_tipo_documento`);

--
-- Indices de la tabla `tipo_novedad`
--
ALTER TABLE `tipo_novedad`
  ADD PRIMARY KEY (`id_tipo_novedad`);

--
-- Indices de la tabla `tipo_rol`
--
ALTER TABLE `tipo_rol`
  ADD PRIMARY KEY (`id_tipo_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `jornada`
--
ALTER TABLE `jornada`
  MODIFY `id_jornadas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  MODIFY `id_modalidades` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `novedad`
--
ALTER TABLE `novedad`
  MODIFY `id_novedad` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programas_formacion`
--
ALTER TABLE `programas_formacion`
  MODIFY `id_programa_formacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `id_sede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_de_formacion`
--
ALTER TABLE `tipo_de_formacion`
  MODIFY `id_tipos_de_formacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id_tipo_documento` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_novedad`
--
ALTER TABLE `tipo_novedad`
  MODIFY `id_tipo_novedad` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_rol`
--
ALTER TABLE `tipo_rol`
  MODIFY `id_tipo_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

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
  ADD CONSTRAINT `fk_novedad_dato_persona1` FOREIGN KEY (`fk_documento`) REFERENCES `persona` (`documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_dato_persona_permiso1` FOREIGN KEY (`documento`) REFERENCES `permiso` (`id_documento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_datos_personas_Estado1` FOREIGN KEY (`fk_estado`) REFERENCES `estado` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_datos_personas_Fichas1` FOREIGN KEY (`fk_ficha`) REFERENCES `ficha` (`codigo_ficha`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_datos_personas_tipo_documentos` FOREIGN KEY (`fk_tipo_documento`) REFERENCES `tipo_documento` (`id_tipo_documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rol`
--
ALTER TABLE `rol`
  ADD CONSTRAINT `fk_Permisos_Rol1` FOREIGN KEY (`fk_tipo_rol`) REFERENCES `tipo_rol` (`id_tipo_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_rol_dato_persona1` FOREIGN KEY (`fk_documento`) REFERENCES `persona` (`documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sede`
--
ALTER TABLE `sede`
  ADD CONSTRAINT `fk_sedes_ciudad1` FOREIGN KEY (`fk_ciudad`) REFERENCES `ciudad` (`id_ciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
