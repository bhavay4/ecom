<form action="includes/changepass.inc.php" method="post">
	
    <table width="500" align="center">
    	
        <tr align="center">
        	<td colspan="4"><h2>Change your password:</h2></td>
        </tr>
        
        <tr>
        	<td align="right">Enter Current Password:</td>
            <td><input type="password" name="old_pass" required/></td>
        </tr>
        
        <tr>
        	<td align="right">Enter New Password:</td>
            <td><input type="password" name="new_pass" required/></td>
        </tr>
        
        <tr>
        	<td align="right">Enter New Password Again:</td>
            <td><input type="password" name="new_pass_again" required/></td>
        </tr>
    	
        <tr align="center">
        	<td colspan="4"><input type="submit" name="change_pass" value="Change Password" /></td>
        </tr>
    
    
    
    </table>

</form>