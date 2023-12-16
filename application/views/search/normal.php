<?php echo form_open("search/result"); ?>
<table cellpadding=5 cellspacing=2>
  <caption><h2>Search Property</h2></caption>
  <!--
  - By MRT (maybe pake checkbox, dipisah2kan berdasar line merah ijo kuning ungu)
- By aircon/no
- By fully furnished/no
- By agent/owner
- By cobroke welcome/no
- By district (think again soal hubungannya ama MRT, seharusnya sih terpisah)

Optional:
- By property type (property type itu nantinya 2NG -> 2 room New Generation, etc etc)
- By jumlah bedroom & bathroom
-->

  <tbody>
    <tr>
      <td>Rent / Sell</td>
      <td>:</td>
      <td>
        <select name=search_status>
          <option value=*>Any</option>
          <option value=rent>Rent</option>
          <option value=sell>Sell</option>
        </select>
      </td>
    </tr>

    <tr>
      <td>Property Type</td>
      <td>:</td>
      <td>
        <select name=search_type>
          <option value=*>Any</option>
          <option value=hdb>HDB</option>
          <option value=cnd>Condo</option>
          <option value=apt>Apartment</option>
          <option value=lnd>Landed House</option>
        </select>
      </td>
    </tr>
    
    <tr>
      <td>Price (SGD)</td>
      <td>:</td>
      <td> 
        <input type=number min=0 step=5 max=100000 value=0 maxlength=6 size=4 style='text-align: right;' /> - 
        <input type=number min=0 step=5 max=100000 value=0 maxlength=6 size=4 style='text-align: right;' /> (0 = Don't care)
      </td>
    </tr>

    <tr valign=top>
      <td>Aircon</td>
      <td>:</td>
      <td>
        <select name=search_aircon>
          <option value=*>Any</option>
          <option value=Y>Yes</option>
          <option value=N>No</option>
        </select>
      </td>
    </tr>
    
    <tr valign=top>
      <td>Furnishing</td>
      <td>:</td>
      <td>
        <input type="checkbox" value="*" name='search_furnishing'> Any <br>
        <input type="checkbox" value="F" name='search_furnishing'> Full <br>
        <input type="checkbox" value="P" name='search_furnishing'> Partial <br>
        <input type="checkbox" value="U" name='search_furnishing'> Unfurnished 
      </td>
    </tr>
    
    <tr valign=top>
      <td>Mediator</td>
      <td>:</td>
      <td>
        <select name=search_mediator>
          <option value=*>Any</option>
          <option value=agent>Agent</option>
          <option value=owner>Owner</option>
        </select>
      </td>
    </tr>
    
    <tr>
      <td>CoBroke Welcome</td>
      <td>:</td>
      <td>
        <input type=radio name=search_cobroke value=Y checked> Yes 
        <input type=radio name=search_cobroke value=N> No
      </td>
    </tr>
    
    <tr valign='top'>
      <td>MRT</td>
      <td>:</td>
      <td align=left><?php echo $mrt_list; ?></td>
    </tr>
    
    <tr valign='top'>
      <td>District</td>
      <td>:</td>
      <td align=left><?php echo $district_list; ?></td>
    </tr>
    
    <tr>
      <td>Bedroom</td>
      <td>:</td>
      <td><input type=number name=search_bedroom min=0 step=1 max=9 value=0 maxlength=1 size=1 /> (0 = Don't care)</td>
    </tr>
    
    <tr>
      <td>Bathroom</td>
      <td>:</td>
      <td><input type=number name=search_bathroom min=0 step=1 max=9 value=0 maxlength=1 size=1 /> (0 = Don't care)</td>
    </tr>
    <tr>
      <td colspan="3" align=center>
        <input type="submit">
      </td>
    </tr>
  </tbody>
</table>
<?php echo form_close(); ?>
