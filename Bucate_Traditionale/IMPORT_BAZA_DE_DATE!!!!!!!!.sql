-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 09:59 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bucate_traditionale`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_04_16_025052_create_products_table', 3),
(7, '2019_04_18_002336_create_users_table', 7),
(8, '2019_04_18_002420_create_order_products_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `id_product` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `county` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`order_id`, `user_id`, `id_product`, `quantity`, `address`, `city`, `county`, `postal_code`, `created_at`, `updated_at`) VALUES
(1, 3, 10001, 3, 'Romanitei, nr.47', 'Prahova', 'Campina', 105600.00, '2019-04-17 22:15:16', '2019-04-17 22:15:16'),
(2, 4, 40001, 1, 'Aleea Migdalelor, nr.5', 'Bucuresti', 'Bucuresti', 222444.00, '2019-04-17 22:15:16', '2019-04-17 22:15:16'),
(3, 2, 30005, 2, 'Baiului, nr.7', 'Alba-Iulia', 'Alba', 234345.00, '2019-04-17 22:15:16', '2019-04-17 22:15:16'),
(4, 2, 20002, 3, 'Baiului, nr.7', 'Alba-Iulia', 'Alba', 234345.00, '2019-04-17 22:15:16', '2019-04-17 22:15:16'),
(5, 1, 10001, 1, 'Castelului, nr.14', 'Bucuresti', 'Bucuresti', 189101.00, '2019-04-17 22:15:16', '2019-04-17 22:15:16'),
(6, 4, 40002, 7, 'Aleea Migdalelor, nr.5', 'Bucuresti', 'Bucuresti', 222444.00, '2019-04-17 22:15:16', '2019-04-17 22:15:16'),
(7, 3, 20002, 2, 'Romanitei, nr.47', 'Prahova', 'Campina', 105600.00, '2019-04-17 22:15:16', '2019-04-17 22:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `name_product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `name_product`, `slug`, `description`, `price`, `category`, `photo`, `created_at`, `updated_at`) VALUES
(10001, 'Costum traditional baieti', 'ayd', 'Va prezentam costumul traditional de baieti pentru botez, compus din 2 piese, bluza si pantaloni, panglica tricolor, o tinuta traditionala deosebita, eleganta si stilata. \r\nCostumasul este format din 2 piese:\r\nCamasa\r\nPantaloni\r\nArticolul este confectionat in Romania .', 92.00, 'Vestimentatie', '/Haine/costumas-baieti.jpg', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(10003, 'Costum traditional fete', 'bhp', 'Va prezentam costumul traditional (national) de fete pentru botez, compus din 2 piese, rochita si batic cu ciucuri, o tinuta traditionala deosebita, eleganta si stilata. Acest costum popular pentru botez face parte din colectia 2018, avand un design fashion, ispirat din porturile nationale pentru diferite evenimente festive la care cei mici vor fi in centrul atentiei.\r\n\r\n\r\n   \r\n', 147.00, 'Vestimentatie', '/Haine/costum-fete.jpg', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(20001, 'Ie femeie', 'pf', 'Broderiile cusute cu fir negru, bleumarin sau maro, pe vremuri erau purtate de femeile mai in varsta, care aveau un anumit statut social,\r\nIa romaneasca cu broderie neagra sau bleumarin, prin culorile inchise reprezinta sobrietate, intelepciune si decenta. Aceste modele de ii traditionale sunt specifice zonei Banatului, in care culorile reprezentative ale broderiei sunt: brun, visiniu, negru, verde inchis.\r\nDar cu timpul aceste tipuri de camasi traditionale romanesti au inceput sa fie prezente si in vestimentatia femeilor mai tinere, foarte des intalnite in combinatie cu rosu, galben sau portocaliu.\r\nDoamnele care aleg acest tip de bluza traditionala au ca si principii vestimentare, eleganta si simplitatea. De obicei este preferata si adecvata unor evenimente speciale.', 160.00, 'Vestimentatie', '/Haine/ie-femeie.jpg', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(20002, 'Ie barbat', 'pe', '      Aceasta ie traditionala e brodata si produsa exclusiv in Romania, reprezentand un obiect vestimentar ce se potriveste fiecarei persoane indiferent de varsta, statura sau greutate, fiind confectionata 100% din bumbac satinat de o calitate superioara. \r\n\r\n    Ia este o haina versatila, usor asortabila desprinsa din costumul traditional romanesc purtand in ea istorie, poveste si simbol. \r\n\r\nSa reinviem traditia mandrindu-ne de faptul ca suntem romani.', 160.00, 'Vestimentatie', '/Haine/ie-barbat.jpg', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(20003, 'Cos traditional \"SĂRBĂTOAREA DIN INIMĂ\"', 'be', 'Pachetul contine:\r\n\r\nZACUSCĂ NATURALĂ DE GHEBE – MICA ILINCA - 220 gr\r\n\r\nDULCEAȚĂ NATURALĂ MICA ILINCA - 220 gr\r\n\r\nLUMÂNARE\r\n\r\nÎNGERAȘ\r\n\r\nFARFURIE CERAMICA HOREZU \r\n\r\nVIN CABERNET SAUVIGNON ROȘU – 750ML\r\n\r\nPLATOU MARE PENTRU SERVIT DIN LEMN 43 X 23 CM\r\n\r\nVAZA CERAMICA  DE CORUND 10 CM', 255.00, 'Cadouri', '/Cadouri/pachet1.jpg', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(20004, 'Cos traditional \"MAREA UNIRE\"', 'rr', 'Pachetul cadou conține:\r\n\r\nPLOSCĂ CERAMICĂ BLEDEA BAIA MARE 20 CM 600 ML\r\n\r\nPĂPUȘĂ TRADIȚIONALĂ MICĂ DIN CERAMICĂ\r\n\r\nCANĂ VIN HOREZU\r\n\r\nFARFURIE CERAMICA HOREZU 21 CM\r\n\r\nUn pachet cadou care cuprinde frumusetea intregii Romanii: ceramica de Horezu, singura ceramică din România inclusă in Patrimoniul Unesco, care va infrumuseta si colora orice colt din casa dumneavoastra; ceramica de Bledea, creata printr-o metoda revolutionara de finisare a produselor numita patinare, pentru care maramureseanul Zaharia Bledea a castigat nu mai putin de 280 de premii nationale si internationale; păpușa realizată manual din ceramică în port tradițional românesc, confectionata in atelierul familiei Iacinschi din Botoșani și îmbrăcată cu haine tradiționale autentice din zona Bucovina.', 184.00, 'Cadouri', '/Cadouri/pachet2.jpg', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(30005, 'PACHET CADOU', 'ts', 'Pachetul cadou contine:\r\n\r\n1 cozonac proaspăt Pania 600g\r\n\r\n1 sticlă de vin Nativus - Fetească Neagră\r\n\r\n1 ștergar tradițional\r\n\r\n1 farfurie ceramică tradițională de Corund 19-21 cm ', 182.00, 'Cadouri', '/Cadouri/pachet3.jpg', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(40001, 'SET CĂNI PENTRU VIN', 'th', 'Pachetul cadou conține:\r\n\r\nVIN DOMENIILE AVERESTI- CELEBRAM UNIREA\r\n\r\n2 CĂNI MARI DE VIN DIN CERAMICA BLEDEA BAIA MARE \r\n\r\n2 CĂNI MICI DE VIN DIN CERAMICA BLEDEA BAIA MARE \r\n\r\nUn set de ceramică de cea mai bună calitate și un vin ediție limitată care vor face cea mai bună impresie persoanei caruia îi veți dărui acest set cadou. Sau, dacă sunteți gazdă impresia va fi de asemenea puternică. Un set care poate fi potrivit și pentru familie, pentru cănile pot fi folosite și pentru ceai, cafea, lapte și alte băuturi consumate în familie', 142.00, 'Cadouri', '/Cadouri/pachet4.jpg', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(40002, 'SET SUVENIR CERAMICĂ BLEDEA', 'iml', 'PACHETUL CONTINE:\r\n\r\nSET SUVENIR CERAMICĂ BLEDEA BAIA MARE \r\n- PLOSCA \r\n- CANA ȚUICĂ ȘI \r\n-PĂLINCĂ BĂDĂCIN 50 ML', 54.00, 'Cadouri', '/Cadouri/pachet5.jpg', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(40003, 'Cos traditional \"PENTRU MARI ȘI MICI\"', 'jl', 'Pachetul cadou conține:\r\n\r\nPUSCULITA MARE DIN LUT NESMALTUIT 28 CM\r\nPLATOU PENTRU SERVIT MÂNCARE DIN LEMN ÎN FORMĂ DE FRUNZĂ 1\r\nVIN COLECȚIA REGALĂ FETEASCĂ REGALĂ – CRAMA AVERESTI 750ML\r\nFARFURIE CERAMICA HOREZU 21 CM\r\nCeramica s-a bucurat de un adevărat cult în civilizaţia rurală românească, încă din cele mai vechi timpuri. Fiecare obiect ceramic este unic, realizat cu respect față de comunitatea căreia îi aparține meșteșugarul respectiv, față de credințele și stilul său de viață, de valorile pe care alte generații de artiști populari le-au transmis, iar ceramica de Horezu este cu atat mai speciala, cu cat este singura ceramică din România inclusă in Patrimoniul Unesco.\r\n\r\nAlaturi de farfuria din ceramica de Horezu vine platoul din lemn, confectionat si slefuit manual, realizat de meșteri țărani cu multă migală și măiestrie. Obiectele din lemn vorbesc de la sine și de multe ori ne întorc cu gândul în trecut la casa bunicii si la copilarie.\r\n\r\nPusculita din lut nesmaltuit, de asemenea confectionata manual, poate fi oferita copiilor, care vor asculta cu entuziasm clinchetul micilor lor economii adapostite in ea.', 182.00, 'Cadouri', '/Cadouri/pachet6.jpg', '2019-04-15 23:51:28', '2019-04-15 23:51:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last-name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `submit_check` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last-name`, `username`, `email`, `password`, `telephone`, `submit_check`, `created_at`, `updated_at`) VALUES
(1, 'Alexandru', 'Crisan', 'crtyalex12', 'uiiuiuhuhui@yahoo.com', '$2y$10$WQKCk/.0OjHqAOnXWAtu/eLfqsB1ZNGdTiCkqOluPLqI58PkhpddS', '0755544312', '1', '2019-04-17 21:33:29', '2019-04-17 21:33:29'),
(2, 'Ion', 'Petrescu', 'ion123', 'Ion.Petrescu@yahoo.com', '$2y$10$lUOrtM4GSOP.fwsTDxF20ONasxFYvCQCyTdHi940pRkWO5wSFKlI2', '0711223344', '1', '2019-04-17 21:33:29', '2019-04-17 21:33:29'),
(3, 'Clara', 'Caramitru', 'clara12', 'Caramitru.Clara@yahoo.com', '$2y$10$XYCq9sHsPmibEyU4wMc5uOGn6q9/EykvqJGjJo4XRfJMcd4W1gpj.', '0733367589', '1', '2019-04-17 21:33:29', '2019-04-17 21:33:29'),
(4, 'Cristina', 'Stanescu', 'crtinas123', 'Stanescu.Cristina@yahoo.com', '$2y$10$cSR6mWJa1R9vvHIcwDVzFu0GQHtBZKjh07nhZQctTNaAqNozaT/Ya', '0787654321', '1', '2019-04-17 21:33:29', '2019-04-17 21:33:29'),
(8, 'Bau', 'Bau', 'baubau', 'bau@outlook.com', '$2y$10$ZEhQu/o.aAvnBPNsIrgzSOx3gyhjfPYUK99RcglsgecE0jrrR9p7O', '0789896776', NULL, '2019-05-29 12:34:58', '2019-05-29 12:34:58'),
(9, 'Buenos', 'Anna Ana', 'foosa', 'ananna150597@gmail.com', '$2y$10$zPd0WHnflMKaptr8aAjoyupC/N.pOQCcfjtB6zDX5u9zXFTt68pwe', '0728790182', NULL, '2019-12-28 16:03:16', '2019-12-28 16:03:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `order_products_order_id_unique` (`order_id`),
  ADD KEY `order_products_id_product_foreign` (`id_product`),
  ADD KEY `order_products_user_id_foreign` (`user_id`) USING BTREE;

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD UNIQUE KEY `products_name_product_unique` (`name_product`),
  ADD UNIQUE KEY `slug_id` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60011;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `order_products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
