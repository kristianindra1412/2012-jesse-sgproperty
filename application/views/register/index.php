<?=form_open("register/register")?>
<table cellpadding=5 cellspacing=2>
  <caption><h2>Register yourself as Agent / Owner</h2></caption>
  <tbody>
    <tr>
      <td>Code</td>
      <td>:</td>
      <td><input type=text></td>
    </tr>

    <tr>
      <td>Name</td>
      <td>:</td>
      <td><input type=text id=agent_name name=agent_name></td>
    </tr>

    <tr>
      <td>Title</td>
      <td>:</td>
      <td><input type=text id=agent_title name=agent_title></td>
    </tr>

    <tr>
      <td>Company</td>
      <td>:</td>
      <td><input type=text id=agent_title name=agent_title></td>
    </tr>

    <tr>
      <td>Description</td>
      <td>:</td>
      <td><textarea></textarea></td>
    </tr>

    <tr>
      <td>Specialities</td>
      <td>:</td>
      <td><input type=text></td>
    </tr>

    <tr>
      <td>Contact Number</td>
      <td>:</td>
      <td><input type=text></td>
    </tr>

    <tr>
      <td>Contact Email</td>
      <td>:</td>
      <td><input type=email></td>
    </tr>

    <tr>
      <td>Photo</td>
      <td>:</td>
      <td><input type=file /></td>
    </tr>

    <tr>
      <td>Agency Pict</td>
      <td>:</td>
      <td><input type=text /></td>
    </tr>
  </tbody>
</table>
<?=form_close()?>
