-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:50016
-- Generation Time: Mar 06, 2020 at 11:06 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `localdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `alcohol_category`
--

CREATE TABLE `alcohol_category` (
  `alcohol_category_id` int(11) NOT NULL,
  `alcohol_category_code` varchar(45) DEFAULT NULL,
  `alcohol_category_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alcohol_category`
--

INSERT INTO `alcohol_category` (`alcohol_category_id`, `alcohol_category_code`, `alcohol_category_name`) VALUES
(1, '2', 'sunt'),
(2, '3', 'vero'),
(3, '2', 'in'),
(4, '6', 'repellat'),
(5, '9', 'dolore'),
(6, '3', 'assumenda'),
(7, '1', 'qui'),
(8, '8', 'eum'),
(9, '2', 'qui'),
(10, '4', 'omnis'),
(11, '7', 'officia'),
(12, '8', 'architecto'),
(13, '5', 'dignissimos'),
(14, '7', 'vitae'),
(15, '1', 'ipsam'),
(16, '6', 'esse'),
(17, '6', 'quos'),
(18, '9', 'rerum'),
(19, '4', 'quidem'),
(20, '8', 'officiis'),
(21, '9', 'illo'),
(22, '4', 'vitae'),
(23, '3', 'laudantium'),
(24, '5', 'voluptates'),
(25, '7', 'placeat');

-- --------------------------------------------------------

--
-- Table structure for table `alcohol_inventory`
--

CREATE TABLE `alcohol_inventory` (
  `alcohol_inventory_id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `alcohol_category_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `food_unit_id` int(11) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `cost` decimal(10,2) DEFAULT NULL,
  `begin` decimal(10,2) DEFAULT NULL,
  `purchased` decimal(10,2) DEFAULT NULL,
  `end` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alcohol_inventory`
--

INSERT INTO `alcohol_inventory` (`alcohol_inventory_id`, `company_id`, `alcohol_category_id`, `vendor_id`, `food_unit_id`, `description`, `cost`, `begin`, `purchased`, `end`) VALUES
(1, 1, 1, 1, 15, 'Let me think: was I the same year for such a subject! Our family always HATED cats: nasty, low, vulg', '0.00', '22001639.63', '206.01', '5631707.49'),
(2, 2, 2, 2, 16, 'Some of the earth. Let me see--how IS it to the voice of thunder, and people began running about in ', '1434.61', '2288460.80', '58869678.18', '523.32'),
(3, 3, 3, 3, 17, 'I wonder who will put on her spectacles, and began by producing from under his arm a great deal of t', '19759324.45', '76195.15', '547987.14', '0.00'),
(4, 4, 4, 4, 18, 'Hatter dropped his teacup instead of the jurymen. \'It isn\'t mine,\' said the Cat: \'we\'re all mad here', '568.65', '625666.04', '30612.00', '197.16'),
(5, 5, 5, 5, 19, 'Mind now!\' The poor little thing grunted in reply (it had left off staring at the Gryphon said to on', '63.00', '988573.00', '279434.30', '1360.44'),
(6, 6, 6, 6, 20, 'Gryphon. \'Then, you know,\' the Mock Turtle, capering wildly about. \'Change lobsters again!\' yelled t', '249776.00', '120.30', '9781983.10', '6.44'),
(7, 7, 7, 7, 21, 'I should frighten them out with trying, the poor little thing grunted in reply (it had left off when', '14793.24', '7969.84', '0.00', '5666.31'),
(8, 8, 8, 8, 22, 'Very soon the Rabbit came up to the end of trials, \"There was some attempts at applause, which was a', '42.00', '99999999.99', '39.60', '34.70'),
(9, 9, 9, 9, 23, 'Gryphon; and then treading on my tail. See how eagerly the lobsters and the Dormouse go on for some ', '295.39', '15.12', '53881.51', '99999999.99'),
(10, 10, 10, 10, 24, 'Alice was beginning to see the Mock Turtle said: \'I\'m too stiff. And the Eaglet bent down its head d', '0.00', '0.00', '7084.00', '0.00'),
(11, 11, 11, 11, 15, 'WHAT things?\' said the Gryphon, and, taking Alice by the little golden key, and unlocking the door a', '1774975.22', '49910699.72', '0.52', '50458605.41'),
(12, 12, 12, 12, 16, 'King said to herself, as usual. I wonder what I say--that\'s the same thing as \"I sleep when I was a ', '0.00', '2.99', '99999999.99', '328.96'),
(13, 13, 13, 13, 17, 'It quite makes my forehead ache!\' Alice watched the White Rabbit hurried by--the frightened Mouse sp', '75.00', '4.00', '7650.28', '62591181.37'),
(14, 14, 14, 14, 18, 'Alice, \'when one wasn\'t always growing larger and smaller, and being so many different sizes in a lo', '2899044.23', '5918357.70', '2318703.02', '11.26'),
(15, 15, 15, 15, 19, 'The moment Alice appeared, she was now about a foot high: then she walked down the bottle, she found', '7.47', '46952757.53', '38.89', '703.27'),
(16, 16, 16, 16, 20, 'Dormouse turned out, and, by the end of half an hour or so there were any tears. No, there were no t', '17.35', '92321.80', '626.99', '557591.59'),
(17, 17, 17, 17, 21, 'Duck. \'Found IT,\' the Mouse in the wood, \'is to grow to my jaw, Has lasted the rest of the edge of t', '63.23', '9477463.66', '33.30', '99999999.99'),
(18, 18, 18, 18, 22, 'Alice in a trembling voice, \'Let us get to twenty at that rate! However, the Multiplication Table do', '4.62', '23528.00', '868.70', '32.80'),
(19, 19, 19, 19, 23, 'Queen\'s hedgehog just now, only it ran away when it had lost something; and she tried hard to whistl', '344.40', '5403068.89', '1513411.32', '14024424.79'),
(20, 20, 20, 20, 24, 'Alice in a deep voice, \'are done with blacking, I believe.\' \'Boots and shoes under the circumstances', '731.39', '574036.70', '10024.74', '0.04'),
(21, 21, 21, 21, 15, 'Alice alone with the Queen furiously, throwing an inkstand at the house, and found in it about four ', '45125800.62', '467248.00', '33600382.83', '2330641.79'),
(22, 22, 22, 22, 16, 'Dodo solemnly presented the thimble, saying \'We beg your pardon!\' she exclaimed in a large fan in th', '48160.00', '98386.05', '1.64', '0.63'),
(23, 23, 23, 23, 17, 'This seemed to listen, the whole party at once crowded round her head. \'If I eat or drink anything; ', '0.00', '0.54', '5627.92', '88967.63'),
(24, 24, 24, 24, 18, 'Alice had no reason to be executed for having cheated herself in Wonderland, though she felt that sh', '2.80', '439.92', '56391.67', '1479623.19'),
(25, 25, 25, 25, 19, 'Alice cautiously replied, not feeling at all the jurors were all talking together: she made it out i', '99999999.99', '6037.33', '142.81', '4163.49'),
(26, 26, 1, 26, 20, 'And I declare it\'s too bad, that it ought to be found: all she could not remember ever having heard ', '1476.69', '7.55', '383.00', '99999999.99'),
(27, 27, 2, 27, 21, 'Hatter. This piece of bread-and-butter in the same thing,\' said the King, the Queen, the royal child', '153.63', '23411.11', '44.96', '11.81'),
(28, 28, 3, 28, 22, 'I shall remember it in a long, low hall, which was immediately suppressed by the officers of the cou', '99999999.99', '6.55', '4.50', '0.00'),
(29, 29, 4, 29, 23, 'Long Tale They were indeed a queer-looking party that assembled on the table. \'Have some wine,\' the ', '21476526.45', '428.43', '99999999.99', '8193327.71'),
(30, 30, 5, 30, 24, 'Caterpillar. Alice said with some curiosity. \'What a pity it wouldn\'t stay!\' sighed the Lory, as soo', '47846.88', '45475374.05', '4.77', '1637633.04'),
(31, 31, 6, 31, 15, 'I shall see it trot away quietly into the wood to listen. \'Mary Ann! Mary Ann!\' said the Cat. \'I\'d n', '2.64', '85405066.95', '5794.84', '1971.05'),
(32, 32, 7, 32, 16, 'And oh, I wish you would seem to encourage the witness at all: he kept shifting from one foot to the', '4628463.45', '5365925.05', '2450.45', '1016.00'),
(33, 33, 8, 33, 17, 'Gryphon answered, very nearly in the sea!\' cried the Mouse, who was gently brushing away some dead l', '27558820.00', '34084253.36', '3.10', '97362126.41'),
(34, 34, 9, 34, 18, 'Dinah, tell me your history, she do.\' \'I\'ll tell it her,\' said the Gryphon, the squeaking of the tab', '115.74', '1264574.39', '73.65', '103422.56'),
(35, 35, 10, 35, 19, 'I am now? That\'ll be a queer thing, to be Involved in this way! Stop this moment, and fetch me a goo', '0.00', '99999999.99', '1287668.63', '66153.90'),
(36, 36, 11, 36, 20, 'VERY wide, but she felt unhappy. \'It was a queer-shaped little creature, and held it out loud. \'Thin', '0.00', '1535968.20', '316.19', '1.04'),
(37, 37, 12, 37, 21, 'Alice replied, rather shyly, \'I--I hardly know, sir, just at present--at least I know all the right ', '99999999.99', '99999999.99', '235908.50', '15496360.09'),
(38, 38, 13, 38, 22, 'Alice did not get hold of anything, but she could even make out exactly what they said. The executio', '43234303.15', '208.18', '41280.67', '3568256.73'),
(39, 39, 14, 39, 23, 'THAT. Then again--\"BEFORE SHE HAD THIS FIT--\" you never had fits, my dear, I think?\' \'I had NOT!\' cr', '12.48', '4.30', '99999999.99', '59.00'),
(40, 40, 15, 40, 24, 'Drawling-master was an old woman--but then--always to have changed since her swim in the prisoner\'s ', '2832.24', '0.00', '6246.10', '0.98'),
(41, 41, 16, 41, 15, 'Mouse, who was talking. \'How CAN I have done that?\' she thought. \'I must be growing small again.\' Sh', '0.00', '0.00', '63.37', '6716.08'),
(42, 42, 17, 42, 16, 'Mock Turtle sighed deeply, and drew the back of one flapper across his eyes. \'I wasn\'t asleep,\' he s', '106.45', '35.77', '99999999.99', '121.85'),
(43, 43, 18, 43, 17, 'Queen added to one of the hall: in fact she was in the pool, \'and she sits purring so nicely by the ', '7.14', '6476664.20', '2.32', '4072.10'),
(44, 44, 19, 44, 18, 'Panther were sharing a pie--\' [later editions continued as follows The Panther took pie-crust, and g', '0.00', '0.00', '788496.96', '67629.34'),
(45, 45, 20, 45, 19, 'Exactly as we needn\'t try to find my way into that lovely garden. First, however, she went on growin', '0.00', '2455739.54', '20.97', '284984.54'),
(46, 46, 21, 46, 20, 'HE went mad, you know--\' She had not gone (We know it was done. They had not gone much farther befor', '235632.00', '294.85', '137.62', '1.50'),
(47, 47, 22, 47, 21, 'Hatter said, turning to the Duchess: \'what a clear way you can;--but I must go and get in at the rig', '8456.45', '3.95', '3726.98', '466307.00'),
(48, 48, 23, 48, 22, 'YOUR temper!\' \'Hold your tongue!\' added the Dormouse. \'Don\'t talk nonsense,\' said Alice angrily. \'It', '225.75', '0.00', '5310159.99', '99999999.99'),
(49, 49, 24, 49, 23, 'I\'m never sure what I\'m going to give the prizes?\' quite a large piece out of the e--e--evening, Bea', '61.40', '0.00', '0.00', '40718528.54'),
(50, 50, 25, 50, 24, 'Tortoise--\' \'Why did you do lessons?\' said Alice, \'a great girl like you,\' (she might well say that ', '2731.30', '519.08', '23882.94', '1216034.78');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(45) DEFAULT NULL,
  `address_1` varchar(100) DEFAULT NULL,
  `address_2` varchar(100) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `zip` varchar(15) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `target_food_cost_percentage` decimal(10,2) DEFAULT NULL,
  `target_alcohol_cost_percentage` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `address_1`, `address_2`, `city`, `state`, `zip`, `country`, `phone`, `email`, `fax`, `target_food_cost_percentage`, `target_alcohol_cost_percentage`) VALUES
(1, 'Schinner, Kerluke and Beatty', '2295 Schmeler Square', 'Suite 044', 'South Prince', 'Washington', '50743', 'Somalia', '1-467-182-5559x109', 'dernser@example.org', '1-548-995-0140x275', '78621463.90', '3.51'),
(2, 'Fadel, Aufderhar and Hartmann', '59804 Williamson Villages', 'Apt. 513', 'Ivahport', 'Arkansas', '79154-4573', 'Papua New Guinea', '764-476-1651', 'abuckridge@example.org', '05519105928', '28079520.64', '14653.20'),
(3, 'Walter, Hermiston and Murphy', '5120 D\'Amore Cape', 'Suite 015', 'Lake Teagan', 'Idaho', '22825-3053', 'Tanzania', '1-302-347-0659x963', 'golden.morar@example.net', '06335573325', '2193.32', '146.75'),
(4, 'D\'Amore, Lang and Fritsch', '874 McLaughlin Fall', 'Suite 128', 'Port Chaya', 'Tennessee', '42583', 'Kazakhstan', '811-722-2855x245', 'dora.dietrich@example.com', '476.028.6869', '12292927.44', '1.20'),
(5, 'Gleason, O\'Hara and Turcotte', '533 Schumm Spur', 'Apt. 537', 'Port Vladimir', 'Hawaii', '19070-6591', 'Turkey', '483.751.0952', 'emmitt.buckridge@example.org', '04586457635', '3869.10', '26137.00'),
(6, 'Lynch-Purdy', '557 Effertz Mews', 'Suite 183', 'Monicachester', 'Kentucky', '37394', 'Cook Islands', '934-703-0845', 'uharris@example.org', '1-208-997-3482', '99999999.99', '99999999.99'),
(7, 'Corkery Group', '711 Alexie Lodge Suite 258', 'Apt. 704', 'Leilaniberg', 'Arkansas', '21278', 'Equatorial Guinea', '508-330-6906x14317', 'hodkiewicz.alvera@example.org', '1-575-697-0531', '89654.61', '0.00'),
(8, 'Kerluke, Weimann and Crooks', '91121 Loy Crescent', 'Suite 384', 'Leannonberg', 'NewMexico', '21009-2427', 'Swaziland', '252-893-9053', 'martine.mitchell@example.com', '1-529-918-2141x483', '0.00', '5.00'),
(9, 'Abshire-Leannon', '15472 Tevin Loaf Suite 712', 'Suite 791', 'Heathcotetown', 'Wyoming', '68796', 'United States Virgin Islands', '670-253-6950', 'brice@example.net', '05428734470', '0.00', '209517.69'),
(10, 'Muller, Kub and Durgan', '1520 Dibbert Radial Apt. 800', 'Suite 968', 'Laneyville', 'NewHampshire', '35278', 'Saint Pierre and Miquelon', '+20(9)2278156401', 'bryce39@example.org', '375.105.8435x850', '1.53', '11.00'),
(11, 'Simonis-Dickinson', '2399 Mertz Stravenue', 'Suite 302', 'Botsfordport', 'Oklahoma', '99238', 'Saint Pierre and Miquelon', '1-438-093-7535x974', 'glover.aron@example.net', '1-114-087-2747x28678', '810.55', '0.26'),
(12, 'Schultz LLC', '7428 Lilly Fort Apt. 621', 'Suite 263', 'Port Patview', 'Connecticut', '88332-2387', 'New Zealand', '08021261785', 'kiehn.raheem@example.org', '(119)227-7463x01754', '4425343.00', '32110517.05'),
(13, 'Jakubowski, Mann and Leannon', '244 Rempel Mount Suite 943', 'Suite 190', 'Twilamouth', 'Massachusetts', '97959', 'Svalbard & Jan Mayen Islands', '816.110.0427x33528', 'balistreri.elmer@example.com', '924.620.5007x665', '1626962.19', '1796665.94'),
(14, 'Wisoky LLC', '2328 Reichert Parkways', 'Apt. 310', 'Brakusburgh', 'California', '33778', 'Dominican Republic', '09702299942', 'julie34@example.org', '(207)001-3164x54962', '1172834.10', '1155.11'),
(15, 'Murray and Sons', '72835 Kulas Parkways Suite 476', 'Apt. 981', 'Emmerichland', 'Vermont', '89238', 'Vietnam', '365-398-3630x390', 'carroll.henriette@example.org', '1-355-232-1825x242', '99999999.99', '78911947.00'),
(16, 'Kuhn, Pagac and Medhurst', '57162 O\'Hara Burgs', 'Suite 024', 'North Karashire', 'Maine', '87676-5967', 'Guinea', '392.510.4806x3951', 'carlo55@example.net', '062-262-6161x496', '208.12', '32608510.58'),
(17, 'Douglas Inc', '0017 Turcotte River Suite 678', 'Apt. 515', 'Darbyshire', 'Montana', '69869-1052', 'Germany', '1-868-705-1267', 'lkeebler@example.com', '539.841.0588x21088', '78281.12', '0.00'),
(18, 'Gottlieb-Maggio', '271 Jillian Vista Apt. 934', 'Suite 453', 'Port Aryanna', 'Idaho', '26981', 'Saint Lucia', '+27(0)8826599396', 'lourdes.hahn@example.com', '1-470-491-7524x90555', '0.00', '0.00'),
(19, 'Zemlak, Douglas and Volkman', '190 Stark Drive Suite 358', 'Apt. 295', 'Wizamouth', 'RhodeIsland', '46167', 'Monaco', '120.433.9291x7031', 'alvah48@example.com', '(142)947-2054', '1128.55', '55595.59'),
(20, 'King, Kreiger and Wolf', '4456 Ernest Crest', 'Suite 260', 'New Dallinton', 'NewJersey', '88348-8080', 'Hungary', '1-683-000-2763x98445', 'aglae24@example.org', '958-934-0964', '4310.45', '0.00'),
(21, 'Wuckert-Connelly', '0768 Eichmann Ridges', 'Apt. 791', 'North Phoebe', 'Pennsylvania', '28044', 'Sudan', '463-574-7397x920', 'marguerite.moore@example.net', '118.353.1113x5255', '0.00', '70634.71'),
(22, 'Kuhic-Kiehn', '043 Wilson Pike', 'Suite 385', 'West Carlishire', 'Illinois', '33883-0014', 'Uganda', '(076)568-9386x8735', 'wiegand.kyleigh@example.com', '+45(6)5163619367', '43209123.20', '0.00'),
(23, 'Buckridge, Terry and Zulauf', '50410 Volkman Meadows', 'Apt. 519', 'Douglasstad', 'Washington', '78393', 'Bouvet Island (Bouvetoya)', '+92(8)3271378828', 'wshanahan@example.org', '(486)591-5214', '50505.32', '8596822.76'),
(24, 'Thiel and Sons', '9104 Mosciski Lights Apt. 294', 'Suite 083', 'West Coryhaven', 'Georgia', '13600-4365', 'Nepal', '04853924099', 'madonna.boehm@example.com', '+24(3)0707471443', '133.40', '0.00'),
(25, 'Waters-Hamill', '009 Morar Rapids Apt. 236', 'Suite 928', 'Port Eda', 'Texas', '54604-1623', 'Djibouti', '1-594-263-0304', 'malinda.stamm@example.org', '488-747-7935x4182', '0.00', '147372.69'),
(26, 'McCullough Group', '190 Colleen Lodge Suite 357', 'Suite 332', 'Mayertmouth', 'NewMexico', '54109-3125', 'Guernsey', '(154)484-5802x19412', 'volkman.broderick@example.org', '339.860.5016', '215.35', '0.00'),
(27, 'Conn Inc', '41502 O\'Conner Lodge', 'Apt. 068', 'New Trudietown', 'California', '78394', 'Mozambique', '032.557.6233', 'gisselle76@example.org', '937-926-4175x4438', '14.34', '0.00'),
(28, 'Hermann, Gislason and Davis', '90695 Evie Stream Apt. 471', 'Apt. 249', 'VonRuedenberg', 'Nevada', '06182', 'Hungary', '09594027309', 'dwilderman@example.com', '07119708844', '2655425.61', '87740.00'),
(29, 'Jaskolski-Bradtke', '74287 Emerson Alley', 'Suite 786', 'Lake Wellington', 'NewHampshire', '41449', 'Syrian Arab Republic', '(984)722-0603x71184', 'abshire.elijah@example.com', '1-541-275-4713x8697', '0.00', '324796.28'),
(30, 'Gerhold, Pouros and Murazik', '361 Nitzsche Locks', 'Suite 376', 'North Jeromeshire', 'NewMexico', '95624', 'Christmas Island', '1-609-007-6171', 'mueller.wayne@example.org', '1-949-486-6476x997', '44638.15', '2.00'),
(31, 'Ullrich PLC', '961 Renner Valleys Apt. 303', 'Suite 363', 'East Eloisa', 'Delaware', '86399', 'Reunion', '671.937.0006x80830', 'savanah00@example.com', '402.034.4732x8394', '0.00', '4763.18'),
(32, 'Kautzer-Leannon', '1276 Rice Square Suite 025', 'Suite 702', 'Port Jettview', 'Missouri', '01626-3222', 'Wallis and Futuna', '482.364.2550', 'iva.trantow@example.com', '(572)930-2126x96505', '12.66', '1683.36'),
(33, 'Blick-Miller', '0154 Hayes Gateway', 'Apt. 603', 'Owenstad', 'Minnesota', '15865', 'Equatorial Guinea', '+13(4)6893892804', 'pattie.hettinger@example.com', '1-843-068-7108x38780', '0.13', '912187.85'),
(34, 'Ward-Conroy', '8069 Grant Crossroad', 'Apt. 699', 'East Jena', 'Massachusetts', '36644-1497', 'Svalbard & Jan Mayen Islands', '694-544-8899', 'barrows.mustafa@example.org', '061-277-4286', '3.23', '94374.52'),
(35, 'Trantow-Langworth', '0631 Weber Plaza', 'Suite 855', 'West Howard', 'Colorado', '51558', 'Colombia', '417-698-9081', 'zgreenfelder@example.org', '1-716-532-0003x3497', '0.00', '58537785.39'),
(36, 'Keeling, Hodkiewicz and Langworth', '796 Samanta Shores', 'Apt. 482', 'West Jerrellfort', 'Idaho', '14002-7275', 'Venezuela', '(170)836-1139x049', 'marty62@example.org', '634-126-3772', '7.00', '99999999.99'),
(37, 'Becker, Prosacco and Bradtke', '1085 Turner Ville', 'Apt. 269', 'East Wendellton', 'NewMexico', '66656', 'San Marino', '401-217-3025x22342', 'iraynor@example.com', '124.869.0699', '601553.32', '189103.04'),
(38, 'Moore-Schowalter', '24390 Spencer Forks', 'Suite 796', 'North Isabellaview', 'NewJersey', '36575', 'Palestinian Territory', '156.960.5714', 'halie.mitchell@example.com', '1-224-282-7078x041', '693462.56', '4757780.00'),
(39, 'Strosin, Wehner and Toy', '9813 Schmeler Trafficway Apt. 591', 'Suite 494', 'Keeleyside', 'Iowa', '48687-2040', 'Moldova', '+13(2)3270543020', 'littel.bo@example.com', '470.205.9469x070', '1607309.69', '6272.36'),
(40, 'Wisoky, Bernier and Lehner', '299 Adams Terrace Apt. 824', 'Apt. 653', 'New Bernieceview', 'Arizona', '89158-4413', 'Uzbekistan', '963.394.8234', 'violette71@example.net', '(646)101-3538x4016', '44.90', '19650938.03'),
(41, 'Hessel-Hettinger', '36108 Roberta Row Apt. 412', 'Apt. 536', 'Lake Fernbury', 'Hawaii', '60146-1935', 'Liechtenstein', '088.357.7253x7872', 'sabryna49@example.net', '1-344-664-8946x62814', '99999999.99', '20115.79'),
(42, 'Stanton, Bauch and Bins', '656 Raina Mall', 'Apt. 367', 'Cynthiaside', 'Massachusetts', '26382', 'Cyprus', '968.881.6603x411', 'rcollier@example.com', '684.713.3493', '44.37', '879941.92'),
(43, 'Feil-Wintheiser', '80862 Madisen Corners', 'Apt. 500', 'Port Arch', 'Montana', '48088', 'Morocco', '(221)877-2957x226', 'lori.stokes@example.com', '165-603-2201', '51610.14', '448353.10'),
(44, 'Langworth-Ondricka', '86351 Mike Land', 'Suite 370', 'Lilliebury', 'Utah', '64816', 'Saint Kitts and Nevis', '659.478.3566x488', 'williamson.rupert@example.org', '1-450-009-0685x01955', '987096.00', '3.27'),
(45, 'Bashirian Group', '34813 Feeney Shoal Apt. 993', 'Suite 037', 'Schimmelville', 'Arkansas', '80356', 'Seychelles', '06633450582', 'tromp.ryann@example.org', '411.572.0291x02146', '75680024.48', '4865.36'),
(46, 'Zboncak, Effertz and Schroeder', '66432 Sonia Drive', 'Suite 118', 'Gaylordview', 'Arkansas', '26563-8539', 'Lebanon', '252-635-5026x1696', 'grant.daryl@example.net', '190.423.8305x9715', '0.00', '1968568.81'),
(47, 'Lynch, Heathcote and Dach', '2477 Okuneva Cove', 'Suite 287', 'Lake Camilaland', 'Oklahoma', '62931', 'Ecuador', '444-638-5696x572', 'aurore.mitchell@example.net', '781.124.1637', '315.09', '273101.95'),
(48, 'Boyle, Swaniawski and Pfeffer', '213 Casper Wall Apt. 145', 'Suite 177', 'Bergeton', 'Colorado', '87031', 'Latvia', '398-776-4157x57123', 'adrien.schulist@example.net', '(867)284-0194x967', '66066.41', '99999999.99'),
(49, 'Feil, O\'Hara and Dare', '2488 Goyette Wall Suite 896', 'Apt. 633', 'South Kathryn', 'Michigan', '47532-4240', 'Romania', '510-491-0555x407', 'bartoletti.isabell@example.com', '206-414-6023', '2385262.38', '3349835.79'),
(50, 'Huels, Bauch and Lehner', '85132 Bahringer Viaduct Suite 070', 'Apt. 321', 'Bauchfurt', 'NewJersey', '26186-6111', 'Taiwan', '+08(9)1372757423', 'dante.schneider@example.org', '08042883001', '16022.70', '7358324.13');

-- --------------------------------------------------------

--
-- Table structure for table `cost_of_goods`
--

CREATE TABLE `cost_of_goods` (
  `cost_of_goods_id` int(11) NOT NULL,
  `dashboard_data_id` int(11) NOT NULL,
  `entry_date` datetime DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cost_of_goods`
--

INSERT INTO `cost_of_goods` (`cost_of_goods_id`, `dashboard_data_id`, `entry_date`, `vendor_id`, `company_id`, `invoice_id`, `amount`, `type`) VALUES
(53, 1, '2020-02-02 00:00:00', 1, 1, 1, '103.92', 'difference'),
(54, 2, '2020-01-20 00:00:00', 2, 2, 2, '103.47', 'intention'),
(55, 3, '2020-02-07 00:00:00', 3, 3, 3, '144.53', 'applied'),
(56, 4, '2020-01-28 00:00:00', 4, 4, 4, '193.28', 'hypothesize'),
(57, 5, '2020-01-08 00:00:00', 5, 5, 5, '163.19', 'egg white'),
(58, 6, '2020-01-30 00:00:00', 6, 6, 6, '172.72', 'pyramid'),
(59, 7, '2020-01-23 00:00:00', 7, 7, 7, '153.45', 'drill'),
(60, 8, '2020-01-26 00:00:00', 8, 8, 8, '189.85', 'imperial'),
(61, 9, '2020-01-27 00:00:00', 9, 9, 9, '169.94', 'horror'),
(62, 10, '2020-01-07 00:00:00', 10, 10, 10, '113.77', 'hypnothize'),
(63, 11, '2020-02-08 00:00:00', 11, 11, 11, '196.70', 'exploit'),
(64, 12, '2020-02-15 00:00:00', 12, 12, 12, '159.37', 'proclaim'),
(65, 13, '2020-01-02 00:00:00', 13, 13, 13, '156.96', 'crouch'),
(66, 14, '2020-02-09 00:00:00', 14, 14, 14, '149.07', 'digital'),
(67, 15, '2020-01-28 00:00:00', 15, 15, 15, '188.95', 'miracle'),
(68, 16, '2020-01-26 00:00:00', 16, 16, 16, '170.50', 'imagine'),
(69, 17, '2020-02-04 00:00:00', 17, 17, 17, '194.14', 'space'),
(70, 18, '2020-01-16 00:00:00', 18, 18, 18, '139.81', 'low'),
(71, 19, '2020-02-10 00:00:00', 19, 19, 19, '191.72', 'stimulation'),
(72, 20, '2020-01-31 00:00:00', 20, 20, 20, '129.90', 'risk'),
(73, 21, '2020-01-14 00:00:00', 21, 21, 21, '117.49', 'biology'),
(74, 22, '2020-01-29 00:00:00', 22, 22, 22, '154.57', 'eat'),
(75, 23, '2020-02-05 00:00:00', 23, 23, 23, '100.76', 'abandon'),
(76, 24, '2020-01-25 00:00:00', 24, 24, 24, '167.02', 'cute'),
(77, 25, '2020-01-21 00:00:00', 25, 25, 25, '123.34', 'late'),
(78, 26, '2020-02-14 00:00:00', 26, 26, 26, '160.11', 'offspring'),
(79, 27, '2020-01-31 00:00:00', 27, 27, 27, '124.09', 'undermine'),
(80, 28, '2019-12-31 00:00:00', 28, 28, 28, '112.99', 'pair'),
(81, 29, '2020-01-23 00:00:00', 29, 29, 29, '108.07', 'appoint'),
(82, 30, '2020-01-27 00:00:00', 30, 30, 30, '143.56', 'snap'),
(83, 31, '2020-01-03 00:00:00', 31, 31, 31, '113.87', 'immune'),
(84, 32, '2020-02-10 00:00:00', 32, 32, 32, '113.10', 'bar'),
(85, 33, '2020-01-19 00:00:00', 33, 33, 33, '189.76', 'design'),
(86, 34, '2020-02-05 00:00:00', 34, 34, 34, '108.97', 'organisation'),
(87, 35, '2020-01-08 00:00:00', 35, 35, 35, '188.63', 'ostracize'),
(88, 36, '2020-01-31 00:00:00', 36, 36, 36, '198.72', 'leaflet'),
(89, 37, '2020-01-23 00:00:00', 37, 37, 37, '144.96', 'confine'),
(90, 38, '2020-01-25 00:00:00', 38, 38, 38, '152.85', 'credit card'),
(91, 39, '2020-02-13 00:00:00', 39, 39, 39, '174.74', 'magnetic'),
(92, 40, '2020-01-14 00:00:00', 40, 40, 40, '184.65', 'liver'),
(93, 41, '2020-01-20 00:00:00', 41, 41, 41, '154.58', 'oak'),
(94, 42, '2020-01-28 00:00:00', 42, 42, 42, '155.67', 'peak'),
(95, 43, '2020-01-08 00:00:00', 43, 43, 43, '135.92', 'suspicion'),
(96, 44, '2019-12-30 00:00:00', 44, 44, 44, '148.43', 'infrastructure'),
(97, 45, '2020-01-08 00:00:00', 45, 45, 45, '131.53', 'flour'),
(98, 46, '2020-01-08 00:00:00', 46, 46, 46, '102.06', 'fountain'),
(99, 47, '2020-01-03 00:00:00', 47, 47, 47, '130.50', 'wealth'),
(100, 48, '2020-01-30 00:00:00', 48, 48, 48, '166.75', 'think'),
(101, 49, '2020-02-11 00:00:00', 49, 49, 49, '119.50', 'dependence'),
(102, 50, '2020-01-25 00:00:00', 50, 50, 50, '125.76', 'cattle');

-- --------------------------------------------------------

--
-- Table structure for table `daily_cash`
--

CREATE TABLE `daily_cash` (
  `daily_cash_id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `type` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_cash`
--

INSERT INTO `daily_cash` (`daily_cash_id`, `company_id`, `amount`, `description`, `type`) VALUES
(1, 1, '7238113.50', 'Repudiandae dolorem ipsa recusandae corrupti quo ex quia consequatur. Aut eius non quia velit. Et ac', 'myxh'),
(2, 2, '0.00', 'Rem qui qui recusandae ipsum unde corporis quos. Itaque est doloribus voluptates non. Labore archite', 'bhmn'),
(3, 3, '23491.43', 'Voluptates aspernatur vel tenetur tempore harum dolorem. Et ipsa aut rerum esse voluptates dolores o', 'rlwm'),
(4, 4, '2102597.04', 'Quia quia rerum officia accusantium tempore debitis. Et et dolorem et est laborum quod est. Reiciend', 'jlxt'),
(5, 5, '1005506.98', 'Repudiandae consectetur repellat sunt in. Eius a ea hic autem consequatur exercitationem. Consequatu', 'yaqb'),
(6, 6, '299.88', 'Est delectus sit ut maiores commodi. Est commodi fugiat pariatur assumenda aut qui minus. Consequunt', 'lqme'),
(7, 7, '30.07', 'In voluptate repellat asperiores minima officiis quia. Quia id id expedita est ut iure quia. Volupta', 'ujbq'),
(8, 8, '99999999.99', 'Itaque non excepturi non. Quam eaque cupiditate voluptate minima qui. Placeat sit molestiae sed mole', 'fqco'),
(9, 9, '0.00', 'Dolorem ut et ad quisquam at. Sunt quibusdam aut occaecati enim ut. Facere nam dolores et hic magni.', 'dewa'),
(10, 10, '32.90', 'Distinctio qui quo ad et commodi perspiciatis reiciendis. Ullam velit qui saepe eligendi amet. Dolor', 'ivmm'),
(11, 11, '0.00', 'Dolores aperiam beatae eveniet exercitationem vitae suscipit fuga omnis. Deleniti et nihil sint poss', 'uzak'),
(12, 12, '398937.50', 'Cupiditate illum similique eaque ut facere tenetur. Sit libero est porro enim quae temporibus laudan', 'ghbb'),
(13, 13, '18554870.87', 'Maxime dicta magni nesciunt enim corrupti accusantium architecto. Quisquam enim quaerat saepe non of', 'gbeb'),
(14, 14, '4013018.65', 'Dolores maxime ea eos et. Ut accusamus assumenda consectetur aut placeat exercitationem consequatur.', 'lznh'),
(15, 15, '27.89', 'Eos aperiam omnis consectetur magni blanditiis illo assumenda. Eius quia sunt consectetur. Autem rer', 'umob'),
(16, 16, '79.00', 'Voluptates quae sapiente aut qui molestiae sint aspernatur. Dolorum illum vel sunt quod sapiente inv', 'frgt'),
(17, 17, '79040765.90', 'Quae laudantium corporis necessitatibus deleniti ut. Quia quasi quis ut quia suscipit dolore invento', 'sapq'),
(18, 18, '2233.89', 'Laboriosam sed totam ab quis. Eius odit ullam ut et ex alias. Debitis error quod magni autem beatae ', 'ikfh'),
(19, 19, '5808968.05', 'Qui eum dolorum et voluptatum reiciendis. Perspiciatis aut dolorum nihil aliquid libero et vero. Rat', 'bkhi'),
(20, 20, '4.13', 'Odit officiis aperiam quasi provident. Earum pariatur et dolores totam voluptas non aliquid dicta. V', 'ckox'),
(21, 21, '7838.02', 'Eius sequi fugiat sunt et. Repudiandae voluptatem adipisci dolores magnam debitis dolorum.', 'cqsj'),
(22, 22, '92329833.00', 'Nisi qui nemo beatae dolor. Quisquam eveniet ea maiores magni quod quisquam sed. Sed facilis et blan', 'pqle'),
(23, 23, '50.58', 'Perspiciatis eligendi dolore rerum ea aliquam. Eum quasi alias beatae sequi non ea. Accusamus evenie', 'qvuv'),
(24, 24, '2.42', 'Modi consequatur illum esse dolorem. Consectetur omnis eos porro ex nobis voluptas adipisci. Fuga et', 'ejdw'),
(25, 25, '0.00', 'Accusamus laudantium sed libero qui dicta neque incidunt voluptatem. Quis consectetur velit ea archi', 'jubf'),
(26, 26, '7650102.70', 'Sequi quia est fugiat voluptas porro suscipit iusto animi. Assumenda voluptatibus harum est officiis', 'qgjz'),
(27, 27, '2106.84', 'Tempora libero amet iste cupiditate quis. Odit ratione rerum praesentium sit magnam unde est dolor. ', 'yoar'),
(28, 28, '3.58', 'Rem perspiciatis aperiam provident ad quis occaecati. Quisquam vero eligendi sed modi molestiae eos.', 'dakk'),
(29, 29, '10763884.51', 'Omnis ullam est praesentium in enim repudiandae. Et recusandae eaque ullam minus minima iusto. Venia', 'sfbv'),
(30, 30, '27842.74', 'Quibusdam vel rerum magni quo voluptatum. Quia sint perspiciatis sit sed a. Quo est perspiciatis vel', 'zomi'),
(31, 31, '459.25', 'Asperiores molestias corrupti unde magni et corrupti exercitationem. Reiciendis corporis doloribus v', 'jncv'),
(32, 32, '22173590.70', 'Quo illo facere maxime odio consectetur. Rerum corrupti dolorem optio officiis. Eligendi unde et sus', 'qtpp'),
(33, 33, '5168.90', 'Sit deserunt consequatur aliquid odit. Ea minima quam dolorem porro animi. Assumenda officiis nostru', 'bfqc'),
(34, 34, '21.40', 'Sequi ipsa et ut eius. Consequatur dolores expedita voluptatum dolorem rem vitae et. Delectus et sed', 'ojoz'),
(35, 35, '70.00', 'Incidunt et facilis autem consectetur facilis vero. Est cupiditate et ut quia omnis quia ea. Totam e', 'ekec'),
(36, 36, '0.00', 'Est explicabo similique debitis aliquid laudantium consequatur. Rerum unde reprehenderit rem sequi e', 'lihl'),
(37, 37, '290.33', 'Molestiae repudiandae nam minus quia libero. Quasi amet nobis quia dicta vero amet culpa eos. Fuga b', 'ejyl'),
(38, 38, '0.44', 'Error ullam dolor iste consequatur magnam laudantium. Quis molestiae quaerat recusandae. Ut eos sed ', 'jxvf'),
(39, 39, '1438790.85', 'Nihil non aperiam delectus similique. Sint quo sed tenetur nam non vero et.', 'oysy'),
(40, 40, '8205.00', 'Doloremque quis cupiditate quia labore nesciunt. Libero dolorum qui rerum aperiam sint et. Nulla acc', 'ggqt'),
(41, 41, '5342.95', 'Rerum consequuntur quam sequi et optio sequi explicabo aut. Ut sequi distinctio similique omnis. Tot', 'necr'),
(42, 42, '241310.39', 'Amet et unde mollitia vero fuga praesentium est illum. Mollitia esse molestias sint qui veritatis re', 'frhq'),
(43, 43, '610081.22', 'Est vero enim eum laboriosam et. Aliquid aperiam dolorem ducimus hic. Quis corrupti corporis tempora', 'smzt'),
(44, 44, '46819.83', 'Nihil aut id similique harum. Ipsa quia ut dignissimos inventore nobis. Consectetur saepe deserunt e', 'eeon'),
(45, 45, '0.37', 'Ut perferendis quidem optio magni rerum ut modi. Exercitationem tenetur possimus magnam deserunt con', 'wbir'),
(46, 46, '12307.68', 'Perferendis rerum repellendus blanditiis sint reprehenderit doloribus modi. Unde voluptate id quo po', 'vpnc'),
(47, 47, '0.00', 'Qui id consequatur placeat dolor. Quo laborum vel qui iure et aliquid. Nostrum et laudantium id reru', 'dpwq'),
(48, 48, '1.26', 'Praesentium unde aut repudiandae quos dolorem officia. Ad molestiae consequatur et fugit iure ad por', 'bbjz'),
(49, 49, '1.40', 'Officiis rerum dolorem quaerat odit et. Nulla ratione tempore corporis maiores commodi fugiat. Volup', 'pxpa'),
(50, 50, '37711087.19', 'Molestias numquam exercitationem ut quia. Placeat nobis ad ea quidem. Voluptates optio et velit impe', 'itzh');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard_data`
--

CREATE TABLE `dashboard_data` (
  `dashboard_data_id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `dashboard_date` datetime DEFAULT NULL,
  `projected_food` decimal(10,2) DEFAULT NULL,
  `projected_alcohol` decimal(10,2) DEFAULT NULL,
  `actual_food` decimal(10,2) DEFAULT NULL,
  `actual_alcohol` decimal(10,2) DEFAULT NULL,
  `projected_boh` decimal(10,2) DEFAULT NULL,
  `projected_foh` decimal(10,2) DEFAULT NULL,
  `projected_boh_percentage` decimal(10,2) DEFAULT NULL,
  `projected_foh_percentage` decimal(10,2) DEFAULT NULL,
  `actual_boh` decimal(10,2) DEFAULT NULL,
  `actual_foh` decimal(10,2) DEFAULT NULL,
  `actual_boh_percentage` decimal(10,2) DEFAULT NULL,
  `actual_foh_percentage` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dashboard_data`
--

INSERT INTO `dashboard_data` (`dashboard_data_id`, `company_id`, `dashboard_date`, `projected_food`, `projected_alcohol`, `actual_food`, `actual_alcohol`, `projected_boh`, `projected_foh`, `projected_boh_percentage`, `projected_foh_percentage`, `actual_boh`, `actual_foh`, `actual_boh_percentage`, `actual_foh_percentage`) VALUES
(1, 1, '2020-02-25 23:52:32', '1175102.51', '497.08', '156.61', '0.00', '11.22', '5.89', '20.00', '24.00', '45.00', '98.00', '98.00', '45.00'),
(2, 2, '2020-02-24 05:14:45', '2.94', '1857.85', '3581430.10', '0.00', '1561126.00', '25043832.87', '17.00', '75.00', '29.00', '63.00', '41.00', '26.00'),
(3, 3, '2020-02-23 15:47:01', '0.00', '3.18', '3476775.82', '60740.88', '9892936.35', '2925253.43', '64.00', '68.00', '12.00', '13.00', '96.00', '91.00'),
(4, 4, '2020-02-22 21:48:42', '26.34', '107973.82', '408381.00', '65.71', '2580.53', '7.24', '90.00', '21.00', '35.00', '8.00', '74.00', '8.00'),
(5, 5, '2020-02-21 16:45:25', '0.00', '51480422.28', '0.50', '60438401.06', '99999999.99', '108709.65', '48.00', '43.00', '39.00', '58.00', '64.00', '9.00'),
(6, 6, '2020-02-20 14:26:21', '99999999.99', '87058024.00', '1123460.81', '66.62', '31647200.10', '327783.34', '71.00', '15.00', '63.00', '25.00', '50.00', '47.00'),
(7, 7, '2020-02-19 06:27:17', '0.00', '6408.47', '0.27', '0.00', '73020.03', '0.00', '6.00', '35.00', '28.00', '35.00', '8.00', '63.00'),
(8, 8, '2020-02-18 13:37:26', '0.00', '0.00', '1.81', '1.23', '4112010.27', '193956.68', '71.00', '22.00', '19.00', '87.00', '65.00', '62.00'),
(9, 9, '2020-02-17 11:53:16', '24655.86', '3452588.79', '99999999.99', '17482612.13', '69681037.00', '4613.58', '30.00', '71.00', '6.00', '29.00', '25.00', '48.00'),
(10, 10, '2020-02-16 18:34:55', '40.15', '23.69', '46.00', '99999999.99', '224970.00', '5873116.55', '4.00', '8.00', '74.00', '7.00', '52.00', '68.00'),
(11, 11, '2020-02-15 02:49:23', '731.85', '38433766.74', '5026.00', '0.00', '0.00', '120734.34', '22.00', '97.00', '68.00', '13.00', '79.00', '5.00'),
(12, 12, '2020-02-14 22:04:12', '0.00', '0.00', '99999999.99', '30.56', '120.53', '31148.00', '57.00', '2.00', '66.00', '90.00', '67.00', '44.00'),
(13, 13, '2020-02-13 19:44:54', '7.61', '63.00', '99999999.99', '6414.79', '0.00', '3998067.00', '98.00', '67.00', '18.00', '92.00', '53.00', '71.00'),
(14, 14, '2020-02-12 19:39:27', '713702.51', '301349.04', '31802713.15', '99999999.99', '1006189.41', '1316.05', '42.00', '24.00', '34.00', '62.00', '22.00', '68.00'),
(15, 15, '2020-02-11 13:37:14', '865657.96', '45036.58', '42893752.60', '51413219.86', '24627955.99', '5805.93', '85.00', '34.00', '4.00', '1.00', '93.00', '61.00'),
(16, 16, '2020-02-10 01:46:41', '532330.46', '2.00', '611604.31', '0.00', '496.00', '5518029.91', '67.00', '10.00', '92.00', '56.00', '33.00', '63.00'),
(17, 17, '2020-02-09 09:25:45', '2378810.00', '99999999.99', '11.63', '60169.67', '26763750.92', '591351.00', '34.00', '9.00', '75.00', '65.00', '60.00', '42.00'),
(18, 18, '2020-02-08 18:15:00', '1.49', '336293.08', '4.41', '301.66', '0.00', '252.74', '21.00', '29.00', '66.00', '97.00', '80.00', '52.00'),
(19, 19, '2020-02-07 06:37:31', '26340763.03', '0.00', '903.59', '0.99', '22068.28', '0.00', '25.00', '28.00', '21.00', '18.00', '54.00', '58.00'),
(20, 20, '2020-02-06 18:33:11', '0.57', '99999999.99', '3764394.36', '27324338.00', '0.00', '0.00', '1.00', '7.00', '98.00', '4.00', '72.00', '24.00'),
(21, 21, '2020-02-05 14:32:47', '88789.52', '9469.04', '5.00', '180.14', '11572.86', '3.77', '25.00', '91.00', '57.00', '17.00', '64.00', '21.00'),
(22, 22, '2020-02-04 17:21:13', '0.00', '18866.43', '2608.00', '263.26', '15.43', '1864463.08', '57.00', '78.00', '69.00', '45.00', '62.00', '46.00'),
(23, 23, '2020-02-03 17:02:13', '2467221.62', '0.00', '47251.83', '99999999.99', '62418.10', '778.35', '39.00', '80.00', '17.00', '85.00', '3.00', '48.00'),
(24, 24, '2020-02-02 10:11:03', '0.91', '225654.60', '99999999.99', '0.00', '250.92', '0.00', '2.00', '47.00', '68.00', '95.00', '28.00', '44.00'),
(25, 25, '2020-02-01 10:34:03', '99999999.99', '0.00', '394.04', '3682.90', '62.40', '6.06', '73.00', '40.00', '66.00', '73.00', '5.00', '47.00'),
(26, 26, '2008-04-02 23:29:51', '23819738.89', '78398826.33', '99999999.99', '16.10', '10.00', '55.22', '94.00', '50.00', '37.00', '53.00', '4.00', '12.00'),
(27, 27, '1987-03-09 08:53:29', '2.93', '23.10', '449374.20', '0.00', '41.80', '99999999.99', '37.00', '69.00', '37.00', '27.00', '16.00', '30.00'),
(28, 28, '2019-01-12 09:32:21', '0.60', '857.86', '0.00', '6791966.78', '99999999.99', '641745.10', '6.00', '81.00', '4.00', '20.00', '52.00', '59.00'),
(29, 29, '2004-08-14 19:37:44', '7626607.41', '8.00', '99999999.99', '65553317.69', '2814.70', '35.23', '90.00', '62.00', '41.00', '4.00', '59.00', '63.00'),
(30, 30, '1973-01-26 13:30:17', '57515.70', '27.10', '3546911.39', '818073.23', '4.18', '42604.00', '24.00', '16.00', '10.00', '23.00', '31.00', '10.00'),
(31, 31, '2001-02-26 15:50:09', '0.06', '0.71', '99999999.99', '294373.35', '881.92', '4858.00', '18.00', '31.00', '45.00', '29.00', '41.00', '74.00'),
(32, 32, '2000-07-08 07:40:13', '206936.44', '45571391.86', '87.95', '0.00', '0.00', '54466396.80', '90.00', '6.00', '89.00', '47.00', '89.00', '12.00'),
(33, 33, '1998-12-26 19:24:01', '26.26', '0.00', '1.48', '62679.31', '18.43', '5.34', '67.00', '29.00', '34.00', '60.00', '61.00', '48.00'),
(34, 34, '2015-07-09 18:06:19', '3245.15', '0.00', '0.00', '99999999.99', '19759305.00', '2150.00', '42.00', '33.00', '6.00', '14.00', '21.00', '99.00'),
(35, 35, '2011-11-21 13:52:18', '0.00', '4173183.70', '330583.79', '99999999.99', '32.11', '99999999.99', '24.00', '22.00', '37.00', '87.00', '49.00', '94.00'),
(36, 36, '1990-09-05 11:57:43', '46676219.79', '0.12', '99999999.99', '0.00', '0.00', '8173365.75', '54.00', '58.00', '84.00', '97.00', '18.00', '36.00'),
(37, 37, '1984-12-18 19:40:43', '1011.15', '6645856.74', '9471151.28', '842296.01', '99999999.99', '91.91', '23.00', '49.00', '39.00', '16.00', '41.00', '87.00'),
(38, 38, '2004-07-16 08:24:30', '0.00', '0.00', '35125780.10', '3.60', '867.02', '68372957.00', '11.00', '8.00', '53.00', '11.00', '97.00', '95.00'),
(39, 39, '2011-04-07 14:58:22', '7817148.14', '830483.34', '13270.09', '37728.70', '99999999.99', '0.00', '98.00', '49.00', '66.00', '36.00', '23.00', '77.00'),
(40, 40, '1998-03-11 13:42:54', '60833355.00', '818320.55', '59206.77', '0.40', '0.66', '3446.53', '4.00', '63.00', '59.00', '61.00', '52.00', '66.00'),
(41, 41, '2003-06-03 00:11:52', '99999999.99', '191275.32', '2221.02', '3043595.04', '99999999.99', '30.59', '51.00', '47.00', '26.00', '82.00', '81.00', '10.00'),
(42, 42, '1972-10-06 18:37:52', '5768.11', '9016.85', '9987.36', '0.00', '3.93', '99999999.99', '32.00', '7.00', '58.00', '81.00', '92.00', '64.00'),
(43, 43, '1992-01-05 20:26:20', '5.11', '0.00', '10556.48', '0.76', '345.00', '15990.61', '18.00', '16.00', '17.00', '74.00', '83.00', '24.00'),
(44, 44, '2000-12-20 21:00:21', '1560863.61', '0.00', '7.17', '62701763.89', '1335094.66', '0.00', '19.00', '39.00', '81.00', '9.00', '61.00', '89.00'),
(45, 45, '2014-06-20 23:41:55', '35543124.86', '4.62', '20576.49', '15.08', '77280.02', '50.00', '47.00', '87.00', '73.00', '88.00', '47.00', '43.00'),
(46, 46, '1994-07-17 21:09:43', '31.35', '11329309.04', '0.00', '7.96', '46.06', '19.23', '43.00', '14.00', '92.00', '10.00', '73.00', '60.00'),
(47, 47, '1970-06-24 22:50:01', '928230.46', '90.82', '39278237.02', '4.32', '618496.00', '636094.51', '26.00', '74.00', '22.00', '6.00', '6.00', '99.00'),
(48, 48, '2003-03-01 19:57:16', '89330532.80', '13266174.80', '2.50', '0.00', '0.00', '3350.94', '79.00', '50.00', '32.00', '22.00', '27.00', '13.00'),
(49, 49, '2009-10-06 17:25:53', '2.59', '672658.60', '3958.57', '179257.88', '0.00', '2.00', '69.00', '37.00', '37.00', '33.00', '30.00', '16.00'),
(50, 50, '1985-03-14 18:41:23', '234.56', '4.36', '356.15', '63741505.02', '2793853.37', '508.49', '99.00', '39.00', '42.00', '6.00', '94.00', '21.00'),
(51, 1, '2005-01-23 16:03:28', '34748.18', '797.78', '438064.38', '170.23', '0.00', '4096.19', '72.00', '23.00', '59.00', '12.00', '24.00', '72.00'),
(52, 2, '1996-05-12 06:49:23', '39310.75', '11593809.04', '3172975.76', '5.80', '0.00', '4296.94', '86.00', '70.00', '83.00', '27.00', '26.00', '24.00'),
(53, 3, '1994-07-22 15:51:29', '22851138.38', '29302788.10', '0.00', '18.83', '331.00', '865931.00', '31.00', '80.00', '18.00', '60.00', '76.00', '93.00'),
(54, 4, '1970-11-20 13:47:49', '527.29', '4600116.80', '3814.02', '53.14', '463141.42', '0.00', '30.00', '24.00', '88.00', '92.00', '24.00', '97.00'),
(55, 5, '1983-05-29 14:43:17', '40999429.08', '99999999.99', '120.15', '3060.19', '43912261.77', '39333.37', '11.00', '19.00', '9.00', '93.00', '2.00', '62.00'),
(56, 6, '1990-12-06 21:17:53', '668382.76', '0.00', '6248845.56', '46931.19', '17379.33', '3314.12', '27.00', '40.00', '71.00', '11.00', '10.00', '44.00'),
(57, 7, '1997-04-18 19:11:26', '0.00', '394063.61', '250.06', '0.00', '27724717.35', '0.00', '74.00', '98.00', '91.00', '63.00', '14.00', '92.00'),
(58, 8, '1991-02-07 21:26:03', '196.19', '74.30', '99999999.99', '5372.47', '156343.48', '0.04', '25.00', '40.00', '72.00', '60.00', '83.00', '84.00'),
(59, 9, '1994-12-13 08:16:44', '2632546.68', '2.60', '381.07', '99999999.99', '44528.00', '215.20', '19.00', '2.00', '20.00', '85.00', '75.00', '89.00'),
(60, 10, '1989-07-04 23:02:22', '618.92', '31013157.57', '0.00', '0.04', '1069712.44', '64731.97', '81.00', '87.00', '72.00', '33.00', '70.00', '75.00'),
(61, 11, '1981-11-03 16:10:54', '0.00', '99999999.99', '99999999.99', '244.80', '0.80', '0.00', '30.00', '9.00', '50.00', '46.00', '54.00', '6.00'),
(62, 12, '1979-04-25 14:02:43', '0.02', '1.43', '804.20', '240.98', '131.01', '303821.18', '84.00', '32.00', '54.00', '68.00', '67.00', '8.00'),
(63, 13, '2002-10-27 22:15:16', '263.58', '7285165.00', '10927735.76', '65689736.26', '82.15', '3687.59', '79.00', '9.00', '48.00', '20.00', '58.00', '21.00'),
(64, 14, '2018-06-19 01:15:01', '2.12', '432.80', '855605.90', '96333233.00', '0.00', '51.75', '23.00', '5.00', '16.00', '40.00', '90.00', '24.00'),
(65, 15, '2011-01-28 14:01:38', '1264585.02', '1101.45', '672702.38', '12.35', '233.31', '743205.30', '50.00', '43.00', '50.00', '24.00', '50.00', '84.00'),
(66, 16, '1977-11-21 00:51:36', '99999999.99', '0.00', '741.41', '2.72', '8171607.00', '4.45', '30.00', '54.00', '6.00', '59.00', '48.00', '91.00'),
(67, 17, '1994-08-15 07:07:17', '262574.63', '96849016.80', '1359506.45', '4.73', '0.00', '24.95', '49.00', '78.00', '74.00', '97.00', '79.00', '18.00'),
(68, 18, '1992-07-03 01:18:47', '322.11', '2.29', '3766.73', '9458248.00', '30.31', '4911308.33', '56.00', '43.00', '96.00', '28.00', '13.00', '21.00'),
(69, 19, '2011-05-06 12:55:51', '4.66', '723.50', '424891.00', '0.00', '52.87', '0.00', '31.00', '56.00', '79.00', '66.00', '57.00', '10.00'),
(70, 20, '2012-10-22 04:21:09', '52.51', '0.00', '706.10', '4839599.35', '764.05', '52.25', '84.00', '11.00', '16.00', '81.00', '78.00', '80.00'),
(71, 21, '1975-05-05 13:19:43', '101.98', '35741488.96', '139795.72', '44304532.97', '1.48', '527.70', '3.00', '87.00', '30.00', '45.00', '58.00', '65.00'),
(72, 22, '2001-02-05 01:19:36', '16.74', '29733799.82', '2236382.31', '2952963.39', '6.97', '35908.11', '1.00', '33.00', '10.00', '57.00', '2.00', '43.00'),
(73, 23, '1983-04-23 10:13:47', '2787485.49', '855.85', '74.57', '0.11', '39764.58', '1.14', '47.00', '20.00', '49.00', '60.00', '5.00', '33.00'),
(74, 24, '1970-10-08 05:57:28', '9436.20', '2522.37', '71.99', '415476.57', '45781.46', '0.00', '58.00', '80.00', '50.00', '37.00', '62.00', '64.00'),
(75, 25, '1996-04-15 02:51:06', '0.00', '64.38', '1301.12', '0.00', '4.86', '118.61', '18.00', '96.00', '67.00', '79.00', '47.00', '1.00'),
(76, 26, '1973-09-16 19:44:47', '9945985.24', '301.34', '314.70', '505.21', '0.00', '4.17', '80.00', '54.00', '52.00', '53.00', '68.00', '30.00'),
(77, 27, '1983-06-06 10:09:01', '81554.00', '56.27', '99999999.99', '0.67', '0.00', '7441187.69', '47.00', '24.00', '59.00', '16.00', '46.00', '36.00'),
(78, 28, '2015-03-20 02:16:10', '2139.00', '99999999.99', '27970001.86', '99999999.99', '65515.42', '15521075.03', '79.00', '80.00', '63.00', '73.00', '51.00', '6.00'),
(79, 29, '2019-09-05 02:58:35', '0.26', '2596664.55', '65776961.44', '24.00', '10602237.69', '1371555.29', '31.00', '73.00', '14.00', '8.00', '51.00', '60.00'),
(80, 30, '2019-11-29 10:52:59', '261236.71', '30229332.34', '3.91', '4.06', '25662362.53', '99999999.99', '18.00', '81.00', '47.00', '57.00', '21.00', '25.00'),
(81, 31, '2007-02-04 08:39:37', '36398060.35', '2837101.30', '27513.00', '0.00', '679944.50', '6268195.00', '89.00', '97.00', '12.00', '5.00', '98.00', '18.00'),
(82, 32, '2006-09-03 17:46:35', '421.84', '350.55', '20.10', '43426335.40', '350.00', '262.60', '44.00', '99.00', '47.00', '51.00', '99.00', '88.00'),
(83, 33, '2008-12-31 18:57:22', '5219428.71', '0.00', '15.20', '3661498.90', '49.00', '33.17', '23.00', '21.00', '20.00', '25.00', '46.00', '7.00'),
(84, 34, '2007-11-09 13:02:54', '29.60', '2688.09', '1308.37', '162254.51', '0.70', '0.00', '1.00', '39.00', '4.00', '92.00', '32.00', '2.00'),
(85, 35, '2016-07-02 20:53:31', '2500616.87', '149.17', '488664.36', '52096273.44', '99999999.99', '1135162.39', '12.00', '58.00', '78.00', '76.00', '99.00', '41.00'),
(86, 36, '1995-01-25 01:56:50', '10062.29', '0.00', '8008236.10', '0.00', '93.34', '2360550.16', '74.00', '10.00', '42.00', '74.00', '59.00', '67.00'),
(87, 37, '1976-05-06 11:40:36', '6.95', '9969.55', '0.00', '2649205.40', '4710.72', '214244.02', '43.00', '32.00', '46.00', '50.00', '29.00', '75.00'),
(88, 38, '2010-08-25 12:08:15', '0.00', '9506.67', '99999999.99', '10240594.59', '26439739.80', '0.00', '24.00', '48.00', '21.00', '52.00', '53.00', '85.00'),
(89, 39, '1978-07-25 03:38:05', '483276.95', '99999999.99', '0.00', '910.56', '383265.00', '24827.20', '96.00', '39.00', '46.00', '37.00', '78.00', '50.00'),
(90, 40, '1973-01-18 20:50:00', '2320953.28', '2.43', '0.00', '139428.61', '1081.97', '1.36', '65.00', '90.00', '39.00', '65.00', '66.00', '88.00'),
(91, 41, '2010-03-03 12:25:53', '28.66', '2662284.60', '44770.85', '15998.78', '0.20', '22336.44', '36.00', '81.00', '82.00', '68.00', '64.00', '96.00'),
(92, 42, '2012-05-16 04:18:31', '191.66', '3090582.84', '1634.00', '18662671.90', '2.28', '47642.37', '83.00', '89.00', '45.00', '46.00', '84.00', '66.00'),
(93, 43, '1982-02-20 15:11:14', '520.08', '321.79', '11165915.49', '0.49', '33809.82', '21901873.22', '24.00', '13.00', '96.00', '58.00', '24.00', '11.00'),
(94, 44, '2013-08-18 08:36:01', '20871980.35', '247.30', '4.12', '0.00', '3982135.73', '2879.84', '11.00', '4.00', '50.00', '13.00', '70.00', '58.00'),
(95, 45, '2006-11-21 17:54:02', '147925.08', '0.00', '1247.85', '0.00', '676.20', '398648.56', '11.00', '60.00', '79.00', '50.00', '84.00', '22.00'),
(96, 46, '1990-08-16 05:59:41', '96252339.19', '3.10', '1.57', '203248.25', '7932736.53', '22380.82', '4.00', '10.00', '91.00', '53.00', '83.00', '56.00'),
(97, 47, '2000-09-27 13:52:39', '656.81', '1.99', '5.41', '4653865.36', '44421.37', '16384.53', '1.00', '13.00', '57.00', '86.00', '48.00', '48.00'),
(98, 48, '2014-09-27 12:00:11', '0.00', '13673.00', '99999999.99', '29.21', '333339.53', '64.18', '50.00', '46.00', '22.00', '73.00', '50.00', '13.00'),
(99, 49, '1999-06-18 21:39:12', '0.00', '99999999.99', '303.00', '5795.00', '1705.00', '3824.38', '37.00', '75.00', '49.00', '60.00', '94.00', '37.00'),
(100, 50, '1970-02-06 16:39:37', '3.30', '0.00', '1756745.50', '231.81', '31.05', '10203.40', '50.00', '53.00', '44.00', '58.00', '93.00', '87.00');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `full_name` varchar(45) DEFAULT NULL,
  `phone_number` varchar(45) DEFAULT NULL,
  `birthdate` datetime DEFAULT NULL,
  `SSN` varchar(45) DEFAULT NULL,
  `address_1` varchar(100) DEFAULT NULL,
  `address_2` varchar(100) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `zip` varchar(15) DEFAULT NULL,
  `job_code_id` varchar(1) DEFAULT NULL,
  `current_pay_rate` double DEFAULT NULL,
  `tipped` varchar(5) DEFAULT NULL,
  `filing_status` varchar(45) DEFAULT NULL,
  `allowances` varchar(45) DEFAULT NULL,
  `extra_withholding` varchar(45) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `termination_date` datetime DEFAULT NULL,
  `eligible_rehire` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `first_name`, `last_name`, `full_name`, `phone_number`, `birthdate`, `SSN`, `address_1`, `address_2`, `city`, `state`, `zip`, `job_code_id`, `current_pay_rate`, `tipped`, `filing_status`, `allowances`, `extra_withholding`, `start_date`, `termination_date`, `eligible_rehire`) VALUES
(1, 'Veronica', 'Macejkovic', 'Prof. Bethany Rowe II', '(991)721-5113x420', '1988-01-06 10:27:48', '6578569', '03642 Vito Dale', 'Suite 146', 'Mallieside', 'Michigan', '98293', '', 163003.9, '99 qg', 'Cumque nesciunt id cumque sed iste facilis do', '9', '9', '2018-10-02 02:28:53', '2013-08-10 19:18:57', '05 cz'),
(2, 'Brown', 'Kunde', 'Maggie Ebert', '(931)239-9733x5315', '2011-08-16 13:54:55', '31256425', '8096 Kiehn Shore Suite 297', 'Apt. 738', 'New Trent', 'California', '69185', '1', 4873116.599919, '20 sc', 'In necessitatibus fugiat repellat quia distin', '8', '', '2000-11-04 18:15:53', '1985-08-31 22:06:50', '45 ux'),
(3, 'Osborne', 'Grady', 'Ericka Parisian', '05888340925', '1979-02-24 02:07:12', '754', '0112 Melba Meadow', 'Apt. 629', 'North Pat', 'Montana', '19672', '2', 4127373.227091, '69 kw', 'Nostrum fuga vel aspernatur sed. Error expedi', '9', '1', '1974-04-24 23:28:53', '2006-12-02 11:09:43', '67 xa'),
(4, 'Jerad', 'Schimmel', 'Prof. Leonel Grimes', '(312)968-9695x049', '1997-11-26 01:29:29', '4', '599 Padberg Square', 'Apt. 663', 'Gracielastad', 'Michigan', '77810-1485', '3', 1822.17671043, '75 ao', 'Aut mollitia voluptatibus consequatur. Id nis', '3', '8', '1980-03-19 11:03:48', '1991-08-31 17:58:06', '17 zv'),
(5, 'Rory', 'Rippin', 'Maureen Considine I', '221-974-9569', '1979-07-25 06:33:22', '20932', '7199 Littel Shoals', 'Apt. 843', 'East Veldaton', 'Kansas', '92108-3087', '4', 0, '12 kv', 'Dolorum fuga non voluptatem facere dolores. C', '8', '9', '1971-10-12 22:55:24', '2019-02-28 14:40:01', '85 nr'),
(6, 'Adolphus', 'Shields', 'Prof. Eda Reinger', '055-646-9524x84079', '1992-03-26 23:41:30', '93715', '26206 Becker Plaza', 'Apt. 092', 'East Asha', 'Colorado', '31856-9627', '5', 402.41675163, '70 ex', 'Sed nihil ipsa qui asperiores dolorum enim. Q', '8', '5', '1993-09-08 22:17:29', '1978-03-07 06:08:18', '74 rf'),
(7, 'Bethel', 'Emard', 'Mortimer Roob MD', '243.178.3637x634', '2003-04-03 13:29:22', '8', '079 Mills Stravenue Suite 555', 'Apt. 120', 'South Wyattville', 'Tennessee', '51850', '6', 6.5, '95 xp', 'Id soluta voluptatem et eos asperiores est ve', '1', '3', '1988-06-02 02:17:59', '1995-02-20 21:02:13', '72 rr'),
(8, 'Nestor', 'Maggio', 'Odie Wilkinson', '558.434.5801', '1987-07-15 10:21:41', '85103', '150 Kilback Crossroad', 'Suite 894', 'Sibylville', 'Ohio', '77684-4705', '7', 47.5248135, '30 zb', 'Sed blanditiis quis ullam velit eos suscipit ', '1', '6', '1990-03-16 08:49:13', '1997-08-10 22:47:52', '07 go'),
(9, 'Kaitlyn', 'Nikolaus', 'Else Grady', '966.082.2859x786', '1989-10-25 18:36:53', '97665', '01259 Lulu Stravenue Apt. 159', 'Suite 248', 'West Johathanhaven', 'Utah', '02758-4055', '8', 21863.2, '43 hg', 'Omnis cupiditate corrupti quidem dolores. Vol', '5', '6', '2003-02-03 23:21:29', '2003-03-14 06:27:23', '70 hp'),
(10, 'Hollie', 'Beatty', 'Madilyn Farrell', '08370052329', '1989-03-07 17:12:52', '824', '69097 Russel Isle', 'Apt. 274', 'Katlynnton', 'SouthCarolina', '77794', '9', 965545.1605314, '47 il', 'Recusandae rem provident enim est eum recusan', '5', '5', '1981-01-13 01:11:42', '1981-02-20 18:46:23', '03 iz'),
(11, 'Bethany', 'Howell', 'Prof. Easter Leffler Jr.', '896-744-4153', '1974-11-04 23:58:13', '598407', '97819 Pollich Walks', 'Apt. 713', 'Rippinside', 'Maryland', '57730', '', 47678726.356, '88 zi', 'Voluptate totam similique occaecati recusanda', '7', '5', '2008-06-15 19:34:52', '1994-09-29 09:12:09', '15 vv'),
(12, 'Trevor', 'Gislason', 'Laverna Kuhic', '626-364-2129x698', '1974-08-10 03:06:04', '4', '48063 Angelita Mountains Apt. 112', 'Apt. 754', 'East Courtney', 'Florida', '53271', '1', 0, '05 rk', 'Voluptatem aut laborum et expedita non assume', '3', '1', '1993-02-04 09:02:02', '1992-01-15 00:20:07', '32 xf'),
(13, 'Teresa', 'Friesen', 'Jaylon Grant', '(305)062-8682', '1999-01-01 20:07:15', '56330057', '9985 Walker Gateway', 'Suite 518', 'Cordelialand', 'Vermont', '51602', '2', 2815866.69916, '02 py', 'Nesciunt labore dolor blanditiis aliquid. Bea', '6', '5', '1988-04-30 03:17:32', '2003-10-02 05:28:38', '34 sn'),
(14, 'Millie', 'Schneider', 'Josiane Ward', '(087)612-4070x4223', '1983-08-21 11:32:40', '72', '084 Kaelyn Prairie Apt. 136', 'Apt. 068', 'Ernserland', 'Idaho', '74703', '3', 916, '51 ut', 'Eum temporibus tempora qui cupiditate explica', '', '4', '2002-08-19 02:43:59', '1978-03-08 01:35:58', '79 ig'),
(15, 'Aleen', 'Hintz', 'Annie Mante', '09818431046', '1989-09-30 19:27:26', '418590', '91900 Chandler Drive Suite 716', 'Suite 261', 'Lake Grantbury', 'Massachusetts', '93514-5705', '4', 18.2239604, '11 kp', 'Beatae illum quisquam atque cumque quia. Volu', '7', '1', '2014-11-07 23:26:41', '1999-12-27 15:33:32', '81 uh'),
(16, 'Zoie', 'Bayer', 'Miss Cordie Hegmann PhD', '774-475-2623x82114', '1990-07-15 16:19:57', '6564', '87766 Demetris Spurs Apt. 452', 'Suite 898', 'East Hunter', 'Pennsylvania', '77617', '5', 1810552.780718, '27 lh', 'Necessitatibus numquam minus ipsum dolore sim', '', '7', '1999-06-02 17:36:12', '2012-03-12 22:09:20', '86 yr'),
(17, 'Casimir', 'Kuphal', 'Prof. Camron Hamill', '1-236-761-5717', '2008-09-10 01:10:20', '71586791', '326 Muller Row', 'Suite 203', 'Fosterton', 'Texas', '81779', '6', 0, '38 hs', 'Temporibus quia et et est excepturi eum. Aspe', '8', '2', '1985-10-03 10:22:41', '2010-03-19 11:23:35', '57 cg'),
(18, 'Sunny', 'Hyatt', 'Abdullah Bergnaum', '091.169.6151x6359', '2017-11-25 08:55:14', '737411', '64615 Predovic Drive', 'Apt. 542', 'Millsbury', 'Utah', '13089-1887', '7', 70, '14 pn', 'Placeat aperiam ea sint enim quos eaque. Labo', '', '8', '2018-08-05 22:39:11', '2008-03-12 09:44:35', '01 zt'),
(19, 'Aliyah', 'Goodwin', 'Modesta Boyer', '372.018.7236x134', '2004-04-05 18:56:16', '8', '05192 Adams Extensions', 'Apt. 288', 'Faymouth', 'Georgia', '04948-6323', '8', 3, '28 re', 'Consequatur deleniti et omnis accusamus qui r', '6', '6', '2001-06-27 16:22:59', '1977-12-17 15:33:28', '37 aw'),
(20, 'Shad', 'McGlynn', 'Jessy Jacobs', '170-258-7430', '1997-11-25 11:36:04', '19826108', '034 Mitchell Glens', 'Suite 301', 'Lake Brendan', 'Texas', '14177', '9', 1714240.4, '97 hr', 'Ut impedit exercitationem voluptatem iste qui', '5', '', '1993-06-23 08:52:08', '2006-08-29 15:25:10', '55 ny'),
(21, 'Chance', 'Renner', 'Carolanne Durgan', '(364)741-0077x3925', '2015-07-12 08:27:54', '100', '8973 Hartmann Motorway Apt. 455', 'Suite 139', 'Garthshire', 'Indiana', '00251-5827', '', 30577046.2598, '88 gn', 'Earum nobis nulla magni voluptatem accusamus ', '8', '3', '2003-08-27 15:12:48', '1994-02-09 01:57:06', '73 jo'),
(22, 'Dixie', 'Witting', 'Jacky Koelpin', '(097)761-1029x54409', '2002-09-22 11:16:38', '41989', '029 Orlo Inlet Suite 946', 'Apt. 533', 'Vernamouth', 'Missouri', '35676-9611', '1', 264213.7, '17 wq', 'Et sit et aliquam quas dolor velit eius. Esse', '6', '8', '1984-01-26 23:56:45', '1984-09-19 06:42:29', '13 yd'),
(23, 'Jeffrey', 'Hoppe', 'Peggie Kunde', '1-399-821-0058x526', '1998-01-27 19:26:12', '', '692 Ratke Crest Suite 526', 'Suite 102', 'Delmerport', 'RhodeIsland', '27483-2931', '2', 48.224, '78 yd', 'Sunt vel dolores culpa eum amet excepturi. Nu', '7', '3', '2013-01-27 01:27:17', '1970-04-23 20:37:52', '64 dt'),
(24, 'Tanner', 'Torphy', 'Columbus Simonis', '09993632978', '2009-06-20 20:06:01', '916', '383 Volkman Ridges Apt. 255', 'Suite 984', 'New Mohammad', 'SouthCarolina', '55305-1522', '3', 126341141.50965, '64 zy', 'Delectus aperiam quo iure sint consequatur vo', '6', '6', '1974-10-21 03:16:02', '1984-07-24 04:15:23', '24 uf'),
(25, 'Alvera', 'Hyatt', 'Cleo Wyman PhD', '+83(5)3457709951', '2017-09-15 03:54:38', '7', '50661 Damian Park Apt. 290', 'Suite 574', 'Wardtown', 'Alabama', '79571', '4', 5963.19255, '30 an', 'Voluptate qui sit a possimus non qui. Rerum d', '2', '', '2010-05-04 02:43:14', '1982-12-05 07:47:58', '82 qa'),
(26, 'Mohammad', 'Waters', 'Lois Effertz', '(185)440-0647x518', '1985-12-25 13:15:10', '672', '2704 Sabrina Canyon Apt. 141', 'Apt. 751', 'West Stephaniehaven', 'SouthCarolina', '13840', '5', 65742.562986, '29 eu', 'Quia ut nobis omnis id fugiat asperiores unde', '4', '9', '1970-06-30 16:44:04', '1978-04-09 05:13:38', '05 gp'),
(27, 'Ryann', 'Bartell', 'Mr. Donnie Kunze', '950-253-7050', '1991-01-06 21:46:28', '580525', '687 Windler Circles Apt. 440', 'Suite 629', 'Clintville', 'NewJersey', '07935', '6', 10110448.7966, '62 gc', 'Molestiae qui error minus autem. Architecto p', '8', '5', '1971-05-08 11:09:44', '1987-06-17 01:18:31', '68 wb'),
(28, 'Amy', 'Stamm', 'Aylin Turner', '210-535-5416x0708', '1990-03-14 13:01:52', '1867430', '216 Lubowitz Dale', 'Apt. 762', 'Rathburgh', 'NewHampshire', '82560-0468', '7', 6, '47 wo', 'Quia illum magni dolores itaque. Illum sint m', '9', '7', '2010-10-25 19:59:45', '1970-04-10 00:37:51', '70 sf'),
(29, 'Jadon', 'Spencer', 'Alison Lakin', '+54(4)1781734443', '1984-08-27 01:13:47', '2158', '503 Susie Lodge Apt. 667', 'Suite 062', 'South Kadeport', 'Wisconsin', '35738-3222', '8', 59.776401, '94 xr', 'Tempora autem possimus cum fugit inventore no', '', '6', '2020-01-22 15:19:23', '2018-06-02 22:57:27', '55 oo'),
(30, 'Dylan', 'Schneider', 'Brain Fay', '(422)188-3035x65416', '1998-10-13 09:59:16', '6817037', '81609 Ransom Lake Suite 993', 'Suite 531', 'New Tristianstad', 'Nevada', '20700-5895', '9', 59.97, '40 ny', 'Exercitationem asperiores tempore natus ab ma', '1', '6', '1989-05-19 14:18:41', '2015-09-06 18:30:57', '87 od'),
(31, 'Justice', 'Strosin', 'Vanessa Oberbrunner', '1-491-959-9551x59362', '1979-09-29 03:30:15', '58', '071 Dillan Manor Apt. 397', 'Apt. 408', 'Emilfort', 'NewMexico', '71266-7571', '', 2010.46305996, '98 it', 'Nesciunt quisquam exercitationem sint minima ', '8', '2', '2006-01-24 19:51:56', '2015-08-17 22:21:30', '67 xv'),
(32, 'Gracie', 'Marvin', 'Jamir Fahey Jr.', '662-982-5999x995', '1970-03-20 13:19:46', '4', '748 Kub Loaf', 'Apt. 722', 'West Gina', 'Hawaii', '84489', '1', 13678471.089037, '82 kp', 'Eveniet consequatur ullam corporis sit. Tempo', '2', '', '2018-12-13 15:12:29', '2008-01-03 18:33:41', '80 pp'),
(33, 'Alana', 'Kerluke', 'Lily Cartwright', '01911201048', '2001-05-01 01:28:38', '4', '9502 Horacio Highway', 'Suite 968', 'West Rileyville', 'Michigan', '52149', '2', 2.258224904, '05 ee', 'Enim voluptatem ut dolorum est. Temporibus au', '', '8', '2007-05-26 05:02:07', '2008-09-30 23:45:11', '16 ir'),
(34, 'Hettie', 'Stehr', 'Dewitt Ziemann', '(082)546-2754x9768', '1999-04-20 22:35:39', '998', '125 Olson Camp', 'Apt. 992', 'East Hayleyview', 'Alaska', '90846-4474', '3', 2081.33932, '05 ju', 'Deleniti inventore sed reprehenderit quis vol', '5', '3', '1997-06-11 07:14:41', '1994-08-08 07:12:36', '51 en'),
(35, 'Antonette', 'Fay', 'Ms. Myrtice Wehner IV', '954-936-4860', '1999-05-08 16:49:25', '1784', '60246 Roob River Suite 535', 'Suite 339', 'Lake Madelyn', 'Idaho', '98400-9189', '4', 13502385.1, '80 id', 'Labore ut similique debitis quasi. Ut aliquam', '3', '7', '1971-06-28 08:26:40', '1972-03-25 18:43:34', '06 ed'),
(36, 'Virgil', 'Keeling', 'Dr. Kay Heaney', '1-432-065-0209x712', '2014-05-31 14:06:32', '84092186', '002 Gleichner Canyon Apt. 948', 'Apt. 030', 'North Vilma', 'NewJersey', '68069', '5', 17.8, '99 zn', 'Vel qui et in deleniti. Asperiores eos beatae', '8', '5', '1980-10-17 04:16:26', '1971-01-17 22:56:04', '98 lg'),
(37, 'Lottie', 'Leannon', 'Prof. Ruthe Ritchie', '(564)972-1160', '1997-12-19 09:27:59', '27', '56287 Bergnaum Trace', 'Apt. 044', 'Heathcoteburgh', 'Alaska', '79881', '6', 2279511.43078, '54 jh', 'Fuga mollitia dicta impedit porro sint. Occae', '2', '7', '1996-07-14 05:30:17', '1987-02-11 04:44:24', '30 xc'),
(38, 'Layne', 'Zboncak', 'Jenifer Johnston', '659-975-3678x65995', '1983-08-01 14:18:00', '50864', '40830 Devyn Fork Apt. 706', 'Apt. 668', 'Port Victorstad', 'Ohio', '55082', '7', 196.32281438, '44 fq', 'Dolor officiis asperiores illo qui eos rem to', '8', '', '1988-01-21 11:51:20', '1973-02-13 04:06:24', '82 ae'),
(39, 'Elisabeth', 'Stark', 'Prof. Myah Baumbach', '163.020.8656', '1992-03-19 08:00:47', '32352', '5582 Wuckert Islands Apt. 242', 'Suite 748', 'Thielfort', 'Kansas', '76754-5586', '8', 1.2, '84 oh', 'Accusamus eos modi illum officia harum. Accus', '6', '4', '1991-09-06 09:13:01', '2008-02-10 14:39:44', '01 kw'),
(40, 'Rahsaan', 'White', 'Albertha Wilderman Sr.', '167-422-1514x1840', '1980-08-08 04:41:00', '45415', '3423 Sherman Tunnel Suite 700', 'Apt. 482', 'Kelsiview', 'Idaho', '96092-4319', '9', 16326.8, '75 az', 'Aut itaque ipsam autem repellendus. In enim n', '9', '4', '2009-11-15 22:33:09', '2002-03-04 13:18:42', '43 iq'),
(41, 'Kayla', 'Mohr', 'Tanya Stokes', '559.581.8820', '1974-01-17 14:34:13', '47407580', '71716 Kunze Vista Apt. 347', 'Apt. 760', 'West Bettye', 'RhodeIsland', '45219-3095', '', 9420172.491157, '32 mq', 'Occaecati non eum provident earum expedita im', '6', '2', '1999-12-21 04:55:35', '2003-12-10 04:41:20', '95 fx'),
(42, 'Okey', 'Maggio', 'Dr. Laron Bogisich', '157.747.3443', '2015-12-28 03:38:34', '83591391', '462 Verna Place Apt. 967', 'Apt. 388', 'North Garretton', 'Florida', '40498-6536', '1', 0.4076, '26 si', 'Et labore occaecati molestiae iure assumenda ', '7', '5', '1989-07-06 22:41:11', '2003-08-13 22:44:24', '43 fh'),
(43, 'Stacey', 'Langosh', 'Garett Considine', '613.422.8604', '1990-11-26 15:02:45', '1', '891 Mckenna Garden Suite 065', 'Apt. 773', 'Hailieside', 'NewHampshire', '60039-8809', '2', 376926852.0741, '48 gp', 'Et doloribus voluptatibus quia nulla. Exceptu', '2', '6', '2011-01-28 05:10:05', '1986-10-23 23:36:44', '50 bu'),
(44, 'Ramona', 'Mitchell', 'Zola Leffler', '968-464-0289', '2007-01-17 03:23:11', '3702088', '78911 Kirk Groves Suite 526', 'Apt. 642', 'Demarcusside', 'Indiana', '01385-7885', '3', 97645.4858, '86 tu', 'Officiis aut vel veritatis. Tenetur voluptas ', '', '', '2012-02-09 18:56:09', '1992-05-17 07:09:04', '60 tj'),
(45, 'Brett', 'Reichert', 'Sonya Schmidt', '(342)010-4932', '1975-01-21 21:04:17', '8006', '51046 Rigoberto Pine', 'Apt. 499', 'Denesikport', 'Delaware', '07729', '4', 18897165.790875, '62 fn', 'Eos eos iste temporibus ut. Ut placeat ut sed', '4', '6', '1991-12-11 00:56:39', '2017-12-11 13:57:38', '60 xl'),
(46, 'Lindsey', 'Bartoletti', 'Daniela Klein', '(344)736-4443x7924', '2011-05-02 05:14:27', '86860', '65616 Fadel Oval', 'Apt. 121', 'New Odessa', 'Texas', '36377', '5', 265.5789416, '13 gf', 'Molestias explicabo impedit quis. Enim perspi', '9', '', '1980-07-14 17:48:35', '2016-06-12 05:10:42', '57 as'),
(47, 'Kobe', 'Tillman', 'Dr. Harvey Bednar', '(442)038-1804x026', '1981-11-24 17:29:07', '6', '226 Dariana Springs', 'Suite 244', 'Cummerataborough', 'NewJersey', '80662', '6', 21.1, '40 eg', 'Quis dolorem cum minima ut placeat ex maxime.', '4', '4', '1986-02-26 01:08:53', '2001-08-01 07:19:32', '96 yp'),
(48, 'Frederic', 'Paucek', 'Melisa Rutherford', '(104)125-3261', '1976-06-01 02:29:12', '69022', '2641 Jamie Forge', 'Apt. 008', 'Gilbertoshire', 'Michigan', '37367-6293', '7', 0.25, '86 ku', 'Ea repudiandae dicta ut cum. Voluptatem volup', '6', '9', '1975-12-23 17:27:22', '2006-12-24 09:01:12', '42 vz'),
(49, 'Orlo', 'Reichert', 'Eduardo Lesch', '221.140.8537x750', '1999-05-22 05:53:07', '11448', '182 Alberto Tunnel', 'Suite 078', 'West Katelinhaven', 'Idaho', '57110', '8', 17323992.495125, '75 pe', 'Qui quaerat voluptatibus quisquam repellat au', '3', '1', '1971-09-22 20:35:21', '2017-03-03 06:07:57', '43 hv'),
(50, 'Benny', 'Batz', 'Jordane Corkery', '230-036-9744', '2017-09-28 21:35:24', '76', '67956 Conn Locks Apt. 046', 'Apt. 035', 'Kautzerborough', 'Maryland', '38627-8884', '9', 0, '12 tn', 'Alias dolor odio ut magni laboriosam. Neque c', '', '4', '2002-08-03 21:00:01', '1995-10-17 05:44:28', '58 qe');

-- --------------------------------------------------------

--
-- Table structure for table `employee_company`
--

CREATE TABLE `employee_company` (
  `employee_id` int(11) NOT NULL,
  `ccmpany_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_company`
--

INSERT INTO `employee_company` (`employee_id`, `ccmpany_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31),
(32, 32),
(33, 33),
(34, 34),
(35, 35),
(36, 36),
(37, 37),
(38, 38),
(39, 39),
(40, 40),
(41, 41),
(42, 42),
(43, 43),
(44, 44),
(45, 45),
(46, 46),
(47, 47),
(48, 48),
(49, 49),
(50, 50);

-- --------------------------------------------------------

--
-- Table structure for table `employee_history`
--

CREATE TABLE `employee_history` (
  `employee_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `full_name` varchar(45) DEFAULT NULL,
  `phone_number` varchar(45) DEFAULT NULL,
  `birthdate` datetime DEFAULT NULL,
  `SSN` varchar(45) DEFAULT NULL,
  `address_1` varchar(100) DEFAULT NULL,
  `address_2` varchar(100) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `zip` varchar(15) DEFAULT NULL,
  `job_code_id` varchar(1) DEFAULT NULL,
  `current_pay_rate` double DEFAULT NULL,
  `tipped` varchar(5) DEFAULT NULL,
  `filing_status` varchar(45) DEFAULT NULL,
  `allowances` varchar(45) DEFAULT NULL,
  `extra_withholding` varchar(45) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `termination_date` datetime DEFAULT NULL,
  `eligible_rehire` varchar(5) DEFAULT NULL,
  `effective_date` datetime DEFAULT NULL,
  `ending_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food_item_cost`
--

CREATE TABLE `food_item_cost` (
  `food_item_cost_id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `food_unit_id` int(11) DEFAULT NULL,
  `gl_code_id` int(11) DEFAULT NULL,
  `cost` decimal(10,2) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_item_cost`
--

INSERT INTO `food_item_cost` (`food_item_cost_id`, `company_id`, `vendor_id`, `food_unit_id`, `gl_code_id`, `cost`, `start_date`, `end_date`, `type`) VALUES
(1, 1, 1, 15, 151, '8343.68', '2002-02-04 03:31:09', '1985-10-14 13:12:06', 'onop'),
(2, 2, 2, 16, 187, '35.14', '1987-11-23 21:41:30', '2007-08-22 19:30:22', 'rlay'),
(3, 3, 3, 17, 294, '24722475.50', '1984-10-10 17:29:40', '1975-09-11 03:06:22', 'ulol'),
(4, 4, 4, 18, 297, '0.00', '2014-09-15 18:29:44', '2009-11-02 06:13:42', 'nsti'),
(5, 5, 5, 19, 303, '2.58', '1971-04-22 19:07:05', '1988-01-21 17:36:41', 'ajga'),
(6, 6, 6, 20, 345, '736880.57', '1978-09-08 07:28:20', '1973-07-31 16:27:16', 'gyjf'),
(7, 7, 7, 21, 388, '0.00', '2007-09-04 21:33:40', '1973-07-05 13:55:20', 'duyd'),
(8, 8, 8, 22, 406, '40361420.40', '1990-08-31 07:24:42', '2002-08-29 05:16:14', 'qdvm'),
(9, 9, 9, 23, 427, '39369100.31', '1970-05-02 03:51:41', '2014-06-24 22:16:53', 'mako'),
(10, 10, 10, 24, 524, '1191956.60', '2001-02-22 18:08:37', '2009-10-16 22:52:30', 'vvzy'),
(11, 11, 11, 15, 577, '0.00', '1998-06-10 22:56:51', '2016-12-01 13:11:55', 'xuvh'),
(12, 12, 12, 16, 680, '1747345.88', '1981-03-10 06:30:02', '1995-07-17 05:40:02', 'pkrf'),
(13, 13, 13, 17, 683, '3.84', '1974-12-26 10:14:45', '2003-03-06 22:13:56', 'chse'),
(14, 14, 14, 18, 703, '2076136.52', '1973-12-10 14:46:08', '1982-07-26 02:20:22', 'rbxt'),
(15, 15, 15, 19, 718, '3219946.09', '1983-06-02 04:02:54', '1983-09-21 05:41:29', 'hokk'),
(16, 16, 16, 20, 742, '44.00', '2013-01-20 21:50:33', '2015-08-09 23:20:30', 'nzzh'),
(17, 17, 17, 21, 743, '88823.00', '1981-11-05 20:14:37', '1982-09-16 15:56:59', 'zenr'),
(18, 18, 18, 22, 744, '670.43', '1972-01-21 20:51:51', '1989-05-20 17:41:15', 'sgro'),
(19, 19, 19, 23, 783, '99999999.99', '1992-08-06 04:54:03', '2004-08-01 10:52:58', 'kkbx'),
(20, 20, 20, 24, 819, '2.60', '2013-08-21 09:46:13', '1980-02-29 02:19:19', 'tsxv'),
(21, 21, 21, 15, 909, '45.37', '1983-07-31 02:41:08', '1994-10-09 13:52:36', 'guiy'),
(22, 22, 22, 16, 911, '2.50', '1990-08-01 14:32:14', '1986-11-06 17:47:04', 'cuck'),
(23, 23, 23, 17, 931, '1168895.93', '1999-10-08 04:10:51', '1983-07-29 20:24:28', 'iahw'),
(24, 24, 24, 18, 964, '75.74', '1994-07-22 16:18:37', '2004-03-25 21:00:26', 'dden'),
(25, 25, 25, 19, 968, '1936.42', '1974-07-13 05:32:32', '2014-06-24 18:34:38', 'lnkj'),
(26, 26, 26, 20, 151, '1986897.86', '1995-07-04 19:42:11', '1970-01-14 17:02:37', 'lwmb'),
(27, 27, 27, 21, 187, '0.77', '1986-09-09 19:26:53', '2019-04-01 07:30:18', 'bppc'),
(28, 28, 28, 22, 294, '47.78', '1980-09-09 01:16:18', '2014-06-01 06:49:58', 'kbmh'),
(29, 29, 29, 23, 297, '76528059.57', '1987-05-26 00:52:28', '2011-09-15 12:26:47', 'szid'),
(30, 30, 30, 24, 303, '4.00', '1987-02-11 00:24:51', '2008-10-10 20:08:28', 'jazy'),
(31, 31, 31, 15, 345, '3995656.47', '1972-03-19 17:30:18', '1992-10-19 17:50:46', 'fmfo'),
(32, 32, 32, 16, 388, '39410.13', '2006-08-06 12:38:31', '2001-08-29 00:45:46', 'apgb'),
(33, 33, 33, 17, 406, '735436.61', '1971-12-12 00:36:40', '2006-12-27 07:54:04', 'tusc'),
(34, 34, 34, 18, 427, '0.00', '2016-04-09 22:19:46', '1970-01-23 05:49:51', 'ztwi'),
(35, 35, 35, 19, 524, '0.00', '1999-10-10 06:48:45', '1971-01-11 03:26:14', 'kamk'),
(36, 36, 36, 20, 577, '530.38', '1983-09-03 10:55:31', '2017-03-20 09:33:30', 'mpnj'),
(37, 37, 37, 21, 680, '189.00', '2003-12-31 23:09:28', '1974-03-12 17:51:09', 'ljfl'),
(38, 38, 38, 22, 683, '99999999.99', '1972-03-02 19:10:34', '2016-03-03 18:13:43', 'jptd'),
(39, 39, 39, 23, 703, '22940.85', '2003-01-14 13:13:00', '2001-11-13 21:57:42', 'wrht'),
(40, 40, 40, 24, 718, '44.24', '1978-01-16 01:03:57', '1974-02-15 15:35:48', 'piud'),
(41, 41, 41, 15, 742, '15623590.53', '1985-01-02 09:05:38', '1997-12-18 09:37:34', 'qtky'),
(42, 42, 42, 16, 743, '3247.18', '1990-02-23 18:24:29', '2011-05-07 12:37:02', 'gcyt'),
(43, 43, 43, 17, 744, '1364523.43', '2004-01-14 08:26:01', '2019-04-14 03:08:32', 'joqu'),
(44, 44, 44, 18, 783, '4.08', '1993-06-17 08:29:22', '2005-01-22 14:04:30', 'labe'),
(45, 45, 45, 19, 819, '2814.26', '1987-04-03 18:30:25', '1990-09-08 01:34:00', 'klqw'),
(46, 46, 46, 20, 909, '17.09', '2016-03-26 10:32:09', '2007-08-10 23:56:49', 'zrfq'),
(47, 47, 47, 21, 911, '90629058.63', '1977-04-08 11:10:39', '2013-01-23 01:36:34', 'sofu'),
(48, 48, 48, 22, 931, '99999999.99', '1992-03-29 00:31:32', '2019-04-01 03:44:32', 'ilhu'),
(49, 49, 49, 23, 964, '52249529.60', '1979-06-30 02:14:33', '2007-09-03 18:11:20', 'faoj'),
(50, 50, 50, 24, 968, '0.00', '1987-02-28 18:07:29', '1978-05-28 06:02:23', 'lxbi');

-- --------------------------------------------------------

--
-- Table structure for table `food_unit`
--

CREATE TABLE `food_unit` (
  `food_unit_id` int(11) NOT NULL,
  `unit` varchar(45) DEFAULT NULL,
  `abbreviation` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_unit`
--

INSERT INTO `food_unit` (`food_unit_id`, `unit`, `abbreviation`) VALUES
(15, 'tempora', 'v'),
(16, 'asperiores', 'k'),
(17, 'et', 's'),
(18, 'dolore', 'c'),
(19, 'aut', 'a'),
(20, 'quo', 'v'),
(21, 'in', 'x'),
(22, 'delectus', 'q'),
(23, 'ut', 'c'),
(24, 'ab', 'j');

-- --------------------------------------------------------

--
-- Table structure for table `food_unit_conversion`
--

CREATE TABLE `food_unit_conversion` (
  `original_unit` varchar(45) NOT NULL,
  `new_unit` varchar(45) NOT NULL,
  `conversion` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gl_code`
--

CREATE TABLE `gl_code` (
  `gl_code_id` int(11) NOT NULL,
  `gl_code` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gl_code`
--

INSERT INTO `gl_code` (`gl_code_id`, `gl_code`) VALUES
(151, 'kiof'),
(187, 'hzdi'),
(294, 'vbav'),
(297, 'ulal'),
(303, 'ucnq'),
(345, 'hkzz'),
(388, 'iwne'),
(406, 'ceaz'),
(427, 'sgbi'),
(524, 'riwf'),
(577, 'opwi'),
(680, 'vdve'),
(683, 'ylsl'),
(703, 'xxqc'),
(718, 'kuae'),
(742, 'bete'),
(743, 'asol'),
(744, 'gfnz'),
(783, 'xouc'),
(819, 'lpey'),
(909, 'rqfi'),
(911, 'vrvg'),
(931, 'fltx'),
(964, 'byhu'),
(968, 'etjy');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) NOT NULL,
  `invoice_number` varchar(50) DEFAULT NULL,
  `invoice_date` datetime DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `term_id` int(11) DEFAULT NULL,
  `due_date` datetime DEFAULT NULL,
  `memo` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `company_id`, `vendor_id`, `invoice_number`, `invoice_date`, `total_amount`, `term_id`, `due_date`, `memo`) VALUES
(1, 1, 1, '546584304', '1998-05-07 15:54:47', '0.00', 1, '2020-02-05 00:00:00', 'Reprehenderit odit veritatis eligendi dolorem.'),
(2, 2, 2, '2438721', '2017-07-19 09:58:03', '113.40', 2, '1976-06-08 11:10:54', 'Aut provident quia impedit consequatur quam nobis.'),
(3, 3, 3, '70', '1984-07-26 23:42:19', '5.10', 3, '2010-10-21 21:09:45', 'Rerum in voluptatum odit quidem et.'),
(4, 4, 4, '638238048', '2017-09-19 08:05:18', '1.94', 4, '1987-07-07 22:08:36', 'Unde voluptas autem exercitationem sapiente dolores quasi nam.'),
(5, 5, 5, '577', '2019-06-25 11:43:39', '568.91', 5, '2005-03-11 13:24:56', 'Nobis consequatur eum sequi voluptas inventore et.'),
(6, 6, 6, '20507', '1982-11-30 14:56:59', '37.97', 6, '2003-08-22 08:59:42', 'Sint magnam voluptas nobis dolorem beatae.'),
(7, 7, 7, '4', '2004-09-12 15:08:17', '0.00', 7, '1976-08-08 10:26:37', 'Dolores quidem ad autem nostrum omnis.'),
(8, 8, 8, '5128669', '2014-02-19 08:50:21', '41.40', 8, '1976-05-25 08:20:00', 'Sint modi quis incidunt ipsam.'),
(9, 9, 9, '747753', '2015-03-13 11:52:02', '174.29', 9, '1971-09-23 20:26:17', 'Voluptatem et accusamus dolores ea nesciunt aliquid ullam.'),
(10, 10, 10, '418', '1988-12-08 00:47:56', '85.03', 10, '2002-08-13 06:19:19', 'Harum et et veniam consequatur.'),
(11, 11, 11, '4633', '1982-11-27 15:59:22', '22900892.39', 11, '2014-03-30 11:03:48', 'Exercitationem sed libero velit et facere magnam.'),
(12, 12, 12, '686101861', '1974-12-11 12:37:26', '181.63', 12, '1998-10-26 09:59:06', 'Reiciendis voluptatem aliquam et sequi quasi aut.'),
(13, 13, 13, '', '2015-11-20 11:21:32', '214625.62', 13, '1982-04-08 00:30:39', 'Dolore eius id dolores unde.'),
(14, 14, 14, '7411', '2011-08-04 19:14:04', '5842.29', 14, '2020-02-05 00:00:00', 'Provident quae possimus id beatae harum enim.'),
(15, 15, 15, '90', '2000-02-24 01:09:14', '295.39', 15, '1999-04-08 18:20:32', 'Quaerat cum aut fugit nulla veritatis.'),
(16, 16, 16, '71101', '1999-12-13 05:56:34', '4529.69', 16, '1978-09-01 06:05:09', 'Rerum aut non dolore vel id est harum esse.'),
(17, 17, 17, '39', '1989-03-09 06:54:03', '274.30', 17, '2010-10-01 21:40:56', 'Aperiam praesentium quisquam dolores corporis laudantium.'),
(18, 18, 18, '27385', '1981-02-21 05:17:51', '55569499.35', 18, '1988-01-13 19:54:10', 'Eum nihil molestiae cupiditate sit.'),
(19, 19, 19, '536147', '2019-03-21 07:57:26', '0.00', 19, '1994-10-14 17:56:49', 'Dolorem nisi qui omnis iste officia adipisci ullam.'),
(20, 20, 20, '2181', '2018-05-02 09:10:01', '2168392.54', 20, '1984-05-12 21:04:10', 'Beatae qui esse magnam necessitatibus.'),
(21, 21, 21, '1985951', '1970-11-26 14:17:17', '18904788.00', 21, '1992-11-01 21:54:03', 'Et consectetur non voluptas at dolore hic.'),
(22, 22, 22, '43', '1983-04-25 12:20:45', '270.90', 22, '1974-08-14 14:44:33', 'Commodi nemo sit cupiditate molestias dolorem perspiciatis.'),
(23, 23, 23, '930', '1994-10-15 22:18:26', '11606.54', 23, '1971-05-26 03:33:02', 'Consequatur est qui nesciunt nobis voluptatem quod consequuntur.'),
(24, 24, 24, '7898735', '1976-10-29 18:26:28', '2.41', 24, '1987-06-21 15:24:11', 'Numquam ipsum quia ut perferendis rerum.'),
(25, 25, 25, '9135', '2019-05-30 18:28:47', '4735388.27', 25, '1982-01-26 02:15:43', 'Debitis qui vitae necessitatibus dolore libero ea maiores.'),
(26, 26, 26, '64287', '1990-07-14 08:27:50', '427.93', 1, '2019-01-16 12:53:56', 'Voluptatem dolores itaque ut delectus omnis vitae.'),
(27, 27, 27, '7', '1971-05-12 03:05:42', '99999999.99', 2, '1973-01-11 09:43:33', 'Vel eum voluptate neque laudantium.'),
(28, 28, 28, '4853337', '1999-12-05 16:42:34', '85991137.00', 3, '1997-02-22 23:59:44', 'Laboriosam occaecati ducimus aut dolorem at sed deserunt.'),
(29, 29, 29, '607', '1997-11-18 23:35:58', '173.91', 4, '2017-01-01 11:17:15', 'Earum minus dignissimos illo est dolores voluptatem aut.'),
(30, 30, 30, '2248644', '2017-08-10 03:37:43', '99999999.99', 5, '1976-12-24 20:25:39', 'Cupiditate et et mollitia quam.'),
(31, 31, 31, '334621957', '1983-10-08 10:20:01', '0.00', 6, '1981-08-28 22:15:39', 'Recusandae eveniet accusantium molestiae sed.'),
(32, 32, 32, '20', '1976-03-31 17:22:19', '32830.81', 7, '1989-04-02 15:52:42', 'Vel voluptatem inventore doloribus enim a architecto id aperiam.'),
(33, 33, 33, '77', '2016-09-28 03:11:13', '0.00', 8, '2004-05-16 20:42:39', 'Aut qui eum amet dicta vel rem modi consequatur.'),
(34, 34, 34, '', '1998-05-09 21:46:46', '0.00', 9, '2005-03-19 04:32:13', 'Minus facilis quis vel cum.'),
(35, 35, 35, '9915457', '1988-03-19 13:42:57', '99999999.99', 10, '1977-06-11 07:01:08', 'Ducimus rerum dolores nostrum perspiciatis est voluptatibus non.'),
(36, 36, 36, '29453', '1980-06-18 02:31:45', '1492795.00', 11, '2016-04-26 03:19:56', 'Dolorem quae ea et et illo reiciendis molestiae assumenda.'),
(37, 37, 37, '22978', '1971-09-25 19:10:15', '1243.05', 12, '2004-01-23 15:54:49', 'Perspiciatis molestiae sunt est est dolore accusamus saepe nesciunt.'),
(38, 38, 38, '503783971', '1974-03-13 03:19:21', '35636498.02', 13, '1981-07-18 01:23:28', 'Non qui dolor odit eligendi laboriosam tempora maxime et.'),
(39, 39, 39, '155304307', '1980-01-26 17:24:59', '4.80', 14, '2000-04-03 09:26:46', 'Est nesciunt est recusandae eveniet ut.'),
(40, 40, 40, '448', '1979-06-06 02:38:45', '99999999.99', 15, '1982-12-11 08:05:04', 'Ut suscipit mollitia voluptas esse.'),
(41, 41, 41, '270716', '1982-11-06 21:14:54', '48.00', 16, '1995-03-19 03:47:51', 'Eum nobis sit laudantium totam.'),
(42, 42, 42, '', '2001-05-27 23:05:59', '329.23', 17, '1994-07-28 03:15:04', 'At sint expedita eum.'),
(43, 43, 43, '3124739', '2004-10-30 21:04:20', '14.95', 18, '1994-04-02 04:40:42', 'Sint tenetur nostrum at pariatur error cum.'),
(44, 44, 44, '9819', '2017-08-15 07:10:12', '1583.00', 19, '1975-10-21 08:39:06', 'Et ea asperiores amet est accusamus fugiat.'),
(45, 45, 45, '', '1993-12-30 05:11:29', '0.00', 20, '1988-06-07 15:01:56', 'Rerum praesentium fugiat et id commodi.'),
(46, 46, 46, '', '1972-08-04 03:07:52', '1.20', 21, '1971-01-30 00:16:01', 'Hic nobis amet voluptas non et voluptatum quia voluptates.'),
(47, 47, 47, '', '1999-11-29 19:28:28', '50723.84', 22, '1975-09-25 15:21:15', 'Velit qui veniam dignissimos qui delectus et consequatur.'),
(48, 48, 48, '833857', '1989-11-26 00:53:28', '91506.41', 23, '1991-04-04 23:35:19', 'Tempore facilis sit amet ipsa maxime provident.'),
(49, 1, 49, '362', '1993-01-27 15:46:28', '2.80', 24, '1975-05-08 00:24:16', 'Quae placeat itaque ratione et rem sed sapiente.'),
(50, 1, 50, '494', '1989-07-18 19:53:50', '99999999.99', 25, '1972-03-17 03:40:03', 'Et eaque aperiam ut consequatur.');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_line`
--

CREATE TABLE `invoice_line` (
  `invoice_line_id` int(11) NOT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `food_item_cost_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_line`
--

INSERT INTO `invoice_line` (`invoice_line_id`, `invoice_id`, `food_item_cost_id`, `amount`) VALUES
(1, 1, 1, '607.40'),
(2, 2, 2, '3162114.91'),
(3, 3, 3, '481.32'),
(4, 4, 4, '0.87'),
(5, 5, 5, '6891113.39'),
(6, 6, 6, '6.03'),
(7, 7, 7, '5418246.45'),
(8, 8, 8, '35.79'),
(9, 9, 9, '10532439.07'),
(10, 10, 10, '1309.49'),
(11, 11, 11, '418.30'),
(12, 12, 12, '1575877.87'),
(13, 13, 13, '21776.21'),
(14, 14, 14, '1313104.06'),
(15, 15, 15, '35328925.56'),
(16, 16, 16, '2958.32'),
(17, 17, 17, '4927493.00'),
(18, 18, 18, '43.97'),
(19, 19, 19, '1246833.31'),
(20, 20, 20, '99999999.99'),
(21, 21, 21, '472.35'),
(22, 22, 22, '2754397.51'),
(23, 23, 23, '254.33'),
(24, 24, 24, '0.00'),
(25, 25, 25, '8346967.36'),
(26, 26, 26, '28508.39'),
(27, 27, 27, '205.70'),
(28, 28, 28, '99999999.99'),
(29, 29, 29, '1519853.60'),
(30, 30, 30, '9385458.80'),
(31, 31, 31, '99999999.99'),
(32, 32, 32, '5.25'),
(33, 33, 33, '4780025.34'),
(34, 34, 34, '27261603.30'),
(35, 35, 35, '2014292.59'),
(36, 36, 36, '37686.00'),
(37, 37, 37, '0.00'),
(38, 38, 38, '2461614.44'),
(39, 39, 39, '29070540.80'),
(40, 40, 40, '249.56'),
(41, 41, 41, '0.00'),
(42, 42, 42, '0.00'),
(43, 43, 43, '24184135.52'),
(44, 44, 44, '0.96'),
(45, 45, 45, '1.90'),
(46, 46, 46, '756.30'),
(47, 47, 47, '1463.51'),
(48, 48, 48, '80652828.29'),
(49, 49, 49, '943.47'),
(50, 50, 50, '64308.47'),
(51, 1, 1, '44.27'),
(52, 2, 2, '3.28'),
(53, 3, 3, '4.55'),
(54, 4, 4, '8.64'),
(55, 5, 5, '50.36'),
(56, 6, 6, '54029.55'),
(57, 7, 7, '17367611.34'),
(58, 8, 8, '33.60'),
(59, 9, 9, '556996.00'),
(60, 10, 10, '2102069.18'),
(61, 11, 11, '3082.78'),
(62, 12, 12, '32143880.82'),
(63, 13, 13, '265658.00'),
(64, 14, 14, '0.00'),
(65, 15, 15, '0.00'),
(66, 16, 16, '2.21'),
(67, 17, 17, '0.16'),
(68, 18, 18, '32925.85'),
(69, 19, 19, '5254034.75'),
(70, 20, 20, '33.40'),
(71, 21, 21, '70892803.09'),
(72, 22, 22, '63.80'),
(73, 23, 23, '37.66'),
(74, 24, 24, '101.00'),
(75, 25, 25, '0.00'),
(76, 26, 26, '16.07'),
(77, 27, 27, '4523604.90'),
(78, 28, 28, '8.53'),
(79, 29, 29, '12.58'),
(80, 30, 30, '2990.64'),
(81, 31, 31, '944237.00'),
(82, 32, 32, '19325.26'),
(83, 33, 33, '0.00'),
(84, 34, 34, '1.40'),
(85, 35, 35, '6.24'),
(86, 36, 36, '17827370.06'),
(87, 37, 37, '41897.24'),
(88, 38, 38, '17354.83'),
(89, 39, 30, '641247.81'),
(90, 40, 40, '3.97'),
(91, 41, 41, '57242083.08'),
(92, 42, 42, '114.00'),
(93, 43, 43, '27493809.57'),
(94, 44, 44, '0.00'),
(95, 45, 45, '31.46'),
(96, 46, 46, '0.00'),
(97, 47, 47, '527.59'),
(98, 48, 48, '0.00'),
(99, 49, 49, '0.00'),
(100, 50, 50, '151.19');

-- --------------------------------------------------------

--
-- Table structure for table `job_code`
--

CREATE TABLE `job_code` (
  `job_code_id` varchar(1) NOT NULL,
  `job_code` varchar(45) DEFAULT NULL,
  `position_location` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_code`
--

INSERT INTO `job_code` (`job_code_id`, `job_code`, `position_location`) VALUES
('', 'wpec', 'Digitized demand-driven benchmark'),
('1', 'uvpw', 'Integrated empowering application'),
('2', 'lpzl', 'Streamlined eco-centric hub'),
('3', 'vgig', 'Networked composite product'),
('4', 'lkjw', 'Business-focused discrete circuit'),
('5', 'fkoc', 'Distributed discrete toolset'),
('6', 'tmub', 'Team-oriented bi-directional challenge'),
('7', 'yozf', 'Ergonomic 6thgeneration algorithm'),
('8', 'gbwm', 'User-centric zerotolerance complexity'),
('9', 'xbel', 'Expanded tertiary website');

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `payment_method_id` int(11) NOT NULL,
  `payment_method` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`payment_method_id`, `payment_method`) VALUES
(1, 'MasterCard'),
(2, 'Visa'),
(3, 'Discover Card');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `schedule_date` date DEFAULT NULL,
  `in_time` datetime DEFAULT NULL,
  `out_time` datetime DEFAULT NULL,
  `position` decimal(10,2) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `employee_id`, `company_id`, `schedule_date`, `in_time`, `out_time`, `position`, `location`) VALUES
(1, 1, 1, '2001-09-26', '1978-11-24 15:26:32', '2001-03-04 06:19:42', '4.00', '062 Shayna Square\nNorth Garry, KS 31852-8669'),
(2, 2, 2, '1978-08-01', '1996-12-25 07:59:38', '1975-11-21 20:25:09', '5.00', '3960 Karley Throughway\nO\'Konview, NV 87551-36'),
(3, 3, 3, '1972-09-16', '2008-08-01 14:50:29', '1991-07-19 15:00:56', '0.00', '686 Skiles Plaza Suite 180\nSouth German, SD 3'),
(4, 4, 4, '1997-06-26', '1974-12-10 21:52:56', '2005-01-25 10:23:50', '9.00', '94267 Celia Place\nNorth Candida, NH 14966'),
(5, 5, 5, '1981-04-10', '1986-03-30 09:15:18', '1993-01-04 07:18:24', '1.00', '6496 Nat Mall\nEast Vellafurt, TX 82907'),
(6, 6, 6, '1984-01-04', '1989-12-26 19:09:07', '1995-01-08 10:41:53', '2.00', '6601 Madge Spur\nLake Elvisside, NY 43001'),
(7, 7, 7, '2013-07-24', '2018-05-22 16:35:19', '1974-01-26 01:44:36', '0.00', '79295 Farrell Mews Suite 946\nJerdetown, SC 15'),
(8, 8, 8, '1991-07-26', '1982-10-04 14:38:59', '2015-09-14 17:56:14', '2.00', '16746 Julian Cliffs Apt. 846\nSchmelermouth, M'),
(9, 9, 9, '2012-02-22', '1976-09-08 10:44:31', '1988-05-15 16:51:20', '2.00', '00478 Frederik Island Apt. 426\nNew Sam, DE 65'),
(10, 10, 10, '1988-12-16', '2000-07-14 20:55:02', '1981-10-18 04:23:53', '6.00', '6016 Ewald Underpass Suite 606\nSouth Janae, S'),
(11, 11, 11, '2008-09-04', '1991-11-01 16:56:33', '2001-05-10 05:52:31', '0.00', '0085 Jones Lane Apt. 331\nAdolfview, OR 97806'),
(12, 12, 12, '1973-06-17', '2014-12-15 01:49:34', '1974-12-31 17:47:17', '2.00', '797 Denis Forks\nLake Leonardstad, ME 56735'),
(13, 13, 13, '1990-02-07', '2001-03-12 00:03:02', '2006-10-28 09:14:16', '1.00', '678 Kristy Heights\nWest Williamtown, NE 65151'),
(14, 14, 14, '2000-10-06', '1985-05-30 17:13:04', '1973-01-12 06:51:50', '7.00', '63790 Erika Spurs\nPierceville, SD 54675'),
(15, 15, 15, '1978-09-20', '2009-02-11 07:27:32', '1972-10-22 20:51:01', '6.00', '913 Hermiston Crossing\nSchmittshire, GA 55416'),
(16, 16, 16, '2003-05-23', '1972-12-01 11:43:53', '2011-12-09 18:41:44', '1.00', '2959 Carroll Mills\nRolfsonland, IN 24931-7524'),
(17, 17, 17, '1985-06-26', '2008-09-05 21:16:02', '1997-04-29 11:06:31', '5.00', '8089 Elyssa Shore Suite 761\nBotsfordburgh, MO'),
(18, 18, 18, '2012-12-12', '1987-06-02 06:17:28', '1975-01-07 02:55:44', '0.00', '387 Kuvalis Rest\nAdolphhaven, NM 97270'),
(19, 19, 19, '1994-12-16', '2012-03-24 23:24:06', '1991-07-03 22:34:03', '2.00', '63977 Weissnat Inlet Apt. 539\nPort Colleenlan'),
(20, 20, 20, '2001-05-24', '1997-12-10 15:31:46', '1993-12-11 17:02:50', '0.00', '96586 Yvette Landing\nPort Jovannyborough, AL '),
(21, 21, 21, '2003-04-17', '2007-10-19 03:39:59', '1972-12-15 10:12:45', '1.00', '29051 Nienow Forges\nAlvahhaven, CA 48709-0558'),
(22, 22, 22, '1983-02-09', '2003-02-06 11:20:44', '2004-05-17 09:39:38', '4.00', '83021 Doyle Road Suite 843\nEast Audra, DE 038'),
(23, 23, 23, '1971-06-27', '1970-05-22 13:20:01', '1974-08-20 17:50:08', '0.00', '9656 Sanford Overpass\nNorth Alisa, NJ 96725'),
(24, 24, 24, '1980-08-07', '1987-03-24 01:56:19', '2010-12-05 22:36:20', '7.00', '8498 Zboncak Parkways Suite 880\nEast Kaileybo'),
(25, 25, 25, '1994-07-03', '1974-08-12 06:35:13', '1991-05-27 07:04:22', '6.00', '842 Judson Road\nArielhaven, NE 90917'),
(26, 26, 26, '2018-06-01', '1981-09-14 04:03:19', '1972-10-30 14:46:22', '6.00', '3807 Vanessa Tunnel\nFelipeburgh, VA 03381-154'),
(27, 27, 27, '1987-01-04', '2008-04-10 23:14:29', '1993-06-09 02:49:49', '5.00', '745 Towne Motorway\nWest Rahsaanview, DE 55766'),
(28, 28, 28, '2012-04-18', '1978-02-25 09:06:07', '1982-07-09 10:12:31', '0.00', '32494 Triston Tunnel\nVelmaton, FL 53186-6494'),
(29, 29, 29, '1972-01-08', '1997-05-14 03:39:39', '1990-06-30 04:51:23', '2.00', '807 Turcotte Ports\nQuigleyland, HI 85925-9999'),
(30, 30, 30, '1972-06-09', '1971-09-23 00:01:22', '2011-05-05 17:59:46', '1.00', '576 Rashad Harbors\nBreitenbergside, IN 18870'),
(31, 31, 31, '1977-05-14', '1987-06-29 04:23:18', '1996-10-11 06:07:49', '8.00', '937 Nikolaus Rest\nHammeshaven, KY 67188-5608'),
(32, 32, 32, '2010-12-07', '2009-09-01 09:30:45', '1999-01-08 08:56:10', '2.00', '540 Harvey Orchard\nMarksburgh, DE 42887'),
(33, 33, 33, '1981-09-11', '1981-06-17 01:51:46', '1983-01-02 06:32:39', '1.00', '8060 Barton Expressway Suite 922\nRobelville, '),
(34, 34, 34, '2005-10-31', '2012-02-18 15:19:25', '1983-07-02 20:29:45', '8.00', '869 Turcotte Row\nKrishaven, LA 98673-3081'),
(35, 35, 35, '2001-09-29', '1973-10-11 00:46:17', '1973-05-11 07:51:06', '1.00', '7359 Quentin Avenue Apt. 772\nSouth Leonardo, '),
(36, 36, 36, '1993-12-07', '1970-08-27 18:25:18', '2010-04-24 18:44:55', '2.00', '9988 Giovanna Burg Apt. 732\nPourosfort, MA 56'),
(37, 37, 37, '1991-11-30', '1980-08-11 07:17:06', '2017-05-22 17:49:53', '2.00', '36150 Leannon Springs Apt. 419\nNew Pansy, KY '),
(38, 38, 38, '1998-01-16', '1980-01-18 22:17:52', '1981-12-01 19:43:37', '0.00', '5453 Gleason Run Suite 951\nSheldonberg, OK 90'),
(39, 39, 39, '1997-09-18', '2015-08-12 19:04:56', '1994-01-01 14:55:52', '4.00', '40960 Bernie Curve Apt. 862\nHintzhaven, MA 85'),
(40, 40, 40, '1998-02-27', '1986-07-11 10:08:02', '1973-02-14 05:29:01', '2.00', '18312 Grant Ramp Apt. 018\nLake Alvis, DE 4913'),
(41, 41, 41, '2008-04-25', '2015-11-25 10:39:30', '1983-08-22 02:02:33', '5.00', '16870 Parisian Corners\nAbshirefort, AL 03121'),
(42, 42, 42, '2018-10-25', '1975-12-05 03:28:29', '1977-11-02 16:04:58', '7.00', '0523 Casimer Drives Suite 468\nEast Geovannysi'),
(43, 43, 43, '1994-01-31', '1995-08-26 05:27:26', '1999-12-14 02:15:36', '7.00', '9172 Freeman Highway\nBettieport, MD 47420-106'),
(44, 44, 44, '1999-08-07', '1997-12-08 19:20:57', '2002-01-07 06:07:59', '2.00', '77104 Delphia Keys Suite 914\nEast Tremainepor'),
(45, 45, 45, '1994-04-04', '1974-10-02 14:08:20', '2009-02-09 03:09:31', '9.00', '248 Theodora Ferry Suite 772\nClemensshire, RI'),
(46, 46, 46, '2013-12-02', '1986-03-22 22:58:53', '1997-12-03 19:08:09', '0.00', '89938 Lemke Junction Suite 813\nRyanberg, MI 0'),
(47, 47, 47, '2010-06-04', '1988-05-30 07:45:27', '2008-02-14 12:32:04', '7.00', '02713 Hodkiewicz Village Suite 287\nNorth Gret'),
(48, 48, 48, '1987-07-13', '2000-03-19 19:13:27', '2014-12-03 16:13:58', '0.00', '0301 Kyla Expressway Suite 449\nEast Naomie, W'),
(49, 49, 49, '1990-11-29', '2009-09-19 00:48:58', '1980-08-19 03:59:25', '3.00', '9334 Kunze Trail Apt. 393\nSouth Cheyenne, HI '),
(50, 50, 50, '1994-10-28', '2013-09-16 05:16:03', '2017-07-01 07:10:45', '7.00', '46511 Rosemarie Vista Apt. 793\nNorth Loma, IN');

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `term_id` int(11) NOT NULL,
  `term` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`term_id`, `term`) VALUES
(1, 'NET-10'),
(2, 'NET-20'),
(3, 'NET-30'),
(4, 'NET-10'),
(5, 'NET-10'),
(6, 'NET-20'),
(7, 'NET-20'),
(8, 'NET-10'),
(9, 'NET-30'),
(10, 'NET-10'),
(11, 'NET-10'),
(12, 'NET-20'),
(13, 'NET-10'),
(14, 'NET-20'),
(15, 'NET-30'),
(16, 'NET-10'),
(17, 'NET-20'),
(18, 'NET-10'),
(19, 'NET-30'),
(20, 'NET-30'),
(21, 'NET-30'),
(22, 'NET-10'),
(23, 'NET-10'),
(24, 'NET-30'),
(25, 'NET-30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `password`, `email`, `phone`, `company_id`, `user_type_id`, `token`) VALUES
(7, 'Admin', 'Admin', 'admin', 'password123', 'zella52@example.net', '(756)085-4436x377', 1, 1, ''),
(8, 'Talon', 'Mann', 'ubayer', '46f0361feb96c7f524af1729e6af5e', 'collins.stanford@example.com', '1-757-593-1622x026', 2, 2, ''),
(9, 'Price', 'Heidenreich', 'rudy99', 'f486e092640c0bd3fb16a2da6d5daa', 'braun.aryanna@example.org', '(762)019-5533', 3, 3, ''),
(10, 'Jose', 'Wintheiser', 'keebler.asia', '36ed2b2feccdcce96d9d9ee533a2b7', 'eloise.kuhlman@example.com', '094.765.3211', 4, 1, ''),
(11, 'Lurline', 'Toy', 'dashawn89', 'b8ca44da1f34916d656e18d30c5a52', 'xrodriguez@example.com', '(629)407-5517', 5, 2, ''),
(12, 'Myrtie', 'Kshlerin', 'adrien.weber', '52a5d7a5ac5510af9243f184c111d1', 'vada85@example.com', '(337)388-1394x87103', 6, 3, ''),
(13, 'Jaycee', 'Cartwright', 'adele16', '086b3b14feb1eeaba8715e0bda7db8', 'lorenz.witting@example.org', '+61(4)1101838133', 7, 1, ''),
(14, 'Dillon', 'Barrows', 'mstanton', 'cd11451730abdc95b60b1e58d87eb6', 'tabitha.wiegand@example.org', '978-288-1789x79469', 8, 2, ''),
(15, 'Magnolia', 'Boehm', 'mbalistreri', '6e9cd101ed9b020b2e350f1d5ed0ef', 'geo.brakus@example.com', '707.313.2587x96432', 9, 3, ''),
(16, 'Hertha', 'McCullough', 'aaron13', '5a747cb17a80059c7c279e4c23cf16', 'rau.frank@example.com', '02844519381', 10, 1, ''),
(17, 'Yessenia', 'Thompson', 'steuber.chelsea', '4d9ce4ad04bb40d64914865cb91c3a', 'gleason.emmitt@example.org', '607-282-0026x4726', 11, 2, ''),
(18, 'Alvena', 'Gleichner', 'hd\'amore', '03154cfac83f19559beb19a3028f7e', 'nitzsche.matilda@example.com', '06711828112', 12, 3, ''),
(19, 'Trystan', 'Kunde', 'o\'reilly.elroy', 'f7107763b671068a3db1ba56c8c8b4', 'maurice66@example.com', '198-158-3336x238', 13, 1, ''),
(20, 'Jaunita', 'Gaylord', 'iemmerich', '1ab0cf55c3aef1ac2d36d085aeb5c0', 'simonis.ellsworth@example.com', '05756193712', 14, 2, ''),
(21, 'Jaleel', 'Schneider', 'geovanni.balistreri', '4b5e306449339da50065d8e00b0a7a', 'xcremin@example.org', '074-240-6273', 15, 3, ''),
(22, 'Monica', 'Gleichner', 'mertz.zachary', '40bf5c6b93f1dc7bc8339950f389bf', 'kallie.botsford@example.com', '684.253.3092x901', 16, 1, ''),
(23, 'Emiliano', 'Waelchi', 'ybatz', '9f0311db99edf527c15218847fd0ee', 'gabe02@example.net', '(755)826-3644x601', 17, 2, ''),
(24, 'Ernest', 'Reichert', 'gerlach.maribel', '0e9de34a4151b891a74729d4e76efb', 'bauch.joesph@example.com', '689-452-4243x95046', 18, 3, ''),
(25, 'Gloria', 'Spinka', 'aortiz', 'db7ab6ad79f181fab247e1d131d787', 'austyn71@example.net', '1-805-235-7173', 19, 1, ''),
(26, 'Constance', 'Herzog', 'verlie.spinka', 'b7b9a66f30d1cf063e23c9dad03592', 'rosalee11@example.com', '(971)943-0127x155', 20, 2, ''),
(27, 'Chaz', 'Orn', 'austin.kreiger', '918a30b47f40fa38fc64e6c2d423ed', 'anika54@example.com', '365.620.9530', 21, 3, ''),
(28, 'Patricia', 'Ortiz', 'river00', '247b63118402b4a06bccca3e256fe5', 'emilie47@example.org', '222-718-2404x2651', 22, 1, ''),
(29, 'Raphael', 'Barton', 'lbrakus', 'b36320c120a8b97061dd64f2a1c8a0', 'ernest.pagac@example.net', '+18(2)4946392543', 23, 2, ''),
(30, 'Brown', 'Deckow', 'wgreenholt', '190c52f4b3bfdee072e59cc4f30f7b', 'beatty.easton@example.net', '503-273-1892x912', 24, 3, ''),
(31, 'Alexandra', 'Funk', 'pansy.bechtelar', 'a20d2f15875392ab2eef15accc0c2a', 'lhirthe@example.com', '454-843-7420x638', 25, 1, ''),
(32, 'Rosamond', 'Schmidt', 'vida.rutherford', 'cacdc3711d44a97cd01bc11059db35', 'dawson.hayes@example.com', '580-735-9697x92627', 26, 2, ''),
(33, 'Madaline', 'Gerlach', 'littel.nicole', '73e35b129917374a2c5a6726dd84ea', 'xrath@example.com', '(653)856-9138x119', 27, 3, ''),
(34, 'Randall', 'Heaney', 'nyasia13', '8def75a6250938dee8c7248721292e', 'mdickinson@example.org', '725.562.9721x507', 28, 1, ''),
(35, 'Glen', 'Keebler', 'lea22', '8ac0d3beea801b0f0a872228023f5c', 'juwan87@example.com', '(603)418-9423', 29, 2, ''),
(36, 'Amely', 'Kertzmann', 'altenwerth.litzy', '2148f2fb43ee5ba661953d1451c36d', 'lfriesen@example.org', '757.567.5265x73426', 30, 3, ''),
(37, 'Eduardo', 'Corkery', 'walker.rahul', 'ffb8e880615992092d818f1462092b', 'christian.mosciski@example.net', '1-090-797-4161x1436', 31, 1, ''),
(38, 'Davion', 'Dach', 'frami.leora', '6f9a03b984acaa928563e98f02494f', 'wcrona@example.org', '749.889.8491x36712', 32, 2, ''),
(39, 'Brooke', 'Grant', 'theodore95', '376c1da0e693e76f5a69010f8dd1c9', 'kathlyn.schmeler@example.org', '878.563.1740x49240', 33, 3, ''),
(40, 'Reyna', 'Hartmann', 'kristina58', '3390127676bf818f195c6fd8459658', 'mona.larkin@example.net', '127.389.6220x771', 34, 1, ''),
(41, 'Nellie', 'Nolan', 'lisette54', 'f33cf1f3184932eca29506b39702a7', 'lmcdermott@example.net', '(779)254-7823x063', 35, 2, ''),
(42, 'Antoinette', 'Sanford', 'gkassulke', '1135b9938810a66ecef43c2f6e2a3c', 'ford61@example.org', '06914859966', 36, 3, ''),
(43, 'Garret', 'Ziemann', 'cbogisich', 'c87dab10f31474583381ca6049a0bf', 'runolfsson.adah@example.com', '488.567.3776', 37, 1, ''),
(44, 'Elenora', 'Kiehn', 'ajacobi', 'ae7e7408b21d389f4370c9fc56593f', 'quitzon.lenna@example.com', '(055)600-5543x1357', 38, 2, ''),
(45, 'Ines', 'Hane', 'dejah27', '5dd675d9109eb6479e590fc24648f7', 'vrenner@example.org', '1-574-056-3607x2488', 39, 3, ''),
(46, 'Fannie', 'Hodkiewicz', 'damion.lesch', 'e3be32aa13f3caa21e0d03d075dca0', 'phand@example.net', '02408377524', 40, 1, ''),
(47, 'Jamir', 'Beer', 'ella.huels', 'd56cc630e379b929a74bf1bf49dcaf', 'tstamm@example.com', '572.946.7732', 41, 2, ''),
(48, 'Emil', 'Morar', 'lily.kunze', '638387ee31b2a880ccd383c06ca470', 'cernser@example.net', '397-849-3048x3213', 42, 3, ''),
(49, 'Jarrod', 'Hand', 'cruecker', '0fcdef95b93e948983dcf70fe5267f', 'waelchi.greg@example.com', '1-340-800-6431', 43, 1, ''),
(50, 'Jordi', 'Wilderman', 'quentin54', '20e70ac84e8e29166bc8684f30eb42', 'runte.eloy@example.com', '1-167-385-0726', 44, 2, ''),
(51, 'Joel', 'Rau', 'jgoyette', '1767e25b9f1575f995617a0d4c4c9b', 'sstanton@example.com', '1-931-932-8444x78034', 45, 3, ''),
(52, 'Shanelle', 'Breitenberg', 'ybechtelar', 'a6e5f3ac5f607c967574d0838da679', 'ullrich.destiney@example.com', '(933)707-7958x207', 46, 1, ''),
(53, 'Tyrel', 'Connelly', 'clemmie.kulas', '023af9391aa09a41ae802b8c9c3587', 'kpaucek@example.com', '01914499344', 47, 2, ''),
(54, 'Louisa', 'Berge', 'samara.funk', 'c2347916baaa2dbcf9377f09852382', 'nels.dickinson@example.com', '09213346070', 48, 3, ''),
(55, 'Abigail', 'Schaden', 'murray92', '6600a0b481942f5c1a8c6cb9d23014', 'hilario.johns@example.org', '470-319-9853', 49, 1, ''),
(56, 'Quentin', 'Torphy', 'katlynn58', '4633d3777cf33ab45253170ded98fe', 'qsteuber@example.org', '701-924-4179x2207', 50, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_company`
--

CREATE TABLE `user_company` (
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_company`
--

INSERT INTO `user_company` (`user_id`, `company_id`) VALUES
(7, 1),
(8, 2),
(9, 3),
(10, 4),
(11, 5),
(12, 6),
(13, 7),
(14, 8),
(15, 9),
(16, 10),
(17, 11),
(18, 12),
(19, 13),
(20, 14),
(21, 15),
(22, 16),
(23, 17),
(24, 18),
(25, 19),
(26, 20),
(27, 21),
(28, 22),
(29, 23),
(30, 24),
(31, 25),
(32, 26),
(33, 27),
(34, 28),
(35, 29),
(36, 30),
(37, 31),
(38, 32),
(39, 33),
(40, 34),
(41, 35),
(42, 36),
(43, 37),
(44, 38),
(45, 39),
(46, 40),
(47, 41),
(48, 42),
(49, 43),
(50, 44),
(51, 45),
(52, 46),
(53, 47),
(54, 48),
(55, 49),
(56, 50);

-- --------------------------------------------------------

--
-- Table structure for table `user_company_notes`
--

CREATE TABLE `user_company_notes` (
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `notes` varchar(2000) DEFAULT NULL,
  `note_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_company_notes`
--

INSERT INTO `user_company_notes` (`user_id`, `company_id`, `notes`, `note_type`) VALUES
(7, 1, 'I almost think I should think!\' (Dinah was the same thing with you,\' said Alice, \'and why it is I hate cats and dogs.\' It was opened by another footman in livery, with a cart-horse, and expecting.', 'qui'),
(8, 2, 'Lizard in head downwards, and the Queen never left off sneezing by this time.) \'You\'re nothing but the Hatter went on, yawning and rubbing its eyes, for it was written to nobody, which isn\'t usual,.', 'minima'),
(9, 3, 'Alice. \'And where HAVE my shoulders got to? And oh, I wish I could shut up like a steam-engine when she had forgotten the words.\' So they sat down, and nobody spoke for some while in silence. At.', 'est'),
(10, 4, 'Tortoise because he taught us,\' said the Hatter, and, just as I\'d taken the highest tree in front of them, and then raised himself upon tiptoe, put his shoes on. \'--and just take his head.', 'non'),
(11, 5, 'Hatter, with an air of great curiosity. \'It\'s a pun!\' the King repeated angrily, \'or I\'ll have you got in as well,\' the Hatter instead!\' CHAPTER VII. A Mad Tea-Party There was no longer to be a.', 'eum'),
(12, 6, 'I can say.\' This was quite silent for a minute, while Alice thought to herself, \'Now, what am I then? Tell me that first, and then said, \'It WAS a narrow escape!\' said Alice, timidly; \'some of the.', 'laborum'),
(13, 7, 'Ugh, Serpent!\' \'But I\'m NOT a serpent!\' said Alice sadly. \'Hand it over afterwards, it occurred to her ear. \'You\'re thinking about something, my dear, and that he had never before seen a rabbit with.', 'enim'),
(14, 8, 'YOUR watch tell you my history, and you\'ll understand why it is almost certain to disagree with you, sooner or later. However, this bottle does. I do so like that curious song about the same size.', 'est'),
(15, 9, 'Alice quite jumped; but she saw them, they set to work, and very soon finished off the top of its mouth, and addressed her in a hurry: a large pigeon had flown into her eyes; and once she remembered.', 'itaque'),
(16, 10, 'Just then she walked on in a melancholy air, and, after glaring at her with large eyes like a serpent. She had not a moment that it led into the Dormouse\'s place, and Alice was a queer-shaped little.', 'eligendi'),
(17, 11, 'Alice, quite forgetting that she was saying, and the Dormouse began in a low voice, to the law, And argued each case with my wife; And the moral of that is--\"Oh, \'tis love, \'tis love, \'tis love,.', 'accusamus'),
(18, 12, 'I find a pleasure in all directions, tumbling up against each other; however, they got their tails in their mouths--and they\'re all over with William the Conqueror.\' (For, with all their simple.', 'quia'),
(19, 13, 'Alice in a melancholy tone. \'Nobody seems to like her, down here, and I\'m sure I have dropped them, I wonder?\' And here poor Alice began to repeat it, when a cry of \'The trial\'s beginning!\' was.', 'aliquid'),
(20, 14, 'Hatter, it woke up again as quickly as she could. \'No,\' said Alice. \'Nothing WHATEVER?\' persisted the King. (The jury all looked puzzled.) \'He must have been changed for Mabel! I\'ll try if I like.', 'in'),
(21, 15, 'The first witness was the Rabbit was no use now,\' thought Alice, \'shall I NEVER get any older than you, and don\'t speak a word till I\'ve finished.\' So they had been running half an hour or so there.', 'et'),
(22, 16, 'Alice remained looking thoughtfully at the sudden change, but very glad to get to,\' said the Mock Turtle, who looked at the end of the window, I only wish it was,\' said the King. \'Nearly two miles.', 'eaque'),
(23, 17, 'Caterpillar. This was quite silent for a conversation. Alice replied, rather shyly, \'I--I hardly know, sir, just at present--at least I know who I am! But I\'d better take him his fan and.', 'architecto'),
(24, 18, 'I\'m not Ada,\' she said, without opening its eyes, \'Of course, of course; just what I could shut up like a writing-desk?\' \'Come, we shall get on better.\' \'I\'d rather finish my tea,\' said the Dodo.', 'est'),
(25, 19, 'Pigeon the opportunity of showing off her head!\' Alice glanced rather anxiously at the frontispiece if you want to go nearer till she heard a little feeble, squeaking voice, (\'That\'s Bill,\' thought.', 'sed'),
(26, 20, 'Alice thought she might as well as she could. \'The game\'s going on between the executioner, the King, \'that only makes the matter with it. There was a table in the distance. \'And yet what a dear.', 'dicta'),
(27, 21, 'France-- Then turn not pale, beloved snail, but come and join the dance? Will you, won\'t you, will you, won\'t you join the dance. So they got settled down again into its nest. Alice crouched down.', 'est'),
(28, 22, 'Alice a little startled by seeing the Cheshire Cat sitting on a summer day: The Knave of Hearts, who only bowed and smiled in reply. \'Please come back with the other arm curled round her head. \'If I.', 'vitae'),
(29, 23, 'Lobster Quadrille, that she was now only ten inches high, and her eyes anxiously fixed on it, for she could guess, she was now only ten inches high, and her eyes filled with tears running down his.', 'aspernatur'),
(30, 24, 'Dormouse denied nothing, being fast asleep. \'After that,\' continued the Gryphon. \'Then, you know,\' Alice gently remarked; \'they\'d have been was not a moment to be managed? I suppose I ought to be.', 'rerum'),
(31, 25, 'Cheshire cat,\' said the Hatter was the White Rabbit blew three blasts on the bank, and of having nothing to do: once or twice, and shook itself. Then it got down off the mushroom, and crawled away.', 'sit');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `user_type_id` int(11) NOT NULL,
  `user_type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`user_type_id`, `user_type`) VALUES
(1, 'windler'),
(2, 'ziemann'),
(3, 'cronin');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(11) NOT NULL,
  `vendor_code` varchar(45) DEFAULT NULL,
  `vendor_name` varchar(100) DEFAULT NULL,
  `address_1` varchar(100) DEFAULT NULL,
  `address_2` varchar(100) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `zip` varchar(15) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `term_id` int(11) DEFAULT NULL,
  `payment_method_id` int(11) DEFAULT NULL,
  `account_number` varchar(50) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `vendor_code`, `vendor_name`, `address_1`, `address_2`, `city`, `state`, `zip`, `country`, `phone`, `email`, `fax`, `term_id`, `payment_method_id`, `account_number`, `contact`) VALUES
(1, '074', 'Douglas-Beier', '96100 Kris Tunnel Apt. 739', 'Apt. 137', 'Williamsonshire', 'SouthCarolina', '95361-7627', 'United States Virgin Islands', '05920494521', 'feest.oren@example.net', '432-168-3598x12866', 1, 1, '4', '1-982-925-9956x283'),
(2, '196', 'Collier, Runolfsson and Swaniawski', '196 Rutherford Brooks', 'Apt. 384', 'New Noemy', 'Minnesota', '93883-7522', 'Papua New Guinea', '(645)861-2283x7103', 'gislason.casimer@example.net', '212-626-8125x2324', 2, 2, '61', '1-150-217-6643x20429'),
(3, '472', 'Hettinger, Emmerich and Labadie', '051 Candido Estate', 'Apt. 904', 'Jakubowskiport', 'Minnesota', '17196-6199', 'Tonga', '1-539-947-0738x425', 'mhowell@example.net', '1-664-279-7658x750', 3, 3, '2065034', '+62(1)9469886852'),
(4, '254', 'Corkery, Smitham and O\'Connell', '2040 Gleason Cliff Suite 049', 'Apt. 660', 'North Ikestad', 'NorthCarolina', '47266-2101', 'Vietnam', '(214)365-3262x21543', 'kobe77@example.com', '00412351897', 4, 1, '7314793', '295.010.4232'),
(5, '178', 'Hodkiewicz, Harber and Gibson', '01226 Gleichner Parks', 'Suite 047', 'Devynton', 'NorthCarolina', '72375-4299', 'United States Minor Outlying Islands', '(978)647-1193', 'rohan.skye@example.net', '1-746-600-2132x98166', 5, 2, '5', '327-103-3614x7836'),
(6, '912', 'Ritchie PLC', '206 Jedidiah Highway Apt. 143', 'Suite 465', 'Port Monserratview', 'Kansas', '76682-1240', 'Iraq', '039-399-1637x31308', 'bahringer.evangeline@example.org', '971.241.0761', 6, 3, '16', '1-658-250-6109x980'),
(7, '497', 'Fadel Ltd', '802 Mayert Parkways', 'Apt. 290', 'New Fred', 'Minnesota', '86906-8294', 'Jamaica', '+83(2)2236677063', 'earl54@example.com', '1-131-422-9217x67911', 7, 1, '924658', '(195)500-1662x3484'),
(8, '451', 'Murray PLC', '5328 Ullrich Stravenue', 'Suite 549', 'South Tevinfurt', 'RhodeIsland', '05093', 'Luxembourg', '(216)193-3303', 'medhurst.kristin@example.net', '482-909-0192x98575', 8, 2, '', '568.185.8777'),
(9, '262', 'Littel-Hayes', '119 Gutmann Loop Suite 880', 'Apt. 401', 'East Addisontown', 'Idaho', '99324-0539', 'Antigua and Barbuda', '864.230.2978', 'keenan02@example.com', '01817565818', 9, 3, '70648', '1-426-470-8475x20277'),
(10, '614', 'Kshlerin-Schuppe', '9756 Kuvalis Expressway Suite 631', 'Apt. 547', 'Lake Dominic', 'Mississippi', '89243', 'Kazakhstan', '(102)489-6144', 'augustine.lakin@example.net', '(336)929-2626', 10, 1, '56', '891-507-8066x6404'),
(11, '059', 'Jones-Ortiz', '618 Norris Port Suite 855', 'Apt. 604', 'South Rashadport', 'Washington', '25336', 'Tokelau', '494-948-5003x9090', 'rmclaughlin@example.net', '(848)548-0427', 11, 2, '', '+42(8)9340534950'),
(12, '629', 'Schmeler, Waters and Cummerata', '1466 Maybelle Estate', 'Suite 092', 'Port Stephanie', 'Texas', '72055', 'Nicaragua', '277-460-5087', 'alana74@example.net', '922.145.8775x189', 12, 3, '79011586', '+13(2)6484269662'),
(13, '823', 'Lang LLC', '3920 Turcotte Village Apt. 323', 'Apt. 349', 'West Vern', 'Nebraska', '95289-5756', 'Sierra Leone', '1-822-163-2486x62990', 'mckayla.bergnaum@example.net', '+72(9)0469192164', 13, 1, '35903483', '803-953-8356x8674'),
(14, '147', 'Collins, Bogisich and Price', '4920 Von Junctions Suite 300', 'Suite 863', 'East Desmondton', 'Kansas', '14038-8389', 'Grenada', '08034302210', 'dianna.bahringer@example.net', '1-686-263-2957x11242', 14, 2, '568', '+13(3)4873695081'),
(15, '277', 'Marks, Koch and Littel', '04496 Lacey Row', 'Suite 302', 'South Stone', 'California', '79825', 'Pitcairn Islands', '1-204-544-3571x21972', 'jarrod89@example.com', '(432)353-1537', 15, 3, '28', '(890)427-8272'),
(16, '470', 'O\'Reilly-Boehm', '01585 Effie Park Suite 116', 'Apt. 354', 'Jamesonshire', 'Washington', '65384-4555', 'French Guiana', '721-528-7561x0875', 'vada.douglas@example.net', '(014)672-1830', 16, 1, '106723339', '852-087-1337x04335'),
(17, '114', 'Schulist Ltd', '34690 Parker Grove', 'Apt. 592', 'Macejkovicborough', 'Massachusetts', '90560-8743', 'Guinea', '085-116-4899', 'friesen.sedrick@example.org', '(212)579-7852x569', 17, 2, '29', '1-000-893-6218'),
(18, '325', 'Bogisich-Koelpin', '03885 Prosacco Mountains Apt. 416', 'Apt. 368', 'Port Ruthiehaven', 'Alabama', '76683', 'French Polynesia', '542-721-1983x5632', 'pouros.clark@example.com', '+91(2)1556926031', 18, 3, '650329', '(429)690-3474'),
(19, '881', 'Schinner and Sons', '50487 June Alley Apt. 337', 'Suite 728', 'New Monserrate', 'Tennessee', '25425-6582', 'Portugal', '1-040-531-1240x34552', 'charles.rath@example.net', '(315)574-0207x87939', 19, 1, '89904888', '(704)626-8700x454'),
(20, '428', 'Koss-O\'Hara', '2321 Gulgowski Fort Apt. 734', 'Suite 644', 'Port Jensen', 'Indiana', '89841', 'Maldives', '1-486-422-1344x58360', 'elody02@example.org', '+37(4)0556324615', 20, 2, '4057051', '(177)833-8063x60347'),
(21, '242', 'Blanda-Kunze', '64768 Kailyn River', 'Apt. 156', 'Eulahchester', 'Wyoming', '44986-1887', 'United Arab Emirates', '+92(9)9935451358', 'hamill.rylan@example.net', '07367636724', 21, 3, '99479', '(525)808-9267x5201'),
(22, '121', 'Dietrich, Cole and Bernhard', '974 Rex Via', 'Suite 087', 'South Julieberg', 'NewYork', '95027', 'Kazakhstan', '093.936.2293x11983', 'edgardo.braun@example.com', '(270)107-1129x46790', 22, 1, '7090497', '+05(2)4194406298'),
(23, '272', 'Hahn-Swift', '91481 McKenzie Street', 'Apt. 696', 'Haroldmouth', 'Oklahoma', '05827', 'Tunisia', '611-019-6976', 'rsawayn@example.com', '(975)915-4921', 23, 2, '8', '1-687-000-1343x6612'),
(24, '860', 'Lemke-Bosco', '3756 Kiehn Centers', 'Suite 427', 'West Eldon', 'Alaska', '64387-6365', 'Palestinian Territory', '062.865.6486x6690', 'assunta.denesik@example.net', '1-867-067-4109', 24, 3, '6331564', '104-993-3377x07806'),
(25, '838', 'Koelpin and Sons', '106 Luisa Field', 'Apt. 379', 'Gennarohaven', 'District of Columbia', '50302-6943', 'Malawi', '499-474-4624x288', 'abelardo75@example.com', '301-477-7164', 25, 1, '56559', '(242)788-1526'),
(26, '896', 'Fritsch, Rogahn and Kirlin', '57807 Douglas Heights Apt. 808', 'Apt. 962', 'Tomasland', 'Delaware', '06655-2214', 'Guam', '(453)464-9486x7678', 'velva.stoltenberg@example.com', '942-018-3200x7930', 1, 2, '23', '1-743-320-6007'),
(27, '512', 'Abernathy, Hagenes and Cummings', '54414 Garrett Place Apt. 874', 'Apt. 550', 'Leslieside', 'Texas', '33510-0678', 'Hong Kong', '009.652.7699x082', 'edward.wuckert@example.net', '495-030-3532', 2, 3, '5327128', '1-280-730-1865x289'),
(28, '568', 'Lynch, Hodkiewicz and Koss', '78894 Waters Fort Suite 061', 'Suite 386', 'Amparomouth', 'Arizona', '51772', 'Eritrea', '613.539.4568x701', 'swaniawski.serenity@example.com', '+31(3)9705426607', 3, 1, '449', '065.358.3609x9188'),
(29, '703', 'Hintz and Sons', '815 Matteo Oval Apt. 810', 'Apt. 267', 'Wintheiserfort', 'NorthCarolina', '14005-4718', 'Ghana', '064-241-5301x651', 'julius37@example.com', '763.443.5416x1475', 4, 2, '836', '1-116-657-4464'),
(30, '555', 'Swaniawski-Kilback', '7094 Myles Shore', 'Suite 786', 'Sengerberg', 'California', '55205-3391', 'Tajikistan', '258.192.6476x725', 'thand@example.net', '005.263.3679', 5, 3, '82511', '248.208.3497'),
(31, '139', 'Leannon, Langworth and Howe', '858 Towne Forge Suite 597', 'Suite 321', 'Brekkeburgh', 'Washington', '36540', 'Guam', '784-942-1481', 'mack.denesik@example.net', '673.820.1502x408', 6, 1, '84779', '(555)708-9662x40511'),
(32, '455', 'Schmitt, Abshire and Kilback', '814 Langworth Wells Suite 859', 'Apt. 139', 'Mertztown', 'Connecticut', '32072', 'Kenya', '653.850.3194x72065', 'nbradtke@example.com', '1-093-197-3993x1184', 7, 2, '145', '896-059-2240x62002'),
(33, '893', 'Mills-Heathcote', '08314 Upton Prairie Apt. 877', 'Apt. 124', 'Danielport', 'Kentucky', '24788-7758', 'Isle of Man', '(277)646-3448', 'gmueller@example.org', '098-465-8632x70821', 8, 3, '630673', '1-887-628-0241'),
(34, '100', 'Miller, Schmidt and Rempel', '00330 Clovis Lakes Suite 989', 'Apt. 021', 'Friedrichshire', 'Colorado', '45126-8547', 'Morocco', '(143)597-0246x24418', 'maximus73@example.net', '623.155.7176', 9, 1, '718754', '1-439-816-2308x497'),
(35, '463', 'Stokes-Ward', '0865 Klocko Mountain', 'Apt. 395', 'South Christopher', 'NewJersey', '85935', 'Ethiopia', '887-183-9613x84204', 'ucrist@example.net', '302.478.9732', 10, 2, '279', '001-106-3394x658'),
(36, '284', 'Schuppe and Sons', '129 Kuhic Views', 'Apt. 310', 'Quigleyberg', 'Oregon', '65085', 'United States Virgin Islands', '081.013.9601x37083', 'joe.dickens@example.net', '524.257.0154', 11, 3, '82195', '446.815.3630x3471'),
(37, '773', 'Klein-Buckridge', '2015 Roselyn Trafficway', 'Suite 815', 'New Nickview', 'Idaho', '37541', 'Greece', '(357)891-3382', 'zyundt@example.net', '584-159-8098', 12, 1, '', '527-559-6140x945'),
(38, '516', 'Jakubowski-Legros', '6846 Lolita Isle Suite 798', 'Apt. 729', 'Runolfssonfort', 'WestVirginia', '41187-1076', 'Guadeloupe', '1-779-718-2527x503', 'eschultz@example.net', '1-684-587-6009', 13, 2, '425', '1-533-664-6335x43535'),
(39, '492', 'Beer-Harris', '879 Eden Extension', 'Apt. 466', 'New Alia', 'Louisiana', '50845-5072', 'Palestinian Territory', '1-298-889-5660', 'hcole@example.net', '(509)231-3399', 14, 3, '31', '452.701.5814x177'),
(40, '830', 'Schimmel Group', '207 Bailey Fork Apt. 532', 'Suite 369', 'Stehrchester', 'California', '94211-3723', 'Gabon', '766-041-0285x681', 'marks.telly@example.net', '1-768-675-3740x175', 15, 1, '56', '+61(6)9285126870'),
(41, '652', 'Kohler, Waters and Marvin', '6818 Zboncak Stream Apt. 694', 'Apt. 188', 'Lake Maximillia', 'Pennsylvania', '61259-9896', 'Oman', '370-691-4857', 'domenic.dibbert@example.com', '894.369.0129x780', 16, 2, '9', '689-693-7554x3298'),
(42, '224', 'Rowe-Kulas', '37621 Neoma Forest', 'Suite 399', 'East Raquelfurt', 'Hawaii', '13691', 'Sierra Leone', '(361)675-4537x78227', 'oconroy@example.net', '263.506.4456x40559', 17, 3, '303020845', '+36(8)2333538227'),
(43, '933', 'Little Ltd', '480 Torp Village', 'Apt. 647', 'Kleinside', 'Utah', '52636-0164', 'Germany', '180-962-1723x240', 'zborer@example.net', '(693)176-5561', 18, 1, '608', '1-426-654-0924'),
(44, '733', 'Rosenbaum and Sons', '2999 Roberta Points', 'Suite 269', 'Mariomouth', 'Texas', '07359', 'Turks and Caicos Islands', '296.300.5970x92851', 'jordon90@example.com', '(860)326-8935x301', 19, 2, '616905506', '371-533-0577x84945'),
(45, '776', 'West LLC', '5105 Cornell Lakes', 'Apt. 240', 'New Bartonhaven', 'NorthCarolina', '06656-5953', 'Jordan', '267.078.3765', 'maybell.fadel@example.com', '1-010-888-7848', 20, 3, '7', '239-619-0773x9235'),
(46, '046', 'Johnson LLC', '0207 Orn Highway', 'Apt. 054', 'Madgefurt', 'Kentucky', '79638-1732', 'Vietnam', '+87(9)0054096901', 'oma.mayer@example.com', '670-717-1794', 21, 1, '', '(372)833-3771x963'),
(47, '718', 'Gulgowski, Champlin and Schaefer', '288 Elwin Crescent', 'Apt. 739', 'North Catalinamouth', 'Michigan', '48130-0665', 'Libyan Arab Jamahiriya', '1-576-426-5854', 'bfarrell@example.net', '057.663.9742x82187', 22, 2, '', '604-362-9177x08734'),
(48, '070', 'Jerde-Harber', '006 Cydney Alley Suite 134', 'Suite 540', 'Port Shanatown', 'Delaware', '68425-8222', 'Albania', '642.551.5319', 'rkirlin@example.org', '994-047-5619x40008', 23, 3, '86286', '1-493-135-5000'),
(49, '447', 'Nikolaus, Cartwright and Hansen', '0443 Antwon Path Apt. 588', 'Apt. 908', 'Rippinport', 'WestVirginia', '56192', 'Taiwan', '1-919-821-7561x4902', 'marlene.rowe@example.org', '1-639-605-6170x95464', 24, 1, '629591', '271.148.4113x871'),
(50, '315', 'Thompson Inc', '43098 Feeney Plaza', 'Suite 400', 'New Daniella', 'Hawaii', '04623', 'Korea', '04701251704', 'ardella18@example.org', '+69(1)8221471016', 25, 2, '760400159', '931.182.2926x657');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alcohol_category`
--
ALTER TABLE `alcohol_category`
  ADD PRIMARY KEY (`alcohol_category_id`);

--
-- Indexes for table `alcohol_inventory`
--
ALTER TABLE `alcohol_inventory`
  ADD PRIMARY KEY (`alcohol_inventory_id`),
  ADD KEY `company_fk7_idx` (`company_id`),
  ADD KEY `alcohol_category_fk_idx` (`alcohol_category_id`),
  ADD KEY `vendor_fk7_idx` (`vendor_id`),
  ADD KEY `food_unit_fk4_idx` (`food_unit_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `cost_of_goods`
--
ALTER TABLE `cost_of_goods`
  ADD PRIMARY KEY (`cost_of_goods_id`),
  ADD KEY `vendor_fk_idx` (`vendor_id`);

--
-- Indexes for table `daily_cash`
--
ALTER TABLE `daily_cash`
  ADD PRIMARY KEY (`daily_cash_id`),
  ADD KEY `company_fk3_idx` (`company_id`);

--
-- Indexes for table `dashboard_data`
--
ALTER TABLE `dashboard_data`
  ADD PRIMARY KEY (`dashboard_data_id`),
  ADD KEY `company_fk9_idx` (`company_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `job_code_fk_idx` (`job_code_id`);

--
-- Indexes for table `employee_company`
--
ALTER TABLE `employee_company`
  ADD PRIMARY KEY (`employee_id`,`ccmpany_id`),
  ADD KEY `company_fk_idx` (`ccmpany_id`);

--
-- Indexes for table `employee_history`
--
ALTER TABLE `employee_history`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `job_code_fk2_idx` (`job_code_id`);

--
-- Indexes for table `food_item_cost`
--
ALTER TABLE `food_item_cost`
  ADD PRIMARY KEY (`food_item_cost_id`),
  ADD KEY `company_fk3_idx` (`company_id`),
  ADD KEY `vendor_fk3_idx` (`vendor_id`),
  ADD KEY `food_unit_fk_idx` (`food_unit_id`),
  ADD KEY `gl_code_fk_idx` (`gl_code_id`);

--
-- Indexes for table `food_unit`
--
ALTER TABLE `food_unit`
  ADD PRIMARY KEY (`food_unit_id`),
  ADD KEY `unit_idx` (`unit`),
  ADD KEY `abbr` (`abbreviation`);

--
-- Indexes for table `food_unit_conversion`
--
ALTER TABLE `food_unit_conversion`
  ADD PRIMARY KEY (`original_unit`,`new_unit`),
  ADD KEY `food_unit_fk4_idx` (`new_unit`);

--
-- Indexes for table `gl_code`
--
ALTER TABLE `gl_code`
  ADD PRIMARY KEY (`gl_code_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `term_fk2_idx` (`term_id`),
  ADD KEY `company_fk10_idx` (`company_id`);

--
-- Indexes for table `invoice_line`
--
ALTER TABLE `invoice_line`
  ADD PRIMARY KEY (`invoice_line_id`),
  ADD KEY `food_item_cost_fk5_idx` (`food_item_cost_id`),
  ADD KEY `invoice_fk_idx` (`invoice_id`);

--
-- Indexes for table `job_code`
--
ALTER TABLE `job_code`
  ADD PRIMARY KEY (`job_code_id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`payment_method_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `company_fk8_idx` (`company_id`),
  ADD KEY `employee_fk8_idx` (`employee_id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `usertypeid_fk_idx` (`user_type_id`);

--
-- Indexes for table `user_company`
--
ALTER TABLE `user_company`
  ADD PRIMARY KEY (`user_id`,`company_id`),
  ADD KEY `company_id_fk_idx` (`company_id`);

--
-- Indexes for table `user_company_notes`
--
ALTER TABLE `user_company_notes`
  ADD PRIMARY KEY (`user_id`,`company_id`),
  ADD KEY `company_id_fk_idx2` (`company_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`user_type_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`),
  ADD KEY `term_fk_idx` (`term_id`),
  ADD KEY `payment_method_fk_idx` (`payment_method_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alcohol_category`
--
ALTER TABLE `alcohol_category`
  MODIFY `alcohol_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `alcohol_inventory`
--
ALTER TABLE `alcohol_inventory`
  MODIFY `alcohol_inventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `cost_of_goods`
--
ALTER TABLE `cost_of_goods`
  MODIFY `cost_of_goods_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `daily_cash`
--
ALTER TABLE `daily_cash`
  MODIFY `daily_cash_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `dashboard_data`
--
ALTER TABLE `dashboard_data`
  MODIFY `dashboard_data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `employee_history`
--
ALTER TABLE `employee_history`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `food_item_cost`
--
ALTER TABLE `food_item_cost`
  MODIFY `food_item_cost_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `food_unit`
--
ALTER TABLE `food_unit`
  MODIFY `food_unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `invoice_line`
--
ALTER TABLE `invoice_line`
  MODIFY `invoice_line_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `payment_method_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `term_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `alcohol_inventory`
--
ALTER TABLE `alcohol_inventory`
  ADD CONSTRAINT `alcohol_category_fk` FOREIGN KEY (`alcohol_category_id`) REFERENCES `alcohol_category` (`alcohol_category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `company_fk7` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `food_unit_fk4` FOREIGN KEY (`food_unit_id`) REFERENCES `food_unit` (`food_unit_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vendor_fk7` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`vendor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cost_of_goods`
--
ALTER TABLE `cost_of_goods`
  ADD CONSTRAINT `vendor_fk` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`vendor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `daily_cash`
--
ALTER TABLE `daily_cash`
  ADD CONSTRAINT `company_fk3` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dashboard_data`
--
ALTER TABLE `dashboard_data`
  ADD CONSTRAINT `company_fk9` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `job_code_fk` FOREIGN KEY (`job_code_id`) REFERENCES `job_code` (`job_code_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employee_company`
--
ALTER TABLE `employee_company`
  ADD CONSTRAINT `company_fk` FOREIGN KEY (`ccmpany_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `employee_fk` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employee_history`
--
ALTER TABLE `employee_history`
  ADD CONSTRAINT `job_code_fk2` FOREIGN KEY (`job_code_id`) REFERENCES `job_code` (`job_code_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `food_item_cost`
--
ALTER TABLE `food_item_cost`
  ADD CONSTRAINT `company_fk4` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `food_unit_fk2` FOREIGN KEY (`food_unit_id`) REFERENCES `food_unit` (`food_unit_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `gl_code_fk` FOREIGN KEY (`gl_code_id`) REFERENCES `gl_code` (`gl_code_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `vendor_fk4` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`vendor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `food_unit_conversion`
--
ALTER TABLE `food_unit_conversion`
  ADD CONSTRAINT `food_unit_fk8` FOREIGN KEY (`original_unit`) REFERENCES `food_unit` (`abbreviation`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `food_unit_fk9` FOREIGN KEY (`new_unit`) REFERENCES `food_unit` (`abbreviation`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `company_fk10` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `term_fk2` FOREIGN KEY (`term_id`) REFERENCES `term` (`term_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `invoice_line`
--
ALTER TABLE `invoice_line`
  ADD CONSTRAINT `food_item_cost_fk5` FOREIGN KEY (`food_item_cost_id`) REFERENCES `food_item_cost` (`food_item_cost_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `invoice_fk` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`invoice_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `company_fk8` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `employee_fk8` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `usertypeid_fk` FOREIGN KEY (`user_type_id`) REFERENCES `user_type` (`user_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_company`
--
ALTER TABLE `user_company`
  ADD CONSTRAINT `company_id_fk` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_company_notes`
--
ALTER TABLE `user_company_notes`
  ADD CONSTRAINT `company_id_fk2` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id_fk2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vendor`
--
ALTER TABLE `vendor`
  ADD CONSTRAINT `payment_method_fk` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_method` (`payment_method_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `term_fk` FOREIGN KEY (`term_id`) REFERENCES `term` (`term_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
