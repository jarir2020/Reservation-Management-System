<?php
$HmvcConfig['gsttax']["_title"]       = "Advanced Tax / GST Setting";
$HmvcConfig['gsttax']["_description"] = "Set Tax or GST according to country system";
$HmvcConfig['gsttax']["_version"]     = 1.0;

$HmvcConfig['gsttax']['_database'] = true;
$HmvcConfig['gsttax']["_tables"]   = array(
	'tbl_gst_setting'
);
$HmvcConfig['gsttax']["_extra_query"] = true;

