-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 11, 2017 at 04:16 PM
-- Server version: 5.5.54-cll
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spirit_pos`
--
CREATE DATABASE IF NOT EXISTS `spirit_pos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `spirit_pos`;

-- --------------------------------------------------------

--
-- Table structure for table `acciones`
--

DROP TABLE IF EXISTS `acciones`;
CREATE TABLE IF NOT EXISTS `acciones` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_padre` int(11) NOT NULL DEFAULT '0',
  `slug` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accion_usuario`
--

DROP TABLE IF EXISTS `accion_usuario`;
CREATE TABLE IF NOT EXISTS `accion_usuario` (
  `accion_id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`accion_id`,`usuario_id`),
  KEY `accion_usuario_accion_id_index` (`accion_id`),
  KEY `accion_usuario_usuario_id_index` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `actividad`
--

DROP TABLE IF EXISTS `actividad`;
CREATE TABLE IF NOT EXISTS `actividad` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `colaborador_id` int(10) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL,
  `descripcion_cita` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `actividad_cliente_id_foreign` (`cliente_id`),
  KEY `actividad_colaborador_id_foreign` (`colaborador_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `actividad`
--

INSERT INTO `actividad` (`id`, `cliente_id`, `colaborador_id`, `fecha`, `descripcion_cita`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2017-04-07 08:00:00', 'Visita a Hotel las Americas', '2017-04-07 13:00:00', '2017-04-07 13:00:00'),
(2, 3, 2, '2017-04-07 09:00:00', 'Visita al Hotel Hilton', '2017-04-07 13:00:00', '2017-04-07 13:00:00'),
(3, 5, 2, '2017-04-07 11:00:00', 'Pasar a Años Locos', '2017-04-07 13:00:00', '2017-04-07 13:00:00'),
(4, 2, 2, '2017-04-06 11:00:00', 'Visita a Decapolis', '2017-04-07 13:00:00', '2017-04-07 13:00:00'),
(5, 4, 2, '2017-04-10 11:00:00', 'Las Clementinas', '2017-04-07 13:00:00', '2017-04-07 13:00:00'),
(6, 1, 2, '2017-04-11 11:00:00', 'Bambú', '2017-04-07 13:00:00', '2017-04-07 13:00:00'),
(7, 6, 2, '2017-04-27 05:00:00', 'Dr. Limon', NULL, NULL),
(8, 7, 2, '2017-04-27 05:30:00', 'Patagonia', NULL, NULL),
(9, 8, 2, '2017-04-27 06:00:00', 'Años Locos', NULL, NULL),
(10, 9, 2, '2017-04-27 06:30:00', 'Azafran', NULL, NULL),
(11, 10, 2, '2017-04-27 07:00:00', 'A mano', NULL, NULL),
(12, 11, 2, '2017-04-27 07:30:00', 'Bodegón', NULL, NULL),
(13, 12, 2, '2017-04-27 08:00:00', 'ZK', NULL, NULL),
(14, 13, 2, '2017-04-27 08:30:00', 'Cabana', NULL, NULL),
(15, 14, 2, '2017-04-27 09:00:00', 'Chin Chin', NULL, NULL),
(16, 15, 2, '2017-04-27 09:30:00', 'Cbp', NULL, NULL),
(17, 16, 2, '2017-04-27 10:30:00', 'Central', NULL, NULL),
(18, 17, 2, '2017-04-27 11:00:00', 'Casa Casco', NULL, NULL),
(19, 18, 2, '2017-04-27 11:30:00', 'Pastissima', NULL, NULL),
(20, 19, 2, '2017-04-27 12:00:00', 'Cascomar', NULL, NULL),
(21, 20, 2, '2017-04-27 12:30:00', 'Milano', NULL, NULL),
(22, 21, 2, '2017-04-27 13:00:00', 'Casa Blanca', NULL, NULL),
(23, 22, 2, '2017-04-27 13:30:00', 'Las Bovedas', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `canal`
--

DROP TABLE IF EXISTS `canal`;
CREATE TABLE IF NOT EXISTS `canal` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descripcion_canal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `canal`
--

INSERT INTO `canal` (`id`, `descripcion_canal`, `created_at`, `updated_at`) VALUES
(1, 'Off Trade', '2017-03-31 08:52:37', '2017-03-31 08:53:29'),
(2, 'On Trade', '2017-03-31 08:52:48', '2017-03-31 08:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descripcion_categoria` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id`, `descripcion_categoria`, `created_at`, `updated_at`) VALUES
(1, 'Whisky', '2017-03-31 08:36:35', '2017-03-31 08:36:35'),
(2, 'Vodka', '2017-03-31 08:37:23', '2017-03-31 08:37:23'),
(3, 'Rones', '2017-03-31 08:37:31', '2017-03-31 08:37:31'),
(4, 'Vinos', '2017-03-31 08:37:40', '2017-03-31 08:37:40'),
(5, 'Cerveza', '2017-03-31 08:37:49', '2017-03-31 08:37:49'),
(6, 'Espirituosos', '2017-03-31 08:37:59', '2017-03-31 08:38:31'),
(7, 'Ginebra', '2017-03-31 08:37:59', '2017-03-31 08:37:59'),
(8, 'Espumantes', '2017-03-31 08:37:59', '2017-03-31 08:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `categoria_cliente`
--

DROP TABLE IF EXISTS `categoria_cliente`;
CREATE TABLE IF NOT EXISTS `categoria_cliente` (
  `cliente_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `categoria_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cliente_id`,`categoria_id`),
  KEY `categoria_cliente_categoria_id_foreign` (`categoria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion_cliente` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `canal_id` int(10) UNSIGNED NOT NULL,
  `subcanal_id` int(10) UNSIGNED NOT NULL,
  `tipo_id` int(10) UNSIGNED NOT NULL,
  `key_account` int(10) UNSIGNED NOT NULL,
  `vendedor` int(10) UNSIGNED NOT NULL,
  `contacto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cliente_canal_id_index` (`canal_id`),
  KEY `cliente_subcanal_id_index` (`subcanal_id`),
  KEY `cliente_tipo_id_index` (`tipo_id`),
  KEY `cliente_key_account_index` (`key_account`),
  KEY `cliente_vendedor_index` (`vendedor`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id`, `codigo`, `descripcion_cliente`, `canal_id`, `subcanal_id`, `tipo_id`, `key_account`, `vendedor`, `contacto`, `tel1`, `tel2`, `email`, `direccion`, `created_at`, `updated_at`) VALUES
(1, 'C04913', 'Hotel Las Americas', 2, 1, 1, 2, 2, 'Nahum', '61187884', NULL, NULL, 'Entrada a Marbella - Inicios de la balboa. Edif. Dorado', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(2, 'C00141', 'Decapolis', 2, 1, 1, 2, 2, 'Danilo Galarza', '6997395', NULL, NULL, 'Ave. Balboa', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(3, 'C04594', 'Hotel Hilton', 2, 1, 1, 2, 2, 'Pedro Alvarez - Director AB', '62059968', NULL, NULL, 'Ave. Balboa', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(4, 'C02107', 'Las Clementinas', 2, 2, 2, 2, 2, 'Esperanza', '62037926', NULL, NULL, 'Casco Antiguo', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(5, 'C00240', 'Años Locos', 2, 2, 2, 2, 2, 'Maria Helena', '69795936', NULL, NULL, 'San Fransisco', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(6, 'C04704', 'Bambu', 2, 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'C04851', 'Dr. Limón', 2, 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'C02018', 'Patagonia', 2, 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'C00240', 'Años Locos', 2, 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'C02131', 'Azafran', 2, 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'C04237', 'A Mano', 2, 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'C00288', 'Bodegon', 2, 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'C00724', 'ZK', 2, 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Co4665', 'Cabana', 2, 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Co4665', 'Chin Chin', 2, 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Co4281', 'Cbp', 2, 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, 'Central', 2, 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'co4902', 'Casa Casco', 2, 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, 'Pastissima', 2, 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'c04866', 'CascoMar', 2, 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, 'Milano', 2, 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'co4902', 'Casa Blanca', 2, 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'c00309', 'Las Bovedas', 2, 2, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cliente_subcategoria`
--

DROP TABLE IF EXISTS `cliente_subcategoria`;
CREATE TABLE IF NOT EXISTS `cliente_subcategoria` (
  `cliente_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `subcategoria_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cliente_id`,`subcategoria_id`),
  KEY `cliente_subcategoria_subcategoria_id_foreign` (`subcategoria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cliente_subtipostore`
--

DROP TABLE IF EXISTS `cliente_subtipostore`;
CREATE TABLE IF NOT EXISTS `cliente_subtipostore` (
  `cliente_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `subtipostore_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cliente_id`,`subtipostore_id`),
  KEY `cliente_subtipostore_subtipostore_id_foreign` (`subtipostore_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cliente_tipostore`
--

DROP TABLE IF EXISTS `cliente_tipostore`;
CREATE TABLE IF NOT EXISTS `cliente_tipostore` (
  `cliente_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `tipostore_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cliente_id`,`tipostore_id`),
  KEY `cliente_tipostore_tipostore_id_foreign` (`tipostore_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `colaborador`
--

DROP TABLE IF EXISTS `colaborador`;
CREATE TABLE IF NOT EXISTS `colaborador` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cedula_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `colaborador`
--

INSERT INTO `colaborador` (`id`, `nombre`, `cedula_id`, `telefono`, `email`, `created_at`, `updated_at`) VALUES
(2, 'Emmanuel Morales', '8-456-654', '6523-6665', 'emma@iapanama.com', '2017-03-31 11:48:46', '2017-03-31 11:48:46');

-- --------------------------------------------------------

--
-- Table structure for table `competencia_marca`
--

DROP TABLE IF EXISTS `competencia_marca`;
CREATE TABLE IF NOT EXISTS `competencia_marca` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `categoria_id` int(10) UNSIGNED NOT NULL,
  `descripcion_producto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `competencia_marca_categoria_id_foreign` (`categoria_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `competencia_marca`
--

INSERT INTO `competencia_marca` (`id`, `categoria_id`, `descripcion_producto`, `precio`, `created_at`, `updated_at`) VALUES
(1, 4, 'Vino Competencia 1', '12.95', NULL, NULL),
(2, 4, 'Vino Competencia 2', '16.95', NULL, NULL),
(3, 4, 'Vino Competencia 3', '18.95', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `marca`
--

DROP TABLE IF EXISTS `marca`;
CREATE TABLE IF NOT EXISTS `marca` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `categoria_id` int(10) UNSIGNED NOT NULL,
  `pais_id` int(10) UNSIGNED NOT NULL,
  `descripcion_marca` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `marca_categoria_id_foreign` (`categoria_id`),
  KEY `marca_pais_id_foreign` (`pais_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `marca`
--

INSERT INTO `marca` (`id`, `categoria_id`, `pais_id`, `descripcion_marca`, `created_at`, `updated_at`) VALUES
(1, 4, 64, 'Campo Viejo', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(2, 4, 41, 'Cousiño Macul', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(3, 4, 71, 'Cruse', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(4, 4, 12, 'Doña Paula', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(5, 5, 61, 'Brewdog', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(6, 5, 3, 'Flensburger', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(7, 5, 18, 'Van Honsebrouck', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(8, 4, 64, 'Emilio Moro', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(9, 1, 61, 'BALLANTINE S', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(10, 1, 61, 'Chivas Regal', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(11, 1, 61, 'GLENLIVET', NULL, NULL),
(12, 1, 61, 'JAMESON', NULL, NULL),
(13, 1, 61, 'KING OF QUEENS', NULL, NULL),
(14, 1, 61, 'PASSPORT', NULL, NULL),
(15, 1, 61, 'SOMETHING SPECIAL', NULL, NULL),
(16, 1, 61, 'JIM BEAN', NULL, NULL),
(17, 3, 188, 'BARCELO', NULL, NULL),
(18, 3, 82, 'BOTRAN', NULL, NULL),
(19, 3, 54, 'HAVANA CLUB', NULL, NULL),
(20, 3, 82, 'ZACAPA', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `materialpop`
--

DROP TABLE IF EXISTS `materialpop`;
CREATE TABLE IF NOT EXISTS `materialpop` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descripcion_material_pop` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `materialpop`
--

INSERT INTO `materialpop` (`id`, `descripcion_material_pop`, `created_at`, `updated_at`) VALUES
(1, 'Hablador', NULL, NULL),
(2, 'Shelf Strip', NULL, NULL),
(3, 'Traffic Stopper', NULL, NULL),
(4, 'Collarin', NULL, NULL),
(5, 'Leeflets', NULL, NULL),
(6, 'Colgantes', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_04_27_144542_create_acciones_table', 1),
(4, '2016_04_27_150238_create_accion_usuario_pivot_table', 1),
(7, '2017_03_20_173427_create_canal_table', 2),
(8, '2017_03_20_173737_create_subcanal_table', 2),
(9, '2017_03_20_174509_create_colaborador_table', 3),
(10, '2017_03_22_045604_create_categoria_table', 3),
(11, '2017_03_22_045627_create_subcategoria_table', 3),
(12, '2017_03_22_050930_create_tipostore_table', 4),
(13, '2017_03_22_050941_create_subtipostore_table', 4),
(22, '2017_03_22_051307_create_cliente_table', 5),
(23, '2017_03_22_054454_create_cliente_tipostore_table', 6),
(24, '2017_03_22_054510_create_cliente_subtipostore_table', 6),
(25, '2017_03_22_060408_create_categoria_cliente_table', 7),
(26, '2017_03_22_060431_create_cliente_subcategoria_table', 7),
(28, '2017_04_05_144218_create_actividad_table', 8),
(29, '2017_04_08_035023_create_pais_table', 9),
(32, '2017_04_09_034515_create_marca_table', 10),
(33, '2017_04_09_035438_create_submarca_table', 11),
(34, '2017_04_10_153107_create_competencia_marca_table', 12),
(35, '2017_04_10_165711_create_materialpop_table', 13),
(36, '2017_04_10_171440_create_punto_conexion_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `pais`
--

DROP TABLE IF EXISTS `pais`;
CREATE TABLE IF NOT EXISTS `pais` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descripcion_pais` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pais`
--

INSERT INTO `pais` (`id`, `descripcion_pais`, `created_at`, `updated_at`) VALUES
(1, 'Afganistán', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(2, 'Albania', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(3, 'Alemania', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(4, 'Algeria', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(5, 'Andorra', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(6, 'Angola', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(7, 'Anguila', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(8, 'Antártida', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(9, 'Antigua y Barbuda', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(10, 'Antillas Neerlandesas', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(11, 'Arabia Saudita', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(12, 'Argentina', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(13, 'Armenia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(14, 'Aruba', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(15, 'Australia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(16, 'Austria', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(17, 'Azerbayán', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(18, 'Bélgica', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(19, 'Bahamas', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(20, 'Bahrein', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(21, 'Bangladesh', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(22, 'Barbados', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(23, 'Belice', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(24, 'Benín', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(25, 'Bhután', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(26, 'Bielorrusia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(27, 'Birmania', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(28, 'Bolivia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(29, 'Bosnia y Herzegovina', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(30, 'Botsuana', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(31, 'Brasil', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(32, 'Brunéi', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(33, 'Bulgaria', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(34, 'Burkina Faso', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(35, 'Burundi', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(36, 'Cabo Verde', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(37, 'Camboya', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(38, 'Camerún', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(39, 'Canadá', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(40, 'Chad', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(41, 'Chile', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(42, 'China', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(43, 'Chipre', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(44, 'Ciudad del Vaticano', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(45, 'Colombia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(46, 'Comoras', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(47, 'Congo', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(48, 'Congo', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(49, 'Corea del Norte', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(50, 'Corea del Sur', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(51, 'Costa de Marfil', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(52, 'Costa Rica', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(53, 'Croacia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(54, 'Cuba', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(55, 'Dinamarca', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(56, 'Dominica', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(57, 'Ecuador', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(58, 'Egipto', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(59, 'El Salvador', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(60, 'Emiratos Árabes Unidos', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(61, 'Escocia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(62, 'Eslovaquia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(63, 'Eslovenia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(64, 'España', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(65, 'Estados Unidos de América', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(66, 'Estonia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(67, 'Etiopía', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(68, 'Filipinas', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(69, 'Finlandia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(70, 'Fiyi', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(71, 'Francia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(72, 'Gabón', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(73, 'Gambia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(74, 'Georgia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(75, 'Ghana', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(76, 'Gibraltar', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(77, 'Granada', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(78, 'Grecia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(79, 'Groenlandia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(80, 'Guadalupe', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(81, 'Guam', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(82, 'Guatemala', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(83, 'Guayana Francesa', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(84, 'Guernsey', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(85, 'Guinea', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(86, 'Guinea Ecuatorial', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(87, 'Guinea-Bissau', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(88, 'Guyana', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(89, 'Haití', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(90, 'Honduras', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(91, 'Hong kong', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(92, 'Hungría', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(93, 'India', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(94, 'Indonesia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(95, 'Irán', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(96, 'Irak', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(97, 'Irlanda', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(98, 'Isla Bouvet', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(99, 'Isla de Man', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(100, 'Isla de Navidad', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(101, 'Isla Norfolk', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(102, 'Islandia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(103, 'Islas Bermudas', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(104, 'Islas Caimán', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(105, 'Islas Cocos (Keeling)', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(106, 'Islas Cook', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(107, 'Islas de Åland', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(108, 'Islas Feroe', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(109, 'Islas Georgias del Sur y Sandwich del Sur', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(110, 'Islas Heard y McDonald', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(111, 'Islas Maldivas', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(112, 'Islas Malvinas', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(113, 'Islas Marianas del Norte', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(114, 'Islas Marshall', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(115, 'Islas Pitcairn', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(116, 'Islas Salomón', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(117, 'Islas Turcas y Caicos', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(118, 'Islas Ultramarinas Menores de Estados Unidos', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(119, 'Islas Vírgenes Británicas', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(120, 'Islas Vírgenes de los Estados Unidos', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(121, 'Israel', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(122, 'Italia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(123, 'Jamaica', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(124, 'Japón', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(125, 'Jersey', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(126, 'Jordania', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(127, 'Kazajistán', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(128, 'Kenia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(129, 'Kirgizstán', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(130, 'Kiribati', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(131, 'Kuwait', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(132, 'Líbano', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(133, 'Laos', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(134, 'Lesoto', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(135, 'Letonia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(136, 'Liberia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(137, 'Libia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(138, 'Liechtenstein', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(139, 'Lituania', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(140, 'Luxemburgo', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(141, 'México', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(142, 'Mnaco', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(143, 'Mónaco', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(144, 'Macedónia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(145, 'Madagascar', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(146, 'Malasia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(147, 'Malawi', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(148, 'Mali', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(149, 'Malta', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(150, 'Marruecos', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(151, 'Martinica', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(152, 'Mauricio', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(153, 'Mauritania', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(154, 'Mayotte', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(155, 'Micronesia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(156, 'Moldavia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(157, 'Mongolia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(158, 'Montenegro', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(159, 'Montserrat', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(160, 'Mozambique', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(161, 'Namibia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(162, 'Nauru', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(163, 'Nepal', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(164, 'Nicaragua', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(165, 'Niger', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(166, 'Nigeria', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(167, 'Niue', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(168, 'Noruega', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(169, 'Nueva Caledonia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(170, 'Nueva Zelanda', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(171, 'Omán', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(172, 'Países Bajos', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(173, 'Pakistán', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(174, 'Palau', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(175, 'Palestina', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(176, 'Panamá', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(177, 'Papúa Nueva Guinea', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(178, 'Paraguay', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(179, 'Perú', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(180, 'Polinesia Francesa', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(181, 'Polonia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(182, 'Portugal', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(183, 'Puerto Rico', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(184, 'Qatar', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(185, 'Reino Unido', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(186, 'República Centroafricana', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(187, 'República Checa', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(188, 'República Dominicana', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(189, 'Reunión', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(190, 'Ruanda', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(191, 'Rumanía', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(192, 'Rusia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(193, 'Sahara Occidental', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(194, 'Samoa', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(195, 'Samoa Americana', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(196, 'San Bartolomé', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(197, 'San Cristóbal y Nieves', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(198, 'San Marino', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(199, 'San Martín (Francia)', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(200, 'San Pedro y Miquelón', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(201, 'San Vicente y las Granadinas', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(202, 'Santa Elena', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(203, 'Santa Lucía', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(204, 'Santo Tomé y Príncipe', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(205, 'Senegal', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(206, 'Serbia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(207, 'Seychelles', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(208, 'Sierra Leona', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(209, 'Singapur', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(210, 'Siria', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(211, 'Somalia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(212, 'Sri lanka', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(213, 'Sudáfrica', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(214, 'Sudán', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(215, 'Suecia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(216, 'Suiza', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(217, 'Surinám', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(218, 'Svalbard y Jan Mayen', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(219, 'Swazilandia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(220, 'Tadjikistán', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(221, 'Tailandia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(222, 'Taiwán', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(223, 'Tanzania', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(224, 'Territorio Británico del Océano Índico', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(225, 'Territorios Australes y Antárticas Franceses', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(226, 'Timor Oriental', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(227, 'Togo', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(228, 'Tokelau', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(229, 'Tonga', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(230, 'Trinidad y Tobago', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(231, 'Tunez', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(232, 'Turkmenistán', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(233, 'Turquía', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(234, 'Tuvalu', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(235, 'Ucrania', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(236, 'Uganda', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(237, 'Uruguay', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(238, 'Uzbekistán', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(239, 'Vanuatu', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(240, 'Venezuela', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(241, 'Vietnam', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(242, 'Wallis y Futuna', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(243, 'Yemen', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(244, 'Yibuti', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(245, 'Zambia', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(246, 'Zimbabue', '2017-01-01 05:00:00', '2017-01-01 05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `punto_conexion`
--

DROP TABLE IF EXISTS `punto_conexion`;
CREATE TABLE IF NOT EXISTS `punto_conexion` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descripcion_punto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `punto_conexion`
--

INSERT INTO `punto_conexion` (`id`, `descripcion_punto`, `created_at`, `updated_at`) VALUES
(1, 'Isla', NULL, NULL),
(2, 'Cachete', NULL, NULL),
(3, 'Punta de Góndola', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcanal`
--

DROP TABLE IF EXISTS `subcanal`;
CREATE TABLE IF NOT EXISTS `subcanal` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descripcion_subcanal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `canal_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subcanal_canal_id_index` (`canal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subcanal`
--

INSERT INTO `subcanal` (`id`, `descripcion_subcanal`, `canal_id`, `created_at`, `updated_at`) VALUES
(1, 'Hoteles', 2, '2017-03-31 09:51:13', '2017-03-31 09:51:13'),
(2, 'Restaurantes', 2, '2017-03-31 09:52:50', '2017-03-31 09:52:50'),
(3, 'On No tradicional', 2, '2017-03-31 09:53:12', '2017-03-31 09:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `subcategoria`
--

DROP TABLE IF EXISTS `subcategoria`;
CREATE TABLE IF NOT EXISTS `subcategoria` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descripcion_subcategoria` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoria_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subcategoria_categoria_id_index` (`categoria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `submarca`
--

DROP TABLE IF EXISTS `submarca`;
CREATE TABLE IF NOT EXISTS `submarca` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `marca_id` int(10) UNSIGNED NOT NULL,
  `descripcion_submarca` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codigo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codigo_barra` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `submarca_marca_id_foreign` (`marca_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `submarca`
--

INSERT INTO `submarca` (`id`, `marca_id`, `descripcion_submarca`, `codigo`, `codigo_barra`, `precio`, `created_at`, `updated_at`) VALUES
(1, 1, 'CAMPO VIEJO CRIANZA TEMPRANILLO 12X750ML 13.5%', '01-01952', '852832106258', '8.56', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(2, 1, 'CAMPO VIEJO GRAN RESERVA 12X750ML 13.5%', '01-01954', '841030', '19.80', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(3, 1, 'CAMPO VIEJO GRAN RESERVA 6X750ML 13%-13.5%', '01-06760', '8410302107192', '19.80', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(4, 1, 'CAMPO VIEJO RESERVA 12X750ML 13%', '01-01953', '8410302107697', '19.80', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(5, 9, 'BALLANTINE\'S 17YO 12X750ML 43% NAKED R', '01-02122', '5010106110164', '65.00', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(6, 9, 'BALLANTINE\'S FINEST SCOTCH 12x750ml 40% NR', '01-00070', '5010106111451', '13.56', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(7, 9, 'BALLANTINE\'S WHISKY 12YO 12X750ML 40% N/R GB', '01-01458', '5010106113547', '21.25', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(8, 10, 'CHIVAS REGAL 12YO 12X 750ML 40%', '77-00078', '080432400395', '22.80', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(9, 10, 'CHIVAS REGAL 18 AÑOS 6X750ML 40%', '77-00757', '5000299225028', '55.20', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(10, 10, 'CHIVAS REGAL 21YO ROYAL SALUTE 6X700ML GB 40%', '01-00147', '5000299211243', '160.00', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(11, 11, 'GLENLIVET 15YO 6X750ML 40%', NULL, NULL, NULL, NULL, NULL),
(12, 11, 'GLENLIVET 18YO 6X750ML GB 43%', NULL, NULL, NULL, NULL, NULL),
(13, 11, 'GLENLIVET FOUNDERS RESERVE 80 12X750ML 40%', NULL, NULL, NULL, NULL, NULL),
(14, 12, 'JAMESON 12X750ML 40%', NULL, NULL, NULL, NULL, NULL),
(15, 13, 'KING OF QUEENS 12X1000ML 40% NRF', NULL, NULL, NULL, NULL, NULL),
(16, 14, 'PASSPORT SCOTCH 12x750ml 40% NR', NULL, NULL, NULL, NULL, NULL),
(17, 15, 'SOMETHING SPECIAL 12X750ML 40% NR GB', NULL, NULL, NULL, NULL, NULL),
(18, 15, 'SOMETHING SPECIAL 15YO 6X750ML NR GB 40%', NULL, NULL, NULL, NULL, NULL),
(19, 16, 'JIM BEAM BLACK BOURBON 12X750ML 43%', NULL, NULL, NULL, NULL, NULL),
(20, 16, 'JIM BEAM WHITE 4YO KENTUCKY STRAIGHT BOURBON 12X750ML 40%', NULL, NULL, NULL, NULL, NULL),
(21, 17, 'BARCELO AÑEJO 12X750ML 37.5%', NULL, NULL, NULL, NULL, NULL),
(22, 17, 'BARCELO BLANCO 12X750ML 37.5%', NULL, NULL, NULL, NULL, NULL),
(23, 17, 'BARCELO DORADO 12X750ML 37.5%', NULL, NULL, NULL, NULL, NULL),
(24, 17, 'BARCELO GRAN AÑEJO 12X750ML 37.5%', NULL, NULL, NULL, NULL, NULL),
(25, 17, 'BARCELO GRAN PLATINUM 12X750ML 37.5%', NULL, NULL, NULL, NULL, NULL),
(26, 17, 'BARCELO IMPERIAL 12X700ML 38%', NULL, NULL, NULL, NULL, NULL),
(27, 17, 'BARCELO IMPERIAL 12X750ML 38%', NULL, NULL, NULL, NULL, NULL),
(28, 18, 'BOTRAN 15 AÑOS RESERVA 6x750 ML 40%', NULL, NULL, NULL, NULL, NULL),
(29, 18, 'BOTRAN 5YO + 2 CUBATA COLA', NULL, NULL, NULL, NULL, NULL),
(30, 18, 'BOTRAN AÑEJO 12 AÑOS 12X750 ML 40%', NULL, NULL, NULL, NULL, NULL),
(31, 18, 'BOTRAN AÑEJO 12 AÑOS 24X375ML 40%', NULL, NULL, NULL, NULL, NULL),
(32, 18, 'BOTRAN AÑEJO 8 AÑOS 12X750ML 40%', NULL, NULL, NULL, NULL, NULL),
(33, 18, 'BOTRAN AÑEJO 8 AÑOS 24X375ML 40%', NULL, NULL, NULL, NULL, NULL),
(34, 18, 'BOTRAN ORO 5 AÑOS 12X750ML 40%', NULL, NULL, NULL, NULL, NULL),
(35, 19, 'HAVANA CLUB 3 AÑOS 12X750ML 40%', NULL, NULL, NULL, NULL, NULL),
(36, 19, 'HAVANA CLUB 7 ANOS 12X750ML 40%', NULL, NULL, NULL, NULL, NULL),
(37, 19, 'HAVANA CLUB AÑEJO BLANCO 12X750ML 40%', NULL, NULL, NULL, NULL, NULL),
(38, 19, 'HAVANA CLUB AÑEJO RESERVA 12X750 40%', NULL, NULL, NULL, NULL, NULL),
(39, 19, 'HAVANNA CLUB SELECCIÓN DE MAESTROS 6X700ML 45%', NULL, NULL, NULL, NULL, NULL),
(40, 20, 'RON ZACAPA CENTENARIO 23 YO 6X750ML 40%', NULL, NULL, NULL, NULL, NULL),
(41, 20, 'RON ZACAPA CENTENARIO XO 6X750ML 40%', NULL, NULL, NULL, NULL, NULL),
(42, 20, 'RON ZACAPA CENTENARIO XO 6X750ML 40%', NULL, NULL, NULL, NULL, NULL),
(43, 20, 'RON ZACAPA RESERVA LIMITADA 2015 6X750ML 45%', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subtipostore`
--

DROP TABLE IF EXISTS `subtipostore`;
CREATE TABLE IF NOT EXISTS `subtipostore` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descripcion_subtipo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subtipostore_tipostore_id_index` (`tipo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subtipostore`
--

INSERT INTO `subtipostore` (`id`, `descripcion_subtipo`, `tipo_id`, `created_at`, `updated_at`) VALUES
(1, 'Licores', 1, '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(2, 'Vinos', 1, '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(3, 'Cervezas', 1, '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(4, 'Espirituosos', 1, '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(5, 'Licores', 2, '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(6, 'Vinos', 2, '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(7, 'Cervezas', 2, '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(8, 'Espirituosos', 2, '2017-01-01 05:00:00', '2017-01-01 05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tipostore`
--

DROP TABLE IF EXISTS `tipostore`;
CREATE TABLE IF NOT EXISTS `tipostore` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descripcion_tipo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tipostore`
--

INSERT INTO `tipostore` (`id`, `descripcion_tipo`, `created_at`, `updated_at`) VALUES
(1, 'Gold', '2017-01-01 05:00:00', '2017-03-31 10:09:52'),
(2, 'Silver', '2017-01-01 05:00:00', '2017-03-31 10:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'jhondoe', 'aldoh@csipanama.com', '$2y$10$YpqZ7vQiUO8hTGe/0Xy/Huna.nBEvIoLrHHCO0K5VF8uS.AtfJmbC', 1, NULL, '2017-02-10 02:32:41', '2017-02-10 02:32:41'),
(2, 'Aldo Herrera', 'aldoh', 'aldoh@cableonda.net', '$2y$10$YpqZ7vQiUO8hTGe/0Xy/Huna.nBEvIoLrHHCO0K5VF8uS.AtfJmbC', 1, 'xU8e6fwpm97DiYzymkKnji8uH6Fx3Td5dDyaxicKvMyEPlztHwRy8e4vcO2n', '2017-03-15 21:30:25', '2017-03-31 12:37:51');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accion_usuario`
--
ALTER TABLE `accion_usuario`
  ADD CONSTRAINT `accion_usuario_accion_id_foreign` FOREIGN KEY (`accion_id`) REFERENCES `acciones` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `accion_usuario_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `actividad_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `actividad_colaborador_id_foreign` FOREIGN KEY (`colaborador_id`) REFERENCES `colaborador` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categoria_cliente`
--
ALTER TABLE `categoria_cliente`
  ADD CONSTRAINT `categoria_cliente_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `categoria_cliente_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_canal_id_foreign` FOREIGN KEY (`canal_id`) REFERENCES `canal` (`id`),
  ADD CONSTRAINT `cliente_key_account_foreign` FOREIGN KEY (`key_account`) REFERENCES `colaborador` (`id`),
  ADD CONSTRAINT `cliente_subcanal_id_foreign` FOREIGN KEY (`subcanal_id`) REFERENCES `subcanal` (`id`),
  ADD CONSTRAINT `cliente_tipo_id_foreign` FOREIGN KEY (`tipo_id`) REFERENCES `tipostore` (`id`),
  ADD CONSTRAINT `cliente_vendedor_foreign` FOREIGN KEY (`vendedor`) REFERENCES `colaborador` (`id`);

--
-- Constraints for table `cliente_subcategoria`
--
ALTER TABLE `cliente_subcategoria`
  ADD CONSTRAINT `cliente_subcategoria_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cliente_subcategoria_subcategoria_id_foreign` FOREIGN KEY (`subcategoria_id`) REFERENCES `subcategoria` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cliente_subtipostore`
--
ALTER TABLE `cliente_subtipostore`
  ADD CONSTRAINT `cliente_subtipostore_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cliente_subtipostore_subtipostore_id_foreign` FOREIGN KEY (`subtipostore_id`) REFERENCES `subtipostore` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cliente_tipostore`
--
ALTER TABLE `cliente_tipostore`
  ADD CONSTRAINT `cliente_tipostore_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cliente_tipostore_tipostore_id_foreign` FOREIGN KEY (`tipostore_id`) REFERENCES `tipostore` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `competencia_marca`
--
ALTER TABLE `competencia_marca`
  ADD CONSTRAINT `competencia_marca_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `marca`
--
ALTER TABLE `marca`
  ADD CONSTRAINT `marca_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `marca_pais_id_foreign` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcanal`
--
ALTER TABLE `subcanal`
  ADD CONSTRAINT `subcanal_canal_id_foreign` FOREIGN KEY (`canal_id`) REFERENCES `canal` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `subcategoria_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `submarca`
--
ALTER TABLE `submarca`
  ADD CONSTRAINT `submarca_marca_id_foreign` FOREIGN KEY (`marca_id`) REFERENCES `marca` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subtipostore`
--
ALTER TABLE `subtipostore`
  ADD CONSTRAINT `subtipostore_tipostore_id_foreign` FOREIGN KEY (`tipo_id`) REFERENCES `tipostore` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
