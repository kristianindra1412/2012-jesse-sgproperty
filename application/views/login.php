<?php echo form_open("login/attempt"); ?>
<div style='margin-top:50px;padding:10px;'>
  <table style='border:1px solid black;border-radius:5px;' cellpadding=10 cellspacing=2>
    <tr>
      <td colspan=3> You are an 
        <select name='login_type'>
          <option value='agent'>Agent</option>
          <option value='member'>Member</option>
        </select>
      </td>
    </tr>
    <tr>
      <td> Username </td>
      <td> : </td>
      <td> <input type=text name=login_username /> </td>
    </tr>
    <tr>
      <td> Password </td>
      <td> : </td>
      <td> <input type=password name=login_password /> </td>
    </tr>
    <tr>
    </tr>
    <tr>
      <td colspan="3" align='center'> <input type=submit value='Login'> </td>
    </tr>
  </table>
  <br>
  <div style='text-align:center'>
    Want to join us? Register now as an <?php echo anchor("agents/register", "Agent"); ?> / <?php echo anchor("member/register", "Member"); ?>!
  </div>
</div>
<?php echo form_close(); ?>