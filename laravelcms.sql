-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Maio-2020 às 21:11
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `laravelcms`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `body` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `body`) VALUES
(1, 'Sobre', 'sobre', '<p style=\"margin: 0cm 0cm 9.75pt; text-align: justify; line-height: 21pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><strong><span style=\"font-family: \'Arial\',\'sans-serif\'; color: #4d4d4d;\">Hist&oacute;ria</span></strong></p>\r\n<p style=\"margin: 0cm 0cm 9.75pt; text-align: justify; line-height: 21pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; box-sizing: border-box; color: rgba(0, 0, 0, 0.87); transition: all 250ms cubic-bezier(0.5, 0, 0.5, 1) 0s;\"><span style=\"box-sizing: border-box;\"><span style=\"font-family: \'Arial\',\'sans-serif\';\">O surgimento da c&acirc;mara municipal do Surubim-PE, com seu conselho municipal em 15 novembro de 1928. O motivo dessa coincid&ecirc;ncia incide no fato de que as c&acirc;mara municipais representou uma antiga institui&ccedil;&atilde;o portuguesa e quanto os lusitanos colonizaram o Brasil trouxeram para c&aacute; todas elas.</span></span></p>\r\n<p style=\"margin: 0cm 0cm 9.75pt; text-align: justify; line-height: 21pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><strong><span style=\"font-family: \'Arial\',\'sans-serif\'; color: #4d4d4d;\">Regimento interno</span></strong></span></p>\r\n<p style=\"margin: 0cm 0cm 9.75pt; text-align: justify; line-height: 21pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; box-sizing: border-box; color: rgba(0, 0, 0, 0.87); transition: all 250ms cubic-bezier(0.5, 0, 0.5, 1) 0s;\"><span style=\"box-sizing: border-box;\"><span style=\"font-family: \'Arial\',\'sans-serif\';\">O REGIMENTO INTERNO &eacute; uma norma interna que disciplina as atribui&ccedil;&otilde;es dos &oacute;rg&atilde;os da C&acirc;mara Municipal, contemplando suas fun&ccedil;&otilde;es legislativas, fiscalizadoras e administrativas. Deve ser editado mediante resolu&ccedil;&atilde;o, de acordo com a Lei Org&acirc;nica do munic&iacute;pio, dependendo sempre da delibera&ccedil;&atilde;o do Plen&aacute;rio.</span></span></p>\r\n<p style=\"box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; position: relative; transition: all 250ms cubic-bezier(0.5, 0, 0.5, 1) 0s; font-size: 1.1em; color: rgba(0, 0, 0, 0.87);\"><a style=\"box-sizing: border-box; position: relative; transition: all 250ms cubic-bezier(0.5, 0, 0.5, 1) 0s; background-color: transparent; color: #039be5; text-decoration-line: none; -webkit-tap-highlight-color: transparent; font-size: 15px;\" href=\"https://www.camarasurubim.pe.gov.br/files/regimenento_interno\" target=\"_blank\" rel=\"noopener noreferrer\">Clique aqui para visualizar o regimento interno</a></p>\r\n<p style=\"box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; position: relative; transition: all 250ms cubic-bezier(0.5, 0, 0.5, 1) 0s; font-size: 1.1em; color: rgba(0, 0, 0, 0.87);\"><a style=\"box-sizing: border-box; position: relative; transition: all 250ms cubic-bezier(0.5, 0, 0.5, 1) 0s; background-color: transparent; color: #039be5; text-decoration-line: none; -webkit-tap-highlight-color: transparent; font-size: 15px;\" href=\"https://www.camarasurubim.pe.gov.br/files/lei_organica\" target=\"_blank\" rel=\"noopener noreferrer\">Clique aqui para visualizar a Lei Org&acirc;nica</a></p>'),
(2, 'Contato', 'contato', '<p><img src=\"../../../media/images1588103402.jpeg\" alt=\"\" />P&aacute;gina Contato</p>'),
(5, 'Encontre-nos', 'encontre-nos', 'Página encontre-nos'),
(6, 'Comissões', 'comissoes', '<h1 class=\"center-mob\" style=\"box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; font-weight: 400; position: relative; transition: all 250ms cubic-bezier(0.5, 0, 0.5, 1) 0s; font-size: 2.2em; margin: 2.8rem 0px 1.68rem; line-height: 36.3px; color: rgba(0, 0, 0, 0.87);\">Comiss&otilde;es</h1>\r\n<p class=\"p-comissao\" style=\"box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; position: relative; transition: all 250ms cubic-bezier(0.5, 0, 0.5, 1) 0s; font-size: 1.1em; color: rgba(0, 0, 0, 0.87);\">Comiss&atilde;o da Casa De acordo com o artigo 225 do Regimento interno as comiss&otilde;es s&atilde;o &oacute;rg&atilde;os t&eacute;cnicos da c&acirc;mara, constitu&iacute;dos dos pr&oacute;prios , com fun&ccedil;&otilde;es consultivas- opinativas, em car&aacute;ter pertinente , onde especializados sobre mat&eacute;ria sujeita &aacute; delibera&ccedil;&atilde;o ou a&ccedil;&atilde;o do legislativo municipal, sob diferentes aspectos, a realizar investiga&ccedil;&otilde;es ou representa&ccedil;&atilde;o social da c&acirc;mara.<br style=\"box-sizing: border-box; position: relative; transition: all 250ms cubic-bezier(0.5, 0, 0.5, 1) 0s;\" /><br style=\"box-sizing: border-box; position: relative; transition: all 250ms cubic-bezier(0.5, 0, 0.5, 1) 0s;\" />Artigo 225 as comiss&otilde;es ser&atilde;o:</p>\r\n<ul style=\"box-sizing: border-box; font-family: Helvetica, Arial, sans-serif; position: relative; transition: all 250ms cubic-bezier(0.5, 0, 0.5, 1) 0s; padding-left: 0px; list-style-type: none; color: rgba(0, 0, 0, 0.87); font-size: 15px; left: 2em;\">\r\n<li style=\"box-sizing: border-box; position: relative; transition: all 250ms cubic-bezier(0.5, 0, 0.5, 1) 0s; list-style-type: none;\">Comiss&atilde;o de fun&ccedil;&otilde;es e or&ccedil;amento;</li>\r\n<li style=\"box-sizing: border-box; position: relative; transition: all 250ms cubic-bezier(0.5, 0, 0.5, 1) 0s; list-style-type: none;\">Comiss&atilde;o de Justi&ccedil;a e or&ccedil;amento;</li>\r\n<li style=\"box-sizing: border-box; position: relative; transition: all 250ms cubic-bezier(0.5, 0, 0.5, 1) 0s; list-style-type: none;\">Comiss&atilde;o de obras, urbanismo e servi&ccedil;os p&uacute;blicos;</li>\r\n<li style=\"box-sizing: border-box; position: relative; transition: all 250ms cubic-bezier(0.5, 0, 0.5, 1) 0s; list-style-type: none;\">Comiss&atilde;o de Educa&ccedil;&atilde;o, cultura e Esportes;</li>\r\n<li style=\"box-sizing: border-box; position: relative; transition: all 250ms cubic-bezier(0.5, 0, 0.5, 1) 0s; list-style-type: none;\">Comiss&atilde;o de Sa&uacute;de e Assist&ecirc;ncia Social;</li>\r\n</ul>'),
(7, 'Transparência', 'transparencia', '<p><a href=\"http://www.ptransparencia.com.br/portalcamarasurubim\">Clique aqui para acessar o portal da transpar&ecirc;ncia</a></p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `settings`
--

INSERT INTO `settings` (`id`, `name`, `content`) VALUES
(1, 'title', 'Título do site'),
(2, 'subtitle', 'Sub-titulo do site'),
(3, 'email', 'hugo_pascoal_@hotmail.com'),
(4, 'bgcolor', '#000000'),
(5, 'textcolor', '#ffffff');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `admin`) VALUES
(1, 'Hugo Pascoal Brito', 'hugo_pascoal_@hotmail.com', '$2y$10$ah8vGkoFq6Rr2AgGQy1jM.qGvkyZLei2VtQt3WBpsntUw8KBbBWwy', '8cGKdWjbNT8XP7RlkhOeqwVyPTXxpDBlWQv2b2zlaXF3OPMoaU1kJT060buI', 1),
(2, 'Hugo', 'hugo159gr@yahoo.com.br', '$2y$10$10c/iirKTzG1gDHtVvT8a.YP/S8hojI.MIKrzkeM1SJBmPTPqB7xO', 'Ha6ojLMwH5vb97DJKCgwY2Q4HsCAGSVnP2ZC6TKJf6t0rDTZbyaEBZAkHVFh', 0),
(5, 'Teste', 'teste@teste.com.br', '$2y$10$9iRYGWYkdUxclRNcxkQWQuHv5.pf1N1hD5gkAL4/7F1d3l09b3D7O', NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vereadors`
--

CREATE TABLE `vereadors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `broken` varchar(100) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `body` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vereadors`
--

INSERT INTO `vereadors` (`id`, `name`, `broken`, `description`, `body`) VALUES
(1, 'Teste atualizado', 'Partido Teste atualizado', 'aaa atualizado', '<p><img src=\"../../../media/images/1589303542.jpeg\" alt=\"\" width=\"294\" height=\"157\" /></p>'),
(2, 'Teste2', 'Partido de Teste 2', '', ''),
(8, 'Hugo', 'Sem Partido', 'devensolvedor', '<p><img src=\"../../media/images/1588974849.jpeg\" alt=\"\" width=\"294\" height=\"157\" />yuyu</p>\r\n<p><img src=\"../../../media/images/1589307514.jpeg\" alt=\"\" width=\"542\" height=\"290\" /></p>'),
(15, 'teste atual', 'teste atual', 'teste atual', '<p><strong>fsdjfisfsdfsfsdfcdc</strong></p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `date_access` datetime DEFAULT NULL,
  `page` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `date_access`, `page`) VALUES
(1, '1', '2020-04-30 13:37:22', '/'),
(2, '2', '2020-04-30 14:38:51', 'teste'),
(3, '3', '2020-04-30 13:37:22', 'teste'),
(4, '4', '2020-02-29 15:14:24', 'painel');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vereadors`
--
ALTER TABLE `vereadors`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `vereadors`
--
ALTER TABLE `vereadors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
