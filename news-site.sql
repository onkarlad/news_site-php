-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 12:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news-site`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `post` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `post`) VALUES
(38, 'sports', 0),
(31, 'health', 2),
(32, 'politics', 1),
(33, 'entertainment', 2),
(37, 'finance', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `author` int(11) NOT NULL,
  `post_img` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `description`, `category`, `post_date`, `author`, `post_img`) VALUES
(68, 'FIRST', '                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto magni eum sapiente incidunt ipsa fugiat alias molestias ut at quos culpa, amet iste id tempora tempore dolorum pariatur voluptates dolorem debitis delectus enim ipsam quod! Quasi aspernatur ad error. Exercitationem minima excepturi odit illum rem dolorum ad inventore laborum, minus nostrum et temporibus amet suscipit eligendi! Quasi a laboriosam delectus error labore nulla. Numquam libero corrupti adipisci et unde dicta quos ullam provident a enim. Repellendus repudiandae cumque consequuntur, pariatur doloribus optio. Itaque eum vitae dicta nulla atque commodi provident quis, nesciunt facere id doloremque! Quae eos culpa neque ab.                                                ', '32', '20 Aug, 2022', 52, '1642676551834.jpeg'),
(66, 'SECOND', '                                                recusandae delectus rem? Modi error qui autem ab eveniet, consequatur unde similique voluptas suscipit exercitationem odio magni, voluptatum minima amet debitis, dolor nisi expedita fugit odit nulla id labore doloremque harum! Eveniet eius dignissimos, eaque ipsam voluptates, nemo qui tenetur ducimus aliquam, facilis aliquid dolorem. Provident dolores voluptatum cum. Magnam perspiciatis dolore ipsa enim recusandae, facere molestiae minima nemo possimus, voluptas earum sunt quas laborum quasi. Similique omnis nam natus officiis, rem eaque, ratione molestiae aspernatur corporis laborum molestias, deserunt temporibus deleniti repellat a. Suscipit et porro dolorem odit neque voluptatum! Quis                                                ', '33', '20 Aug, 2022', 52, 'img-4 (2).jpg'),
(62, 'THIRD', '                                Similique omnis nam natus officiis, rem eaque, ratione molestiae aspernatur corporis laborum molestias, deserunt temporibus deleniti repellat a. Suscipit et porro dolorem odit neque voluptatum! Quis, cum ducimus? Repellat, animi. Non, eum eos tempore temporibus neque asperiores iure accusantium nemo ex odit. Quasi voluptatibus delectus at ratione impedit commodi suscipit beatae fuga harum eius sequi quaerat pariatur laborum, fugit a dolorum eos veniam repellat dignissimos doloremque? Quod, animi!                                ', '37', '20 Aug, 2022', 52, 'bg-1 (2).jpg'),
(64, 'FOURTH', '                 doloremque! Quae eos culpa neque ab. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae eius expedita dignissimos mollitia voluptatibus sequi necessitatibus unde. Voluptate ratione nemo obcaecati quisquam illum, doloremque a accusantium autem dignissimos pariatur. Voluptatum fuga itaque animi, excepturi ullam, hic consequuntur quidem inventore corrupti placeat dolore recusandae nam sit cumque? Et sunt fugit quasi expedita explicabo atque. Mollitia cumque id vel amet veniam alias atque, quos, eos praesentium numquam ab recusandae delectus rem? Modi error qui autem ab eveniet, consequatur unde similique voluptas                 ', '31', '20 Aug, 2022', 52, 'img-3.jpg'),
(65, 'FIFTH', '                                                                 amet iste id tempora tempore dolorum pariatur voluptates dolorem debitis delectus enim ipsam quod! Quasi aspernatur ad error. Exercitationem minima excepturi odit illum rem dolorum ad inventore laborum, minus nostrum et temporibus amet suscipit eligendi! Quasi a laboriosam delectus error labore nulla. Numquam libero corrupti adipisci et unde dicta quos ullam provident a enim. Repellendus repudiandae cumque consequuntur, pariatur doloribus optio. Itaque eum vitae dicta nulla atque commodi provident quis, nesciunt facere id doloremque! Quae eos culpa neque ab. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae eius expedita dignissimos mollitia voluptatibus sequi necessitatibus unde. Voluptate ratione nemo obcaecati quisquam illum, doloremque a accusantium autem dignissimos pariatur. Voluptatum fuga itaque animi, excepturi ullam, hic consequuntur quidem inventore corrupti                                                                 ', '31', '20 Aug, 2022', 52, 'img-3 (2).jpg'),
(69, 'my first post', '                ashvjas jhsajha ajshja                ', '33', '21 Aug, 2022', 53, 'img-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `password`, `role`) VALUES
(52, 'onkar', 'lad', 'onkar', '37c941b96bf4972f2d33d2af50a15be0', 1),
(53, 'shardul', 'mane', 'shardul', '09610961ba9b9d19fdf34ce1d9bb0ea3', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
