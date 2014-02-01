<?php

$ip_info_template = "
Address:		".$details['ip_addr']."
Address Desc.:		".$details['description']."
DNS-name (phpipam):	".$details['dns_name']."
MAC-Address:		".$details['mac']."
State/Designation:	".$details['state']."
Connected to:		".$details['switch'].(($details['port']!='')?' Port:'.$details['port']:'')."
Note:			".$details['note']."
Last seen:		".$details['lastSeen']."
Owner:			".$details['owner']."
Last edited:		".$details['editDate']."

Subnet:		".$details['subnet']['subnet'].'/'.$details['subnet']['mask']."
Subnet Desc.:	".$details['subnet']['description']."
Section:	".$details['subnet']['sectionId']."
VRF:		".$details['subnet']['vrfId']."
VLAN:		".$details['subnet']['vlanId']."
Master Subnet:	".$details['subnet']['masterSubnet']."

";

?>