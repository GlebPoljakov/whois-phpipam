<?php
	$tbl = new Console_Table(
		CONSOLE_TABLE_ALIGN_LEFT,		//left alignment
		''					//no border
	);

	$vlan_info_array = array (
			array('Vlan id number:',	$details['number']),
			array('Vlan Name:',		$details['name']),
			array('Description:',		$details['description']),
			array('Last edited:',		$details['editDate']),
			array('','')
		);

	foreach ($vlan_info_array as $row) $tbl->addRow($row);

$vlan_info_template = $tbl->getTable();


?>