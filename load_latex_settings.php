<?php
$_settings = Plugin::getAllSettings('latexrender');
if ($_settings['image_format'] == 0) Latex::$_image_format = 'gif';
elseif ($_settings['image_format'] == 1) Latex::$_image_format = 'png';
else

Latex::$_latex_path = $_settings['latex_path'];
Latex::$_dvips_path = $_settings['dvips_path'];
Latex::$_convert_path = $_settings['convert_path'];
Latex::$_identify_path = $_settings['identify_path'];
Latex::$_tmp_dir = $_settings['tmp_path'];
Latex::$_picture_path = $_settings['picture_path'];
Latex::$_font_size = intval($_settings['latex_font_size']);
Latex::$_latexclass = $_settings['latex_class'];
Latex::$_formula_density = intval($_settings['latex_formula_density']);
Latex::$_string_length_limit = intval($_settings['latex_strlen_limit']);
Latex::$_xsize_limit = intval($_settings['latex_xsize_limit']);
Latex::$_ysize_limit = intval($_settings['latex_ysize_limit']);

?>
