-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Maio-2017 às 06:46
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
-- Estrutura da tabela `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(14) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `hood` varchar(100) NOT NULL,
  `zip_code` int(8) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone` int(13) NOT NULL,
  `mobile` int(13) NOT NULL,
  `ie` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `customers`
--

INSERT INTO `customers` (`id`, `name`, `cpf_cnpj`, `birthdate`, `address`, `hood`, `zip_code`, `city`, `state`, `phone`, `mobile`, `ie`, `created`, `modified`) VALUES
(3, 'degsg', '', '0000-00-00', '', '', 0, '', '', 0, 0, 0, '2017-05-15 18:46:18', '2017-05-15 18:46:18'),
(4, 'mopau', '34242', '0000-00-00', 'Rua D c/ esquina av. 28 de agosto', '', 60867110, 'Fortaleza', 'CE', 0, 0, 0, '2017-05-15 19:03:09', '2017-05-15 19:03:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mesas`
--

CREATE TABLE `mesas` (
  `id_m` int(11) NOT NULL,
  `desc_m` varchar(100) NOT NULL,
  `qtd_m` int(11) NOT NULL,
  `disp` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mesas`
--

INSERT INTO `mesas` (`id_m`, `desc_m`, `qtd_m`, `disp`, `created`, `modified`) VALUES
(4, 'disgno', 9, 'ATIVA', '2017-05-14 12:00:03', '2017-05-17 00:50:52'),
(7, 'la na babilonia', 10, 'ATIVA', '2017-05-17 00:50:36', '2017-05-17 00:50:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `msgs`
--

CREATE TABLE `msgs` (
  `id_ms` int(11) NOT NULL,
  `nome_ms` varchar(100) NOT NULL,
  `email_ms` varchar(100) NOT NULL,
  `assun_ms` varchar(150) NOT NULL,
  `msg_ms` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `msgs`
--

INSERT INTO `msgs` (`id_ms`, `nome_ms`, `email_ms`, `assun_ms`, `msg_ms`, `created`, `modified`) VALUES
(3, 'Homi ', 'va se fu', 'deixidisso', 'vrefekeowdkwe', '2017-05-14 03:08:41', '2017-05-14 03:08:41'),
(6, 'refer', 'efewfw@gmail.com', 'refeferfe', 'wfefef', '2017-05-14 03:25:06', '2017-05-14 03:25:06'),
(7, 'Ryan Lima', 'ryanlima08021997@gmail.com', 'meu fi', 'vai dar certo', '2017-05-14 03:38:50', '2017-05-14 03:38:50');

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
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`id_m`);

--
-- Indexes for table `msgs`
--
ALTER TABLE `msgs`
  ADD PRIMARY KEY (`id_ms`);

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_r`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mesas`
--
ALTER TABLE `mesas`
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `msgs`
--
ALTER TABLE `msgs`
  MODIFY `id_ms` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_r` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
