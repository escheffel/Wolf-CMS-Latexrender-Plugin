<h1><?php echo __('Latex Render Plugin'); ?></h1>

<form action="<?php echo get_url('plugin/latexrender/save'); ?>" method="post">
    <fieldset style="padding: 0.5em;">
        <legend style="padding: 0em 0.5em 0em 0.5em; font-weight: bold;"><?php echo __('Latex Render settings'); ?></legend>
        <table class="fieldset" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td class="label"><label for="image_format"><?php echo __('Latex image format'); ?>: </label></td>
                <td class="field">
					<select name="image_format" id="image_format">
						<option value="1" <?php if($case == "1") echo 'selected ="";' ?>><?php echo __('PNG'); ?></option>
						<option value="0" <?php if($case == "0") echo 'selected ="";' ?>><?php echo __('GIF'); ?></option>
					</select>
				</td>
                <td class="help"><?php echo __('Choose the image format for the rendered Latex pictures. PNG is preferred as it results in better quality.'); ?></td>
            </tr>
        </table>
    </fieldset>
    <br/>
    <p class="buttons">
        <input class="button" name="commit" type="submit" accesskey="s" value="<?php echo __('Save'); ?>" />
    </p>
</form>
