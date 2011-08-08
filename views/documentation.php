<?php

/**
 * Wolf CMS - Content Management Simplified. <http://www.wolfcms.org>
 * Copyright (C) 2008 Martijn van der Kleijn <martijn.niji@gmail.com>
 *
 * This file is part of Wolf CMS.
 *
 * Wolf CMS is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Wolf CMS is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Wolf CMS.  If not, see <http://www.gnu.org/licenses/>.
 *
 * Wolf CMS has made an exception to the GNU General Public License for plugins.
 * See exception.txt for details and the full text.
 */

/**
 * The Latexrender Plugin

 * @author Eric M. Scheffel <emscheffel@gmail.com>,
 * @copyright www.ericscheffel.com
 * @license http://www.gnu.org/licenses/gpl.html GPLv3 license
 */
 
?>
<div id="latexrender_content">
<h1><?php echo __('Latex Render Documentation'); ?></h1>
<h3><?php echo __('Basic plugin to permit rendering of Latex commands'); ?></h3>

<h2><?php echo __('Instructions:'); ?></h2>
A basic pluging which permits the rendering of Latex commands in Wolf 
CMS posts/articles.</p>

<p>In your html code, simply bracket the Latex code within
<code> [tex] Latex Commands here [/tex] </code>
and the code is being converted into an image and inserted into 
the post.</p>

<p>Then, you need to go to your Layout tab in WolfCMS and add the following line
just after your &lt;body&gt; tag:

<code>&lt;?php load_latexrender(); ?&gt;</code>
</p>

<p>In order to make the plugin work, you must filter the content() methods 
of the article classes using an installed static method in the Class 
Latex. Example, in your Layout file, change:</p>

<code>&lt;?php echo $article->content(); ?&gt;</code>

into:

<code>&lt;?php echo Latex:latex_content($article->content()); ?&gt;</code>

<p>If you wish to apply the filter to other parts of your Wolf CMS website (such as the Comments 
content - which may also contain equations in posted replies ) 
you would have to use the static filter function in the appropriate 
places in the source code.</p>

<h2><?php echo __('Installation:'); ?></h2>

<p>The plugin folder for this plugin *MUST HAVE* the name 'latexrender', 
so rename after git-cloning.</p>

<p>This plugin is based on the vanilla php code for Latex Rendering 
available at <a href='http://www.mayer.dial.pipex.com/tex.htm' 
target='_blank'>http://www.mayer.dial.pipex.com/tex.htm</a> and has 
been 
slightly tweaked to work with Wolf CMS. In order for this to work,
you must have Latex, Ghostscript, dvips, ImageMagick installed.
You can further tweak options by accessing the class.LatexRender.php
file.</p>

Happy Latex Rendering !<BR>
Eric Scheffel
</div>
