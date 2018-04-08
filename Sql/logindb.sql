-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 07:35 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ansdata`
--

CREATE TABLE `ansdata` (
  `username` varchar(50) NOT NULL,
  `1` int(2) NOT NULL,
  `2` int(2) NOT NULL,
  `3` int(2) NOT NULL,
  `4` int(2) NOT NULL,
  `5` int(2) NOT NULL,
  `6` int(2) NOT NULL,
  `7` int(2) NOT NULL,
  `8` int(2) NOT NULL,
  `9` int(2) NOT NULL,
  `10` int(2) NOT NULL,
  `Total` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `point`
--

CREATE TABLE `point` (
  `Id` int(3) NOT NULL,
  `A` int(3) NOT NULL,
  `B` int(3) NOT NULL,
  `C` int(3) NOT NULL,
  `D` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `point`
--

INSERT INTO `point` (`Id`, `A`, `B`, `C`, `D`) VALUES
(1, 30, 20, 40, 10),
(2, 30, 20, 10, 40),
(3, 30, 40, 10, 20),
(4, 30, 10, 40, 20),
(5, 10, 20, 40, 30),
(6, 30, 40, 20, 10),
(7, 20, 30, 10, 40),
(8, 30, 10, 20, 40),
(9, 10, 30, 20, 40),
(10, 40, 10, 30, 20);

-- --------------------------------------------------------

--
-- Table structure for table `que`
--

CREATE TABLE `que` (
  `Id` int(3) NOT NULL,
  `question` varchar(200) NOT NULL,
  `A` varchar(100) NOT NULL,
  `B` varchar(100) NOT NULL,
  `C` varchar(100) NOT NULL,
  `D` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `que`
--

INSERT INTO `que` (`Id`, `question`, `A`, `B`, `C`, `D`) VALUES
(1, 'We know you are one of a kind and so you deserve someone special. What talent would you appreciate most in your prospective partner?', 'The ability to love and care is the best talent ever.', 'Great problem slover', 'Any creative talent will do: music,painting,poetry.', 'Speaking foreign languages including sarcasm.'),
(2, 'What do you look forward to doing together with your partner most of all?', 'Introducing my love to all my family and spending time together with them.', 'Attending all the social events together.', 'Trying crazy new things like bungee jumping. Also, traveling the world.', 'Enjoying the little things: from watching sunrises to singing along in the car.'),
(3, 'It\'s date night and you decide to watch a movie together. Which of the following movies would you want to share and enjoy with your significant other?', 'Meet the parents.', 'Breakfast at Tiffany\'s, or any other good old vintage.', 'Spiderman,Wonder women,The Avengers action,please!', 'The Wolf of wall street I want someone with an appreciation for dark humor.'),
(4, 'We all have our ups and downs. When sharing your problems with your partner, how do you expect him or her to react?', 'Listen to you and nod understandingly,then hug it out.', 'Come up with some crazy unexpected solution ideas.', 'Surprise you with a poem or a song they just wrote for you.A support dance will also do.', 'Discuss the problem constructively to find a solution that will actually'),
(5, 'What would you never give up for your relationship?', 'Freedom to move around the world.', 'My career goals.', 'My style and my good taste in music and art.', 'There\'s nothing I wouldn\'t give up for my boo!'),
(6, 'Your prospective significant other must have some nickname given by his or her friends. Which of the following sound most appealing to you ?   ', 'Savior', 'Romeo', 'The big wheel', 'Trouble maker'),
(7, 'Hearing which of the following phrases from your partner would be an absolute deal breaker for you?', 'I lost my job and I think money is highly overrated.', 'I don\'t really get that whole marriage thing.', 'I think it\'s time to settle down and get serious.', 'I don\'t care about how you feel. I had a bad day, too and football is on.'),
(8, 'Let\'s suppose you have found your other half.All your friends are happy for you and ask you to describe your relationship using one emoji.What is it going to be?', 'Two hearts', 'firework', 'Heart eyes', 'Romantic sunset'),
(9, 'Imagine you have made it to diamond ring stage. What would your ideal honeymoon look like?', 'Trekking in the Himalayas.', 'Disney world.', 'Caribbean cruise.', 'Eurotrip: bring on the museums and sights.'),
(10, 'Which of the following sounds like a perfect anniversary gift from your love?', 'Something really sweet and personal like a \"100 reasons why I love you\" handmade booklet.', 'Tickets to some exciting destination.', 'Cooking something special for dinner and dancing the night away.', 'I think I deserve something expensive. A fancy vintage watch, maybe?');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`username`, `password`) VALUES
('123', '123'),
('kunal', '123456'),
('hardy sandhu', 'backbone'),
('saurabh', 'nowwon66'),
('nimisha', '123456'),
('deva ', '123456'),
('rwerqe', '11111'),
('QWERTY', 'QWERTYUIOP'),
('lala', 'lalalandlol'),
('rakshit', '14101972'),
('sastirandi', '123456789'),
('akash', 'akashsharma'),
('guru_rand', 'bahubali');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
