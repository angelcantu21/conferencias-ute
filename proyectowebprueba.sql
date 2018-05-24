-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2018 a las 23:44:32
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectowebprueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `idAdministrador` int(11) NOT NULL,
  `nombre_admin` varchar(45) NOT NULL,
  `apellido_admin` varchar(45) NOT NULL,
  `carrera_admin` varchar(45) NOT NULL,
  `usuario_admin` varchar(45) NOT NULL,
  `password_admin` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`idAdministrador`, `nombre_admin`, `apellido_admin`, `carrera_admin`, `usuario_admin`, `password_admin`) VALUES
(1, 'Jose Angel', 'Cantu Ramirez', 'TICSI', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `Matricula` int(11) NOT NULL,
  `Nombre_alumno` varchar(45) NOT NULL,
  `Apellidos_alumno` varchar(45) NOT NULL,
  `Carrera` varchar(80) NOT NULL,
  `Cuatrimestre` varchar(20) NOT NULL,
  `Grupo` varchar(20) NOT NULL,
  `usuario_alumno` varchar(45) NOT NULL,
  `password_alumno` varchar(45) NOT NULL,
  `imagen_alumno` varchar(100) NOT NULL DEFAULT 'none.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`Matricula`, `Nombre_alumno`, `Apellidos_alumno`, `Carrera`, `Cuatrimestre`, `Grupo`, `usuario_alumno`, `password_alumno`, `imagen_alumno`) VALUES
(301610127, 'Carlos Alberto', 'Martinez Garza', 'Tecnologías de la Informacion y Comunicacion: Area de Sistemas Informaticos', '4', '\"A\" BIS', '301610127', 'admin', 'none.png'),
(301610128, 'Diego Gerardo', 'Laureano Martinez', 'Tecnologías de la información y Comunicación: Área de Sistemas Informáticos', '4', '\"A\" BIS', '301610128', 'admin', 'none.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `idevento` int(11) NOT NULL,
  `tipo_evento` varchar(45) NOT NULL,
  `nombre_evento` varchar(45) NOT NULL,
  `descripcion_evento` varchar(200) NOT NULL,
  `edificio_evento` varchar(20) NOT NULL,
  `fecha_evento` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_final` time NOT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`idevento`, `tipo_evento`, `nombre_evento`, `descripcion_evento`, `edificio_evento`, `fecha_evento`, `hora_inicio`, `hora_final`, `imagen`) VALUES
(1, 'evento', 'Evento 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla efficitur ultrices varius. Donec tempus risus non tellus posuere ullamcorper. In ornare libero non ipsum congue, quis vehicula felis lo.i', 'D-2', '2018-03-10', '15:02:00', '23:02:00', 'conferencista.png'),
(2, 'evento', 'Evento 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla efficitur ultrices varius. Donec tempus risus non tellus posuere ullamcorper. In ornare libero non ipsum congue, quis vehicula felis lobo', 'D-3', '2018-03-10', '03:03:00', '07:03:00', 'conferencistas.png'),
(3, 'conferencia', 'Conferencia 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer egestas porttitor auctor. Praesent at mauris porta, varius sem id, blandit lorem. Aenean porta ante in orci imperdiet, et semper tellus', 'D-2', '2018-03-10', '15:38:00', '21:38:00', 'conferencia1.jpg'),
(4, 'conferencia', 'Conferencia 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer egestas porttitor auctor. Praesent at mauris porta, varius sem id, blandit lorem. Aenean porta ante in orci imperdiet, et semper tellus', 'D-1', '2018-03-10', '15:39:00', '07:39:00', 'conferencia2.jpg'),
(5, 'concurso', 'Concurso 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer egestas porttitor auctor. Praesent at mauris porta, varius sem id, blandit lorem. Aenean porta ante in orci imperdiet, et semper tellus', 'Todos', '2018-03-10', '03:39:00', '03:39:00', 'concurso1.jpg'),
(7, 'concurso', 'Concurso 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer egestas porttitor auctor. Praesent at mauris porta, varius sem id, blandit lorem. Aenean porta ante in orci imperdiet, et semper tellus', 'Todos', '2018-03-10', '03:43:00', '03:43:00', 'concurso2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `idgaleria` int(11) NOT NULL,
  `nombre_galeria` varchar(45) NOT NULL,
  `descripcion_galeria` varchar(110) DEFAULT NULL,
  `ruta_galeria` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulaciones`
--

CREATE TABLE `postulaciones` (
  `idpostulacion` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `tema` varchar(45) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `postulaciones`
--

INSERT INTO `postulaciones` (`idpostulacion`, `nombre`, `apellidos`, `tema`, `descripcion`, `correo`, `telefono`) VALUES
(1, 'Jose Angel', 'Cantu Ramirez', 'wedsf', 'sdffdsf', 'angelcanturamirez@gmail.com', '2435435');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `idSlider` int(11) NOT NULL,
  `titulo_slider` varchar(45) NOT NULL,
  `descripcion_slider` varchar(300) NOT NULL,
  `imagen_slider` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`idSlider`, `titulo_slider`, `descripcion_slider`, `imagen_slider`) VALUES
(2, 'COMUNICAUTE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae ligula et nulla rutrum euismod eget a dolor. Duis ultricies placerat leo et lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce erat lacus, interdum vitae odio sodales, ege', 'slider2.jpg'),
(3, 'Slider 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae ligula et nulla rutrum euismod eget a dolor. Duis ultricies placerat leo et lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce erat lacus, interdum vitae odio sodales, ege', 'slider1.jpg'),
(6, 'SLIDER 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae ligula et nulla rutrum euismod eget a dolor. Duis ultricies placerat leo et lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce erat lacus, interdum vitae odio sodales, ege', 'building.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `tipo_usuario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `usuario`, `password`, `tipo_usuario`) VALUES
(1, 'angelcanturamirez@gmail.com', 'admin', 'administrador'),
(2, '301610127', 'admin', 'estudiante');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`idAdministrador`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`Matricula`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`idevento`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`idgaleria`);

--
-- Indices de la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  ADD PRIMARY KEY (`idpostulacion`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`idSlider`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `idevento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `idgaleria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  MODIFY `idpostulacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `idSlider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
