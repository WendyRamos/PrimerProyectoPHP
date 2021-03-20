
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `asistenciadb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `idalumno` int(11) NOT NULL,
  `grado_idgrado` int(11) NOT NULL,
  `dni` char(8) DEFAULT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `paterno` varchar(45) DEFAULT NULL,
  `materno` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`idalumno`, `grado_idgrado`, `dni`, `nombres`, `paterno`, `materno`, `fecha_nacimiento`) VALUES
(1, 1, '12345678', 'joe', 'ramos', 'ramos', NULL),
(2, 1, '87654321', 'wendy', 'ramos', 'ramos', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_has_turno`
--

CREATE TABLE `alumno_has_turno` (
  `alumno_idalumno` int(11) NOT NULL,
  `turno_idturno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `idasistencia` int(11) NOT NULL,
  `estadoasistencia_idestadoasistencia` int(11) NOT NULL,
  `fecha_hora` varchar(45) DEFAULT NULL,
  `turno_idturno` int(11) NOT NULL,
  `alumno_idalumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`idasistencia`, `estadoasistencia_idestadoasistencia`, `fecha_hora`, `turno_idturno`, `alumno_idalumno`) VALUES
(2, 1, '2019-07-22 03:04:43', 1, 1),
(3, 1, '2019-07-22 03:08:27', 1, 1),
(4, 1, '2019-07-22 03:26:59', 1, 1),
(5, 1, '2019-07-22 03:27:53', 1, 1),
(6, 1, '2019-07-22 03:27:53', 1, 1),
(7, 1, '2019-07-22 03:28:01', 1, 2),
(8, 1, '2019-07-22 03:28:34', 1, 2),
(9, 1, '2019-07-22 03:28:35', 1, 2),
(10, 1, '2019-07-22 03:28:38', 1, 1),
(11, 1, '2019-07-22 03:29:35', 1, 1),
(12, 1, '2019-07-22 03:29:35', 1, 1),
(13, 1, '2019-07-22 03:32:37', 1, 1),
(14, 1, '2019-07-22 03:33:11', 1, 2),
(15, 1, '2019-07-22 03:33:41', 1, 2),
(16, 1, '2019-07-22 03:33:41', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `idbitacora` int(11) NOT NULL,
  `tabla` varchar(45) DEFAULT NULL,
  `tipo_operacion` varchar(45) DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_bitacora`
--

CREATE TABLE `detalle_bitacora` (
  `iddetalle_bitacora` int(11) NOT NULL,
  `campo_alterado` varchar(45) DEFAULT NULL,
  `valor_anterior` varchar(45) DEFAULT NULL,
  `valor_modificado` varchar(45) DEFAULT NULL,
  `bitacora_idbitacora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoasistencia`
--

CREATE TABLE `estadoasistencia` (
  `idestadoasistencia` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estadoasistencia`
--

INSERT INTO `estadoasistencia` (`idestadoasistencia`, `descripcion`) VALUES
(1, 'tarde'),
(2, 'temprano'),
(3, 'falta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `idgrado` int(11) NOT NULL,
  `grupo_idgrupo` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`idgrado`, `grupo_idgrupo`, `descripcion`) VALUES
(1, 1, 'Secundaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `idgrupo` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`idgrupo`, `descripcion`) VALUES
(1, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegios`
--

CREATE TABLE `privilegios` (
  `idprivilegios` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `rol_idrol` int(11) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `idturno` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `hora_ingreso` varchar(45) DEFAULT NULL,
  `hora_salida` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`idturno`, `descripcion`, `hora_ingreso`, `hora_salida`) VALUES
(1, 'noche', '20:30', '01:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`idalumno`),
  ADD UNIQUE KEY `dni_UNIQUE` (`dni`),
  ADD KEY `fk_alumno_grado1_idx` (`grado_idgrado`);

--
-- Indices de la tabla `alumno_has_turno`
--
ALTER TABLE `alumno_has_turno`
  ADD PRIMARY KEY (`alumno_idalumno`,`turno_idturno`),
  ADD KEY `fk_alumno_has_turno_turno1_idx` (`turno_idturno`),
  ADD KEY `fk_alumno_has_turno_alumno1_idx` (`alumno_idalumno`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`idasistencia`,`estadoasistencia_idestadoasistencia`,`turno_idturno`),
  ADD KEY `fk_asistencia_estadoasistencia1_idx` (`estadoasistencia_idestadoasistencia`),
  ADD KEY `fk_asistencia_turno1_idx` (`turno_idturno`),
  ADD KEY `fk_asistencia_alumno1_idx` (`alumno_idalumno`);

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`idbitacora`);

--
-- Indices de la tabla `detalle_bitacora`
--
ALTER TABLE `detalle_bitacora`
  ADD PRIMARY KEY (`iddetalle_bitacora`),
  ADD KEY `fk_detalle_bitacora_bitacora1_idx` (`bitacora_idbitacora`);

--
-- Indices de la tabla `estadoasistencia`
--
ALTER TABLE `estadoasistencia`
  ADD PRIMARY KEY (`idestadoasistencia`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`idgrado`),
  ADD KEY `fk_grado_grupo1_idx` (`grupo_idgrupo`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`idgrupo`);

--
-- Indices de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  ADD PRIMARY KEY (`idprivilegios`),
  ADD KEY `fk_privilegios_rol1_idx` (`rol_idrol`),
  ADD KEY `fk_privilegios_usuario1_idx` (`usuario_idusuario`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`idturno`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `idalumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `idasistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_bitacora`
--
ALTER TABLE `detalle_bitacora`
  MODIFY `iddetalle_bitacora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estadoasistencia`
--
ALTER TABLE `estadoasistencia`
  MODIFY `idestadoasistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `idgrado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `idgrupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  MODIFY `idprivilegios` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `idturno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `fk_alumno_grado1` FOREIGN KEY (`grado_idgrado`) REFERENCES `grado` (`idgrado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `alumno_has_turno`
--
ALTER TABLE `alumno_has_turno`
  ADD CONSTRAINT `fk_alumno_has_turno_alumno1` FOREIGN KEY (`alumno_idalumno`) REFERENCES `alumno` (`idalumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_alumno_has_turno_turno1` FOREIGN KEY (`turno_idturno`) REFERENCES `turno` (`idturno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `fk_asistencia_alumno1` FOREIGN KEY (`alumno_idalumno`) REFERENCES `alumno` (`idalumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_asistencia_estadoasistencia1` FOREIGN KEY (`estadoasistencia_idestadoasistencia`) REFERENCES `estadoasistencia` (`idestadoasistencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_asistencia_turno1` FOREIGN KEY (`turno_idturno`) REFERENCES `turno` (`idturno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_bitacora`
--
ALTER TABLE `detalle_bitacora`
  ADD CONSTRAINT `fk_detalle_bitacora_bitacora1` FOREIGN KEY (`bitacora_idbitacora`) REFERENCES `bitacora` (`idbitacora`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `grado`
--
ALTER TABLE `grado`
  ADD CONSTRAINT `fk_grado_grupo1` FOREIGN KEY (`grupo_idgrupo`) REFERENCES `grupo` (`idgrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `privilegios`
--
ALTER TABLE `privilegios`
  ADD CONSTRAINT `fk_privilegios_rol1` FOREIGN KEY (`rol_idrol`) REFERENCES `rol` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_privilegios_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
