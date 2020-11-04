-- MariaDB dump 10.17  Distrib 10.4.13-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: db_fullstack
-- ------------------------------------------------------
-- Server version	10.4.13-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `nascimento` date NOT NULL,
  `sexo` enum('M','F') NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(80) NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(30) NOT NULL,
  `endereco_cliente` varchar(50) DEFAULT NULL,
  `telefone_cliente` int(11) NOT NULL,
  `nome_produto` varchar(30) NOT NULL,
  `valor_unitario` float NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor_total` int(11) NOT NULL,
  PRIMARY KEY (`id_pedido`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` VALUES (22,'Pablo Oliveira','Rua goias ,258 APT 101 Fundos',981492211,'Placa de vídeo GTX 550ti',350,1,350),(23,'Juca de Oliveira','Rua tambau ,258 APT 101 Fundos',981492255,'Placa de vídeo GTX 550ti',590,1,590),(24,'Mercedes Pereira','avenida nao sei',6566565,'asdjiasd',695,1,695);
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(30) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `preco` decimal(8,2) NOT NULL,
  `img_produto` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'Placa de vídeo GTX 550ti','Placa de Vídeo','asdasdasdasdasdsaddadasdsadasdasd',650.00,'5fa0c995a68ae.jpg'),(2,'SSD Kingston A400, 240GB','HD','Conheça o SSD A400 da Kingston. Performance incrível e tecnologia de ponta! Este SSD possui com a tecnologia 3D NAND (também chamada de V-NAND). Performance não será problema com este SSD. Ele possui uma controladora de última geração para velocidades de leitura e gravação de até 500MB/s e 350MB/s, este SSD é 10x mais rápido do que um HD tradicional para melhor desempenho, resposta ultrarrápida em multitarefas e um computador mais rápido de modo geral. ',248.00,'5fa0ce3fcfe88.jpg'),(3,'Mouse Gamer Redragon','Mouse','Mouse Gamer Redragon 10000DPI Chroma Cobra M711',219.00,'5fa0cecaf3cd8.jpg'),(4,'Monitor Gamer LED LG 34','Monitor','O Monitor LG Gamer é um poderoso equipamento de exibição de jogos integrado às funções de alto desempenho que podem responder a qualquer jogo de grande sucesso. Este monitor é compatível com HDR10 para representar detalhes em partes claras e escuras, para que os jogadores desfrutem de um brilho mais intenso e destaques com sombras e silhuetas mais profundas.',2.95,'5fa19757c9b30.jpg');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-03 22:23:53
