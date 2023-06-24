-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jun-2023 às 20:07
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `saudesempre`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultas`
--

CREATE TABLE `consultas` (
  `id` int(11) NOT NULL,
  `MotivoConsulta` varchar(150) NOT NULL,
  `DataHora` datetime NOT NULL,
  `FormaPagamento` varchar(45) NOT NULL,
  `Status` varchar(45) NOT NULL,
  `FichaPaciente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `consultas`
--

INSERT INTO `consultas` (`id`, `MotivoConsulta`, `DataHora`, `FormaPagamento`, `Status`, `FichaPaciente_id`) VALUES
(1, 'Dente quebrado', '2023-06-20 09:00:00', 'Particular', 'aguardando', 2),
(2, 'Dor na perna', '2023-06-21 14:15:00', 'Particular', 'confirmado', 3),
(3, 'Ficou doidao', '2023-06-22 13:30:00', 'Plano', 'aguardando', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fichaatendimento`
--

CREATE TABLE `fichaatendimento` (
  `id` int(11) NOT NULL,
  `MotivoConsulta` varchar(150) NOT NULL,
  `Diagnostico` varchar(150) NOT NULL,
  `ReceitaRemedios` varchar(250) DEFAULT NULL,
  `Retorno` varchar(100) DEFAULT NULL,
  `Descricao` varchar(200) NOT NULL,
  `FichaPaciente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `fichaatendimento`
--

INSERT INTO `fichaatendimento` (`id`, `MotivoConsulta`, `Diagnostico`, `ReceitaRemedios`, `Retorno`, `Descricao`, `FichaPaciente_id`) VALUES
(4, 'Eu estou com uma pequena dor de dente', '4 sisos removidos', 'dipirona 7 dias de 12 em 12 horas', NULL, '4 sisos removidos', 2),
(6, 'Remover pontos de retirada dos sisos', 'pontos removidos', '', NULL, '', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fichapaciente`
--

CREATE TABLE `fichapaciente` (
  `id` int(11) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `NomePaciente` varchar(100) NOT NULL,
  `DataNascimento` date NOT NULL,
  `CEP` varchar(8) NOT NULL,
  `Endereco` varchar(100) NOT NULL,
  `Numero` varchar(10) NOT NULL,
  `UF` varchar(2) NOT NULL,
  `Bairro` varchar(45) NOT NULL,
  `Complemento` varchar(100) DEFAULT NULL,
  `Municipio` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Contato` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `fichapaciente`
--

INSERT INTO `fichapaciente` (`id`, `CPF`, `NomePaciente`, `DataNascimento`, `CEP`, `Endereco`, `Numero`, `UF`, `Bairro`, `Complemento`, `Municipio`, `Email`, `Contato`) VALUES
(2, '12345678900', 'Thierry Teste', '2000-02-08', '21555010', 'Rua Tacaratu', '266', 'RJ', 'Honório', 'Casa 5', 'Rio de Janeiro', 'thierry@gmail.com', '21976844023'),
(3, '22233366655', 'Paciente da Silva', '1956-02-02', '11111222', 'Rua 2', '0000', 'RJ', 'Bairro', 'Casa 9', 'Rio de Janeiro', 'paciente@gmail.com', '21900000000'),
(4, '11111011010', 'Teste', '0001-01-01', '22222333', 'Rua Ta', '2666', 'RJ', 'Bairro', 'Casa 5', 'Rio de Janeiro', 'email@teste.com', '12345678910'),
(6, '11111011010', 'Teste 2', '0000-00-00', '', '', '', '', '', '', '', 'teste@teste.com', '21976844023'),
(7, '11111011010', 'teste 3', '0000-00-00', '21555-01', 'Rua Tacaratu', '266', '', '', 'Casa 5', '', 'teste@teste.com', '21976844023'),
(8, '32165498766', 'Cara doido', '1988-04-06', '33665566', 'Rua Seila', '36', 'RJ', 'Bairro ai', 'Casa 5', 'Rio de Janeiro', 'caradoido433@gmail.com', '21986868474'),
(9, '22233366699', 'teste 44', '0030-03-03', '', '', '', '', '', '', '', 'teste@44.com', '21986858474'),
(10, '33654125487', 'THIERRY AMARAL DA COSTA', '0000-00-00', '21555-01', '', '', '', '', '', 'Rio de Janeiro', 'thierry@gmail.com', '33366699987');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`,`FichaPaciente_id`),
  ADD KEY `fk_Consultas_FichaPaciente1_idx` (`FichaPaciente_id`);

--
-- Índices para tabela `fichaatendimento`
--
ALTER TABLE `fichaatendimento`
  ADD PRIMARY KEY (`id`,`FichaPaciente_id`),
  ADD KEY `fk_FichaAtendimento_FichaPaciente_idx` (`FichaPaciente_id`);

--
-- Índices para tabela `fichapaciente`
--
ALTER TABLE `fichapaciente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `fichaatendimento`
--
ALTER TABLE `fichaatendimento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `fichapaciente`
--
ALTER TABLE `fichapaciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `fk_Consultas_FichaPaciente1` FOREIGN KEY (`FichaPaciente_id`) REFERENCES `fichapaciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `fichaatendimento`
--
ALTER TABLE `fichaatendimento`
  ADD CONSTRAINT `fk_FichaAtendimento_FichaPaciente` FOREIGN KEY (`FichaPaciente_id`) REFERENCES `fichapaciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
