<?php
	$tbl = new Console_Table(
		CONSOLE_TABLE_ALIGN_LEFT,		//left alignment
		''					//no border
	);

	$subnet_info_array = array (
			array('Subnet:',		$details['subnet'].'/'.$details['mask']),
			array('Section:',		$details['sectionName']),
			array('Description:',		$details['description']),
			array('VRF:',			$details['vrfId']),
			array('MasterSubnet:',		$details['masterSubnetId']),
			array('Vlan:',			$details['vlanId']),
			array('Last edited:',		$details['editDate']),

			array('','')
		);

	foreach ($subnet_info_array as $row) $tbl->addRow($row);

$subnet_info_template = $tbl->getTable();


?>