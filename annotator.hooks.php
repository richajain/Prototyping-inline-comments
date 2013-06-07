<?php
/* Extension hooks

*/
class annotatorHooks {
	/*adds the annotator js and css

	*/
	public static function onBeforePageDisplay( &$output, &$skin ) {
		$output->addModules( 'ext.annotator' );
		return true;		
	}
}