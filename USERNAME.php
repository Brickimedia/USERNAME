<?php

$wgExtensionCredits['variable'][] = array(
	'name' => 'USERNAME',
	'author' => 'UltrasonicNXT/Adam Carter',
	'version' => '1.0',
	'description' => 'Adds an USERNAME magic word',
	'url' => 'https://github.com/Brickimedia/USERNAME',
);

$wgExtensionMessagesFiles['USERNAME'] = __DIR__ . '/USERNAME.i18n.magic.php';

//$wgAutoLoadClasses['USERNAME'] = __DIR__ . '/USERNAME.hooks.php'; doesn't work in time... :/
require_once( __DIR__ . '/USERNAME.hooks.php' );

$wgHooks['MagicWordwgVariableIDs'][] = 'USERNAME::setup';
$wgHooks['ParserGetVariableValueSwitch'][] = 'USERNAME::run';