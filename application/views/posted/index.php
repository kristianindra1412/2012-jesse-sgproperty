<?php if ($view_mode == 1) { ?>
<?php echo form_open("posted/process"); ?>
<table cellpadding="5" cellspacing="2">
	<tr>
		<td>You offer to</td>
		<td>:</td>
		<td>
			<select id="ptype" name="ptype">
				<option value="RENT">Rent</option>
				<option value="SELL">Sell</option>
			</select>
			a
			<select id="punitroom" name="punitroom">
				<option value="UNIT">Unit</option>
				<option value="ROOM">Room</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>*Title</td>
		<td>:</td>
		<td>
			<input type="text" name="ptitle" id="ptitle" maxlength="200" size="98" required />
		</td>
	</tr>
	<tr>
		<td>*Description</td>
		<td>:</td>
		<td>
			<textarea name="pdesc" id="pdesc" cols="74" rows="5" required ></textarea>
		</td>
	</tr>
	<tr>
		<td>*Address</td>
		<td>:</td>
		<td>
			<input type="text" name="paddress" id="paddress" maxlength="200" size="98" required />
		</td>
	</tr>
	<tr>
		<td>*Postal Code</td>
		<td>:</td>
		<td>
			<input type="text" name="ppcode" id="ppcode" required />
		</td>
	</tr>
	<tr>
		<td>Area</td>
		<td>:</td>
		<td>
			<select id="parea" name="parea">
				<option value="0">Select Area</option>
				<?php if (isset($area_list) && !empty($area_list)) { ?>
				<?php foreach ($area_list as $a) { ?>
					<option value="<?php echo $a->id; ?>"><?php echo $a->name; ?></option>
				<?php } ?>	
				<?php } ?>
			</select>
		</td>
	</tr>
	<tr>
		<td>District</td>
		<td>:</td>
		<td>
			<select id="pdistrict" name="pdistrict">
				<option value="0">Select District</option>
				<?php if (isset($district_list) && !empty($district_list)) { ?>
				<?php foreach ($district_list as $d) { ?>
					<option value="<?php echo $d->id; ?>"><?php echo $d->code." - ".$d->area_covered; ?></option>
				<?php } ?>	
				<?php } ?>
			</select>
		</td>
	</tr>
	<tr>
		<td>*Nearest MRT</td>
		<td>:</td>
		<td>
			<select id="pmrt" name="pmrt">
				<option value="0">Select Mrt</option>
				<?php if (isset($mrt_list) && !empty($mrt_list)) { ?>
				<?php foreach ($mrt_list as $m) { ?>
					<option value="<?php echo $m->id; ?>"><?php echo $m->name; ?></option>
				<?php } ?>	
				<?php } ?>	
			</select>
		</td>
	</tr>
	<tr>
		<td>*Price</td>
		<td>:</td>
		<td>
			<input type="number" name="pprice" id="pprice" value="0" required />
		</td>
	</tr>
	<tr>
		<td>*Property type</td>
		<td>:</td>
		<td>
			<select id="pptype" name="pptype">
				<option value="0">Select Property Type</option>
				<?php if (isset($propertytype_list) && !empty($propertytype_list)) { ?>
				<?php foreach ($propertytype_list as $p) { ?>
					<option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
				<?php } ?>
			<?php } ?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Cobroke Welcome</td>
		<td>:</td>
		<td>
			<input type="radio" name="pcobroke" id="pcobroke" value="Y" checked="true" />Yes
			<input type="radio" name="pcobroke" id="pcobroke" value="N" />No
		</td>
	</tr>
	<tr>
		<td>Aircon</td>
		<td>:</td>
		<td>
			<input type="radio" name="paircon" id="paircon" value="Y" checked="true" />Yes
			<input type="radio" name="paircon" id="paircon" value="N" />No
		</td>
	</tr>
	<tr>
		<td>Fully Furnished</td>
		<td>:</td>
		<td>
			<input type="radio" name="pfurnish" id="pfurnish" value="F" checked="true" />Fully Furnished
			<input type="radio" name="pfurnish" id="pfurnish" value="P" />Partially Furnished
			<input type="radio" name="pfurnish" id="pfurnish" value="U" />Unfurnished
		</td>
	</tr>
	<tr>
		<td>Total Bedroom</td>
		<td>:</td>
		<td>
			<input type="text" name="ptbedroom" id="ptbedroom" value="0" />
		</td>
	</tr>
	<tr>
		<td>Total Bathroom</td>
		<td>:</td>
		<td>
			<input type="text" name="ptbathroom" id="ptbathroom" value="0" />
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center">
			<input type="hidden" name="pposted" id="pposted" value="<?php echo $posted_by; ?>" />
			<input type="submit" name="process" id="process" value="Process" />
		</td>
	</tr>
</table>	
<?php echo form_close(); ?>
<?php } ?>

<?php if ($view_mode == 2) { ?>
	<div align="center"><?php echo "Please go to login page before you post!"; ?></div>
<?php } ?>