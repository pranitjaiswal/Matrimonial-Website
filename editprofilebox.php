<table bgcolor="#d7d7d7" border="0" cellpadding="2" cellspacing="1" width="130">
	<tbody><tr bgcolor="#ffffff">
		<td align="left"><img src="images/arrow-profile.gif" align="middle" border="0" height="5" hspace="0" width="6">&nbsp; <a href="edit_personal_profile.php#contact" class="smallbluelink" style="color:#000066; "><b>Edit Contact Details</b></a></td>
	</tr>
	<tr bgcolor="#ffffff">
		<td align="left"><img src="images/arrow-profile.gif" align="middle" border="0" height="5" hspace="0" width="6">&nbsp; <a href="edit_personal_profile.php#basics" class="smallbluelink" style="color:#000066; ">Edit Personal Profile</a></td>
	</tr>
	<tr bgcolor="#ffffff">
		<td align="left"><img src="images/arrow-profile.gif" align="middle" border="0" height="5" hspace="0" width="6">&nbsp; <a href="edit_partner_profile.php" class="smallbluelink" style="color:#000066; ">Edit Partner Profile</a></td>
	</tr>
	<tr bgcolor="#ffffff">
		<td align="left"><img src="images/arrow-profile.gif" align="middle" border="0" height="5" hspace="0" width="6">&nbsp; <a href="myphoto.php" class="smallbluelink" style="color:#000066; ">
		<?PHP
		if($row['photo1']!="")
		{
		echo "Edit Photo";
		}
		else
		{
		echo "Add Photo";
		}
		?>
		</a></td>
	</tr>
	<tr bgcolor="#ffffff">
		<td align="left"><img src="images/arrow-profile.gif" align="middle" border="0" height="5" hspace="0" width="6">&nbsp; <a href="javascript:ConfirmDelete();" class="smallbluelink" style="color:#000066; ">Delete Profile</a></td>
	</tr>
	</tbody></table>