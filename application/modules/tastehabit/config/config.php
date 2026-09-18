<?php
$HmvcConfig['tastehabit']["_title"]       = "Taste Habit Program";
$HmvcConfig['tastehabit']["_description"] = "Save customer taste habits and notes for personalized service";
$HmvcConfig['tastehabit']["_version"]     = 1.0;

$HmvcConfig['tastehabit']['_database'] = true;
$HmvcConfig['tastehabit']["_tables"]   = array(
	'tbl_customer_taste_habits'
);
$HmvcConfig['tastehabit']["_extra_query"] = true;
