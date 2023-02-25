-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 fév. 2023 à 21:18
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `maisonneuve2295379`
--

-- --------------------------------------------------------

--
-- Structure de la table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(20) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_fr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_fr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `title_fr`, `body`, `body_fr`, `date`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'My first post !', 'Mon premier article !', 'This is my first post !', 'Ceci est mon premier article !', '2023-02-19', 6, '2023-02-19 22:01:41', '2023-02-22 17:42:09'),
(3, 'English Title', 'Titre en Français', 'Content english', 'Contenu français qui dit rien de plus...', '2023-02-21 15:13:53', 2, '2023-02-21 20:13:53', '2023-02-24 21:35:51'),
(5, 'The Validate Method', 'La méthode Validate', 'Is it still working after a few modifications?', 'Après quelques modifications, est-ce que ça fonctionne toujours?', '2023-02-23 11:08:34', 6, '2023-02-23 16:08:34', '2023-02-23 16:08:34'),
(6, 'It\'s only 6 in the morning', 'Il est à peine 6 heures du matin...', 'Coffee is my best friend right now...ZzzzZZzz..', 'Mon café est mon meilleur ami en ce moment...ZZZzzzZZZzz...', '2023-02-23 11:20:48', 6, '2023-02-23 16:20:48', '2023-02-23 17:26:39'),
(7, 'This post is only written in english', '', 'I have written this post only in english because I needed to see if mon conditions were working in Laravel. Seems Like everything is fine. Stay tuned for the french version !', '', '2023-02-23 12:37:38', 6, '2023-02-23 17:37:38', '2023-02-23 17:37:38'),
(10, 'Violets are blue and roses are red', '', 'I don\'t know the rest of the poem', '', '2023-02-23 13:05:47', 1, '2023-02-23 18:05:47', '2023-02-23 18:05:47'),
(14, 'Post that will certainly be deleted', 'Article de blogue qui sera très certainement supprimé dans un très court délai', 'Don\'t attach yourself to this post because it will be deleted for sure.', 'Le titre dit tout. Cet artcile de blogue ne fera pas long feu. Il va être supprimé. C\'est son destin. Amen.', '2023-02-24 16:37:30', 2, '2023-02-24 21:37:30', '2023-02-24 21:37:30'),
(17, 'fgaf', 'haeher', 'effhaerh', 'aehaerh', '2023-02-24 17:08:55', 2, '2023-02-24 22:08:55', '2023-02-24 22:14:39'),
(18, 'cvncvn', '', 'cv  bvb vbm', '', '2023-02-24 17:30:25', 2, '2023-02-24 22:30:25', '2023-02-24 22:30:48'),
(19, 'cvncvn', 'cncvn', '', 'cvncvncvncvnvn', '2023-02-24 17:31:02', 2, '2023-02-24 22:31:02', '2023-02-24 22:31:02');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `ville_id` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `name`, `address`, `phone`, `email`, `birthday`, `ville_id`, `created_at`, `updated_at`, `users_id`) VALUES
(3, 'Brett Olson', '69583 Roselyne Field Apt. 560East Simstad, WY 95343-7301', '1-617-538-6062', 'brett39@example.net', '2007-05-23', 15, '2023-01-25 22:30:27', '2023-02-22 18:53:03', 6),
(4, 'Prof. Urban Koepp', '10484 Stark Manor\nLake Aidanport, MO 56272', '+1-737-694-9566', 'xpurdy@example.net', '2002-10-26', 14, '2023-01-25 22:30:27', '2023-01-25 22:30:27', NULL),
(5, 'Pearlie Windler DDS', '14158 Jennie Hollow Apt. 770\nJessieville, WV 03024-3766', '+1-419-825-5799', 'rice.corine@example.org', '2017-04-13', 13, '2023-01-25 22:30:27', '2023-01-25 22:30:27', NULL),
(6, 'Mr. Shayne Emard', '428 Howell Trafficway\nNew Maeve, WA 64390', '+1-435-953-1350', 'gislason.lucile@example.com', '2006-08-18', 5, '2023-01-25 22:30:27', '2023-01-25 22:30:27', NULL),
(8, 'Walker Carroll', '47740 Clare Way\nSengerstad, ND 96440-1113', '+12189903340', 'hassie86@example.com', '2015-01-14', 9, '2023-01-25 22:30:27', '2023-01-25 22:30:27', NULL),
(9, 'Ms. Lila Gibson DVM', '1919 Macejkovic Light Apt. 763\nWest Orphaberg, MS 38100-6739', '662-245-5458', 'ulises32@example.net', '1992-09-10', 10, '2023-01-25 22:30:27', '2023-01-25 22:30:27', NULL),
(10, 'Ignatius Abshire PhD', '7893 Ruben Stravenue Apt. 496\nArchibaldfurt, WA 33672-1914', '(539) 980-8528', 'torrance27@example.net', '1993-04-08', 9, '2023-01-25 22:30:27', '2023-01-25 22:30:27', NULL),
(11, 'Prof. Maximillian Hermiston IV', '7047 Reinger Mountains\nSouth Julianneton, SD 54291-7189', '+1 (657) 309-0565', 'zdietrich@example.org', '1985-09-23', 9, '2023-01-25 22:30:27', '2023-01-25 22:30:27', NULL),
(12, 'Mr. Jeffry Wiza IV', '7456 Jeffry Port Suite 732\nEichmannmouth, IN 08479', '(218) 546-6908', 'ytremblay@example.org', '1991-05-16', 6, '2023-01-25 22:30:27', '2023-01-25 22:30:27', NULL),
(13, 'Prof. Juliana Krajcik', '71141 Bartoletti Circle Suite 543\nNorth Danyka, WI 24712', '850-428-3474', 'sbechtelar@example.net', '2013-09-09', 6, '2023-01-25 22:30:27', '2023-01-25 22:30:27', NULL),
(14, 'Dr. Arjun Bartoletti', '84205 Odell Ford Suite 107\nArvelbury, OK 88375-5571', '+1 (703) 645-7549', 'maryam.bayer@example.com', '1989-07-14', 7, '2023-01-25 22:30:27', '2023-01-25 22:30:27', NULL),
(15, 'Ms. Felicity Gaylord', '980 Noemie Manors\nSouth Kendall, NH 54453-6447', '484.256.5795', 'gerhard.stanton@example.net', '1982-10-15', 4, '2023-01-25 22:30:27', '2023-01-25 22:30:27', NULL),
(16, 'Ashly Bins', '577 Delmer Mill\nNew Thad, MA 42249-3451', '+1 (862) 265-7543', 'kimberly.maggio@example.net', '1975-05-10', 13, '2023-01-25 22:30:27', '2023-01-25 22:30:27', NULL),
(17, 'Braxton Emmerich', '43864 Hollis Mountains Apt. 563\nNorth Hilbert, NJ 85285-3635', '(913) 808-8657', 'lesly.streich@example.net', '1973-04-18', 7, '2023-01-25 22:30:27', '2023-01-25 22:30:27', NULL),
(18, 'Dr. Macy Bechtelar V', '83627 Tillman Stravenue\nNew Julius, MN 91361', '316.483.7753', 'colleen.cummerata@example.com', '1988-06-07', 10, '2023-01-25 22:30:27', '2023-01-25 22:30:27', NULL),
(19, 'Colton Raynor', '156 Brandyn Neck\nHilpertborough, KY 96507-7801', '303.641.8980', 'lucienne.beer@example.com', '1990-02-07', 6, '2023-01-25 22:30:27', '2023-01-25 22:30:27', NULL),
(20, 'Dr. Aimee Macejkovic', '434 Diego Cliff Apt. 798\nLake Meagan, UT 57207-8101', '660-445-1571', 'kdubuque@example.com', '1981-08-12', 9, '2023-01-25 22:30:27', '2023-01-25 22:30:27', NULL),
(21, 'Royal Larkin', '8568 Skiles Land\nWest Willa, NJ 10927', '(320) 374-7375', 'daniel.quinton@example.org', '1977-01-27', 2, '2023-01-25 22:30:27', '2023-01-25 22:30:27', NULL),
(22, 'Cristian Beahan', '68185 Colin Unions\nEast Johnnyville, OR 01015', '283-685-1449', 'fisher.deven@example.com', '2016-08-12', 6, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(23, 'Kacie Kiehn', '85118 Thiel Valleys Apt. 742\nEast Maureen, TN 68838-3242', '701.565.6898', 'mayert.darion@example.org', '1979-12-10', 12, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(24, 'Prof. Merritt Rempel', '371 Hayden Tunnel Apt. 866\nPort Giles, MI 11950-5714', '+1-458-994-1261', 'ywilderman@example.com', '1980-04-27', 4, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(25, 'Dell Fritsch', '9623 Davis Shore Apt. 778\nOraport, DE 08577-7685', '(734) 954-3959', 'rterry@example.com', '1978-12-02', 10, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(26, 'Prof. Erick Keeling II', '394 Streich Fort\nGreenholtshire, GA 70955', '1-312-695-3340', 'earline95@example.net', '2007-08-18', 13, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(27, 'Madie Reinger', '2548 Davis Ports\nMaxstad, IL 63136-8588', '+17749064793', 'zullrich@example.org', '2007-05-18', 12, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(28, 'Mertie Braun', '56409 West Harbor\nWest Francisfort, MO 19436-3128', '1-719-584-3247', 'qwest@example.com', '1991-12-09', 2, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(29, 'Dr. Kylee Lockman PhD', '273 Ratke Key\nPhoebemouth, CA 24527', '+1 (669) 789-7872', 'bebert@example.com', '1987-12-10', 8, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(30, 'Lauriane Greenfelder', '24861 Prosacco Vista Apt. 130\nMilantown, NM 54865', '765-333-8150', 'rosalee.fadel@example.net', '2014-08-25', 12, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(31, 'Vallie Bahringer', '454 Schmeler Plain\nSouth Bartonport, SC 17492', '360-646-6717', 'ezekiel41@example.com', '1972-06-21', 11, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(32, 'Lon Connelly', '87551 Lemke Inlet\nWest Elianeview, CT 22257', '978-389-2958', 'edach@example.org', '2012-08-21', 4, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(33, 'Amya Thiel', '555 Noemy Valley Apt. 613\nSchulistfort, NC 04634', '+1-304-240-8728', 'auer.lawson@example.com', '1983-03-02', 9, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(34, 'Caterina Smitham', '8288 Skiles Parkway Suite 796\nRusschester, RI 28895-2709', '+1-567-408-5396', 'terry.jarvis@example.com', '1988-11-28', 10, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(35, 'Prof. Sophia Hammes', '864 Schulist Rapids Suite 784\nNew Jermaine, SD 65378-8369', '+1-516-314-4218', 'yhoeger@example.com', '1986-03-27', 14, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(36, 'Lamont Crist', '471 Anderson Glens Apt. 296\nPort Dahlia, CA 90975-7555', '+1.458.850.3302', 'abernathy.helga@example.org', '2002-05-31', 5, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(37, 'Jefferey Kuhn', '16875 Will Trafficway\nSouth Raquel, NY 42337', '+1.463.742.6684', 'lauriane.bartell@example.org', '2017-04-01', 7, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(38, 'Savion Boyer PhD', '4396 Harris Loop\nDellamouth, NM 27871-5022', '209.712.7362', 'jcrooks@example.com', '2011-04-19', 7, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(39, 'Tomas Luettgen', '8878 Selmer Locks\nMurrayberg, WY 37334-3725', '580-424-2818', 'ckozey@example.net', '2004-10-19', 3, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(40, 'Nelson Rath', '666 Keebler Estate Suite 779\nNorth Melba, MO 93065', '(320) 379-7885', 'euna60@example.org', '2008-04-01', 7, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(41, 'Isabell O\'Conner', '47629 Yundt Lodge\nConstantinview, NE 14633-4192', '+1 (757) 878-1181', 'cleve48@example.com', '1987-04-30', 2, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(42, 'Nella Blick IV', '25065 Becker Trafficway Suite 749\nKennedishire, NV 02148', '1-934-871-2877', 'burnice.brakus@example.com', '2003-07-28', 15, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(43, 'Kitty Osinski', '4574 Elissa Rapids Apt. 304\nBrakusburgh, ID 97493-3212', '1-469-209-6948', 'emery52@example.org', '2016-03-20', 15, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(44, 'Miss Abby Kuhlman', '673 Ritchie Street Suite 369\nBuckridgechester, SD 59215', '+1.517.540.6175', 'jaeden52@example.com', '1974-08-15', 1, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(45, 'Demetris Lesch', '79156 O\'Reilly Union Apt. 656\nNorth Providenci, ME 49395-9540', '562-618-4565', 'grant.edd@example.net', '2005-12-31', 13, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(46, 'Johnathon Stroman', '9651 Rocky Ford Apt. 584\nEast Adamton, MO 19201', '(857) 764-2257', 'orie.connelly@example.net', '1982-04-12', 8, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(47, 'Mrs. Margot Schaefer', '81523 Shannon Mountains Suite 727\nNew Cleveport, AL 27175', '585.608.4610', 'albina.hirthe@example.org', '2001-06-17', 14, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(48, 'Mr. Tobin Fritsch III', '19939 Bill Loop\nConsueloland, OH 60452-0060', '854-628-6008', 'aron35@example.com', '1981-05-28', 8, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(49, 'Prof. Marquis Buckridge PhD', '48883 Hirthe Harbors Apt. 187\nWest Maverick, CO 73820-7099', '(216) 777-1738', 'diego56@example.com', '2014-10-24', 7, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(50, 'Sammie Legros', '168 Emard Branch Apt. 647\nKimberlyhaven, NJ 15418-1970', '678.320.4876', 'oreilly.odessa@example.net', '1988-07-10', 6, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(51, 'Ara Hansen', '76825 Durgan Station\nJarredville, VA 61097-4480', '1-516-903-7921', 'santa.hermann@example.net', '1999-12-23', 1, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(52, 'Doug Simonis', '832 Runolfsson Freeway Apt. 755\nLake Anneberg, CA 37104', '281-515-7460', 'kamron.hoeger@example.net', '1992-10-10', 9, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(53, 'Stephen Buckridge', '96177 Waelchi Gateway Suite 843\nPort Pearlineborough, TN 63533-0368', '561.929.8424', 'ceffertz@example.net', '2006-12-24', 2, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(54, 'Shakira Wilkinson', '38851 Violette Road Suite 043\nSanfordfurt, IN 59208-9661', '415-259-6599', 'earlene.von@example.net', '1999-08-27', 14, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(55, 'Dr. Augustine Feeney', '185 Gregory Pine Apt. 328\nEast Rebeka, AK 80798-9813', '954.713.8909', 'hickle.deshaun@example.org', '1970-11-24', 4, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(56, 'Miss Tatyana Lowe', '283 Freida Station Apt. 717\nJesstown, CT 04497-0667', '737-513-8609', 'witting.hiram@example.net', '1991-10-26', 2, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(57, 'Dr. Loren Block', '185 Terrance Keys\nWest Demetrisbury, TN 62812', '+1.512.485.8384', 'deangelo87@example.org', '2006-12-17', 13, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(58, 'Dr. Juliana Johnson', '92896 Satterfield Extensions\nBillieside, DE 52702-7452', '463-988-7293', 'deron.hayes@example.com', '1983-08-25', 12, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(59, 'Timmothy Moen', '39175 Abel Points Suite 569\nCartwrightborough, WA 31157', '1-520-571-6379', 'trever95@example.com', '1999-01-11', 9, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(60, 'Elfrieda Adams', '51278 Hessel Vista\nNew Donnie, IN 16455', '331.450.0487', 'iwaelchi@example.net', '2009-09-14', 7, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(61, 'Dr. Macey Waters', '4599 Laurine Roads\nKohlerstad, MI 40457-2327', '(605) 858-9524', 'justine80@example.net', '2015-04-30', 15, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(62, 'Miss Gina Fritsch IV', '878 Deshaun Gateway\nAbnerburgh, WA 45699-2218', '+1-585-525-1944', 'nvonrueden@example.com', '1999-08-19', 8, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(63, 'Cara Rosenbaum', '97529 Harber Row\nNew Kali, DC 13473', '1-847-928-1254', 'vita30@example.com', '1972-11-20', 6, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(64, 'Prof. Nathanial Mills MD', '103 Schmeler Lights\nWest Brendaborough, CO 70836', '817-429-3064', 'mylene44@example.org', '1993-12-25', 14, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(65, 'Mr. Russel Stracke', '2173 Rebecca Parkway\nLake Eratown, FL 76303-8374', '(407) 609-9642', 'gerlach.elias@example.net', '2017-06-06', 13, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(66, 'Breanna Little', '698 Weissnat Route\nNorth Landenmouth, VA 43841-1920', '+1.908.882.4022', 'bradly.stokes@example.com', '1990-03-13', 10, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(67, 'Emiliano Kovacek Sr.', '47298 Ricardo Loop\nEast Brooklyn, MA 91424-7799', '1-820-230-3087', 'verda87@example.net', '2017-09-14', 7, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(68, 'Raven Blanda', '5221 Schamberger Station Apt. 096\nKesslerland, MI 35674-6699', '941.682.1897', 'qwehner@example.org', '1974-10-10', 12, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(69, 'Jerome Dickinson', '4320 Helmer Keys Suite 415\nMosciskichester, NM 35871-9875', '504.816.3156', 'linda.harber@example.com', '2017-06-24', 2, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(70, 'Tanya Carroll II', '568 Nick Walk\nSouth Margaritaburgh, KS 74305', '+1-863-279-4290', 'romaguera.corene@example.com', '2017-03-12', 4, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(71, 'Eulalia McCullough', '2818 Ocie Coves Apt. 535\nMelvinastad, DE 68558', '(740) 863-7664', 'susie19@example.com', '1973-09-26', 10, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(72, 'Alexandrea Welch', '36020 Dashawn Cove\nOrlandchester, CO 40809', '1-248-795-7275', 'jaunita.heidenreich@example.org', '1972-11-08', 6, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(73, 'Dakota Hintz', '28362 Bergstrom Station\nNorth Tatummouth, IN 26865', '+1-828-280-5985', 'mromaguera@example.org', '1976-09-29', 8, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(74, 'Araceli Boyer', '866 Alden Prairie Apt. 102\nSouth Jamarcus, CT 96099', '567-348-3270', 'austin.cartwright@example.org', '2009-07-14', 14, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(75, 'Dr. Kyler Harris', '3704 Rice Forge\nGorczanyport, MN 48627', '1-346-264-8875', 'anya23@example.net', '1998-05-28', 12, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(76, 'Pat Skiles', '429 Jacobson Hill Suite 535\nNew Jazlyn, NH 28768-9207', '(262) 221-1835', 'cmayert@example.net', '1979-05-02', 10, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(77, 'Prof. Simone Wunsch DDS', '960 Schoen Parks Suite 376\nLake Golden, PA 68401', '(215) 350-0193', 'wilfrid.nader@example.org', '1985-09-02', 14, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(78, 'Dr. Muhammad Rolfson', '90282 Bartell Walk Suite 054\nKuhicview, WI 74346-1316', '1-972-370-7534', 'orie42@example.org', '1994-12-20', 4, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(79, 'Arlo Kilback', '42612 Bianka Trafficway\nNew Fay, NH 86331', '+16086903333', 'kilback.ellen@example.net', '1984-06-19', 10, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(80, 'Nia Glover', '8724 Josh Extension Suite 407\nPort Jadon, NC 63056-0456', '386.825.2028', 'mccullough.jacky@example.com', '1971-09-28', 13, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(81, 'Dr. Leonardo Gutmann', '745 Stefanie Key Suite 831\nSmithburgh, OH 88642', '(830) 742-8242', 'beatty.van@example.org', '1976-07-08', 14, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(82, 'Ashlee Schumm', '31671 Maximillia Walks\nNew Sam, MI 26426', '+1.708.412.7534', 'brad18@example.net', '2003-11-22', 3, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(83, 'Dr. Willis Beier DDS', '9419 Kihn Island Apt. 776\nNew Gilda, FL 19008-3853', '+1 (442) 784-4992', 'jermey16@example.net', '2018-10-23', 12, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(84, 'Eric Ruecker', '783 Jonas Wall Apt. 199\nEast Caleighmouth, RI 85660-9155', '(618) 384-0327', 'nicklaus.morissette@example.com', '1987-06-29', 13, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(85, 'Prof. Oswaldo Walsh', '7012 Auer Vista Suite 814\nCarterburgh, MO 27649-4966', '+18585953688', 'catalina86@example.org', '2022-12-16', 9, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(86, 'Deion Morissette', '302 Deckow Forge Suite 721\nHillston, SD 48188-9107', '1-331-265-0864', 'rosalinda.treutel@example.com', '1979-01-10', 3, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(87, 'Gretchen Dach', '79118 David Trail Apt. 864\nLake Rahsaanmouth, RI 83406-0734', '214.825.8503', 'mbernier@example.com', '1979-07-28', 10, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(88, 'Moises Bechtelar', '972 Dickens Rapid Suite 958\nZackhaven, AZ 46478', '+1 (772) 829-7652', 'ssawayn@example.net', '2007-08-09', 15, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(89, 'Georgiana DuBuque DVM', '2969 Alessandra Overpass Apt. 088\nNew Laverne, MA 34736-1911', '720.325.8068', 'juana91@example.org', '1974-12-08', 12, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(90, 'Freddy Bosco', '13508 Maiya Vista Suite 832\nVonRuedenmouth, WV 81671', '+1-854-682-6831', 'dlakin@example.net', '2004-01-20', 1, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(91, 'Athena Johns', '7224 Harber Plains\nWindlerfurt, WY 47247', '1-815-932-4704', 'tess14@example.org', '2011-12-17', 4, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(92, 'Odessa Renner', '812 Wiza Lodge Apt. 485\nLake Shad, WI 19555', '+1-442-475-8464', 'tremaine.mertz@example.net', '2018-02-07', 6, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(93, 'Jerad Pfeffer', '271 Grimes Island Apt. 761\nWest Jeradmouth, AZ 24899', '(907) 612-5303', 'myron37@example.com', '1970-01-14', 1, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(94, 'Prof. Avery Becker', '446 Abbott Common\nPort Tysonburgh, NJ 82959', '+1-276-496-8699', 'bjohnston@example.org', '1997-06-17', 9, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(95, 'Prof. Jakob Homenick IV', '864 Miller Fords\nPort Garth, MA 14515-6942', '503.436.9940', 'keebler.cali@example.com', '1990-10-17', 9, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(96, 'Meagan Ward', '50223 Paul Roads Suite 339\nSouth Alana, HI 77656-8386', '+1-316-833-3533', 'jlakin@example.org', '1993-09-22', 7, '2023-01-25 22:30:28', '2023-01-25 22:30:28', NULL),
(101, 'Miss Taryn Homesick MD', '69583 Roslyn Field Apt. 560East Simstad, WY 95343-7301', '667-789-7879', 'betty00p@example.net', '1998-06-18', 8, '2023-01-26 19:25:18', '2023-01-26 19:25:56', NULL),
(102, 'Jim-Bob Jones', '69593 Rosy Field Apt. 569 East Simstad, WY 95343-7458', '667-789-7879', 'JimBob@gmail.com', '2004-07-14', 15, '2023-01-30 18:09:35', '2023-01-30 18:10:00', NULL),
(103, 'Miss Taryn Homesick MD', '69583 Roslyn Field Apt. 560East Simstad, WY 95343-7301', '667-789-7878', 'MissMaria@gmail.com', '1982-05-03', 13, '2023-02-19 23:41:41', '2023-02-24 21:31:27', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE `files` (
  `id` int(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_fr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `files`
--

INSERT INTO `files` (`id`, `name`, `name_fr`, `path`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'test file', 'fichier test', 'C:\\xampp\\htdocs\\web21647\\CadricielWeb\\FavreauTommy-TP2\\Maisonneuve2295379\\public\\uploadsFavreauTommy_CV_Version-1.pdf', 2, '2023-02-23 00:09:42', '2023-02-23 00:09:42'),
(2, 'Homework course 3', 'Devoir cours 3', 'C:\\xampp\\htdocs\\web21647\\CadricielWeb\\FavreauTommy-TP2\\Maisonneuve2295379\\public\\uploads/Devoir_cours_3.docx', 2, '2023-02-23 08:26:42', '2023-02-23 08:26:42'),
(3, 'Modified file', '', 'C:\\xampp\\htdocs\\web21647\\CadricielWeb\\FavreauTommy-TP2\\Maisonneuve2295379\\public\\uploads\\Frame 1.pdf', 2, '2023-02-23 08:28:39', '2023-02-24 21:33:59'),
(6, '', 'Devoir cours 3', 'C:\\xampp\\htdocs\\web21647\\CadricielWeb\\FavreauTommy-TP2\\Maisonneuve2295379\\public\\uploads\\Devoir_cours_3.docx', 1, '2023-02-23 22:09:53', '2023-02-23 22:09:53'),
(10, '', 'Carte au trésor!!!', 'C:\\xampp\\htdocs\\web21647\\CadricielWeb\\FavreauTommy-TP2\\Maisonneuve2295379\\public\\uploads\\Consignes_entrevues_fimees.docx', 1, '2023-02-24 23:13:10', '2023-02-24 23:13:10'),
(11, 'Treasure Map', '', 'C:\\xampp\\htdocs\\web21647\\CadricielWeb\\FavreauTommy-TP2\\Maisonneuve2295379\\public\\uploads\\Devoir_cours_1.docx', 1, '2023-02-24 23:13:33', '2023-02-24 23:13:33');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_22_175209_create_villes_table', 1),
(6, '2023_01_22_175254_create_etudiants_table', 1),
(7, '2023_02_19_205001_create_blogs_table', 2),
(8, '2023_02_22_144347_create_files_table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tammy', 'MissMaria@gmail.com', NULL, '$2y$10$BdrXORVsk7aV5v.9LQU/Ce3TETANlvtt3hhK13rHKdjUZZmNEjuO6', NULL, '2023-02-20 00:02:23', '2023-02-24 23:24:47'),
(2, 'Jim', 'JimBob@gmail.com', NULL, '$2y$10$u1Qs4mltqZ43u35QeJAMV.Ofo6NgylmRy4a8C4waYD1RZtSzPEp5W', NULL, '2023-02-20 00:07:40', '2023-02-24 19:59:57'),
(6, 'Brett', 'brett39@example.net', NULL, '$2y$10$SE6A7FQZaI.ufVLNHoLKVuZiR54xtRtTjqlWIAvlvrwVkct91dat.', NULL, '2023-02-20 01:33:33', '2023-02-20 01:33:33');

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `id` int(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'South Metamouth', '2023-01-25 22:30:14', '2023-01-25 22:30:14'),
(2, 'New Edmondmouth', '2023-01-25 22:30:14', '2023-01-25 22:30:14'),
(3, 'Port Boydport', '2023-01-25 22:30:14', '2023-01-25 22:30:14'),
(4, 'Welchborough', '2023-01-25 22:30:14', '2023-01-25 22:30:14'),
(5, 'Brandonfurt', '2023-01-25 22:30:14', '2023-01-25 22:30:14'),
(6, 'Bayerstad', '2023-01-25 22:30:14', '2023-01-25 22:30:14'),
(7, 'Hillsstad', '2023-01-25 22:30:14', '2023-01-25 22:30:14'),
(8, 'North Gracie', '2023-01-25 22:30:14', '2023-01-25 22:30:14'),
(9, 'Hyattfurt', '2023-01-25 22:30:14', '2023-01-25 22:30:14'),
(10, 'New Nicklaustown', '2023-01-25 22:30:14', '2023-01-25 22:30:14'),
(11, 'Lake Trevionmouth', '2023-01-25 22:30:14', '2023-01-25 22:30:14'),
(12, 'Lake Gabe', '2023-01-25 22:30:14', '2023-01-25 22:30:14'),
(13, 'Simonisfort', '2023-01-25 22:30:14', '2023-01-25 22:30:14'),
(14, 'Nitzschechester', '2023-01-25 22:30:14', '2023-01-25 22:30:14'),
(15, 'McDermottmouth', '2023-01-25 22:30:14', '2023-01-25 22:30:14');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_etudiants_users1_idx` (`users_id`),
  ADD KEY `etudiants_ville_id_foreign` (`ville_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_files_users1_idx` (`users_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD CONSTRAINT `etudiants_ville_id_foreign` FOREIGN KEY (`ville_id`) REFERENCES `villes` (`id`),
  ADD CONSTRAINT `fk_etudiants_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `fk_files_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `users_id` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
