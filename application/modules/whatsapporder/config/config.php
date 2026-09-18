<?php
$HmvcConfig['whatsapporder']["_title"]       = "WhatsApp Order And Chat";
$HmvcConfig['whatsapporder']["_description"] = "Integrate WhatsApp to take orders directly from customers";
$HmvcConfig['whatsapporder']["_version"]     = 1.0;

$HmvcConfig['whatsapporder']['_database'] = true;
$HmvcConfig['whatsapporder']["_tables"]   = array(
	'tbl_whatsapp_setting'
);
$HmvcConfig['whatsapporder']["_extra_query"] = true;
