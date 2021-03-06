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
			$field_name = trim($heading);
			
			if(count($rows) >= $num_sample_rows){ // display a sample
				for($i=0; $i<3; $i++){
					if(isset($rows[$i]) && $rows[$i][$field_name]){
						$sample .= $sample ? '; '.htmlentities($rows[$i][$field_name]) : htmlentities($rows[$i][$field_name]);
					}
				}
			} ?>
			<tr class="<?php echo $even ? 'alternate' : ''; ?>">
				<td class="csv-heading"><?php echo $heading; ?></td>
				<td class="db-field"><?php echo $this->_db_field_select($field_name, $found, $matched); ?>
					<input type="text" name="db_field[<?php echo $field_name; ?>]" value="<?php
						if($this->_match_post_val($field_name, $matched) && !$found) echo $this->_match_post_val($field_name, $matched);
					?>" disabled="disabled" style="display: none;"/></td>
				<td class="sample-data"><span class="samples"><?php echo $sample; ?></span></td>
				<td class="post-id"><input type="radio" name="bmuci_id" value="<?php echo $field_name; ?>"<?php if($this->post_id == $field_name) echo ' checked="checked"'; ?> /></td>
				<td class="unique"><input type="radio" name="bmuci_unique" value="<?php echo $field_name; ?>"<?php if($this->unique == $field_name) echo ' checked="checked"'; ?> /></td>
				<td class="serialize"><input type="checkbox" name="bmuci_serialize[]" value="<?php echo $field_name; ?>"<?php if(in_array($field_name, $this->serialized)) echo ' checked="checked"'; ?> /></td>
			</tr>
			<?php $even = !$even;
			$found = false;
		} ?>
	</tbody>
</table>
