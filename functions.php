<?php

define('THEMEID', 'scratch');

/**
 * Require all external php files
 *
 * This section check if the $directories array is not empty
 * and than require all php files that these directories contain.
 */
$directories = array('lib', 'inc');


if( !empty($directories) ) {
	foreach($directories as $directory) {
		$dir = glob(dirname( __FILE__ ) . '/'.$directory.'/*.php');

		foreach ($dir as $file) {
			require_once $file;
		}
	}
}