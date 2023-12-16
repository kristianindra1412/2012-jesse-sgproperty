<?php
  echo form_open("agents/registering");
?>
<h2 style="text-align: center;">Agent Register</h2>
<table>
  <tbody>
	<tr>
      <td>*Title</td>
      <td>:</td>
      <td>
		<select>
			<option value="Mr" />Mr.</option>
			<option value="Mrs" />Mrs.</option>
			<option value="Ms" />Ms.</option>
		</select>
	  </td>
    </tr>
	
    <tr>	
      <td>*Name</td>
      <td>:</td>
      <td><input type=text id=agent_name name=agent_name required /></td>
    </tr>

    <tr>
      <td>Company</td>
      <td>:</td>
      <td><input type=text id=agent_company name=agent_company /></td>
    </tr>

    <tr>
      <td>*Contact Number</td>
      <td>:</td>
      <td><input type=text required /></td>
    </tr>

    <tr>
      <td>*Contact Email</td>
      <td>:</td>
      <td><input type=email required /></td>
    </tr>
    
    <tr>
      <td>*Password</td>
      <td>:</td>
      <td><input type=password id=agent_password name=agent_password required /></td>
    </tr>
    
    <tr>
      <td>*Repeat Password</td>
      <td>:</td>
      <td><input type=password id=agent_password2 name=agent_password2 required /></td>
    </tr>
    
    <tr>
      <td colspan=3 align=center>
        <input type=submit />
      </td>
    </tr>
  </tbody>
</table>
<?php
  echo form_close();
?>