-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2019 a las 17:06:40
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aventura`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(3) NOT NULL,
  `nombre` varchar(33) COLLATE utf8_estonian_ci NOT NULL,
  `contra` varchar(15) COLLATE utf8_estonian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `nombre`, `contra`) VALUES
(1, 'admin', '123'),
(2, 'admin1', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes`
--

CREATE TABLE `personajes` (
  `id` int(10) NOT NULL,
  `nombre` varchar(33) CHARACTER SET utf8 NOT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8 NOT NULL,
  `foto` varchar(150) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Volcado de datos para la tabla `personajes`
--

INSERT INTO `personajes` (`id`, `nombre`, `descripcion`, `foto`) VALUES
(2, 'AndrÃ©s', 'AndrÃ©s es un niÃ±o de 11 aÃ±os que tiene una personalidad muy curiosa, le encanta explorar la naturaleza y por eso ama pasar horas y horas en un bosque cercano a su casa, aunque a sus padres les molesta que pase tanto tiempo ahÃ­ ya que segÃºn la leyenda e en el bosque suceden cosas mÃ¡gicas y misteriosas. A AndrÃ©s le apasiona observar animales, sus favoritos son los pÃ¡jaros por la libertad con la que vuelan.', 'img/kid.jpg'),
(33, 'Isma', 'Isma es toda una leyenda, con mÃ¡s aÃ±os de los que aparenta Isma es una increÃ­ble maga que habita en las profundidades del bosque de la y a la cual pocas personas han tenido la fortuna de conocer ya que se dice que tiene la habilidad de transformarse en animales para mantenerse en secreto, su sabidurÃ­a es una de sus mayores virtudes. Solo aparece cuando una persona verdaderamente la necesita.', 'img/mg.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(33) COLLATE utf8_estonian_ci NOT NULL,
  `contra` varchar(15) COLLATE utf8_estonian_ci NOT NULL,
  `correo` varchar(35) COLLATE utf8_estonian_ci NOT NULL,
  `edad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `contra`, `correo`, `edad`) VALUES
(1, 'rebeca zapata arango', 'dhdchcccd', 'rebecaarango08@gmail.com', 18),
(2, 'Julian Murillo Garces', 'Hola', 'julian.murillo.jMG@gmail.com', 18),
(3, '', '', '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `personajes`
--
ALTER TABLE `personajes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
