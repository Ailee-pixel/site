-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Set-2022 às 16:44
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbpipizzaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_cliente`
--

CREATE TABLE `tabela_cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(50) DEFAULT NULL,
  `email_cliente` varchar(30) DEFAULT NULL,
  `telefone_cliente` varchar(11) DEFAULT NULL,
  `data_reserva` varchar(30) DEFAULT NULL,
  `quantidade_pessoas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tabela_cliente`
--

INSERT INTO `tabela_cliente` (`id_cliente`, `nome_cliente`, `email_cliente`, `telefone_cliente`, `data_reserva`, `quantidade_pessoas`) VALUES
(1, 'Alan aparecido Rodrigues Alves', NULL, NULL, NULL, NULL),
(2, 'Alan aparecido Rodrigues Alves', 'alanrodriguespr@live.com', NULL, NULL, NULL),
(3, 'Alan aparecido Rodrigues Alves', 'alanrodriguespr@live.com', '41997250247', NULL, NULL),
(4, 'Alan aparecido Rodrigues Alves', 'alanrodriguespr@live.com', '41997250247', NULL, 2),
(5, 'Alan aparecido Rodrigues Alves', 'alanrodriguespr@live.com', '41997250247', NULL, 2),
(6, 'Alan aparecido Rodrigues Alves', 'alanrodriguespr@live.com', '41997250247', NULL, 2),
(7, 'Alan aparecido Rodrigues Alves', 'alanrodriguespr@live.com', '41997250247', NULL, 2),
(8, 'Alan aparecido Rodrigues Alves', 'alanrodriguespr@live.com', '41997250247', '2022-11-25T08:40', 2),
(9, 'Alan aparecido Rodrigues Alves', 'alanrodriguespr@live.com', '41997250247', '17/09/2022 09:42', 2),
(10, 'Alan aparecido Rodrigues Alves', 'alanrodriguespr@live.com', '41997250247', '24/09/2022 09:44', 2),
(11, 'Alan aparecido Rodrigues Alves', 'alanrodriguespr@live.com', '41997250247', '29/09/2022 09:45', 3),
(12, 'Alan aparecido Rodrigues Alves', 'alanrodriguespr@live.com', '41997250247', '10/09/2022 09:46', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_produto`
--

CREATE TABLE `tabela_produto` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(30) DEFAULT NULL,
  `ingredientes` varchar(200) DEFAULT NULL,
  `precaucoes` varchar(100) DEFAULT NULL,
  `valor_produto` float DEFAULT NULL,
  `volume_produto` varchar(10) DEFAULT NULL,
  `imagem_produto` varchar(100) DEFAULT NULL,
  `tipo_produto` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tabela_produto`
--

INSERT INTO `tabela_produto` (`id_produto`, `nome_produto`, `ingredientes`, `precaucoes`, `valor_produto`, `volume_produto`, `imagem_produto`, `tipo_produto`) VALUES
(1, 'Pizza de Mussarela', 'Massa caseira, molho especial, catupiry, queijo mussarela, orégano e tomate em rodelas.', 'Contém glútem e ingredientes derivados de leite.', 29.9, 'G', 'pizza_mussarela.jpg', 'Pizza'),
(2, 'Pizza de Calabresa', 'Massa caseira, molho especial, catupiry, queijo mussarela e calabresa em fatias.', 'Contém glútem e ingredientes derivados de leite.', 39.9, 'G', 'pizza_calabresa.jpg', 'Pizza'),
(3, 'Pizza de Calabresa Acebolada', 'Massa caseira, molho especial, catupiry, queijo mussarela, calabresa em fatias e cebolas finas.', 'Contém glútem e ingredientes derivados de leite.', 39.9, 'G', 'pizza_calabresa_2.jpg', 'Pizza'),
(4, 'Pizza de Atum', 'Massa caseira, molho especial, catupiry e atum desfiado.', 'Contém glútem, frutos do mar e ingredientes derivados de leite.', 39.9, 'G', 'pizza_de_atum.jpg', 'Pizza'),
(5, 'Pizza Portuguesa', 'Massa caseira, molho especial, pimentão verde, ovos em rodelas, tomate em rodelas e cebolas finas.', 'Contém glútem, pimentão e ingredientes derivados de leite.', 29.9, 'G', 'pizza_portuguesa.jpg', 'Pizza'),
(6, 'Pizza Crocante', 'Massa caseira, molho especial, catupiry, batata palha e bacon.', 'Contém glútem e ingredientes derivados de leite.', 39.9, 'G', NULL, 'Pizza'),
(7, 'Pizza Tradicional', 'Massa caseira, molho especial, catupiry, queijo mussarela, azeitonas em rodelas e tomate cereja em rodelas.', 'Contém glútem e ingredientes derivados de leite.', 29.9, 'G', NULL, 'Pizza'),
(8, 'Pizza de Rúcula', 'Massa caseira, molho especial, rúcula, azeitona roxa e tomate seco.', 'Contém glútem e ingredientes derivados de leite.', 29.9, 'G', NULL, 'Pizza'),
(9, 'Pizza de Strogonoff de Frango', 'Massa caseira, molho especial, catupiry e strogonoff de frango c/ batata palha.', 'Contém glútem e ingredientes derivados de leite.', 39.9, 'G', NULL, 'Pizza'),
(10, 'Pizza de 4 Queijos', 'Massa caseira, molho especial, queijo prato, mussarela, parmesão e gorgonzola.', 'Contém glútem e ingredientes derivados de leite.', 39.9, 'G', NULL, 'Pizza'),
(11, 'Pizza de Brigadeiro', 'Massa caseira, brigadeiro de panela e confeitos de chocolate.', 'Contém glútem e ingredientes derivados de leite.', 29.9, 'G', NULL, 'Pizza'),
(12, 'Pizza de Beijinho', 'Massa caseira, beijinho de panela e coco ralado.', 'Contém glútem e ingredientes derivados de leite.', 29.9, 'G', NULL, 'Pizza'),
(13, 'Pizza Dois Amores', 'Massa caseira, chocolate branco, chocolate e confeitos de chocolate.', 'Contém glútem e ingredientes derivados de leite.', 39.9, 'G', NULL, 'Pizza'),
(14, 'Pizza Sensação', 'Massa caseira, calda de chocolate e morango em rodelas.', 'Contém glútem e ingredientes derivados de leite.', 39.9, 'G', NULL, 'Pizza'),
(15, 'Coca-Cola', NULL, NULL, 10.99, '2L', NULL, 'Bebida'),
(16, 'Coca-Cola Zero', NULL, NULL, 10.99, '2L', NULL, 'Bebida'),
(17, 'Coca-Cola', NULL, NULL, 7.99, '600ml', NULL, 'Bebida'),
(18, 'Coca-Cola Zero', NULL, NULL, 7.99, '600ml', NULL, 'Bebida'),
(19, 'Coca-Cola Lata', NULL, NULL, 5.99, '350ml', NULL, 'Bebida'),
(20, 'Coca-Cola Zero Lata', NULL, NULL, 5.99, '350ml', NULL, 'Bebida'),
(21, 'Cini Sabores', NULL, NULL, 7.99, '2L', NULL, 'Bebida'),
(22, 'Guaraná Antartica', NULL, NULL, 9.99, '2L', NULL, 'Bebida'),
(23, 'Guaraná Antartica Lata', NULL, NULL, 5.99, '350ml', NULL, 'Bebida'),
(24, 'Schweppes Citrus', NULL, NULL, 5.99, '350ml', NULL, 'Bebida'),
(25, 'Fanta Laranja', NULL, NULL, 5.99, '350ml', NULL, 'Bebida'),
(26, 'Fanta Uva', NULL, NULL, 5.99, '350ml', NULL, NULL),
(27, 'Fanta Laranja', NULL, NULL, 9.99, '2L', NULL, NULL),
(28, 'Fanta Uva', NULL, NULL, 9.99, '2L', NULL, NULL),
(29, 'Pepsi', NULL, NULL, 9.99, '2L', NULL, NULL),
(38, 'Pizza de Feijão ', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'Pizza de Carne de Urubu ', 'Urubu Morto e Pizza', 'COMEU FALICEU', 10000, '500', NULL, 'Pizza');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome_usuario` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data_add` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome_usuario`, `senha`, `data_add`) VALUES
(1, 'admin', 'admin123', '2022-09-15 09:45:37');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tabela_cliente`
--
ALTER TABLE `tabela_cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `tabela_produto`
--
ALTER TABLE `tabela_produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`nome_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabela_cliente`
--
ALTER TABLE `tabela_cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tabela_produto`
--
ALTER TABLE `tabela_produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
