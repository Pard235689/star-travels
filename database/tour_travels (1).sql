-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 01:13 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour_travels`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_tour`
--

CREATE TABLE `book_tour` (
  `s_no` int(11) NOT NULL,
  `booking_id` varchar(255) NOT NULL,
  `tour_name` varchar(255) NOT NULL,
  `tour_price` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `booking_date` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `district` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_tour`
--

INSERT INTO `book_tour` (`s_no`, `booking_id`, `tour_name`, `tour_price`, `fname`, `lname`, `dob`, `booking_date`, `email`, `phone`, `district`, `state`, `country`, `pincode`, `address`) VALUES
(5, '208360071', 'Ayodhya Tourism', '₹ 8000', 'Karan', 'Kumar', '2023-08-17', '2023-08-31', 'pard235689@gmail.com', 8874421137, 'Deoria', 'Up', 'India', 274702, 'Danur\r\nBhatpar rani'),
(6, '942082495', 'Kashi Mandir', '₹ 6000', 'Karan', 'Kumar', '2023-09-08', '2023-08-31', 'pard235689@gmail.com', 8874421137, 'Deoria', 'Up', 'India', 274702, 'Danur\r\nBhatpar rani'),
(7, '155156830', 'Kashi Mandir', '₹ 6000', 'Karan', 'Kumar', '2023-08-11', '2023-08-17', 'pard235689@gmail.com', 8874421137, 'Deoria', 'Up', 'India', 274702, 'Danur\r\nBhatpar rani'),
(8, '196681623', 'Kashi Mandir', '₹ 6000', 'Karan', 'Kumar', '2023-08-22', '2023-08-23', 'pard235689@gmail.com', 8874421137, 'Kanpur Nagar', 'Up', 'India', 274702, 'Danur\r\nBhatpar rani'),
(9, '289503397', 'Kashi Mandir', '₹ 6000', 'fgfgdgh', 'sfgdd', '2023-08-16', '2023-08-22', 'pard235689@gmail.com', 8874421137, 'Kanpur Nagar', 'UTTAR PRADESH', 'India', 274702, 'Ushra tola'),
(10, '243264331', 'Kashi Mandir', '₹ 6000', 'Karan', 'Kumar', '2023-09-02', '2023-08-23', 'pard235689@gmail.com', 8874421137, 'Kanpur Nagar', 'Up', 'India', 274702, 'Danur\r\nBhatpar rani'),
(11, '161302169', 'Kashi Mandir', '₹ 6000', 'Karan', 'Kumar', '2023-09-01', '2023-08-24', 'pard235689@gmail.com', 8874421137, 'DEORIA', 'Up', 'India', 274702, 'Danur\r\nBhatpar rani'),
(12, '320117996', 'Kashi Mandir', '₹ 6000', 'Karan', 'Kumar', '2023-08-11', '2023-08-10', 'pard235689@gmail.com', 8874421137, 'Kanpur Nagar', 'Up', 'India', 274702, 'Danur\r\nBhatpar rani'),
(13, '838443661', 'Kashi Mandir', '₹ 6000', 'Karan', 'Kumar', '2023-08-24', '2023-08-23', 'pard235689@gmail.com', 8874421137, 'DEORIA', 'Up', 'India', 274702, 'Danur\r\nBhatpar rani'),
(15, '799390411', 'Kashi Mandir', '₹ 6000', 'Karan', 'Kumar', '2023-08-16', '2023-08-24', 'pard235689@gmail.com', 8874421137, 'Kanpur Nagar', 'Up', 'India', 274702, 'Danur\r\nBhatpar rani'),
(16, '238249703', 'Kashi Mandir', '₹ 6000', 'Praduman ', 'Kushwaha', '2003-02-01', '2023-08-17', 'pkk5050pk@gmail.com', 8756975904, 'Lucknow ', 'UTTAR PRADESH', 'India', 208025, '119/q Sharda Nagar\r\nKanpur'),
(17, '207021154', 'Kashi Mandir', '₹ 6000', 'Karan', 'Kumar', '2023-08-25', '2023-08-19', 'pard235689@gmail.com', 8874421137, 'Kanpur Nagar', 'Up', 'India', 274702, 'Danur\r\nBhatpar rani'),
(18, '729312379', 'Kashi Mandir', '₹ 6000', 'Karan', 'Kumar', '2023-08-16', '2023-08-24', 'pard235689@gmail.com', 8874421137, 'Kanpur Nagar', 'Up', 'India', 274702, 'Danur\r\nBhatpar rani'),
(19, '445803421', 'Kashi Mandir', '₹ 6000', 'Karan', 'Kumar', '2023-08-26', '2023-08-18', 'pard235689@gmail.com', 8874421137, 'DEORIA', 'Up', 'India', 274702, 'Danur\r\nBhatpar rani');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `s_no` int(11) NOT NULL,
  `reference_id` varchar(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `your_msg` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`s_no`, `reference_id`, `fname`, `lname`, `phone`, `email`, `subject`, `your_msg`) VALUES
(1, '23041096', 'Karan', 'Kumar', 8874421137, 'pard235689@gmail.com', 'My rewards account not opening and showing to create new account ', 'dhgh'),
(2, '10531335', 'praduman', 'Kumar', 8874421137, 'pard235689@gmail.com', 'Fan Repair', 'fgjhfjghj'),
(4, '201836582', 'Karan', 'Kumar', 88744211371, 'pard235689@gmail.com', 'My rewards account not opening and showing to create new account ', 'uyutyutu'),
(5, '628957007', 'Karan', 'Kumar', 8874421137, 'pard235689@gmail.com', 'My rewards account not opening and showing to create new account ', 'ghfghgf'),
(6, '463361743', 'Karan', 'Kumar', 8874421137, 'pard235689@gmail.com', 'My rewards account not opening and showing to create new account ', 'sgfgf'),
(7, '613561076', 'Karan', 'Kumar', 8874421137, 'pard235689@gmail.com', 'My rewards account not opening and showing to create new account ', 'htrytr'),
(8, '577749823', 'Karan', 'Kumar', 8874421137, 'pard235689@gmail.com', 'My rewards account not opening and showing to create new account ', 'thtrt'),
(9, '244598696', 'Karan', 'Kumar', 8874421137, 'pard235689@gmail.com', 'My rewards account not opening and showing to create new account ', 'dhdh'),
(10, '464922312', 'Karan', 'Kumar', 8874421137, 'pard235689@gmail.com', 'My rewards account not opening and showing to create new account ', 'ghgfh'),
(11, '731762680', 'Karan', 'Kumar', 8874421137, 'pard235689@gmail.com', 'My rewards account not opening and showing to create new account ', 'ghgf'),
(12, '809506831', 'Karan', 'Kumar', 8874421137, 'pard235689@gmail.com', 'My rewards account not opening and showing to create new account ', 'dd'),
(13, '599467805', 'Karan', 'Kumar', 8874421137, 'pard235689@gmail.com', 'Fan Repair', 'fdhdh');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `s_no` int(11) NOT NULL,
  `image_id` varchar(255) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `sr_no` int(11) NOT NULL,
  `image_title` varchar(255) NOT NULL,
  `image_id` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`sr_no`, `image_title`, `image_id`, `image_name`) VALUES
(36, '1', '369389289', 'assets/admin/uploads/gallery/a_(1).jpg'),
(37, '2', '918494878', 'assets/admin/uploads/gallery/a_(2).jpg'),
(38, '3', '239706149', 'assets/admin/uploads/gallery/a_(3).jpg'),
(39, '4', '308029071', 'assets/admin/uploads/gallery/a_(4).jpg'),
(40, '5', '643796493', 'assets/admin/uploads/gallery/a_(5).jpg'),
(41, '6', '298066213', 'assets/admin/uploads/gallery/a_(6).jpg'),
(42, '7', '449466067', 'assets/admin/uploads/gallery/a_(7).jpg'),
(43, '8', '691798843', 'assets/admin/uploads/gallery/a_(8).jpg'),
(44, '9', '881746218', 'assets/admin/uploads/gallery/WhatsApp_Image_2023-05-21_at_10_31_02.jpg'),
(45, '10', '645484962', 'assets/admin/uploads/gallery/WhatsApp_Image_2023-05-31_at_07_17_12.jpg'),
(46, '11', '491607789', 'assets/admin/uploads/gallery/AYODHYA.jpg'),
(47, '12', '757334081', 'assets/admin/uploads/gallery/Dashawamedha_Ghat_in_Varanasi_2_20190806135418.jpg'),
(48, '13', '113091526', 'assets/admin/uploads/gallery/JamaMasjid.jpg'),
(49, '14', '427801028', 'assets/admin/uploads/gallery/LUCKNOW.jpg'),
(50, '15', '168241802', 'assets/admin/uploads/gallery/prayagraj.jpg'),
(51, '16', '248348172', 'assets/admin/uploads/gallery/prem_mandirdest_wiki_16922.jpg'),
(52, '17', '295458591', 'assets/admin/uploads/gallery/tajmahal.jpg'),
(53, '18', '116003390', 'assets/admin/uploads/gallery/4318377018_a2224dee70_z_20190304123205.jpg'),
(54, '19', '771814334', 'assets/admin/uploads/gallery/22612041358_4a9fec35d2_b_20190403172758.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_information`
--

CREATE TABLE `login_information` (
  `s_no` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_information`
--

INSERT INTO `login_information` (`s_no`, `user_id`, `email`, `password`) VALUES
(1, 235689, 'pard235689@gmail.com', '1234'),
(3, 12344, 'p@gmail.com', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `team_images`
--

CREATE TABLE `team_images` (
  `sr_no` int(11) NOT NULL,
  `image_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_images`
--

INSERT INTO `team_images` (`sr_no`, `image_id`, `name`, `designation`, `image_path`) VALUES
(8, '991093787', 'Praduman Kushwaha', 'Director', 'assets/admin/uploads/team/WhatsApp_Image_2023-05-21_at_10_31_02.jpg'),
(9, '220196326', 'Shubham Mall', 'Director', 'assets/admin/uploads/team/WhatsApp_Image_2023-05-31_at_07_17_12.jpg'),
(10, '779014774', 'Praduman ', 'admin', 'assets/admin/uploads/team/WhatsApp_Image_2023-05-21_at_10_31_02.jpg'),
(11, '116519203', 'Shubham', 'admin', 'assets/admin/uploads/team/WhatsApp_Image_2023-05-31_at_07_17_12.jpg'),
(12, '675361235', 'Praduman Kushwaha', 'admin', 'assets/admin/uploads/team/WhatsApp_Image_2023-05-21_at_10_31_02.jpg'),
(13, '380214752', 'Shubham Mall', 'admin', 'assets/admin/uploads/team/WhatsApp_Image_2023-05-31_at_07_17_12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_images`
--

CREATE TABLE `testimonial_images` (
  `s_no` int(11) NOT NULL,
  `image_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial_images`
--

INSERT INTO `testimonial_images` (`s_no`, `image_id`, `name`, `description`, `image_path`) VALUES
(7, '779473307', 'Praduman Kushwaha', 'Satisfied Customer Reviews Praduman Kushwaha. – ⭐⭐⭐⭐⭐ “I had an amazing experience with this company! The customer service was top-notch, and the product exceeded my expectations. I highly recommend them to anyone looking for quality products and excellent service.”', 'assets/admin/uploads/testimonial/WhatsApp_Image_2023-05-21_at_10_31_02.jpg'),
(8, '552761074', 'Shubham Mall', 'I recently booked a bus trip through the Star Travels application, and I must say, it was an outstanding experience from start to finish. I would undoubtedly give them a perfect score of 10 out of 10!', 'assets/admin/uploads/testimonial/WhatsApp_Image_2023-05-31_at_07_17_12.jpg'),
(9, '287425336', 'Ayush', 'Ever Lasting Trip\r\nIt was a great pleasure for us to thank a many times to Make My Trip for their friendly behave and so many help and guidance. I want to have my heartiest thanks, particularly Mr. Shubham Mall.\r\n\r\n', 'assets/admin/uploads/testimonial/WhatsApp_Image_2023-05-21_at_10_31_02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tour_images`
--

CREATE TABLE `tour_images` (
  `s_no` int(11) NOT NULL,
  `image_id` varchar(255) NOT NULL,
  `tour_name` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `short_description` text NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour_images`
--

INSERT INTO `tour_images` (`s_no`, `image_id`, `tour_name`, `description`, `short_description`, `image_path`, `price`) VALUES
(9, '854015328', 'Taj Mahal', 'Located on the banks of River Yamuna in Uttar Pradesh, Agra is a popular tourist destination as it is home to one of the 7 wonders of the world, the Taj Mahal . It is a sneak peek into the architectural history and legacy of the Mughal empire with two other UNESCO World Heritage Sites Agra Fort and Fatehpur Sikri. History, architecture, romance all together create the magic of Agra, and hence, makes for a must-visit for anyone living in or visiting India.\r\n\r\nAgra is one of the most populous cities in Uttar Pradesh and 24th most populous city in India. With its long and rich history,\r\n it is no wonder that Agra forms part of the popular Golden Triangle Circuit for tourists along with Delhi and Jaipur.\r\n It is also a part of the Uttar Pradesh Heritage Arc including Varanasi and Lucknow.\r\n History fanatics and architecture buffs are sure to have a ball here with the sheer expanse of the Mughal art and culture on display.\r\n\r\nApart from its monuments, Agra has some exciting stuff for foodies. It is as famous for its Petha (a sweet made from pumpkin and flavoured with rose water and saffron) as it is for the Taj Mahal.\r\n Agra is also well known for its marble artefacts which are best bought in the Sadar Bazaar or Kinaari Bazaar area. \r\n\r\nAgra is mostly visited on a one-day trip from New Delhi or other nearby cities in Uttar Pradesh but is totally worth it.\r\n Be prepared to be astounded, amazed, inspired and thrilled.\r\n However, be a little cautious about conmen in the guise of unofficial tour guides and fake handicrafts.\r\n\r\n', 'Located on the banks of River Yamuna in Uttar Pradesh, Agra is a popular tourist destination as it is home to one of the 7 wonders of the world, the Taj Mahal.\r\n It is a sneak peek into the architectural history and legacy of the Mughal empire with two other UNESCO World Heritage S...', 'assets/admin/uploads/tour/tajmahal.jpg', '5500'),
(10, '445497262', 'Kashi Mandir', 'World\'s oldest living city, Varanasi - also known as Kashi (City of Life) and Benaras, is the spiritual capital of India.\r\n It is one of Hinduism\'s seven holy cities. The old city of Varanasi lies along the western banks of the Ganges, spread across a labyrinth of narrow galis.\r\n Be prepared to walk on foot and encounter some holy cows! Temples at almost every turn engulf Varanasi but the Kashi Vishwanath Temple is the most visited and the oldest of the lot.\r\n Benaras is known as the city of Lord Shiva for a reason, and rightfully so.\r\n\r\nVaranasi is considered an auspicious place to die, as it is believed to grant moksha or liberation from the cycle of life and death.\r\n Spiritually enlightening, the heart of the city pulsates around the ghats, about 80 of which border the Ganges. Be prepared for the sights,\r\n sounds and smells! Don\'t miss out on the hot chaat and cool lassi. Though, all chaos and noise on the ghats take a pause before dusk when \r\nthe Ganga Aarti begins to take place, a ceremony of immense grandeur.', 'This divine city is also an important destination for Buddhists. Gautam Buddha preached his first sermon in Benaras, a part which is now in Sarnath.\r\nWorld\'s oldest living city, Varanasi - also known as Kashi (City of Life) and Benaras, is the spiritual capital of India. It is one of Hinduism\'s\r\n seven holy cities.', 'assets/admin/uploads/tour/Dashawamedha_Ghat_in_Varanasi_2_20190806135418.jpg', '6000'),
(11, '666947064', 'Vrindavan Prem Mandir', 'One of the oldest cities on the banks of Yamuna, Vrindavan is considered to be one of the most important places of pilgrimage for the devotees of Krishna.\r\n It is said that Lord Krishna had spent his childhood in Vrindavan. The name of the city has been derived from Vrinda (meaning basil) and van (meaning grove)\r\n which perhaps refer to the two small groves at Nidhivan and Seva Kunj. Since Vrindavan is considered to be a sacred place, a large number of people \r\ncome here to abandon their worldly life.\r\n\r\nThe city of Vrindavan hosts hundreds of Lord Krishna and Radha temples scattered throughout, the most famous ones being Banke Bihari temple and the \r\nworld-famous ISKCON temple. The vibrant surroundings perfectly depict the playful and benevolent nature of Lord Krishna. Located along the waters of\r\n River Yamuna, the numerous temples set amidst the thick woods and lush greenery of Vrindavan are the major attractions here. \r\n', 'One of the oldest cities on the banks of Yamuna, Vrindavan is considered to be one of the most important places of pilgrimage for the devotees of Krishna.\r\n It is said that Lord Krishna had spent his childhood in Vrindavan. ...\r\n', 'assets/admin/uploads/tour/prem_mandirdest_wiki_16922.jpg', '7000'),
(12, '383941560', 'Lucknow Tourism', 'The capital and the largest city of Uttar Pradesh, Lucknow, situated on the banks of river Gomti, welcomes you with a heartwarming note of \"Muskuraiyein, kyunki\r\n aap Lucknow mein hai\". A city of kebabs and nawabs, of architecture and history, of literature and culture – that is Lucknow in a nutshell for you. From a slice\r\n of rich colonial history to modernized museums, this artistic hub of Awadh region beautifully brings together the opulence of a glittering past and the simplicity\r\n of a modern city.\r\n\r\nRumi Darwaza, the Mughal Gateway built in the centre of the capital divides Lucknow into \'Old Lucknow\' which is ancient, and more crowded, and the \'New Lucknow\'\r\n which is urban and one of the most planned cities of Asia. Most of Old Lucknow is well-known for its bustling vibrant streets, authentic, mouth-watering kebab\r\n and biriyani outlets, lakhnavi chikan market, and the wholesale jewellery stores.\r\n\r\nNew Lucknow, on the other hand, hosts people of varied cultures and is structurally planned with wide roads, shopping malls and parks built to serve diverse\r\n entertainment purposes. The most famous among these parks are the Ambedkar Park and the Gomti Riverfront Park, both ideal places for visiting and strolling\r\n around with friends and family in the evening. \r\n\r\nHazratganj, a major shopping area located in the heart of Lucknow, is famous for its \'chaat\' and \'kulfi\' eateries, posh Mughlai restaurants, and various\r\n shopping complexes. All the buildings in Hazratganj have a distinct Victorian architecture, and you can shop for literally anything – starting from inexpensive\r\n accessories and trinkets to high-end clothes, shoes and jewellery. \r\n\r\nThe people of Lucknow are known for their courtly manners and endearing \'pehle aap\' (you first) culture, which always leaves behind a smile on the faces of\r\n its visitors. ', 'The capital and the largest city of Uttar Pradesh, Lucknow, situated on the banks of river Gomti, welcomes you with a heartwarming note of \"Muskuraiyein, kyunki\r\n aap Lucknow mein hai\". A city of kebabs and nawabs, of architecture and history, of literature and culture – that is Lucknow in a nuts...\r\n', 'assets/admin/uploads/tour/LUCKNOW.jpg', '5000'),
(13, '878382567', 'Allahabad Tourism', 'Allahabad,  now officially known as Prayagraj, is a city located in the Indian state of Uttar Pradesh. Reminiscent of all that is spiritual and sacred\r\n in Hinduism, Allahabad is famous for Triveni Sangam or the meeting point of three rivers - the Ganga, the Yamuna, and the Saraswati. Built on the site\r\n of the ancient town of Prayag, Allahabad has, since time immemorial, held the largest Hindu gathering on the banks of the Sangam - the Maha Kumbh Mela.\r\n While the Sangam city is often passed over for more travel-friendly cities, there is a lot to Allahabad besides just its religion.\r\n\r\nPrayag or Prayagraj had been the ancient name of the city of Allahabad. Pra means “first” and Yag means “devotion”. Prayag also signifies the coming \r\ntogether of rivers Ganga, Yamuna and Saraswati. After the Mughal invasion, Emperor Akbar, impressed by the location named the city Ilahabas which meant\r\n “Abode of God”. Emperor Shah Jahan, his grandson, renamed the city to Allahabad.\r\n\r\nOne of the top places to visit in Allahabad, if you’re spiritually inclined (and even if you’re not because this place deserves a visit), \r\nTriveni Sangam is a place bustling with tourists and locals all year round. The Maha Kumbh Mela is a religious occasion that is held here every twelve\r\n years and is attended by millions of pilgrims from all across the globe. The Allahabad Fort is another monument of historical significance and is a \r\nheritage site recognized by the UNESCO. Built during the reign of Akbar, this fort is also a fine example of the curation and craftsmanship of the Mughal era.\r\n\r\nOther popular places to visit in Allahabad include the Anand Bhavan, All Saints Cathedral, Chandra Shekhar Azad Park, and Allahabad Museum. \r\n', 'Allahabad finds its mention in Hindu Scripture Mahabharata as Kaushambi, the place which Kuru rulers of Hastinapur made their capital. It was also \r\na provincial capital of Mughals under the rule of Jahangir. The places ooze heritage, history, and stories galore, and once you visit, you will definitely\r\n have seen Allahabad ....', 'assets/admin/uploads/tour/prayagraj.jpg', '6000'),
(14, '33370462', 'Ayodhya Tourism', 'Ayodhya, located on the banks of river Sarayu in Uttar Pradesh, is one of the seven sacred cities for Hindus. Ayodhya plays a critical role in the Hindu epic of\r\n Ramayana as it is believed to be the birthplace of Lord Rama. This religious town is also the birthplace of four of Jainism\'s 24 Tirthankaras \r\n(religious teachers), beckoning tourists with its serene ghats.\r\n\r\nWith monkeys galore, the buzz of the visiting tourists, and a general spiritual aura, Ayodhya has been surrounded by controversy since about a decade now.\r\n It is the site of the 1992 Indian riots related to the Babri Masjid fiasco. The mosque, which was allegedly built on Ram Janmabhoomi Temple, became the\r\n bone of contention between Hindus and Muslims. In 2005, Ayodhya witnessed a terrorist attack at the site of Ramlalla Temple.\r\n\r\nDespite the controversy, Ayodhya has so much colour and spirituality to see for its tourists and has emerged as a significant spiritual centre.\r\nThe land of multi-faith temples, the traffic-free streets of Ayodhya are intriguing enough in itself to warrant a visit.', 'Ayodhya, located on the banks of river Sarayu in Uttar Pradesh, is one of the seven sacred cities for Hindus. Ayodhya plays a critical role in the Hindu epic of\r\n Ramayana as it is believed to be the birthplace of Lord Rama. This religious town is also the birthplace of four of Jainism\'s 24 Tirthankaras \r\n(religious teachers), beckoning .....', 'assets/admin/uploads/tour/AYODHYA.jpg', '8000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_tour`
--
ALTER TABLE `book_tour`
  ADD PRIMARY KEY (`s_no`),
  ADD KEY `district` (`district`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `login_information`
--
ALTER TABLE `login_information`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `team_images`
--
ALTER TABLE `team_images`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `testimonial_images`
--
ALTER TABLE `testimonial_images`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `tour_images`
--
ALTER TABLE `tour_images`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_tour`
--
ALTER TABLE `book_tour`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `login_information`
--
ALTER TABLE `login_information`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team_images`
--
ALTER TABLE `team_images`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `testimonial_images`
--
ALTER TABLE `testimonial_images`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tour_images`
--
ALTER TABLE `tour_images`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
