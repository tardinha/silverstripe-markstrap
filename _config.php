<?php

/*
LeftAndMain::require_css(basename(__DIR__) . '/css/markstrap.css');
LeftAndMain::require_javascript(basename(__DIR__) . '/javascript/markstrap.js');
*/


// Set the site locale
i18n::set_locale('en_AU');

// CMS Batch Actions
CMSBatchActionHandler::register('hidefrommenus', 'CMSBatchAction_HideFromMenus');
CMSBatchActionHandler::register('hidefromsearch', 'CMSBatchAction_HideFromSearch');

// Visualblocks plugin
HtmlEditorConfig::get('cms')->enablePlugins(array('visualblocks' => '../../../framework/thirdparty/tinymce/plugins/visualblocks/editor_plugin.js'));
HtmlEditorConfig::get('cms')->addButtonsToLine(1, 'visualblocks');

// Remove formatting button
HtmlEditorConfig::get('cms')->addButtonsToLine(1, 'removeformat');

// Codemagic plugin for TinyMCE
HtmlEditorConfig::get('cms')->enablePlugins(array(
	'codemagic' => sprintf('../../../markstrap/thirdparty/codemagic/editor_plugin_src.js')
));
HtmlEditorConfig::get('cms')->insertButtonsBefore('fullscreen', 'codemagic');
HtmlEditorConfig::get('cms')->removeButtons('code');
