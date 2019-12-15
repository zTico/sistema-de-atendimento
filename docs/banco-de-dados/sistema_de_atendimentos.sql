-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.37-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for sistema_de_atendimento
CREATE DATABASE IF NOT EXISTS `sistema_de_atendimento` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sistema_de_atendimento`;

-- Dumping structure for table sistema_de_atendimento.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(256) NOT NULL,
  `cpf` char(11) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `nascimento` date NOT NULL,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table sistema_de_atendimento.clientes: ~3 rows (approximately)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `nascimento`, `email`) VALUES
	(1, 'Marcos Fábio dos Santos Amaral Júnior', '03745685377', '(85) 98845-1324', '1988-05-12', 'marcaum54@gmail.com'),
	(2, 'Antônio Thiago Dias Lima', '06563528333', '(85) 99125-7129', '2000-01-23', 'thiagodiaslima10@gmail.com'),
	(6, 'AAAAAAA', '36249401121', '(85) 98845-1324', '2019-12-14', 'marcos@pc4.com.br');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
