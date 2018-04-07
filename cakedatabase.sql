-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Abr-2018 às 09:11
-- Versão do servidor: 10.1.31-MariaDB
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
-- Database: `cakedatabase`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

CREATE TABLE `carros` (
  `id` int(11) NOT NULL,
  `nome_carro` varchar(220) NOT NULL,
  `categorias_carro_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`id`, `nome_carro`, `categorias_carro_id`, `created`, `modified`) VALUES
(1, 'Renault Duster', 1, '2018-04-06 23:28:07', '2018-04-06 23:28:07'),
(2, 'Monza', 2, '2018-04-07 05:06:53', '2018-04-07 05:06:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias_carros`
--

CREATE TABLE `categorias_carros` (
  `id` int(11) NOT NULL,
  `nome_categoria` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias_carros`
--

INSERT INTO `categorias_carros` (`id`, `nome_categoria`, `created`, `modified`) VALUES
(1, 'SUV', '2018-04-06 23:27:48', '2018-04-06 23:27:48'),
(2, 'Sedan', '2018-04-07 05:06:08', '2018-04-07 05:06:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome_cliente` varchar(220) NOT NULL,
  `carros_id` int(11) NOT NULL,
  `CPF_cliente` varchar(14) NOT NULL,
  `telefone_cliente` varchar(16) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome_cliente`, `carros_id`, `CPF_cliente`, `telefone_cliente`, `created`, `modified`) VALUES
(3, 'Matheus Santo', 1, '213.123.213-21', '(32) 1312-1321', '2018-04-07 02:15:53', '2018-04-07 02:15:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(24) NOT NULL,
  `password` varchar(244) NOT NULL,
  `role` varchar(22) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `role`, `created`, `modified`) VALUES
(1, 'admin', 'admin', '', '2018-04-07 06:04:55', '2018-04-07 06:50:58'),
(2, 'admin2', 'root', '', '2018-04-07 06:05:10', '2018-04-07 06:05:10'),
(3, 'matheus', 'teste', '', '2018-04-07 06:40:45', '2018-04-07 06:40:45'),
(4, 'admin', 'admin', '', '2018-04-07 06:54:24', '2018-04-07 06:54:24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `clientes_id` int(11) NOT NULL,
  `valor_total` float NOT NULL,
  `valor_pago` float NOT NULL,
  `data_vencimento` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `clientes_id`, `valor_total`, `valor_pago`, `data_vencimento`, `created`, `modified`) VALUES
(1, 2, 21321, 2131230, '2018-03-18', '2018-04-07 01:18:26', '2018-04-07 01:18:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorias_carros`
--
ALTER TABLE `categorias_carros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carros`
--
ALTER TABLE `carros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categorias_carros`
--
ALTER TABLE `categorias_carros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
