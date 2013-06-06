<?php
/* Extension for creating annotations


*/
$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles['annotator'] = $dir . 'annotator.i18n.php';

//hooks
$wgAutoloadClasses['annotatorHooks'] = $dir . 'annotator.hooks.php';
$wgHooks['BeforePageDisplay'] = 'annotatorHooks::onBeforePageDisplay';