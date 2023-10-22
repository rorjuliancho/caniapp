-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2023 a las 10:12:46
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `caniapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `idencuesta` int(11) NOT NULL,
  `pregunta` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`idencuesta`, `pregunta`) VALUES
(1, '¿tus patitas delanteras estan quedando comodas al apoyarte, para tener estabilidad en tu silla de ruedas?'),
(2, '¿Tienes alguna rueda suelta de tu silla de ruedas?'),
(3, '¿Tienes alguna duda de como ponerte la silla de ruedas?'),
(4, '¿Sientes que tu columna y posición mejoro?'),
(5, '¿Estas satisfecho con caniapp?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `idhistorial` int(11) NOT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `fecha_visita` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`idhistorial`, `id_paciente`, `observaciones`, `fecha_visita`) VALUES
(1, 1, 'asdasdasd', '2023-10-19'),
(2, 1, 'asdasdadsasd', '2023-10-18'),
(3, 1, 'vvvvv', '2023-10-19'),
(4, 1, 'sdvsdvsdvsdv', '2023-10-19'),
(5, 1, 'Se pone medicamento al perrito', '2023-10-19'),
(6, 4, 'Se ajusta la prótesis porque le estaba tallan', '2023-10-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `idnotificaciones` int(11) NOT NULL,
  `notificacion` longtext DEFAULT NULL,
  `id_padre` int(11) DEFAULT NULL,
  `fecha_notificacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `notificaciones`
--

INSERT INTO `notificaciones` (`idnotificaciones`, `notificacion`, `id_padre`, `fecha_notificacion`) VALUES
(1, 'asdasdasd', 2, '2023-10-19 17:46:07'),
(2, 'asdasdasdasdasdasd', 2, '2023-10-19 17:49:24'),
(3, 'cvvvvvvvvvvvvvvvvvvvvvvvvvv', 2, '2023-10-19 17:50:34'),
(4, 'asdasdas', 2, '2023-10-19 17:52:37'),
(5, 'asd', 2, '2023-10-19 17:53:17'),
(6, 'asd', 2, '2023-10-19 17:54:32'),
(7, 'asd', 2, '2023-10-19 17:55:46'),
(8, 'dasd', 2, '2023-10-19 17:56:01'),
(9, 'dasd', 2, '2023-10-19 18:24:47'),
(10, 'dasd', 2, '2023-10-19 18:26:18'),
(11, 'dasd', 2, '2023-10-19 18:26:34'),
(12, 'El próximo jueves 26 tienes citas con la dr laura polanco', 2, '2023-10-19 21:28:09'),
(13, 'El proximo lunes tiene cita ', 10, '2023-10-19 21:59:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `idpaciente` int(11) NOT NULL,
  `nombre_canino` varchar(45) DEFAULT NULL,
  `sexo_canino` varchar(45) DEFAULT NULL,
  `edad_canino` varchar(45) DEFAULT NULL,
  `raza_canino` varchar(45) DEFAULT NULL,
  `peso_canino` varchar(45) DEFAULT NULL,
  `tamano_canino` varchar(45) DEFAULT NULL,
  `ancho_cadera` varchar(45) DEFAULT NULL,
  `altura_femur_suelo` varchar(45) DEFAULT NULL,
  `altura_ingle_suelo` varchar(45) DEFAULT NULL,
  `logintud_hombro_hombro` varchar(45) DEFAULT NULL,
  `circunferencia_pecho` varchar(45) DEFAULT NULL,
  `circunferencia_cuello` varchar(45) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `img_uno` longtext DEFAULT NULL,
  `img_dos` longtext DEFAULT NULL,
  `img_tres` longtext DEFAULT NULL,
  `id_padre` int(11) DEFAULT NULL,
  `estado` varchar(45) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`idpaciente`, `nombre_canino`, `sexo_canino`, `edad_canino`, `raza_canino`, `peso_canino`, `tamano_canino`, `ancho_cadera`, `altura_femur_suelo`, `altura_ingle_suelo`, `logintud_hombro_hombro`, `circunferencia_pecho`, `circunferencia_cuello`, `observaciones`, `img_uno`, `img_dos`, `img_tres`, `id_padre`, `estado`) VALUES
(1, 'Rex uno dos tres cuatro', 'Macho', '15 meses', 'Pastor Alemanaaaaaaaaaaaaaaaaa', '100', '200', '250', '250', '250', '250', '250', '250', 'Perro en condiciones optimasaaaaaaaaaaaaaaaaa', 'beneficios.png', 'componentecomunidad.png', 'mipymes.png', 2, '0'),
(2, 'prubeas', 'Macho', '7 meses', 'Pastor Aleman', '16', '35', '30', '30', '30', '50', '60', '50', 'asdasdasdasd', '4224.png', '42241.png', '42242.png', 4, '1'),
(3, 'prubeas', 'Macho', '7 meses', 'Pastor Aleman', '25', '20', '30', '30', '30', '30', '30', '30', 'Observaciones', '4224.png', '42241.png', '42242.png', 5, '1'),
(4, 'comisario Rex', 'Macho', '7 meses', 'Pastor Aleman', '31', '65', '43.6', '80', '80', '80', '130', '80', 'Observacioneasdasdasdasdasds', '4224.png', '42241.png', '42242.png', 6, '1'),
(5, '20', 'Macho', '5 años', 'Pastor Aleman', '5', NULL, '1.5', '26.8', '10.2', '40', '6', '2.7', 'Canino ingresa con fuerte dolor en su miembro', '1564.jpg', '5983.jpg', '6062.jpg', 7, '1'),
(6, 'paco', 'Hembra', '2 años', 'Pastor Aleman', '20.1', NULL, '43', '38.8', '53.16', '41', '110.2', '39.7', 'LLega el perrito en optimas condiciones', '1917.jpg', '9027.jpg', '3775.jpg', 8, '1'),
(7, 'Lolo', 'Macho', '8 meses', 'Pastor Aleman', '40', '65', '45', '80', '54', '78', '123', '77', 'Es un perro grande', '4179.jpg', '697.png', '9742.png', 9, '1'),
(8, 'Perro mediano', 'Hembra', '5 años', 'Pastor Aleman', '25', '34', '23', '42', '50', '70', '100', '50', 'Observaciones para un perro mediano ', '5330.png', '7804.png', '5073.jpg', 10, '1'),
(9, 'qzdasd', 'Hembra', '7 meses', 'Pastor Aleman', '45', '34', '123', '123', '123', '123', '123', '123', 'asdfasdfasdfasfd', 'advil_slider.jpg', 'advil_slider2.jpg', 'zona_gamer.png', 11, '1'),
(10, 'PERRO PEQUEÑP', 'Hembra', '1 AÑO', 'PASTOR ALEMAN', '10', '25', '10', '20', '20', '20', '20', '20', 'Observacionessss', '6741.jpeg', '6619.jpeg', '1552.jpeg', 12, '1'),
(11, 'asdasd', 'Macho', '123', 'PASTOR ALEMAN', '20', '20', '20', '20', '20', '20', '20', '20', 'Observaciones', '5407.jpeg', '5206.jpeg', '6049.jpeg', 13, '1'),
(12, 'xxccc', 'Hembra', '32', 'PASTOR ALEMAN', '12', '12', '12', '12', '12', '12', '12', '12', 'Observacionesasdasdas', '6461.jpeg', '4666.jpeg', '4786.jpeg', 14, '1'),
(13, 'asdasdasd', 'Hembra', '12', 'Pastor Aleman', '80', '23', '50', '50', '50', '50', '50', '50', 'Observacionesasdasdasd', '5829.png', '9753.jpg', '6507.png', 15, '1'),
(14, 'vvxvcvxcvxc', 'Hembra', '5 años', 'Pastor Aleman', '5', '34', '5', '5', '5', '5', '5', '5', 'Observacionesasdasdadasd', '4645.png', '2899.jpg', '4424.png', 16, '1'),
(15, 'ccccccccc', 'Hembra', '44', 'Pastor Aleman', '44', '33', '12', '12', '12', '12', '12', '12', 'Observacionesdasdasdasd', '8430.png', '9406.png', '5699.jpg', 17, '1'),
(16, 'asdasdads', 'Hembra', '123', 'Pastor Aleman', '50', '12', '50', '50', '50', '50', '50', '50', 'Observacionesasdasd', 'isotipo_3.png1697836159', 'delishow3.jpg1697836159', 'download.jpg1697836159', 18, '1'),
(17, 'bbbbbbbbb', 'Hembra', '44', 'PASTOR ALEMAN', '65', '65', '65', '65', '65', '65', '65', '65', 'Observaciones', '20bdginstitute.png', '20BDGUIDANCE.png', '20bmi.png', 19, '1'),
(18, 'qqqqqqqqqqqqqqq', 'Hembra', '2 años', 'Pastor Aleman', '12', '12', '12', '12', '12', '12', '12', '12', 'Observacionesasdasdasd', '02candie and cookies.jpg', '02casa de hamster.jpg', '02ciudadano.png', 20, '1'),
(19, 'vvvvvvvvvvvvv', 'Macho', '5', 'Pastor Aleman', '67', '67', '67', '67', '67', '67', '67', '67', 'Observaciones', '42fecha.png', '42formulario.png', '42gente.png', 21, '1'),
(20, 'asdasd', 'Macho', '34', 'Pastor Aleman', '342', '43', '30', '30', '234', '30', '30', '30', 'Observacionesasdasdasd', NULL, NULL, NULL, 22, '1'),
(21, 'asdasdasd', 'Hembra', '545', 'Pastor Aleman', '23', '23', '23', '23', '23', '23', '23', '23', 'Observacionesasdasdasd', NULL, NULL, NULL, 23, '1'),
(22, 'asdasd', 'Hembra', '23', 'Pastor Aleman', '12', '12', '12', '12', '12', '12', '12', '12', 'Observacionesasdasda', NULL, NULL, NULL, 24, '1'),
(23, 'asdasdasd', 'Hembra', '34', 'Pastor Aleman', '23', '23', '23', '23', '23', '23', '23', '23', 'Observaciones', '3542817.png', 'fecha.png', 'formulario.png', 25, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padre_mascota`
--

CREATE TABLE `padre_mascota` (
  `idpadre_mascota` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `cedula` varchar(45) DEFAULT NULL,
  `idrol` int(11) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `padre_mascota`
--

INSERT INTO `padre_mascota` (`idpadre_mascota`, `nombre`, `apellido`, `direccion`, `telefono`, `email`, `cedula`, `idrol`, `password`) VALUES
(1, 'admin', 'admin', 'admin', '123', 'admin@gmail.com', '123456789', 1, '123123'),
(2, 'danielaaaaaaaaasdasd', 'polancoooooooooasdasd', 'av 72#80-40 casa 1 apto 109asdadsa', '12312312312311', 'danialapolancos123@gmail.com', '741074107410', 2, '741074107410'),
(3, 'Daniela', 'Polanco', 'calle 1 # 1 -1', '31386874432', 'daniela@gmail.com', '123123', 2, '123123'),
(4, 'Daniela', 'Polanco', 'calle 1 # 1 -1', '31386874432', 'analista.sistemas@bdguidance.com', '7410258', 2, '7410258'),
(5, 'Daniela', 'Polanco', 'calle 1 # 1 -1', '3130000000', 'analista.sistemas@bdguidance.com', '98746541', 2, '98746541'),
(6, 'asdasdasd', 'asdasdasd', 'asdasdasdasd', '5646313132', 'pruebas@opruebas.com', '321354', 2, '321354'),
(7, 'Daniela', 'Polanco', 'Calle 80 # 75-22', '3201478521', 'danielamellow@gmail.com', '1005451221', 2, '1005451221'),
(8, 'Camila', 'Duran', 'Calle 116#80-60', '3100000000', 'pacopet@gmail.com', '521478963', 2, '521478963'),
(9, 'Manuel', 'Saavedra', 'Calle 72a # 6 -44', '3108527421', 'manuelito@gmail.com', '52145852', 2, '52145852'),
(10, 'pruebas', 'pruebas', 'calle 123#123-34', '258963', 'daniela@pruebas.com', '3201475', 2, '3201475'),
(11, 'ffff', 'ffff', 'qweqweqe', '3123123123', 'fernando.calderon@gabrica.com.co', '2342423423442', 2, '2342423423442'),
(12, 'adasd', 'asdasd', 'calle 123', '31251321', 'pruebas@hotmail.com', '21354', 2, '21354'),
(13, 'asdasdasd', 'asdasdasd', 'sadadsasd', '1321301', 'asdasda@asdasd.com', '3216321', 2, '3216321'),
(14, 'xczcz', 'zxczcz', 'calle 1 # 1 -1', '12312312', 'analista.sistemas@bdguidance.com', '34214234', 2, '34214234'),
(15, 'asdasd', 'asdasda', 'dadsdasd', '65432132', 'julianlaverde74asd@hotmail.com', '23213123', 2, '23213123'),
(16, 'asddasd', 'asdasdasd', 'asddasdasd', '213123123', 'claudia.bernal@sdfsfsdf.com', '1231231231', 2, '1231231231'),
(17, 'nbncvb', 'cvbcbv', 'calle 1 # 1 -1', '2423423', 'julianlaverde74@hotmail.com', '54234234', 2, '54234234'),
(18, 'ffff', 'ffff', 'ffff', '213312', 'fff@ff.com', '123123123', 2, '123123123'),
(19, 'asdasd', 'asdasdasd', 'asdasdas', '1213213', 'asdads@oaoaoaa.com', '5646456456', 2, '5646456456'),
(20, 'asdasdasd', 'asdasdasd', 'dasdasdasd', '123132123', 'claudia.bernal@achievecapital.com.co', '123123123', 2, '123123123'),
(21, 'tbggt', 'gbtbt', 'dsaf', '4234234', 'julian.moraaaas95@gmail.com', 'asdfadsa', 2, 'asdfadsa'),
(22, 'acsasdc', 'acsacasc', 'sadasdasd', '1233123', 'asdasda@asdasd.com', '214234234', 2, '214234234'),
(23, 'asdasd', 'asdasd', 'sadasdasd', '123123', 'julianlaverde74@hotmail.com', '213313213', 2, '213313213'),
(24, 'dasdasd', 'asdasdasd', 'calle 1 # 1 -1', '123123', 'fernando.calderon@gabrica.com.co', '123123123', 2, '123123123'),
(25, 'Daniela', 'Polanco', 'calle 77b # 105b -15', '3138687421', 'asdasda@asdasd.com', '34343434', 2, '34343434');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestasencuestas`
--

CREATE TABLE `respuestasencuestas` (
  `idrespuesta` int(11) NOT NULL,
  `idPadre` int(11) DEFAULT NULL,
  `idEncuesta` int(11) DEFAULT NULL,
  `respuesta` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuestasencuestas`
--

INSERT INTO `respuestasencuestas` (`idrespuesta`, `idPadre`, `idEncuesta`, `respuesta`) VALUES
(1, 2, 1, 'si'),
(2, 2, 2, 'no'),
(3, 2, 3, 'no'),
(4, 2, 4, 'si'),
(5, 2, 5, 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `nombre`) VALUES
(1, 'admin'),
(2, 'cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`idencuesta`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`idhistorial`),
  ADD KEY `fk_historial` (`id_paciente`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`idnotificaciones`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`idpaciente`),
  ADD KEY `fk_padre_idx` (`id_padre`);

--
-- Indices de la tabla `padre_mascota`
--
ALTER TABLE `padre_mascota`
  ADD PRIMARY KEY (`idpadre_mascota`),
  ADD KEY `fk_roles_idx` (`idrol`);

--
-- Indices de la tabla `respuestasencuestas`
--
ALTER TABLE `respuestasencuestas`
  ADD PRIMARY KEY (`idrespuesta`),
  ADD KEY `fk_encuesta` (`idEncuesta`),
  ADD KEY `fk_pmascota` (`idPadre`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `idencuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `idhistorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `idnotificaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `idpaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `padre_mascota`
--
ALTER TABLE `padre_mascota`
  MODIFY `idpadre_mascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `respuestasencuestas`
--
ALTER TABLE `respuestasencuestas`
  MODIFY `idrespuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `fk_historial` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`idpaciente`);

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `fk_padre` FOREIGN KEY (`id_padre`) REFERENCES `padre_mascota` (`idpadre_mascota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `padre_mascota`
--
ALTER TABLE `padre_mascota`
  ADD CONSTRAINT `fk_roles` FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuestasencuestas`
--
ALTER TABLE `respuestasencuestas`
  ADD CONSTRAINT `fk_encuesta` FOREIGN KEY (`idEncuesta`) REFERENCES `encuesta` (`idencuesta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pmascota` FOREIGN KEY (`idPadre`) REFERENCES `padre_mascota` (`idpadre_mascota`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
