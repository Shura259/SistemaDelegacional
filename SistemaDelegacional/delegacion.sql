-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2018 a las 01:57:37
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `delegacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id_cargo` int(5) NOT NULL,
  `cargo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id_cargo`, `cargo`) VALUES
(1, 'Delegacion-Delegado'),
(2, 'Delegacion-Subdelegado'),
(3, 'Delegacion-Comandante'),
(4, 'Delegacion-Policias'),
(5, 'Delegacion-Secretario'),
(6, 'Delegacion-Tesorero'),
(7, ' Delegacion-Vocal'),
(8, 'Delegacion-Mayordomia'),
(9, 'Comite de Obra/Recurso-Presidente'),
(10, 'Comite de Obra/Recurso-Secretario'),
(11, 'Comite de Obra/Recurso-Tesorero'),
(12, 'Comite de Obra/Recurso-Vocales'),
(13, 'Comite para Eventos-Presidente'),
(14, 'Comite para Eventos-Vocal'),
(15, 'Ejido-Presidente'),
(16, 'Ejido-Vicepresidente'),
(17, 'Ejido-Secretario'),
(18, 'Ejido-Tesorero'),
(19, 'Ejido-Vocal'),
(20, 'Consejo de Vigilancia-Presidente'),
(21, 'Consejo de Vigilancia-Secretario'),
(22, 'Consejo de Vigilancia-Tesorero'),
(23, 'Consejo de Vigilancia-Vocal'),
(24, 'Obras de Ejidatario-Presidente'),
(25, 'Obras de Ejidatario-Secretario'),
(26, 'Obras de Ejidatario-Tesorero'),
(27, 'Obras de Ejidatario-Vocal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo_persona`
--

CREATE TABLE `cargo_persona` (
  `id_cargo_persona` int(5) NOT NULL,
  `nombre_habitante` varchar(100) NOT NULL,
  `id_cargo` int(5) DEFAULT NULL,
  `inicio_cargo` varchar(50) NOT NULL,
  `fin_cargo` varchar(50) NOT NULL,
  `trabajos_realizados` varchar(100) NOT NULL,
  `trabajos_pendientes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo_persona`
--

INSERT INTO `cargo_persona` (`id_cargo_persona`, `nombre_habitante`, `id_cargo`, `inicio_cargo`, `fin_cargo`, `trabajos_realizados`, `trabajos_pendientes`) VALUES
(1, 'Fernando', 1, '2018-03-07', '2018-03-31', 'qwert', 'erty'),
(2, 'dfgh', NULL, '2018-02-25', '2018-03-24', 'qwerty', 'qwerty'),
(3, 'Angel', NULL, '2018-03-04', '2018-04-07', 'asd', 'asd'),
(4, 'sdfgh', NULL, '2018-04-01', '2018-04-27', 'sdfgh', 'sdfgh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cooperaciones`
--

CREATE TABLE `cooperaciones` (
  `id_cooperacion` int(5) NOT NULL,
  `tipo_cooperacion` varchar(50) NOT NULL,
  `concepto` varchar(50) NOT NULL,
  `cantidad` decimal(20,0) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `beneficiarios` varchar(100) NOT NULL,
  `fecha_cooperacion` varchar(50) NOT NULL,
  `fecha_limite` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cooperaciones`
--

INSERT INTO `cooperaciones` (`id_cooperacion`, `tipo_cooperacion`, `concepto`, `cantidad`, `descripcion`, `beneficiarios`, `fecha_cooperacion`, `fecha_limite`) VALUES
(1, 'General', 'Iglesia', '60', 'ghjklÃ±', 'Toda la Comunidad', '2018-03-30', '2018-04-07'),
(2, 'General', 'tyu', '678', 'vbnm', 'bnm,', '0018-01-12', '2018-12-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faenas`
--

CREATE TABLE `faenas` (
  `id_faena` int(5) NOT NULL,
  `tipo_faena` varchar(50) NOT NULL,
  `lugar` varchar(50) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `hora` varchar(20) NOT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefe_familia`
--

CREATE TABLE `jefe_familia` (
  `id_jefe` int(5) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `fecha_inicio` varchar(50) NOT NULL,
  `fecha_termino` varchar(50) NOT NULL,
  `nombre_jefe` varchar(30) NOT NULL,
  `apellido_paterno_jefe` varchar(30) NOT NULL,
  `apellido_materno_jefe` varchar(30) NOT NULL,
  `fecha_nacimiento_jefe` varchar(20) NOT NULL,
  `sexo` char(10) NOT NULL,
  `religion_jefe` char(20) NOT NULL,
  `especifica_religion` varchar(50) NOT NULL,
  `motivo_jefe` varchar(150) NOT NULL,
  `domicilio_jefe` varchar(150) NOT NULL,
  `monto_cuota` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reuniones`
--

CREATE TABLE `reuniones` (
  `id_reunion` int(5) NOT NULL,
  `tipo_reunion` varchar(50) NOT NULL,
  `lugar_reunion` varchar(50) NOT NULL,
  `fecha_reunion` varchar(50) NOT NULL,
  `hora_reunion` varchar(50) NOT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `id_documento` int(10) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `tamanio` int(10) NOT NULL,
  `tipo` varchar(150) NOT NULL,
  `nombre_archivo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `cargo_persona`
--
ALTER TABLE `cargo_persona`
  ADD PRIMARY KEY (`id_cargo_persona`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- Indices de la tabla `cooperaciones`
--
ALTER TABLE `cooperaciones`
  ADD PRIMARY KEY (`id_cooperacion`);

--
-- Indices de la tabla `faenas`
--
ALTER TABLE `faenas`
  ADD PRIMARY KEY (`id_faena`);

--
-- Indices de la tabla `jefe_familia`
--
ALTER TABLE `jefe_familia`
  ADD PRIMARY KEY (`id_jefe`);

--
-- Indices de la tabla `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reuniones`
--
ALTER TABLE `reuniones`
  ADD PRIMARY KEY (`id_reunion`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`id_documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id_cargo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `cargo_persona`
--
ALTER TABLE `cargo_persona`
  MODIFY `id_cargo_persona` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cooperaciones`
--
ALTER TABLE `cooperaciones`
  MODIFY `id_cooperacion` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `faenas`
--
ALTER TABLE `faenas`
  MODIFY `id_faena` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `jefe_familia`
--
ALTER TABLE `jefe_familia`
  MODIFY `id_jefe` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reuniones`
--
ALTER TABLE `reuniones`
  MODIFY `id_reunion` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `id_documento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cargo_persona`
--
ALTER TABLE `cargo_persona`
  ADD CONSTRAINT `cargo_persona_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id_cargo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
