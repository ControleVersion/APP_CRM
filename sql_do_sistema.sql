-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 04-Set-2016 às 17:57
-- Versão do servidor: 5.5.48-37.8
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--
-- Estrutura da tabela `app_enderecos`
--

CREATE TABLE IF NOT EXISTS `app_enderecos` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(250) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `referencia` text NOT NULL,
  `cep` varchar(20) NOT NULL,
  `bairro` varchar(150) NOT NULL,
  `status` varchar(3) NOT NULL DEFAULT 'Sim'
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `app_enderecos`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `app_users`
--

CREATE TABLE IF NOT EXISTS `app_users` (
  `ID_USER` int(22) NOT NULL,
  `NOME` varchar(200) NOT NULL,
  `SENHA` varchar(150) NOT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_enderecos`
--
ALTER TABLE `app_enderecos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_users`
--
ALTER TABLE `app_users`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_enderecos`
--
ALTER TABLE `app_enderecos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `app_users`
--
ALTER TABLE `app_users`
  MODIFY `ID_USER` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=0;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
