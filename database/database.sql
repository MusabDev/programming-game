-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 11:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `programming_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `challenges`
--

CREATE TABLE `challenges` (
  `id` int(11) NOT NULL,
  `programming_language` varchar(50) NOT NULL DEFAULT '',
  `code` longtext NOT NULL DEFAULT '',
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `challenges`
--

INSERT INTO `challenges` (`id`, `programming_language`, `code`, `score`) VALUES
(1, 'PHP', '$name = \"John Doe\";\r\n$age = 18;\r\nif ($age >= 18) {\r\n   echo \"My Name is \" . $name . \". And I\'m \" . $age . \" years old.\";\r\n} else {\r\n   echo \"User must be 18 years old.\";\r\n}', 10),
(2, 'JavaScript', 'function showHint(str) {\r\n    if (str.length == 0) {\r\n        var txtHint = document.getElementById(\"txtHint\");\r\n        txtHint.innerHTML = \"\";\r\n        return;\r\n    } else {\r\n        const xmlhttp = new XMLHttpRequest();\r\n        xmlhttp.onload = function() {\r\n            var txtHint = document.getElementById(\"txtHint\");\r\n            txtHint.innerHTML = this.responseText;\r\n        }\r\n        xmlhttp.open(\"GET\", \"gethint.asp?q=\" + str);\r\n        xmlhttp.send();\r\n    }\r\n}', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `challenges`
--
ALTER TABLE `challenges`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `challenges`
--
ALTER TABLE `challenges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
