<?php


	$tbl = new Console_Table(
		CONSOLE_TABLE_ALIGN_LEFT,		//left alignment
		''					//no border
	);

	$ip_info_array = array (
			array('Address:',		$details['ip_addr']),
			array('Address Desc.:',		$details['description']),
			array('DNS-name (phpipam):',	$details['dns_name']),
			array('MAC-Address:',		$details['mac']),
			array('State/Designation:',	$details['state']),
			array('Connected to:',		$details['switch'].(($details['port']!='')?' Port:'.$details['port']:'')),
			array('Note:',			$details['note']),
			array('',''),
			array('Last seen:',		$details['lastSeen']),
			array('Owner:',			$details['owner']),
			array('Last edited:',		$details['editDate']),
			array('',''),
			array('Subnet:',		$details['subnet']['subnet'].'/'.$details['subnet']['mask']),
			array('Subnet Desc.:',	$details['subnet']['description']),
			array('Section:',	$details['subnet']['sectionId']),
			array('VRF:',		$details['subnet']['vrfId']),
			array('VLAN:',		$details['subnet']['vlanId']),
			array('Master Subnet:',	$details['subnet']['masterSubnet']),
			array('','')
		);

	foreach ($ip_info_array as $row) $tbl->addRow($row);

$ip_info_template = $tbl->getTable();


?>