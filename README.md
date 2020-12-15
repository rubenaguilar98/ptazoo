## Nombre de la aplicación

PTA ZOO

## Script BDD
-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2020 a las 19:02:21
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zoologico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal`
--

CREATE TABLE `animal` (
  `idAni` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peso` decimal(8,2) NOT NULL,
  `altura` decimal(8,2) NOT NULL,
  `tipo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `especie` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enfermedad` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dieta` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fech_nac` date NOT NULL,
  `idRec` int(10) UNSIGNED NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `animal`
--

INSERT INTO `animal` (`idAni`, `nombre`, `peso`, `altura`, `tipo`, `especie`, `imagen`, `enfermedad`, `dieta`, `descripcion`, `fech_nac`, `idRec`, `updated_at`, `created_at`) VALUES
(2, 'Noa', '130.00', '3.00', 'Leona', 'Panthera Leo', '', 'Ninguna', 'Carnivoro', '', '2020-06-01', 1, '0000-00-00', '0000-00-00'),
(4, 'Rayas', '110.00', '1.80', 'zebra', 'Equus zebra', '', 'Ninguna', 'Hervíboro', '', '2004-09-24', 2, '0000-00-00', '0000-00-00'),
(5, 'Winnie', '233.00', '4.00', 'osoo', 'Ursus arctos (Oso pardo).', 'leonares.jpg', 'Ningunaa', 'Carnívoro .', 'Peaso oso', '1998-01-11', 3, '2020-11-30', '0000-00-00'),
(7, 'Aresss', '161.00', '3.41', 'Leono', 'Panthera Leoo', 'leonares.jpg', 'Ningunao', 'Carnivoroo', 'asdasdasdo', '2000-02-21', 1, '2020-11-30', '2020-11-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitat`
--

CREATE TABLE `habitat` (
  `idHab` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `continente` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperatura` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vegetacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `habitat`
--

INSERT INTO `habitat` (`idHab`, `nombre`, `continente`, `temperatura`, `vegetacion`, `descripcion`, `img`, `updated_at`, `created_at`) VALUES
(1, 'Sabana', 'Africa', 'Ambiente', 'Eucalipto', 'La sabana es un bioma caracterizado por un estrato arbóreo-arbustivo en que su dosel arbóreo tiene una escasa cobertura, ya sea por árboles pequeños o por tener poca densidad de ellos, que le permite un estrato herbáceo continuo y generalmente alto. Combina características del bosque y del pastizal. Normalmente, las sabanas son zonas secas de transición entre selvas y semidesiertos. Las sabanas se encuentran ubicadas en zonas tropicales y subtropicales, sobre todo con climas tropicales secos; aunque en ocasiones también se incluyen ecosistemas templados similares bajo esta denominación.1​ La sabana más conocida es la sabana africana.', 'sabana.jpg', '0000-00-00', '0000-00-00'),
(2, 'Montaña', 'Europa', 'Ambiente', 'Pinos', 'Montañita', 'montaña.jpg', '2020-12-09', '0000-00-00'),
(3, 'Bosque europeo', 'Europa', '22º', 'Pinos pinos y pinos', '', 'bosque.jpg', '0000-00-00', '0000-00-00'),
(10, 'Antártida', 'Polo Norte', '-26', 'Ninguna', 'El Polo Norte está ubicado en el Océano Ártico, formando un enorme casquete de hielo flotante sin ninguna masa de tierra firme. Geográficamente descrito entre los paralelos 66º - 99º de latitud norte, este lugar es el único del planeta en el que todas las direcciones indican sur. Sin embargo, el ser humano desconoce gran cantidad de datos de este lugar, pues dada nuestra biología y las condiciones del ártico, vivir en el Polo Norte es prácticamente imposible, algo que solo pueden lograr algunos pocos atrevidos.', 'poloNorte.jpg', '2020-11-28', '2020-11-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2020_10_26_114522_create_habitat_table', 1),
(20, '2020_10_26_114536_create_recinto_table', 1),
(21, '2020_10_26_114551_create_animal_table', 1),
(22, '2020_10_26_114602_create_cuidador_table', 1),
(23, '2020_10_26_114613_create_usuario_table', 1),
(24, '2020_10_26_123309_create_recinto_cuidador_table', 1),
(27, '2014_10_12_000000_create_users_table', 2),
(28, '2014_10_12_100000_create_password_resets_table', 2),
(29, '2020_12_08_114353_create_producto_table', 3),
(30, '2016_06_01_000001_create_oauth_auth_codes_table', 4),
(31, '2016_06_01_000002_create_oauth_access_tokens_table', 4),
(32, '2016_06_01_000003_create_oauth_refresh_tokens_table', 4),
(33, '2016_06_01_000004_create_oauth_clients_table', 4),
(34, '2016_06_01_000005_create_oauth_personal_access_clients_table', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('0b7cf8f35e7b17b268fc407e70ddc00dbffe2ed7259a74b601df72a2c515af14609503bf216f6fba', 2, 1, 'authToken', '[]', 0, '2020-12-10 20:14:19', '2020-12-10 20:14:19', '2021-12-10 21:14:19'),
('1e3080e2e2a627c2b4d4c75f1b64808b6566efda6aab6d8dbd240d7266177a8527a896b9f7e76c0b', 2, 1, 'authToken', '[]', 0, '2020-12-10 19:38:21', '2020-12-10 19:38:21', '2021-12-10 20:38:21'),
('2002cacc0605e44e345e8c81ef03ebaaa0b6abb9dbda2f655aabbee8d5174be2e7aeabf9b3cbd464', 2, 1, 'authToken', '[]', 0, '2020-12-10 19:47:21', '2020-12-10 19:47:21', '2021-12-10 20:47:21'),
('3c03b607bd89e479549228d2a951516386636ec43b7297a8e1ffe7a1ba3bae5e7206988b42870d82', 2, 1, 'authToken', '[]', 0, '2020-12-10 19:44:55', '2020-12-10 19:44:55', '2021-12-10 20:44:55'),
('54f7772945cf4ddd11494a43e49c2e5fcde1f86070d9a57ddf3530c918f771da4e16b935d3fded75', 2, 1, 'Personal Access Token', '[]', 0, '2020-12-10 20:41:10', '2020-12-10 20:41:10', '2021-12-10 21:41:10'),
('615265977f80760aa3cc3e75a03e6c758286080ff00270005576eae0fc4bd4a57900455998a23a22', 2, 1, 'authToken', '[]', 0, '2020-12-10 19:50:16', '2020-12-10 19:50:16', '2021-12-10 20:50:16'),
('75d2f8abae0d72e68576d879768bddc90eb04ec6fc6a3b79d4562c4241ce074d79aa8f1b25e42022', 2, 1, 'authToken', '[]', 0, '2020-12-10 20:14:04', '2020-12-10 20:14:04', '2021-12-10 21:14:04'),
('cca89ca3dd08db916ac88564c0497581ba739a161f3d4f55fcadd1798a7162a5e2e0f2b009237ef6', 2, 1, 'authToken', '[]', 0, '2020-12-10 20:14:40', '2020-12-10 20:14:40', '2021-12-10 21:14:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'u22Af3lZOqXqrQHhgjfmn0cEZOHLilMFyHg9HLsd', NULL, 'http://localhost', 1, 0, 0, '2020-12-10 18:47:52', '2020-12-10 18:47:52'),
(2, NULL, 'Laravel Password Grant Client', 'BTdAP1yM51PcmwSZQ0ewsAatEmVHEohgaUJKsm0G', 'users', 'http://localhost', 0, 1, 0, '2020-12-10 18:47:52', '2020-12-10 18:47:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-12-10 18:47:52', '2020-12-10 18:47:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('Admin@prueba.es', '$2y$10$HU8Y2jP/VSb8QVr.WreQrOw8ho1/.b.MM.9ORX72K1btm3sukyQBK', '2020-11-05 16:44:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` decimal(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `foto`, `precio`, `created_at`, `updated_at`) VALUES
(1, 'Entrada infantil', 'Entrada para niños de entre 5 y 14 años', NULL, '5.50', NULL, NULL),
(2, 'Entrada adultos', 'Entradas para personas de más de 18 años', NULL, '8.00', NULL, NULL),
(3, 'Entrada joven', 'Entrada para personas de entre 14 y 18 años', NULL, '6.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recinto`
--

CREATE TABLE `recinto` (
  `idRec` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cientifico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alimentacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comederos` int(11) NOT NULL,
  `bebederos` int(11) NOT NULL,
  `vallado` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL,
  `idHab` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `recinto`
--

INSERT INTO `recinto` (`idRec`, `nombre`, `cientifico`, `alimentacion`, `area`, `comederos`, `bebederos`, `vallado`, `descripcion`, `img`, `updated_at`, `created_at`, `idHab`) VALUES
(1, 'Leones', 'Panthera Leo', 'Carnivoroooo', '50m2', 2, 1, 'Metalico', 'hola', 'recintoLeones.jpg', '2020-12-09', '0000-00-00', 1),
(2, 'Zebras', '', '', '100m2', 2, 1, 'madera', '', '', '0000-00-00', '0000-00-00', 1),
(3, 'Osos', 'osito', 'feliz', '150m2', 3, 2, 'Metálico reforzado', 'asdasdasd', '', '2020-12-09', '0000-00-00', 3),
(6, 'Pumasito', 'Puma', 'Carnivoro', '758', 12, 12, 'Metalicosss', 'Pumitaaaaaaa', 'contacto.jpg', '2020-12-09', '2020-12-09', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ruben', 'Admin@prueba.es', NULL, '$2y$10$jbFaccx9RTz.C5kM/ZP22uaxsqbIP9hnIGU1qogX3w/oPB/3Oor8u', 1, NULL, '2020-11-05 16:43:58', '2020-11-05 16:43:58'),
(2, 'ruben', 'ruben@gmail.com', NULL, '$2y$10$uexv96rrVQcL19q/SLQrsOe4W3/UPIY5nz4MLY0FrMBSwHzclwfHi', 0, NULL, '2020-11-10 15:20:29', '2020-11-10 15:20:29'),
(3, 'Carmencita', 'carmen1@gmail.com', NULL, '$2y$10$M6LuDhRoPe5FIdZrWFXeLuYAz9QFEG9eITQPej9i7ndS9nGgBJEgS', 0, NULL, '2020-11-14 16:26:37', '2020-12-07 15:59:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsu` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombreUsuario` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`idAni`),
  ADD KEY `animal_idrec_foreign` (`idRec`);

--
-- Indices de la tabla `habitat`
--
ALTER TABLE `habitat`
  ADD PRIMARY KEY (`idHab`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recinto`
--
ALTER TABLE `recinto`
  ADD PRIMARY KEY (`idRec`),
  ADD KEY `recinto_idhab_foreign` (`idHab`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `animal`
--
ALTER TABLE `animal`
  MODIFY `idAni` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `habitat`
--
ALTER TABLE `habitat`
  MODIFY `idHab` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `recinto`
--
ALTER TABLE `recinto`
  MODIFY `idRec` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_idrec_foreign` FOREIGN KEY (`idRec`) REFERENCES `recinto` (`idRec`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recinto`
--
ALTER TABLE `recinto`
  ADD CONSTRAINT `recinto_idhab_foreign` FOREIGN KEY (`idHab`) REFERENCES `habitat` (`idHab`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


###



##


##


##


##

