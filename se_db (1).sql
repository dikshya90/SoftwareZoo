-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 03:15 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `se_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `birds`
--

CREATE TABLE `birds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `given_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `life_span` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `habitat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `global_population` bigint(20) NOT NULL,
  `date_joined` date NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nest` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `clutch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wingspan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `can_fly` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `plumage_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `birds`
--

INSERT INTO `birds` (`id`, `name`, `category_id`, `given_name`, `dob`, `gender`, `life_span`, `diet`, `habitat`, `global_population`, `date_joined`, `height`, `weight`, `nest`, `clutch`, `wingspan`, `can_fly`, `plumage_color`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'd', 9, 'dd', '0202-02-12', 'Female', '20 days', 'Grains', 'fasd', 222, '2011-01-01', '2', '20', 'fdasf', '3', '2 inch', 'Yes', 'gray', '51832.jpg', 1, '2020-08-15 06:39:03', '2020-08-13 22:04:00', '2020-08-15 06:39:03'),
(3, 'dangre', 9, 'dangre', '2020-11-11', 'Male', '2 years', 'Grains', 'Jungle', 11000, '2020-11-11', '12', '12', 'leaves', '2', '2', 'Yes', 'brown', '25483.jpg', 1, '2020-08-15 06:15:44', '2020-08-14 06:27:52', '2020-08-15 06:15:44'),
(4, 'Flamingo', 9, 'Flam', '2019-09-12', 'Female', '55 years', 'Algae, crustaceans, brine shrimp, diatoms, and aquatic plants', 'The flamingo\'s most characteristic habitats are large alkaline or saline lakes or estuarine lagoons that usually lack vegetation. Lakes may be far inland or near the sea. A variety of habitats are used by flamingos: mangrove swamps, tidal flats, and sandy islands in the intertidal zone.', 200000, '2019-09-12', '2 m', '4 kg', 'Flamingos build nests that look like mounds of mud along waterways. At the top of the mound, in a shallow hole, the female lays one egg. The parents take turns sitting on the egg to keep it warm. After about 30 days, the egg hatches.', '1', '150', 'No', 'Orange, Pink, White', '12102.jpg', 1, NULL, '2020-08-15 06:11:04', '2020-08-15 06:53:37'),
(5, 'Humming Bird', 9, 'Humming', '2020-02-12', 'Female', '2 years', 'Nectar, Tree sap, Insects, Spiders', 'Rainforest and tropical jungles', 7000000, '2020-02-12', '20 cm', '2 g', 'Hummingbirds build velvety, compact cups with spongy floors and elastic sides that stretch as the young grow. \r\nThey weave together twigs, plant fibers, and bits of leaves, and use spider silk as threads to bind their nests together and anchor them to the foundation.', '2', '15  cm', 'Yes', 'Gray, Yellow', '74861.jpg', 1, NULL, '2020-08-15 06:27:36', '2020-08-15 06:38:30'),
(6, 'Hieraatus Spilogaster', 9, 'Eagle', '2019-04-12', 'Male', '30 years', 'Fish, Mammals, Reptiles', 'Open waters like rivers, lakes and coastal regions', 150000, '2019-08-19', '89 cm', '6 kg', 'Eagle nests are constructed with large sticks, and may be lined with moss, grass, plant stalks, lichens, seaweed, or sod. Bald eagles pick up broken sticks from the ground, and sometimes break branches off trees.', '4', '200 cm', 'Yes', 'Black, White, Grey', '55181.jpg', 1, NULL, '2020-08-15 06:36:36', '2020-08-15 06:36:36'),
(7, 'Passeridae', 9, 'Sparrow', '2019-03-03', 'Male', '5 - 7 years', 'Insects, Seeds, Berries', 'Countryside and woodland', 7000000, '2019-03-03', '17 cm', '39 gm', 'House Sparrows nest in holes of buildings and other structures such as streetlights, gas-station roofs, signs, and the overhanging fixtures that hold traffic lights. They sometimes build nests in vines climbing the walls of buildings.', '4', '19 cm', 'Yes', 'White, Black, Grey, Brown,  Yellow', '46707.jpg', 1, NULL, '2020-08-15 06:43:28', '2020-08-15 06:43:59'),
(8, 'Toucan', 9, 'Toucan Bird', '2017-06-12', 'Female', '12 - 20 years', 'Fruit, Eggs, Insects', 'Lowland rainforest and tropical forest borders', 10000, '2018-05-11', '59 cm', '650 gm', 'They make their nests in tree hollows and holes excavated by other animals such as woodpeckers—the toucan bill has very limited use as an excavation tool.', '3', '113 cm', 'Yes', 'White, Yellow, Orange, Black', '59883.jpg', 1, NULL, '2020-08-15 06:52:50', '2020-08-15 06:52:50'),
(9, 'Parrot', 9, 'Pattu', '2017-09-09', 'Female', '40 - 80 years', 'Fruit, Nuts, Seeds, Insects', 'Rainforests and tropical jungle', 11300, '2018-07-22', '79 cm', '500 gm', 'All other parrots and cockatoos nest in cavities, either tree hollows or cavities dug into cliffs, banks, or the ground. ... Many species use termite nests, possibly to reduce the conspicuousness of the nesting site or to create a favourable microclimate. In most cases, both parents participate in the nest excavation.', '2', '129 cm', 'Yes', 'Red, Green', '28153.jpg', 1, NULL, '2020-08-15 06:59:12', '2020-08-15 06:59:12'),
(10, 'Sparrow', 9, 'sparrow', '2020-01-21', 'Male', '3 months', 'Nectar, Tree sap, Insects, Spiders', 'Lives in jungle', 20000000, '2020-08-04', '15 cm', '20 gm', 'Constructs nest in leaves', '2', '10 cm', 'Yes', 'Gray, Black, Brown', '28266.jpg', 0, NULL, '2020-08-20 18:53:55', '2020-08-20 18:55:16');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `slug`, `name`, `created_at`, `updated_at`) VALUES
(8, 'mammal', 'Mammal', '2020-08-13 07:02:59', '2020-08-13 07:02:59'),
(9, 'bird', 'Bird', '2020-08-13 07:03:11', '2020-08-13 07:03:11'),
(10, 'fish', 'Fish', '2020-08-13 07:03:23', '2020-08-13 07:03:23'),
(11, 'reptiles-and-ambhibians', 'Reptiles and Ambhibians', '2020-08-13 07:03:43', '2020-08-13 07:03:43');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`, `created_at`, `updated_at`) VALUES
(1, 'US', 'United States', '2020-08-16 09:40:38', '2020-08-16 09:40:38'),
(2, 'US', 'United States', '2020-08-16 09:40:39', '2020-08-16 09:40:39'),
(3, 'CA', 'Canada', '2020-08-16 09:40:40', '2020-08-16 09:40:40'),
(4, 'AF', 'Afghanistan', '2020-08-16 09:40:40', '2020-08-16 09:40:40'),
(5, 'AL', 'Albania', '2020-08-16 09:40:41', '2020-08-16 09:40:41'),
(6, 'DZ', 'Algeria', '2020-08-16 09:40:42', '2020-08-16 09:40:42'),
(7, 'AS', 'American Samoa', '2020-08-16 09:40:42', '2020-08-16 09:40:42'),
(8, 'AD', 'Andorra', '2020-08-16 09:40:43', '2020-08-16 09:40:43'),
(9, 'AO', 'Angola', '2020-08-16 09:40:44', '2020-08-16 09:40:44'),
(10, 'AI', 'Anguilla', '2020-08-16 09:40:44', '2020-08-16 09:40:44'),
(11, 'AQ', 'Antarctica', '2020-08-16 09:40:44', '2020-08-16 09:40:44'),
(12, 'AG', 'Antigua and/or Barbuda', '2020-08-16 09:40:45', '2020-08-16 09:40:45'),
(13, 'AR', 'Argentina', '2020-08-16 09:40:46', '2020-08-16 09:40:46'),
(14, 'AM', 'Armenia', '2020-08-16 09:40:46', '2020-08-16 09:40:46'),
(15, 'AW', 'Aruba', '2020-08-16 09:40:46', '2020-08-16 09:40:46'),
(16, 'AU', 'Australia', '2020-08-16 09:40:47', '2020-08-16 09:40:47'),
(17, 'AT', 'Austria', '2020-08-16 09:40:47', '2020-08-16 09:40:47'),
(18, 'AZ', 'Azerbaijan', '2020-08-16 09:40:48', '2020-08-16 09:40:48'),
(19, 'BS', 'Bahamas', '2020-08-16 09:40:48', '2020-08-16 09:40:48'),
(20, 'BH', 'Bahrain', '2020-08-16 09:40:48', '2020-08-16 09:40:48'),
(21, 'BD', 'Bangladesh', '2020-08-16 09:40:48', '2020-08-16 09:40:48'),
(22, 'BB', 'Barbados', '2020-08-16 09:40:49', '2020-08-16 09:40:49'),
(23, 'BY', 'Belarus', '2020-08-16 09:40:49', '2020-08-16 09:40:49'),
(24, 'BE', 'Belgium', '2020-08-16 09:40:49', '2020-08-16 09:40:49'),
(25, 'BZ', 'Belize', '2020-08-16 09:40:49', '2020-08-16 09:40:49'),
(26, 'BJ', 'Benin', '2020-08-16 09:40:49', '2020-08-16 09:40:49'),
(27, 'BM', 'Bermuda', '2020-08-16 09:40:50', '2020-08-16 09:40:50'),
(28, 'BT', 'Bhutan', '2020-08-16 09:40:50', '2020-08-16 09:40:50'),
(29, 'BO', 'Bolivia', '2020-08-16 09:40:50', '2020-08-16 09:40:50'),
(30, 'BA', 'Bosnia and Herzegovina', '2020-08-16 09:40:50', '2020-08-16 09:40:50'),
(31, 'BW', 'Botswana', '2020-08-16 09:40:51', '2020-08-16 09:40:51'),
(32, 'BV', 'Bouvet Island', '2020-08-16 09:40:51', '2020-08-16 09:40:51'),
(33, 'BR', 'Brazil', '2020-08-16 09:40:52', '2020-08-16 09:40:52'),
(34, 'IO', 'British lndian Ocean Territory', '2020-08-16 09:40:52', '2020-08-16 09:40:52'),
(35, 'BN', 'Brunei Darussalam', '2020-08-16 09:40:53', '2020-08-16 09:40:53'),
(36, 'BG', 'Bulgaria', '2020-08-16 09:40:53', '2020-08-16 09:40:53'),
(37, 'BF', 'Burkina Faso', '2020-08-16 09:40:54', '2020-08-16 09:40:54'),
(38, 'BI', 'Burundi', '2020-08-16 09:40:54', '2020-08-16 09:40:54'),
(39, 'KH', 'Cambodia', '2020-08-16 09:40:54', '2020-08-16 09:40:54'),
(40, 'CM', 'Cameroon', '2020-08-16 09:40:55', '2020-08-16 09:40:55'),
(41, 'CV', 'Cape Verde', '2020-08-16 09:40:57', '2020-08-16 09:40:57'),
(42, 'KY', 'Cayman Islands', '2020-08-16 09:40:57', '2020-08-16 09:40:57'),
(43, 'CF', 'Central African Republic', '2020-08-16 09:40:58', '2020-08-16 09:40:58'),
(44, 'TD', 'Chad', '2020-08-16 09:40:59', '2020-08-16 09:40:59'),
(45, 'CL', 'Chile', '2020-08-16 09:40:59', '2020-08-16 09:40:59'),
(46, 'CN', 'China', '2020-08-16 09:41:00', '2020-08-16 09:41:00'),
(47, 'CX', 'Christmas Island', '2020-08-16 09:41:00', '2020-08-16 09:41:00'),
(48, 'CC', 'Cocos [Keeling] Islands', '2020-08-16 09:41:01', '2020-08-16 09:41:01'),
(49, 'CO', 'Colombia', '2020-08-16 09:41:01', '2020-08-16 09:41:01'),
(50, 'KM', 'Comoros', '2020-08-16 09:41:02', '2020-08-16 09:41:02'),
(51, 'CG', 'Congo', '2020-08-16 09:41:02', '2020-08-16 09:41:02'),
(52, 'CK', 'Cook Islands', '2020-08-16 09:41:02', '2020-08-16 09:41:02'),
(53, 'CR', 'Costa Rica', '2020-08-16 09:41:03', '2020-08-16 09:41:03'),
(54, 'HR', 'Croatia [Hrvatska]', '2020-08-16 09:41:03', '2020-08-16 09:41:03'),
(55, 'CU', 'Cuba', '2020-08-16 09:41:04', '2020-08-16 09:41:04'),
(56, 'CY', 'Cyprus', '2020-08-16 09:41:04', '2020-08-16 09:41:04'),
(57, 'CZ', 'Czech Republic', '2020-08-16 09:41:05', '2020-08-16 09:41:05'),
(58, 'CD', 'Democratic Republic of Congo', '2020-08-16 09:41:05', '2020-08-16 09:41:05'),
(59, 'DK', 'Denmark', '2020-08-16 09:41:06', '2020-08-16 09:41:06'),
(60, 'DJ', 'Djibouti', '2020-08-16 09:41:06', '2020-08-16 09:41:06'),
(61, 'DM', 'Dominica', '2020-08-16 09:41:07', '2020-08-16 09:41:07'),
(62, 'DO', 'Dominican Republic', '2020-08-16 09:41:08', '2020-08-16 09:41:08'),
(63, 'TP', 'East Timor', '2020-08-16 09:41:08', '2020-08-16 09:41:08'),
(64, 'EC', 'Ecudaor', '2020-08-16 09:41:09', '2020-08-16 09:41:09'),
(65, 'EG', 'Egypt', '2020-08-16 09:41:09', '2020-08-16 09:41:09'),
(66, 'SV', 'El Salvador', '2020-08-16 09:41:09', '2020-08-16 09:41:09'),
(67, 'GQ', 'Equatorial Guinea', '2020-08-16 09:41:10', '2020-08-16 09:41:10'),
(68, 'ER', 'Eritrea', '2020-08-16 09:41:10', '2020-08-16 09:41:10'),
(69, 'EE', 'Estonia', '2020-08-16 09:41:10', '2020-08-16 09:41:10'),
(70, 'ET', 'Ethiopia', '2020-08-16 09:41:11', '2020-08-16 09:41:11'),
(71, 'FK', 'Falkland Islands [Malvinas]', '2020-08-16 09:41:11', '2020-08-16 09:41:11'),
(72, 'FO', 'Faroe Islands', '2020-08-16 09:41:11', '2020-08-16 09:41:11'),
(73, 'FJ', 'Fiji', '2020-08-16 09:41:11', '2020-08-16 09:41:11'),
(74, 'FI', 'Finland', '2020-08-16 09:41:12', '2020-08-16 09:41:12'),
(75, 'FR', 'France', '2020-08-16 09:41:12', '2020-08-16 09:41:12'),
(76, 'FX', 'France, Metropolitan', '2020-08-16 09:41:12', '2020-08-16 09:41:12'),
(77, 'GF', 'French Guiana', '2020-08-16 09:41:12', '2020-08-16 09:41:12'),
(78, 'PF', 'French Polynesia', '2020-08-16 09:41:12', '2020-08-16 09:41:12'),
(79, 'TF', 'French Southern Territories', '2020-08-16 09:41:13', '2020-08-16 09:41:13'),
(80, 'GA', 'Gabon', '2020-08-16 09:41:13', '2020-08-16 09:41:13'),
(81, 'GM', 'Gambia', '2020-08-16 09:41:13', '2020-08-16 09:41:13'),
(82, 'GE', 'Georgia', '2020-08-16 09:41:13', '2020-08-16 09:41:13'),
(83, 'DE', 'Germany', '2020-08-16 09:41:13', '2020-08-16 09:41:13'),
(84, 'GH', 'Ghana', '2020-08-16 09:41:13', '2020-08-16 09:41:13'),
(85, 'GI', 'Gibraltar', '2020-08-16 09:41:13', '2020-08-16 09:41:13'),
(86, 'GR', 'Greece', '2020-08-16 09:41:14', '2020-08-16 09:41:14'),
(87, 'GL', 'Greenland', '2020-08-16 09:41:14', '2020-08-16 09:41:14'),
(88, 'GD', 'Grenada', '2020-08-16 09:41:15', '2020-08-16 09:41:15'),
(89, 'GP', 'Guadeloupe', '2020-08-16 09:41:15', '2020-08-16 09:41:15'),
(90, 'GU', 'Guam', '2020-08-16 09:41:16', '2020-08-16 09:41:16'),
(91, 'GT', 'Guatemala', '2020-08-16 09:41:16', '2020-08-16 09:41:16'),
(92, 'GN', 'Guinea', '2020-08-16 09:41:16', '2020-08-16 09:41:16'),
(93, 'GW', 'Guinea-Bissau', '2020-08-16 09:41:16', '2020-08-16 09:41:16'),
(94, 'GY', 'Guyana', '2020-08-16 09:41:16', '2020-08-16 09:41:16'),
(95, 'HT', 'Haiti', '2020-08-16 09:41:17', '2020-08-16 09:41:17'),
(96, 'HM', 'Heard and Mc Donald Islands', '2020-08-16 09:41:17', '2020-08-16 09:41:17'),
(97, 'HN', 'Honduras', '2020-08-16 09:41:17', '2020-08-16 09:41:17'),
(98, 'HK', 'Hong Kong', '2020-08-16 09:41:17', '2020-08-16 09:41:17'),
(99, 'HU', 'Hungary', '2020-08-16 09:41:17', '2020-08-16 09:41:17'),
(100, 'IS', 'Iceland', '2020-08-16 09:41:18', '2020-08-16 09:41:18'),
(101, 'IN', 'India', '2020-08-16 09:41:18', '2020-08-16 09:41:18'),
(102, 'ID', 'Indonesia', '2020-08-16 09:41:18', '2020-08-16 09:41:18'),
(103, 'IR', 'Iran [Islamic Republic of]', '2020-08-16 09:41:19', '2020-08-16 09:41:19'),
(104, 'IQ', 'Iraq', '2020-08-16 09:41:19', '2020-08-16 09:41:19'),
(105, 'IE', 'Ireland', '2020-08-16 09:41:19', '2020-08-16 09:41:19'),
(106, 'IL', 'Israel', '2020-08-16 09:41:19', '2020-08-16 09:41:19'),
(107, 'IT', 'Italy', '2020-08-16 09:41:19', '2020-08-16 09:41:19'),
(108, 'CI', 'Ivory Coast', '2020-08-16 09:41:20', '2020-08-16 09:41:20'),
(109, 'JM', 'Jamaica', '2020-08-16 09:41:20', '2020-08-16 09:41:20'),
(110, 'JP', 'Japan', '2020-08-16 09:41:21', '2020-08-16 09:41:21'),
(111, 'JO', 'Jordan', '2020-08-16 09:41:21', '2020-08-16 09:41:21'),
(112, 'KZ', 'Kazakhstan', '2020-08-16 09:41:21', '2020-08-16 09:41:21'),
(113, 'KE', 'Kenya', '2020-08-16 09:41:21', '2020-08-16 09:41:21'),
(114, 'KI', 'Kiribati', '2020-08-16 09:41:22', '2020-08-16 09:41:22'),
(115, 'KP', 'Korea, Democratic People\'s Republic of', '2020-08-16 09:41:22', '2020-08-16 09:41:22'),
(116, 'KR', 'Korea, Republic of', '2020-08-16 09:41:22', '2020-08-16 09:41:22'),
(117, 'KW', 'Kuwait', '2020-08-16 09:41:22', '2020-08-16 09:41:22'),
(118, 'KG', 'Kyrgyzstan', '2020-08-16 09:41:22', '2020-08-16 09:41:22'),
(119, 'LA', 'Lao People\'s Democratic Republic', '2020-08-16 09:41:23', '2020-08-16 09:41:23'),
(120, 'LV', 'Latvia', '2020-08-16 09:41:23', '2020-08-16 09:41:23'),
(121, 'LB', 'Lebanon', '2020-08-16 09:41:23', '2020-08-16 09:41:23'),
(122, 'LS', 'Lesotho', '2020-08-16 09:41:23', '2020-08-16 09:41:23'),
(123, 'LR', 'Liberia', '2020-08-16 09:41:24', '2020-08-16 09:41:24'),
(124, 'LY', 'Libyan Arab Jamahiriya', '2020-08-16 09:41:24', '2020-08-16 09:41:24'),
(125, 'LI', 'Liechtenstein', '2020-08-16 09:41:25', '2020-08-16 09:41:25'),
(126, 'LT', 'Lithuania', '2020-08-16 09:41:25', '2020-08-16 09:41:25'),
(127, 'LU', 'Luxembourg', '2020-08-16 09:41:25', '2020-08-16 09:41:25'),
(128, 'MO', 'Macau', '2020-08-16 09:41:25', '2020-08-16 09:41:25'),
(129, 'MK', 'Macedonia', '2020-08-16 09:41:25', '2020-08-16 09:41:25'),
(130, 'MG', 'Madagascar', '2020-08-16 09:41:25', '2020-08-16 09:41:25'),
(131, 'MW', 'Malawi', '2020-08-16 09:41:26', '2020-08-16 09:41:26'),
(132, 'MY', 'Malaysia', '2020-08-16 09:41:26', '2020-08-16 09:41:26'),
(133, 'MV', 'Maldives', '2020-08-16 09:41:26', '2020-08-16 09:41:26'),
(134, 'ML', 'Mali', '2020-08-16 09:41:26', '2020-08-16 09:41:26'),
(135, 'MT', 'Malta', '2020-08-16 09:41:26', '2020-08-16 09:41:26'),
(136, 'MH', 'Marshall Islands', '2020-08-16 09:41:26', '2020-08-16 09:41:26'),
(137, 'MQ', 'Martinique', '2020-08-16 09:41:27', '2020-08-16 09:41:27'),
(138, 'MR', 'Mauritania', '2020-08-16 09:41:27', '2020-08-16 09:41:27'),
(139, 'MU', 'Mauritius', '2020-08-16 09:41:27', '2020-08-16 09:41:27'),
(140, 'TY', 'Mayotte', '2020-08-16 09:41:27', '2020-08-16 09:41:27'),
(141, 'MX', 'Mexico', '2020-08-16 09:41:27', '2020-08-16 09:41:27'),
(142, 'FM', 'Micronesia, Federated States of', '2020-08-16 09:41:27', '2020-08-16 09:41:27'),
(143, 'MD', 'Moldova, Republic of', '2020-08-16 09:41:28', '2020-08-16 09:41:28'),
(144, 'MC', 'Monaco', '2020-08-16 09:41:28', '2020-08-16 09:41:28'),
(145, 'MN', 'Mongolia', '2020-08-16 09:41:28', '2020-08-16 09:41:28'),
(146, 'MS', 'Montserrat', '2020-08-16 09:41:28', '2020-08-16 09:41:28'),
(147, 'MA', 'Morocco', '2020-08-16 09:41:29', '2020-08-16 09:41:29'),
(148, 'MZ', 'Mozambique', '2020-08-16 09:41:29', '2020-08-16 09:41:29'),
(149, 'MM', 'Myanmar', '2020-08-16 09:41:29', '2020-08-16 09:41:29'),
(150, 'NA', 'Namibia', '2020-08-16 09:41:29', '2020-08-16 09:41:29'),
(151, 'NR', 'Nauru', '2020-08-16 09:41:30', '2020-08-16 09:41:30'),
(152, 'NP', 'Nepal', '2020-08-16 09:41:30', '2020-08-16 09:41:30'),
(153, 'NL', 'Netherlands', '2020-08-16 09:41:30', '2020-08-16 09:41:30'),
(154, 'AN', 'Netherlands Antilles', '2020-08-16 09:41:30', '2020-08-16 09:41:30'),
(155, 'NC', 'New Caledonia', '2020-08-16 09:41:30', '2020-08-16 09:41:30'),
(156, 'NZ', 'New Zealand', '2020-08-16 09:41:31', '2020-08-16 09:41:31'),
(157, 'NI', 'Nicaragua', '2020-08-16 09:41:31', '2020-08-16 09:41:31'),
(158, 'NE', 'Niger', '2020-08-16 09:41:31', '2020-08-16 09:41:31'),
(159, 'NG', 'Nigeria', '2020-08-16 09:41:31', '2020-08-16 09:41:31'),
(160, 'NU', 'Niue', '2020-08-16 09:41:32', '2020-08-16 09:41:32'),
(161, 'NF', 'Norfork Island', '2020-08-16 09:41:32', '2020-08-16 09:41:32'),
(162, 'MP', 'Northern Mariana Islands', '2020-08-16 09:41:32', '2020-08-16 09:41:32'),
(163, 'NO', 'Norway', '2020-08-16 09:41:32', '2020-08-16 09:41:32'),
(164, 'OM', 'Oman', '2020-08-16 09:41:32', '2020-08-16 09:41:32'),
(165, 'PK', 'Pakistan', '2020-08-16 09:41:33', '2020-08-16 09:41:33'),
(166, 'PW', 'Palau', '2020-08-16 09:41:33', '2020-08-16 09:41:33'),
(167, 'PA', 'Panama', '2020-08-16 09:41:33', '2020-08-16 09:41:33'),
(168, 'PG', 'Papua New Guinea', '2020-08-16 09:41:33', '2020-08-16 09:41:33'),
(169, 'PY', 'Paraguay', '2020-08-16 09:41:33', '2020-08-16 09:41:33'),
(170, 'PE', 'Peru', '2020-08-16 09:41:33', '2020-08-16 09:41:33'),
(171, 'PH', 'Philippines', '2020-08-16 09:41:34', '2020-08-16 09:41:34'),
(172, 'PN', 'Pitcairn', '2020-08-16 09:41:34', '2020-08-16 09:41:34'),
(173, 'PL', 'Poland', '2020-08-16 09:41:34', '2020-08-16 09:41:34'),
(174, 'PT', 'Portugal', '2020-08-16 09:41:34', '2020-08-16 09:41:34'),
(175, 'PR', 'Puerto Rico', '2020-08-16 09:41:34', '2020-08-16 09:41:34'),
(176, 'QA', 'Qatar', '2020-08-16 09:41:34', '2020-08-16 09:41:34'),
(177, 'SS', 'Republic of South Sudan', '2020-08-16 09:41:35', '2020-08-16 09:41:35'),
(178, 'RE', 'Reunion', '2020-08-16 09:41:35', '2020-08-16 09:41:35'),
(179, 'RO', 'Romania', '2020-08-16 09:41:35', '2020-08-16 09:41:35'),
(180, 'RU', 'Russian Federation', '2020-08-16 09:41:35', '2020-08-16 09:41:35'),
(181, 'RW', 'Rwanda', '2020-08-16 09:41:36', '2020-08-16 09:41:36'),
(182, 'KN', 'Saint Kitts and Nevis', '2020-08-16 09:41:36', '2020-08-16 09:41:36'),
(183, 'LC', 'Saint Lucia', '2020-08-16 09:41:37', '2020-08-16 09:41:37'),
(184, 'VC', 'Saint Vincent and the Grenadines', '2020-08-16 09:41:37', '2020-08-16 09:41:37'),
(185, 'WS', 'Samoa', '2020-08-16 09:41:37', '2020-08-16 09:41:37'),
(186, 'SM', 'San Marino', '2020-08-16 09:41:38', '2020-08-16 09:41:38'),
(187, 'ST', 'Sao Tome and Principe', '2020-08-16 09:41:39', '2020-08-16 09:41:39'),
(188, 'SA', 'Saudi Arabia', '2020-08-16 09:41:39', '2020-08-16 09:41:39'),
(189, 'SN', 'Senegal', '2020-08-16 09:41:39', '2020-08-16 09:41:39'),
(190, 'RS', 'Serbia', '2020-08-16 09:41:40', '2020-08-16 09:41:40'),
(191, 'SC', 'Seychelles', '2020-08-16 09:41:40', '2020-08-16 09:41:40'),
(192, 'SL', 'Sierra Leone', '2020-08-16 09:41:41', '2020-08-16 09:41:41'),
(193, 'SG', 'Singapore', '2020-08-16 09:41:41', '2020-08-16 09:41:41'),
(194, 'SK', 'Slovakia', '2020-08-16 09:41:42', '2020-08-16 09:41:42'),
(195, 'SI', 'Slovenia', '2020-08-16 09:41:43', '2020-08-16 09:41:43'),
(196, 'SB', 'Solomon Islands', '2020-08-16 09:41:43', '2020-08-16 09:41:43'),
(197, 'SO', 'Somalia', '2020-08-16 09:41:44', '2020-08-16 09:41:44'),
(198, 'ZA', 'South Africa', '2020-08-16 09:41:44', '2020-08-16 09:41:44'),
(199, 'GS', 'South Georgia South Sandwich Islands', '2020-08-16 09:41:46', '2020-08-16 09:41:46'),
(200, 'ES', 'Spain', '2020-08-16 09:41:46', '2020-08-16 09:41:46'),
(201, 'LK', 'Sri Lanka', '2020-08-16 09:41:47', '2020-08-16 09:41:47'),
(202, 'SH', 'St. Helena', '2020-08-16 09:41:48', '2020-08-16 09:41:48'),
(203, 'PM', 'St. Pierre and Miquelon', '2020-08-16 09:41:49', '2020-08-16 09:41:49'),
(204, 'SD', 'Sudan', '2020-08-16 09:41:49', '2020-08-16 09:41:49'),
(205, 'SR', 'Suricountry_name', '2020-08-16 09:41:49', '2020-08-16 09:41:49'),
(206, 'SJ', 'Svalbarn and Jan Mayen Islands', '2020-08-16 09:41:50', '2020-08-16 09:41:50'),
(207, 'SZ', 'Swaziland', '2020-08-16 09:41:50', '2020-08-16 09:41:50'),
(208, 'SE', 'Sweden', '2020-08-16 09:41:50', '2020-08-16 09:41:50'),
(209, 'CH', 'Switzerland', '2020-08-16 09:41:50', '2020-08-16 09:41:50'),
(210, 'SY', 'Syrian Arab Republic', '2020-08-16 09:41:50', '2020-08-16 09:41:50'),
(211, 'TW', 'Taiwan', '2020-08-16 09:41:50', '2020-08-16 09:41:50'),
(212, 'TJ', 'Tajikistan', '2020-08-16 09:41:50', '2020-08-16 09:41:50'),
(213, 'TZ', 'Tanzania, United Republic of', '2020-08-16 09:41:51', '2020-08-16 09:41:51'),
(214, 'TH', 'Thailand', '2020-08-16 09:41:51', '2020-08-16 09:41:51'),
(215, 'TR', 'Turkey', '2020-08-16 09:41:51', '2020-08-16 09:41:51'),
(216, 'UG', 'Uganda', '2020-08-16 09:41:51', '2020-08-16 09:41:51'),
(217, 'UA', 'Ukraine', '2020-08-16 09:41:51', '2020-08-16 09:41:51'),
(218, 'AE', 'United Arab Emirates', '2020-08-16 09:41:51', '2020-08-16 09:41:51'),
(219, 'GB', 'United Kingdom', '2020-08-16 09:41:51', '2020-08-16 09:41:51'),
(220, 'UY', 'Uruguay', '2020-08-16 09:41:52', '2020-08-16 09:41:52'),
(221, 'UZ', 'Uzbekistan', '2020-08-16 09:41:52', '2020-08-16 09:41:52'),
(222, 'VA', 'Vatican City State', '2020-08-16 09:41:52', '2020-08-16 09:41:52'),
(223, 'VE', 'Venezuela', '2020-08-16 09:41:52', '2020-08-16 09:41:52'),
(224, 'VN', 'Vietnam', '2020-08-16 09:41:52', '2020-08-16 09:41:52'),
(225, 'VG', 'Virgin Islands [British]', '2020-08-16 09:41:52', '2020-08-16 09:41:52'),
(226, 'YE', 'Yemen', '2020-08-16 09:41:53', '2020-08-16 09:41:53'),
(227, 'YU', 'Yugoslavia', '2020-08-16 09:41:53', '2020-08-16 09:41:53'),
(228, 'ZR', 'Zaire', '2020-08-16 09:41:53', '2020-08-16 09:41:53'),
(229, 'ZM', 'Zambia', '2020-08-16 09:41:53', '2020-08-16 09:41:53'),
(230, 'ZW', 'Zimbabwe', '2020-08-16 09:41:53', '2020-08-16 09:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `country`, `street`, `city`, `postcode`, `created_at`, `updated_at`) VALUES
(1, 'New', 9815157519, 'dikshya@gmail.com', NULL, '$2y$10$XIALhC27Au1wkEfhTx9bmuLPPb2MGpjrAXA7GYJ4KHc122UiEMZ6S', 'United States', 'pokhara', 'pokhra', 17000, '2020-08-04 10:48:42', '2020-08-10 02:52:22'),
(9, 'Will Smith', 989348931, 'willsmith@gmail.com', NULL, '$2y$10$pwtsaI310.iBihZnQehmTuH2Qy/nFsDTBftvK5vz2zL/xk0t5z1ve', '', '', '', NULL, '2020-08-05 06:03:25', '2020-08-05 06:03:25'),
(12, 'dikshya', 9815157519, 'new@gmail.com', NULL, '$2y$10$h9qDYpTHJTdis/FJMCoB6esML.FrNbaIWz5e219sv0HK.TH9b9/KS', 'Nepal', 'Pokhara', 'Port Blair', 744104, '2020-08-06 01:13:59', '2020-08-10 02:55:22'),
(13, 'Lia', 9843489317, 'lia@gmail.com', NULL, '$2y$10$iKdzXMbkA7w3qtifBJWC8.y5C/vKABcwIO7UjsEkkgU41Ps1qMUPu', NULL, NULL, NULL, NULL, '2020-08-07 04:02:53', '2020-08-07 04:02:53'),
(14, 'yuqi', 989348931, 'yuqi@gmail.com', NULL, '$2y$10$dTXR0ebV3XsLbIryKmzXq.3JV9PfmikFBWIBInvPLlmDkaSahxmya', NULL, NULL, NULL, NULL, '2020-08-07 06:06:54', '2020-08-07 06:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'John Smith', 'john@gmail.com', 'About sponsorship', 'What about sponsorship?', '2020-08-20 18:33:04', '2020-08-20 18:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `fish`
--

CREATE TABLE `fish` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `given_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `life_span` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `habitat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `global_population` bigint(20) NOT NULL,
  `date_joined` date NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature` int(11) NOT NULL,
  `water_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fish`
--

INSERT INTO `fish` (`id`, `name`, `category_id`, `given_name`, `dob`, `gender`, `life_span`, `diet`, `habitat`, `global_population`, `date_joined`, `height`, `weight`, `temperature`, `water_type`, `color`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Tuna', 10, 'Tuna', '2020-12-12', 'Fresh', '2 years', 'grains', 'water', 200000, '2020-12-12', '12', '12', 8, 'Fresh', 'Orange', '91016.jpg', 1, '2020-08-14 02:15:45', '2020-08-14 01:45:42', '2020-08-14 02:15:45'),
(2, 'Tuna', 10, 'Nemo', '2020-11-11', 'Male', '3 years', 'Grainss', 'water which is fresh', 13000, '2020-12-12', '11', '11', 22, 'Fresh', 'Oranges', '5137.jpg', 1, '2020-08-15 07:24:54', '2020-08-14 01:48:03', '2020-08-15 07:24:54'),
(3, 'Clown Fish', 9, 'Clowny', '2019-09-12', 'Male', '4 - 8 years', 'Algae, Plankton, Molluscs', 'Tropical coral reefs', 1132000, '2019-09-12', '10cm - 18cm', '40 gm', 22, 'Salty', 'Black, White, Orange, Red, Yellow', '68314.jpg', 1, NULL, '2020-08-15 07:24:17', '2020-08-15 07:24:17'),
(4, 'Cat Fish', 10, 'Catfish', '2018-04-01', 'Male', '8 - 20 years', 'Fish, Frogs, Worms', 'Fast-flowing rivers and lakes', 1200000, '2018-04-21', '1cm - 270cm', '10 - 14  kg', 69, 'Fresh', 'Brown, Black, Yellow, White, Tan, Grey', '71776.jpg', 1, NULL, '2020-08-15 07:28:06', '2020-08-15 07:28:06'),
(5, 'Angel Fish', 10, 'Angels', '2017-11-11', 'Female', '8 - 15 years', 'Fish, Algae, Plankton', 'Rivers and coral reefs', 120000, '2017-11-11', '7cm - 30cm', '56 ounces', 25, 'Salty', 'Black, White, Yellow, Orange, Purple, Silver, Blue, Green', '96186.jpg', 1, NULL, '2020-08-15 07:35:02', '2020-08-15 07:35:02'),
(6, 'Lion fish', 10, 'Lion', '2018-09-04', 'Female', '10 - 18 years', 'Fish, Shrimp, Crabs', 'Tropical reefs and rocky crevices', 8900000, '2018-09-04', '30cm - 35cm', '1 -2 pounds', 23, 'Salty', 'Red, White, Black, Brown, Orange', '55456.jpg', 1, NULL, '2020-08-15 07:38:09', '2020-08-15 07:38:09'),
(7, 'Siamese Fighting Fish', 10, 'Fighting fish', '2018-02-03', 'Male', '1 - 4 years', 'Insects, Brine Shrimp, Plankton', 'Mekong river in south-east Asia', 120000, '2018-02-03', '6cm - 8cm', '50 gm', 23, 'Fresh', 'Orange, blue', '11947.jpg', 1, NULL, '2020-08-15 07:40:49', '2020-08-15 07:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `mammals`
--

CREATE TABLE `mammals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `given_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `life_span` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `habitat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `global_population` bigint(20) NOT NULL,
  `date_joined` date NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gestation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mammals`
--

INSERT INTO `mammals` (`id`, `name`, `category_id`, `given_name`, `dob`, `gender`, `life_span`, `diet`, `habitat`, `global_population`, `date_joined`, `height`, `weight`, `gestation`, `temperature`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Lion', 8, 'Queen', '2018-09-04', 'Female', '20 Years', 'Fresh meats, Flesh', 'Lions are most active at night and live in a variety of habitats but prefer grassland, savanna, dense scrub, and open woodland. Historically, they ranged across much of Europe, Asia, and Africa.', 200000, '2018-03-22', '136 cm', '11 kg', '110 days', 38, '95884.jpg', 1, NULL, '2020-08-13 07:16:12', '2020-08-15 08:18:41'),
(3, 'Horse', 8, 'horsy', '2020-11-11', 'Male', '20 Yearss', 'Grass', 'stable', 2000000, '2012-12-12', '200', '200', '9 months', 34, '70839.jpg', 1, '2020-08-14 06:40:23', '2020-08-14 06:32:19', '2020-08-14 06:40:23'),
(4, 'Deer', 8, 'Deer', '2015-04-13', 'Male', '15 – 25', 'Grasses, sedges, the leaves and shoots of trees and other woody plants are all on the menu.', 'They can inhabit anything from forest, plains, desert, tropical rainforests, scrub lands, mountains and they even live in the city. White-tailed deer prefer to bed in areas with thick cover where they can seek cover from predators and the elements.', 500000, '2015-04-13', '2 m', '35 kg', '236 days', 38, '82071.jpg', 1, NULL, '2020-08-14 21:48:49', '2020-08-15 08:40:18'),
(5, 'Colobus', 8, 'Blacky', '2019-12-12', 'Male', '23', 'Fruits', 'Colobuses habitats include primary and secondary forests, riverine forests, and wooded grasslands; they are found more in higher-density logged forests than in other primary forests.', 200000, '2020-02-09', '1 m', '7 - 12 kg', '169 days', 39, '84279.jpg', 1, NULL, '2020-08-14 21:51:50', '2020-08-15 08:19:24'),
(6, 'White Tiger', 8, 'Bengali Tiger', '2013-11-02', 'Female', '20 Yearss', 'Eats herbivorous animals like wild boar, cattle, goats and deer.', 'The white tiger or bleached tiger is a pigmentation variant of the Bengal tiger, which is reported in the wild from time to time in the Indian states of Madhya Pradesh, Assam, West Bengal, Bihar and Odisha in the Sunderbans region and especially in the former State of Rewa.', 200, '2017-12-05', '3 m', '200 kg', '4 months', 40, '42679.jpg', 1, NULL, '2020-08-14 21:58:05', '2020-08-15 08:19:45'),
(7, 'Ailurus fulgens', 8, 'Red Panda', '2014-08-12', 'Male', '8 - 12 years', 'Bamboo, Berries, Eggs', 'High-altitude mountain forest', 10000, '2015-07-09', '60cm - 120cm', '3kg - 6.2kg', '4 months', 25, '48647.jpg', 1, NULL, '2020-08-15 08:22:58', '2020-08-15 08:22:58'),
(8, 'Hippopotamus amphibius', 8, 'Hippopotamus', '2017-09-12', 'Female', '40 - 50 years', 'Grasses, Grain, Flowers', 'Lakes, rivers and wetlands', 125000, '2017-08-09', '2 m - 5 m', '1ton - 4.5ton', '240 days', 35, '36120.jpg', 1, NULL, '2020-08-15 08:27:05', '2020-08-15 08:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_11_000000_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2020_03_10_091239_create_permission_components_table', 1),
(5, '2020_03_17_085556_create_permissions_table', 1),
(6, '2020_03_23_143004_create_categories_table', 1),
(7, '2020_04_11_085324_create_paintings_table', 1),
(8, '2020_04_13_103234_create_offers_table', 2),
(9, '2020_04_13_103440_create_offer_components_table', 2),
(10, '2020_04_16_120802_create_enquiries_table', 3),
(11, '2020_07_29_072014_create_cart_table', 4),
(12, '2020_08_04_162300_create_customers_table', 5),
(13, '2020_08_05_093719_create_cart_table', 6),
(16, '2020_08_05_163609_create_cart_table', 7),
(17, '2020_08_06_131600_create_countries_table', 8),
(18, '2020_08_06_152036_create_shipping_address_table', 9),
(19, '2020_08_07_055122_create_countries_table', 10),
(20, '2020_08_07_060340_create_countries_table', 11),
(21, '2020_08_07_092905_create_shipping_address_table', 12),
(22, '2020_08_07_122557_create_shipping_addresses_table', 13),
(23, '2020_08_09_120532_create_orders_table', 14),
(24, '2020_08_09_125845_create_order_paintings_table', 14),
(25, '2020_08_11_115325_create_exhibitions_table', 15),
(26, '2020_08_11_160937_create_exhibitions_table', 16),
(27, '2020_08_11_172520_create_offers_table', 17),
(28, '2020_08_13_112846_create_mammals_table', 18),
(29, '2020_08_13_121753_create_mammals_table', 19),
(30, '2020_08_13_135442_create_birds_table', 20),
(31, '2020_08_14_063311_create_fish_table', 21),
(32, '2020_08_14_081242_create_reptileamphi_table', 22),
(33, '2020_08_14_085336_create_reptiles_table', 23),
(34, '2020_08_14_085917_create_reptiles_table', 24),
(35, '2020_08_15_180726_create_tickets_table', 25),
(36, '2020_08_16_044215_create_sponsors_table', 25),
(37, '2020_08_16_100938_create_tickets_table', 26);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dikshya@gmail.com', '$2y$10$gZDpXrFuBftUiV7XzMQO7.0gbC4kKjSO1AEl7LItJK8uZbS4RXZVK', '2020-07-29 05:31:25'),
('dikshya@gmail.com', '$2y$10$gZDpXrFuBftUiV7XzMQO7.0gbC4kKjSO1AEl7LItJK8uZbS4RXZVK', '2020-07-29 05:31:25');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_com_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `permission`, `per_com_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'permission-view', 1, NULL, '2020-08-16 09:40:00', '2020-08-16 09:40:00'),
(2, 'permission-add', 1, NULL, '2020-08-16 09:40:00', '2020-08-16 09:40:00'),
(3, 'permission-edit', 1, NULL, '2020-08-16 09:40:01', '2020-08-16 09:40:01'),
(4, 'permission-delete', 1, NULL, '2020-08-16 09:40:01', '2020-08-16 09:40:01'),
(5, 'permission-access', 1, NULL, '2020-08-16 09:40:02', '2020-08-16 09:40:02'),
(6, 'role-view', 2, NULL, '2020-08-16 09:40:02', '2020-08-16 09:40:02'),
(7, 'role-add', 2, NULL, '2020-08-16 09:40:03', '2020-08-16 09:40:03'),
(8, 'role-edit', 2, NULL, '2020-08-16 09:40:04', '2020-08-16 09:40:04'),
(9, 'role-delete', 2, NULL, '2020-08-16 09:40:04', '2020-08-16 09:40:04'),
(10, 'role-access', 2, NULL, '2020-08-16 09:40:04', '2020-08-16 09:40:04'),
(11, 'category-access', 3, NULL, '2020-08-16 09:40:04', '2020-08-16 09:40:04'),
(12, 'category-view', 3, NULL, '2020-08-16 09:40:05', '2020-08-16 09:40:05'),
(13, 'category-add', 3, NULL, '2020-08-16 09:40:06', '2020-08-16 09:40:06'),
(14, 'category-edit', 3, NULL, '2020-08-16 09:40:06', '2020-08-16 09:40:06'),
(15, 'category-delete', 3, NULL, '2020-08-16 09:40:07', '2020-08-16 09:40:07'),
(16, 'user-access', 4, NULL, '2020-08-16 09:40:08', '2020-08-16 09:40:08'),
(17, 'user-view', 4, NULL, '2020-08-16 09:40:08', '2020-08-16 09:40:08'),
(18, 'user-add', 4, NULL, '2020-08-16 09:40:09', '2020-08-16 09:40:09'),
(19, 'user-edit', 4, NULL, '2020-08-16 09:40:10', '2020-08-16 09:40:10'),
(20, 'user-delete', 4, NULL, '2020-08-16 09:40:11', '2020-08-16 09:40:11'),
(21, 'animal-access', 5, NULL, '2020-08-16 09:40:12', '2020-08-16 09:40:12'),
(22, 'animal-view', 5, NULL, '2020-08-16 09:40:13', '2020-08-16 09:40:13'),
(23, 'animal-add', 5, NULL, '2020-08-16 09:40:13', '2020-08-16 09:40:13'),
(24, 'animal-edit', 5, NULL, '2020-08-16 09:40:14', '2020-08-16 09:40:14'),
(25, 'animal-delete', 5, NULL, '2020-08-16 09:40:14', '2020-08-16 09:40:14'),
(26, 'mammal-access', 6, NULL, '2020-08-16 09:40:14', '2020-08-16 09:40:14'),
(27, 'mammal-view', 6, NULL, '2020-08-16 09:40:15', '2020-08-16 09:40:15'),
(28, 'mammal-add', 6, NULL, '2020-08-16 09:40:15', '2020-08-16 09:40:15'),
(29, 'mammal-edit', 6, NULL, '2020-08-16 09:40:15', '2020-08-16 09:40:15'),
(30, 'mammal-delete', 6, NULL, '2020-08-16 09:40:16', '2020-08-16 09:40:16'),
(31, 'bird-access', 7, NULL, '2020-08-16 09:40:16', '2020-08-16 09:40:16'),
(32, 'bird-view', 7, NULL, '2020-08-16 09:40:16', '2020-08-16 09:40:16'),
(33, 'bird-add', 7, NULL, '2020-08-16 09:40:17', '2020-08-16 09:40:17'),
(34, 'bird-edit', 7, NULL, '2020-08-16 09:40:17', '2020-08-16 09:40:17'),
(35, 'bird-delete', 7, NULL, '2020-08-16 09:40:17', '2020-08-16 09:40:17'),
(36, 'fish-access', 8, NULL, '2020-08-16 09:40:17', '2020-08-16 09:40:17'),
(37, 'fish-view', 8, NULL, '2020-08-16 09:40:18', '2020-08-16 09:40:18'),
(38, 'fish-add', 8, NULL, '2020-08-16 09:40:18', '2020-08-16 09:40:18'),
(39, 'fish-edit', 8, NULL, '2020-08-16 09:40:18', '2020-08-16 09:40:18'),
(40, 'fish-delete', 8, NULL, '2020-08-16 09:40:19', '2020-08-16 09:40:19'),
(41, 'amphi-reptile-access', 9, NULL, '2020-08-16 09:40:19', '2020-08-16 09:40:19'),
(42, 'amphi-reptile-view', 9, NULL, '2020-08-16 09:40:19', '2020-08-16 09:40:19'),
(43, 'amphi-reptile-add', 9, NULL, '2020-08-16 09:40:20', '2020-08-16 09:40:20'),
(44, 'amphi-reptile-edit', 9, NULL, '2020-08-16 09:40:20', '2020-08-16 09:40:20'),
(45, 'amphi-reptile-delete', 9, NULL, '2020-08-16 09:40:20', '2020-08-16 09:40:20'),
(46, 'enquiry-access', 10, NULL, '2020-08-16 09:40:20', '2020-08-16 09:40:20'),
(47, 'enquiry-view', 10, NULL, '2020-08-16 09:40:20', '2020-08-16 09:40:20'),
(48, 'enquiry-add', 10, NULL, '2020-08-16 09:40:20', '2020-08-16 09:40:20'),
(49, 'enquiry-edit', 10, NULL, '2020-08-16 09:40:21', '2020-08-16 09:40:21'),
(50, 'enquiry-delete', 10, NULL, '2020-08-16 09:40:21', '2020-08-16 09:40:21'),
(51, 'ticket-access', 11, NULL, '2020-08-16 09:40:22', '2020-08-16 09:40:22'),
(52, 'ticket-view', 11, NULL, '2020-08-16 09:40:22', '2020-08-16 09:40:22'),
(53, 'ticket-add', 11, NULL, '2020-08-16 09:40:22', '2020-08-16 09:40:22'),
(54, 'ticket-edit', 11, NULL, '2020-08-16 09:40:22', '2020-08-16 09:40:22'),
(55, 'ticket-delete', 11, NULL, '2020-08-16 09:40:22', '2020-08-16 09:40:22'),
(56, 'sponsor-access', 12, NULL, '2020-08-16 09:40:22', '2020-08-16 09:40:22'),
(57, 'sponsor-view', 12, NULL, '2020-08-16 09:40:22', '2020-08-16 09:40:22'),
(58, 'sponsor-add', 12, NULL, '2020-08-16 09:40:23', '2020-08-16 09:40:23'),
(59, 'sponsor-edit', 12, NULL, '2020-08-16 09:40:23', '2020-08-16 09:40:23'),
(60, 'sponsor-delete', 12, NULL, '2020-08-16 09:40:23', '2020-08-16 09:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `permission_components`
--

CREATE TABLE `permission_components` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_component` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_components`
--

INSERT INTO `permission_components` (`id`, `permission_component`, `created_at`, `updated_at`) VALUES
(1, 'Permission Management', NULL, NULL),
(2, 'Role Management', NULL, NULL),
(3, 'Category Management', NULL, NULL),
(4, 'User Management', NULL, NULL),
(5, 'Animal Management', NULL, NULL),
(6, 'Mammal Management', NULL, NULL),
(7, 'Bird Management', NULL, NULL),
(8, 'Fish Management', NULL, NULL),
(9, 'Reptiles and Amphibians Management', NULL, NULL),
(10, 'Enquiry Management', NULL, NULL),
(11, 'Ticket Management', NULL, NULL),
(12, 'Sponsor Management', NULL, NULL),
(14, 'Record Management', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reptiles`
--

CREATE TABLE `reptiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `given_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `life_span` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `habitat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `global_population` bigint(20) NOT NULL,
  `date_joined` date NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reproduction_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clutch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offspring` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reptiles`
--

INSERT INTO `reptiles` (`id`, `name`, `category_id`, `given_name`, `dob`, `gender`, `life_span`, `diet`, `habitat`, `global_population`, `date_joined`, `height`, `weight`, `reproduction_type`, `clutch`, `offspring`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Crocodiless', 11, 'corocos', '2020-11-11', 'Female', '21', 'Meat, Fleshs', 'Water, Land', 120000, '2020-11-11', '32', '45', 'Livebearer', '23', 12, '24782.jpg', 1, '2020-08-15 07:53:58', '2020-08-14 05:17:50', '2020-08-15 07:53:58'),
(3, 'Tree Frog', 11, 'Green Frog', '2017-12-01', 'Female', 'How long the animal lives for	2-4 years', 'Insects, Worms, Small Frogs', 'Forests, woodlands and marshes', 1230000, '2018-12-01', '3-14cm', '2-17g', 'Lay Eggs', '300', NULL, '59863.jpg', 1, NULL, '2020-08-15 07:53:42', '2020-08-15 08:04:42'),
(4, 'Tortoise', 11, 'Red tortoise', '2012-05-09', 'Female', '30-150 years', 'Grass, Weeds, Leafy greens', 'Sandy soil close to water', 230000, '2014-04-12', '6-120cm', '1 - 300kg', 'Lay Eggs', '20', NULL, '21978.jpg', 1, NULL, '2020-08-15 08:00:38', '2020-08-15 08:05:08'),
(5, 'Salamander', 11, 'Green Salamandar', '2016-01-31', 'Female', '5-20 years', 'Fish, Mice, Insects', 'Rainforest, streams and wetlands', 71000, '2017-10-12', '2-180cm', '1 - 65 kg', 'Lay Eggs', '9', NULL, '68341.jpg', 1, NULL, '2020-08-15 08:04:09', '2020-08-15 08:04:09'),
(6, 'Crocodile', 11, 'Crocodile', '2017-09-07', 'Female', '20 - 70 years', 'Fish, crustaceans, deer, buffalo', 'Rivers, lakes, marshes, lagoons, mangrove swamps and estuaries', 100000, '2018-07-09', '1.7m - 7m', '18kg - 1,000kg', 'Lay Eggs', '17 - 100', NULL, '74310.jpg', 1, NULL, '2020-08-15 08:12:58', '2020-08-15 08:12:58'),
(7, 'Serpentes', 11, 'Snake', '2019-12-05', 'Female', '30 years', 'Rats, insects', 'Snake lives can live in land and water both.', 4520000, '2019-12-13', '1 - 5.4 m', '1 - 150 kg', 'Lay Eggs', '10 - 30', NULL, '5391.jpg', 1, NULL, '2020-08-15 08:17:48', '2020-08-15 08:17:48');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2020-08-16 09:40:31', '2020-08-16 09:40:31'),
(6, 'Manager', '2020-08-20 18:40:19', '2020-08-20 18:40:19'),
(7, 'Zookeeper', '2020-08-20 18:41:18', '2020-08-20 18:41:18'),
(8, 'Spnsor', '2020-08-20 18:41:50', '2020-08-20 18:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permissions_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`role_id`, `permissions_id`) VALUES
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(2, 38),
(2, 12),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(2, 38),
(2, 12),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(3, 15),
(3, 21),
(3, 22),
(3, 23),
(3, 24),
(3, 25),
(4, 21),
(4, 22),
(4, 23),
(4, 24),
(4, 25),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 51),
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(1, 56),
(1, 57),
(1, 58),
(1, 59),
(1, 60),
(3, 26),
(3, 27),
(3, 28),
(3, 29),
(3, 30),
(3, 31),
(3, 32),
(3, 33),
(3, 34),
(3, 35),
(3, 36),
(3, 37),
(3, 38),
(3, 39),
(3, 40),
(3, 41),
(3, 42),
(3, 43),
(3, 44),
(3, 45),
(3, 46),
(3, 47),
(3, 48),
(3, 49),
(3, 50),
(4, 11),
(4, 12),
(4, 13),
(4, 14),
(4, 15),
(4, 26),
(4, 27),
(4, 28),
(4, 29),
(4, 30),
(4, 31),
(4, 32),
(4, 33),
(4, 34),
(4, 35),
(4, 36),
(4, 37),
(4, 38),
(4, 39),
(4, 40),
(4, 41),
(4, 42),
(4, 43),
(4, 44),
(4, 45),
(4, 46),
(4, 47),
(4, 48),
(4, 49),
(4, 50),
(4, 51),
(4, 52),
(4, 53),
(4, 54),
(4, 55),
(4, 56),
(4, 57),
(4, 58),
(4, 59),
(4, 60),
(5, 11),
(5, 12),
(5, 21),
(5, 22),
(5, 26),
(5, 27),
(5, 31),
(5, 32),
(5, 36),
(5, 37),
(5, 41),
(5, 42),
(5, 46),
(5, 47),
(5, 51),
(5, 52),
(5, 56),
(5, 57),
(6, 11),
(6, 12),
(6, 13),
(6, 14),
(6, 15),
(6, 21),
(6, 22),
(6, 23),
(6, 24),
(6, 25),
(6, 26),
(6, 27),
(6, 28),
(6, 29),
(6, 30),
(6, 31),
(6, 32),
(6, 33),
(6, 34),
(6, 35),
(6, 36),
(6, 37),
(6, 38),
(6, 39),
(6, 40),
(6, 41),
(6, 42),
(6, 43),
(6, 44),
(6, 45),
(6, 46),
(6, 47),
(6, 48),
(6, 49),
(6, 50),
(6, 51),
(6, 52),
(6, 53),
(6, 54),
(6, 55),
(6, 56),
(6, 57),
(6, 58),
(6, 59),
(6, 60),
(7, 11),
(7, 12),
(7, 21),
(7, 22),
(7, 26),
(7, 27),
(7, 31),
(7, 32),
(7, 36),
(7, 37),
(7, 41),
(7, 42),
(7, 46),
(7, 47),
(7, 51),
(7, 52),
(8, 21),
(8, 22),
(8, 26),
(8, 27),
(8, 31),
(8, 32),
(8, 36),
(8, 37),
(8, 41),
(8, 42);

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `name`, `email`, `contact`, `country`, `city`, `street`, `created_at`, `updated_at`) VALUES
(1, 'Will Smith', 'willsmith@gmail.com', '9815157519', 'Nepal', 'Pokhara', '123 tole', '2020-08-15 22:59:59', '2020-08-15 22:59:59'),
(3, 'dikshya', 'dikshya@gmail.com', '9815157519', 'Nepal', 'Port Blair', 'Pokhara', '2020-08-15 23:03:12', '2020-08-15 23:03:12'),
(7, 'William Smith', 'william@gmail.com', '9832222434', 'Uk', 'London', '123 Mall', '2020-08-20 18:34:55', '2020-08-20 18:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_ticket` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `name`, `email`, `contact`, `age_group`, `total_ticket`, `created_at`, `updated_at`) VALUES
(4, 'diskhya', 'dikshya@gmail.com', '98434343', 'teen', 4, '2020-08-20 18:33:55', '2020-08-20 18:33:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `address`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 9842401234, 'Kathmandu, Nepal', 'admin@gmail.com', NULL, '$2y$10$wAwPDq9WNxYCmXiUdP6cpOOPWIfjA85HdfndHe3NkYL3dMgbj29o2', 1, NULL, '2020-08-16 09:39:40', '2020-08-16 09:39:40'),
(5, 'Mark Jones', 9833345545, 'London, Uk', 'manager@gmail.com', NULL, '$2y$10$xNV8OsVxp/3eH11SrPrjveB/zVKpLlCogYquKTNCSOhSQp/./CXmC', 6, NULL, '2020-08-20 18:43:39', '2020-08-20 18:43:39'),
(6, 'Laura Browns', 449232434, 'England', 'laura@gmail.com', NULL, '$2y$10$rcgj6.4xRXT8F5.LfNqbk.DWK5vO6IicSwPvvGQdLd4Nzpu/gEzOy', 8, NULL, '2020-08-20 18:44:41', '2020-08-20 18:45:05'),
(7, 'Harry Styles', 9815157519, 'Nepal, ktm', 'zookeeper@gmail.com', NULL, '$2y$10$ixdJ1MERHrRXPwGYiKUiQ.nPm8NCeov2pATVuxoH4IdzAPgJi0i4.', 7, NULL, '2020-08-20 18:46:11', '2020-08-20 18:46:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birds`
--
ALTER TABLE `birds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enquiries_email_unique` (`email`);

--
-- Indexes for table `fish`
--
ALTER TABLE `fish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mammals`
--
ALTER TABLE `mammals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_permission_unique` (`permission`);

--
-- Indexes for table `permission_components`
--
ALTER TABLE `permission_components`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reptiles`
--
ALTER TABLE `reptiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sponsors_email_unique` (`email`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tickets_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birds`
--
ALTER TABLE `birds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fish`
--
ALTER TABLE `fish`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mammals`
--
ALTER TABLE `mammals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `permission_components`
--
ALTER TABLE `permission_components`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reptiles`
--
ALTER TABLE `reptiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
