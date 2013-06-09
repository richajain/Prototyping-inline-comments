<?php
/* Extension hooks

*/
class AnnotatorHooks {
	/*adds the annotator js and css

	*/
	public static function onBeforePageDisplay( OutputPage &$output, Skin &$skin ) {
		$output->addModules( 'ext.annotator' );
		return true;		
	}
}