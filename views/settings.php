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
