CREATE TABLE IF NOT EXISTS `tbl_shifts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shift_name` varchar(100) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
