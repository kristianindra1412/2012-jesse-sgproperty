<?php $this->load->helper("format"); ?>
<?php if ($view_mode == 1) { ?>
	<?php if ((isset($list_data)) && (is_array($list_data))) { ?>
		<?php print_r($list_data); ?>
		<table width="1000px" border="0" cellpadding="0" cellspacing="0" align="center">
			<tr>
				<td>
					<table class="text_table" align="center">
					<?php if (isset($list_data) && !empty($list_data)) { ?>
						<?php foreach ($list_data AS $adv) { ?>
						<tr>
							<td colspan="2">
								<div class="text_date">
									<?php echo mysql_to_normal($adv->bump_date, true); ?>
									<!-- change this bump to post way, but the link same, so agent will not do F5 without they realized -->
									<?php echo anchor("agents/bumpadv/".$adv->id, "bump"); ?>
								</div>								
							</td>
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
					<?php } ?>
					</table>
				</td>
			</tr>		
		</table>
	<?php } ?>
<?php } ?>

<?php if ($view_mode == 2) { ?>
	<div align="center">Sorry, only agent can view this page :)</div>
<?php } ?>