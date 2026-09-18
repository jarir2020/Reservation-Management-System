CREATE TABLE IF NOT EXISTS `tbl_waste_records` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(150) NOT NULL,
  `quantity` decimal(10,2) NOT NULL DEFAULT 0.00,
  `waste_reason` text NOT NULL,
  `waste_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
