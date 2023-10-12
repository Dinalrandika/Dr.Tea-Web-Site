-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 01, 2023 at 07:47 AM
-- Server version: 5.7.36
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ceylon_tea`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`, `email`) VALUES
('Admin1', 'admin123', 'admin1@gmail.com'),
('Admin2', 'admin456', 'admin2@gmail.com'),
('Admin3', 'admin789', 'admin3@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `article` varchar(20) NOT NULL,
  `writer` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `content1` text NOT NULL,
  `content2` text NOT NULL,
  PRIMARY KEY (`article`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`article`, `writer`, `date`, `content1`, `content2`) VALUES
('black tea', 'kamal perera', 'September 8, 2022', 'Black tea is a type of tea that is more oxidized than green, oolong, and white teas. It is made from the leaves of the Camellia sinensis plant and is known for its strong, \r\n                                    bold flavor and dark color. The level of oxidation in black tea gives it a higher caffeine content than other types of tea.\r\n                                    Black tea is commonly consumed as a hot beverage and can be served plain or with milk, sugar, honey, or other flavorings. \r\n                                    Some popular varieties of black tea include Darjeeling, Assam, Ceylon, and English Breakfast. \r\n                                    Black tea is also used in cooking and baking, such as in the making of tea-infused desserts or as a flavoring agent in savory dishes.', 'Black tea is typically consumed as a hot beverage and can be served plain or with milk, sugar, honey, or other flavorings. Some popular types of black tea include:\r\n\r\nAssam: a strong, full-bodied tea that is grown in the Assam region of India\r\nDarjeeling: a lighter, more floral tea that is grown in the Darjeeling region of India\r\nCeylon: a medium-bodied tea that is grown in Sri Lanka\r\nEarl Grey: a tea that is flavored with oil of bergamot, a type of citrus fruit\r\nEnglish Breakfast: a blend of black teas that is traditionally served with milk and sugar\r\nBlack tea contains caffeine, which can provide a boost of energy and improve mental alertness. \r\nIt also contains antioxidants and other beneficial compounds that can promote heart health, reduce inflammation, and support the immune system.'),
('green tea', ' John Smith', 'September 23, 2017', 'Green tea is a type of tea that is made from the leaves of the Camellia sinensis plant and is known for its fresh, grassy flavor and light, pale green color. \r\n                                Unlike black tea, green tea is not oxidized during processing, which helps to preserve its natural compounds and nutrients.\r\n                                Green tea contains a high concentration of antioxidants, such as catechins and polyphenols, which have been linked to a variety of health benefits, \r\n                                including reduced inflammation, improved brain function, and a lower risk of certain types of cancer.\r\n                                Green tea is commonly consumed as a hot beverage and can be served plain or with honey, lemon, or other flavorings. It can also be enjoyed cold as an iced tea. \r\n                                Some popular varieties of green tea include Sencha, Matcha, and Gunpowder. Green tea is also used in cooking and baking, \r\n                                such as in the making of green tea ice cream or as a flavoring agent in marinades and sauces.', 'Green tea is typically consumed as a hot beverage and can be served plain or with honey, lemon, or other flavorings. It can also be enjoyed cold as an iced tea. Some popular types of green tea include:\r\n\r\nSencha: a Japanese green tea that is known for its grassy, vegetal flavor\r\nMatcha: a powdered green tea that is used in Japanese tea ceremonies and is known for its rich, umami flavor\r\nGunpowder: a Chinese green tea that is rolled into small pellets, giving it a smoky, earthy flavor\r\n\r\nOverall, green tea is a healthy and refreshing beverage that can be enjoyed on its own or as part of a tea blend. \r\nIts high antioxidant content and other beneficial compounds make it a popular choice for those seeking to improve their health and wellbeing.'),
('herbal tea', 'praveen madava', 'october 18, 2016', 'Herbal tea, also known as tisane, is an infusion made from herbs, spices, fruits, flowers, or other plant materials that are not derived from the Camellia sinensis plant, \r\n                                    which is used to make traditional tea. \r\n                                    Herbal teas are caffeine-free and can have a wide range of flavors and health benefits, depending on the ingredients used.\r\n                                    Common ingredients in herbal teas include chamomile, peppermint, ginger, rooibos, hibiscus, and lemon balm. Each ingredient has unique properties that can promote relaxation, \r\n                                    aid digestion, boost the immune system, or provide other health benefits.\r\n                                    Herbal teas are typically consumed hot, but can also be enjoyed cold as an iced tea. They are often served plain, but can also be sweetened with honey, sugar, or other sweeteners. \r\n                                    Some popular types of herbal tea blends include sleep aids, detox teas, and immune-boosting teas. Herbal teas are also commonly used in traditional medicine and home remedies.', 'Herbal tea can be made from a wide range of ingredients, each of which has its own unique flavor and potential health benefits. Some of the most popular ingredients used in herbal tea include:\r\nChamomile: a flower that is known for its calming and soothing properties\r\nPeppermint: a plant that is known for its refreshing and invigorating flavor\r\nGinger: a root that is known for its spicy, warming flavor and its ability to aid digestion\r\nRooibos: a plant that is native to South Africa and is known for its sweet, nutty flavor and high antioxidant content\r\nHibiscus: a flower that is known for its tart, fruity flavor and its ability to lower blood pressure\r\nLemon balm: an herb that is known for its citrusy flavor and its ability to promote relaxation and reduce anxiety\r\nHerbal tea is typically served hot, although it can also be enjoyed cold as an iced tea. It can be sweetened with honey, sugar, or other natural sweeteners, and can be flavored with spices, citrus fruits, or other flavorings.\r\n\r\nIn addition to its wide range of flavors, herbal tea is also known for its potential health benefits. Different ingredients in herbal tea can promote relaxation,\r\n aid digestion, boost the immune system, or provide other health benefits. However, \r\nit is important to note that the health benefits of herbal tea have not been extensively studied and may vary depending on the individual and the specific ingredients used.'),
('Ashwagandha Tea', 'mewan pradeep', 'September 8, 2012', 'Almost an everyday ingredient stocked up in the kitchen racks, ashwagandha is regarded as a kind of wizardry spice that helps boost the immune system significantly, \r\n                                    besides stabilising blood sugar and reducing anxiety as well as. \r\nTo prepare this tea take a 3-inch piece of dried ashwagandha root, a cup of water and around 1 tsp honey. Wash and heat up the ashwagandha root in some water,\r\n allow it to boil for around 10 – 15 minutes. Strain into a cup and stir some honey in it and it is ready to consume.', 'To make Ashwagandha tea, you\'ll need the following ingredients and steps:\r\n\r\nIngredients:\r\n\r\n1 teaspoon of dried Ashwagandha root powder\r\n1 cup of water\r\nOptional: honey, lemon, or other sweeteners or flavorings of your choice\r\nInstructions:\r\n\r\nBoil 1 cup of water in a small pot or kettle.\r\nAdd 1 teaspoon of dried Ashwagandha root powder to the boiling water.\r\nReduce the heat to low and let the mixture simmer for about 10 minutes, allowing the Ashwagandha to infuse into the water.\r\nAfter 10 minutes, remove the pot from heat and strain the tea to remove any solids.\r\nIf desired, add sweeteners like honey or flavorings like lemon juice to enhance the taste.\r\nStir well to combine the sweetener or flavoring with the tea.\r\nPour the Ashwagandha tea into a cup and enjoy it while it\'s still warm.\r\nNote: It\'s always a good idea to consult with a healthcare professional or herbalist before incorporating any new herbal remedies or supplements into your routine, \r\nespecially if you have any underlying health conditions or are taking medications. \r\nThey can provide personalized advice based on your specific needs and circumstances.'),
('Chamomile Tea', 'sudeep perera', 'September 23, 2007', ' Chamomile is a beautiful flower with soft and white petals that resemble little daisies. The dried petals of chamomile have for some time been in use for their tranquilizing, calming, and antimicrobial impacts. \r\n\r\nChamomile has a flavonoid known as Apigenin, which is liable for loosening up the body and helping it to rest. Having an adequate amount of rest is vital for a hearty and healthy immunity in place. Boil a cup of water. In a tea kettle put a gram of dried tea leaves or a sack of chamomile tea in it.\r\n Pour some hot water over it and leave it in there for at least  3-4 minutes. Strain the mix into your cups and add a tsp of natural sweetener.', 'Chamomile tea is a popular herbal tea known for its calming and soothing properties. Here\'s a simple recipe to make chamomile tea:\r\n\r\nIngredients:\r\n\r\n1 chamomile tea bag or 1 tablespoon of dried chamomile flowers\r\n1 cup of boiling water\r\nOptional: honey or lemon for added flavor\r\nInstructions:\r\n\r\nBoil a cup of water in a pot or kettle.\r\nPlace a chamomile tea bag or 1 tablespoon of dried chamomile flowers in a tea infuser or directly in a cup.\r\nPour the boiling water over the tea bag or chamomile flowers.\r\nLet the tea steep for about 5 minutes to allow the chamomile flavor to infuse into the water. You can adjust the steeping time based on your preference for a stronger or milder flavor.\r\nOnce the tea has steeped, remove the tea bag or strain out the chamomile flowers.\r\nIf desired, add honey or a squeeze of lemon to sweeten or enhance the flavor. Stir well to combine.\r\nAllow the tea to cool slightly before drinking.\r\nPour the chamomile tea into a cup and enjoy its calming and relaxing qualities.\r\nChamomile tea is best enjoyed before bedtime or during moments when you want to unwind and relax. It\'s caffeine-free and can be a soothing beverage to help you de-stress. \r\nRemember to consult with a healthcare professional if you have any concerns or if you are allergic to chamomile or related plants.'),
('Lemon and Pepper Tea', 'praveen madava', 'october 18, 2016', 'This immune-boosting tea can amp up your resistance and help you feel fresh to fight the long day of fatigue. \r\n                                    It is said to be fantastic for detoxing the framework, and for diminishing throbbing joint pains for arthritis sufferers. \r\n\r\nPlace the pepper and turmeric in the cup, and pour over hot boiling water. Mix in the lemon squeeze and honey, and your drink to a healthy immunity has been fixed', 'Lemon and pepper tea is a refreshing and invigorating beverage that combines the tangy flavor of lemon with a hint of spice from black pepper. Here\'s a simple recipe to make lemon and pepper tea:\r\n\r\nIngredients:\r\n\r\n1 lemon\r\n1 teaspoon of freshly squeezed lemon juice\r\n1/4 teaspoon of freshly ground black pepper\r\n1 cup of boiling water\r\nOptional: honey or sweetener of your choice\r\nInstructions:\r\n\r\nSlice the lemon into thin rounds or wedges.\r\nIn a cup, add the freshly squeezed lemon juice and freshly ground black pepper.\r\nPour the boiling water into the cup.\r\nStir well to dissolve the black pepper and mix it with the lemon juice.\r\nAllow the tea to steep for 3-5 minutes to infuse the flavors.\r\nIf desired, add honey or a sweetener of your choice to balance the tanginess of the lemon.\r\nStir well to combine the sweetener with the tea.\r\nRemove the lemon slices or wedges if desired.\r\nLet the tea cool slightly before drinking.\r\nServe the lemon and pepper tea in a cup and enjoy its refreshing taste and unique flavor combination.\r\nLemon and pepper tea is a great option for those looking for a warm and stimulating beverage. The zesty lemon provides a burst of citrus flavor, while the black pepper adds a subtle spiciness. \r\nRemember to adjust the quantity of lemon juice and black pepper based on your personal taste preferences.');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` varchar(5) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `markid` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `username`, `password`, `markid`) VALUES
('cu001', 'Sandamal', 'customer1', 'customer1', 'mk001'),
('cu002', 'Dananjaya', 'customer2', 'customer2', 'mk001');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `message`) VALUES
('dinal', 'dinal@gmail.com', 'dinal'),
('dineth', 'dineth@gmail.com', 'dienthdineth'),
('isuru', 'isuru@gmail.com', 'isuruusuruusuruusur'),
('pasan', 'pasan@gmail.com', 'i want to order big batch'),
('mike frenando', 'malik@gmail.com', 'Best Product and quality is excellent !!!'),
('john williom', 'john@gmail.com', 'Quality is excellent and dilivery is fast very good service'),
('malith', 'malith@gmail.com', 'Excellent');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `item_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `price` int(10) NOT NULL,
  `image_url` text NOT NULL,
  PRIMARY KEY (`item_no`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`item_no`, `name`, `price`, `image_url`) VALUES
(8, 'Herbal Tea 400g', 1590, 'IMG-5f8954bd209a92.78214246.jpg'),
(9, 'Tumeric Tea 400g', 990, 'IMG-5f8954caa02539.76436861.jpg'),
(10, 'Black Tea 400g', 750, 'IMG-6462089f2e7803.17315354.jpg'),
(11, 'Ginger Tea 400g', 1750, 'IMG-646217017cb811.35258645.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`name`, `email`, `message`) VALUES
('praveen', 'praveen@gmail.com', 'drop a list of your products');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`) VALUES
('dinal', 'dinal', 'dinal@gmail.com'),
('user', 'user', 'user@mail.com'),
('dineth', 'dineth', 'dineth@gmail.com'),
('isuru', 'isuru', 'isuru@gmail.com'),
('pasan', 'pasan', 'pasan@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
