-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Maio-2020 às 21:11
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdtroca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbavaliacaousuario`
--

CREATE TABLE `tbavaliacaousuario` (
  `idAvaliacaoUsuario` int(11) NOT NULL,
  `qtdEstrelas` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idUsuario2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategoriaproduto`
--

CREATE TABLE `tbcategoriaproduto` (
  `idCategoriaProduto` int(11) NOT NULL,
  `categoriaProduto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbchatusuario`
--

CREATE TABLE `tbchatusuario` (
  `idChatUsuario` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idUsuario2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbenderecousuario`
--

CREATE TABLE `tbenderecousuario` (
  `idEnderecoUsuario` int(11) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbescolhaproduto`
--

CREATE TABLE `tbescolhaproduto` (
  `idEscolhaProduto` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `produtoEscolhido` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbestadoproduto`
--

CREATE TABLE `tbestadoproduto` (
  `idEstadoProduto` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `idProduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmensagem`
--

CREATE TABLE `tbmensagem` (
  `idMensagem` int(11) NOT NULL,
  `MensagensUsuario` int(100) NOT NULL,
  `idChatUsuario` int(11) NOT NULL,
  `horaMensagem` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `idProduto` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idCategoriaProduto` int(11) NOT NULL,
  `idSubCategoria` int(11) NOT NULL,
  `nomeProduto` varchar(50) NOT NULL,
  `descricaoProduto` int(100) NOT NULL,
  `imagemProduto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbsubcategoria`
--

CREATE TABLE `tbsubcategoria` (
  `idSubCategoria` int(11) NOT NULL,
  `subCategoria` varchar(20) NOT NULL,
  `idCategoriaProduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtrocaproduto`
--

CREATE TABLE `tbtrocaproduto` (
  `idTrocaProduto` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `idUsuario` int(11) NOT NULL,
  `numeroUsuario` varchar(13) NOT NULL,
  `nomeUsuario` varchar(100) NOT NULL,
  `sobrenomeUsuario` varchar(100) NOT NULL,
  `cpfUsuario` varchar(14) NOT NULL,
  `rgUsuario` varchar(12) NOT NULL,
  `emailUsuario` varchar(100) NOT NULL,
  `senhaUsuario` int(50) NOT NULL,
  `imagemUsuario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `numeroUsuario`, `nomeUsuario`, `sobrenomeUsuario`, `cpfUsuario`, `rgUsuario`, `emailUsuario`, `senhaUsuario`, `imagemUsuario`) VALUES
(1, '', 'Rafael', 'Oliveira', '12345678911', '123456789', 'oliveirasrafael.rs@gmail.com', 123, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbavaliacaousuario`
--
ALTER TABLE `tbavaliacaousuario`
  ADD PRIMARY KEY (`idAvaliacaoUsuario`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idUsuario2` (`idUsuario2`);

--
-- Índices para tabela `tbcategoriaproduto`
--
ALTER TABLE `tbcategoriaproduto`
  ADD PRIMARY KEY (`idCategoriaProduto`);

--
-- Índices para tabela `tbchatusuario`
--
ALTER TABLE `tbchatusuario`
  ADD PRIMARY KEY (`idChatUsuario`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idUsuario2` (`idUsuario2`);

--
-- Índices para tabela `tbenderecousuario`
--
ALTER TABLE `tbenderecousuario`
  ADD PRIMARY KEY (`idEnderecoUsuario`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbescolhaproduto`
--
ALTER TABLE `tbescolhaproduto`
  ADD PRIMARY KEY (`idEscolhaProduto`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbestadoproduto`
--
ALTER TABLE `tbestadoproduto`
  ADD PRIMARY KEY (`idEstadoProduto`),
  ADD KEY `idProduto` (`idProduto`);

--
-- Índices para tabela `tbmensagem`
--
ALTER TABLE `tbmensagem`
  ADD PRIMARY KEY (`idMensagem`),
  ADD KEY `idChatUsuario` (`idChatUsuario`);

--
-- Índices para tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idCategoriaProduto` (`idCategoriaProduto`),
  ADD KEY `idSubCategoria` (`idSubCategoria`);

--
-- Índices para tabela `tbsubcategoria`
--
ALTER TABLE `tbsubcategoria`
  ADD PRIMARY KEY (`idSubCategoria`),
  ADD KEY `idCategoriaProduto` (`idCategoriaProduto`);

--
-- Índices para tabela `tbtrocaproduto`
--
ALTER TABLE `tbtrocaproduto`
  ADD PRIMARY KEY (`idTrocaProduto`),
  ADD KEY `idProduto` (`idProduto`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbavaliacaousuario`
--
ALTER TABLE `tbavaliacaousuario`
  MODIFY `idAvaliacaoUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbcategoriaproduto`
--
ALTER TABLE `tbcategoriaproduto`
  MODIFY `idCategoriaProduto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbchatusuario`
--
ALTER TABLE `tbchatusuario`
  MODIFY `idChatUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbenderecousuario`
--
ALTER TABLE `tbenderecousuario`
  MODIFY `idEnderecoUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbescolhaproduto`
--
ALTER TABLE `tbescolhaproduto`
  MODIFY `idEscolhaProduto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbestadoproduto`
--
ALTER TABLE `tbestadoproduto`
  MODIFY `idEstadoProduto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbmensagem`
--
ALTER TABLE `tbmensagem`
  MODIFY `idMensagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbsubcategoria`
--
ALTER TABLE `tbsubcategoria`
  MODIFY `idSubCategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbtrocaproduto`
--
ALTER TABLE `tbtrocaproduto`
  MODIFY `idTrocaProduto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
