<?php
error_reporting(E_ALL);

define('SILENTC_TOKEN', file_get_contents('_token'));
$db_data = ['sqlite:silentc.db'];

$cfg = [
	# Users that can use the special commands
	'sudoers' => [
		1026021087,
	],
	'api_id' => 2688420,
	'api_hash' => '572abe992b9b6f29d513eaa7be70b3f5',
];

# User that will receive the error reports
define('SILENTC_ADMIN', 1026021087);
