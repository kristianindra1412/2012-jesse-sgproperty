<table width="1000px" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr valign="middle">
		<td>
      <div class="menu_bar">
        <a href="<?php echo base_url(); ?>">Home</a>
      </div>
    </td>
    <td width='200px'>
      <div class="menu_bar" onmouseover="showDropDownMenu(this)" id=test>        
        <?php echo anchor("listed/listing/all", "Unit"); ?>
        <div id=menuDrop_1 class=menu_drop>
          <ul type='none'>
            <li><?php echo anchor("listed/listing/Room-for-rent", "Room for Rent"); ?></li>
            <li><?php echo anchor("listed/listing/Unit-for-rent", "Unit for Rent"); ?></li>
            <li><?php echo anchor("listed/listing/Unit-for-sell", "Unit for Sell"); ?></li>
          </ul>
        </div>
      </div>
    </td>
		<td>
      <div class="menu_bar" onmouseover="showDropDownMenu(this)" id=test>        
        <?php echo anchor("posted", "Post your Adv"); ?>
      </div>
    </td>
		<td>
			<div class="menu_bar" style="border-right:none; text-align:right; background:#FFFF99; padding-right:20px">
				<?php echo anchor("login", img(array("src" => "/assets/images/gui/icon_login.png", "width" => "17", "height" => "15")) . " Login"); ?>
				</a>
			</div>
		</td>
	</tr>
</table>