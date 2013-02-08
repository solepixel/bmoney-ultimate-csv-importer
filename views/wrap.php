<div class="wrap">
	
	<?php echo $this->admin_tabs($current_tab); ?>
	
	<?php /*
	//TODO: Use WP notifications action here.
	*/ ?>
	<?php if($processed == 'success'){ ?>
		<div class="updated below-h2" id="message"><p><?php echo $success_message; ?></p></div>
	<?php } ?>
	<?php if(count($this->errors) > 0){ ?>
		<div class="error" id="error-message"><p><?php foreach($this->errors as $err){
			echo $err.'<br/>';
		} ?></p></div>
	<?php } ?>
	
	
	
	<?php
	$include = BMUCI_PATH.'views/'.$current_tab.'.php';
	
	if(file_exists($include)) require_once($include);
	?>
	
	
</div>