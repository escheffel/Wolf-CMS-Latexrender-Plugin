<?php
/**
 * Latex Render Plugin for Wolf CMS <http://thehub.silentworks.co.uk/plugins/frog-cms/tagger.html>
 * Alternate Mirror site <http://www.tbeckett.net/articles/plugins/tagger.xhtml>
 * Copyright (C) 2008 - 2011 Andrew Smith <a.smith@silentworks.co.uk>
 * Copyright (C) 2008 - 2011 Tyler Beckett <tyler@tbeckett.net>
 * 
 * Dual licensed under the MIT (license/mit-license.txt)
 * and GPL (license/gpl-license.txt) licenses.
 */

/**
 * Security measure for Wolf 0.7.0+
 */

// Check if the plugin's settings already exist and create them if not.
if (Plugin::getSetting('image_format', 'latexrender') === false) {
	// Store settings new style
	$settings = array('image_format' => '1');

	Plugin::setAllSettings($settings, 'latexrender');
}

Flash::set('success', __('Latex Render: Plugin was successfully enabled!'));

?>
