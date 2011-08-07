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
	$settings = array('image_format' => '1',
                          'latex_path' => '/usr/bin/latex',
                          'dvips_path' => '/usr/bin/dvips',
                          'identify_path' => '/usr/bin/identify',
                          'convert_path' => '/usr/bin/convert',
                          'picture_path' => CORE_ROOT.'/plugins/latexrender/pictures/',
                          'tmp_path' => CORE_ROOT.'/plugins/latexrender/tmp/'
                          );

    Plugin::setAllSettings($settings, 'latexrender');

// Get the settings from the backend and hook them into the Latex and LatexRender classes
$_settings = Plugin::getAllSettings('latexrender');

if ($_settings['image_format'] == 1) {
 Latex::$_image_format = "png";
} elseif ($_settings['image_format'] == 0) {
 Latex::$_image_format = "gif";
} else {

}

Latex::$_picture_path = $_settings['picture_path'];
Latex::$_tmp_path = $_settings['tmp_path'];
Latex::$_dvips_path = $_settings['dvips_path'];
Latex::$_latex_path = $_settings['latex_path'];
Latex::$_convert_path = $_settings['convert_path'];
Latex::$_identify_path = $_settings['identify_path'];

}

Flash::set('success', __('Latex Render: Plugin was successfully enabled!'));

?>
