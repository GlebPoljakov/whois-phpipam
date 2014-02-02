<?php

// {{{ Include standalones:
	require_once('getopts.php');
	require_once 'PEAR/Console/Table.php';
// }}}


// {{{ Function for printing debug messages
// Variables:
//	$msg		- message
//	$caption	- text to prepend $msg
//
function DbgPrn ($msg, $caption='') {

    print $caption;
    print_r($msg);

}
// }}}

// {{{ Function for printing usage info
//

function usage (){

global $argv;

print "Usage: $argv[0] [-h|--help] [-q|--query {%query%}]\n";
?>

There %query% is:
    %ipv4/ipv6%	- Get ip details
    %CIDR-subnet%	- Get subnet details
    %RD:RD%		- Get vrfId details
    VLAN%vlanId%	- Get vlanId details

<?
}
// }}}


?>