<h1><?php echo __('Latex Render Plugin'); ?></h1>

<form action="<?php echo get_url('plugin/latexrender/save'); ?>" method="post">
    <fieldset style="padding: 0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Latex Render settings'); ?></legend>
        <table class="fieldset" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td class="label"><label for="image_format"><?php echo __('Latex image format'); ?>: </label></td>
                <td class="field">
					<select name=settings[image_format] id="image_format">
						<option value="1" <?php if($settings['image_format'] == "1") echo 'selected ="";' ?>><?php echo __('PNG'); ?></option>
						<option value="0" <?php if($settings['image_format'] == "0") echo 'selected ="";' ?>><?php echo __('GIF'); ?></option>
					</select>
				</td>
                <td class="help"><?php echo __('Choose the image format for the rendered Latex pictures. PNG is preferred as it results in better quality.'); ?></td>
           </tr>
	    <tr>
		<td class="label"><label for="latex_path"><?php echo __('Absolute path to latex 
executable'); ?>: </label></td>
		<td class="field">
			<input type="text" class="textbox" name=settings[latex_path] 
value="<?php echo $settings['latex_path']; ?>" />
		</td>
		<td class="help"><?php echo __("Insert here the full (absolute) path of your system's latex executable "); ?></td>
	</tr>
	    <tr>
		<td class="label"><label for="dvips_path"><?php echo __('Absolute path to dvips 
executable'); ?>: </label></td>
		<td class="field">
			<input type="text" class="textbox" name=settings[dvips_path] 
value="<?php echo $settings['dvips_path']; ?>" />
		</td>
		<td class="help"><?php echo __("Insert here the full (absolute) path of your system's dvips executable "); ?></td>
	</tr>
	    <tr>
		<td class="label"><label for="identify_path"><?php echo __('Absolute path to 
identify executable'); ?>: </label></td>
		<td class="field">
			<input type="text" class="textbox" name=settings[identify_path] 
value="<?php echo $settings['identify_path']; ?>" />
		</td>
		<td class="help"><?php echo __("Insert here the full (absolute) path of your system's identify executable "); ?></td>
	</tr>
	    <tr>
		<td class="label"><label for="convert_path"><?php echo __('Absolute path to 
convert executable'); ?>: </label></td>
		<td class="field">
			<input type="text" class="textbox" name=settings[convert_path] 
value="<?php echo $settings['convert_path']; ?>" />
		</td>
		<td class="help"><?php echo __("Insert here the full (absolute) path of your system's convert executable "); ?></td>
	</tr>
        </table>
    </fieldset>

<br/>
    <fieldset style="padding: 0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Latex Render Output Path Settings'); ?></legend>
        <table class="fieldset" cellpadding="0" cellspacing="0" border="0">
	    <tr>
		<td class="label"><label for="picture_path"><?php echo __('Absolute path to 
picture path'); ?>: </label></td>
		<td class="field">
			<input type="text" class="textbox" name=settings[picture_path] 
value="<?php echo $settings['picture_path']; ?>" />
		</td>
		<td class="help"><?php echo __("Insert here the full (absolute) path of Latexrender's picture output path "); ?></td>
	</tr>
	    <tr>
		<td class="label"><label for="tmp_path"><?php echo __('Absolute path to 
tmp path'); ?>: </label></td>
		<td class="field">
			<input type="text" class="textbox" name=settings[tmp_path] 
value="<?php echo $settings['tmp_path']; ?>" />
		</td>
		<td class="help"><?php echo __("Insert here the full (absolute) path of Latexrender's tmp path "); ?></td>
	</tr>
        </table>
    </fieldset>

<br/>
    <fieldset style="padding: 0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Latex Render Extra Settings'); ?></legend>
        <table class="fieldset" cellpadding="0" cellspacing="0" border="0">
	    <tr>
		<td class="label"><label for="latex_font_size"><?php echo __('Font size for Latex symbols'); ?>: </label></td>
		<td class="field">
			<input type="text" class="textbox" name=settings[latex_font_size] 
value="<?php echo $settings['latex_font_size']; ?>" />
		</td>
		<td class="help"><?php echo __("Specify here the font size with which Latex symbols are rendered. Standard is 12."); ?></td>
	</tr>
	    <tr>
		<td class="label"><label for="latex_class"><?php echo __('Latex class employed in rendering'); ?>: </label></td>
		<td class="field">
			<input type="text" class="textbox" name=settings[latex_class] 
value="<?php echo $settings['latex_class']; ?>" />
		</td>
		<td class="help"><?php echo __("Insert here the Latex class to be used for rendering. Standard value is 'article'."); ?></td>
	</tr>
	    <tr>
		<td class="label"><label for="latex_formula_density"><?php echo __('Set formula density (used by ImageMagick)'); ?>: </label></td>
		<td class="field">
			<input type="text" class="textbox" name=settings[latex_formula_density] 
value="<?php echo $settings['latex_formula_density']; ?>" />
		</td>
		<td class="help"><?php echo __("Insert here the value for formula density. Standard value is 120."); ?></td>
	</tr>
	    <tr>
		<td class="label"><label for="latex_strlen_limit"><?php echo __('Set string limit for Latex formulae'); ?>: </label></td>
		<td class="field">
			<input type="text" class="textbox" name=settings[latex_strlen_limit] 
value="<?php echo $settings['latex_strlen_limit']; ?>" />
		</td>
		<td class="help"><?php echo __("Insert here the value for the string limit. Standard value is 500."); ?></td>
	</tr>
	    <tr>
		<td class="label"><label for="latex_xsize_limit"><?php echo __('Set xsize limit for Latex image'); ?>: </label></td>
		<td class="field">
			<input type="text" class="textbox" name=settings[latex_xsize_limit] 
value="<?php echo $settings['latex_xsize_limit']; ?>" />
		</td>
		<td class="help"><?php echo __("Insert here the value for the xsize limit. Standard value is 500."); ?></td>
	</tr>
	    <tr>
		<td class="label"><label for="latex_ysize_limit"><?php echo __('Set ysize limit for Latex image'); ?>: </label></td>
		<td class="field">
			<input type="text" class="textbox" name=settings[latex_ysize_limit] 
value="<?php echo $settings['latex_ysize_limit']; ?>" />
		</td>
		<td class="help"><?php echo __("Insert here the value for the ysize limit. Standard value is 500."); ?></td>
	</tr>
        </table>
    </fieldset>

    <br/>
    <p class="buttons">
        <input class="button" name="commit" type="submit" accesskey="s" value="<?php echo __('Save'); ?>" />
    </p>
</form>

<script type="text/javascript">
// <![CDATA[
    function setConfirmUnload(on, msg) {
        window.onbeforeunload = (on) ? unloadMessage : null;
        return true;
    }

    function unloadMessage() {
        return '<?php echo __('You have modified this page.  If you navigate away from this page without first saving your data, the changes will be lost.'); ?>';
    }

    $(document).ready(function() {
        // Prevent accidentally navigating away
        $(':input').bind('change', function() { setConfirmUnload(true); });
        $('form').submit(function() { setConfirmUnload(false); return true; });
    });
// ]]>
</script>
