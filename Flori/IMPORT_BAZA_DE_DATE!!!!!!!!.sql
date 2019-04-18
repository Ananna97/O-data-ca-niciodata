-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2019 at 03:27 AM
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
-- Database: `flower_shop`
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
(1, '2019_04_16_015132_create_products_table', 1),
(2, '2019_04_16_024654_create_products_table', 2),
(3, '2019_04_16_025052_create_products_table', 3),
(4, '2019_04_17_142800_create_users_table', 4),
(5, '2019_04_17_160134_create_users_table', 5),
(6, '2019_04_17_234949_create_users_table', 6),
(7, '2019_04_18_002336_create_users_table', 7),
(8, '2019_04_18_002420_create_order_products_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `CNP` bigint(20) UNSIGNED DEFAULT NULL,
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

INSERT INTO `order_products` (`order_id`, `CNP`, `id_product`, `quantity`, `address`, `city`, `county`, `postal_code`, `created_at`, `updated_at`) VALUES
(1, 2940521430997, 10001, 3, 'Romanitei, nr.47', 'Prahova', 'Campina', 105600.00, '2019-04-17 22:15:16', '2019-04-17 22:15:16'),
(2, 2960227357879, 40005, 1, 'Aleea Migdalelor, nr.5', 'Bucuresti', 'Bucuresti', 222444.00, '2019-04-17 22:15:16', '2019-04-17 22:15:16'),
(3, 1951214519263, 60006, 2, 'Baiului, nr.7', 'Alba-Iulia', 'Alba', 234345.00, '2019-04-17 22:15:16', '2019-04-17 22:15:16'),
(4, 1951214519263, 60005, 3, 'Baiului, nr.7', 'Alba-Iulia', 'Alba', 234345.00, '2019-04-17 22:15:16', '2019-04-17 22:15:16'),
(5, 1910527384590, 10001, 1, 'Castelului, nr.14', 'Bucuresti', 'Bucuresti', 189101.00, '2019-04-17 22:15:16', '2019-04-17 22:15:16'),
(6, 2960227357879, 60002, 7, 'Aleea Migdalelor, nr.5', 'Bucuresti', 'Bucuresti', 222444.00, '2019-04-17 22:15:16', '2019-04-17 22:15:16'),
(7, 2940521430997, 50003, 2, 'Romanitei, nr.47', 'Prahova', 'Campina', 105600.00, '2019-04-17 22:15:16', '2019-04-17 22:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `name_product` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
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

INSERT INTO `products` (`id_product`, `name_product`, `description`, `price`, `category`, `photo`, `created_at`, `updated_at`) VALUES
(10001, 'Arrangement Your Day', 'Jolly and bold colors, but in pastel shades, just to add a little refinement. With delicate flowers, such as peach roses or spray roses.', 50.00, 'Birthday', '/BIRTHDAY/B1.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(10002, 'Arrangement Happy Birthday', 'An arrangement like a miniature garden: greenery, scented flowers and the joy to have the nature within reach. ', 47.00, 'Birthday', '/BIRTHDAY/B2.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(10003, 'Bouquet Happines petals', 'How does a perfect day start? With a bright and full of cheerful bouquet. The bouquet contains: 1 white hydrangea, 11 yellow freesias, 3 yellow roses, greenery. \\r\\n', 47.00, 'Birthday', '/BIRTHDAY/B3.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(10004, 'Bouquet A perfect day', 'The most beautiful surprise when you want to make her happy ... a bunch of beautiful flowers! \\r\\nThis bouquet contains 1 green / pink hydrangea, 3 pink chrysanthemum, 4 purple irises, 3 red dianthus, 2 red roses, 3 cups of pink cymbidium orchids and greenery. ', 52.00, 'Birthday', '/BIRTHDAY/B4.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(10005, 'Bouquet Summer Joy', 'How does a perfect day start? With a bright and full of cheerful bouquet. The bouquet contains: 1 white hydrangea, 11 yellow freesias, 3 yellow roses, greenery. \\r\\n', 65.00, 'Birthday', '/BIRTHDAY/B5.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(20001, 'Puppy festival', 'White puppy made from flowers in  beautiful basket.', 60.00, 'BiFestivalrthday', '/FESTIVAL/Fe1.jpg', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(20002, 'Puppy Easter', 'White puppy with bunny ears made from flowers in  beautiful basket.', 65.00, 'Festival', '/FESTIVAL/Fe2.jpg', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(20003, 'Bear Easter', 'White Tedydy-bear made from delicate flowers.. ', 55.00, 'Festival', '/FESTIVAL/Fe3.jpg', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(20004, 'Rainbow Roses', 'Culorfull roses that will bring you joy! ', 50.00, 'Festival', '/FESTIVAL/Fe4.jpg', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(30001, 'Garden Wreath', 'An exquisite round wreath with blooms inspired by the lasting impressions a loved one makes on our lives. Surround a treasured photograph, poem or other dear memento with sweet, green carnations, white and green chrysanthemums and the special beauty of green cymbidium orchids.', 65.00, 'Funeral', '/FUNERAL/F1.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(30002, 'Funeral Cross', 'Stunningly simple, this lovely floral cross is a beautiful addition to the memorial service, honoring someone for whom faith was an essential part of life. ', 100.00, 'Funeral', '/FUNERAL/F2.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(30003, 'In Memoriam Wreath', 'Keep fond memories close to your heart with this lovely feminine floral wreath. It is perfect to surround a framed photo of the departed.', 125.00, 'Funeral', '/FUNERAL/F3.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(30004, 'Standing Spray', 'This exquisite standing spray in white and green includes roses, Asiatic lilies, spray chrysanthemums and spray carnations arranged amongst palm fronds and lush greens. Accented by white satin ribbon and standing on a wire easel, this standing spray will make a truly beautiful addition to the service.', 100.00, 'Funeral', '/FUNERAL/F4.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(30005, 'Teardrop Spray', 'This traditional floral spray in varying shades of pink includes bright cerise germini plus light and dark pink carnations. These fresh flowers are carefully arranged and interspersed with white gypsophila, leather leaf and eucalyptus.', 75.00, 'Funeral', '/FUNERAL/F5.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(40001, 'Tender heart', 'Tenderness brings peace and security in a relationship and expressed love without saying a word. When you are away from her, but want to treat her gentle, send her a Tender heart!', 60.00, 'Valentines', '/VALENTINES/V1.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(40002, 'In the mood for love', 'When you are craving for love, our designers recommend you an excellent recipe: take no more and no less than 7 pink roses, mix them well with purple phalenopsis and wax flowers, in a heart shaped bowl, till the composition becomes perfect!', 53.00, 'Valentines', '/VALENTINES/V2.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(40003, 'The joy of love', 'There is no greater joy than the one you feel when you love. For this joy, which we are sure you can feel it, we`ve created a special flower bouquet, on Valentine`s Day, in the most optimistic color and the moste sincere color. ', 100.00, 'Valentines', '/VALENTINES/V3.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(40004, 'True love arrangement', 'If you`ve found your true love really you are a really happy man. So it worths celebrating, especially on Valentine`s Day! Not only that you have found what all people seek, whole life, but you`ve also found the perfect gift for her and - the floral arrangement \\\"True love\\\"', 75.00, 'Valentines', '/VALENTINES/V4.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(40005, 'Sweet Valentine', 'You are romantic if sometimes you just want to send her a special bouquet with roses, just to see her smile. ', 75.00, 'Valentines', '/VALENTINES/V5.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(40006, 'Eternity rose', 'Do you remember that specific Disney movie? One of the most beautiful ones, with a really romantic symbol of love: the (almost) eternal rose under the dome. Well, our rose is even better!\n			It will never lose its petals, since you’ve already found true love. Just pick a color, put it into your basket and we will deliver it in an extra big size for people with an XXL heart.', 300.00, 'Valentines', '/VALENTINES/V6.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(50001, 'Pink Story', 'The love story is what inspires us in creating the most delicate bouquet.', 75.00, 'Wedding', '/WEDDING/W1.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(50002, 'Table decoration', 'A floral arrangementmade of pink minirosa, purple roses, pink and purple lisianthus, white gladiolus, dendrobium orchidee, wax flower and a high vase. All thease will express the sincerity and purity of joining two destinies through the institution of marriage. ', 92.00, 'Wedding', '/WEDDING/W2.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(50003, 'Vintage table arrangement', 'Vintage table arrangement specifically designed for a vintage event, made to amaze through originality and color.', 60.00, 'Wedding', '/WEDDING/W3.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(50004, 'Autumn wedding arrangement', 'Autumn Wedding Arrangements for the most important event of your life. Choose to give joy to your guests with flowers in shades of autumn, colorful and special. ', 67.00, 'Wedding', '/WEDDING/W4.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(50005, 'Painting', 'Like a painting in it`s finest colors, chose the most delicate and colorful flowers for your unforgettable day!', 115.00, 'Wedding', '/WEDDING/W5.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(50006, 'Passion', 'Passion, love, refinement. The elements that form your story.', 63.00, 'Wedding', '/WEDDING/W6.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(50007, 'Smile', 'The best day is when you say \\\"YES\\\".', 65.00, 'Wedding', '/WEDDING/W7.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(60001, 'Tulip', 'Tulip', 5.00, 'Custom', '/CUSTOM/C1.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(60002, 'Rose', 'Rose', 7.00, 'Custom', '/CUSTOM/C2.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(60003, 'Cala', 'Cala', 6.00, 'Custom', '/CUSTOM/C3.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(60004, 'Lili', 'Lili', 13.00, 'Custom', '/CUSTOM/C4.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(60005, 'Orchid', 'Orchid', 4.00, 'Custom', '/CUSTOM/C5.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(60006, 'Freesia', 'Freesia', 4.00, 'Custom', '/CUSTOM/C6.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(60007, 'Carnation', 'Carnation', 3.00, 'Custom', '/CUSTOM/C7.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(60008, 'Gerbera', 'Gerbera', 5.00, 'Custom', '/CUSTOM/C8.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(60009, 'Iris', 'Iris', 6.00, 'Custom', '/CUSTOM/C9.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28'),
(60010, 'Alstromeria', 'Alstromeria', 6.00, 'Custom', '/CUSTOM/C10.png', '2019-04-15 23:51:28', '2019-04-15 23:51:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `CNP` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `users` (`CNP`, `first_name`, `last-name`, `username`, `email`, `password`, `telephone`, `submit_check`, `created_at`, `updated_at`) VALUES
(1910527384590, 'Alexandru', 'Crisan', 'crtyalex12', 'uiiuiuhuhui@yahoo.com', 'crisal123', '0755544312', '1', '2019-04-17 21:33:29', '2019-04-17 21:33:29'),
(1951214519263, 'Ion', 'Petrescu', 'ion123', 'Ion.Petrescu@yahoo.com', 'ion123', '0711223344', '1', '2019-04-17 21:33:29', '2019-04-17 21:33:29'),
(2940521430997, 'Clara', 'Caramitru', 'clara12', 'Caramitru.Clara@yahoo.com', 'claral123', '0733367589', '1', '2019-04-17 21:33:29', '2019-04-17 21:33:29'),
(2960227357879, 'Cristina', 'Stanescu', 'crtinas123', 'Stanescu.Cristina@yahoo.com', 'cristinal123', '0787654321', '1', '2019-04-17 21:33:29', '2019-04-17 21:33:29');

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
  ADD KEY `order_products_cnp_foreign` (`CNP`),
  ADD KEY `order_products_id_product_foreign` (`id_product`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD UNIQUE KEY `products_name_product_unique` (`name_product`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`CNP`),
  ADD UNIQUE KEY `users_cnp_unique` (`CNP`),
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
  MODIFY `CNP` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_cnp_foreign` FOREIGN KEY (`CNP`) REFERENCES `users` (`CNP`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `order_products_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
