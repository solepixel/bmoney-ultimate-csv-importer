<?php
$log_format = '<div class="entry"><span class="timestamp" title="%1$s">[%1$s]</span> <span class="message">%2$s</span></div>'; ?>
<div class="wrap">

	<?php if($last_increment){ ?>
		<p class="last-increment">Last row imported #<?php echo $last_increment; ?></p>
	<?php } ?>
	
	<?php if($next_cron){
		$server_time = date('n/j/Y g:i a'); ?>
		<p class="next-cron">Next Import scheduled for <?php
		
			$to_time = strtotime($server_time);
			$from_time = strtotime($next_cron);
			$minutes = round(abs($to_time - $from_time) / 60,2);
			#echo $minutes. ' minute'.($minutes > 1 ? 's' : '');
			
			echo '  '.date('n/j/Y g:i a', $next_cron);
			echo ' &nbsp; (Current Server Time: '.$server_time.')';
				
		 ?><br />
		<em>Note, your cron will run based on the settings of your server.</em></p>
	<?php } ?>
	
	<?php if(is_array($import_log) && count($import_log)){ ?>
		<div class="log-wrap">
			<h3>Import Log</h3>
			<div class="import-log log">
				<?php foreach($import_log as $k => $v){
					echo sprintf($log_format, $k, $v);
				} ?>
			</div>
		</div>
	<?php } ?>
	
	<?php if(is_array($cron_log) && count($cron_log)){ ?>
		<div class="log-wrap">
			<h3>Cron Log</h3>
			<div class="cron-log log">
				<?php foreach($cron_log as $k => $v){
					echo sprintf($log_format, $k, $v);
				} ?>
			</div>
		</div>
	<?php } ?>
	
	<div class="clear"><!-- .clear --></div>
	
	<?php if(!$import_log && !$cron_log){ ?>
		<p>No logs found.</p>
	<?php } ?>
</div>