<?php if(is_multisite()){ ?>
			
	<hr />
	
	<div class="import-schedule">
		<h3>Multisite Installation Detected</h3>
		
		<p>Multisite installation was detected on your site. Please specify which blogs for your CSV to import into:</p>
		
		<p><strong>Note:</strong> If importing to one specific site, you should be using this plugin from within that site.</p>
		
		<ul class="multisite">
			<?php foreach($this->get_blog_list() as $blog){ ?>
				<li><label><input type="checkbox" name="bmuci_multisite[]" value="<?php echo $blog->id; ?>"<?php if(in_array($blog->id, $this->multisite) || (count($this->multisite) <= 0 && $this->import_type == 'users')) echo ' checked="checked"'; ?> />
					<?php echo get_blog_option($blog->id, 'blogname'); ?>
					(<?php echo $blog->domain.$blog->path; ?>)</label></li>
			<?php } ?>
		</ul>
	</div>

<?php } ?>