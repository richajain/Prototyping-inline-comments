<?php
/* Extension for creating annotations


*/
$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles['Annotator'] = $dir . 'Annotator.i18n.php';

//Resource Modules
$wgAnnotatorResourcePaths = array(
	'localBasePath' => __DIR__ . '/modules',
	'remoteExtPath' => "Prototyping-inline-comments/modules",
);
$wgResourceModules['ext.annotator'] = array(
	'scripts' => array(
		'Annotator-full.js',
		'Annotator.js',
		),
	'styles' => 'Annotator.css',
	) + $wgAnnotatorResourcePaths;

//hooks
$wgAutoloadClasses['AnnotatorHooks'] = $dir . 'Annotator.hooks.php';
$wgHooks['BeforePageDisplay'][] = 'AnnotatorHooks::onBeforePageDisplay';