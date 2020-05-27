-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 27-Maio-2020 às 21:55
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_company`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `sp_pricing_save`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_pricing_save` (IN `pid_pricing` INT(11), IN `pplan` VARCHAR(100), IN `ppricing` DECIMAL(10,2), IN `pdeteils` TEXT, IN `padvanced` ENUM('Sim','Não'))  BEGIN
	
	IF pid_pricing > 0 THEN
		
		UPDATE tb_pricing
      SET 
        plan = pplan,
        pricing = ppricing,
        deteils = pdeteils,
        advanced = padvanced      
      WHERE id_pricing = pid_pricing;
        
  ELSE

		INSERT INTO tb_pricing (plan, pricing, deteils, advanced) 
      VALUES(pplan, ppricing, pdeteils, padvanced);
      
      SET pid_pricing = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * FROM tb_pricing WHERE id_pricing = pid_pricing;
    
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pricing`
--

DROP TABLE IF EXISTS `tb_pricing`;
CREATE TABLE IF NOT EXISTS `tb_pricing` (
  `id_pricing` int(11) NOT NULL AUTO_INCREMENT,
  `plan` varchar(100) DEFAULT NULL,
  `pricing` decimal(10,2) DEFAULT NULL,
  `deteils` tinytext,
  `advanced` enum('Sim','Não') DEFAULT NULL,
  `dt_create` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pricing`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_pricing`
--

INSERT INTO `tb_pricing` (`id_pricing`, `plan`, `pricing`, `deteils`, `advanced`, `dt_create`) VALUES
(2, '3213213', '10.00', 'sa dsa dsad sad sad ad ', 'Sim', '2020-05-26 22:41:33'),
(3, 'oi', '10.00', 'as jskld jksldjklsajdklsajdklasjkldjsalkdlskadklasjlk', 'Sim', '2020-05-26 23:15:46'),
(4, 'oi', '10.00', 'as jskld jksldjklsajdklsajdklasjkldjsalkdlskadklasjlk', 'Sim', '2020-05-26 23:15:55'),
(5, 'oi', '10.00', 'as jskld jksldjklsajdklsajdklasjkldjsalkdlskadklasjlk', 'Sim', '2020-05-26 23:16:28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
