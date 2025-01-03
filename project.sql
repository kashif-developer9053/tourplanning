-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 07:16 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `role` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `role`, `active`) VALUES
(1, 'Anh Phu', 'nguyenanhphu@gmail.com', '123456', 1, 1),
(2, 'Quoc Trong', 'hoquoctrong@gmail.com', '123456', 0, 1),
(3, 'Huu Loc', 'nguyenhuuloc@gmail.com', '123456', 0, 1),
(4, 'Nhat Tan', 'nguyennhattan@gmail.com', '123456', 0, 0),
(5, 'Duc Hieu', 'hoduchieu@gmail.com', '123456', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(11) NOT NULL,
  `user_name` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `payment` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `person1` int(11) NOT NULL DEFAULT 0,
  `person2` int(11) NOT NULL DEFAULT 0,
  `person3` int(11) NOT NULL DEFAULT 0,
  `person4` int(11) NOT NULL DEFAULT 0,
  `amount` int(11) NOT NULL DEFAULT 0,
  `schedule_id` int(11) NOT NULL,
  `date_book` datetime NOT NULL DEFAULT curdate(),
  `location_start` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `transport` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `duration` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `tour_code` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tour_name` varchar(300) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `user_name`, `email`, `address`, `phone`, `payment`, `person1`, `person2`, `person3`, `person4`, `amount`, `schedule_id`, `date_book`, `location_start`, `date_start`, `date_end`, `transport`, `duration`, `status`, `tour_code`, `user_id`, `tour_name`) VALUES
(7, 'Khoa Pug', 'khoapug@gmai.com', 'Hẻm 110 Đường 30, Phường 6, Gò Vấp, Thành phố Hồ Chí Minh, Việt Nam', '0938421433', 'direct', 2, 0, 0, 0, 498, 2, '2022-07-14 14:01:05', 'Nha Trang', '2022-08-26 05:30:00', '2022-08-29 16:00:00', 'Car', '4', 1, 'NTQN4T2608-2908', 3, 'Tour Nha Trang - Quy Nhon 4 days 3 nights: Back to the land of martial arts and literature'),
(11, 'Phung Thanh Do', 'phungthanhdo@gmail.com', '590 CMT8 phường 11, quận 3, thành phố Hồ Chí Minh, Việt Nam', '0914413681', 'direct', 2, 0, 2, 0, 476, 1, '2022-07-20 01:19:38', 'Nha Trang', '2022-07-26 05:30:00', '2022-07-29 16:00:00', 'Car', '4', 1, 'NTQN4T2607-2907', 1, 'Tour Nha Trang - Quy Nhon 4 days 3 nights: Back to the land of martial arts and literature'),
(12, 'Phung Thanh Do', 'phungthanhdo@gmail.com', '590 CMT8 phường 11, quận 3, thành phố Hồ Chí Minh, Việt Nam', '0914413681', 'direct', 1, 0, 0, 0, 199, 1, '2022-07-20 01:21:33', 'Nha Trang', '2022-07-26 05:30:00', '2022-07-29 16:00:00', 'Car', '4', 0, 'NTQN4T2607-2907', 1, 'Tour Nha Trang - Quy Nhon 4 days 3 nights: Back to the land of martial arts and literature'),
(13, 'Phung Thanh Do', 'phungthanhdo@gmail.com', '590 CMT8 phường 11, quận 3, thành phố Hồ Chí Minh, Việt Nam', '0914413681', 'direct', 2, 0, 2, 0, 356, 4, '2022-07-20 01:24:08', 'Da Nang', '2022-09-01 05:00:00', '2022-09-03 18:00:00', 'Car', '3', 0, 'DNQN3T0109-0309', 1, 'Tour Da Nang - Quy Nhon 3 days 2 nights: The sea is empty and peaceful'),
(14, 'Tìm Kiếm Nụ Cười Kẻ', 'phunats2108002@fpt.edu.vn', '26 ngô văn sở an nhơn bình định', '0987548698', 'direct', 3, 2, 2, 0, 1343, 20, '2022-07-21 10:31:07', 'Ho Chi Minh', '2022-08-22 00:00:00', '2022-08-25 00:00:00', 'Flight', '4', 0, 'DNTTH4T2208-2508', NULL, 'Da Nang - Hue - Lap An Lagoon - La Vang - Phong Nha Cave - Ba Na Tourist Area - Golden Bridge - Son Tra - Hoi An - Da Nang');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `comment` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `comment`, `date`) VALUES
(6, 'Jonny Tri', 'Tri1212@gmail.com', '0934875421', 'Lam sao de dat tour vay ??', '2022-07-21'),
(7, 'Trinh Thang Binh', 'binhthang2255@gmai.com', '0915487633', 'I want to know more about your company !!!', '2022-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_date` datetime NOT NULL DEFAULT curdate(),
  `subject` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `content` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `reply` varchar(500) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `reply_date` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_date`, `subject`, `content`, `reply`, `reply_date`, `user_id`, `schedule_id`) VALUES
(2, '2022-07-14 14:30:17', 'Feeling of myself', 'The service here is fast and enthusiastic', 'Thanks you for feedback !!!!!!', '2022-07-19 23:00:36', 3, 2),
(6, '2022-07-19 23:17:45', 'Toi Cam Thay', 'rat tuyet voi !!! <3', 'Chan thanh cam on ban !!!', '2022-07-19 23:24:46', 1, 2),
(7, '2022-07-19 23:18:43', 'Toi Cam Thay', 'rat tuyet voi !!! <3', 'Ok ban !', '2022-07-19 23:24:56', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`, `img`) VALUES
(1, 'Ha Noi', 'placeHanoi.jpg'),
(2, 'Ha Long', 'placeHalong.jpg'),
(3, 'Sapa', 'placeSapa.jpg'),
(4, 'Thua Thien Hue', 'placeHue.jpg'),
(5, 'Da Nang', 'placeDanang.jpg'),
(6, 'Nha Trang', 'placeNhatrang.jpg'),
(7, 'Da Lat', 'placeDalat.jpg'),
(8, 'Phu Quoc', 'placePhuquoc.jpg'),
(9, 'Ho Chi Minh', 'placeHCM.jpeg'),
(10, 'Vung Tau', 'placeVungtau.jpg'),
(11, 'Con Dao', 'placeCondao.jpg'),
(12, 'Quy Nhon', 'placeQuynhon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news_event`
--

CREATE TABLE `news_event` (
  `news_id` int(11) NOT NULL,
  `news_name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `news_content` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `img1` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `news_date` datetime NOT NULL DEFAULT curdate(),
  `img3` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `img2` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `newstitle` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `content2` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `news_event`
--

INSERT INTO `news_event` (`news_id`, `news_name`, `news_content`, `img1`, `news_date`, `img3`, `img2`, `newstitle`, `content2`) VALUES
(1, 'Phu Quoc tour 4 days 3 nights 5 stars cheap package', '1. When is the right time to go to Phu Quoc?\r\nWhen is the best time to buy Phu Quoc travel combo 4 days 3 nights? The answer is from January to July. Taking advantage of when Phu Quoc has blue sea and white sand not overshadowed by the rains, you should pack a backpack to explore the island at this time. The mild sunny weather, little rain plus the majestic wild beauty will produce thousands of extreme virtual live photos, ready to bring you unforgettable experiences.\r\n\r\n2. Transportation to Phu Quoc\r\nAs an island in Kien Giang province located to the southwest, the plane is the most popular means for tourists to move to Phu Quoc. This is an option that will save you a lot of money. Travel time is also faster. Therefore, you also have more experiences at the beautiful Pearl Island. However, finding cheap tickets is not easy. Do not worried! Click the link below to see what\'s in store!', 'phuquoc1.jpg', '2022-07-19 14:34:37', 'phuquoc3.jpg', 'phuquoc2.jpg', 'No city represents the great development of Vietnam better than Da Nang. This place becomes a modern tourist magnet, sparkling with impressive works and many unexpected items of the era, Da Nang tourism is always a sincere love every summer!', '3. Means of transportation in Phu Quoc\r\nIn Phu Quoc, visitors will travel by the following popular means:\r\n\r\nOn the ground: motorbikes, taxis, buses. However, not every resort or hotel in Phu Quoc has a motorbike rental service. Therefore, traveling by car by hiring a taxi or book grab will be a safe and convenient option.\r\nAt sea: Canoe. Phu Quoc tour 4 days 3 nights includes transportation costs, so visitors can rest assured about this issue.\r\nPhu Quoc combos/tours 4 days 3 nights 5 stars all include transportation. So, compared to booking grab, taxi waiting takes time and costs a lot of stops, hunting for cheap tours will bring a convenient experience for you, minimizing the phenomenon of \"hacking\" tourists. \r\n\r\n4. Why should you go to Phu Quoc tour 4 days 3 nights 5 stars?\r\nPhu Quoc tour 4 days 3 nights 5-star hotel includes quality accommodation, meals, transportation and the cost of visiting some fun places. Therefore, it will be much more convenient than paying a lot of expenses on a self-sufficient trip. This not only helps to arrange time to visit the places but also has to spend a lot more money than booking a package tour.\r\nPrestigious tours help visitors to visit many destinations to enjoy a variety of authentic cuisines for a quality vacation. Let\'s see what Phu Quoc Tour 4 days 3 nights TourViet includes!'),
(2, 'There is such a new HCM city, have you tried it yet?', 'The most unique and \"hot\" experience tour on the occasion of April 30\r\nIn order to bring visitors many new and unique experiences, Vietravel launches the tour \"Viewing Ho Chi Minh City from above by helicopter\" on the occasion of April 30. Visitors will be able to enjoy the full beauty of the \"Pearl of the Far East\" from above. Accordingly, the first pilot flight will depart on April 30, 2022 with a preferential price of 4.08 million VND/pax and flight time of 40 minutes. Tour price includes: cost of round trip helicopter, hat, mineral water, car pick up and see off guests to the airport, guide support procedures for the group on the ground and insurance for visitors.', 'hcm1.jpg', '2022-07-22 08:59:06', 'hcm3.jpg', 'hcm2.jpg', '\"Viewing Ho Chi Minh City from above by helicopter\" is the first tourism product in the series of new and unique products of Vietravel, which opens the campaign \"Ho Chi Minh City welcomes you - Welcome to Ho Chi Minh City\" City” joins hands with the City Department of Tourism to promote the image of Ho Chi Minh City becoming the leading lively tourist city in Asia.', 'It is known that Vietravel also cooperates with Southern Helicopter Company to organize charter flights by helicopter according to the needs of tourists, including corporate customers (M.I.C.E). In addition, to help tourists have more choices in this unique tour, Vietravel also plans to offer flexible flight times according to itineraries from 20 minutes, 40 minutes, 50 minutes to 80 minutes to experience the Resort. Can Gio mangrove biosphere reserve, Endless fields – Tan Lap tourist area (Long An) from above…\r\n\r\n\"Chill\" with a new look to see Ho Chi Minh City from a helicopter perspective\r\nThere are few places that possess such unique features as Ho Chi Minh City. It is a perfect and ingenious combination of ancient architectural works mixed with modern beauty associated with the history of the city\'s formation and development. With a flight time of 40 minutes, the journey brings visitors a new feeling of a lively, most developed city in Vietnam but no less lyrical.\r\nThe helicopter will take off from the rooftop at Hospital 175, bringing visitors to experience the panoramic view of Ho Chi Minh City in the most \"chill\" way as in the MV of Den Vau or Low G. From the impressive view from above, Visitors can freely watch the interesting movement of traffic, landmarks and typical architectural works of the \"Pearl of the Far East\" such as: Aeon Mall Tan Phu - RMIT University - Phu My Bridge - Cau Thu Thiem - Nha Rong Wharf - Saigon River - Landmark 81 building - Binh Quoi tourist area ... All are familiar places with young people, sometimes passing by regularly every day. But when watching them from above by helicopter, everything becomes shimmering and truly overwhelming. If you are not afraid of heights, everyone will be amazed by your collection of capturing great moments from a height of hundreds of meters.'),
(3, 'Colorful Tay culture by Na Hang lake', 'Na Hang Lake is located in Na Hang Nature Reserve, in the two districts of Na Hang and Lam Binh, Tuyen Quang province. Ho Na Hang in Tay language means \"last field\" - the residence of the Tay ethnic group. According to tradition, the Tay people often settle in valleys, near rivers and streams or have clean water from the mountains for convenience. They concentrated in each village, living mainly by farming and shifting cultivation.\r\nVisiting Lam Binh at the time of the fire dance festival, I was impressed with the cultural beauty that has been preserved for many generations. An indispensable procedure in the main ceremony is that the priest prays to the gods. When the shaman knocked on the harp and performed the ceremony, 12 healthy, young men sat opposite the magician. Through this sacred ritual, the people want to express their gratitude to the god who blesses a bountiful harvest.', 'nahang1.jpg', '2022-07-21 09:10:45', 'nahang3.jpg', 'nahang2.jpg', 'The first time you set foot in Na Hang, you will be surprised because the nature here still retains the pristine features. Interspersed between the mountains are the vast primeval forests and the clear blue lake water. Hidden deep in the mountains around the lake and caves, is the place to keep many ancient vestiges that make up a unique cultural area of the Tay people by Na Hang lake.', 'The worshiping part ends when the sun disappears. Under the flickering firelight, the young Pa Then took turns jumping on the embers. They used their bare hands and feet to destroy until the fire died down. This unique ritual is steeped in mystical spiritual colors. Today, the fire dance festival is still preserved and held solemnly. With spiritual beliefs, the fire dance festival of the Pa Then people is a very unique cultural treasure containing profound human values.\r\nTay people like to live in stilt houses because the house is tall and cool, suitable for the hot day and cold night climate of the mountains. Although society is developing day by day, people still keep the old stilt house style. The stilt house of the Tay people in Na Hang usually has three compartments and two wings. The floor is made of bamboo and in the middle of the house there is a fire stove made of square wooden molds, covered with rammed earth. The red stove in the middle of the house is still a symbol of the reunion and gathering of each family at night.\r\nWith the pristine, majestic but equally poetic nature, anyone who comes to Tuyen Quang must be moved by the vibrant beauty and unique culture of the highlands. Each trip, each experience of visitors in the journey to discover the Northeast spring flying with Vietravel Airlines will be the ideal vacation for the whole family who love nature and love to discover new things.'),
(4, 'Hunting a beautiful sunrise in Tay Ninh with a safe green journey', 'Experience the cable car through the clouds\r\nKnown as the \"roof of the South\", Ba Den mountain (Tay Ninh) with its fanciful beauty in the early morning sun is the spot to hunt clouds and watch the beautiful sunrise. On beautiful autumn days, the golden sunlight sparkling in the floating clouds is the perfect time to climb up and see nature. The poetic scenery and ideal height of 986m have attracted many people to choose Ba Den mountain as a way to enjoy nature, experience the beautiful moments of heaven and earth and \"hunt\" real photos.\r\nWith the cable car to the top of the mountain, you will experience going through the clouds, immersing yourself in the majestic natural scenery to conquer the highest mountain in the Southeast. The journey to the top of the sacred mountain will bring you wonderful experiences with a 360-degree view of Tay Ninh, touching the clouds and sky. In particular, you also have the opportunity to check-in the largest cable car station in the world, with a modern cable car line, the journey of worshiping and conquering the high mountain of tourists from all over the world becomes easier than ever.', 'tayninh1.jpg', '2022-07-15 09:10:45', 'tayninh3.jpg', 'tayninh2.jpg', 'Only away from the city. Less than 100 km from Ho Chi Minh City, Tay Ninh is an extremely suitable place to visit and relieve stress on short vacations. The peaceful Holy Land amidst the charming scenery, unspoiled in the clouds is one of the most popular tourist destinations with travel or photography believers.', 'Talking about climbing to enjoy, waiting for the dawn, or watching the white clouds, as dense as cotton floating in the vast sky, is something almost everyone wants to experience once. Many young people, after reaching the top of Ba Den mountain, chose to stay overnight, to welcome a new day and watch the sun rise. The fanciful look when a new day appears on the top of the mountain will be one of the things that make you remember forever.\r\n\r\nFall in love with the unspoiled natural scenery and long-standing spiritual architectural complex\r\nThe \"sea of ​​clouds\" on the top of the mountain is outstandingly beautiful, not inferior to other famous cloud hunting spots in Vietnam. Take the cable car to the top of the mountain, there will be towers for you to check-in and enjoy the beautiful scenery. The best thing is that you can watch the Tay Bo Da Son Buddha statue flying above the sea of ​​white clouds, as beautiful as being lost in a wonderland. Admiring the tallest majesty of the Buddha in Asia and visiting the sacred spiritual complex with dozens of places of worship, creating a sanctuary among the mountains is also a way for us to find peace for ourselves after the difficult times. The day the epidemic took place was stressful.\r\nStanding on high to look away and enjoy the coolness from nature, the scenery here seems to awaken the dream in each of us. Dawn at Ba Den Mountain is a poetic blend of colors, which is the time to take extremely romantic photos. Admiring those fresh colors will give us a feeling of serenity and lightness. Take advantage of the early morning to enjoy the most beautiful and cloudy time of the day!'),
(5, 'South Central Caravan - journey across the sea through the forest', 'Driving bon bon by yourself on the sunny and windy roads of the South Central region in a 4-day 3-night trip is the best experience. In those happy days, I was able to cross the beautiful and passionate beaches such as: \"sleeping princess\" Ca Na, watching Nha Trang Bay in the golden sunshine; Immerse yourself in the romantic beaches of Binh Lap, Binh Tien and visit the wild beauty of Vinh Hy Bay,...', 'caravan1.jpg', '2022-07-18 09:10:45', 'caravan3.jpg', 'caravan2.jpg', 'Not only famous for a series of the most beautiful beaches in the country, the South Central region also owns beautiful sea routes that make everyone fall in love. To kick off an exciting summer, the caravan crossing the sea through the forest brings you close experiences about the poetic sea route and the values that make up the unique features of the South Central region. Satisfied with the legendary road', 'In addition to being able to \"check-in\" by the blue sea and white sand, the caravan journey also took up all of our camera capacity with the route from poetic Vinh Hy to the vast forest of Nui Chua KDL. This is the location known as \"the most beautiful sea route in Vietnam\" thanks to the extremely winding bends and the combination of the sea and the mountains. Not stopping there, the road crossing the sub-desert from Bau Trang to the coast of Mui Ne also brought me beautiful and melancholy pictures with the scenery of the remote region just like Hollywood movies.\r\nMeanwhile, the sightseeing cruise on the Emperor Cruise in Nha Trang Bay also takes you lost in the luxurious life of the last king of the Nguyen Dynasty. Coming to Kinh beach, you have the opportunity to explore Binh Hung island and An Hill tourist destination - where there is a road through the forest down to the sea at Bai Chuong. About the land of Ninh Chu, admire the ancient coral reefs in Hang Rai and keep pictures with 1-0-2 in the wind power fields as beautiful as the West sky in Ninh Thuan,...\r\n\r\nEnjoy the famous delicacies of the sea\r\nAfter moments of sublimation on the windy sea lanes, a cozy meal will be the time for the members to share their passions and feelings. Therefore, the hearty dishes in the midst of the sunset on the sea and cocktails on the Emperor yacht will be the best.'),
(6, '\"Decoding\" the summer travel trend of young people', 'Elevate the experience with the service package of Flight Tickets and 4, 5 Star Hotels\r\nThe trend of domestic tourism has become the most exciting trend today thanks to the continuous promotions, stimulus programs, new product launches, etc. of many big brands. For young people, this is also the beginning of a whole new definition of \"dream trips\".\r\nElevate the experience with the service package of Flight Tickets and 4, 5 Star Hotels\r\nThe trend of domestic tourism has become the most exciting trend today thanks to the continuous promotions, stimulus programs, new product launches, etc. of many big brands. For young people, this is also the beginning of a whole new definition of \"dream trips\".', 'gioitre1.jpg', '2022-07-17 09:12:55', 'gioitre3.jpg', 'gioitre2.jpg', 'Excited about the beautiful landmarks of the country, like to experience new types of tourism such as train travel or cross-Vietnam journey, prioritize choosing a convenient, high-class travel service package that reasonable cost… are quite unexpected changes of young people when planning travel this summer.', 'In the summer, it is impossible to ignore the sea travel routes: Phu Quoc, Nha Trang, Tuy Hoa, Quy Nhon or Ly Son is one of the perfect options for the travel needs of young people this summer. With the \"cooling down\" price ranging from only VND 1,490,000 - VND 3,290,000 for a journey of 3-4 days, young people have immediately saved up to 30% compared to ordering retail services. Let\'s plan and enjoy a brilliant summer!\r\n\r\nEnjoy “summer surfing out the window” with train travel experience\r\nIt seems \"old time\", but traveling by train is the \"hot trend\" this summer because of the conveniences and experiences to look forward to. A comfortable, relaxed train that takes you on the railway lines along the S-shaped strip of land is the feature that you can\'t find in any other means.\r\n\r\nNot to mention, taking the train takes longer than the plane, but in return you will be able to see the magnificent nature, the shape of the country appears in the window, wonderfully beautiful. The golden sands in the sun, the green fields, the winding passes around the mountainside, the blue sea and the whispering waves… slowly appear in front of our eyes. Not only that, traveling by train is also extremely convenient when you don\'t have to wait in line for check-in, don\'t have to worry about excess baggage, especially being with family and friends comfortably. Talking, eating and resting in the same private space will help members bond emotionally.\r\nOne of the things that makes visitors excited is when they can combine departures from big cities: Hanoi, Quang Binh, Da Nang and Nha Trang, the tour program length is from 4 days, 6 days, 9 days. day ... making it easy for visitors to choose, schedule a journey to explore and no longer have to worry about a tight vacation time.\r\n\r\nThe cost optimization and flexibility in service selection is also a plus when visitors can choose a package tour with a price of from VND 1,550,000/day (using the entire Vinpearl hotel system) or a full-service tour. Meals and entrance fees are not included. The proactive cost, the attractions are suitable for young customers, giving you many interesting and free experiences. In addition, you can also easily combine it with many purposes such as visiting relatives or working but still want to have time to visit and travel.'),
(7, 'Cruise Halong Bay from the air', 'Ha Long Bay is always a beautiful picture that visitors who have once visited can never forget. Every little corner of Ha Long Bay is meticulously shaped by nature from the magnificent jade-colored water surface, deep green grass embracing the undulating islands and rich cave system... If before, When visitors enjoy the scenery of Ha Long Bay through luxury ships and yachts, looking up at the magnificence of nature, now, with Vietravel, visitors will have a new and more wonderful experience - sightseeing Ha Long Bay. Long from seaplane.\r\nSeaplane is a type of aircraft with fixed wings, capable of landing and taking off on the water, so visitors can both cover Ha Long Bay from the air and get closer to the sea. water surface, see the scenery thoroughly.', 'halong1.jpg', '2022-07-12 09:15:21', 'halong3.jpg', 'halong2.jpg', 'Instead of just being able to stand on a yacht and look up at the majesty of Ha Long Bay through a small angle, now, with seaplanes, the entire vast scene is captured in sight.', 'Departing from Tuan Chau port, the 25-minute scenic flight will take visitors to admire the magnificent seascape with nearly 2000 limestone islands jutting out from the water spreading over an area of ​​nearly 2,000 square kilometers, as well as Come to the highlights of the UNESCO World Natural Heritage site Ha Long Bay, offering a completely different view from the view from a yacht.\r\nSeaplane will take visitors to enjoy the famous and attractive sights:\r\nDau Be Island: Located in the southeast of Ha Long Bay, Dau Be Island is 500m east of Hang Trai Island, about 28km from Bai Chay tourist port, in an archipelago located on the route outside Ha Long Bay (the mouth of the bay). Lan Ha), standing between the two islands are Tra Ngu and Da Le islands.\r\nCong Do Island: Located in the southeast of Ha Long Bay, 25km from Bai Chay tourist port, Cong Do Island is located in Bai Tu Long Bay, in the World Natural Heritage area. The island has an area of ​​23,363〖km〗^2 with a peak of 172 m high. This is one of the beautiful islands with many meandering sea valleys, creating interesting natural lakes, home to many marine species such as shrimp, crab, fish, squid, seaweed, algae...'),
(8, '6 \'extremely beautiful\' Dalat tourist attractions will be wasted if you don\'t go', '1. Land Bridge Hill\r\nLocated about 25km from the center of Da Lat, this is a free tourist spot, so Cau Dat is not only a great virtual check-in point for young people but also chosen by couples to send gold to make wedding photos. when traveling to Dalat. Standing on the tea hill in the early morning, you will enjoy the fresh air, and watch the green tea beds planted close together and feel like floating in the clouds. All worries and chaos in daily life seem to disappear into nothingness.\r\n \r\n2. CAMBORA FIELDS\r\nThere are few places in Vietnam where hydrangeas are as brilliant as in Da Lat. This flower is grown in many places and has become a specialty of the city. Trai Mat hydrangea garden is a famous flower viewing spot chosen by many couples as a place to take wedding photos. With an area of ​​​​more than 2 hectares, the flower field is located below the beautiful pine forests creating a romantic scene. The beauty of the delicate petals, crammed together to form round clusters, makes us fall in love with them the more we look at them.', 'dalat1.jpg', '2022-07-20 09:15:21', 'dalat3.jpg', 'dalat2.jpg', 'Da Lat is poetic with thousands of blooming flowers and a mild and cool climate, making many travelers\' hearts flutter. Da Lat is like that, a little evocative, a little mysterious, take the time to enjoy the taste of life through 6 \"extremely beautiful\" tourist destinations below that are being loved by young people.', '3. DALAT FAIRYTALE LAND\r\nThis is the ideal rendezvous for you to relive your childhood dream of going to wonderland. The scenery of Dalat Fairytale Land recalls familiar fairy tales, such as Snow White and the 7 Dwarfs, Sleeping Beauty, Cinderella, the unique houses of the Hobbiton Dwarfs, etc. making Dalat Fairytale Land more poetic than ever. An innocent world, but enough to make your heart sob.\r\n4. PUPPY FARM\r\nThis is a popular dog farm on social networks in recent times. There are more than 100 dogs of different types such as: Husky, Alaska, Corgi... extremely cute. Coming here, you will be able to hug them with your hands, freely watch them do mischief, and record lovely moments. In addition, Puppy Farm also has a clean tomato garden grown in a greenhouse, a high-tech strawberry garden for visitors to visit and take pictures.\r\n \r\n5. QUE GARDEN - BONSAI & COFFEE\r\nWith an area of ​​20,000m2, QUE Garden - Bonsai&Coffee is the largest coniferous bonsai garden in Vietnam. Surrounding the pulse are famous flower gardens creating a unique space. Besides, this place also designs Koi ponds that meet Japanese standards with many different varieties. QUE Garden - Bonsai&Coffee brings you a pleasant relaxing space blended with gentle nature, which will be the ideal destination when coming to Da Lat.\r\n \r\n6. GALLERY LA CHOCOTEA\r\nThe art space Gallery La Chocotea is located on the grounds of the Museum of Biology and is decorated in a classical style. Here you will discover the unique chocolate-making process, admire the chocolate art works, and feel the taste of pure chocolate. The sophistication in each line and shape makes the chocolate blocks look like a real sculpture, making viewers admire the creativity and diligence of the artisans.');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `tour_guide_id` int(11) NOT NULL,
  `tour_code` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `tour_id`, `date_start`, `date_end`, `tour_guide_id`, `tour_code`) VALUES
(1, 1, '2022-07-26 05:30:00', '2022-07-29 16:00:00', 1, 'NTQN4T2607-2907'),
(2, 1, '2022-08-26 05:30:00', '2022-08-29 16:00:00', 1, 'NTQN4T2608-2908'),
(3, 2, '2022-08-01 05:00:00', '2022-08-03 18:00:00', 2, 'DNQN3T0108-0308'),
(4, 2, '2022-09-01 05:00:00', '2022-09-03 18:00:00', 2, 'DNQN3T0109-0309'),
(14, 11, '2022-07-23 00:00:00', '2022-07-27 00:00:00', 3, 'HCMHN5B2307-2707'),
(16, 11, '2022-08-23 00:00:00', '2022-08-27 00:00:00', 3, 'HNVHLSP4B2308-2708'),
(17, 12, '2022-07-27 00:00:00', '2022-07-30 00:00:00', 4, 'HNHL4B2707-3007'),
(18, 12, '2022-08-27 00:00:00', '2022-07-30 00:00:00', 4, 'HNHL4B2708-3008'),
(19, 13, '2022-07-22 00:00:00', '2022-07-25 00:00:00', 5, 'DNTTH4T2207-2507'),
(20, 13, '2022-08-22 00:00:00', '2022-08-25 00:00:00', 5, 'DNTTH4T2208-2508'),
(21, 14, '2022-07-28 00:00:00', '2022-07-31 00:00:00', 1, 'DL4T2807-3107'),
(22, 14, '2022-08-28 00:00:00', '2022-08-31 00:00:00', 1, 'DL4T2808-3108'),
(23, 18, '2022-07-26 00:00:00', '2022-07-30 00:00:00', 2, 'DLNT5T2607-3007'),
(24, 18, '2022-09-06 00:00:00', '2022-09-10 00:00:00', 2, 'DLNT5T0609-1009'),
(25, 19, '2022-08-04 00:00:00', '2022-08-07 00:00:00', 3, 'PQ4T0408-0708'),
(26, 19, '2022-09-23 00:00:00', '2022-09-26 00:00:00', 3, 'PQ4T2309-2609'),
(27, 20, '2022-07-23 00:00:00', '2022-07-24 00:00:00', 4, 'VT2T2307-2407'),
(28, 20, '2022-08-26 00:00:00', '2022-08-27 00:00:00', 4, 'VT2T2608-2708'),
(29, 1, '2022-07-30 00:00:00', '2022-07-31 00:00:00', 5, 'CD2N3007-3107'),
(30, 21, '2022-11-17 00:00:00', '2022-11-18 00:00:00', 5, 'CD2N1711-1811'),
(31, 21, '2022-10-11 00:00:00', '2022-09-12 00:00:00', 4, 'CD2N1109-1209'),
(32, 14, '2022-10-12 00:00:00', '2022-10-15 00:00:00', 1, 'DL4N1210-1510');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `tour_id` int(11) NOT NULL,
  `tour_name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `location_start` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `transport` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `price1` int(11) NOT NULL,
  `price2` int(11) NOT NULL,
  `price3` int(11) NOT NULL,
  `price4` int(11) NOT NULL,
  `img1` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `img4` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `visit` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `region` varchar(1) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `place` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `img5` varchar(255) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`tour_id`, `tour_name`, `location_start`, `transport`, `duration`, `price1`, `price2`, `price3`, `price4`, `img1`, `img2`, `img3`, `img4`, `detail`, `visit`, `region`, `place`, `img5`) VALUES
(1, 'Tour Nha Trang - Quy Nhon 4 days 3 nights: Back to the land of martial arts and literature', 'Nha Trang', 'Car', 4, 199, 99, 39, 9, 'NTQN1.jpg', 'NTQN2.jpg', 'NTQN3.jpg', 'NTQN4.jpg', 'Nha Trang Quy Nhon Tour 4 days 3 nights is a tour program departing from the coastal city of Nha Trang to visit Quy Nhon, a peaceful coastal city with peaceful roads, explore the Maldives paradise in Vietnam at the beach. The famous Ky Co, check in Eo Gio where watching the most beautiful sunset in Vietnam, or learn Vietnamese martial arts, Cham cultural history and Tay Son dynasty are the main highlights that you cannot miss. when coming to the land of martial arts and heaven, Quy Nhon Binh Dinh.\"\"\"\"\"', 'DAY 1: NHA TRANG - QUY NHON (Breakfast, lunch, dinner)\r\n\r\n05h30: Car and guide of Quy Nhon Tourist pick up guests at Nha Trang and depart for Quy Nhon.\r\n\r\n07h00: Breakfast at Ninh Hoa\r\n\r\n11h00: Arrive in Quy Nhon, have lunch in Quy Nhon city, then check in and rest.\r\n\r\nQuy Nhon city from above\r\nQuy Nhon - a clean, beautiful, and unspoiled tourist city in Vietnam. Photo: Nguyen Phuoc Hoai\r\n\r\nFree to swim, explore the beautiful Quy Nhon.\r\n\r\nEvening: Car and guide take you to dinner at a restaurant in the city.\r\n \r\n DAY 2: DISCOVER THE CO - EO WIRE - THE SEA PLACE QUINHON ISLAND (Breakfast, lunch, dinner)\r\n\r\nHave breakfast at the hotel.\r\n\r\n07h30: Car and HDV Quy Nhon Tourist pick up guests at the meeting point in Quy Nhon city, depart for Nhon Ly.\r\n\r\nCrossing Thi Nai Bridge - The bridge crosses the sea with a length of 2.5 km. Here you can stop to take pictures, admire the blue sea around, see the idyllic scenes like the scene of fishermen casting nets to catch fish. Listen to the guide tell about the tragic naval battles between Champa and Dai Viet, between Tay Son and Nguyen (Nguyen Anh) for more than 5 centuries. On the way, you will play with the tour guide 1-2 fun games with prizes.\r\n\r\n08h20: You get on our speedboat to Ky Co Beach - A pristine and clean beach. Currently, Ky Co has been equipped with and invested in additional infrastructure such as: leaf huts for vacationers, modern toilets, changing rooms, or bridges as ideal photo spots... Bien Ky Co extremely clear blue, light waves and fine golden sand will surely satisfy visitors who love to swim.\r\n\r\nIn addition, if you want to discover more beauty of Ky Co, please ask our tour guides to guide you to waterfalls, freshwater lakes, especially the Bridge of Love (Cau Yen) for free to bring your own pictures. Beautiful virtual live image.\r\n\r\nYou can also participate in paid beach games at Ky Co such as parachute flying, jet skiing, walking under the sea, etc. (Refer to the price list of game services at Bai Ky Co Quy Nhon )\r\n\r\nPaid games at Ky Co Quy Nhon beach\r\n\r\nThen, Cano continue you to Coral Beach (Pineapple Beach) diving to see the natural coral reefs and hundreds of colorful fishes.\r\n\r\nIf the weather is good and the condition of the buoy is sufficient, you will be able to participate in games such as swan buoys, free bouncing animals at the coral reef.\r\n\r\n11:45: Return to the mainland, you take a fresh water bath and change at the clean, quality bathroom at the restaurant, then have lunch with fresh seafood dishes that the villagers have just caught for processing. for your guests to enjoy.\r\n\r\n14h00: Continue the tour to Eo Gio - where the wild and majestic scenery is created by high rocky mountains, winding embracing the beach full of rocks and water, forming a wonderful strait. pretty. Standing on Eo Gio, looking out into the distance, you admire the vast vast sea, captivated people.\r\n\r\n15h10: Tour guide takes guests to visit Ngoc Hoa Vihara located next to Eo Gio. Here, you can admire the tallest twin Buddha statue of Quan Am in Vietnam, enjoy the peaceful scenery at the Buddha\'s door.\r\n\r\n16h20: Return to Quy Nhon, Quy Nhon Tourist\'s car and guide will take you to visit Phuong Mai Sand Dunes, a white sand paradise under the blue sky and the sea in the distance. Visitors can relax in the central air of the central region, but equally wild and peaceful. Here, visitors can not only take pictures for themselves, but also participate in interesting sandboarding activities.\r\n\r\n17h00: Take tourists back to Quy Nhon\r\n\r\nEvening: Group dinner at a restaurant in the city.\r\n \r\n DAY 3: ARRIVING TO THE TEST KIET OF TAY SON - HAM HO (Breakfast, lunch, dinner)\r\n\r\n08h00: Car and guide of Quy Nhon Tourist pick you up at your hotel to depart for Tay Son to visit:\r\n\r\nTwin Towers, one of 07 clusters of Cham towers in Binh Dinh. The cluster of towers with 02 ancient towers with Angkor architecture, built in the 12th century, is located on a flat plane right in the heart of Quy Nhon city.\r\n\r\nQuang Trung Museum, visit Tay Son Tam Kiet Palace and the military officers. Pray for school, school, career success and advancement. Let\'s admire the 300-year-old tamarind tree and the well in Tay Son\'s garden, which are rare things left of the Tay Son dynasty. At the same time, you will enjoy Binh Dinh traditional martial arts show and Tay Son battle drum, witness with your own eyes \"Binh Dinh\'s daughter beat the whip to go right\".\r\n\r\nYou come to Ham Ho eco-tourism area - Take a boat on Loc Giang canal to the Kut river with the Troi Lap River section which is like a miniature \"Ha Long Bay\", immersing yourself with wild nature, young plants and trees. . Freedom to participate in recreational activities: Kayaking on the river, relaxing fishing ...\r\n\r\nLunch specials at the restaurant with extremely attractive menu only in Tay Son such as bird cane, fish ditch, wild boar...\r\n\r\n14h00: Delegation to visit:\r\n\r\nThien Hung Pagoda: One of the most special and famous pagodas in Binh Dinh with its unique architecture and wonderful scenery. The special thing is not only about the exquisite architectural beauty, but this place currently keeps the Jade Relic of Buddha Shakyamuni.\r\n\r\nEvening: Car and tour guide take you to dinner at your own expense (own expense) at a restaurant in Quy Nhon city.\r\n \r\n DAY 4: CITY TOUR QUY NHON - NHA TRANG (Breakfast, Lunch)\r\n\r\nCustomers eat breakfast at the hotel\r\n\r\n08h00: Car and tour guide Quy Nhon Tourist pick up guests at the hotel and depart for sightseeing\r\n\r\nGhenh Rang Tien Sa tourist area, go up Mong Cam slope, Thi Nhan hill, bow your head to pay respects to Han Mac Tu\'s grave, visit Hoang Hau Beach, where egg-shaped stones are stacked on top of each other to create a beautiful landscape. Beautiful, romantic setting. Let\'s enjoy the unique skill of Dzu Kha\'s fire pen, and hear about the life and talented career of poet Han Mac Tu, a poet whose life, although short, has left a legacy of Vietnamese poetry. indelible mark.\r\n\r\nQuy Nhon rapids tourist area\r\nTourists visit Ghenh Rang - Han Mac Tu\r\n\r\nThe car takes you to buy Binh Dinh specialties as gifts for your loved ones, then depart for Nha Trang.\r\n\r\nLunch in Tuy Hoa city (Phu Yen)\r\n\r\n16h00: Arrive in Nha Trang, Quy Nhon Tourist\'s car and guide will take you back to the original destination. End of tour Nha Trang - Quy Nhon 4 days 3 nights, Goodbye and see you again!!!\"\"\"\"\"', 'T', 'Quy Nhon', 'NTQN5.jpg'),
(2, 'Tour Da Nang - Quy Nhon 3 days 2 nights: The sea is empty and peaceful', 'Da Nang', 'Car', 3, 159, 59, 19, 5, 'DNQN1.jpg', 'DNQN2.jpg', 'DNQN3.jpg', 'DNQN4.jpg', 'Da Nang Quy Nhon 3 days 2 nights tour with Quy Nhon Tourist is a tour program designed specifically for tourists from Da Nang who want to travel to Quy Nhon Binh Dinh. In addition to discovering the beauty of Ky Co, a famous green beach in the bottom, diving pristine coral at Bai Dua, checking in the most beautiful sunset spot in Vietnam, you also learn about the ancient culture. of Champa, listen to the guide tell about the heroic Tay Son uprising of King Quang Trung, the short but romantic life of the poet Han Mac Tu. All make a trip to Da Nang Quy Nhon full of emotions, bringing many unforgettable memories.', 'DAY 1: DA NANG - QUI NHON (Breakfast, lunch, dinner)\r\n\r\n05h00: Car and guide of Quy Nhon Tourist pick up guests at Da Nang and depart for Quy Nhon.\r\n\r\n07h00: Breakfast in Quang Nam\r\n\r\n11h00: Arrive in Quy Nhon, have lunch in Quy Nhon city, then check in and rest.\r\n\r\nFree to swim, explore the beautiful Quy Nhon.\r\n\r\nEvening: Car and guide take you to dinner at a restaurant in the city\r\n \r\n DAY 2: DISCOVER THE CO - EO WIRE - THE SEA PLACE QUINHON ISLAND (Breakfast, lunch, dinner)\r\n\r\nHave breakfast at the hotel.\r\n\r\n07h30: Car and HDV Quy Nhon Tourist pick up guests at the meeting point in Quy Nhon city, depart for Nhon Ly.\r\n\r\nCrossing Thi Nai Bridge - The bridge crosses the sea with a length of 2.5 km. Here you can stop to take pictures, admire the blue sea around, see the idyllic scenes like the scene of fishermen casting nets to catch fish. Listen to the guide tell about the tragic naval battles between Champa and Dai Viet, between Tay Son and Nguyen (Nguyen Anh) for more than 5 centuries. On the way, you will play with the tour guide 1-2 fun games with prizes.\r\n\r\n08h20: You get on our speedboat to Ky Co Beach - A pristine and clean beach. Currently, Ky Co has been equipped with and invested in additional infrastructure such as: leaf huts for vacationers, modern toilets, changing rooms, or bridges as ideal photo spots... Bien Ky Co extremely clear blue, light waves and fine golden sand will surely satisfy visitors who love to swim.\r\n\r\nIn addition, if you want to discover more beauty of Ky Co, please ask our tour guides to guide you to waterfalls, freshwater lakes, especially the Bridge of Love (Cau Yen) for free to bring your own pictures. Beautiful virtual live image.\r\n\r\nYou can also participate in paid beach games at Ky Co such as parachute flying, jet skiing, walking under the sea, etc. (Refer to the price list of game services at Bai Ky Co Quy Nhon )\r\n\r\nThen, Cano continue you to Coral Beach (Pineapple Beach) diving to see the natural coral reefs and hundreds of colorful fishes.\r\n\r\nIf the weather is good and the condition of the buoy is sufficient, you will be able to participate in games such as swan buoys, free bouncing animals at the coral reef.\r\n\r\n11:45: Return to the mainland, you take a fresh water bath and change at the clean, quality bathroom at the restaurant, then have lunch with fresh seafood dishes that the villagers have just caught for processing. for your guests to enjoy.\r\n\r\nAfter lunch, you can relax at the restaurant for comfort\r\n\r\n14h00: Continue the tour to Eo Gio - where the wild and majestic scenery is created by high rocky mountains, winding embracing the beach full of rocks and water, forming a wonderful strait. pretty. Standing on Eo Gio, looking out into the distance, you admire the vast vast sea, captivated people.\r\n\r\n15h10: Tour guide takes guests to visit Ngoc Hoa Vihara located next to Eo Gio. Here, you can admire the tallest twin Buddha statue of Quan Am in Vietnam, enjoy the peaceful scenery at the Buddha\'s door.\r\n\r\n16h20: Return to Quy Nhon, Quy Nhon Tourist\'s car and guide will take you to visit Phuong Mai Sand Dunes, a white sand paradise under the blue sky and the sea in the distance. Visitors can relax in the central air of the central region, but equally wild and peaceful. Here, visitors can not only take pictures for themselves, but also participate in interesting sandboarding activities.\r\n\r\n17h00: Take tourists back to Quy Nhon\r\n\r\nEvening: Group dinner at a restaurant in the city.\r\n \r\n DAY 3: CITY TOUR QUY NHON - DA NANG (Breakfast, Lunch)\r\n\r\nHave breakfast at the hotel and check out of the hotel\r\n\r\n08h00: Car and guide take you to Ghenh Rang Tien Sa tourist area, go up Mong Cam slope, Thi Nhan hill, bow your head to visit Han Mac Tu\'s grave, visit Queen Beach, where there are stones. Egg shapes stacked on top of each other create a beautiful, romantic scene. Let\'s enjoy the unique skill of Dzu Kha\'s fire pen, and hear about the life and talented career of poet Han Mac Tu, a poet whose life, although short, has left a legacy of Vietnamese poetry. indelible mark.\r\n\r\nContinue to visit the Twin Towers, one of the 07 clusters of Cham towers in Binh Dinh. The cluster of towers with 02 ancient towers with Angkor architecture, built in the 12th century, is located on a flat plane right in the heart of Quy Nhon city.\r\n\r\nQuy Nhon Tourist tourists visit Quy Nhon Twin Towers\r\n\r\nThe car takes you to buy specialties and gifts for relatives, then go to lunch.\r\n\r\nDeparture back to Da Nang\r\n\r\n18h00: Arrive in Da Nang, the car takes you back to the original pick up point. End of Da Nang - Quy Nhon Tour 3 days 2 nights. Farewell and see you soon!!!', 'T', 'Quy Nhon', 'DNQN5.jpg'),
(11, 'Ha Noi - Ha Long Bay - Sapa - Cat Cat Village - Fansipan (4&5 star hotel)', 'Ho Chi Minh', 'Flight', 5, 459, 229, 114, 22, 'HNVHLSP1.jpg', 'HNVHLSP2.jpg', 'HNVHLSP3.jpg', 'HNVHLSP4.jpg', 'Lao Cai is a highland province in the North of Vietnam. Lao Cai has cultural spots, romantic landscapes, famous check-in points of young people such as Muong Hoa valley, Fansipan peak, Ham Rong mountain, ethnic cultural villages such as Cat Cat, Ta Van, Laos. Chai, Ta Phin and the trails hugging the rice fields, ... In addition, Lao Cai is also an attractive destination for tourists because of the unique culinary culture of many ethnic ethnic groups in the highlands. Set foot in Quang Ninh - the first province with 4 cities: Ha Long, Mong Cai, Uong Bi and Cam Ph, creating a tourist city that is not only famous for the sea like Ha Long Bay with thousands of rocky islands undulating on the sea. fanciful shimmering waves, beautiful caves, unspoiled beaches, cool and clear water typical of the islands of Co To, Soi Sim, ... Not only that, Quang Ninh also attracts tourists about the cool air of the sacred mountain Yen Tu where spirituality, culture and peak resort space converge. If you love the wildness of nature and airy space, try once to visit the Binh Lieu plateau, which is likened to \"Sapa of the coal land\", with border markers and a series of \"reed flags\". or the \"Dinosaur spine\" road running along the border patrol road is always a favorite stop of tourists inside and outside the province.\"\"', 'Day 1 - Ho Chi Minh City - SB NOI BAI - HANOI 00 meals: (self-sufficient on the first day)\r\nYou gather at Tan Son Nhat airport (Domestic station), the guide will assist you with procedures for flight to Hanoi. Upon arrival at Noi Bai airport, Vietravel\'s car and tour guide will pick you up and take you to Hanoi to check in at the hotel, rest or free to visit.\r\n\r\nOvernight in Hanoi.\r\n\r\nDay 2 - HANOI - HA LONG 03 meals: (Morning, Lunch, Afternoon)\r\nHave breakfast and check out. Depart to take you to visit Hoan Kiem Lake to see the outside of Turtle Tower, Ngoc Son Temple, The Huc Bridge. You continue to depart for Ha Long along the highway Hai Phong - Ha Long, on the way sightseeing Bach Dang Giang.\r\n\r\nArriving, you have lunch and get on a boat to travel to Ha Long Bay - A beautiful and extremely lively natural landscape, recognized by UNESCO as a World Natural Heritage in 1994.\r\nThien Cung Cave is one of the most beautiful caves in Ha Long. Magnificent and splendid beauty by layers of stalactites and shimmering lights.\r\nFrom the boat, you can see the large and small islands in Ha Long Bay: Ga Choi Islet, Lu Huong Islet.\r\nYou watch the sunset and have dinner on board. The car takes you to the hotel to check in, free to rest.\r\nOvernight in Ha Long.\r\n\r\nDay 3 - HA LONG - LAO CAI - SAPA 03 Meals: (Morning, Lunch, Afternoon)\r\nHave breakfast and check out of the hotel. The car departs along the highway to take you to Sapa, on the way stop shopping for local specialties and have lunch at Viet Tri.\r\n\r\nArriving, you have dinner and check in room to rest or free to walk around the street to see Sapa Stone Church, free to enjoy highland specialties such as: grilled pork belly, grilled eggs, cat cider, and socializing with friends and family. highland ethnic people.\r\n\r\nOvernight in Sapa.\r\n\r\nDay 4 - SAPA - FANSIPAN LEGEND - SAND TABLE 03 meals: (Morning, Lunch, Afternoon)\r\nYou have breakfast at the hotel. Transfer to Sapa station, you experience Fansipan Legend tourist area by the most modern Muong Hoa mountain train in Vietnam with a total length of nearly 2000m, enjoy the colorful landscape picture of the primeval forest. , Muong Hoa valley.\r\n\r\nConquer Mount Fansipan with a majestic height of 3,143m by cable car (own expense).\r\n\r\nWorshiping Buddha at Trinh pagoda or praying for good fortune and peace for the family at Bich Van Thien Tu in the spiritual landscape system on Fansipan peak.\r\n\r\nContinue the journey, you have lunch and visit:\r\n\r\nCat Cat village - as beautiful as a picture in the middle of Sapa\'s old town, this place attracts visitors by the suspension bridge, waterfall, water wheel and array of flower colors that fascinate visitors when lost here. Visiting the houses of the Mong, Dao and Giay people in the village, visitors will be amazed by the dreamy beauty of one of the most beautiful ancient villages in Sapa.\r\n\r\nYou have dinner in Sapa and free to rest.\r\n\r\nOvernight in Sapa.\r\n\r\nNote: In case, Fansipan does not operate the program will be replaced by the Dragon Cloud Glass Bridge attraction (entrance ticket not included).\r\n\r\nDay 5 - SAPA - LAO CAI - SB NOI BA (HANOI) 02 Meals: (Breakfast, Lunch)\r\nHave breakfast and check out of the hotel. Follow the highway to Noi Bai airport. On the way you stop at Lao Cai city to have lunch and take souvenir photos at the Vietnam - China border gate \"Lao Cai - Ha Khau\". Upon arrival, the tour guide will assist you with procedures to catch the flight to Ho Chi Minh City. Farewell to you and end the tour program at Tan Son Nhat airport.\r\n\r\nEND OF THE PROGRAM, WELCOME CUSTOMERS!\r\n*Note :\r\nItinerary may change destination order depending on actual conditions.\r\n Sightseeing schedule (bathing, flower viewing, experience,...) is easily affected by the weather. This is a force majeure situation, hope you understand and sympathize.\r\nThe Hotel may be far from the city center during Peak seasons.\r\nDue to objective factors during this period, the attraction may close and be replaced by another suitable for the program.\r\nConditions for accepting guests during the \"New Normal\" period.\r\nGuests in the Green/Yellow zone and have had a covid green card (guests have had a full dose of covid vaccines, completed the 2nd dose before 14 days and not more than 12 months) or you have a certificate of recovery within 6 months month.\r\nGuests in Orange have a covid green card and a certificate of negative RT-PCR/ Rapid Test results for Covid-19 valid within 72 hours according to the regulations of each locality, accommodation (including adults and children). children under 18). The cost of covid testing at the request of each locality, you pay yourself and are not included in the tour price.\r\nCustomers in the Red area, temporarily the company is not allowed to serve guests until further notice.\r\nEnsure the 5K principle, disinfect. Observe social distancing in the car and wear a mask during travel.\r\nIn case, the delegation has a suspected case of covid 19 infection, the customer (including the cases identified as F1) is responsible for coordinating with Vietravel and local authorities to implement preventive measures. glass/treatment as prescribed.\r\nExpenses incurred during treatment isolation, including but not\"\"', 'B', 'Ha Noi Sapa Ha Long', 'HNVHLSP5.jpg'),
(12, 'Hanoi - Bai Dinh - Trang An Tourist Area - Ha Long - Yen Tu', 'Da Nang', 'Car', 4, 299, 149, 74, 14, 'HNHL1.jpg', 'HNHL2.jpg', 'HNHL3.jpg', 'HNHL4.jpg', 'The North of Vietnam is always famous for its breathtaking landscapes and historical sites. Sekai Travel is pleased to bring you the Hanoi - Trang An - Bai Dinh - Ha Long - Yen Tu tour program with countless attractive and interesting things.\"\"', 'Day 1 - Da Nang - Noi Bai (Hanoi) - Bai Dinh Pagoda - Trang An (Lunch, Dinner)\r\nYou gather at Da Nang Airport, Domestic Terminal. Tour guide will check-in for you to take flight to Hanoi. Upon arrival at Noi Bai airport, the car picks you up and departs for Ninh Binh to visit:\r\n- Visit Bai Dinh Pagoda - Is a complex of pagodas located on Bai Dinh mountain known for many Vietnamese records such as the pagoda with the largest area, the largest bronze Buddha statue, the most Arhat Buddha statues.\r\n- Trang An Tourist Area - A place with charming natural scenery, rowing boats take you to visit 3 spiritual places, Trinh Temple, Tran Temple and Phu Khong, through caves such as Dark Cave, Hang Cave. Morning, Wine Cooking Cave, Ba Giot Cave.\r\nReturn to Hanoi, check in and stay overnight in Hanoi.\r\n \r\nDay 2 - Hanoi - Ha Long (Eat three meals)\r\nDepart for Ha Long, where the delegation got off the boat to visit:\r\n- Ha Long Bay: a beautiful and extremely lively natural landscape, recognized by UNESCO as a World Natural Heritage in 1994.\r\n- Thien Cung Cave: a paradise under the earth with splendid beauty by layers of stalactites and shimmering lights.\r\n- From the boat, you can see the large and small islands in Ha Long Bay: Ga Choi Islet, Lu Huong Island, ...\r\nOvernight in Ha Long.\r\nSome options for you who want to explore more of Ha Long (expenses excluded):\r\n- Option 1: Visit Sun World Ha Long Park on Ba Deo Mountain by Queen\'s cable car), experience the sun wheel, visit Japanese garden, wax statue display area, children\'s play area. (visit according to the opening schedule of the amusement park)\r\n- Option 2: Watch the Royal Ha Long Water Puppetry - This is a unique traditional folk theater art form, a special creation of the Vietnamese people, only available in Vietnam, through the In the puppet show, the audience will be led into a rich fantasy world, learning about the legend and birth of the name Ha Long Bay. (visit according to the opening schedule of the performance venue)\r\n \r\nDay 3 - Ha Long - Yen Tu - Hanoi (3 meals)\r\nGroup breakfast at the hotel, car take you to visit:\r\n- Bai Chay Bridge: slender, modern architecture, Bai Chay bridge brings a new and romantic architecture, contributing to adorn and enhance the beauty of Ha Long Bay.\r\n- Quang Ninh Museum (visit and take photos outside the museum): seems to have become an impressive destination among tourists with its unique architecture and artifacts displayed here.\r\nYen Tu Mountain: a natural landscape that also preserves many historical relics with the name \"Vietnamese Buddhist ancestral land\". Visit Hoa Yen Pagoda - A big and beautiful temple, located on the middle of the mountain at an altitude of 516m (cable car costs are self-sufficient), visit the To Tower.\r\nDepart for Hanoi, on the way stop at Hai Duong to buy specialties: mung bean cake, banh survey.\r\nOvernight in Hanoi\r\n \r\nDay 4 - Hanoi - Noi Bai Airport - Da Nang (Breakfast)\r\nHave breakfast and check out. The car takes you for a walk around Hoan Kiem Lake to see the outside of Turtle Tower, Ngoc Son Temple, The Huc Bridge:\r\nThe group continued to visit:\r\n- Temple of Literature: a place to worship Confucius and sages of Confucianism, Quoc Tu Giam - the first university in Vietnam, finding the historical roots of Confucian scholars.\r\nTransfer to Noi Bai airport for flight to Da Nang. Farewell to you and end the tour program at Da Nang airport\r\n \r\nReference route, distance:\r\nDay 01 (134 km): Noi Bai Airport (Hanoi) - Bai Dinh Pagoda (122 km) - Trang An Tourist Area (12 km)\r\nDay 02 (171 km): Hanoi - Tuan Chau Port (152 km) - Lotus Water Puppetry (7 km) or Sun World Complex (12 km)\r\nDay 03 (206 km): Ha Long City - Yen Tu Mountain (63 km) - Hanoi (143 km)\r\nDay 04 (32 km): Hanoi – Temple of Literature (2 km) - Noi Bai Airport (30 km)\"\"', 'B', 'Ha Noi Ha Long', 'HNHL5.jpg'),
(13, 'Da Nang - Hue - Lap An Lagoon - La Vang - Phong Nha Cave - Ba Na Tourist Area - Golden Bridge - Son Tra - Hoi An - Da Nang', 'Ho Chi Minh', 'Flight', 4, 299, 149, 74, 14, 'HUEDN1.jpg', 'HUEDN2.jpg', 'HUEDN3.jpg', 'HUEDN4.jpg', 'Highlights: - Ba Na Hills with a space like a colorful miniature French village - Hoi An Ancient Town with shimmering colors of lanterns and unique folk activities - The vast Hue Citadel where the ancient palace of Kings of the Nguyen Dynasty - Phong Nha Cave is considered as a fairy place because of the longest system of limestone mountains and underground rivers in the world.', 'Day 1 - HO CHI MINH CITY - HUE - HUONG THUY XUAN VILLAGE Number of meals: 02 (Lunch, dinner)\r\nYou gather at Column 5, Domestic departure station, Tan Son Nhat airport, Vietravel guide will assist with procedures for the group to take flight to Hue. At Phu Bai airport - Hue, car and tour guide pick up the delegation to visit:\r\n- Citadel: Ancient palace of 13 Nguyen kings, visit Ngo Mon, Thai Hoa Palace, Forbidden City, The Mieu, Hien Lam Cac, Cuu Dinh, Hue Museum of Royal Antiquities.\r\n- Thien Mu Pagoda: The temple is considered the oldest in Hue and is home to many valuable antiques not only in terms of history but also in art.\r\n\r\nLunch at local restaurant. In the afternoon, you continue the journey to visit:\r\n- Thuy Xuan incense village: Check-in at the famous Traditional Craft Village and also one of the famous virtual living coordinates of young people in Hue. The beautiful village covered with green trees hidden at the foot of Vong Canh hill is famous for a series of incense making establishments \"showing off\" green, red, purple, yellow...\r\n- Walking Night Street: Experience a Hue at night full of new vitality at Walking Street, freely enjoy Hue street foods such as filtered bread, Hue tea, ... watching the dragon boat up and down the wharf. The Kham Court echoes the echoes of Hue\'s chants. Explore the vibrant Western Quarter at night with many crowded bars, live music, souvenir shops, etc.\r\n\r\nOvernight in Hue\r\n \r\n\r\nDay 2 - HUE - LA VANG - Phong Nha Cave Number of meals: 03 (Breakfast, lunch, dinner)\r\nBreakfast buffet at the hotel. You depart early to Dong Hoi Quang Binh, on the way stop to visit:\r\n- La Vang Holy Land: One of the four Roman basilicas in Vietnam\r\n(Note: In the period from August 8 to August 16 every year, La Vang Holy Land takes place the annual \"La Vang Our Lady of La Vang Pilgrimage Festival\", so tours departing during this period will not enter to visit. La Vang)\r\nPhong Nha Cave: This is a branch of the World Natural Heritage Complex Phong Nha - Ke Bang, considered a fairyland by the system of limestone mountains and the longest underground river in the world,...\r\n\r\nThe group returned to Hue a bit late around 20:00. You are free to rest.\r\n\r\nOvernight in Hue\r\n\r\nNote: In case you choose not to go to Quang Binh, stay in Hue for free to visit and rest, please notify the request before paying in full, reducing the cost of 350,000 VND / 1 adult person. You will be self-sufficient for lunch and dinner, visiting other attractions in the ancient capital.\r\n \r\n\r\nDay 3 - HUE - DA NANG - HANOI NGO - HOI AN Number of meals: 03 (Breakfast, lunch, dinner)\r\nBreakfast buffet at the hotel. You depart for Da Nang, on the way stop to visit:\r\n- Lap An lagoon: Watch the clouds floating on the mountain peaks surrounding the lagoon, before going through Hai Van Tunnel to Da Nang\r\nLunch and check in room to rest. In the afternoon, you continue the journey to visit:\r\n- Marble Mountains: Visit Linh Ung Pagoda, Tang Chon Cave, Hoa Nghiem Cave, Non Nuoc Pagoda, Non Nuoc Stone Art Village.\r\n- Hoi An Ancient Town - Cau Pagoda, Phung Hung Ancient House, Phuoc Kien Assembly Hall, Handicraft Facility,... You are free to enjoy tea & cookies Reaching Out Tea House, a special tea shop of the association of the disabled. disability, …. (own expense).\r\n- Hoi An Impressionist Park: Recreate Hoi An of the past, a bustling international port city with the presence of Asian and European cultures, learn about silkworm rearing and silkworm rearing, spinning and weaving silk with a frame. weaving, making Hoi An green bean cake, enjoying Japanese style tea ceremony….\r\n\r\nOvernight in Da Nang.\r\n \r\n\r\nDay 4 - DA NANG - BA NA - GOLDEN BRIDGE - MY KHE - HCMC Number of meals: 01 (Breakfast)\r\nBreakfast at the hotel. Car takes you to visit:\r\n- Ba Na - Suoi Mo tourist area: (cable car cost & lunch at your own expense): Enjoy the chilly atmosphere of Da Lat in the central region, free to visit Linh Ung Pagoda, Debay Wine Cellar, flower garden Le Jardin D\'Amour, Ba Na\'s new Spiritual Area, visit Linh Chua Linh Tu Temple, Fantasy Park.\r\n- Golden Bridge: Freely take pictures at the super hot attractions of Da Nang.\r\n- Experience the Mountain Train to the Moon Castle: A new construction at Ba Na tourist resort has just been put into operation in April 2022.\r\n\r\nLunch at Ba Na self-sufficient. After that, the group continued to visit and play until it was time to get off the cable. In the afternoon, you visit:\r\n- Son Tra Peninsula and Linh Ung Pagoda: This place has the highest statue of Quan The Am Buddha in Vietnam.\r\n- My Khe Beach - One of the most charming beaches on the planet, you are free to walk on the beach…\r\n\r\nThe car takes the delegation to Da Nang airport to catch the flight back to Ho Chi Minh City. Farewell to the group and end the tour program at Tan Son Nhat airport.', 'T', 'Thua Thien Hue Da Nang', 'HUEDN5.jpg'),
(14, 'Da Lat - Que Garden - Bobla Waterfall - Kim Ngan Hills Tourist Area - Me Linh Coffee (Gia Shock Tour)', 'Ho Chi Minh', 'Car', 4, 249, 124, 62, 12, 'DL1.jpg', 'DL2.png', 'DL3.jpg', 'DL4.jpg', 'Coming to Da Lat, visitors cannot ignore the famous check-in points such as: the zoo combined with the impressive pine forest view coffee space at Kim Ngan Hills - where many animals are kept and preserved. unique as Alpaca camel, star deer, Ponny horse, Valis sheep, Corgi dog... 1 new virtual living coordinates at Biology Sub-Institute with photo corners on ancient walls. The field of hydrangeas scores in the eyes of visitors thanks to the poetic surroundings. In the distance is a poetic pine forest, and at the foot of the golden bridge is a large field covered with bluish white color of hydrangea flowers, striking against the dark green background of leaves....', 'Day 1 - TP. HO CHI MINH CITY - BOBLA - DA LAT (Breakfast, lunch, dinner)\r\nYou gather at Vietravel (190 Pasteur, Vo Thi Sau Ward, District 3, Ho Chi Minh City), the car will take you to Da Lat. After having lunch at Bao Loc, go to Di Linh Doan to visit:\r\n\r\nBobla Waterfall: as beautiful as a natural picture with a pristine and majestic waterfall over 40m high, more than 20m wide, with a beautifully embellished landscape, preserving many hundreds of years old trees in the distance. eyes are green tea and coffee hills.\r\nArrive in Da Lat, check in and rest. In the evening, you are free to enjoy coffee watching Xuan Huong Lake at night. Overnight in Da Lat.\r\n \r\n\r\nDay 2 - DA LAT - KIM NGAN HILLS - COUNTRY GARDEN (Breakfast, Lunch, Dinner)\r\nDa Lat welcomes visitors with cold air, after having breakfast, the car will take you to visit:\r\n\r\nKim Ngan Hills: Featured with a zoo combined with an impressive pine forest view coffee space, alternating with flower gardens of Thach Phao, Thach Thao, Cam Tu Cau for visitors to check-in. Kim Ngan Hills Zoo is keeping and preserving many unique animals such as Alpaca camel, star deer, Ponny horse, Valis sheep, Corgi dog... In addition, this place also owns the largest bird breeding area. Lam Dong province with many species of birds such as swiftlets, starlings, cuckoos, etc. Continuing, visitors explore the area \"Memories of the subsidy period\" which evoke nostalgic feelings about a past time.\r\nCountry Garden: located at the foot of Mimosa Pass, the garden fascinates viewers with its large flower fields and many famous flowers in Da Lat blooming. Especially, Que Garden is proud to be the largest coniferous bonsai garden in Vietnam, the bonsai pots are both large and beautiful, carefully cared for and molded extremely beautifully. In addition, the koi pond with a view overlooking the pine hill is a great check-in point that visitors cannot ignore.\r\nIn the evening, you are free to walk to visit Dalat night market at night. Overnight in Da Lat.\r\n\r\n \r\n\r\nDay 3 - DA LAT - BIOGRAPHY SUBJECT - CAM TU CUU FIELDS (Breakfast, lunch, dinner at your own expense)\r\nAfter having breakfast at the hotel, the car will take you to visit:\r\n\r\nBiology Sub-Institute: known as a new virtual living coordinate in Da Lat with photo corners on ancient walls. Not only that, coming here, visitors also learn about the living environment, precious genetic resources through extremely rich artifacts, the display area of ​​bones, horns, models of rare animals such as dinosaurs, elephants, tigers, bears, apes, ... or learn about the operation of the universe.\r\nGallery Chocolate: with many exhibition spaces designed by colors, shapes and special flavors from Chocotea\'s raw materials. The most impressive is the art space with 9 works elaborately crafted from chocolate such as: \"Royal Banquet\", Cherry Blossom Tree or the beautiful \"Flower of Flowers\", ... Visitors try chocolate to feel the feeling. Get different flavors from aroma to color.\r\nThe field of hydrangeas: scoring points in the eyes of visitors thanks to the poetic scenery around. In the distance is a poetic pine forest, and at the foot of the golden bridge is a large field covered with bluish white color of hydrangea flowers, striking against the dark green background of leaves.\r\nIn the evening, you are free to walk and enjoy soy milk and grilled rice paper in Tang Bat Ho street. Overnight in Da Lat\r\n \r\n\r\nDay 4 - DA LAT - ME LINH COFFEE - TP. HO CHI MINH CITY (Breakfast, Lunch)\r\nAfter having breakfast at the hotel, the car will take you to visit:\r\n• Me Linh Coffee: designed with an open space with a full 360-degree view towards the vast coffee fields... Especially, enjoy a cup of pure weasel coffee with a characteristic rich flavor of quality. musk (own expense). In addition, you can check in the miniature but no less lively versions of famous works such as Bali Heaven Gate, Linh Quy Phap An Heaven Gate, Stairway to Heaven, Bird\'s Nest...\r\nThe group stops at Bao Loc for lunch, then departs for the original pick-up point. Farewell to the group and end the tour program.\r\n\r\nNote:\r\n\r\nItinerary may change destination order depending on actual conditions.\r\nThe tour schedule is very susceptible to the weather. This is a force majeure situation, hope you understand and sympathize.\r\nThis is a package tour program, Vietravel is not responsible for refunding the difference in costs for customers who are exempt or prioritized such as children, the elderly, people with meritorious services to the revolution... Policy Discounts, privileges (if any) are only for retail customers of the attractions.\r\nConditions for receiving guests:\r\n\r\nEnsure the 5K principle, disinfect.\r\nGuests participating in the tour must have a covid green card (guests have had full doses of covid vaccines, completed the 2nd dose before 14 days and not more than 12 months), FO guests have recovered within 06 months by the time of return local (with hospital discharge certificate / certificate of recovery from the Department of Health).\r\nChildren (accompanied by parents) must be tested for covid and have a negative confirmation from a health facility 24 hours before departure date (testing costs are self-sufficient).', 'T', 'Da Lat', 'DL5.jpg'),
(18, 'Da Lat - Nha Trang (3*&4* Hotel) (Economic Tour)', 'Ho Chi Minh', 'Car', 5, 219, 109, 54, 10, 'DLNT1.jpg', 'DLNT2.jpg', 'DLNT3.jpg', 'DLNT4.jpg', 'Join a special tour, a journey where visitors can go up to the forest and down to the sea: have fun in the coastal city of Nha Trang and visit many beautiful landscapes in the highland city of Da Lat. Coming to Nha Trang, the most beautiful coastal city in Central Vietnam, visitors will visit interesting destinations', 'Day 1 - TP. HO CHI MINH CITY - DA LAT (Breakfast, lunch, dinner)\r\nYou gather at Vietravel (190 Pasteur, Vo Thi Sau Ward, District 3, Ho Chi Minh City), the car will take you to Da Lat. Arriving in Da Lat, you visit:\r\n- Country Garden: located at the foot of Mimosa Pass, the garden fascinates viewers with its large flower fields and many famous flowers in Da Lat blooming. Especially, Que Garden is proud to be one of the largest coniferous bonsai gardens in Vietnam, the bonsai pots are both large and beautiful, carefully cared for and molded extremely beautifully. In addition, the koi pond overlooking the pine hill is an extreme destination that visitors cannot ignore.\r\nIn the evening, you are free to walk around the street to enjoy famous cuisine in the mountain town: Tao Ngo\'s chicken hotpot, Go restaurant beef hotpot, Chicken intestine wet cake, Snails stuffed with meat, Buffet hot pot cart, Tile BBQ ... or go to Nhac Quan Diem Xua listens to the immortal love songs of musician Trinh Cong Son ... (expenses excluded).\r\nOvernight in Da Lat\r\n \r\nDay 2 - DA LAT - CITY OF THOUSANDS of Flowers (Breakfast, lunch, dinner)\r\nAfter having breakfast at the hotel, depart to visit:\r\n- Fairytale Land & Vinh Tien Wine Cellar: Coming here, visitors feel like they are lost in the fairy garden of Hobbiton dwarfs, the garden centerpieces are unique and colorful houses, fascinating wall paintings. scrolls and small flower beds are equally attractive. Take a stroll around the garden, don\'t forget to step into the wine cellar with more than 10,000 bottles stored in the cellar.\r\n- Puppy Farm: visitors enjoy posing with super cute dogs or choose for themselves beautiful angles by the brilliant outdoor flower hill, high-tech strawberry garden, giant squash, pepino melon, cherry tomato, … (seasonal).\r\n\r\nLunch, group back to the hotel to rest. In the afternoon continue to visit:\r\n- Da Lat station: the most ancient station in Vietnam and Indochina, has a unique architectural style with three stylized pyramidal roofs like the three peaks of Langbiang mountain and the communal house in the Central Highlands.\r\n- Clay Tunnel: works of art with monumental and impressive terracotta sculptures recognized by the Vietnam Record Book such as: Railway station, Bao Dai palace, Da Lat University, church Chicken, Lien Khuong airport, highway, Tuyen Lam lake, Valley of Love...). Famous as the \"infinity lake\" attracts many tourists to visit today.\r\nOvernight in Da Lat.\r\n \r\nDay 3 - DA LAT - ME LINH COFFE - NHA TRANG (Breakfast, lunch, dinner)\r\nAfter breakfast, depart to visit the beautiful bonsai garden:\r\n- Me Linh Coffee: designed with an open space with a 360-degree view of the vast coffee fields... In particular, enjoy a cup of pure weasel coffee with a characteristic rich flavor of quality. musk (own expense). In addition, you can check in the miniature but no less lively versions of famous works such as \"Bali heaven gate, Linh Quy Phap An heaven gate, stairs to heaven, bird\'s nest...\r\nAfter lunch, continue to depart for Nha Trang.\r\nOvernight in Nha Trang.\r\nDay 4 - NHA TRANG - HÀ NỘI - VINWONDERS NHA TRANG (Breakfast, lunch, dinner at your own expense)\r\nAfter having breakfast buffet at the hotel, the car will take you to the port, get off the cruise ship and visit:\r\n- Hon Lao - Monkey Island: where more than 1000 monkeys are preserved and live naturally. You are free to swim, relax, visit and see Monkey circus show, dog racing, monkey swimming or experience sports on the beach and games: parachute canoe, water motor, racing car. Formula 1, paintball shooting, ostrich riding… (expenses excluded).\r\n\r\nBack to hotel free time to rest. In the afternoon, you are free to choose the following attractions:\r\n- Option 1: Vinwonders Nha Trang (Cable car cost & dinner at your own expense): You are free to visit the campus with magnificent European castles, Eiffel Tower-shaped cable car, Van Hoa Hill, .. Walking in this space during the day, visitors think they are lost in a certain old town of the West. At night, the scene becomes more shimmering than ever by decorative lights in the castles and amusement parks, creating a fanciful, fairy-tale beauty.\r\nFreedom Joining games such as Sky Drop free-fall tower, Alpine Coaster skateboarding, Roller Coaster roller coaster, cable-stayed swing will be suitable for those who love thrills created from swings, somersaults in the air, upside down. You can walk in the world of the Aquarium, where there are more than 300 kinds of rare sea creatures from many different countries converging. In particular, Vinpearl Land Aquarium Nha Trang also offers visitors a world of shimmering colors with unique art shows such as Mermaid performance - where visitors can admire beautiful mermaids. beauty out of a fairy tale, or a fish feeding program – with healthy divers, playing and taking care of the inhabitants of the Aquarium. Or at the 4D Film Castle, you will enjoy extremely sharp movie projection technology with realistic 4D effects like living in the ocean world. In addition, there are water music shows, dolphin shows, and Carnival performances, which are extremely attractive....\r\n- Option 2: Cruise on Emperor Cruise, the ship will move along the coastal city of Nha Trang, guests will enjoy the most beautiful sunset while enjoying cocktails, exquisite dinners and guitarists, violin plays melodious music in a romantic setting under the stars, moonlight and bright city lights.\r\nOvernight in Nha Trang.\r\n \r\nDay 5 - NHA TRANG - HOT MINERAL SPRING I-RESORT - HCMC (Breakfast, Lunch)\r\nIn the morning, you visit:\r\n- I-Resort Hot Spring Center: You will experience a new relaxing mineral bath service. In addition, the group can also take a mineral mud bath or massage for more youthful skin (expenses excluded).\r\n- Princess Jewelry Center (Le Hong Phong Street): visit, learn about pearl production process, how to classify. Here, you can choose for yourself famous high-end jewelry products with precious stones, pearls as well as high-quality products made from natural cultured pearls.\r\nLunch. Depart for Ho Chi Minh City. On the way back, the group stopped at to visit:\r\n- Ca Na Beach: one of the most beautiful beaches in Central Vietnam. From Cam Ranh, the car will take you along the new road close to the sea to Nha Trang city.\r\n- Ancient Fishing Village: with a history of 300 years, the cradle of fish sauce making, experience the feeling of working in the salt fields, walking on the ancient road, visiting Phan Thiet old town, visiting the hut of the fish sauce household. In the past, immersed in emotions in the 3D sea and enjoy when going to the old fishing village market with interesting old hand calculators, scales, …\r\nThe car takes the group back to the original pick-up point and ends the journey with many experiences.', 'T', 'Da Lat Nha Trang', 'DLNT5.jpg'),
(19, 'Phu Quoc - Far East Pearl - Bai Sao - Fishing Challenge - 5* Hotel', 'Ha Noi', 'Flight', 4, 389, 194, 97, 19, 'PQ1.jpg', 'PQ2.jpg', 'PQ3.jpg', 'PQ4.jpg', 'Bai Sao beach is located in the south of the island - a calm beach, quiet and pristine long sandy beach where the island is green. Here you will really feel peaceful, relaxed and life seems to slow down when you are in harmony with nature. • Suoi Tranh - visitors explore the smooth green nature of plants and flowers, take a bath in the stream and relax in the middle of the forest. • VinWonders and Vinpearl Safari, the largest modern amusement park complex in Southwest Vietnam. • Explore famous scenic spots and have the opportunity to shop for typical products of Phu Quoc. • Learn and immerse yourself in the life of the people on the \"Pearl\" island', 'Day 1 - HANOI - PHU QUOC (Dinner) - In case of flight before 11am, Vietravel will support lunch\r\nYou gather at Vietravel (No. 3 Hai Ba Trung, Hoan Kiem, Hanoi). Car and guide take the delegation to Noi Bai airport for flight to Phu Quoc.\r\nArriving in Phu Quoc, the tour guide takes the group to the hotel to check in and rest. In the afternoon, the tour group\r\n- Dinh Cau: a cultural and religious symbol of Phu Quoc Island. A place where local fishermen put their trust for a trip to catch fish full of fish when they return. After that, the delegation visited Ba Thuy Long Thanh Mau palace - worshiping Goddess Kim Giao, a woman who is highly respected by the people of Phu Quoc because she openly destroyed this island district.\r\n- Tranh Stream: A cool stream from the ravine weaves through the woods and rocks to blend into the main stream to create a peaceful Tranh stream.\r\nReturn, have dinner at the restaurant & freely explore \"Pearl Island\" at night.\r\nOvernight in Phu Quoc.\r\n\r\nDay 2 - SEA FISHING EXPERIENCE - BAI SAO - HO CHI MINH CITY (Breakfast, Lunch, Dinner)\r\nCustomers eat breakfast at the hotel. The car takes you to visit the South Island:\r\n- Experience the fishing program on the sea...\r\n- Bai Sao (voted as one of the most beautiful beaches in Vietnam): here you can not only swim, but also participate in thrilling games on the sea such as jetky, canoes, and motorbikes. water… (own expense)\r\n- Phu Quoc Prison: This place is an eloquent proof of the arduous struggle and indomitable spirit of our people in the struggle against foreign invaders.\r\n- Phu Quoc fish sauce product display facility - You learn and watch a demonstration of the process of making traditional fish sauce in Phu Quoc.\r\n- Truc Lam Ho Quoc Zen Monastery: The most beautiful and largest temple on the pearl island with a wild and quiet setting has created a unique natural picture full of sanctity and purity.\r\nThe group have dinner in restaurant. Then you are free to visit Phu Quoc night market.\r\nOvernight in Phu Quoc.\r\n\r\nDay 3 - FREE TO DISCOVER VINWONDERS - VINPEARL SAFARI (Breakfast, Dinner)\r\nGuest has breakfast at a hotel. The group is free to swim and explore Phu Quoc.\r\nHINT: Group 1 of the following 2 options (expenses excluded)\r\nOption 1:\r\nExperience at Vinpearl Safari Phu Quoc - The first wildlife zoo in Vietnam with a scale of 180 hectares, more than 130 species of rare animals, visitors enjoy performances, take pictures with animals; Experience the open zoo in the natural forest, close and friendly to humans.\r\n\r\nOr visit VinWonders amusement park - the largest theme park in Vietnam, the leading scale in Asia, you discover\r\n- Experience 12 human civilizations from ancient to modern;\r\n- Explore 06 theme park subdivisions with more than 100 super unique entertainment activities;\r\n- Go crazy at the largest water park in Southeast Asia;\r\n- Conquer 20 of the most extreme adventure games on the planet such as the world\'s fastest slide \"Rage of Zeus\", Vietnam\'s first 15m-high dry slide \"The War of the Elves\", the dark indoor slide \" Eagle Warrior\" and \"Curse of the Evil Dragon\" - Vietnam\'s first interactive dark indoor game,…\r\n- Be overwhelmed by the magical ocean world with infinity views through the giant 8x25m acrylic glass inside Neptune\'s Palace - the world\'s largest turtle aquarium\r\n \r\nOption 2:\r\nYou are free to rest at the hotel or swim, explore Phu Quoc.\r\nNote: You have lunch and transportation at your own expense to attractions VinWonders and Vinpearl Safari Phu Quoc,…\r\n\r\nAfter dinner at the restaurant, the group is free to shop at Phu Quoc night market.\r\nOvernight in Phu Quoc.\r\nDay 4 - PHU QUOC - HANOI (Breakfast) - In case the flight departs after 13:00, Vietravel arranges lunch for you\r\nHave breakfast and visit:\r\n- Pearl culture facility: admire and freely shop for genuine pearls cultured in Phu Quoc.\r\n- Shopping for famous Phu Quoc specialties: fish sauce, sim wine, pepper garden...\r\nThe car will take you to Phu Quoc airport, take a flight to Noi Bai airport, and your guide will pick you up and return to the original rendezvous point.\r\n\r\n* Note\r\n- Flight time is subject to change according to the airline\'s updated information – the transaction staff is responsible for informing the customer as soon as the notice is received, if any.\r\n- Itinerary may change the order of destinations depending on actual conditions - visiting schedules (bathing, watching flowers, experiencing ...) are easily affected by the weather. This is a force majeure situation, hope you understand and sympathize.\r\n- In case the group gathers less than 10 guests, the tour will not depart. The company will advise you to change the tour to a nearby departure date or notify the costs incurred to depart the group.', 'N', 'Phu Quoc', 'PQ5.jpg');
INSERT INTO `tour` (`tour_id`, `tour_name`, `location_start`, `transport`, `duration`, `price1`, `price2`, `price3`, `price4`, `img1`, `img2`, `img3`, `img4`, `detail`, `visit`, `region`, `place`, `img5`) VALUES
(20, 'Vung Tau package tour 2 days 1 night', 'Ho Chi Minh', 'Car', 2, 96, 48, 24, 4, 'VT1.jpg', 'VT2.jpg', 'VT3.jpg', 'VT4.jpg', 'Come to Vung Tau in this journey; in addition to enjoying the specialties of the sea; You can also explore the sheep farm, visit Marina paradise bay and swim at the most beautiful beach in Vung Tau. Book Vung Tau 2 days 1 night tour at sgtourism.vn to feel and discover the immense beauty of Vung Tau coastal city.', 'Day 1 | Saigon - Vung Tau (Breakfast, Lunch, Dinner)\r\nMorning: Car and tour guide will pick you up at the meeting point: 05h15 Cultural House District 5 (No. 105, Tran Hung Dao - parking space available). 05h40 Youth Cultural House District 1 (No. 4, Pham Ngoc Thach, District 1). 06h10 Comeco Hang Xanh gas station (No. 3- 178M Dien Bien Phu, Binh Thanh District). 07:30: Have breakfast at the restaurant, then the car departs for Vung Tau to start the sightseeing program in the following order: Vung Tau Sheep Hill also known as Chau Pha Sheep Hill with super cute sheep, here It is a place to take photos of super quality for couples and tourists when traveling to Vung Tau. Thach Thao flower garden is characterized by a field of purple flowers that represents a strong belief in love. Heather flowers have a simple, gentle and profound beauty that will make couples unable to miss.\r\n\r\nNoon 11:30: Have lunch at a local restaurant with seafood, specialties bearing the culture of the coastal city. Then check in hotel, rest.\r\n\r\nAfternoon 14h00: You are free to play, swim at one of the most beautiful beaches in Vung Tau.\r\n\r\nEvening 18:30: Have dinner at the restaurant. Then go for a walk on the beach at night, relax in the sea breeze at the park, enjoy seafood, fresh specialties, shop for souvenirs made from seashells and snail shells at Vung Tau night market. Or go to Lam Son Dog Racecourse to watch exciting dog races (open to guests on Friday, Saturday and Sunday nights with an entrance ticket of 60,000 VND). Enjoy a panoramic view of the coastal city of Vung Tau at night on the Lighthouse, this is the most ideal place for visitors to enjoy the scenery and check-in the beautiful scenery of Vung Tau shimmering with lights at night (expenses excluded). . Then return to the hotel to rest.\r\n\r\nDay 2 | Vung Tau - Saigon (Breakfast, Lunch)\r\nMorning 07h00: You get up early to walk on the beach, watch the sunrise, have breakfast and check out of the hotel. Car and guide take the group to visit Vung Tau in the following order: Statue of Lord Christ, also known as statue of Lord stretching out his arms, statue of Jesus Christ the King is the symbol of Vung Tau coastal city built on the top of Small Mountain. This is a famous check-in point for Vung Tau tourists, you will be able to see the whole beautiful city of Vung Tau from above. Visit Bach Dinh, an ancient and mysterious castle in the middle of the forest. You can immerse yourself in the beautiful nature and admire the ceramic products from the Kangxi period. Marina Marina is a must-see attraction when traveling to Vung Tau, located on Dinh River where canoes, yachts and boats are anchored. Marina Marina becomes a very beautiful and unique photo spot in European style, which will surely make you satisfied. Song Dinh Bay has clear blue sea water, calm waves will make you forget the chaos of the city. Long Son Island is a new and unspoiled tourist destination in the coastal city of Vung Tau. Go Gang here you can rent canoes or Catamaran sailing boats to visit the raft village, recreational fishing, buying seafood, swimming on the bay ... (expenses excluded). Oil and gas rig with panoramic view of modern oil and gas industry, Cat Lo port, fishing port... maximum visiting time 30-45 minutes. Ticket price: 170,000 VND (expenses excluded).\r\n\r\n12.00 noon: Have lunch at a local restaurant at Marina Marina with seafood and specialties imbued with the coastal city\'s culture. After that, you are free to have fun and relax.', 'N', 'Vung Tau', 'VT5.jpg'),
(21, 'Tour Con Dao 2D1N', 'Ho Chi Minh', 'Boat', 2, 79, 39, 19, 3, 'CD1.jpg', 'CD2.jpg', 'CD3.jpg', 'CD4.jpg', 'Con Dao is a \"legendary\" land in Vietnam that almost every tourist wants to visit once. The mysterious spiritual stories are woven here along with the unspoiled space that has not been affected much by human hands, making visitors more curious and want to make a discovery trip right away. The spiritual Saigon - Con Dao tour 2 days 1 night is an appropriate choice, giving visitors the opportunity to visit and learn about this interesting land.\"', 'DAY 01: SAI GON - CON DAO (lunch, dinner)\r\nMorning: Pick up guests at Con Dao airport to the hotel to check in - Rest - Lunch.\r\n\r\nAfternoon: Visit Con Dao, choose 1 of 2 options below:\r\n\r\nOption 1: Explore the hell on earth Con Son:\r\n\r\nThe Palace of the Island Lords: Formerly the residence and working place of the island lords, learn the history of Con Dao formation through artifacts, antiquities, pictures and documents saved from the French period to the present.\r\nPhu Son Prison Camp, Phu Hai: A place where hundreds of thousands of prisoners and communist soldiers are exiled with legends about the Rice Mill, the torture room named Dark Room, ...\r\nFrench-style tiger cage: Explore the solidly built \"tiger cage\" system hidden between the mazes of inner and outer gates to disorient political prisoners and distract observations. The most brutal forms of torture took place here.\r\nAmerican-style tiger cage: With narrow and damp cells, built in 1971 to torture and debilitate the revolutionary spirit of Vietnamese Communist political prisoners.\r\nIsolated Cow Barn: Originally a place to raise cows and pigs with 9 solitary confinement rooms, 24 pig compartments, 2 cow sheds and 1 cow manure cellar. In 1930, the French turned the barn into a prison for female prisoners. In 1963, in order to expand the prison, the US converted 24 pig compartments into 24 cells. Political prisoners who resisted the salute of the flag, held in shackles for a long time, suffered from physical paralysis, were brought here to continue their exile.\r\nHang Duong Cemetery: The place where thousands of Vietnamese revolutionary soldiers and patriots are buried through many generations of imprisonment, lasting from 1862 to 1975. This is also the place where Ms. Vo Thi Sau is buried. associated with true stories of the sacred.\r\nAlong with the journey, you also have the opportunity to visit the attractions imbued with the culture and beliefs of the people of Con Dao:\r\n\r\nPhi Yen Temple: Also known as An Son Mieu, it is a place to worship Phi Yen, the concubine of Lord Nguyen Anh. In Con Dao, local people worship two women as sacred saints, namely Ba Phi Yen and national hero martyr Vo Thi Sau.\r\nNui Mot Pagoda: Also known as Van Son Tu, a relic associated with the place of Con Dao, is the spiritual place of the local people. Nui Mot Pagoda is a majestic bamboo sword located on the top of the mountain, a beautiful landscape not to be missed when coming to Con Dao. From here visitors can see An Hai lake, panoramic view of Con Dao town and Con Son Bay.\r\nOption 2: Explore the North Island\r\n\r\nOn the way to Dam Trau Beach towards the North of the island, visitors have the opportunity to admire the enchanting beauty of Con Dao with the majestic natural landscapes of Lo Voi Cape, Chim Chim Cape and Hon Cau, Bay Canh Island. hidden along the winding road connecting the district town center with Con Son airport.\r\nAlong with the journey to discover the North Island, you will visit the following places:\r\n\r\nTemple of Prince Cai: Is the temple of the son of King Gia Long and Thu Phi Hoang Phi Yen, associated with the escape of King Gia Long before the pursuit of the Tay Son army.\r\nDam Trau Beach: Con Dao has many beautiful beaches, but it is impossible not to mention Dam Trau, a beach associated with the legend of Cau man and Trau woman. Coming to Dam Trau, visitors can enjoy bathing and enjoying the cool water of this much-mentioned beach.\r\nHot Springs Beach: From Dam Trau beach, visitors can cross a short forest road to reach Hot Springs Beach, a beach that still retains its wild and little-known features. This is a beautiful beach like a vivid picture of tropical waters with flat white sand and a rare mangrove ecosystem in other islands.\r\nEvening: Rest in the hotel or laze around to explore the coastal cuisine at local restaurants\r\n\r\nDAY 02: OAI HUNG HISTORY Con Dao (Breakfast)\r\nFree to go to the market to shop or rest in the hotel or swim until the time to see you off to Con Dao airport - the end of the Con Dao tour.\r\n \r\n\r\n(Due to the characteristics of the route, the flight time may change depending on the airline. Accordingly, the order of the tour program and meals will be adjusted according to the actual situation)\"', 'N', 'Con Dao', 'CD5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tour_guide`
--

CREATE TABLE `tour_guide` (
  `tour_guide_id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT 'male',
  `phone` varchar(30) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tour_guide`
--

INSERT INTO `tour_guide` (`tour_guide_id`, `name`, `email`, `gender`, `phone`, `active`) VALUES
(1, 'Misthy', 'mit@gmail.com', 'female', '0938654785', 1),
(2, 'jungkook', 'jungkook@gmail.com', 'male', '0938421985', 1),
(3, 'Thong Soai Ca', 'thong@gmail.com', 'male', '0938612785', 1),
(4, 'Tran Thanh', 'tranthanh@gmail.com', 'male', '0938652585', 1),
(5, 'Anh Phu', 'anhphu@gmail.com', 'male', '0938654755', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`, `address`, `phone`, `active`) VALUES
(1, 'Phung Thanh Do', 'phungthanhdo@gmail.com', '1234567', '590 CMT8 phường 11, quận 3, thành phố Hồ Chí Minh, Việt Nam', '0914413681', 1),
(2, 'Le Van Bo', 'levanbo@gmail.com', '123456', '291 Vườn Lài, An Phú Đông, Quận 12, Thành phố Hồ Chí Minh, Việt Nam', '0912231123', 1),
(3, 'Khoa PuG', 'khoapug@gmail.com', '123456', 'Hẻm 110 Đường 30, Phường 6, Gò Vấp, Thành phố Hồ Chí Minh, Việt Nam', '0938421433', 1),
(4, 'Jonny Dang', 'jonnydang@gmail.com', '123456', '35a1 khu phố 2 đường số 12 Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam', '0938421433', 0),
(5, 'Ngoc Trinh', 'ngoctrinh33@gmail.com', 'trinh123', 'Văn Yên, Đại Từ, Thái Nguyên, Việt Nam', '0978471659', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `schedule_id` (`schedule_id`),
  ADD KEY `FK_user_id` (`user_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `FK_schedule_id` (`schedule_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `news_event`
--
ALTER TABLE `news_event`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `tour_id` (`tour_id`),
  ADD KEY `fk_tour_guide` (`tour_guide_id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`tour_id`);

--
-- Indexes for table `tour_guide`
--
ALTER TABLE `tour_guide`
  ADD PRIMARY KEY (`tour_guide_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news_event`
--
ALTER TABLE `news_event`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tour_guide`
--
ALTER TABLE `tour_guide`
  MODIFY `tour_guide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `FK_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`schedule_id`) REFERENCES `schedule` (`schedule_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `FK_schedule_id` FOREIGN KEY (`schedule_id`) REFERENCES `schedule` (`schedule_id`),
  ADD CONSTRAINT `FK_tour_id` FOREIGN KEY (`schedule_id`) REFERENCES `tour` (`tour_id`),
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `fk_tour_guide` FOREIGN KEY (`tour_guide_id`) REFERENCES `tour_guide` (`tour_guide_id`),
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
