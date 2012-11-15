<h3>Step 2: Match Column headings with Corresponding Data</h3>

<p>The headings we found in your CSV are on the left. Choose where you want the data to go into the database on the right.</p>
		
<?php
$headings = $data['headings'];
$rows = $data['rows'];
?>

<table class="widefat match-headers">
	<thead>
		<tr>
			<th class="csv-heading">CSV Heading</th>
			<th class="db-field">Database Field</th>
			<th class="sample-data">Sample Data</th>
			<th class="post-id">Post ID</th>
			<th class="unique">Unique</th>
			<th class="serialize">Serialize</th>
		</tr>
	</thead>
	<tbody>
		<?php $even = false;
		foreach($headings as $heading){
			$sample = '';
			$num_sample_rows = apply_filters('bmuci_sample_data', 3);
			if(count($rows) >= $num_sample_rows){ // display a sample
				for($i=0; $i<3; $i++){
					if(isset($rows[$i]) && $rows[$i][$heading]){
						$sample .= $sample ? '; '.$rows[$i][$heading] : $rows[$i][$heading];
					}
				}
			} ?>
			<tr class="<?php echo $even ? 'alternate' : ''; ?>">
				<td class="csv-heading"><?php echo $heading; ?></td>
				<td class="db-field"><?php echo $this->_db_field_select($heading, $found, $matched); ?>
					<input type="text" name="db_field[<?php echo $heading; ?>]" value="<?php
						if($this->_match_post_val($heading, $matched) && !$found) echo $this->_match_post_val($heading, $matched);
					?>" disabled="disabled" style="display: none;"/></td>
				<td class="sample-data"><span class="samples"><?php echo $sample; ?></span></td>
				<td class="post-id"><input type="radio" name="bmuci_id" value="<?php echo $heading; ?>"<?php if($this->post_id == $heading) echo ' checked="checked"'; ?> /></td>
				<td class="unique"><input type="radio" name="bmuci_unique" value="<?php echo $heading; ?>"<?php if($this->unique == $heading) echo ' checked="checked"'; ?> /></td>
				<td class="serialize"><input type="checkbox" name="bmuci_serialize[]" value="<?php echo $heading; ?>"<?php if(in_array($heading, $this->serialized)) echo ' checked="checked"'; ?> /></td>
			</tr>
			<?php $even = !$even;
			$found = false;
		} ?>
	</tbody>
</table>