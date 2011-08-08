<?php
Plugin::setInfos(array(
    'id'          => 'latexrender',
    'title'       => 'Latex Render', 
    'description' => 'Render Latex commands which are then included as images in post.',
    'license'     => 'GPL',
    'author'      => 'Eric M. Scheffel', 
    'version'     => '0.0.1',
    'require_wolf_version'     => '0.7.5',
    'type'        => 'both',
    'website'     => 'http://www.ericscheffel.com'
));

Plugin::addController('latexrender', __('Latex Render'), false, false);

// Load the Latex class into the system.
AutoLoader::addFile('LatexRender', CORE_ROOT.'/plugins/latexrender/class.LatexRender.php');
AutoLoader::addFile('Latex', CORE_ROOT.'/plugins/latexrender/class.Latex.php');

function load_latexrender() {

include_once(CORE_ROOT.'/plugins/latexrender/load_latex_settings.php');

return Latex;
}

?>
