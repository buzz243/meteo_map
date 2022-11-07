-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
<<<<<<< HEAD
-- Generation Time: Oct 24, 2022 at 02:01 PM
=======
-- Generation Time: Nov 02, 2022 at 04:50 PM
>>>>>>> 9df02ee28b0c7adce82f92390e3e780dd9ddf33b
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logino`
--

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(8) NOT NULL,
<<<<<<< HEAD
  `nom` varchar(100) DEFAULT NULL,
  `postnom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `motpass` varchar(100) DEFAULT NULL
=======
  `email` varchar(120) DEFAULT NULL,
  `motpass` varchar(140) DEFAULT NULL,
  `cleactive` varchar(255) DEFAULT NULL
>>>>>>> 9df02ee28b0c7adce82f92390e3e780dd9ddf33b
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

<<<<<<< HEAD
INSERT INTO `utilisateur` (`id`, `nom`, `postnom`, `prenom`, `motpass`) VALUES
(1, 'marco', 'ben', 'franko', '123889+9+'),
(2, 'araba', 'menioni', 'franiala', '12238889+');
=======
INSERT INTO `utilisateur` (`id`, `email`, `motpass`, `cleactive`) VALUES
(13781459, 'LvP]\0_\nLV\n[', 'LvP]\0_\nLV\n[', 'Ryvwp!i¤Å_ppBMl?L'),
(48590991, ']WEQY&X_\\S[', ']WEQY&X_\\S[', 'Ryvwp!i¤Å_ppBMl?L'),
(86643053, '[SEQS&X_\\YZ', '[SEQS&X_\\YZ', 'Ryvwp!i¤Å_ppBMl?L'),
(232332148, '	R_wWWY]', '^QPWQ', 'Ryvwp!i¤Å_ppBMl?L'),
(304162358, 'W_wWWY]', 'W_wWWY]', 'Ryvwp!i¤Å_ppBMl?L'),
(364497544, '\nVFwWWY]', 'RVPWP', 'Ryvwp!i¤Å_ppBMl?L'),
(543208576, 'RWSY!Q\\	S_', 'RWSY!Q\\	S_', 'Ryvwp!i¤Å_ppBMl?L'),
(598389254, ']SX^!Q\\	S_', ']SX^!Q\\	S_', 'Ryvwp!i¤Å_ppBMl?L'),
(695251345, 'M^RB!Q\\	S_', 'RVP', 'Ryvwp!i¤Å_ppBMl?L'),
(726614937, 'WY^@!^Y]', 'WY^@!^Y]', 'Ryvwp!i¤Å_ppBMl?L'),
(812880872, '[YCp[YKU_]', '[YCp[YKU_]', 'Ryvwp!i¤Å_ppBMl?L'),
(973388290, '	y^ZQZHZ', 'RVP', 'Ryvwp!i¤Å_ppBMl?L'),
(976102190, '\r\nWXY^X[XpX	Z[', '\r\nWXY^X[X^', 'Ryvwp!i¤Å_ppBMl?L'),
(985365380, 'KWUQ!Q\\	S_', 'KWUQ!Q\\	S_', 'Ryvwp!i¤Å_ppBMl?L');
>>>>>>> 9df02ee28b0c7adce82f92390e3e780dd9ddf33b

--
-- Indexes for dumped tables
--

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
<<<<<<< HEAD
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
=======
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=985365381;
>>>>>>> 9df02ee28b0c7adce82f92390e3e780dd9ddf33b
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
