<?php

// {{{ Include standalones:
	require_once ('getopts.php');
	require_once ('PEAR/Console/Table.php');
// }}}


// {{{ Function for printing debug messages
// Variables:
//	$msg		- message
//	$caption	- text to prepend $msg
//
function DbgPrn ($msg, $caption='') {

    global $DEBUG_LEVEL;

    //if there is no need to print debug messages
    if ( !$DEBUG_LEVEL ) return ;

    echo $caption;
    print_r($msg);
}
// }}}

// {{{ Function for printing usage info
//

function usage (){

global $argv;

print "Usage: $argv[0] [-h|--help] [-i|--stdin] [-q|--query {%query%}]" . PHP_EOL;
?>
There:
[-h|--help]	- show this message. 
[-i|--stdin]	- read %query% from stdin.
[-q|--query]	- query phpipam with %query%

There %query% is:
    %ipv4/ipv6%		- Get ip details
    %CIDR-subnet%	- Get subnet details
    %RD:RD%		- Get vrfId details
    %vlanId%		- Get vlanId details

<?
}
// }}}


?>