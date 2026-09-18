<?php
$HmvcConfig['loyalty']["_title"]       = "Loyalty Program";
$HmvcConfig['loyalty']["_description"] = "Give points & membership discounts to favorite customers";
$HmvcConfig['loyalty']["_version"]     = 1.0;

$HmvcConfig['loyalty']['_database'] = true;
$HmvcConfig['loyalty']["_tables"]   = array(
	'tbl_loyalty_setting'
);
$HmvcConfig['loyalty']["_extra_query"] = true;
