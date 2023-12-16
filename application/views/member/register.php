<?php
  echo form_open("member/registering");
?>
<h2 style="text-align: center;">Member Register</h2>
<table>
  <tbody>
    <tr>
      <td>*Name</td>
      <td>:</td>
      <td><input type=text id=member_name name=member_name required /></td>
    </tr>

    <tr>
      <td>*Contact Email</td>
      <td>:</td>
      <td><input type=email id=member_email name=member_email required /></td>
    </tr>

	<tr>
      <td>*Contact Number</td>
      <td>:</td>
      <td><input type=number id=member_phone name=member_phone required /></td>
    </tr>
	
    <tr>
      <td>*Password</td>
      <td>:</td>
      <td><input type=password id=member_password name=member_password required /></td>
    </tr>
    
    <tr>
      <td>*Repeat Password</td>
      <td>:</td>
      <td><input type=password id=member_password2 name=member_password2 required /></td>
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