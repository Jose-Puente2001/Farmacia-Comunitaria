-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-01-2023 a las 17:04:18
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `farmacia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `farmacia`
--

CREATE TABLE `farmacia` (
  `id_farmacia` int(11) NOT NULL,
  `medicamento` varchar(150) NOT NULL,
  `lote` varchar(100) NOT NULL,
  `vencimiento` varchar(100) NOT NULL,
  `total` int(100) NOT NULL,
  `ubicacion` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `farmacia`
--

INSERT INTO `farmacia` (`id_farmacia`, `medicamento`, `lote`, `vencimiento`, `total`, `ubicacion`, `user_id`) VALUES
(4, 'Azitromicina', '5000', '25/10/2025', 45, 'CDI', 0),
(5, 'paracetamol', '01111', '21/11/2024', 50, 'Cdi', 0),
(6, 'Simvastatina', '122 ', '25/10/2025 ', 12, 'CDI', 0),
(7, 'Omeprazol', '004', '25/02/2024', 6, 'cdi', 0),
(10, 'Simvastatina ', '22 ', '23/2/2026', 2, 'cdi', 0),
(12, 'Aspirina ', '2 ', '25/02/2024 ', 3, 'cdi', 0),
(13, 'Gabapentin ', '12 ', '25/02/2023 ', 40, 'CDI', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'messi', '$2y$10$Mm6/XSsL4CnvVtIMOx2pB.rEaiGBa3ti4jVbnd7roZtDljh8Bdt7i'),
(2, 'admin', '$2y$10$JcFAS/YBAT7Q4dtTtp6kme2MVswEI2UCdCbWI2yhJh/0djyBvzNBa'),
(3, 'jose', '$2y$10$9SBoZNRjSUu.J1C934ItiuEE//hmGa4BBfg6Fh3LxRD8axViYGZoW'),
(4, 'Mesi', '$2y$10$kD9bbEjri0Jt62QwTiBruu4qek6HgRPFvATIl0chBIkc6HgKQWX9y'),
(5, 'pablo', '$2y$10$hOls.caUs6qIv0FUwh.MX.SieHTNEGfClInvUtsbYuW7YfchA72v.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `farmacia`
--
ALTER TABLE `farmacia`
  ADD PRIMARY KEY (`id_farmacia`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `farmacia`
--
ALTER TABLE `farmacia`
  MODIFY `id_farmacia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
