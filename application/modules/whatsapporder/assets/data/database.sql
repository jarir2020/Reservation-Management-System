CREATE TABLE IF NOT EXISTS `tbl_whatsapp_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `whatsapp_number` varchar(50) DEFAULT NULL,
  `welcome_message` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

