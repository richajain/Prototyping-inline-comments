<?php
/* Extension hooks

*/
class annotatorHooks {
	/*adds the annotator js and css

	*/
	public static function onBeforePageDisplay( OutputPage &$output, Skin &$skin ) {
		$output->addModules( 'ext.annotator' );
		return true;		
	}
}