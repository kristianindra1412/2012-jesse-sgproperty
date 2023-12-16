<?php $this->load->helper("format"); ?>

<?php if (isset($data_details)) { ?>
<table style="width:1000px;">
	<tr>
		<td>
			<table style="width:700px; ">
				<tr>
					<td><h2><?php echo $data_details->unit_room; ?> for <?php echo $data_details->type; ?></h2></td>
				</tr>
				<tr>
					<td><h1><?php echo $data_details->title; ?></h1></td>
				</tr>
				<tr>
					<td>Price: $<?php echo $data_details->price; ?></td>
				</tr>
				<tr>
					<td><?php echo $data_details->address; ?></td>
				</tr>
				<tr>
					<td><?php echo $data_details->description; ?></td>
				</tr>
			</table>
		</td>
		<td style="text-align:right;">
			<img width="250" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.googleapis.com/maps/api/staticmap?center=<?php echo $data_details->latitude; ?>,<?php echo $data_details->longitude; ?>&zoom=14&size=250x150&maptype=roadmap&markers=color:blue%7Alabel:S%7C<?php echo $data_details->latitude; ?>,<?php echo $data_details->longitude; ?>&sensor=false" />
		</td>
	</tr>
</table>


<table style="width:1000px;">
	<tr>
		<td width="50%" cellspacing="10px">
			<table class="detailpageDetails" cellpadding="5px">
				<tr>
					<td align="center"><b>Details</b></td>
				</tr>
				<tr>
					<td>Nearest Mrt: <?php echo $data_details->mrt_name; ?></td>
				</tr>
				<tr>
					<td>Property Type: <?php echo $data_details->property_type_name; ?></td>
				</tr>
				<tr>
					<td>Aircon: <?php if ($data_details->aircon == "Y") echo "Yes"; else echo "No"; ?></td>
				</tr>
				<tr>
					<td>Furnish: <?php if ($data_details->furnish == "F") echo "Fully Furnish"; elseif ($data_details->furnish == "P") echo "Partial Furnish"; else echo "Unfurnish"; ?></td>
				</tr>
				<tr>
					<td>Total Bedroom: <?php echo $data_details->total_bedroom; ?></td>
				</tr>
				<tr>
					<td>Total Bathroom: <?php echo $data_details->total_bathroom; ?></td>
				</tr>
			</table>


		</td>
		<td width="5%">
		</td>
		<td width="45%" valign="top">
			<table class="detailpageDetails" cellpadding="5px">
				<tr>
					<td align="center"><b>Contact Details</b></td>
				</tr>
				<tr>
					<td>Posted by: <?php echo $data_details->posted_by; ?></td>
				</tr>
				<tr>
					<td>
						Name:
						<?php
							if ($data_details->posted_by == "OWNER") {
								echo $data_details->owner_name;
							} else {
								echo $data_details->agent_name;
							} 
						?>
					</td>
				</tr>
				<tr>
					<td>
						Contact:
						<?php
							if ($data_details->posted_by == "OWNER") {
								echo $data_details->phone;
							} else {
								echo $data_details->contact_number;
							} 
						?>
					</td>
				</tr>
				<tr>
					<td>
						Email:
						<?php
							if ($data_details->posted_by == "OWNER") {
								echo "<a href='mailto:".$data_details->owner_email."'>".$data_details->owner_email."</a>";
							} else {
								echo "<a href='mailto:".$data_details->agent_email."'>".$data_details->agent_email."</a>";
							} 
						?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<?php } ?>