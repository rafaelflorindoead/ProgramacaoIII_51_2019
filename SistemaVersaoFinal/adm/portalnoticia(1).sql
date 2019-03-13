-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2019 at 08:03 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portalnoticia`
--
CREATE DATABASE IF NOT EXISTS `portalnoticia` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `portalnoticia`;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dataCadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `nome`, `email`, `dataCadastro`) VALUES
(1, 'rafaelflorindo@hotmail.com', 'Ricardo Alves Florindo', '2019-03-12 07:03:11'),
(2, 'wwwwwwwr@hotmail.com', 'Ricardwwwo Alves Florindo', '2019-03-12 07:03:45'),
(3, '2222@ddd.cdd', '13', '2019-03-12 07:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `descricao` longtext NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `ativo` tinyint(4) NOT NULL,
  `dataCadastro` datetime NOT NULL,
  `dataAtualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fonte` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `autor`, `descricao`, `imagem`, `ativo`, `dataCadastro`, `dataAtualizacao`, `fonte`) VALUES
(1, 'Linus Torvalds deseja que propensos crackers colaborem no desenvolvimento do Linux ao invÃ©s de atacÃ¡-lo', 'Ricardo Ferreira Costa', 'Entre 11 e 14 de setembro, o Open Source Summit , um evento patrocinado pela Linux Foundation, foi realizado este ano nos Estados Unidos (L.A). Diversas personalidades foram entrevistadas, entre elas Linus Torvalds, criador do Linux e o sistema de controle de versÃ£o Git\r\n\r\nEm uma entrevista de Jim Zemlin, CEO da Linux Foundation, ele fala sobre o quÃ£o maravilhoso Ã© trabalhar em algo que o motive. Em um projeto, o kernel Linux, com desafios tÃ©cnicos contÃ­nuos, que evolui em alta velocidade e que realmente tem um impacto na sociedade.\r\n\r\nTorvalds foi perguntado em uma conversa principal sobre o atual estado de seguranÃ§a no Linux (um dos tÃ³picos mais discutidos), especialmente porque o projeto Struts, de fonte aberta, foi suposto ser a causa raiz da recente violaÃ§Ã£o de dados da Equifax.', 'linux-161107_1280.png', 1, '2019-02-16 08:09:37', '2019-03-12 17:20:58', 'https://www.linuxdescomplicado.com.br/2017/09/linus-torvalds-deseja-que-propensos-crackers-colaborem-no-desenvolvimento-do-linux-ao-inves-de-ataca-lo.html'),
(2, 'Libreflix â€“ plataforma de streaming aberta e colaborativa', 'Ricardo Ferreira Costa', 'Os criadores do projeto defendem novas formas de compartilhamento da cultura. Formas que atinjam todas as pessoas, principalmente as que nÃ£o podem pagar por ela. Formas que conectem os artistas direto com os fÃ£s. E atÃ© formas que permitam que artistas criem algo novo Ã  partir do trabalho de outros artistas.\r\n\r\nOs criadores do projeto defendem novas formas de compartilhamento da cultura. Formas que atinjam todas as pessoas, principalmente as que nÃ£o podem pagar por ela. Formas que conectem os artistas direto com os fÃ£s. E atÃ© formas que permitam que artistas criem algo novo Ã  partir do trabalho de outros artistas.\r\n\r\nOs criadores do projeto defendem novas formas de compartilhamento da cultura. Formas que atinjam todas as pessoas, principalmente as que nÃ£o podem pagar por ela. Formas que conectem os artistas direto com os fÃ£s. E atÃ© formas que permitam que artistas criem algo novo Ã  partir do trabalho de outros artistas.\r\n', 'operating-system-97849__480.png', 1, '2019-02-19 06:02:02', '2019-03-12 17:22:10', 'https://www.linuxdescomplicado.com.br/2017/09/libreflix-plataforma-de-streaming-aberta-e-colaborativa.html'),
(3, 'IBM libera cÃ³digo da sua JVM J9 como alternativa ao JVM OpenJDK da Oracl', 'Ricardo Ferreira Costa', 'A comunidade, agora, possui uma implementaÃ§Ã£o alternativa ao Java Virtual Machine (JVM) OpenJDK da Oracle, que foi bem testada em cargas de trabalho e hardware da empresa IBM.\r\n\r\nContudo, ao contrÃ¡rio do que parece, o Eclipse OpenJ9 Ã© uma MÃ¡quina Virtual Java (JVM) (mecanismo que executa aplicativos Java) e nÃ£o uma JDK (Java Development Kit). Portanto, nÃ£o Ã© uma alternativa â€œcompletaâ€ ao OpenJDK, que Ã© um kit de desenvolvimento completo que contÃ©m outros componentes, como as bibliotecas de classes Java, bem como uma JVM.\r\n\r\nEm resumo, o OpenJ9 Ã© uma alternativa JVM que vocÃª pode incluir como parte de um binÃ¡rio OpenJDK â€“ Via Faq Eclipse OpenJ9.\r\nEclipse OpenJ9\r\n\r\nO OpenJ9 Ã© uma JVM desenvolvida pela IBM e a FundaÃ§Ã£o Eclipse. Antes J9, o projeto agora tornou-se um projeto da FundaÃ§Ã£o Eclipse sob o nome OpenJ9.\r\n\r\nA IBM estÃ¡ comprometida publicamente com a inovaÃ§Ã£o na comunidade de desenvolvimento de cÃ³digo aberto. Contribuir com a mÃ¡quina virtual J9, que tem sido o nÃºcleo do IBM SDK, Java Technology Edition hÃ¡ muitos anos, demonstra esse compromisso. A JVM OpenJ9 Ã© baseada em componentes de tecnologia bÃ¡sica do projeto Eclipse OMR, que foi contribuÃ­do pela IBM para a FundaÃ§Ã£o Eclipse em 2016.\r\n\r\nEm um cenÃ¡rio prÃ¡tico, de acordo com o site oficial, o OpenJ9 otimiza seu aplicativo Java sem precisar de um conjunto complicado de opÃ§Ãµes de linha de comando. Por exemplo, se o seu aplicativo tiver uma pilha extremamente grande, vocÃª poderÃ¡ escolher uma polÃ­tica de garbage collection diferente para melhorar o gerenciamento de memÃ³ria. Alternativamente, vocÃª poderÃ¡ explorar recursos de hardware especÃ­ficos, como uma unidade de processamento de grÃ¡ficos (GPU).', 'penguin-42936__480.png', 1, '2019-02-20 11:02:38', '2019-03-12 17:23:18', 'https://www.linuxdescomplicado.com.br/2017/09/ibm-libera-codigo-do-seu-jvm-j9-como-alternativa-ao-jvm-openjdk-da-oracle.html'),
(4, '10 coisas que vocÃª deve saber caso esteja comeÃ§ando com o Linux', 'Ricardo Ferreira Costa', '\r\n\r\nPara muitos o comeÃ§o de tudo sempre Ã© desafiador. Principalmente, por estar prestes a conhecer algo novo. Em se tratando de â€œum novoâ€ sistema operacional,â€¦\r\n\r\nPara muitos o comeÃ§o de tudo sempre Ã© desafiador. Principalmente, por estar prestes a conhecer algo novo. Em se tratando de â€œum novoâ€ sistema operacional, que serÃ¡ usado na sua mÃ¡quina, nÃ£o seria diferente. Por isso, deixando detalhes tÃ©cnicos de lado e mostrando â€œos atalhosâ€ para que consiga se dar bem nesse comeÃ§o, apresento 10 coisas que vocÃª deve saber caso esteja comeÃ§ando com o Linux.\r\nComeÃ§ando com o Linux\r\n\r\nVocÃª decide conhecer um sistema Linux. Durante uma semana ou outra luta e reluta para se acostumar com um ambiente de trabalho diferenteâ€¦ mas, se torna difÃ­cil porque falta tempo ou material de estudo. AÃ­, acaba desistindo.\r\n\r\nlargada\r\n\r\nSe identificou com essa situaÃ§Ã£o? Acredito que sim. Por isso, vou apresentar algumas coisas que julgo ser importante para sua â€œnova caminhadaâ€. SÃ£o dicas importantes para entender o contexto onde vocÃª estÃ¡ se inserindo ðŸ™‚\r\n1 â€“ Linux nÃ£o Ã© â€œum sistemaâ€\r\n\r\nMuito se falaâ€¦ â€œo sistema Linuxâ€œ. Contudo, o Linux â€œnÃ£o Ã© o todoâ€œ. Para muitos o Linux, por si, Ã© capaz de oferecer recursos e funcionalidades completas para o computador. Entretanto, o Linux Ã© somente o Kernel (nÃºcleo) do sistema operacional.\r\nRECOMENDO QUE LEIA:\r\nConheÃ§a a histÃ³ria do Linux\r\n\r\nTodo sistema operacional (Windows e Mac, por exemplo) possui um kernel. No caso das famosas DistribuiÃ§Ãµes Linux, o kernel Ã© o Linux â€“ livre e sendo desenvolvido por colaboradores em todo o mundo.\r\n\r\nO kernel de um sistema Ã© o componente central que serve â€œpara dÃ¡ vidaâ€ ao hardware. Ã‰ a camada responsÃ¡vel por garantir que todos os programas e processos tenham acesso aos recursos da mÃ¡quina de que necessitam (memÃ³ria RAM, acesso ao disco e controle da CPU, por exemplo) simultaneamente, fazendo com que haja um compartilhamento concorrente desses.\r\n\r\nA grosso modo Ã© o â€œcÃ©rebroâ€ do sistema operacional; o responsÃ¡vel por coordenar o acesso ao hardware e dados entre os diferentes componentes do sistema.', 'penguin-1300295__480.png', 1, '2019-03-08 01:03:07', '2019-03-12 17:24:16', 'https://www.linuxdescomplicado.com.br/2017/09/10-coisas-que-voce-deve-saber-caso-esteja-comecando-com-o-linux.html'),
(5, 'AlteraÃ§Ã£o de Noticias', 'Josefa de Alcantara Fernandes', 'O exemplo acima funciona corretamente, mais recebe um zero em questÃ£o de seguranÃ§a. Sabe porque? Ele simplesmente salva todos os arquivos que foi enviado por upload para o servidor. Se eu selecionar um arquivo .php e envia-lo ele poderÃ¡ ser executado sem nenhum problema pelo servidor.O exemplo acima funciona corretamente, mais recebe um zero em questÃ£o de seguranÃ§a. Sabe porque? Ele simplesmente salva todos os arquivos que foi enviado por upload para o servidor. Se eu selecionar um arquivo .php e envia-lo ele poderÃ¡ ser executado sem nenhum problema pelo servidor.O exemplo acima funciona corretamente, mais recebe um zero em questÃ£o de seguranÃ§a. Sabe porque? Ele simplesmente salva todos os arquivos que foi enviado por upload para o servidor. Se eu selecionar um arquivo .php e envia-lo ele poderÃ¡ ser executado sem nenhum problema pelo servidor.O exemplo acima funciona corretamente, mais recebe um zero em questÃ£o de seguranÃ§a. Sabe porque? Ele simplesmente salva todos os arquivos que foi enviado por upload para o servidor. Se eu selecionar um arquivo .php e envia-lo ele poderÃ¡ ser executado sem nenhum problema pelo servidor.O exemplo acima funciona corretamente, mais recebe um zero em questÃ£o de seguranÃ§a. Sabe porque? Ele simplesmente salva todos os arquivos que foi enviado por upload para o servidor. Se eu selecionar um arquivo .php e envia-lo ele poderÃ¡ ser executado sem nenhum problema pelo servidor.O exemplo acima funciona corretamente, mais recebe um zero em questÃ£o de seguranÃ§a. Sabe porque? Ele simplesmente salva todos os arquivos que foi enviado por upload para o servidor. Se eu selecionar um arquivo .php e envia-lo ele poderÃ¡ ser executado sem nenhum problema pelo servidor.\r\n', 'ubuntu-logo-8647__480.png', 2, '2019-03-08 02:03:42', '2019-03-12 17:25:16', 'x');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `dataCadastro` datetime NOT NULL,
  `dataAtualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ativo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `senha`, `dataCadastro`, `dataAtualizacao`, `ativo`) VALUES
(1, 'Rafael', 'rafaelflorindo', '123', '2019-02-09 12:14:37', '2019-02-16 13:14:39', 1),
(3, 'Ricardo Alves Florindo', 'ricardoflorindo', '456', '2019-02-16 02:02:28', '2019-02-16 13:51:49', 2),
(4, 'Maneco', 'maneco', '123', '2019-02-20 11:02:08', '2019-02-20 22:44:08', 2),
(5, 'Davi', 'davi', '123', '2019-03-08 01:03:31', '2019-03-08 12:13:49', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titulo` (`titulo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
