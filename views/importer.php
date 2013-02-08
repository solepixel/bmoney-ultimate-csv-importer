<<<<<<< HEAD
<div class="wrap">
	<h2>Ultimate CSV Importer</h2>
	
	
	<?php if($processed == 'success'){ ?>
		<div class="updated below-h2" id="message"><p><?php echo $success_message; ?></p></div>
	<?php } ?>
	<?php if(count($this->errors) > 0){ ?>
		<div class="error" id="error-message"><p><?php foreach($this->errors as $err){
			echo $err.'<br/>';
		} ?></p></div>
	<?php } ?>
	
	
	
	<?php require_once(BMUCI_PATH.'views/uploader.php'); ?>
	
	
	
	<?php if(isset($csv) && is_array($csv) && is_array($data)){ ?>
		
		<p style="font-weight: bold;"><?php echo $this->total_rows; ?> Total Rows found for import.</p>
		
		<form id="bmuci-match" method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>" >
		
			<?php if($this->import_type != 'other'){ ?>
			
				<?php require_once(BMUCI_PATH.'views/matcher.php'); ?>
				
				<?php require_once(BMUCI_PATH.'views/custom-columns.php'); ?>
				
			<?php } ?>
			
			
			<?php require_once(BMUCI_PATH.'views/multisite.php'); ?>
			
			<?php require_once(BMUCI_PATH.'views/scheduler.php'); ?>
			
			
			<div class="buttons">
				<input type="hidden" name="bmuci_process" value="import" />
				
				<input type="hidden" name="uploaded_csv[filename]" value="<?php echo $csv['filename']; ?>" />
				<input type="hidden" name="uploaded_csv[path]" value="<?php echo $csv['path']; ?>" />
				<input type="hidden" name="uploaded_csv[url]" value="<?php echo $csv['url']; ?>" />
				
				<?php foreach($this->defaults as $col => $default){ ?>
					<input type="hidden" name="bmuci_<?php echo $col; ?>" value="<?php echo $default; ?>" />
				<?php } ?>
				
				<input type="hidden" name="bmuci_import_type" value="<?php echo $this->import_type; ?>" />
				
				<?php submit_button(__('Finish!', 'bmuci')); ?>
				
			</div>
		</form>
	<?php } ?>
</div>
=======
<div class="wrap">	<h2>Ultimate CSV Importer</h2>			<?php if($processed == 'success'){ ?>		<div class="updated below-h2" id="message"><p><?php echo $success_message; ?></p></div>	<?php } ?>	<?php if(count($this->errors) > 0){ ?>		<div class="error" id="error-message"><p><?php foreach($this->errors as $err){			echo $err.'<br/>';		} ?></p></div>	<?php } ?>				<?php require_once(BMUCI_PATH.'views/uploader.php'); ?>				<?php if(isset($csv) && is_array($csv) && is_array($data)){ ?>				<p style="font-weight: bold;"><?php echo $this->total_rows; ?> Total Rows found for import.</p>				<form id="bmuci-match" method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>" >					<?php if($this->import_type != 'other'){ ?>							<?php require_once(BMUCI_PATH.'views/matcher.php'); ?>								<?php require_once(BMUCI_PATH.'views/custom-columns.php'); ?>							<?php } ?>									<?php require_once(BMUCI_PATH.'views/multisite.php'); ?>						<?php require_once(BMUCI_PATH.'views/scheduler.php'); ?>									<div class="buttons">				<input type="hidden" name="bmuci_process" value="import" />								<input type="hidden" name="uploaded_csv[filename]" value="<?php echo $csv['filename']; ?>" />				<input type="hidden" name="uploaded_csv[path]" value="<?php echo $csv['path']; ?>" />				<input type="hidden" name="uploaded_csv[url]" value="<?php echo $csv['url']; ?>" />								<?php foreach($this->defaults as $col => $default){ ?>					<input type="hidden" name="bmuci_<?php echo $col; ?>" value="<?php echo $default; ?>" />				<?php } ?>								<input type="hidden" name="bmuci_import_type" value="<?php echo $this->import_type; ?>" />								<?php submit_button(__('Finish!', 'bmuci')); ?>							</div>		</form>	<?php } ?></div>
>>>>>>> 51ba784e3cef9bcb0ef6f3292d1d86c6e935fbe8
