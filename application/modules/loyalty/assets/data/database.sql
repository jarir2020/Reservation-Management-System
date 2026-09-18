CREATE TABLE IF NOT EXISTS `tbl_loyalty_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `points_per_dollar` int(11) NOT NULL DEFAULT 1,
  `redemption_rate` decimal(10,2) NOT NULL DEFAULT 0.05,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
