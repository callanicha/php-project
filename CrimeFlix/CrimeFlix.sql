-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 27, 2024 at 05:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CrimeFlix`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `director` varchar(255) DEFAULT NULL,
  `released_year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `title`, `description`, `director`, `released_year`) VALUES
(10, 'The Devil Judge', 'The series is set in a dystopian version of South Korea, where people harbor hatred towards their leaders and live in chaos. Trials are held through a courtroom live show aired on television, where three judges come together to bring justice and peace', 'Choi Jung-kyu', 2021),
(11, 'My Name', 'Yoon Ji-woo\'s (Han So-hee) father dies suddenly. She desperately wants to take revenge on whoever is responsible for her father\'s death. Ji-woo then works for drug crime gang Dongcheon, led by Choi Mu-jin (Park Hee-soon). With the help of Mu-jin and to uncover the reason for her father\'s death, Ji-woo joins the police force and becomes a mole for Dongcheon. Ji-woo, using her fake name Oh Hye-jin, is assigned to work in the drug investigation unit in the Inchang Metropolitan Police Station. Her partner there is Detective Jeon Pil-do (Ahn Bo-hyun).', 'Kim Jin-min', 2021),
(12, 'Juvenile Justice', 'Shim Eun-seok, an elite judge with a cold and distant personality who is known for her dislike of juveniles, is appointed judge of a juvenile court in the Yeonhwa District. There, she breaks customs and administers her own ways of punishing the young offenders. Eun-seok has to deal with and balance her aversion to minor offenders with firm beliefs on justice and punishment as she tackles complex cases while discovering what being an adult truly means.', 'Hong Jong-chan', 2022),
(13, 'Partners for Justice', 'About a forensic doctor, Baek Beom, who is skillful at his work but has an eccentric personality, and prosecutor, Eun Sol, who is a rookie prosecutor with a warm heart. She has a bright personality and comes from a wealthy family background. They come to work together to solve cases.', 'No Do-cheol', 2018),
(14, 'Stranger', '\"Stranger\" is a gripping South Korean crime thriller series that features a mix of legal drama and mystery, starring Cho Seung-woo and Bae Doona. The series has been praised for its complex narrative, deep exploration of morality and justice, and its subtle yet impactful character development.', 'Ahn Gil-ho (Season 1), Yoo Je-won (Season 1), Park Hyun-suk (Season 2)', 2017),
(15, 'Kill Boksoon', 'Gil Bok-Soon is a contract killer working for M. K. Ent. Highly regarded by her peers, she has a 100% success rate and is one of a few killers rated \"A\" by her company. She is also a single mother to Jae-yeong, a closeted lesbian teenager who studies at a prestigious private school. M. K. Ent. is run by Cha Min-Kyu — a powerful and experienced killer who holds much respect for Bok-Soon — and by his younger sister, Cha Min-Hee, who despises her. Bok-Soon is sexually involved with a co-worker, Han Hee-Sung — a skilled killer, whose career progress was thwarted for unknown reasons. Shortly before Bok-Soon is set to renew her contract, she is assigned a sensitive job that she is unwilling to fulfill.', 'Byun Sung-hyun', 2023),
(16, 'Taxi Driver', 'Kim Do-gi is a KMA graduate who works as a taxi driver for a company which offers a \"revenge-call\" service to its clients who have been wronged and helps them to exact vengeance.', 'Park Joon-woo (Season 1), Lee-dan (Season 2)', 2021),
(17, 'Sherlock', 'Sherlock depicts \"consulting detective\" Sherlock Holmes (Benedict Cumberbatch) solving various mysteries in modern-day London. Holmes is assisted by his flatmate and friend, Dr John Watson (Martin Freeman), who has returned from military service in Afghanistan with the Royal Army Medical Corps. Although Metropolitan Police Service Detective Inspector Greg Lestrade (Rupert Graves) and others are suspicious of Holmes at first, over time, his exceptional intellect and bold powers of observation persuade them of his value. In part through Watson\'s blog documenting their adventures, Holmes becomes a reluctant celebrity with the press reporting on his cases and eccentric personal life. Both ordinary people and the British government ask for his help.', 'Mark Gatiss, Steven Moffat', 2010);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'test1', '1234', 'test1@gmail.com'),
(2, 'test2', '1234', 'test2@gmail.com'),
(3, 'test3', '1234', 'test3@gmail.com'),
(4, 'test4', '1234', 'test4@gmail.com'),
(5, 'test4', '1234', 'test4@gmail.com'),
(6, 'test5', '1234', 'test5@gmail.com'),
(7, 'test5', '1234', 'test5@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
