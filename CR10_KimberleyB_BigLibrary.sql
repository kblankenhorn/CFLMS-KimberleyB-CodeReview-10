-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2020 at 07:44 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CR10_KimberleyB_BigLibrary`
--
CREATE DATABASE IF NOT EXISTS `CR10_KimberleyB_BigLibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `CR10_KimberleyB_BigLibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `libraryId` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `publish_address` varchar(255) DEFAULT NULL,
  `ISBN_code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`libraryId`, `image`, `type`, `title`, `author`, `description`, `publisher`, `publish_date`, `publish_address`, `ISBN_code`) VALUES
(13, 'https://de.web.img2.acsta.net/pictures/19/12/12/13/53/0966834.jpg', 'Movie', 'Bombshell', 'Charles Randolph', 'Bombshell is a 2019 American drama film directed by Jay Roach and written by Charles Randolph. The film stars Charlize Theron, Nicole Kidman, and Margot Robbie, and is based upon the accounts of the women at Fox News who set out to expose CEO Roger Ailes for sexual harassment.', 'Lionsgate', '2020-02-13', 'Los Angeles, CA', '44: 391828'),
(14, 'https://img01.mgo-images.com/image/thumbnail/v2/content/MMV31C2C7055DDEC14E0213AE11A80B387BF.jpeg', 'Movie', 'Harry Potter and the Socerers Stone', 'J.K Rowling', 'Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry.', 'Warner Bros', '2001-11-16', 'London', '3949493'),
(15, 'https://images-na.ssl-images-amazon.com/images/I/51PFvQ3jMSL._SY445_.jpg', 'Movie', 'Legends of the Fall', 'Jim Harrison', 'Based on the 1979 novella of the same title by Jim Harrison, the film is about three brothers and their father living in the wilderness and plains of Montana in the early 20th century and how their lives are affected by nature, history, war, and love.', 'Sony', '1994-12-23', 'Los Angeles', '27: 39299'),
(16, 'https://upload.wikimedia.org/wikipedia/en/thumb/8/83/Origndtsotoc.jpg/220px-Origndtsotoc.jpg', 'book', 'The Secret Of The Old Clock', 'Carolyn Keene', 'A nasty encounter at a department store allows Nancy to discredit the Topham sisters when they break an expensive vase. Interviewing various Crowley relatives and friends, Nancy learns from an injured old lady that Crowley hinted that the clue to his will would be found in the family clock.', 'Grosset & Dunlap', '1930-04-28', 'unknown', '6939211'),
(17, 'https://upload.wikimedia.org/wikipedia/commons/a/a8/Of_Mice_and_Men_%281937_1st_ed_dust_jacket%29.jpg', 'book', 'Of Mice and Men', 'John Steinbeck', 'George Milton and Lennie Small, two displaced migrant ranch workers, who move from place to place in California in search of new job opportunities during the Great Depression in the United States.', 'Pascal Covici', '1937-01-01', 'unknown', '58892981'),
(18, 'https://images-na.ssl-images-amazon.com/images/I/514RCTL+RkL._SX324_BO1,204,203,200_.jpg', 'book', 'The Witches', 'Roald Dahl', 'The book features the experiences of a young British boy and his Norwegian grandmother in a world where child-hating societies of witches secretly exist in every country.', 'Johnathan Cape', '1983-01-01', 'unknown', '0281982'),
(19, 'https://m.media-amazon.com/images/I/516IbJ592JL.jpg', 'book', 'To Kill a Mockingbird', 'Harper Lee', 'To Kill a Mockingbird takes place in the fictional town of Maycomb, Alabama, during the Great Depression. The protagonist is Jean Louise (“Scout”) Finch, an intelligent though unconventional girl who ages from six to nine years old during the course of the novel.', 'J. B. Lippincott & Co.', '1960-07-11', '715 Market Street ', '283898198'),
(20, 'https://images.thenile.io/r1000/9317731156793.jpg', 'Show', 'Sherlock Season 1', 'Steven Moffat', 'Sherlock depicts consulting detective Sherlock Holmes (Benedict Cumberbatch) solving various mysteries in modern-day London.', 'BBC', '2010-07-25', 'London, England', '383989'),
(21, 'https://target.scene7.com/is/image/Target/GUEST_6177e388-3e92-423f-a1d7-fe81e9b7dcd8?wid=488&hei=488&fmt=pjpeg', 'book', 'Harry Potter and the Socerers Stone', 'J.K Rowling', 'a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry.', 'Scholastic', '1997-07-26', '557 Broadway New York, NY', '16761873'),
(22, 'https://images-na.ssl-images-amazon.com/images/I/515JHXi6GZL._SX326_BO1,204,203,200_.jpg', 'book', 'Hamlet', 'William Shakespeare', 'a story of how the ghost of a murdered king comes to haunt the living with tragic consequences. A vengeful ghost and a brothers murder, dominate the gloomy landscape of Hamlets Denmark. Hamlet is a story of how the ghost of a murdered king comes to haunt the living with tragic consequences.', 'original: unknown', '1603-01-01', 'unknown', '11: 299392'),
(29, 'https://images-na.ssl-images-amazon.com/images/I/71gXe68LrWL._AC_SX522_.jpg', 'book', 'The Catcher In The Rye', 'J.D. Salinger', 'The novel details two days in the life of 16-year-old Holden Caulfield after he has been expelled from prep school. Confused and disillusioned, Holden searches for truth and rails against the “phoniness” of the adult world', 'Little, Brown & Co.', '1951-07-16', 'unknown', '45: 002222912');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`libraryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `libraryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
