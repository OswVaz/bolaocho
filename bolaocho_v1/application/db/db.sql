DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(64) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `admin_lastname` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `admin_email` varchar(128) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `admin_cellphone` int(11) NOT NULL DEFAULT '0',
  `admin_pwd` varchar(64) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `admin_type_id` tinyint(1) NOT NULL DEFAULT '1',
  `admin_status` tinyint(1) NOT NULL DEFAULT '0',
  `admin_socialnet_id` int(11) NOT NULL DEFAULT '0',
  `admin_avatar` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `admin_access` varchar(64) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
);

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(64) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `client_lastname` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `client_email` varchar(128) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `client_cellphone` int(11) NOT NULL DEFAULT '0',
  `client_pwd` varchar(64) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `client_status` tinyint(1) NOT NULL DEFAULT '0',
  `client_socialnet_id` int(11) NOT NULL DEFAULT '0',
  `client_avatar` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `client_access` varchar(64) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`client_id`)
);

DROP TABLE IF EXISTS `admin_type`;
CREATE TABLE IF NOT EXISTS `admin_type` (
  `admin_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(64) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`admin_type_id`)
);


