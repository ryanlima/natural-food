-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Maio-2017 às 06:44
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `id_r` int(11) NOT NULL,
  `nome_r` varchar(100) NOT NULL,
  `email_r` varchar(100) NOT NULL,
  `tel_r` bigint(20) NOT NULL,
  `mesa_id_r` int(11) NOT NULL,
  `data_r` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`id_r`, `nome_r`, `email_r`, `tel_r`, `mesa_id_r`, `data_r`, `created`, `modified`) VALUES
(1, 'Ryan Lima', 'ryanlima08021997@gmail.com', 85986385775, 4, '2017-05-18', '2017-05-17 01:19:42', '2017-05-17 01:19:42'),
(2, 'Ryan Lima', 'ryanlima08021997@gmail.com', 85986385775, 4, '2017-05-19', '2017-05-17 01:21:11', '2017-05-17 01:21:11'),
(3, 'Ryan Lima', 'ryanlima08021997@gmail.com', 85986385775, 7, '2017-05-20', '2017-05-17 01:22:31', '2017-05-17 01:22:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_r`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_r` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
