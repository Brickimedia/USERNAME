<?php

class USERNAME {
	static function setup( &$customVariableIds ) {
		$customVariableIds[] = 'username_var';

		return true;
	}

	static function run( Parser &$parser, &$cache, &$magicWordId, &$ret ) {
		if ( $magicWordId == 'username_var' ) {
			$ret = $parser->getUser()->getName();
		}

		return true;
	}
}