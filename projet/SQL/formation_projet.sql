-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 20, 2020 at 04:21 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `formation_projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `projet`
--

CREATE TABLE `projet` (
  `id_projet` int(11) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `texte` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projet`
--

INSERT INTO `projet` (`id_projet`, `titre`, `texte`, `date`) VALUES
(7, 'CODEVORES', 'a digital nomad community website that gathers developers and recruiters around the world to build project that have a positive social impact.', '2008-07-04'),
(8, 'PROJET PHP', 'un site administré en PHP où l\'on pourra se log in avec une partie Admin et exposer nos projets.', '2008-07-04'),
(9, 'HAKI COMMUNITY', 'a web-app, I contributed (the front-end)  with my friends as a post-confinement commune effort. To help find a takeaway place according to user\'s geolocalisation/ budget and taste in Paris. ', '2008-07-04'),
(10, 'PORTFOLIO PERSO', 'a personal project I\'m building for my own, showing some CSS animation and JavaScript skills. ', '2008-07-04'),
(11, 'PSY', 'un site vitrine pour un cabinet de psychologue à la Défense Paris ', '2008-07-04'),
(12, 'Ada Hotel ', 'Un de mes premiers sites fictif, l\'objectif étant de faire un site pour un hotel.', '2008-07-04'),
(14, 'THAYTHAY BLOG', 'Mon premier site en wordpress pour donner ma perception sur les differences culturelles comparé à la France et donner des tips sur les itinéraires que j\'ai fait. ', '2008-07-04');

-- --------------------------------------------------------

--
-- Table structure for table `projet_tech`
--

CREATE TABLE `projet_tech` (
  `projet_id` int(11) NOT NULL,
  `techno_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projet_tech`
--

INSERT INTO `projet_tech` (`projet_id`, `techno_id`) VALUES
(7, 1),
(8, 3),
(9, 2),
(10, 1),
(11, 1),
(12, 1),
(14, 4);

-- --------------------------------------------------------

--
-- Table structure for table `techno`
--

CREATE TABLE `techno` (
  `id_techno` int(11) NOT NULL,
  `nom_techno` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `techno`
--

INSERT INTO `techno` (`id_techno`, `nom_techno`) VALUES
(1, 'HTML/CSS'),
(2, 'JavaScript'),
(3, 'PHP'),
(4, 'Wordpress'),
(5, 'Node.JS');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `identifiant` int(11) NOT NULL,
  `motdepasse` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id_projet`);

--
-- Indexes for table `techno`
--
ALTER TABLE `techno`
  ADD PRIMARY KEY (`id_techno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projet`
--
ALTER TABLE `projet`
  MODIFY `id_projet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `techno`
--
ALTER TABLE `techno`
  MODIFY `id_techno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
