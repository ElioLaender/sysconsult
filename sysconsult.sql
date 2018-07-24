-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Jul-2018 às 04:07
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sysconsult`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nome` varchar(80) NOT NULL,
  `admin_senha` varchar(80) NOT NULL,
  `admin_email` varchar(80) NOT NULL,
  `admin_sobrenome` varchar(80) NOT NULL,
  `admin_tel` varchar(30) NOT NULL,
  `admin_data_nasc` date NOT NULL,
  `admin_sexo` varchar(10) NOT NULL,
  `admin_estato_civil` varchar(20) NOT NULL,
  `admin_complemento` varchar(30) NOT NULL,
  `admin_bairro` varchar(50) NOT NULL,
  `admin_cidade` varchar(50) NOT NULL,
  `admin_estado` varchar(15) NOT NULL,
  `admin_pais` varchar(30) NOT NULL,
  `admin_endereco` varchar(80) NOT NULL,
  `admin_ft_profile` varchar(150) NOT NULL,
  `admin_crp` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nome`, `admin_senha`, `admin_email`, `admin_sobrenome`, `admin_tel`, `admin_data_nasc`, `admin_sexo`, `admin_estato_civil`, `admin_complemento`, `admin_bairro`, `admin_cidade`, `admin_estado`, `admin_pais`, `admin_endereco`, `admin_ft_profile`, `admin_crp`) VALUES
(1, 'Élio Laender', 'e10adc3949ba59abbe56e057f20f883e', 'laenderquadros@gmail.com', 'Laender', '37991191491', '1990-06-14', 'Masculino', 'Estado Civil', 'Casa', 'Serra Verde', 'Divinópolis', 'MG', 'Brasil', 'Rua das graças ', 'Uploads/img-capa-dash/1f5638cd6901642a4f9506e57187785e', '08/85691');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alertas`
--

CREATE TABLE `alertas` (
  `alertas_id` int(11) NOT NULL,
  `alertas_titulo` varchar(80) NOT NULL,
  `alertas_descricao` varchar(150) NOT NULL,
  `alertas_status` tinyint(1) NOT NULL,
  `alertas_data_reg` datetime NOT NULL,
  `alertas_ref` int(11) NOT NULL,
  `alertas_url_destino` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigo`
--

CREATE TABLE `artigo` (
  `artigo_id` int(11) NOT NULL,
  `artigo_titulo` varchar(80) NOT NULL,
  `artigo_texto` varchar(900) NOT NULL,
  `artigo_data_insert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `artigo_ft_capa` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `artigo`
--

INSERT INTO `artigo` (`artigo_id`, `artigo_titulo`, `artigo_texto`, `artigo_data_insert`, `artigo_ft_capa`) VALUES
(1, 'Meu primeiro post', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.', '2018-07-03 00:56:52', 'Uploads/img-capa-artigos/14e248491e0795cf65fdca59438866af'),
(2, 'artigo teste', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.', '2018-07-03 00:58:44', 'Uploads/img-capa-artigos/f9c4c135a5711fb4f30179b973d0f6c7');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `contato_id` int(11) NOT NULL,
  `contato_nome` varchar(80) NOT NULL,
  `contato_email` varchar(80) NOT NULL,
  `contato_assunto` varchar(80) NOT NULL,
  `contato_mensagem` varchar(900) NOT NULL,
  `contato_status` varchar(15) NOT NULL,
  `contato_data_recebimento` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`contato_id`, `contato_nome`, `contato_email`, `contato_assunto`, `contato_mensagem`, `contato_status`, `contato_data_recebimento`) VALUES
(3, 'Lívia Ferreira', 'liviapsique@gmail.com', 'Como faço para agendar?', 'Olá Élio, como faço para agendar minha consulta??', 'Lida', '2018-07-02 23:57:55'),
(2, 'Laender', 'laenderquadros@gmail.com', 'laender mensagem ', 'é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.', 'Lida', '2018-07-02 16:38:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `data_atendimento`
--

CREATE TABLE `data_atendimento` (
  `da_id` int(11) NOT NULL,
  `da_adm_ref` int(11) NOT NULL,
  `da_paci_ref` int(11) NOT NULL,
  `da_date` datetime NOT NULL,
  `da_hour` time NOT NULL,
  `da_obs` varchar(150) NOT NULL,
  `da_envio_mutuo` tinyint(1) NOT NULL,
  `data_reg` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notifications`
--

CREATE TABLE `notifications` (
  `notifications_id` int(11) NOT NULL,
  `notifications_messager` int(11) NOT NULL,
  `notifications_alerts` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `notifications`
--

INSERT INTO `notifications` (`notifications_id`, `notifications_messager`, `notifications_alerts`) VALUES
(2, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `paciente_id` int(11) NOT NULL,
  `paciente_nome` varchar(80) NOT NULL,
  `paciente_idade` int(11) NOT NULL,
  `paciente_tel` varchar(30) NOT NULL,
  `paciente_email` varchar(80) NOT NULL,
  `paciente_sexo` varchar(10) NOT NULL,
  `paciente_pg_status` tinyint(1) NOT NULL,
  `paciente_data_insert` datetime NOT NULL,
  `paciente_data_nasc` date NOT NULL,
  `paciente_escolaridade` varchar(80) NOT NULL,
  `paciente_estado_civil` varchar(80) NOT NULL,
  `paciente_profi` varchar(80) NOT NULL,
  `paciente_naturalidade` varchar(80) NOT NULL,
  `paciente_endereco` varchar(150) NOT NULL,
  `paciente_bairro` varchar(30) NOT NULL,
  `paciente_cidade` varchar(30) NOT NULL,
  `paciente_estado` varchar(10) NOT NULL,
  `paciente_pais` varchar(30) NOT NULL,
  `paciente_rg` varchar(30) NOT NULL,
  `paciente_cpf` varchar(30) NOT NULL,
  `paciente_cida` varchar(30) NOT NULL,
  `paciente_ddd` varchar(10) NOT NULL,
  `paciente_obs` varchar(150) NOT NULL,
  `paciente_status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--

CREATE TABLE `pagamentos` (
  `Pag_id` int(11) NOT NULL,
  `Pag_date` datetime NOT NULL,
  `Pag_code_transation` varchar(80) NOT NULL,
  `Pag_reference` varchar(10) NOT NULL,
  `Pag_transaction_type` varchar(10) NOT NULL,
  `Pag_status` tinyint(1) NOT NULL,
  `Pag_cancelation_source` varchar(10) NOT NULL,
  `Pag_ultimo_evento` varchar(30) NOT NULL,
  `Pag_tipo_pagamento` varchar(30) NOT NULL,
  `Pag_meio_cod` varchar(80) NOT NULL,
  `Pag_valor_bruto` decimal(18,0) NOT NULL,
  `Pag_valor_desconto` decimal(18,0) NOT NULL,
  `Pag_valor_taxas` decimal(18,0) NOT NULL,
  `Pag_data_credito` datetime NOT NULL,
  `Pag_valor_extra` decimal(18,0) NOT NULL,
  `Pag_parcelas_cartao` int(11) NOT NULL,
  `Pag_qtd_itens` int(11) NOT NULL,
  `Pag_item_identificacao` varchar(80) NOT NULL,
  `Pag_item_descricao` varchar(80) NOT NULL,
  `Pag_valor_unitario` decimal(18,0) NOT NULL,
  `Pag_qtd_item_unitario` int(11) NOT NULL,
  `Pag_email_comprador` varchar(80) NOT NULL,
  `Pag_nome_comprador` varchar(80) NOT NULL,
  `Pag_ddd_tel` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `servico_id` int(11) NOT NULL,
  `servico_nome` varchar(80) NOT NULL,
  `servico_preco` float NOT NULL,
  `servico_list1` varchar(80) NOT NULL,
  `servico_list2` varchar(80) NOT NULL,
  `servico_list3` varchar(80) NOT NULL,
  `servico_list4` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`servico_id`, `servico_nome`, `servico_preco`, `servico_list1`, `servico_list2`, `servico_list3`, `servico_list4`) VALUES
(1, 'Terapia de Casais', 500, 'Duração de 50 minutos', 'teste', 'teste', 'teste'),
(2, 'Avaliação Psicológica', 380, 'Aplicação ', 'Correção de testes', 'Duração de 50 Min', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `alertas`
--
ALTER TABLE `alertas`
  ADD PRIMARY KEY (`alertas_id`);

--
-- Indexes for table `artigo`
--
ALTER TABLE `artigo`
  ADD PRIMARY KEY (`artigo_id`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`contato_id`);

--
-- Indexes for table `data_atendimento`
--
ALTER TABLE `data_atendimento`
  ADD PRIMARY KEY (`da_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notifications_id`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`paciente_id`);

--
-- Indexes for table `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD PRIMARY KEY (`Pag_id`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`servico_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `alertas`
--
ALTER TABLE `alertas`
  MODIFY `alertas_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `artigo`
--
ALTER TABLE `artigo`
  MODIFY `artigo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `contato_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `data_atendimento`
--
ALTER TABLE `data_atendimento`
  MODIFY `da_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notifications_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `paciente_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `Pag_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `servico_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
