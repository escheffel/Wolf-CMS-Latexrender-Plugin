<?php
/*
 * Wolf CMS - Content Management Simplified. <http://www.wolfcms.org>
 * Copyright (C) 2008-2010 Martijn van der Kleijn <martijn.niji@gmail.com>
 *
 * This file is part of Wolf CMS. Wolf CMS is licensed under the GNU GPLv3 license.
 * Please see license.txt for the full license text.
 */

/* Security measure */
if (!defined('IN_CMS')) { exit(); }

/**
 * Note: to use the settings and documentation pages, you will first need to enable
 * the plugin!
 *
 * @package Plugins
 * @subpackage latexrender
 *
 * @author Eric M. Scheffel <emscheffel@gmail.com>
 * @copyright Eric M. Scheffel, 2011
 * @license http://www.gnu.org/licenses/gpl.html GPLv3 license
 */

/**
 * Use this SkeletonController and this skeleton plugin as the basis for your
 * new plugins if you want.
 */
class LatexRenderController extends PluginController {

    public function __construct() {
        $this->setLayout('backend');
		//$this->assignToLayout('sidebar', new View('../../plugins/latexrender/views/sidebar'));
    }
	public function index() {
        $this->documentation();
    }
	public function documentation() {
        $this->display('latexrender/views/documentation');
    }

}
