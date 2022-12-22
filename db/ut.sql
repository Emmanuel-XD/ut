-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-12-2022 a las 23:00:12
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ut`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `fecha`) VALUES
(2, 'LAB1', '2022-11-11 15:10:32'),
(3, 'LAB2', '2022-11-11 15:10:41'),
(4, 'LAB3', '2022-11-11 15:10:53'),
(5, 'PESADOS', '2022-11-11 15:11:15'),
(6, 'NANOTECNOLOGIA', '2022-11-11 15:11:29'),
(7, 'BIOTECNOLOGIAS', '2022-11-14 14:31:58'),
(9, 'NUEVA', '2022-11-14 14:33:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `clave` varchar(150) NOT NULL,
  `modelo` varchar(150) NOT NULL,
  `marca` varchar(150) NOT NULL,
  `ubicacion` varchar(150) NOT NULL,
  `serie` varchar(150) NOT NULL,
  `fecha_ins` date NOT NULL,
  `fecha_serv` date NOT NULL,
  `condicion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `nombre`, `clave`, `modelo`, `marca`, `ubicacion`, `serie`, `fecha_ins`, `fecha_serv`, `condicion`) VALUES
(1, 'CROMATOGRAFO', '54107-09-0084-00002', 'Series 200', 'Perkin Elmer', 'BIOTECNOLOGIA', 'N6519100', '2022-11-11', '2022-11-20', 'NUEVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tamaño` varchar(50) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `marca` varchar(150) NOT NULL,
  `ubicacion` varchar(150) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`id`, `nombre`, `tamaño`, `cantidad`, `marca`, `ubicacion`, `fecha`) VALUES
(2, 'Alambre', '1CAJA', 1, 'Fierro', 'BIOTECNOLOGIA', '2022-11-11 21:45:28'),
(3, 'Buretas', '1BOTE', 2, 'FIERRO', 'BIOTECNOLOGIA', '2022-11-11 15:23:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `rol` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Alumno'),
(3, 'Docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reactivo`
--

CREATE TABLE `reactivo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `elaboracion` date NOT NULL,
  `caducidad` date NOT NULL,
  `cantidad` varchar(150) NOT NULL,
  `porcentaje` int(11) NOT NULL,
  `ubicacion` varchar(250) NOT NULL,
  `marca` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reactivo`
--

INSERT INTO `reactivo` (`id`, `nombre`, `elaboracion`, `caducidad`, `cantidad`, `porcentaje`, `ubicacion`, `marca`) VALUES
(8, 'Ácido benzoico', '2008-02-20', '2015-02-01', '100g', 20, 'LAB3', 'FERMONT'),
(9, 'Acido clorhidrico', '2017-02-02', '2022-03-05', '800ml', 70, 'LAB2', 'FERMONT'),
(10, 'Ácido nítrico 70%', '2015-05-12', '2021-08-08', '900ml', 97, 'BIOTECNOLOGIA', 'FERMONT'),
(11, 'Ácido octanoico', '2017-08-31', '2019-03-14', '7ml', 70, 'LAB2', 'SIGMA'),
(12, 'Ácido oxálico dihidratado', '2008-05-12', '2016-08-01', '150g', 24, 'LAB1', 'JALMEK'),
(13, 'Ácido sulfúrico', '2019-04-02', '2024-02-05', '1L', 100, 'NANOTECNOLOGIA', 'Hycel'),
(14, 'Alcohol eílico absoluto ACS', '2014-02-02', '2026-05-02', '3L', 70, 'NANOTECNOLOGIA', 'FERMONT'),
(15, 'Alumbre férrico', '2005-04-02', '2027-05-24', '18g', 20, 'LAB3', 'HYCEL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `id` int(11) NOT NULL,
  `folio` varchar(50) NOT NULL,
  `solicitud` date NOT NULL,
  `uso` date NOT NULL,
  `hora` time NOT NULL,
  `asignatura` varchar(100) NOT NULL,
  `profesor` varchar(150) NOT NULL,
  `grupo` varchar(250) NOT NULL,
  `practica` varchar(150) NOT NULL,
  `cantidad` varchar(100) NOT NULL,
  `material` varchar(150) NOT NULL,
  `entregado` varchar(150) NOT NULL,
  `pendiente` varchar(150) NOT NULL,
  `observacion` varchar(250) NOT NULL,
  `control` varchar(250) NOT NULL,
  `alumno` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reporte`
--

INSERT INTO `reporte` (`id`, `folio`, `solicitud`, `uso`, `hora`, `asignatura`, `profesor`, `grupo`, `practica`, `cantidad`, `material`, `entregado`, `pendiente`, `observacion`, `control`, `alumno`) VALUES
(3, '010101', '2022-12-08', '2022-12-11', '17:00:00', 'Quimica1', 'Ejemplo1', 'Salon-1', 'Practicas', '10/10/5/6', 'E/E/E/Y', 'No', 'Ninguno', 'Ejmplo', '0101', 'X/X/X/X/L');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla`
--

CREATE TABLE `tabla` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `categoria` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla`
--

INSERT INTO `tabla` (`id`, `nombre`, `correo`, `categoria`) VALUES
(1, 'Ejemplo', 'correo@gmail.com', 'Administrador'),
(2, 'Example', 'example@gmail.com', 'Empleado'),
(3, 'algunacosa', 'it@cos.com', 'Administrador'),
(4, 'Algo', 'Algo@nose.es', 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `nombre`, `correo`, `password`, `fecha`, `rol_id`) VALUES
(1, 'Emanuel', 'mugarte5672@gmail.com', '12345', '2022-11-10 00:40:30', 1),
(2, 'Usuario', 'user@gmail.com', '12345', '2022-11-09 23:23:49', 2),
(7, 'Alumno', 'alumno@ut.mx', '12345', '2022-11-11 17:19:01', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reactivo`
--
ALTER TABLE `reactivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tabla`
--
ALTER TABLE `tabla`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permisos` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reactivo`
--
ALTER TABLE `reactivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tabla`
--
ALTER TABLE `tabla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `permisos` FOREIGN KEY (`rol_id`) REFERENCES `permisos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
