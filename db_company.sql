-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 17-Ago-2020 às 21:49
-- Versão do servidor: 8.0.20
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
DROP PROCEDURE IF EXISTS `sp_about_team_save`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_about_team_save` (IN `pid_about_team` INT(3), IN `ptext_about` TEXT)  NO SQL
BEGIN
	
	IF pid_about_team > 0 THEN
		
		UPDATE tb_about_team
      SET 
        text_about = ptext_about
              
      WHERE id_about_team = pid_about_team;
        
  ELSE

		INSERT INTO tb_about_team (text_about) 
      VALUES(ptext_about);
      
      SET pid_about_team = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * FROM tb_about_team WHERE id_about_team = pid_about_team;
END$$

DROP PROCEDURE IF EXISTS `sp_about_us`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_about_us` (IN `pid_about_us` INT(2), IN `ptittle_about` VARCHAR(255), IN `psubtittle_about` VARCHAR(255), IN `ptext_about` TEXT, IN `plist_one` VARCHAR(255), IN `plist_two` VARCHAR(255), IN `plist_tree` VARCHAR(255), IN `plast_text` TEXT)  NO SQL
BEGIN
	
	IF pid_about_us > 0 THEN
		
		UPDATE tb_about_us
      SET 
        tittle_about = ptittle_about,
        subtittle_about = psubtittle_about,
        text_about = ptext_about,
        list_one = plist_one,
        list_two = plist_two,
        list_tree = plist_tree,
        last_text = plast_text       
      WHERE id_about_us = pid_about_us;
        
  ELSE

		INSERT INTO tb_about_us (tittle_about, subtittle_about, text_about, list_one, list_two, list_tree, last_text) 
      VALUES(ptittle_about, psubtittle_about, ptext_about, plist_one, plist_two, plist_tree, plast_text);
      
      SET pid_about_us = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * FROM tb_about_us WHERE id_about_us = pid_about_us;
    
END$$

DROP PROCEDURE IF EXISTS `sp_asked_save`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_asked_save` (IN `pid_asked` INT(11), IN `pasked` VARCHAR(255), IN `panswer` TEXT)  NO SQL
BEGIN
	
	IF pid_asked > 0 THEN
		
		UPDATE tb_askeds
      SET 
        asked = pasked,
        answer = panswer               
      WHERE id_asked = pid_asked;
        
  ELSE

		INSERT INTO tb_askeds (asked, answer) 
    VALUES(pasked, panswer);
      
      SET pid_asked = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * FROM tb_askeds WHERE id_asked = pid_asked;
    
END$$

DROP PROCEDURE IF EXISTS `sp_client_save`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_client_save` (IN `pid_client` INT, IN `pname_client` VARCHAR(255), IN `psite_client` VARCHAR(255))  NO SQL
BEGIN
	
	IF pid_client > 0 THEN
		
		UPDATE tb_clients
      SET 
        name_client = pname_client,
        site_client = psite_client               
      WHERE id_client = pid_client;
        
  ELSE

		INSERT INTO tb_clients (name_client, site_client) 
    VALUES(pname_client, psite_client);
      
      SET pid_client = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * FROM tb_clients WHERE id_client = pid_client;
    
END$$

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

DROP PROCEDURE IF EXISTS `sp_skill_save`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_skill_save` (IN `pid_skill` INT(11), IN `pname_skill` VARCHAR(100), IN `pvalue_skill` INT(3))  NO SQL
BEGIN
	
	IF pid_skill > 0 THEN
		
		UPDATE tb_skills
      SET 
        name_skill = pname_skill,
        value_skill = pvalue_skill        
      WHERE id_skill = pid_skill;

  ELSE

		INSERT INTO tb_skills (name_skill, value_skill)
        VALUES(pname_skill, pvalue_skill);
        SET pid_skill= LAST_INSERT_ID();
     END IF;
        SELECT * FROM tb_skills WHERE id_skill = pid_skill;
    
END$$

DROP PROCEDURE IF EXISTS `sp_team_save`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_team_save` (IN `pid_team` INT(11), IN `pname_team` VARCHAR(100), IN `pfunction_team` VARCHAR(255), IN `plink_facebook` VARCHAR(255), IN `plink_twitter` VARCHAR(255), IN `plink_instagram` VARCHAR(255), IN `plink_linkedin` VARCHAR(255))  NO SQL
BEGIN
	
	IF pid_team > 0 THEN
		
		UPDATE tb_team
      SET 
        name_team = pname_team,
        function_team = pfunction_team,
        facebook_team = plink_facebook,
        twitter_team = plink_twitter,
        instagram_team = plink_instagram,
        linkedin_team = plink_linkedin        
      WHERE id_team = pid_team;
        
  ELSE

		INSERT INTO tb_team (name_team, function_team, facebook_team, twitter_team, instagram_team, linkedin_team) 
      VALUES(pname_team, pfunction_team, plink_facebook, plink_twitter, plink_instagram, plink_linkedin );
      
      SET pid_team = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * FROM tb_team WHERE id_team = pid_team;
    
END$$

DROP PROCEDURE IF EXISTS `sp_testimonials_save`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_testimonials_save` (IN `pid_testimonials` INT(11), IN `pname_testimonials` VARCHAR(100), IN `pprofession_testimonials` VARCHAR(100), IN `ptestimonials` TEXT)  NO SQL
BEGIN
	
	IF pid_testimonials > 0 THEN
		
		UPDATE tb_testimonials
      SET 
        name_testimonials = pname_testimonials,
        profession_testimonials = pprofession_testimonials,
        testimonials = ptestimonials        
      WHERE id_testimonials = pid_testimonials;

  ELSE

		INSERT INTO tb_testimonials (name_testimonials, profession_testimonials, testimonials) 
      VALUES(pname_testimonials, pprofession_testimonials, ptestimonials);
      
      SET pid_testimonials = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * FROM tb_testimonials WHERE id_testimonials = pid_testimonials;
    
END$$

DROP PROCEDURE IF EXISTS `sp_text_skill_save`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_text_skill_save` (IN `pid_text_skill` INT(3), IN `ptext_skill` TEXT)  NO SQL
BEGIN
	
	IF pid_text_skill > 0 THEN
		
		UPDATE tb_text_skill
      SET 
        text_skill = ptext_skill
             
      WHERE id_text_skill = pid_text_skill;
        
  ELSE

		INSERT INTO tb_text_skill (text_skill)
      VALUES(ptext_skill);
      
      SET pid_text_skill = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * FROM tb_text_skill WHERE id_text_skill = pid_text_skill;
    
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_about_team`
--

DROP TABLE IF EXISTS `tb_about_team`;
CREATE TABLE IF NOT EXISTS `tb_about_team` (
  `id_about_team` int NOT NULL AUTO_INCREMENT,
  `text_about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dt_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `dt_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_about_team`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_about_team`
--

INSERT INTO `tb_about_team` (`id_about_team`, `text_about`, `dt_update`) VALUES
(1, 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.\r\n                    ', '2020-08-17 17:45:54'),
(3, '1\r\n\r\n                    ', NULL),
(4, 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas. ', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_about_us`
--

DROP TABLE IF EXISTS `tb_about_us`;
CREATE TABLE IF NOT EXISTS `tb_about_us` (
  `id_about_us` int NOT NULL AUTO_INCREMENT,
  `tittle_about` varchar(255) NOT NULL,
  `subtittle_about` varchar(255) NOT NULL,
  `text_about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `list_one` varchar(255) NOT NULL,
  `list_two` varchar(255) NOT NULL,
  `list_tree` varchar(255) NOT NULL,
  `last_text` text NOT NULL,
  `dt_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `dt_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_about_us`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_about_us`
--

INSERT INTO `tb_about_us` (`id_about_us`, `tittle_about`, `subtittle_about`, `text_about`, `list_one`, `list_two`, `list_tree`, `last_text`, `dt_update`) VALUES
(1, ' Eum ipsam laborum deleniti velitena Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave ', ' Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave ', ' Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum ', ' Ullamco laboris nisi ut aliquip ex ea commodo consequa', ' Duis aute irure dolor in reprehenderit in voluptate velit', ' Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_address`
--

DROP TABLE IF EXISTS `tb_address`;
CREATE TABLE IF NOT EXISTS `tb_address` (
  `id_address` int NOT NULL AUTO_INCREMENT,
  `street` varchar(255) NOT NULL,
  `number` varchar(100) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `neighborhood` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `state` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dt_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `dt_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_address`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_askeds`
--

DROP TABLE IF EXISTS `tb_askeds`;
CREATE TABLE IF NOT EXISTS `tb_askeds` (
  `id_asked` int NOT NULL AUTO_INCREMENT,
  `asked` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `dt_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `dt_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_asked`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_askeds`
--

INSERT INTO `tb_askeds` (`id_asked`, `asked`, `answer`, `dt_update`) VALUES
(1, 'Non consectetur a erat nam at lectus urna duis?', 'Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non. ', '2020-08-05 06:20:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clients`
--

DROP TABLE IF EXISTS `tb_clients`;
CREATE TABLE IF NOT EXISTS `tb_clients` (
  `id_client` int NOT NULL AUTO_INCREMENT,
  `name_client` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `site_client` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `dt_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `dt_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_clients`
--

INSERT INTO `tb_clients` (`id_client`, `name_client`, `site_client`, `dt_update`) VALUES
(3, 'Record', 'www.r7.com.br', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_emails`
--

DROP TABLE IF EXISTS `tb_emails`;
CREATE TABLE IF NOT EXISTS `tb_emails` (
  `id_email` int NOT NULL AUTO_INCREMENT,
  `name_email` varchar(255) NOT NULL,
  `principal_email` varchar(255) NOT NULL,
  `dt_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `dt_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_features`
--

DROP TABLE IF EXISTS `tb_features`;
CREATE TABLE IF NOT EXISTS `tb_features` (
  `id_feature` int NOT NULL AUTO_INCREMENT,
  `name_features` varchar(255) NOT NULL,
  `icon_features` varchar(255) NOT NULL,
  `dt_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `dt_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_feature`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_phones`
--

DROP TABLE IF EXISTS `tb_phones`;
CREATE TABLE IF NOT EXISTS `tb_phones` (
  `id_phones` int NOT NULL AUTO_INCREMENT,
  `number_phones` varchar(15) NOT NULL,
  `dt_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `dt_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_phones`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pricing`
--

DROP TABLE IF EXISTS `tb_pricing`;
CREATE TABLE IF NOT EXISTS `tb_pricing` (
  `id_pricing` int NOT NULL AUTO_INCREMENT,
  `plan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `pricing` decimal(10,2) DEFAULT NULL,
  `deteils` tinytext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `advanced` enum('Sim','Não') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `dt_create` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_pricing`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_pricing`
--

INSERT INTO `tb_pricing` (`id_pricing`, `plan`, `pricing`, `deteils`, `advanced`, `active`) VALUES
(1, 'Business', '19.00', 'Aida dere\r\n    Nec feugiat nisl\r\n    Nulla at volutpat dola\r\n    Pharetra massa\r\n    Massa ultricies mi\r\n', 'Não', 1),
(2, 'Developer', '29.00', '\r\n    Aida dere\r\n    Nec feugiat nisl\r\n    Nulla at volutpat dola\r\n    Pharetra massa\r\n    Massa ultricies mi\r\n', 'Não', 0),
(3, 'Ultimate', '49.00', '\r\n    Aida dere\r\n    Nec feugiat nisl\r\n    Nulla at volutpat dola\r\n    Pharetra massa\r\n    Massa ultricies mi\r\n', 'Sim', 0),
(9, 'noventa', '12.00', NULL, 'Sim', 0),
(12, 'Viny buniissd', '200.00', NULL, 'Não', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_services`
--

DROP TABLE IF EXISTS `tb_services`;
CREATE TABLE IF NOT EXISTS `tb_services` (
  `id_service` int NOT NULL AUTO_INCREMENT,
  `name_service` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dt_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `dt_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `icon_service` varchar(255) NOT NULL,
  PRIMARY KEY (`id_service`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_skills`
--

DROP TABLE IF EXISTS `tb_skills`;
CREATE TABLE IF NOT EXISTS `tb_skills` (
  `id_skill` int NOT NULL AUTO_INCREMENT,
  `name_skill` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `value_skill` int NOT NULL,
  `dt_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `dt_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_skill`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_skills`
--

INSERT INTO `tb_skills` (`id_skill`, `name_skill`, `value_skill`, `dt_update`) VALUES
(4, 'PHP7', 100, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_team`
--

DROP TABLE IF EXISTS `tb_team`;
CREATE TABLE IF NOT EXISTS `tb_team` (
  `id_team` int NOT NULL AUTO_INCREMENT,
  `name_team` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `function_team` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `facebook_team` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `twitter_team` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `instagram_team` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `linkedin_team` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `dt_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_team`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_team`
--

INSERT INTO `tb_team` (`id_team`, `name_team`, `function_team`, `facebook_team`, `twitter_team`, `instagram_team`, `linkedin_team`) VALUES
(1, 'Walter White', 'Chief Executive Officer', '', '', '', ''),
(2, 'Sarah Jhonson', 'Product Manager', '', '', '', ''),
(3, 'William Anderson', 'CTO', '', '', '', ''),
(4, 'Amanda Jepson', 'Accountant', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_testimonials`
--

DROP TABLE IF EXISTS `tb_testimonials`;
CREATE TABLE IF NOT EXISTS `tb_testimonials` (
  `id_testimonials` int NOT NULL AUTO_INCREMENT,
  `name_testimonials` varchar(100) NOT NULL,
  `profession_testimonials` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `testimonials` text NOT NULL,
  `dt_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `dt_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_testimonials`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_testimonials`
--

INSERT INTO `tb_testimonials` (`id_testimonials`, `name_testimonials`, `profession_testimonials`, `testimonials`, `dt_update`) VALUES
(4, 'Jeffeson', 'Tecnico', '52', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_text_skill`
--

DROP TABLE IF EXISTS `tb_text_skill`;
CREATE TABLE IF NOT EXISTS `tb_text_skill` (
  `id_text_skill` int NOT NULL AUTO_INCREMENT,
  `text_skill` text NOT NULL,
  `dt_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `dt_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_text_skill`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_text_skill`
--

INSERT INTO `tb_text_skill` (`id_text_skill`, `text_skill`, `dt_update`) VALUES
(1, 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', '2020-08-06 05:39:30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
