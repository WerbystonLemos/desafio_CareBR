CREATE DATABASE `bd_care` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

-- bd_care.nfs definition
CREATE TABLE `nfs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cNF` int(11) DEFAULT NULL,
  `dhEmi` date DEFAULT NULL,
  `CPF` int(11) DEFAULT NULL,
  `xNome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `CEP` int(8) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `xMun` varchar(100) DEFAULT NULL,
  `UF` varchar(2) DEFAULT NULL,
  `cPais` varchar(30) DEFAULT NULL,
  `vNF` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;