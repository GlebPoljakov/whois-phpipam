<?php


	$tbl = new Console_Table(
		CONSOLE_TABLE_ALIGN_LEFT,		//left alignment
		''					//no border
	);

	$vrf_info_array = array (
			array('Vrf RD:',		$details['rd']),
			array('Name:',			$details['name']),
			array('Description:',		$details['description']),
			array('Last edited:',		$details['editDate']),
			array('','')
		);

	foreach ($vrf_info_array as $row) $tbl->addRow($row);

$vrf_info_template = $tbl->getTable();


?>