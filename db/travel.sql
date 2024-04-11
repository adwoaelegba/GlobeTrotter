-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 12:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_trip`
--

CREATE TABLE `book_trip` (
  `book_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `dest_id` int(11) NOT NULL,
  `travel_date` datetime NOT NULL,
  `duration` int(11) NOT NULL,
  `payment` varchar(25) NOT NULL,
  `card_num` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `dest_id` int(11) NOT NULL,
  `dest_name` varchar(100) NOT NULL,
  `continent` varchar(50) NOT NULL,
  `info` text NOT NULL,
  `flight_price` decimal(10,0) NOT NULL,
  `hotel_price` decimal(10,0) NOT NULL,
  `tour_price` decimal(10,0) NOT NULL,
  `souvenir_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`dest_id`, `dest_name`, `continent`, `info`, `flight_price`, `hotel_price`, `tour_price`, `souvenir_price`) VALUES
(1, 'Ghana', 'Africa', 'Picture vibrant markets where the air hums with the rhythm of drums. The aroma of spicy jollof rice dances through narrow alleys, and the sun sets over palm-fringed beaches, casting golden hues on the horizon. Ghana, where history whispers in the rustling leaves of ancient baobab trees, beckons you to explore its rich past and vibrant present.', 1450, 3500, 150, 200),
(2, 'Senegal', 'Africa', 'Close your eyes and imagine the rhythmic beat of sabar drums echoing across the bustling streets of Dakar. Senegal, where vibrant murals adorn the walls, and the scent of thieboudienne (a mouthwatering fish stew) lingers in the air. ', 2000, 2000, 150, 400),
(3, 'Morocco', 'Africa', 'The winding alleys of Marrakech beckon—a labyrinth of secrets waiting to be unraveled. Imagine sipping mint tea in a riad courtyard, surrounded by intricate zellige tiles and the fragrance of orange blossoms. Morocco, where the Atlas Mountains cradle ancient cities, invites you to lose yourself in the medina’s kaleidoscope of spices, textiles, and whispered tales of desert caravans.  ', 2300, 1500, 530, 140),
(4, 'France', 'Europe', ' Paris—the City of Light—where the Seine weaves stories of love and revolution. Imagine sipping wine at a sidewalk café, the Eiffel Tower winking in approval. France, where baguettes are an art form and châteaux dot the countryside, invites you to wander through lavender fields in Provence, taste Bordeaux’s velvety reds, and lose yourself in the Louvre’s masterpieces. ', 3300, 2500, 400, 240),
(5, 'Switzerland', 'Europe', ' Imagine pristine alpine meadows, where cowbells serenade snow-capped peaks. Switzerland, where precision meets chocolate, invites you to ski down powdery slopes, cruise on pristine lakes, and savor fondue in cozy chalets. Zurich’s financial buzz contrasts with Lucerne’s medieval charm, and the Glacier Express weaves tales of epic landscapes. ', 3200, 1000, 390, 540),
(6, 'Spain', 'Europe', ' Flamenco rhythms echo through Andalusian courtyards, where orange trees sway in the breeze. Spain, where tapas unfold like love letters, invites you to dance with passion in Seville, marvel at Gaudí’s whimsical architecture in Barcelona, and lose track of time in the Alhambra’s intricate gardens.   ', 1200, 1750, 240, 390),
(7, 'St. Lucia', 'Carribean', 'Crowned by the majestic Pitons, St. Lucia is a hiker’s dream. Climb Gros Piton for panoramic island views or tackle the unforgiving ascent of Petit Piton. Wildlife enthusiasts, follow the Piton Flore Trail and spot endemic St. Lucia parrots  ', 5000, 2780, 1030, 270),
(8, 'Barbados', 'Carribean', ' magine a sun-kissed paradise where turquoise waters gently kiss powdery white sands. Barbados, the “Helen of the West Indies,” is more than just beaches—it’s a symphony of flavors, history, and vibrant culture. ', 4309, 1245, 490, 310),
(9, 'Jamaica', 'Carribean', '  Reggae beats sway palm trees, and turquoise waves kiss golden sands. Jamaica, where Bob Marley’s spirit dances in the air, invites you to dive into Blue Lagoon’s crystal-clear waters and hike through lush rainforests. Taste jerk chicken, feel the rhythm of steel drums, and let the warmth of Jamaican smiles melt your worries away. ', 6432, 2000, 500, 100),
(10, 'Japan', 'Asia', 'Neon-lit streets of Tokyo pulse with energy, blending tradition and modernity. Cherry blossoms paint the landscape in delicate hues, while futuristic bullet trains whisk you away to ancient temples. Japan, where sushi is an art form and tea ceremonies are timeless rituals, invites you to bow to Mount Fuji’s majesty and soak in onsen hot springs.', 4000, 3765, 800, 1000),
(11, 'India', 'Asia', 'Imagine bustling streets where sacred cows roam freely, their gentle eyes reflecting centuries of reverence. India’s vibrant cuisine dances on your taste buds—fiery curries, fragrant biryanis, and street food that ignites your senses. Hold your breath atop the Chenab Bridge—the world’s highest rail bridge at 1,178 feet!', 3200, 5200, 544, 222),
(12, 'Turkiye', 'Asia', 'stanbul, where continents collide, bridges East and West with whispers of empires past. Imagine stepping into the Hagia Sophia, its domes echoing centuries of prayers. Turkey, where bazaars overflow with colorful ceramics, spices, and carpets, invites you to sail the turquoise waters of the Aegean and marvel at Cappadocia’s fairy chimneys. ', 4599, 4333, 234, 567);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `pid` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_num` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`pid`, `first_name`, `last_name`, `email`, `phone_num`, `country`, `password`) VALUES
(1, 'Nana', 'Adwoa', ' naelegba@gmail.com', 0, ' Ghana', '$2y$10$sZWdSC4zbOr9BdsT6oZVYuSmeSMOEbLuQmIGEWW/Z5JL6cI8zA7he'),
(6, 'na', 'na', 'naelegba@gmail.com', 552916895, 'Ghana', '$2y$10$YR38kzJMOtWH3fdz.0BdZOjyGVGNLT1s73xbcdfXciSRvCSKJnQji');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_trip`
--
ALTER TABLE `book_trip`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `dest_id` (`dest_id`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`dest_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_trip`
--
ALTER TABLE `book_trip`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `dest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_trip`
--
ALTER TABLE `book_trip`
  ADD CONSTRAINT `book_trip_ibfk_1` FOREIGN KEY (`dest_id`) REFERENCES `destination` (`dest_id`),
  ADD CONSTRAINT `book_trip_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `users` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
