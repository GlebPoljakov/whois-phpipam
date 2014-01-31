<?php

/**
 * 
 */

# config
include_once('apiConfig.php');

# API caller class
include_once('apiClient.php');

// {{{ Variables:
	$ip_req['controller'] 		= "Addresses";
	$ip_req['action']		= "read";
	$ip_req['format']		= "ip";

	$ip_unset_details[]		= array('id', 'subnetId', 'excludePing');

	$subnet_req['controller']	= "Subnets";
	$subnet_req['action']		= "read";
	$subnet_req['format']		= "ip";

	$subnet_unset_details[]		= array('vrfId', 'masterSubnetId', 'allowRequests', 'vlanId', 'showName', 'permissions', 'pingSubnet', 'isFolder');
// }}}

// {{{ read REQUEST params
	$ip_req['ip'] = $_REQUEST['ip'];
// }}}

	print "<pre>Request:<br>";
	print_r($ip_req);


# wrap in try to catch exceptions
try {
	// initialize API caller
	$apicaller = new ApiCaller($app['id'], $app['enc'], $url);

	// Get Ip-Address Details:
	$ip_details = $apicaller->sendRequest($ip_req);
	// {{{ Remove unnesessary fields
	//foreach ($ip_unset_details as $key) {
	//    unset $ip_details->$key;
	//}
	// }}}

	// {{{ Get Subnet Details:
	$subnet_req['id'] = $ip_details['subnetId'];
	$subnet_details = $apicaller->sendRequest($subnet_req);
	// }}}

//TODO:
	// {{{ Get State
	// }}}

//TODO:
	// {{{ Get Vrf information:
	if ($subnet_details['vrfId']!=0) {

	}
	// }}}

//TODO:
	// {{{ Get SwitchById
	// }}}

//TODO:
	// {{{ Get Vlan information:
	if ($subnet_details['vlanId']!=0) {

	}
	// }}}

	// {{{ Get MasterSubnet:
		$subnet_req['id'] = $subnet_details['masterSubnetId'];
		$masterSubnet_details = $apicaller->sendRequest($subnet_req);

		if (!$masterSubnet_details['isFolder']) {
			$subnet_details['masterSubnet'] = $masterSubnet_details['subnet'];
		}
		unset ($masterSubnet_detail);
	// }}}

	print "<pre>IpAddr:";
	print_r ($ip_details);

	print "<pre>Subnet:";
	print_r($subnet_details);

	print_r($masterSubnet_details);

}
catch( Exception $e ) {
	//catch any exceptions and report the problem
/*	print "Error: ".$e->getMessage();
	print "In file: ".$e->getFile();
	print ""*/
	print "<pre>";
	print_r($e);
}



?>