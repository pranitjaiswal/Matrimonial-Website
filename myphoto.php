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


if($_POST['continue']=="true")
{
include("thumb.php") ;

		if (trim($_FILES['myfiles']['name'][0])!="")
		{

		if(trim($_POST['photo1'])!="")
		{
			unlink(trim($_POST['photo1']));
		}

		if(trim($_POST['photo2'])!="")
		{
			unlink(trim($_POST['photo2']));
		}

		if(trim($_POST['photo3'])!="")
		{
			unlink(trim($_POST['photo3']));
		}
		$adid=$_SESSION['UserID'];
		$file_dir = "memberphotos/";
		$file1 = $file_dir."img".$adid."_1".$_FILES['myfiles']['name'][0];
		move_uploaded_file($_FILES['myfiles']['tmp_name'][0], $file1);
		$ext=strtolower(substr(strrchr($file1,"."),1));

		$thumbfile="memberphotos/photo2".$adid."_1".$_FILES['myfiles']['name'][0];
		save_scaled($file1,$thumbfile,$ext,150,200);

		$thumbfile2="memberphotos/photo3".$adid."_2".$_FILES['myfiles']['name'][0];
		save_scaled($file1,$thumbfile2,$ext,60,60);

		$query2="update user_profile set photo1='".mysql_escape_string($file1)."', photo2='".mysql_escape_string($thumbfile)."', photo3='".mysql_escape_string($thumbfile2)."' where UserID=".$adid;
		$result2=mysql_query($query2);
		}
	header("Location: my_profile.php");
	exit();
}
$sql = "SELECT * FROM users, user_profile, countries WHERE users.UserID=user_profile.UserID and users.CountryID=countries.CountryID and users.UserID=".$_SESSION['UserID'];
$result = mysql_query($sql,$conn);
$row = @mysql_fetch_array($result);
?>
<!DOCTYPE>
<html>
<head>
<title><?PHP echo $rowsettings['ScriptName']?> - Your Photo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/ajax-v2-inc-mod.js"></script>
<script type="text/javascript" src="js/tool-tip.js"></script>
<script type="text/javascript" src="js/common_002.js"></script>
<script type="text/javascript" src="js/ajax-v2-inc-mod.js"></script>
<link rel="stylesheet" href="css/myphoto.css">
<link rel="stylesheet" href="css/main.css">
<script type="text/javascript" src="js/myphoto.js"></script>
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
						<div style="padding: 6px 0pt 0pt 0px; width: 170px; " class="smallblack"><div>
						<?PHP
						if($_SESSION['UserID']!="")
						{
						?>
						<a href="logout.php" class="smallbluelink"><b>Logout</b></a> [<a href="my_profile.php" class="smallblackbold" title="<?PHP echo $_SESSION['LoginID']?>"><?PHP echo $_SESSION['LoginID']?></a>]
						<?PHP
						}
						else
						{
						?>
						<a href="login.php" class="smallbluelink"><b>Login here >></b></a>
						<?PHP
						}
						?>
						<br>
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
				<h2>Your Photo</h2>
			</div>


		<!-- PAGE STYLE ST -->

		<!-- PAGE STYLE EN -->
	<form method="post" name="frmastro" action="myphoto.php" enctype="multipart/form-data" style="margin: 0px;">
<input type="hidden" name="continue" value="true">
	<div class="largewhitebold bluepatch" style="color:#990000; "><b>My Photo</b></div>

	<table  border="0" cellpadding="6" cellspacing="0">
	<tbody>
	<tr>
		<td><em>*</em><b>Your Photo</b></td>
		<td><input type="file" name="myfiles[]">
			<input type="hidden" name="photo1" value="<?PHP echo stripslashes($row['photo1'])?>">
			  <input type="hidden" name="photo2" value="<?PHP echo stripslashes($row['photo2'])?>">
			  <input type="hidden" name="photo3" value="<?PHP echo stripslashes($row['photo3'])?>">
			  <?PHP
			  if($row['photo2']!="")
			  {
			  ?>
			  <img src="<?=$row['photo2']?>" align="top">
			  <?PHP
			  }
			  ?>
		</td>
	</tr>

	</tbody></table>
	<br>

	<div style="padding-left: 127px; text-align: left;" class="mediumblack"></div>


	<table border="0" cellpadding="6" cellspacing="0">
	<tbody><tr height="60">
 		<td ><br></td>
		<td >
			<input src="images/submit.gif" style="width: 76px; height: 22px;" border="0" type="image">
		</td>
	</tr>
	</tbody></table>

</form>



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