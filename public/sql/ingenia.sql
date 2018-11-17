-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-11-2018 a las 19:25:45
-- Versión del servidor: 5.6.37
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ingenia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creditcard` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`id`, `name`, `lastname`, `email`, `phone`, `creditcard`, `created_at`, `updated_at`) VALUES
(1, 'Thaddeus Wunsch', 'Monahan', 'mkassulke@example.org', '(791) 435-0155 x55567', '372199251949962', '2018-11-18 01:25:03', '2018-11-18 01:25:03'),
(2, 'Akeem Kessler', 'Satterfield', 'fay.lacey@example.net', '298.889.2985 x830', '2221231972257042', '2018-11-18 01:25:03', '2018-11-18 01:25:03'),
(3, 'Mr. Jarvis Hill', 'Von', 'towne.jennyfer@example.net', '958.625.8000', '5207882496087298', '2018-11-18 01:25:03', '2018-11-18 01:25:03'),
(4, 'Hilbert Auer II', 'Upton', 'earline.connelly@example.net', '453-806-8417 x74774', '4716548190312657', '2018-11-18 01:25:03', '2018-11-18 01:25:03'),
(5, 'Ephraim Dach DVM', 'Moore', 'ggrant@example.org', '+1 (283) 906-5935', '4539974721585345', '2018-11-18 01:25:03', '2018-11-18 01:25:03'),
(6, 'Santino Cartwright', 'Rowe', 'asia.kertzmann@example.org', '+1-214-499-9602', '2594459531319131', '2018-11-18 01:25:06', '2018-11-18 01:25:06'),
(7, 'Rollin Hudson', 'Flatley', 'ktorp@example.com', '578.339.3696 x227', '4716298149547272', '2018-11-18 01:25:06', '2018-11-18 01:25:06'),
(8, 'Kimberly Hauck', 'Braun', 'murphy.janelle@example.com', '451-985-3439 x793', '5183047733935240', '2018-11-18 01:25:06', '2018-11-18 01:25:06'),
(9, 'Ally Bogisich', 'O''Reilly', 'steuber.sally@example.com', '+1 (818) 694-0951', '4656289778384980', '2018-11-18 01:25:06', '2018-11-18 01:25:06'),
(10, 'Jesse Gerlach', 'Veum', 'javonte.wisoky@example.org', '550.893.0645', '2395542567449061', '2018-11-18 01:25:07', '2018-11-18 01:25:07'),
(11, 'Davin Sipes', 'McGlynn', 'knikolaus@example.org', '1-790-973-9847 x0243', '4532637463574416', '2018-11-18 01:25:08', '2018-11-18 01:25:08'),
(12, 'Germaine Luettgen I', 'Baumbach', 'alyson44@example.com', '302.309.7329 x243', '5418451808071401', '2018-11-18 01:25:09', '2018-11-18 01:25:09'),
(13, 'Mathew Rosenbaum', 'Streich', 'orobel@example.com', '590.661.3239', '2504155403379448', '2018-11-18 01:25:09', '2018-11-18 01:25:09'),
(14, 'Ms. Anabel McDermott', 'Cole', 'tmante@example.com', '1-282-747-7123', '4716327685219275', '2018-11-18 01:25:11', '2018-11-18 01:25:11'),
(15, 'Anjali Sauer', 'Harvey', 'mcclure.brown@example.com', '(231) 462-2639', '4929238798297871', '2018-11-18 01:25:11', '2018-11-18 01:25:11'),
(16, 'Alyson Simonis', 'Reilly', 'bednar.aurore@example.com', '(325) 987-2822 x21616', '4556758431735', '2018-11-18 01:25:11', '2018-11-18 01:25:11'),
(17, 'Dr. Devon Mante', 'Zboncak', 'george.jerde@example.org', '1-413-954-4620 x042', '4532289366298469', '2018-11-18 01:25:12', '2018-11-18 01:25:12'),
(18, 'Dana Nolan', 'Ernser', 'rparker@example.net', '980.523.1588 x2172', '2221629012261751', '2018-11-18 01:25:12', '2018-11-18 01:25:12'),
(19, 'Richie Zieme', 'Rippin', 'dickens.cortney@example.net', '713.418.9300 x09230', '5207139734289651', '2018-11-18 01:25:12', '2018-11-18 01:25:12'),
(20, 'Prof. Fernando Stoltenberg', 'Dickinson', 'leif00@example.net', '730-525-1813 x609', '2687959563259145', '2018-11-18 01:25:12', '2018-11-18 01:25:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2018_11_16_160326_create_customers_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@ingenia.com', '$2y$10$bUnBgzHq2xz90VnunfdoveiujNarco3SaDvZgSD/xDMw/ofFnN3xO', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
