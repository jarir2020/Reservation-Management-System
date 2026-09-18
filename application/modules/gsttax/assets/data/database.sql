CREATE TABLE IF NOT EXISTS `tbl_gst_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cgst` decimal(5,2) NOT NULL DEFAULT 2.50,
  `sgst` decimal(5,2) NOT NULL DEFAULT 2.50,
  `igst` decimal(5,2) NOT NULL DEFAULT 5.00,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
