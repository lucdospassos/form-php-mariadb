-- MariaDB dump 10.19  Distrib 10.5.21-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: DB_ProgramaPHP
-- ------------------------------------------------------
-- Server version	10.5.21-MariaDB-0+deb11u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `CLIENTE`
--

DROP TABLE IF EXISTS `CLIENTE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CLIENTE` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(100) DEFAULT NULL,
  `SOBRE_NOME` varchar(100) DEFAULT NULL,
  `ENDERECO` varchar(255) DEFAULT NULL,
  `TELEFONE` varchar(50) DEFAULT NULL,
  `CIDADE` varchar(50) DEFAULT NULL,
  `ESTADO` varchar(30) DEFAULT NULL,
  `DATA_NASCIMENTO` date DEFAULT NULL,
  `BAIRRO` varchar(50) DEFAULT NULL,
  `FOTO` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CLIENTE`
--

LOCK TABLES `CLIENTE` WRITE;
/*!40000 ALTER TABLE `CLIENTE` DISABLE KEYS */;
INSERT INTO `CLIENTE` VALUES (1,'LUCIANO CAETANO','PASSOS','Rua Júlio Araújo Cavalcante, 97','81997206979','Camaragibe','PE','1981-06-10','Alto da Boa Vista',NULL),(2,'Jacyntia','Delmiro','Alameda das Orquídeas 100','81987878416','São Lourenço da Mata','Pernambuco','1991-10-08','Tiuma',NULL),(3,'João','Marcos','Rua da Paz, 560','(11) 98569-9612','São Paulo','SP','1982-09-06','Centro',NULL),(5,'Cristiane','Caetano','Av. José Pereira, 1056','(81) 99723-5426','Teresina','PI','1975-04-25','Bairro Velho',NULL),(19,'JAM','OLIVEIRA','Rua Júlio Araújo Cavalcante, 97','81997206979','Camaragibe','PE','1986-05-25','CENTRO','./img/foto_pessoal.jpg'),(20,'','','','','','','1970-01-01','','./img/'),(21,'','','','','','','1970-01-01','','./img/'),(22,'','','','','','','1970-01-01','','./img/'),(23,'','','','','','','1970-01-01','','./img/'),(24,'','','','','','','1970-01-01','','./img/'),(25,'','','','','','','1970-01-01','','./img/'),(26,'','','','','','','1970-01-01','','./img/'),(27,'','','','','','','1970-01-01','','./img/'),(28,'','','','','','','1970-01-01','','./img/'),(29,'','','','','','','1970-01-01','','./img/');
/*!40000 ALTER TABLE `CLIENTE` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-07 22:16:32
