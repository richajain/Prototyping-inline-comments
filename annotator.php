<?php
/* Extension for creating annotations


*/
$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles['annotator'] = $dir . 'annotator.i18n.php';
//Resource Modules
$wgResourceModules['ext.annotator'] = array(
	'scripts' => 'annotator.min.js',
	'styles' => 'annotator.min.css',
	);
//hooks
$wgAutoloadClasses['annotatorHooks'] = $dir . 'annotator.hooks.php';
$wgHooks['BeforePageDisplay'][] = 'annotatorHooks::onBeforePageDisplay';