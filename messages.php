<?PHP
session_start();
if($_SESSION['UserID']=="")
{
	header("location: login.php");
}
include("connection.php");

$sqlsettings = "SELECT * from admin";
$resultsettings = mysql_query($sqlsettings);
$rowsettings = mysql_fetch_array($resultsettings);


$sql = "SELECT * FROM users, user_profile, countries WHERE users.UserID=user_profile.UserID and users.CountryID=countries.CountryID and users.UserID=".$_SESSION['UserID'];
$result = mysql_query($sql,$conn);
$row = @mysql_fetch_array($result);
?>
<!DOCTYPE>
<html>
<head>
<title><?PHP echo $rowsettings['ScriptName']?> - My Messages</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/ajax-v2-inc-mod.js"></script>
<script type="text/javascript" src="js/tool-tip.js"></script>
<script type="text/javascript" src="js/common_002.js"></script>
<script type="text/javascript" src="js/ajax-v2-inc-mod.js"></script>
<link rel="stylesheet" href="css/messages.css">
<script type="text/javascript">
function ConfirmDelete(id)
{
	var result = confirm("Are you sure you want to Delete this Message ?");
	if (result==true)
	{
		window.location = "delete_message.php?id="+id;
	}
}
</script>

</head>

<body topmargin="2" leftmargin="0" marginheight="2" marginwidth="0" background="images/background.jpg">
<script type="text/javascript" src="js/matrimonials-v10.js"></script>
			<center>

				<!-- The top link table starts here -->
				<div style="width: 762px;" align="right">
					<?PHP
					include("topheader.php");
					?>
				</div>
				<!-- The top link table ends here -->

			<!-- The topbanner table start's here -->
			<div style="width: 762px; background-color: rgb(255, 255, 255);">
			<div style="border-top: 1px solid rgb(143, 167, 191); border-left: 1px solid rgb(143, 167, 191); border-right: 1px solid rgb(143, 167, 191);">




				<!-- midlinks + services space -->
					<br style="line-height: 1px;" clear="all">
				<div>
					<div style="border-top: 2px solid #990000; border-bottom: 12px solid #990000; background-color: #990000; text-align: left;">

					</div>
				</div>
				<!-- The topbanner table end's here -->

				<!-- The tab table start's here -->
				<div style="margin: 0px; width: 100%;">
					<div style="width: 180px; background-color: rgb(255, 255, 255); float: left;">
						<div style="border-top: 2px solid rgb(0, 0, 0);">
						<div style="padding: 6px 0pt 0pt 0px; width: 170px; " class="smallblack"><div><a href="logout.php" class="smallbluelink"><b>Logout</b></a> [<a href="my_profile.php" class="smallblackbold" title="<?PHP echo $_SESSION['LoginID']?>"><?PHP echo $_SESSION['LoginID']?></a>]<br>
						<span style="line-height: 2px;"><br></span>
</div>

				</div>
				</div>
				</div>

				<div style="width: 580px; background-color: rgb(255, 255, 255); float: right; text-align: left;">
					<div style="border-top: 2px solid rgb(0, 0, 0); width: 7px; float: left;"></div>
					<div style="width: 130px; float: left;border-top: 2px solid rgb(0, 0, 0);">					<br clear="all">
				  </div>
					<div style="width: 130px; float: left;border-top: 2px solid rgb(0, 0, 0);">					<br clear="all">
				  </div>
					<div style="width: 130px; float: left;border-top: 2px solid rgb(0, 0, 0);">					<br clear="all">
				  </div>
					<div style="border-top: 2px solid rgb(0, 0, 0); width: 30px; float: left;"></div>
					<div style="width: 141px; float: left;border-top: 2px solid rgb(0, 0, 0);">
					</div>
					<div style="border-top: 2px solid rgb(0, 0, 0); width: 12px; float: right;"></div>
				</div>
				<br clear="all">
				</div>

			</div>
			</div>
			<!-- The topbanner table ends here -->
			</center>

<div align="center">
<table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="762">
<tbody><tr>
<td rowspan="2" bgcolor="#8fa7bf" width="1"><spacer type="block" height="1" width="1"></td>
<td height="1" width="5"><spacer type="block" height="1" width="5"></td>
<td align="center" bgcolor="#fff7e7" valign="top" width="170"><span style="line-height: 5px;"><br></span>
<!-- LEFT BANNER STARTS HERE -->
<?PHP
 include "myleftbar.php";
?>
<!-- LEFT BANNER ENDS HERE -->
</td>
<td height="1" width="10"><spacer type="block" height="1" width="10"></td>
<td valign="top">
<center>
<div style="width: 552px;">
	<div style="background: rgb(255, 255, 255) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;">
		<div class="mediumblack" style="width: 550px;">



	<div style="border: 0px solid rgb(0, 0, 0); margin: 0pt 30px; text-align: left;">


			<div style="border-bottom: 1px solid rgb(143, 167, 191); padding: 12px 0px 7px; margin-bottom: 10px;">
				<h2>My Messages</h2>
			</div>



<?PHP
$sqlProduct="select * from messages where messages.RecieverID='".$_SESSION['LoginID']."' order by MessageDate desc";
	$sqlnewmessages="select count(*) as numberofnewmessages from messages where messages.RecieverID='".$_SESSION['LoginID']."' and ReadStatus <> 1";
	$id = "MessageID";
	$pagename = "view_message";
    $resultProduct=mysql_query($sqlProduct);
	$resultnewmessages=mysql_query($sqlnewmessages);
	$row_newmessages = mysql_fetch_array($resultnewmessages);
	$numberofnewmessages = $row_newmessages['numberofnewmessages'];
?>

 <div style="font:'Times New Roman', Times, serif; text-align:center;">
  	<b><? echo $_GET['msg'];?></b>
  </div>


<p align="left"><img src="images/new_msg.jpg"> <strong><?=$numberofnewmessages?> New Messages</strong></p>

<table width="100%" >
									<!-- Start Catetory Admin -->
									<?
										if (mysql_num_rows($resultProduct)!=0){
											$color = 0;
											while($row = mysql_fetch_array($resultProduct))
											{

											if($row['ReadStatus']==1)
											{
											if ($color==0){
													echo "<Tr bgcolor='#fff7e7'>
														<td class='adminvalues' width='35%'><a class='edit2' href='".$pagename.".php?".$id."=".$row[$id]."'>".$row['SenderID']."</a></td>
														<td align='Center' width='55%'><a class='edit2' href='".$pagename.".php?".$id."=".$row[$id]."'>".substr(stripslashes($row['Message']),0,100)."...</a></td>
														<td align='Center' width='10%'><a class='delete2' href='javascript:ConfirmDelete(".$row[$id].");'>DELETE</a> </td>
														</tr>";
														$color = 1;
												}
												else{
													echo "<Tr bgcolor='#fff7e7'>
														<td class='adminvalues' width='35%'><a class='edit2' href='".$pagename.".php?".$id."=".$row[$id]."'>".$row['SenderID']."</a></td>
														<td align='Center' width='55%'><a class='edit2' href='".$pagename.".php?".$id."=".$row[$id]."'>".substr(stripslashes($row['Message']),0,100)."...</a></td>
														<td align='Center' width='10%'><a class='delete2' href='javascript:ConfirmDelete(".$row[$id].");'>DELETE</a> </td>
														</tr>";
														$color = 0;
												}
											}
											else
											{
												if ($color==0){
													echo "<Tr bgcolor='#fff7e7'>
														<td class='adminvalues' width='35%'><a class='edit2' href='".$pagename.".php?".$id."=".$row[$id]."'><b>".$row['SenderID']."</b></a></td>
														<td align='Center' width='55%'><a class='edit2' href='".$pagename.".php?".$id."=".$row[$id]."'><strong>".substr(stripslashes($row['Message']),0,100)."...</strong></a></td>
														<td align='Center' width='10%'><a class='delete2' href='javascript:ConfirmDelete(".$row[$id].");'><strong>DELETE</strong></a> </td>
														</tr>";
														$color = 1;
												}
												else{
													echo "<Tr bgcolor='#fff7e7'>
														<td class='adminvalues' width='35%'><a class='edit2' href='".$pagename.".php?".$id."=".$row[$id]."'><b>".$row['SenderID']."</b></a></td>
														<td align='Center' width='55%'><a class='edit2' href='".$pagename.".php?".$id."=".$row[$id]."'><strong>".substr(stripslashes($row['Message']),0,100)."...</strong></a></td>
														<td align='Center' width='10%'><a class='delete2' href='javascript:ConfirmDelete(".$row[$id].");'><strong>DELETE</strong></a> </td>
														</tr>";
														$color = 0;
												}
											}

											}
													echo "<Tr class='currentData' bgcolor='#cccccc'  height='3'>
														<td> </td>
														<td align='Center'></td>
														<td align='Center'></td>
														</tr>";
														$color = 0;

										}
									?>
								</table>
	<br>

	<div style="padding-left: 127px; text-align: left;" class="mediumblack"></div>





	</div><br>





		</div><br clear="all">
	</div>
</div>
</center>
</td>
<td width="5"><spacer type="block" width="5"></td>
<td rowspan="2" align="right" bgcolor="#8fa7bf" valign="top" width="1"><spacer type="block" width="1"></td>
</tr>
<tr bgcolor="#8fa7bf" valign="top">
	<td colspan="5" height="1"><spacer type="block" height="1" width="1"></td>
</tr>
</tbody></table>
</div>

		<!-- BTM BANNER STARTS-->
		<center>

		<?PHP
			include("footer.php");
		?>
		</center>
</body></html>