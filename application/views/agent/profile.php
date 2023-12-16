<?php if ($view_mode == 1) { ?>
	<?php if ((isset($agent_data)) && (is_object($agent_data))) { ?>
		<?php print_r($agent_data); ?>
		<table class="agentProfileContainer" >
			<tr>
				<td rowspan="7" class="tdAgentProfilePict" >
					<?php echo img(array("src" => "assets/images/test_pict.jpg", "width" => "150", "height" => "200")); ?>
				</td>
				<td>
					Name: <?php echo $agent_data->name; ?>
				</td>
				<td rowspan="7" class="tdAgentProfilePict" valign="top">
					<?php echo img(array("src" => "assets/images/comp_agent.png", "width" => "150", "height" => "75")); ?>
				</td>
			</tr>
			<tr>
				<td>
					Code: <?php echo $agent_data->code; ?>
				</td>
			</tr>
			<tr>
				<td>
					Company: <?php echo $agent_data->company; ?>
				</td>
			</tr>
			<tr>
				<td>
					Specialities: <?php echo $agent_data->specialities; ?>
				</td>
			</tr>
			<tr>
				<td>
					Contact Number: <?php echo $agent_data->contact_number; ?>
				</td>
			</tr>
			<tr>
				<td>
					Email: <?php echo "<a href='mailto:".$agent_data->email."'>".$agent_data->email."</a>"; ?>
				</td>
			</tr>
			<tr>
				<td>
					Total Post: <?php echo $agent_data->total_post; ?>
				</td>
			</tr>
			<tr>				
				<td colspan="3">
					Description: <?php echo $agent_data->description; ?>
				</td>
			</tr>
			<tr>				
				<td colspan="3">
					Area Covered: <?php echo $agent_data->description; ?>
				</td>
			</tr>
			<tr>				
				<td colspan="3">
					District: <?php echo $agent_data->description; ?>
				</td>
			</tr>
			<tr>				
				<td colspan="3">
					<?php if ($can_see_post) echo anchor("agents/listpost/", "Go to my posts"); ?>
				</td>
			</tr>
		</table>
	<?php } ?>
<?php } ?>

<?php if ($view_mode == 2) { ?>
	<div align="center">Sorry, only agent can view this page :)</div>
<?php } ?>