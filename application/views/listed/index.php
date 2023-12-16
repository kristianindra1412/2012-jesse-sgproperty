<?php $this->load->helper("format"); ?>
<table width="1000px" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td>
			<table class="text_table" align="center">
			<?php if (isset($data_show) && !empty($data_show)) { ?>
				<?php foreach ($data_show AS $adv) { ?>
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
				<?php } ?>
				<tr>
					<td>
						<?php if (isset($rentsell_pagination)) { ?>
							<?php echo $rentsell_pagination; ?>
						<?php } ?>
					</td>
				</tr>
			<?php } ?>
			</table>
		</td>
	</tr>	
</table>