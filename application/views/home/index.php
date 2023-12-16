<?php $this->load->helper("format"); ?>
<table width="1000px" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td><div align="right"><?php echo anchor("search/normal", " ", array("class" => "btn_go")); ?></div></td>
	</tr>
	<tr>
		<td>
			<div align="center">
				<?php echo anchor("search/maps", img(array("src" => "/assets/images/gui/map.png", "width" => "558", "height" => "337"))); ?>
			</div><br />
		</td>
	</tr>
<?php if (isset($latest_adv) && !empty($latest_adv)) { ?>
	<?php foreach ($latest_adv AS $adv) { ?>
	<tr>  
		<td>
			<table class="text_table" align="center">				
				<tr>
					<td colspan="2"> <div class="text_date"><?php echo mysql_to_normal($adv->bump_date, true); ?> - By <?php echo $adv->posted_by; ?></div></td>
				</tr>
				<tr>
					<?php $title = str_replace(' ', '-', $adv->title); ?>
					<td><?php echo anchor("listed/details/".$adv->id."/".$title, $adv->title, array("class" => "text_title")); ?></td>
					<td><div class="text_cost"><?php echo $adv->type.": $".$adv->price; ?></div></td>
				</tr>
				<tr>
					<td colspan="2">
						<?php echo $adv->description; ?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<?php } ?>
<?php } ?>
</table>