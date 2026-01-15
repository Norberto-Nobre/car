-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/01/2026 às 13:40
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `chana`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` bigint(20) UNSIGNED NOT NULL,
  `pickup_office_id` varchar(50) DEFAULT NULL,
  `return_office_id` bigint(20) UNSIGNED NOT NULL,
  `province_id` bigint(20) UNSIGNED DEFAULT NULL,
  `dias_province` int(11) NOT NULL DEFAULT 0,
  `booking_code` varchar(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `subtotal_amount` decimal(10,2) DEFAULT 0.00,
  `discount_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `total_amount` decimal(10,2) NOT NULL,
  `daily_rate` decimal(10,2) NOT NULL,
  `days` int(11) NOT NULL,
  `status` enum('pendente','aprovado','cancelado','expirado') NOT NULL DEFAULT 'pendente',
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `bookings`
--

INSERT INTO `bookings` (`id`, `customer_id`, `vehicle_id`, `pickup_office_id`, `return_office_id`, `province_id`, `dias_province`, `booking_code`, `start_date`, `end_date`, `subtotal_amount`, `discount_amount`, `total_amount`, `daily_rate`, `days`, `status`, `notes`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 8, '1', 2, 2, 5, 'RC20252327', '2025-11-05 08:00:00', '2025-11-10 08:00:00', 0.00, 0.00, 2065000.00, 228000.00, 5, 'pendente', NULL, '2025-11-05 16:30:33', '2025-11-05 16:30:33', NULL),
(2, 2, 4, '1', 1, NULL, 1, 'RC20258202', '2025-11-06 12:00:00', '2025-11-10 12:00:00', 0.00, 0.00, 473600.00, 68400.00, 4, 'pendente', NULL, '2025-11-06 08:19:32', '2025-11-06 08:19:32', NULL),
(3, 3, 2, '1', 2, NULL, 1, 'RC20254334', '2025-11-06 08:00:00', '2025-11-10 08:00:00', 0.00, 0.00, 806000.00, 114000.00, 4, 'pendente', NULL, '2025-11-06 08:19:57', '2025-11-06 08:19:57', NULL),
(4, 4, 8, '1', 2, 2, 1, 'RC20258419', '2025-11-06 08:00:00', '2025-11-07 08:00:00', 0.00, 0.00, 1013000.00, 228000.00, 1, 'pendente', NULL, '2025-11-06 08:55:18', '2025-11-06 08:55:18', NULL),
(5, 5, 12, 'patriota office', 2, NULL, 1, 'RC20258498', '2025-11-07 10:00:00', '2025-11-08 10:00:00', 0.00, 0.00, 462600.00, 102600.00, 1, 'pendente', NULL, '2025-11-06 23:06:05', '2025-11-06 23:06:05', NULL),
(6, 6, 6, '1', 1, 7, 2, 'RC20250854', '2025-12-05 00:00:00', '2025-12-09 00:00:00', 0.00, 0.00, 1081400.00, 136800.00, 4, 'pendente', NULL, '2025-11-17 17:01:25', '2025-11-17 17:01:25', NULL),
(7, 7, 4, '2', 2, NULL, 1, 'RC20259825', '2025-11-28 12:00:00', '2025-12-01 12:00:00', 0.00, 0.00, 405200.00, 68400.00, 3, 'pendente', NULL, '2025-11-28 09:14:45', '2025-11-28 09:14:45', NULL),
(8, 8, 12, '1', 1, NULL, 1, 'RC20250291', '2025-12-13 08:00:00', '2025-12-14 08:00:00', 0.00, 0.00, 452600.00, 102600.00, 1, 'pendente', NULL, '2025-12-03 14:05:35', '2025-12-03 14:05:35', NULL),
(9, 9, 4, 'Aeroporto Agostinho neto', 2, NULL, 1, 'RC20258483', '2026-04-10 08:00:00', '2026-04-25 08:00:00', 0.00, 0.00, 1236000.00, 68400.00, 15, 'pendente', NULL, '2025-12-05 00:06:08', '2025-12-05 00:06:08', NULL),
(10, 10, 9, 'Aeroporto internacional', 2, NULL, 1, 'RC20258412', '2025-12-24 09:00:00', '2025-12-29 08:00:00', 0.00, 0.00, 438000.00, 45600.00, 5, 'pendente', NULL, '2025-12-06 09:16:44', '2025-12-06 09:16:44', NULL),
(11, 11, 9, '1', 1, NULL, 1, 'RC20251121', '2025-12-31 10:00:00', '2026-01-02 10:00:00', 0.00, 0.00, 291200.00, 45600.00, 2, 'pendente', NULL, '2025-12-08 19:45:44', '2025-12-08 19:45:44', NULL),
(12, 12, 10, '2', 2, NULL, 1, 'RC20250363', '2026-02-13 20:00:00', '2026-02-16 18:00:00', 0.00, 0.00, 405200.00, 68400.00, 3, 'pendente', NULL, '2025-12-12 10:13:15', '2025-12-12 10:13:15', NULL),
(13, 13, 2, '1', 1, 11, 1, 'RC20254208', '2025-12-16 08:00:00', '2025-12-17 08:00:00', 0.00, 0.00, 489650.00, 114000.00, 1, 'pendente', NULL, '2025-12-16 13:09:47', '2025-12-16 13:09:47', NULL),
(14, 14, 2, '1', 1, 11, 1, 'RC20258121', '2025-12-16 08:00:00', '2025-12-17 08:00:00', 0.00, 0.00, 489650.00, 114000.00, 1, 'pendente', NULL, '2025-12-16 13:15:16', '2025-12-16 13:15:16', NULL),
(15, 15, 5, '1', 2, 3, 2, 'RC20256574', '2025-12-16 08:00:00', '2025-12-19 08:00:00', 0.00, 0.00, 972350.00, 199500.00, 3, 'pendente', NULL, '2025-12-16 13:19:22', '2025-12-16 13:19:22', NULL),
(16, 16, 4, 'Cazenga, distrito 11 de Novembro', 2, NULL, 1, 'RC20258225', '2025-12-17 08:00:00', '2025-12-19 08:00:00', 0.00, 0.00, 371800.00, 68400.00, 2, 'pendente', NULL, '2025-12-16 14:59:09', '2025-12-16 14:59:09', NULL),
(17, 17, 8, 'Cazenga, distrito 11 de Novembro', 2, 2, 2, 'RC20263847', '2026-01-05 08:00:00', '2026-01-10 08:00:00', 0.00, 0.00, 1998900.00, 228000.00, 5, 'aprovado', NULL, '2026-01-05 12:25:49', '2026-01-05 12:39:55', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `booking_contracts`
--

CREATE TABLE `booking_contracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `contract_number` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `terms_conditions` longtext DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `brands`
--

INSERT INTO `brands` (`id`, `name`, `logo`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Baic', '01K9A4CXBQMMQ067AD90702EW0.png', 1, '2025-11-05 13:48:15', '2025-11-05 13:48:15', NULL),
(2, 'BMW', '01K9A4DVECSS3MGA9XPEY308ZW.png', 1, '2025-11-05 13:48:45', '2025-11-05 13:48:45', NULL),
(3, 'Changan', '01K9A4EHD4PMHSVW82E09CP5DX.png', 1, '2025-11-05 13:49:08', '2025-11-05 13:49:08', NULL),
(4, 'Foday', '01K9A4F610PM13PS9V3X14N8KV.png', 1, '2025-11-05 13:49:29', '2025-11-05 13:49:29', NULL),
(5, 'Geely', '01K9A4G1ZVMTQSN90HQ3EV2N4Z.png', 1, '2025-11-05 13:49:58', '2025-11-05 13:49:58', NULL),
(6, 'Hyundai', '01K9A4GXXNRTH5QXFFRCJ5AH2T.png', 1, '2025-11-05 13:50:26', '2025-11-05 13:50:26', NULL),
(7, 'Jetour', '01K9A4HNEYF1PE1JGS2ZK8ZVBP.png', 1, '2025-11-05 13:50:50', '2025-11-05 13:50:50', NULL),
(8, 'Mazda', '01K9A4J9WZ8AZ69VXJ439PPZ8H.png', 1, '2025-11-05 13:51:11', '2025-11-05 13:51:11', NULL),
(9, 'Nissan', '01K9A4K1BG8KXPBV14RJ1TTP5D.png', 1, '2025-11-05 13:51:35', '2025-11-05 13:51:35', NULL),
(10, 'Suzuki', '01K9A4KP6QFBSMBEBNX2QV18CQ.png', 1, '2025-11-05 13:51:57', '2025-11-05 13:51:57', NULL),
(11, 'Toyota', '01K9A4MKQZX85S5JBFFYN85XBE.png', 1, '2025-11-05 13:52:27', '2025-11-05 13:52:27', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('chana-renta-car-cache-livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1767615777),
('chana-renta-car-cache-livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1767615777;', 1767615777),
('chanarentacar-cache-1b6453892473a467d07372d45eb05abc2031647a', 'i:1;', 1762354555),
('chanarentacar-cache-1b6453892473a467d07372d45eb05abc2031647a:timer', 'i:1762354555;', 1762354555),
('chanarentacar-cache-livewire-rate-limiter:975c6cc6d2e7b3c6d3ab433fddc2a586ad3e2675', 'i:1;', 1762438810),
('chanarentacar-cache-livewire-rate-limiter:975c6cc6d2e7b3c6d3ab433fddc2a586ad3e2675:timer', 'i:1762438810;', 1762438810);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `provincial` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `is_active`, `provincial`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'SUV Premium', 'Desciçao', 1, 1, '2025-11-05 14:00:23', '2025-11-05 14:00:23', NULL),
(2, 'Pickup', NULL, 1, 1, '2025-11-05 14:00:37', '2025-11-05 14:00:37', NULL),
(3, 'Van ', NULL, 1, 1, '2025-11-05 14:00:51', '2025-11-05 14:00:51', NULL),
(4, 'SUV Intermédio', NULL, 1, 1, '2025-11-05 14:01:04', '2025-11-05 14:01:04', NULL),
(5, 'SUV', NULL, 1, 0, '2025-11-05 14:01:18', '2025-11-05 14:01:18', NULL),
(6, 'Mini Van', NULL, 1, 1, '2025-11-05 14:02:22', '2025-11-06 07:54:42', NULL),
(7, 'Intermedio Básico', NULL, 1, 0, '2025-11-05 14:02:41', '2025-11-05 14:02:41', NULL),
(8, 'Intermedio Premium', NULL, 1, 1, '2025-11-05 14:03:01', '2025-11-05 14:03:01', NULL),
(9, 'SUV executivo', NULL, 1, 1, '2025-11-05 14:22:55', '2025-11-05 14:22:55', NULL),
(10, 'SUV básico', NULL, 1, 0, '2025-11-05 14:28:55', '2025-11-05 14:28:55', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `color_vehicle_model`
--

CREATE TABLE `color_vehicle_model` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_model_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` enum('masculino','femenino') DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `gender`, `email_verified_at`, `password`, `phone`, `address`, `date_of_birth`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Eurico Domingos', 'eurico.domingos@kumbalemba.com', 'masculino', NULL, 'default', '+244929372512', 'Rua comandante Stona, n, 161, Alvalade, Mainga-Luanda', '2000-12-12', NULL, '2025-11-05 16:30:32', '2025-11-05 16:30:32', NULL),
(2, 'edurada', 'eduarda.alves@orgchana.com', 'femenino', NULL, 'default', '+244929372512', 'via doreita do patriota Dentro da BMW', '1994-04-12', NULL, '2025-11-06 08:19:32', '2025-11-06 08:19:32', NULL),
(3, 'Eurico Domingos', 'eurico.domingos@kumbalemba.com', 'femenino', NULL, 'default', '+244929372512', 'Rua comandante Stona, n, 161, Alvalade, Mainga-Luanda', '2000-12-12', NULL, '2025-11-06 08:19:57', '2025-11-06 08:19:57', NULL),
(4, 'Eurico Domingos', 'eurico.domingos@kumbalemba.com', 'masculino', NULL, 'default', '+244928507013', 'Rua comandante Stona, n, 161, Alvalade, Mainga-Luanda', '2000-12-12', NULL, '2025-11-06 08:55:18', '2025-11-06 08:55:18', NULL),
(5, 'Vasco Chiteculo', 'vasco.sassu@yahoo.com.br', 'masculino', NULL, 'default', '+925662706', 'Huambo', '1987-03-05', NULL, '2025-11-06 23:06:05', '2025-11-06 23:06:05', NULL),
(6, 'Mario Jose Silva Romao', 'mario.j.s.romao@gmail.com', 'masculino', NULL, 'default', '+244934466335', 'Condominio Rosalinda, Talatona', '1968-11-26', NULL, '2025-11-17 17:01:25', '2025-11-17 17:01:25', NULL),
(7, 'Eduardo Degollada', 'edegollada@hotmail.com', 'masculino', NULL, 'default', '+34630038829', NULL, '1966-05-22', NULL, '2025-11-28 09:14:45', '2025-11-28 09:14:45', NULL),
(8, 'wagner bulica', 'wagnerbulica@gmail.com', 'masculino', NULL, 'default', '+244923312832', 'Patriota', '1977-02-02', NULL, '2025-12-03 14:05:34', '2025-12-03 14:05:34', NULL),
(9, 'Baptista César carneiro', 'baptistacarneiro640@gmail.com', 'masculino', NULL, 'default', '+351964461677', 'Patriota', '1991-06-04', NULL, '2025-12-05 00:06:07', '2025-12-05 00:06:07', NULL),
(10, 'Maiquel Leandro Ribeiro Cardoso', 'maiquel.cardoso13@gmail.com', 'masculino', NULL, 'default', '+351933233848', 'Rua Carlos Seixas número 12', '1983-04-13', NULL, '2025-12-06 09:16:44', '2025-12-06 09:16:44', NULL),
(11, 'MB SOLUÇÕES DIGITAIS LDA', 'januario@multibrand.ao', 'masculino', NULL, 'default', '+244927170506', 'Av. Talatona, condomínio belas business park, edificio cuanza sul, 6º', '1996-05-16', NULL, '2025-12-08 19:45:44', '2025-12-08 19:45:44', NULL),
(12, 'Maria Odete Gloria', 'otripa@hotmail.com', 'femenino', NULL, 'default', '+244934775538', 'Condomínio Imbondeiro Porta nº 6 1.1 - Talatona', '1965-08-06', NULL, '2025-12-12 10:13:15', '2025-12-12 10:13:15', NULL),
(13, 'Norberto', 'nb@gmail.com', 'masculino', NULL, 'default', '+244901234567', 'Monte pisga', '2000-12-12', NULL, '2025-12-16 13:09:47', '2025-12-16 13:09:47', NULL),
(14, 'Norberto', 'nb@gmail.com', 'masculino', NULL, 'default', '+901234567', 'Monte pisga', '2000-12-12', NULL, '2025-12-16 13:15:16', '2025-12-16 13:15:16', NULL),
(15, 'Norberto', 'nb@gmail.com', 'masculino', NULL, 'default', '+901234567', 'Monte pisga', '2000-12-12', NULL, '2025-12-16 13:19:22', '2025-12-16 13:19:22', NULL),
(16, 'Bella Lume', 'blume@gmail.com', 'masculino', NULL, 'default', '+244901234567', 'Monte pisga', '2000-12-12', NULL, '2025-12-16 14:59:09', '2025-12-16 14:59:09', NULL),
(17, 'Norberto', 'nb@gmail.com', 'masculino', NULL, 'default', '+244901234567', 'Monte', '2000-12-12', NULL, '2026-01-05 12:25:49', '2026-01-05 12:25:49', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `offices`
--

CREATE TABLE `offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `offices`
--

INSERT INTO `offices` (`id`, `name`, `address`, `city`, `phone`, `email`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Patriota Office', 'Benfica patriota', 'Luanda', '923482877', 'rent@orgchana.com', 1, '2025-11-05 14:05:46', '2025-11-05 14:05:46', NULL),
(2, 'Aeroporto Office', 'Aeroporto de Luanda', 'Luanda', '946320021', 'rent@orgchana.com', 1, '2025-11-05 14:06:54', '2025-11-05 14:06:54', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `driver_tax` decimal(10,0) DEFAULT NULL,
  `refueling_tax` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `price`, `driver_tax`, `refueling_tax`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Benguela', 17100.00, 25650, 68400, '2025-11-05 14:08:37', '2025-12-16 11:18:27', NULL),
(2, 'Huambo', 17100.00, 25650, 114000, '2025-11-05 14:08:50', '2025-12-16 11:20:07', NULL),
(3, 'Bie', 17100.00, 25650, 114000, '2025-11-05 14:09:03', '2025-12-16 11:20:23', NULL),
(4, 'Huige', 17100.00, 25650, 57000, '2025-11-05 14:09:26', '2025-12-16 11:15:41', NULL),
(5, 'Cuanza Norte', 17100.00, 25650, 45600, '2025-11-06 14:23:17', '2025-12-16 11:13:15', NULL),
(6, 'Zaire', 17100.00, 25650, 57000, '2025-11-06 14:23:45', '2025-12-16 11:16:18', NULL),
(7, 'Malanje', 17100.00, 25650, 57000, '2025-11-06 14:25:47', '2025-12-16 11:16:57', NULL),
(8, 'Cuanza Sul', 17100.00, 25650, 57000, '2025-11-06 14:26:26', '2025-12-16 11:18:00', NULL),
(9, 'Namibe', 17100.00, 25650, 114200, '2025-11-06 14:28:13', '2025-12-16 11:19:05', NULL),
(10, 'Huila', 17100.00, 25650, 114000, '2025-11-06 14:28:45', '2025-12-16 11:19:33', NULL),
(11, 'Cunene', 25650.00, 25650, 136800, '2025-11-06 14:29:28', '2025-12-16 11:21:18', NULL),
(12, 'Lunda Norte', 25650.00, 25650, 148200, '2025-11-06 14:30:06', '2025-12-16 11:22:03', NULL),
(13, 'Lunda Sul', 25650.00, 25650, 148200, '2025-11-06 14:31:29', '2025-12-16 11:22:30', NULL),
(14, 'Moxico', 25650.00, 25650, 157000, '2025-11-06 14:31:48', '2025-12-16 11:23:20', NULL),
(15, 'Moxico Leste', 25650.00, 25650, 157000, '2025-11-06 14:32:24', '2025-12-16 11:23:42', NULL),
(16, 'Cubango', 25650.00, 25650, 157000, '2025-11-06 14:32:46', '2025-12-16 11:23:59', NULL),
(17, 'Cuando', 25650.00, 25650, 157000, '2025-11-06 14:33:02', '2025-12-16 11:24:19', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9HLLapOlU4fTnNmaD38PqRiXGlpJzwDEud5OsG6l', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiUHRxcHJyOXNoc0NxTzZZVGFFellmeVFrZFU3QXdIbjQ5WUsyWEIySCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wYW5lbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkSGFFbGZsUExuZExRbzkxTXg1Uy9oLjN0cFBWNjNQQk1OeXZOaWJsZ2F1UGVYdEhhZHpwdzIiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1767616829);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'admin', 'admin@gmail.com', NULL, '$2y$12$HaElflPLndLQo91Mx5S/h.3tpPV63PBMNyvNiblgauPeXtHadzpw2', NULL, '2025-10-20 15:45:11', '2025-10-20 15:45:11');

-- --------------------------------------------------------

--
-- Estrutura para tabela `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_model_id` bigint(20) UNSIGNED NOT NULL,
  `license_plate` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `damage_tax` decimal(10,0) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `notes` text DEFAULT NULL,
  `is_popular` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `vehicles`
--

INSERT INTO `vehicles` (`id`, `vehicle_model_id`, `license_plate`, `year`, `image`, `is_active`, `damage_tax`, `slug`, `notes`, `is_popular`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 'LDA-45-12-RV', 2020, NULL, 1, 20000, 'lda-45-12-rv-2020', 'Descricao do carro', 0, NULL, '2025-11-05 14:43:07', '2025-12-16 14:31:38'),
(2, 3, 'LDA-67-40-BJ', 2020, NULL, 1, 20000, 'lda-67-40-bj-2020', 'Descricao do carro', 1, NULL, '2025-11-05 14:43:50', '2025-12-16 14:32:08'),
(3, 6, 'LDA-34-40-CE', 2020, NULL, 1, 25000, 'lda-34-40-ce-2020', 'Descricao do carro', 0, NULL, '2025-11-05 14:45:00', '2025-12-16 14:32:31'),
(4, 8, 'LDA-45-12-GX', 2022, NULL, 1, 25000, 'lda-45-12-gx-2022', 'Descricao do carro', 0, NULL, '2025-11-05 14:46:03', '2025-12-16 14:32:55'),
(5, 12, 'LDA-34-76-HE', 2022, NULL, 1, 15000, 'lda-34-76-he-2022', 'Descricao do carro', 0, NULL, '2025-11-05 14:46:37', '2025-12-16 14:33:22'),
(6, 11, 'LDA-34-76-HX', 2022, NULL, 1, 15000, 'lda-34-76-hx-2022', 'Descricao do carro', 1, NULL, '2025-11-05 14:49:54', '2025-12-16 14:33:43'),
(7, 9, 'LDA-34-76-JY', 2010, NULL, 1, 12000, 'lda-34-76-jy-2010', 'Descricao do carro', 0, NULL, '2025-11-05 14:50:46', '2025-12-16 14:34:18'),
(8, 5, 'LDA-67-77-PO', 2019, NULL, 1, 12000, 'lda-67-77-po-2019', 'Descricao do carro', 1, NULL, '2025-11-05 14:51:32', '2025-12-16 14:34:39'),
(9, 10, 'LDA-34-76-SE', 2020, NULL, 1, 30000, 'lda-34-76-se-2020', 'Descricao do carro', 0, NULL, '2025-11-05 14:52:12', '2025-12-16 14:36:48'),
(10, 7, 'LDA-34-76-XT', 2020, NULL, 1, 30000, 'lda-34-76-xt-2020', 'Descricao do carro', 0, NULL, '2025-11-05 14:53:26', '2025-12-16 14:37:32'),
(11, 4, 'LDA-34-76-XB', 2021, NULL, 1, 35000, 'lda-34-76-xb-2021', 'Descricao do carro', 0, NULL, '2025-11-05 14:54:14', '2025-12-16 14:38:08'),
(12, 1, 'LDA-34-70-XQ', 2010, NULL, 1, 35000, 'lda-34-70-xq-2010', 'Descricao do carro', 1, NULL, '2025-11-05 14:55:04', '2025-12-16 14:38:33');

-- --------------------------------------------------------

--
-- Estrutura para tabela `vehicle_models`
--

CREATE TABLE `vehicle_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `caussion` decimal(10,2) NOT NULL,
  `fuel_type` enum('gasolina','gasoleo','electrico','hibrido') NOT NULL,
  `transmission` enum('manual','automatico') NOT NULL,
  `seats` int(11) DEFAULT NULL,
  `doors` int(11) DEFAULT NULL,
  `price_per_day` decimal(10,2) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `vehicle_models`
--

INSERT INTO `vehicle_models` (`id`, `brand_id`, `category_id`, `name`, `caussion`, `fuel_type`, `transmission`, `seats`, `doors`, `price_per_day`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 7, 4, 'X70', 350000.00, 'gasolina', 'automatico', 7, 5, 102600.00, 1, '2025-11-05 14:15:28', '2025-11-05 14:15:28', NULL),
(2, 11, 4, ' RAV4', 350000.00, 'gasolina', 'manual', 5, 5, 102600.00, 1, '2025-11-05 14:17:26', '2025-11-05 14:17:26', NULL),
(3, 1, 1, 'Bj40', 350000.00, 'gasolina', 'automatico', 5, 5, 114000.00, 1, '2025-11-05 14:19:07', '2025-11-05 14:19:07', NULL),
(4, 1, 1, 'X7', 350000.00, 'gasolina', 'automatico', 5, 5, 114000.00, 1, '2025-11-05 14:20:24', '2025-11-06 07:53:26', NULL),
(5, 11, 9, 'Prado TXL', 750000.00, 'gasolina', 'automatico', 7, 5, 228000.00, 1, '2025-11-05 14:24:59', '2025-11-06 07:54:21', NULL),
(6, 11, 3, 'Coaster', 200000.00, 'gasoleo', 'manual', 30, 3, 228000.00, 1, '2025-11-05 14:26:52', '2025-11-05 14:26:52', NULL),
(7, 1, 10, 'X3', 200000.00, 'gasolina', 'automatico', 5, 5, 68400.00, 1, '2025-11-05 14:30:53', '2025-11-05 14:30:53', NULL),
(8, 5, 10, 'Gx3', 200000.00, 'gasolina', 'automatico', 5, 5, 68400.00, 1, '2025-11-05 14:32:15', '2025-11-05 14:32:15', NULL),
(9, 10, 4, 'Jimny', 200000.00, 'gasolina', 'manual', 5, 3, 85500.00, 0, '2025-11-05 14:34:40', '2025-11-05 14:34:40', NULL),
(10, 11, 7, 'Starlet', 200000.00, 'gasolina', 'manual', 5, 5, 45600.00, 1, '2025-11-05 14:36:09', '2025-11-06 07:53:52', NULL),
(11, 11, 2, 'Hilux', 500000.00, 'gasolina', 'manual', 5, 4, 136800.00, 1, '2025-11-05 14:37:37', '2025-11-05 14:37:37', NULL),
(12, 11, 6, 'Hiace', 200000.00, 'gasolina', 'manual', 14, 4, 199500.00, 1, '2025-11-05 14:39:27', '2025-11-05 14:39:27', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bookings_booking_code_unique` (`booking_code`),
  ADD KEY `bookings_customer_id_foreign` (`customer_id`),
  ADD KEY `bookings_vehicle_id_foreign` (`vehicle_id`),
  ADD KEY `bookings_pickup_office_id_foreign` (`pickup_office_id`),
  ADD KEY `bookings_return_office_id_foreign` (`return_office_id`),
  ADD KEY `bookings_province_id_foreign` (`province_id`);

--
-- Índices de tabela `booking_contracts`
--
ALTER TABLE `booking_contracts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `booking_contracts_contract_number_unique` (`contract_number`),
  ADD KEY `booking_contracts_booking_id_foreign` (`booking_id`);

--
-- Índices de tabela `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Índices de tabela `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Índices de tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `color_vehicle_model`
--
ALTER TABLE `color_vehicle_model`
  ADD PRIMARY KEY (`id`),
  ADD KEY `color_vehicle_models_vehicle_model_id_foreign` (`vehicle_model_id`),
  ADD KEY `color_vehicle_models_color_id_foreign` (`color_id`);

--
-- Índices de tabela `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices de tabela `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Índices de tabela `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices de tabela `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices de tabela `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vehicles_license_plate_unique` (`license_plate`),
  ADD UNIQUE KEY `vehicles_slug_unique` (`slug`),
  ADD KEY `vehicles_vehicle_model_id_foreign` (`vehicle_model_id`);

--
-- Índices de tabela `vehicle_models`
--
ALTER TABLE `vehicle_models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicle_models_brand_id_foreign` (`brand_id`),
  ADD KEY `vehicle_models_category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `booking_contracts`
--
ALTER TABLE `booking_contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `color_vehicle_model`
--
ALTER TABLE `color_vehicle_model`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `vehicle_models`
--
ALTER TABLE `vehicle_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_return_office_id_foreign` FOREIGN KEY (`return_office_id`) REFERENCES `offices` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `booking_contracts`
--
ALTER TABLE `booking_contracts`
  ADD CONSTRAINT `booking_contracts_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `color_vehicle_model`
--
ALTER TABLE `color_vehicle_model`
  ADD CONSTRAINT `color_vehicle_models_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `color_vehicle_models_vehicle_model_id_foreign` FOREIGN KEY (`vehicle_model_id`) REFERENCES `vehicle_models` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_vehicle_model_id_foreign` FOREIGN KEY (`vehicle_model_id`) REFERENCES `vehicle_models` (`id`) ON DELETE CASCADE;

--
-- Restrições para tabelas `vehicle_models`
--
ALTER TABLE `vehicle_models`
  ADD CONSTRAINT `vehicle_models_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vehicle_models_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
