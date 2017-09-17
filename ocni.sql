-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-07-2017 a las 16:38:40
-- Versión del servidor: 5.7.18-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ocni`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nomb` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convenio`
--

CREATE TABLE `convenio` (
  `id` int(11) NOT NULL,
  `tipo_resol` int(11) NOT NULL,
  `nro_resol` varchar(45) NOT NULL,
  `fecha_resol` date NOT NULL,
  `tipo_conv` int(11) NOT NULL,
  `programa` varchar(45) DEFAULT NULL,
  `inst_conv` varchar(150) NOT NULL,
  `finalidad` varchar(1000) NOT NULL,
  `vigencia_in` date NOT NULL,
  `vigencia_fn` date DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `convenio`
--

INSERT INTO `convenio` (`id`, `tipo_resol`, `nro_resol`, `fecha_resol`, `tipo_conv`, `programa`, `inst_conv`, `finalidad`, `vigencia_in`, `vigencia_fn`, `url`, `updated_at`, `created_at`) VALUES
(1, 2, '13217-2001-UNJBG', '2017-05-13', 1, '11111111', 'UNIVERSIDAD NACIONAL DEL ALTIPLANO DE PUNO', 'Colaboración entre carreras profesionales de Ingeniería de Minas de ambas instituciones en el campo de la docencia, la investigación y difusión de la cultura, asimismo establecer entre ellas una estricta cooperación e intercambio para la mejor realización de sus fines.', '2017-05-13', '2017-05-13', NULL, '2017-05-13 10:26:13', '2017-05-13 02:46:59'),
(2, 2, '250-2005-UNJBG', '2017-05-13', 1, '13123', 'CONVENIO DE COOPERACION CON LA ESCUELA NACIONAL DE MARINA MERCANTE', 'Establecer en el marco general para desarrollar mecanismos e instrumentos de mutua colaboración y beneficio con el propósito de llevar a cabo programas.', '2017-05-13', '2017-05-13', NULL, '2017-05-13 10:56:49', '2017-05-13 02:46:59'),
(3, 1, '690-2005-UNJBG', '2017-05-13', 1, '13123', 'SERVICIO NACIONAL DE METEOROLOGÍA E HIDROLOGÍA-SENAMHI TACNA.', 'Determinar y generar los parámetros agro-meteorológicos y su influencia en los diversos cultivos principalmente de lo agro exportación en la región sur.', '2017-05-13', '2017-05-13', NULL, '2017-05-13 10:26:52', '2017-05-13 02:46:59'),
(4, 1, '9808-98-UNJBG', '1998-01-16', 2, NULL, 'CONVENIO MARCO DE COOPERACIÓN Y COLABORACIÓN CULTURAL CON LA SECRETARIA REGIONAL DE EDUCACIÓN DE TARAPACÁ Y UNIVERSIDAD DE TARAPACÁ ARICA/CHILE.', 'Realización de acciones en conjunto con el objeto de desarrollar y difundir la actividad teatral tanto en el región de Tarapacá en Chile, como en la ciudad de Tacna en el Perú, en prosecución de contribuir al acervo artístico y cultural de los pueblos, por medio del quehacer teatral con acciones de formación y extensión en corto plazo.', '1997-01-08', NULL, NULL, '2017-05-13 02:46:24', '2017-05-13 02:46:59'),
(5, 1, '13367-2001-UNJBG', '2001-04-10', 2, NULL, 'CONVENIO DE COOPERAC. ACADEMICO-CULTURAL E  INSTITUCIONAL  CON LA UNIVERSIDAD DE GUADALAJARA MEXICO', 'Desarrollo de Investigación, Organización con la colaboración de actividades  académicas y científicas, Intercambio del Personal docente y de investigación, Intercambio de estudiantes, Intercambio de publicaciones y otros materiales de interés común.', '2001-03-28', NULL, NULL, '2017-05-13 02:46:24', '2017-05-13 02:46:59'),
(6, 1, '14540-2002- UNJBG', '2002-04-29', 2, NULL, 'CONVENIO DE COOPERACIÓN CON E LA UNIVERSIDAD DE GOTINGEN DE ALEMANIA', 'Desarrollo de cursos, talleres, seminarios, trabajos de investigaciones, intercambio de profesionales, estudiantes y programas de postgrado, admisión de estudiantes de maestrías y doctorado.', '2002-02-22', NULL, NULL, '2017-05-13 02:46:24', '2017-05-13 02:46:59'),
(7, 1, '1743-2006-UNJBG', '2006-04-03', 3, 'ESAG, ESEA, EMVZ, ESIA, ESIP, ESAM', 'CONVENIO COOPERACION INSTITUTO NACIONAL DE INVESTIGACIÓN Y EXTENSIÓN AGRARIA  INIEA', 'Establecer las condiciones de cooperación entre la ESTACIÒN EXPERIMENTAL Y LA UNJBG para contribuir  a la tecnificación de la producción agrícola y pecuaria como objetivo prioritario. Establecer estrategias y mecanismos de coordinación y ejecución.', '2006-03-09', NULL, NULL, '2017-05-13 02:46:24', '2017-05-13 02:46:59'),
(8, 2, '10004-13-UNJBG ', '2013-03-06', 3, 'ESIP', 'CONVENIO MARCO DE COOPERACION INTERINSTITUCIONAL CON EL INSTITUTO DEL MAR DEL PERU - IMARPE', 'Desarrollar en forma conjunta actividades de investigación científica y tecnológica en área de interés común, así como llevar a cabo acciones de capacitación y difusión en beneficio de ambas instituciones y de la comunidad científica en general.', '2013-02-09', '2017-02-09', NULL, '2017-05-13 02:46:24', '2017-05-13 02:46:59'),
(9, 1, '3158-14-UNJBG', '2014-03-21', 3, 'FACS - ESOB', 'CONVENIO MARCO DE COOPERACION DOCENTE ASISTENCIAL CON LA GERENCIA REGIONAL DE SALUD DEL GOBIERNO REGIONAL DE AREQUIPA', 'Crear el marco de cooperación entre las partes, para la adecuada formación y capacitación de profesionales, orientada a la atención de los problemas prioritarios de salud de la población, acorde con las políticas y planes de desarrollo del sector salud; así como regular el desarrollo de las acciones de docencia en servicio e investigación, que se realizan en internado en Obstetricia, en los servicios de salud de la gerencia regional de salud.', '2014-04-11', '2018-04-11', NULL, '2017-05-13 02:46:24', '2017-05-13 02:46:59'),
(10, 1, '3704-14-UNJBG ', '2014-09-12', 4, 'FACS ', 'CONVENIO PARA COOPERACION DOCENTE ASISTENCIAL HOSPITAL SANTA ROSA DE PUERTO MALDONADO', 'Desarrollo de acciones de docencia, servicio e investigación el Pregrado y Postgrado, a fin de articular las estrategias de atención de salud con los programas de docencia, investigación y proyección social, logrando de esta manera que, sobre un cabal conocimiento de la realidad de salud del país, se lleve a cabo una adecuada programación de acciones conjuntas para que la formación de profesionales responda a las necesidades de la comunidad. ', '2014-08-15', '2017-08-15', NULL, '2017-05-13 02:46:24', '2017-05-13 02:46:59'),
(11, 1, '3949-14-UNJBG', '2014-11-27', 4, 'ESIC, ESIM, ESAQ, ESGE', 'CONVENIO MARCO DE COOPERACION INTERINSTITUCIONAL EMPRESA MINERA EMILIO MIGUEL SOCIEDAD DE RESPONSABILIDAD LIMITADA', 'Facilitar la implementación de mecanismos e instrumentos de mutua colaboración y beneficio que sumen los esfuerzos y recursos disponibles de ambas instituciones para la promoción del desarrollo profesional, intercambio de conocimientos y experiencias que repercutirán en un incremento de nivel académico de estudiantado y profesionales mineros de la universidad y en la mejora de la industria minera en general.', '2014-11-21', '2018-11-21', NULL, '2017-05-13 02:46:24', '2017-05-13 02:46:59'),
(12, 1, '4822-2015-UNJBG', '2015-08-19', 4, 'TODAS LAS CARRERAS DE LA UNJBG', 'CONVENIO MARCO DE COOPERACIÓN INTERINSTITUCIONAL ENTRE EL GOBIERNO REGIONAL TACNA', 'Coordinar esfuerzos encaminados a establecer relaciones de cooperación interinstitucional así como realizar acciones conjuntas en programas de formación profesional, capacitación, consultorías, asesoramiento, fortalecimiento, interinstitucional, diseño y ejecución de proyectos de gestión, inversión e investigación, monitoreo y evaluación de programas y proyectos, difusión y comunicación social entre otros, en beneficio de la comunidad', '2015-08-11', '2019-08-11', NULL, '2017-05-13 02:46:24', '2017-05-13 02:46:59'),
(1240, 2, '1234123', '2017-05-13', 2, '123', 'UNIVERSIDAD NACIONAL DEL ALTIPLANO DE PUNO', 'zxc', '2017-05-13', '2017-05-13', NULL, '2017-05-13 11:00:35', '2017-05-13 10:05:39'),
(1241, 1, 'zxczxz222', '2017-05-13', 2, '13123', 'zzzzzzzxxx', 'zzzzzxxxxxxx', '2017-05-13', '2017-05-13', NULL, '2017-05-13 10:17:20', '2017-05-13 10:06:11'),
(1245, 1, '1213', '2017-06-09', 1, 'Marcol', 'CONCYTEC', 'Lineamiento general para la gestión de proyectos de investigación y su evaluación', '2017-06-09', '2017-06-09', NULL, '2017-06-09 21:09:04', '2017-05-16 02:46:43'),
(1246, 1, 'xxxxxxxxx', '2017-05-16', 1, 'xxxxxxxxx', 'xxxxxxxxxx', 'xxxxxxxxxxx', '2017-05-16', '2017-05-16', NULL, '2017-05-16 19:21:14', '2017-05-16 19:20:24'),
(1247, 2, '32', '2017-06-09', 1, '32', '32', '32', '2017-06-09', '2017-06-09', NULL, '2017-06-09 21:09:24', '2017-06-09 21:09:24'),
(1248, 2, '100', '2017-06-16', 3, 'Esis', 'convenio', 'esto es una prueba', '2060-06-01', '2089-06-01', NULL, '2017-06-17 00:25:44', '2017-06-17 00:25:44'),
(1249, 1, '131231', '2017-07-07', 1, 'ocni', 'xd', 'sdasdas', '2017-07-07', '2017-07-07', NULL, '2017-07-07 18:32:55', '2017-07-07 18:32:55'),
(1250, 1, 'prueba', '2017-07-11', 1, 'prueba', 'prueba', 'sdasdasda', '2017-07-11', '2017-07-11', NULL, '2017-07-11 22:15:22', '2017-07-11 22:15:22'),
(1251, 1, 'prueba', '2017-07-11', 1, 'prueba', 'prueba', 'sdasdasda', '2017-07-11', '2017-07-11', NULL, '2017-07-11 22:15:22', '2017-07-11 22:15:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conv_nature`
--

CREATE TABLE `conv_nature` (
  `id` int(11) NOT NULL,
  `id_macro` int(11) NOT NULL,
  `id_conv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `history`
--

CREATE TABLE `history` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `entity_id` int(10) UNSIGNED DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assets` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `history`
--

INSERT INTO `history` (`id`, `type_id`, `user_id`, `entity_id`, `icon`, `class`, `text`, `assets`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 4, 'lock', 'bg-blue', 'trans("history.backend.users.changed_password") <strong>{user}</strong>', '{"user_string":"rodrigo viveros"}', '2017-06-09 21:57:50', '2017-06-09 21:58:16'),
(2, 1, 1, 4, 'trash', 'bg-maroon', 'trans("history.backend.users.deleted") <strong>{user}</strong>', '{"user_string":"rodrigo viveros"}', '2017-06-09 21:58:03', '2017-06-09 21:58:16'),
(3, 1, 1, 4, 'trash', 'bg-maroon', 'trans("history.backend.users.permanently_deleted") <strong>{user}</strong>', '{"user_string":"rodrigo viveros"}', '2017-06-09 21:58:16', '2017-06-09 21:58:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `history_types`
--

CREATE TABLE `history_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `history_types`
--

INSERT INTO `history_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'User', '2017-05-13 07:41:25', '2017-05-13 07:41:25'),
(2, 'Role', '2017-05-13 07:41:25', '2017-05-13 07:41:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2015_12_28_171741_create_social_logins_table', 1),
(4, '2015_12_29_015055_setup_access_tables', 1),
(5, '2016_07_03_062439_create_history_tables', 1),
(6, '2017_04_04_131153_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'view-backend', 'View Backend', 1, '2017-05-13 07:41:24', '2017-05-13 07:41:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`) VALUES
(1, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `all` tinyint(1) NOT NULL DEFAULT '0',
  `sort` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `all`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 1, 1, '2017-05-13 07:41:23', '2017-05-13 07:41:23'),
(2, 'Executive', 0, 2, '2017-05-13 07:41:23', '2017-05-13 07:41:23'),
(3, 'User', 0, 3, '2017-05-13 07:41:23', '2017-05-13 07:41:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(5, 5, 3),
(6, 6, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4ztOa7CONUdTau0YiqJC4IA3ntP9BOQeOSR6M5AO', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.109 Safari/537.36', 'ZXlKcGRpSTZJamhZTWtKVGJEZzBiRk5KTTNKbldXRjJWbk5xTTJjOVBTSXNJblpoYkhWbElqb2lNVnd2ZEdoS2RrZG1LME42WTJoUGMzQm1WV2gwUWpsV2MyWlFUblpPTjJ0blhDOVlVMUJXUjNWRmRsWkJSRlpKZVd4dlVWRktUVmxYVlRkV01WRnNPVlI0UzFKa1ZXZDNZM0pvYkRCUFkweFJjRkJwVGxWdlFsUjNhWFJUUmpkcU5UTlpVRGhKU0V0Y0wwMUtla2RwUmxaWWVGQmtYQzlWWlhsSUswMXllVk01Y0VzME5FVnNNRVZFUVVWYU1GSmlUV0pwUTBjMFRtVnlVRUkzVVc4MGIzRlRPVTVhUkhjclozQkZVbTVzVGxWYVZraExNamcxYWsxaVdVczBRMXd2WW1kemFVSjFhRXRHYUc1Y0x6VnpWR3hzU2toTVoxd3ZTbTF6U25OMk5YbHdabE5JWEM5RVRETlBRalZ1ZUdSRlkySmFZbmMyWWxoeFJUQjNjMUpKZEVvek9GSlZkelZ2VEhkT2FrNXhPV2hZZUhsMlkwTjNZVzg1VVUwck1VSjBaSEZPSzBKc1Zrb3JTVTV0Y0ZCMGVFUlZLMjk0VlU1YVZYUXdPR3RIY2tsVFlWUmxSalJtYTJ4WVFqbE5lWE5NV2tSY0wzSkljVWRJTmtkUlltRjBZa016UW1ad1IwOXJlV2hzYTNwWWJHMHdLMHBrVGt4RWFXSTNlbW81WW1rNU9HVkZhRXAzUkZKSmVqSnlOVU5ETURoSU5WUTVORFp4ZDB0cFZXdDRaRFZpTWxWTmRXOUJPRU5CY1RWM2VXcFJUMGRwUkVaaU9FVXJia1E1YkhOQ2FuRlhkMXd2UjNJd1drTnNRVGhPU25KNE5reFFNemhyTW5kS1NHSmNMM0ZEUVQwOUlpd2liV0ZqSWpvaU1UbG1aVGRpTVRReE9ETXhNREpoTmpWak16QmhObUl3TkdKak9UVTNaamsxWkdNME16Z3lPV0prWWpjMFpXUXdaak5oTnpGaE1URXhaVGszTnpnMU15Sjk=', 1499794037),
('J6g5oCuuSNXEHHprt6EFWimmEO5B3MGCgzozfkdE', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.109 Safari/537.36', 'ZXlKcGRpSTZJa0p4VW5KS1JIa3pZbWswY2tsbVYyRm5ia3BCVFVFOVBTSXNJblpoYkhWbElqb2lVVVZ3SzNOelJUazFhU3QyWm1wU1VHRm1TVmRwWVZCaVMyNVBZalJWU1V0alRtVjBRVXhYWm1KRFVVUjZNbFpvV25oWVVETktNRko2YUZGUlpsY3dWVU5UTmxsa09WTTFSSGxzVUd4Nk9HTmlVRmhQWVdVeWNFdGNMMEUyZVdwRVN6STBXVTlXWkVOU1NERkRZak5wVlVJeFVqQjJTMkZXWmtaRGRVOTZUbFprWEM5dkswVlZNbHBIVmtwd1JrczBXVGxYWXpJMlREaFRLM28zWkhaWVptOHhWemN3TmtaUVVESTBOREppZFN0SVpsZFBNM1o0TVhaUmFWRjZhMU5QV2pVeFFsd3ZNMmRyYWtZd1VVRk9jR3RXZVVaNVZDdHFlWE5IV0RCQ1NHZHVhbEpQY1hrd1FYcFZSMU14VFdsS01uTldPWEpYVFZkSVdIcHphbmN3Um5sb1VWbElhamNyWmxBMFdVVmhPREJXVXpWSFRtWjJTbXc1VlVSa2FWbEdWM0JXU2trMWVuUlNObGxpWlVjNWVERm1Xbll6YVhKV01IVkVabGQ1T1hneVpUY2lMQ0p0WVdNaU9pSm1aR1k1T1RRM01EWTVaRFU1WkRBM01UTTJPREE0WVRCalpqRTFaREJoWW1SallXWmxOMlEzWVROa05URmxOalF3WVRnek5HWXhaakF6Tm1Fd056ZzFJbjA9', 1499794070);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `social_logins`
--

CREATE TABLE `social_logins` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_conv`
--

CREATE TABLE `tipos_conv` (
  `id` int(11) NOT NULL,
  `id_conv` int(11) NOT NULL,
  `id_tipo_conv1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_conv1`
--

CREATE TABLE `tipo_conv1` (
  `id` int(11) NOT NULL,
  `nomb_tipo_conv1` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_conv1`
--

INSERT INTO `tipo_conv1` (`id`, `nomb_tipo_conv1`) VALUES
(1, 'Nacional'),
(2, 'Internacional'),
(3, 'Investigacion'),
(4, 'Practicas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_resol`
--

CREATE TABLE `tipo_resol` (
  `id` int(11) NOT NULL,
  `nombr_tipo_resol` varchar(45) NOT NULL,
  `descripcion` text NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_resol`
--

INSERT INTO `tipo_resol` (`id`, `nombr_tipo_resol`, `descripcion`, `updated_at`, `created_at`) VALUES
(1, 'Resolucion Rectoral', '', '2017-05-22 15:26:42', '2017-05-22 15:27:23'),
(2, 'Resolucion de Consejo Universitario', '', '2017-05-22 15:26:42', '2017-05-22 15:27:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `confirmation_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `status`, `confirmation_code`, `confirmed`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Rodrigo', 'Viveros', 'admin@admin.com', '$2y$10$oCX9E0Hf9eBrD5/9EfS1t.J9vPEHhcbt4qgjjCHAHVccT01b3/aIq', 1, 'f8f9d89c29c19de4296395581103135f', 1, '5AvuUajZsBNoAdTnqg8fIAAxVnAPrgfnvwanpXbSopHwygufuX6huTwdETOM', '2017-05-13 07:41:22', '2017-05-25 01:41:40', NULL),
(2, 'Backend', 'User', 'executive@executive.com', '$2y$10$acpCqeLuTtSb3deQO7fmFOr1JKiTSgO.Mz58ot3iqIHIRKN.WxP9m', 1, '14cdffc717920160732b166b6d9ba207', 1, NULL, '2017-05-13 07:41:22', '2017-05-13 07:41:22', NULL),
(3, 'Default', 'User', 'user@user.com', '$2y$10$p/w4wIuB5HM3.WoXd6Lf.eRspK3YUX3KWGJFY.BJBDybIv1OwvpUG', 1, 'c597ad3ec19740eb02fc02bffa2411a9', 1, NULL, '2017-05-13 07:41:22', '2017-05-13 07:41:22', NULL),
(5, 'rodrigo', 'viveros', 'cherry199662@gmail.com', '$2y$10$MP5Itqhl6njRz0Ug4/LSjuuSCHAkG9EEAfn3/cC.R4i9uCbeKPeau', 1, 'cbe31e88cc2834b5c19875b92859ec1a', 1, 'h1xmnv2L4NXoJJxe8Yq4QNtvbPY8IVKx1RzFAkJCbpk46cXwC2LRQKwdBTTB', '2017-06-09 22:00:35', '2017-06-09 22:01:34', NULL),
(6, 'freddy', 'condori', 'zuarez.tk@gmail.com', '$2y$10$ASLkqucestoHmmh/VWxSa.6j7Fhb6wcpzAk2x/wfPBHPSYcn2OC32', 1, '3cde79acd57b353417aa3c09f07ba728', 0, NULL, '2017-06-09 23:43:05', '2017-06-09 23:43:05', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `convenio`
--
ALTER TABLE `convenio`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_conv_UNIQUE` (`id`),
  ADD KEY `fk_convenio_has_tipo_resol_convenio_idx` (`tipo_resol`),
  ADD KEY `fk_convenio_has_tipo_conv1_convenio_idx` (`tipo_conv`);

--
-- Indices de la tabla `conv_nature`
--
ALTER TABLE `conv_nature`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_type_id_foreign` (`type_id`),
  ADD KEY `history_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `history_types`
--
ALTER TABLE `history_types`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indices de la tabla `social_logins`
--
ALTER TABLE `social_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_logins_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `tipos_conv`
--
ALTER TABLE `tipos_conv`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_conv1`
--
ALTER TABLE `tipo_conv1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `convenio_id_tipo_conv1_UNIQUE` (`id`);

--
-- Indices de la tabla `tipo_resol`
--
ALTER TABLE `tipo_resol`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_resol_UNIQUE` (`id`);

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
-- AUTO_INCREMENT de la tabla `convenio`
--
ALTER TABLE `convenio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1252;
--
-- AUTO_INCREMENT de la tabla `conv_nature`
--
ALTER TABLE `conv_nature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `history_types`
--
ALTER TABLE `history_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `social_logins`
--
ALTER TABLE `social_logins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipos_conv`
--
ALTER TABLE `tipos_conv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_conv1`
--
ALTER TABLE `tipo_conv1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipo_resol`
--
ALTER TABLE `tipo_resol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `convenio`
--
ALTER TABLE `convenio`
  ADD CONSTRAINT `fk_convenio_has_tipo_conv1_convenio` FOREIGN KEY (`tipo_conv`) REFERENCES `tipo_conv1` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_convenio_has_tipo_resol_convenio` FOREIGN KEY (`tipo_resol`) REFERENCES `tipo_resol` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `history_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `history_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `social_logins`
--
ALTER TABLE `social_logins`
  ADD CONSTRAINT `social_logins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
