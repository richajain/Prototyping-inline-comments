<?php
/* Extension for creating annotations


*/
$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles['annotator'] = $dir . 'annotator.i18n.php';

//Resource Modules
$wgAnnotatorResourcePaths = array(
	'localBasePath' => __DIR__ . '/modules',
	'remoteExtPath' => "Prototyping-inline-comments/modules",
);
$wgResourceModules['ext.annotator'] = array(
	'scripts' => array(
		'annotator.min.js',
		'annotator.js',
		),
	'styles' => 'annotator.min.css',
	) + $wgAnnotatorResourcePaths;

//hooks
$wgAutoloadClasses['annotatorHooks'] = $dir . 'annotator.hooks.php';
$wgHooks['BeforePageDisplay'][] = 'annotatorHooks::onBeforePageDisplay';