<?php

$wgExtensionCredits['variable'][] = array(
	'name' => 'USERNAME',
	'author' => 'UltrasonicNXT/Adam Carter',
	'version' => '1.0',
	'description' => 'Adds an USERNAME magic word',
	'url' => 'https://github.com/Brickimedia/USERNAME',
);

$wgExtensionMessagesFiles['USERNAME'] = __DIR__ . '/USERNAME.i18n.magic.php';

$wgAutoloadClasses['USERNAME'] = __DIR__ . '/USERNAME.hooks.php';

$wgHooks['MagicWordwgVariableIDs'][] = 'USERNAME::setup';
$wgHooks['ParserGetVariableValueSwitch'][] = 'USERNAME::run';