<?php
/* Extension hooks

*/
class AnnotatorHooks {
	/*adds the annotator js and css

	*/
	public static function onBeforePageDisplay( OutputPage &$output, Skin &$skin ) {
		$Namespace = $skin->getTitle()->getNamespace();	//get the namespace number
		$supportedNamespaces = array( 0, 1, 14 );	//Namespaces where the annotator will be called
		/*
		 module is added only when then namespace matches
		*/
		if( in_array($Namespace, $supportedNamespaces) )
			$output->addModules( 'ext.annotator' );
		return true;		
	}
}