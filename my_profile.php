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
if($_POST['countryofbirth']=="")
{
$BirthCountry = 0;
}
else
{
$BirthCountry = $_POST['countryofbirth'];
}
			$insert = "update user_profile set BirthHour='".mysql_escape_string($_POST['timeofbirth_hour'])."', BirthMin='".mysql_escape_string($_POST['timeofbirth_min'])."', BirthSec='".mysql_escape_string($_POST['timeofbirth_sec'])."', CountryOfBirth=".$BirthCountry.", BirthCity=".$_POST['cityofbirth']." where UserID=".$_SESSION['UserID'];

			$resultt = mysql_query($insert);


	header("Location: profile4.php");
	exit();
}
$sql = "SELECT * FROM users, user_profile, countries, religion WHERE users.UserID=user_profile.UserID and users.CountryID=countries.CountryID and users.ReligionID=religion.ReligionID and users.UserID=".$_SESSION['UserID'];
$result = mysql_query($sql,$conn);
$row = @mysql_fetch_array($result);

$sqlpartner = "SELECT * FROM users, partner_profile WHERE users.UserID=partner_profile.UserID and users.UserID=".$_SESSION['UserID'];
$resultpartner = mysql_query($sqlpartner,$conn);
$rowp = @mysql_fetch_array($resultpartner);
?>
<!DOCTYPE>
<html>
<head>
<title>FAMM - My Profile</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/main.css">
</head>

<body topmargin="2" leftmargin="0" marginheight="2" marginwidth="0" background="images/background.jpg">
<script type="text/javascript" src="js/myprofile.js"></script>
<script type="text/javascript" src="js/matrimonials-v10.js"></script>

			<!-- The top link table start's here -->
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
						<div style="padding: 6px 0pt 0pt 0px; width: 170px; background-color: #fff7e7" class="smallblack"><div>
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
						<a href="login.php" class="smallbluelink"><b>Click here to login</b></a>
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
 include "editprofilebox.php"
?>
<!-- LEFT BANNER ENDS HERE -->
</td>
<td height="1" width="10"><spacer type="block" height="1" width="10"></td>
<td align="left" valign="top">
<!-- CENTER STARTS HERE -->


		<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<tbody><tr>
		<td height="7" width="350"><spacer type="block" height="7" width="350"></td>
		<td width="220"><spacer type="block" width="220"></td>
		</tr>

			<tr>
			<td align="left"><h2>My Profile&nbsp;</h2></td>
			<td align="right">&nbsp;		</td>
			</tr>
		<tr><td colspan="2" bgcolor="#8fa7bf" height="1" width="1"><spacer type="block" height="1" width="1"></td></tr>
		<tr><td colspan="2" height="8" width="1"><spacer type="block" height="8" width="1"></td></tr>
		</tbody></table>






<!-- The 1st center content table start's here -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr>
<td height="8" width="243"><spacer type="block" height="8" width="243"></td>
<td rowspan="2" height="8" width="10"><spacer type="block" height="8" width="10"></td>
<td height="8" width="140"><spacer type="block" height="8" width="140"></td>
<td rowspan="2" height="8" width="10"><spacer type="block" height="8" width="10"></td>
<td height="8" width="167" colspan="2"><spacer type="block" height="8" width="167"></td>
</tr>


<tr>
<td valign="top">
<table border="0" cellpadding="0" cellspacing="0" width="95%">
<tbody>

<tr align="left" valign="top">
	<td width="100%" height="20" colspan="2" class="largeblackbold">Name :  <?PHP echo $row['FName']; echo "&nbsp"; echo $row['LName'] ?></td>
</tr>
<tr align="left" valign="top">
	<td width="100%" height="20" colspan="2" class="largeblackbold">Profile ID : <?PHP echo $row['LoginID'] ?></td>
</tr>

<tr>
	<td align="left" nowrap="nowrap" width="4"><img src="images/arrow-grn-4x7.gif" border="0" height="7" hspace="2" width="4"></td>
	<td class="mediumblack" height="22" align="left"><font class="mediumgreenbold" style="color:#990000 ">Posted by:</font> <?PHP echo $row['CreatedBy']?></td>
</tr>
<tr><td colspan="2" bgcolor="#e5e5e5" height="1"></td></tr>
<tr><td colspan="2" bgcolor="#e5e5e5" height="1"></td></tr>
</tbody></table>
<table border="0" cellpadding="0" cellspacing="4" width="95%">
<tbody><tr><td height="1"><spacer type="block" height="1"></td></tr>
<tr>
<td class="smallblack" align="left">

I am <?PHP echo GetAge($row['BirthYear'], $row['BirthMonth'], $row['BirthDate'])?>, <?PHP echo $row['MaritalStatus']?>, <?PHP echo $row['Religion']?> <?PHP echo $row['Gender']?> living in <?PHP

	$sqlstate = "SELECT * FROM user_profile, users, states WHERE users.UserID=user_profile.UserID and users.UserID='".$row['UserID']."' and user_profile.StateID=states.StateID and users.Status=1 and users.ApprovalStatus=1";
$resultstate = mysql_query($sqlstate,$conn);
$rowstate = @mysql_fetch_array($resultstate);
if(@mysql_num_rows($resultstate) != 0)
{
 echo $rowstate['State'].", ";
}

?> <?PHP echo $row['Country']?><br><br><font class="mediumblack">
<?PHP
echo substr(stripslashes($row['AboutYourself']),0,100);
?></font> <a href="#more" class="mediumbluelinksp">More...</a></td>
</tr>
</tbody></table>
</td>

<td align="center" height="210" valign="middle" width="160" style="padding:0 0 0 40px"><div style="border: 1px solid rgb(192, 192, 192); padding: 3px;">
<?PHP
if($row['photo2'] != "")
{
?>
<a href="javascript:popImg('<?=stripslashes($row['photo1'])?>');"><img src="<?PHP echo $row['photo2']?>" border="0" height="200" width="150"></a>
<?PHP
}
else
{
?>
<a href="myphoto.php"><img src="images/photoclicktoupload.gif" border="0" height="200" width="150"></a>
<?PHP
}
?>
</div></td>
</tr>
</tbody></table>
<!-- The 1st center content table end's here -->



<!-- The 2nd center content table start's here -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">

<tbody><tr><td colspan="3" class="mediumblack"><br></td></tr>

<tr>
<td colspan="3" class="largewhitebold" bgcolor="#E473E0" height="22" align="left">&nbsp;
About Myself</td>
</tr>
<tr>
<td colspan="3" height="8"><spacer type="block" height="8" width="1"></td>
</tr>
<tr>
<td valign="top">




<table bgcolor="#FFF7FF" border="0" cellpadding="0" cellspacing="0" width="280">
<tbody><tr align="left" bgcolor="#ffffff">
<td height="16" colspan="5" valign="middle" class="mediumblackbold">&nbsp;&nbsp;My Basics
&nbsp;&nbsp;&nbsp;<a href="edit_personal_profile.php#basics" class="smallgreenlink">Edit</a></td>
</tr>
<tr bgcolor="#ffffff">
<td bgcolor="#8fa7bf" height="1" width="8"><spacer type="block" height="1" width="8"></td>
<td bgcolor="#8fa7bf" height="1" width="106"><spacer type="block" height="1" width="106"></td>
<td bgcolor="#8fa7bf" height="1" width="8"><spacer type="block" height="1" width="8"></td>
<td bgcolor="#8fa7bf" height="1" width="150"><spacer type="block" height="1" width="150"></td>
<td bgcolor="#8fa7bf" height="1" width="8"><spacer type="block" height="1" width="8"></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Age</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo GetAge($row['BirthYear'], $row['BirthMonth'], $row['BirthDate'])?></td>
<td class="mediumblack"><br></td>
</tr>

	<tr>
	<td class="mediumblack"><br></td>
	<td align="left" valign="top" class="mediumblack">Date of Birth</td>
	<td align="left" valign="top" class="mediumblack">:</td>
	<td align="left" valign="top" class="mediumblack"><?PHP echo date("M j, Y",strtotime($row['BirthMonth']."/".$row['BirthDate']."/".$row['BirthYear']))?>

	<br>
		<?PHP
		if ($row['dobstatus']==1)
		{
		?>
		You have chosen to display your date of birth. To change your display option <a href="edit_personal_profile.php" class="mediumbluelinksp">click here</a>
		<?PHP
		}
		else
		{
		?>
			You have chosen not to display your date of birth. To change your display option <a href="edit_personal_profile.php" class="mediumbluelinksp">click here</a>
		<?PHP
		}
		?>
	</td>
	<td class="mediumblack"><br></td>
	</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Marital Status</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['MaritalStatus']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Children</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['HaveChildren']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Height</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['Height']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Complexion</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['Complexion']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Body Type</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['BodyType']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Blood Group</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['BloodGroup']?></td>
<td class="mediumblack"><br></td>
</tr>

<tr bgcolor="#ffffff">
<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>
<tr>
<td colspan="5" bgcolor="#ffffff" height="8"><spacer type="block" height="8" width="1"></td>
</tr>
<tr align="left">
<td height="16" colspan="5" valign="middle" bgcolor="#ffffff" class="mediumblackbold">&nbsp;&nbsp;My Education &amp; Career
&nbsp;&nbsp;&nbsp;<a href="edit_personal_profile.php#education" class="smallgreenlink">Edit</a></td>
</tr>
<tr>
<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>

<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Education</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['Education']?> - <?PHP echo $row['EducationIn']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Profession</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['Profession']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Annual Income</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['AnnualIncome']?></td>
<td class="mediumblack"><br></td>
</tr>

<tr>
<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>
<tr>
<td colspan="5" bgcolor="#ffffff" height="8"><spacer type="block" height="8" width="1"></td>
</tr>
<tr align="left">
<td height="16" colspan="5" valign="middle" bgcolor="#ffffff" class="mediumblackbold">&nbsp;&nbsp;My Astro Info
&nbsp;&nbsp;<a href="edit_profile3.php" class="smallgreenlink">Edit</a> &nbsp; &nbsp; &nbsp; &nbsp;
</td>
</tr>
<tr>
<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>

<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Sun Sign</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><div id="star"></div>
<script type="text/javascript">
document.getElementById('star').innerHTML=starsigns[StarSign(<?PHP echo $row['BirthDate']?>,<?PHP echo $row['BirthMonth']?>)];
</script></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Rasi (moon sign)</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><div id="star"></div><?PHP echo $row['Rasi']?>
</td>
<td class="mediumblack"><br></td>
</tr>

<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Nakshatra</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><div id="star"></div><?PHP echo $row['Nakshatra']?>
</td>
<td class="mediumblack"><br></td>
</tr>

<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Astroprofile</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><div id="star"></div>
<?PHP
if ($row['Astroprofile']!="")
{
?>
<a href="<?PHP echo $row['Astroprofile']?>" target="_blank">Click to see Astroprofile</a>
<?PHP
}
?>
</td>
<td class="mediumblack"><br></td>
</tr>
	<tr>
<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>
</tbody></table>

</td>
<td height="1" width="10"><spacer type="block" height="1" width="10"></td>
<td valign="top">

<table bgcolor="#FFF7FF" border="0" cellpadding="0" cellspacing="0" width="280">
<tbody><tr align="left" bgcolor="#ffffff">
<td height="16" colspan="5" valign="middle"><font class="mediumblackbold">&nbsp;&nbsp;My Religious &amp; Social Background</font>&nbsp;&nbsp;&nbsp;<a href="edit_personal_profile.php#religion" class="smallgreenlink">Edit</a></td>
</tr>
<tr bgcolor="#ffffff">
<td bgcolor="#8fa7bf" height="1" width="8"><spacer type="block" height="1" width="8"></td>
<td bgcolor="#8fa7bf" height="1" width="106"><spacer type="block" height="1" width="106"></td>
<td bgcolor="#8fa7bf" height="1" width="8"><spacer type="block" height="1" width="8"></td>
<td bgcolor="#8fa7bf" height="1" width="150"><spacer type="block" height="1" width="150"></td>
<td bgcolor="#8fa7bf" height="1" width="8"><spacer type="block" height="1" width="8"></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Religion</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['Religion']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Caste / Sect</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['Caste']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Sub caste / sect</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['SubCaste']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Mother Tongue</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['MotherTongue']?><br></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Family Values</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['FamilyValues']?></td>
<td class="mediumblack"><br></td>
</tr>

<tr>
<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>
<tr>
<td colspan="5" bgcolor="#ffffff" height="8"><spacer type="block" height="8" width="1"></td>
</tr>
<tr align="left">
<td height="16" colspan="5" valign="middle" bgcolor="#ffffff" class="mediumblackbold">&nbsp;&nbsp;My Cultural Background &nbsp; &nbsp;<a href="edit_profile2.php#Culturalbackground" class="smallgreenlink">Edit</a></td>
</tr>
<tr>
<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>

<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Country of Birth</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP
$sql2 = "SELECT Country FROM user_profile, countries WHERE user_profile.CountryOfBirth=countries.CountryID";
$result2 = mysql_query($sql2,$conn);
$row2 = @mysql_fetch_array($result2);
echo $row2['Country']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Grew up in</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack">
<?PHP
$grewupin1 = explode("|",$row['GrewUpIn']);
$a=0;
for($x=0; $x < count($grewupin1); $x++)
{
	if($grewupin1[$x]!="")
	{
		$sqlCountry = "SELECT * FROM countries where CountryID=".$grewupin1[$x];
		$resultCountry = mysql_query($sqlCountry, $conn);
		$rowCountry = @mysql_fetch_array($resultCountry);
		if($a==0)
		{
			echo $rowCountry['Country'];
			$a=1;
		}
		else
		{
			echo ", ".$rowCountry['Country'];
		}
	}
}
?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Personal Values</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['PersonalValues']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Can speak</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo str_replace("|",", ",$row['SpokenLanguages'])?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>
<tr>
	<td colspan="5" bgcolor="#ffffff" height="8"><spacer type="block" height="8" width="1"></td>
</tr>

<tr align="left" bgcolor="#ffffff">
	<td height="16" colspan="5" valign="middle" class="mediumblackbold">&nbsp;&nbsp;My Location &nbsp;&nbsp;&nbsp;<a href="edit_personal_profile.php#location" class="smallgreenlink">Edit</a></td>
</tr>
<tr bgcolor="#ffffff">
	<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>
<tr>
	<td class="mediumblack"><br></td>
	<td align="left" valign="top" class="mediumblack">Current Residence</td>
	<td align="left" valign="top" class="mediumblack">:</td>
	<td align="left" valign="top" class="mediumblack"><?PHP

	$sqlstate = "SELECT * FROM user_profile, users, states WHERE users.UserID=user_profile.UserID and users.UserID='".$row['UserID']."' and user_profile.StateID=states.StateID and users.Status=1 and users.ApprovalStatus=1";
$resultstate = mysql_query($sqlstate,$conn);
$rowstate = @mysql_fetch_array($resultstate);
if(@mysql_num_rows($resultstate) != 0)
{
 echo $rowstate['State'].", ";
}

	?> <?PHP echo $row['Country']?></td>
	<td class="mediumblack"><br></td>
</tr>
<tr>
	<td class="mediumblack"><br></td>
	<td align="left" valign="top" class="mediumblack">Residency Status</td>
	<td align="left" valign="top" class="mediumblack">:</td>
	<td align="left" valign="top" class="mediumblack"><?PHP echo $row['ResidencyStatus']?></td>
	<td class="mediumblack"><br></td>
</tr>
<tr bgcolor="#ffffff">
	<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>
<tr>
<td colspan="5" bgcolor="#ffffff" height="8"><spacer type="block" height="8" width="1"></td>
</tr>
<tr align="left" bgcolor="#ffffff">
	<td height="16" colspan="5" valign="middle" class="mediumblackbold">&nbsp;&nbsp;My Lifestyle
&nbsp;&nbsp;&nbsp;<a href="edit_personal_profile.php#lifestyle" class="smallgreenlink">Edit</a></td>
</tr>
<tr bgcolor="#ffffff">
	<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Diet &nbsp;</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['Diet']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Drink</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['Drink']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Smoke</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['Smoke']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr bgcolor="#ffffff">
<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>

<!-- FAMILY BLOCK ST -->
<tr>
	<td colspan="5" bgcolor="#ffffff" height="8"><spacer type="block" height="8" width="1"></td>
</tr>
<tr align="left" bgcolor="#ffffff">
	<td height="16" colspan="5" valign="middle" class="mediumblackbold">&nbsp;&nbsp;My Family
&nbsp;&nbsp;&nbsp;<a href="edit_profile2.php#family" class="smallgreenlink">Edit</a></td>
</tr>
<tr bgcolor="#ffffff">
	<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Father</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['Father']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Mother</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['Mother']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Brother(s)</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['Brothers']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">&nbsp;&nbsp;&nbsp;&nbsp;of which married</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['MarriedBrothers']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Sister(s)</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['Sisters']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">&nbsp;&nbsp;&nbsp;&nbsp;of which married</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $row['MarriedSisters']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr bgcolor="#ffffff">
<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>

<!-- FAMILY BLOCK END -->
<!-- location -->
</tbody></table>

</td>
</tr>
</tbody></table>
<br>
<!-- The 2nd center content table end's here -->

<!-- Hobbies table newly added-->

<table border="0" cellpadding="2" cellspacing="0" width="100%">
<tbody><tr align="left">
<td height="16" colspan="5" valign="middle" class="mediumblackbold">&nbsp;&nbsp;Hobbies, Interests &amp; more
&nbsp;&nbsp;&nbsp;<a href="edit_hobbies_profile.php" class="smallgreenlink">Edit</a>
</td>
</tr>
<tr>
<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>
<tr bgcolor="#FFF7FF" valign="top">
<td height="8" width="8"><spacer type="block" height="8" width="8"></td>
<td width="153" align="left" class="mediumblack">My Hobbies</td>
<td class="mediumblack" align="left" width="30">:</td>
<td width="364" align="left" class="mediumblack"><?PHP echo str_replace("|",", ",$row['Hobbies'])?></td>
<td height="8" width="8"><spacer type="block" height="8" width="8"></td>
</tr>
<tr bgcolor="#FFF7FF" valign="top">
<td><br></td>
<td align="left" class="mediumblack">My Interests</td>
<td class="mediumblack" align="left">:</td>
<td align="left" class="mediumblack"><?PHP echo str_replace("|",", ",$row['Interests'])?></td>
<td><br></td>
</tr>
<tr bgcolor="#FFF7FF" valign="top">
<td><br></td>
<td align="left" class="mediumblack">My Favorite Music</td>
<td class="mediumblack" align="left">:</td>
<td align="left" class="mediumblack"><?PHP echo str_replace("|",", ",$row['FavoriteMusic'])?></td>
<td><br></td>
</tr>
<tr bgcolor="#FFF7FF" valign="top">
<td><br></td>
<td align="left" class="mediumblack">My Favorite Reads</td>
<td class="mediumblack" align="left">:</td>
<td align="left" class="mediumblack"><?PHP echo str_replace("|",", ",$row['FavoriteReads'])?></td>
<td><br></td>
</tr>
<tr bgcolor="#FFF7FF" valign="top">
<td><br></td>
<td align="left" class="mediumblack">My Preferred Movies</td>
<td class="mediumblack" align="left">:</td>
<td align="left" class="mediumblack"><?PHP echo str_replace("|",", ",$row['PreferredMovies'])?></td>
<td><br></td>
</tr>
<tr bgcolor="#FFF7FF" valign="top">
<td><br></td>
<td align="left" nowrap="nowrap" class="mediumblack">My Sports / Fitness Activities</td>
<td class="mediumblack" align="left">:</td>
<td align="left" class="mediumblack"><?PHP echo str_replace("|",", ",$row['Sports'])?></td>
<td><br></td>
</tr>
<tr bgcolor="#FFF7FF" valign="top">
<td><br></td>
<td align="left" class="mediumblack">My Favorite Cuisine</td>
<td class="mediumblack" align="left">:</td>
<td align="left" class="mediumblack"><?PHP echo str_replace("|",", ",$row['FavoriteCuisine'])?></td>
<td><br></td>
</tr>
<tr bgcolor="#FFF7FF" valign="top">
<td><br></td>
<td align="left" class="mediumblack">My Preferred Dress Style</td>
<td class="mediumblack" align="left">:</td>
<td align="left" class="mediumblack"><?PHP echo str_replace("|",", ",$row['PreferredDress'])?></td>
<td><br></td>
</tr>

<tr>
<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>
</tbody></table><br>

<!-- Hobbies table newly added-->


<!-- The 3rd center content table start's here -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr align="left">
<td height="22" colspan="3" bgcolor="#E473E0" class="largewhitebold">&nbsp;<a name="more"></a>
More About Myself</td>
</tr>
<tr>
<td height="8" width="8"><spacer type="block" height="8" width="8"></td>
<td height="8" width="554"><spacer type="block" height="8" width="554"></td>
<td height="8" width="8"><spacer type="block" height="8" width="8"></td>
</tr>
<tr align="left">
<td height="16" colspan="3" valign="middle" class="mediumblackbold">&nbsp;&nbsp;My Personality, Long-Term Goals, Partner Expectations, etc
&nbsp;&nbsp;&nbsp;<a href="edit_personal_profile.php#moreprofile1" class="smallgreenlink">Edit</a>
</td>
</tr>
<tr>
<td colspan="3" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>

<tr bgcolor="#FFF7FF">
<td height="1" width="8"><spacer type="block" height="1" width="8"></td>
<td align="left" valign="top" class="mediumblack">
<?PHP
echo stripslashes(str_replace("\n","<br>", $row['AboutYourself']));
?>
</td>
<td height="1" width="8"><spacer type="block" height="1" width="8"></td>
</tr>

<tr>
<td colspan="3" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>
<tr>
<td colspan="3" height="8"><spacer type="block" height="8" width="1"></td>
</tr>
<tr align="left">
<td height="16" colspan="3" valign="middle" class="mediumblackbold">&nbsp;&nbsp;My Family
&nbsp;&nbsp;&nbsp;
<a href="edit_profile2.php#family" class="smallgreenlink">Edit</a>
</td>
</tr>
<tr>
<td colspan="3" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>

<tr bgcolor="#FFF7FF">
<td height="1" width="8"><spacer type="block" height="1" width="8"></td>
<td align="left" valign="top" class="mediumblack">
<?PHP
echo stripslashes(str_replace("\n","<br>", $row['AboutFamily']));
?></td>
<td height="1" width="8"><spacer type="block" height="1" width="8"></td>
</tr>
<tr>
<td colspan="3" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>
</tbody></table><br>
<!-- The 3rd center content table end's here -->







<!-- The 4th center content table start's here -->


<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr align="left">
<td height="22" colspan="3" bgcolor="#E473E0" class="largewhitebold">&nbsp;
My Preferred Partner</td>
</tr>


<tr>
<td colspan="3" height="8"><spacer type="block" height="8" width="1"></td>
</tr>
<tr>
<td valign="top">

<table bgcolor="#FFF7FF" border="0" cellpadding="0" cellspacing="0" width="280">
<tbody><tr align="left" bgcolor="#ffffff">
<td height="16" colspan="5" valign="middle" class="mediumblackbold">&nbsp;&nbsp;
<?PHP
if($row['Gender']=="Male")
{
$gender = "Her";
}
else
{
$gender = "His";
}
echo $gender;
?>
 Basics &nbsp;&nbsp;<a href="edit_partner_profile.php#basics" class="smallgreenlink">Edit</a></td>
</tr>
<tr bgcolor="#ffffff">
<td bgcolor="#8fa7bf" height="1" width="8"><spacer type="block" height="1" width="8"></td>
<td bgcolor="#8fa7bf" height="1" width="106"><spacer type="block" height="1" width="106"></td>
<td bgcolor="#8fa7bf" height="1" width="8"><spacer type="block" height="1" width="8"></td>
<td bgcolor="#8fa7bf" height="1" width="150"><spacer type="block" height="1" width="150"></td>
<td bgcolor="#8fa7bf" height="1" width="8"><spacer type="block" height="1" width="8"></td>
</tr>

<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Age</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $rowp['AgeFrom']?> to <?PHP echo $rowp['AgeTo']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Marital Status</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo str_replace("|",", ",$rowp['MaritalStatus'])?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Children</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo str_replace("|",", ",$rowp['HaveChildren'])?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Height</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $rowp['HeightFrom']?> to <?PHP echo $rowp['HeightTo']?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Complexion</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo str_replace("|",", ",$rowp['Complexion'])?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Body Type</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo str_replace("|",", ",$rowp['BodyType'])?></td>
<td class="mediumblack"><br></td>
</tr>

<tr bgcolor="#ffffff">
<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>
<tr bgcolor="#ffffff">
<td colspan="5" height="8"><spacer type="block" height="8" width="1"></td>
</tr>
<tr align="left" bgcolor="#ffffff">
<td height="16" colspan="5" valign="middle" class="mediumblackbold">&nbsp;&nbsp;<?PHP echo $gender?> Lifestyle&nbsp;&nbsp;<a href="edit_partner_profile.php#lifestyle" class="smallgreenlink">Edit</a></td>
</tr>
<tr bgcolor="#ffffff">
<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>

<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Diet </td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo str_replace("|",", ",$rowp['Diet'])?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Drink</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo str_replace("|",", ",$rowp['Drink'])?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Smoke</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo str_replace("|",", ",$rowp['Smoke'])?></td>
<td class="mediumblack"><br></td>
</tr>

<tr bgcolor="#ffffff">
<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>
</tbody></table>


</td>
<td height="1" width="10"><spacer type="block" height="1" width="10"></td>
<td valign="top">



<table bgcolor="#FFF7FF" border="0" cellpadding="0" cellspacing="0" width="280">
<tbody><tr align="left" bgcolor="#ffffff">
<td height="16" colspan="5" valign="middle" class="mediumblackbold">&nbsp;&nbsp;<?PHP echo $gender?> Religious &amp; Social Background &nbsp;&nbsp;<a href="edit_partner_profile.php#religion" class="smallgreenlink">Edit</a></td>
</tr>
<tr bgcolor="#ffffff">
<td bgcolor="#8fa7bf" height="1" width="8"><spacer type="block" height="1" width="8"></td>
<td bgcolor="#8fa7bf" height="1" width="106"><spacer type="block" height="1" width="106"></td>
<td bgcolor="#8fa7bf" height="1" width="8"><spacer type="block" height="1" width="8"></td>
<td bgcolor="#8fa7bf" height="1" width="150"><spacer type="block" height="1" width="150"></td>
<td bgcolor="#8fa7bf" height="1" width="8"><spacer type="block" height="1" width="8"></td>
</tr>
<?PHP
$arrRel = explode("|",$rowp['Religion']);
for($x=0; $x < count($arrRel); $x++)
{
$sql = "SELECT Religion FROM religion WHERE ReligionID=".$arrRel[$x];
$resultrel = mysql_query($sql,$conn);
$rowrel = @mysql_fetch_array($resultrel);
if($x==0)
{
$religion = $rowrel['Religion'];
}
else
{
$religion .= ", ".$rowrel['Religion'];
}
}
if($religion=="")
{
$religion = "Doesn't Matter";
}
?>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Religion</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $religion?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
</tr><tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Mother Tongue</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo str_replace("|",", ",$rowp['MotherTongue'])?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Family Values</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo str_replace("|",", ",$rowp['FamilyValues'])?></td>
<td class="mediumblack"><br></td>
</tr>

<tr bgcolor="#ffffff">
<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>
<tr bgcolor="#ffffff">
<td colspan="5" height="8"><spacer type="block" height="8" width="1"></td>
</tr>
<tr align="left" bgcolor="#ffffff">
<td height="16" colspan="5" valign="middle" class="mediumblackbold">&nbsp;&nbsp;<?PHP echo $gender?> Education &amp; Career &nbsp;&nbsp;<a href="edit_partner_profile.php#education" class="smallgreenlink">Edit</a></td>
</tr>
<tr bgcolor="#ffffff">
<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Education</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo str_replace("|",", ",$rowp['EducationLevel'])?> - <?PHP echo str_replace("|",", ",$rowp['EducationArea'])?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Profession</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo str_replace("|",", ",$rowp['Profession'])?></td>
<td class="mediumblack"><br></td>
</tr>

<tr bgcolor="#ffffff">
<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>
<tr bgcolor="#ffffff">
<td colspan="5" height="8"><spacer type="block" height="8" width="1"></td>
</tr>
<tr align="left" bgcolor="#ffffff">
<td height="16" colspan="5" valign="middle" class="mediumblackbold">&nbsp;&nbsp;<?PHP echo $gender ?> Location &nbsp;&nbsp;<a href="edit_partner_profile.php#location" class="smallgreenlink">Edit</a></td>
</tr>
<tr bgcolor="#ffffff">
<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>
<?PHP
$arrRel = explode("|",$rowp['CountryOfResidence']);
for($x=0; $x < count($arrRel); $x++)
{
$sql = "SELECT Country FROM countries WHERE CountryID=".$arrRel[$x];
$resultrel = mysql_query($sql,$conn);
$rowrel = @mysql_fetch_array($resultrel);
if($x==0)
{
$religion = $rowrel['Country'];
}
else
{
$religion .= ", ".$rowrel['Country'];
}
}
if($religion=="")
{
$religion = "Doesn't Matter";
}
?>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Country of Residence</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $religion?></td>
<td class="mediumblack"><br></td>
</tr>
<?PHP
$arrRel = explode("|",$rowp['StateOfResidence']);
for($x=0; $x < count($arrRel); $x++)
{
$sql = "SELECT State FROM states WHERE StateID=".$arrRel[$x];
$resultrel = mysql_query($sql,$conn);
$rowrel = @mysql_fetch_array($resultrel);
if($x==0)
{
$religion = $rowrel['State'];
}
else
{
$religion .= ", ".$rowrel['State'];
}
}
if($religion=="")
{
$religion = "Doesn't Matter";
}
?>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">State of Residence</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo $religion?></td>
<td class="mediumblack"><br></td>
</tr>
<tr>
<td class="mediumblack"><br></td>
<td align="left" valign="top" class="mediumblack">Residency Status</td>
<td align="left" valign="top" class="mediumblack">:</td>
<td align="left" valign="top" class="mediumblack"><?PHP echo str_replace("|",", ",$rowp['ResidencyStatus'])?></td>
<td class="mediumblack"><br></td>
</tr>

<tr bgcolor="#ffffff">
<td colspan="5" bgcolor="#8fa7bf" height="1"><spacer type="block" height="1" width="1"></td>
</tr>
</tbody></table>


</td>
</tr>


</tbody></table>
<!-- The 4th center content table end's here -->



<br>


<div class="largewhitebold bluepatch" style="background-color:#E473E0; ">My Contact Details</div>

<div class="main">

<div style="padding: 4px 0pt 2px 6px;"><b>My Contact Number</b> &nbsp;&nbsp;&nbsp;<a href="edit_personal_profile.php#contact" class="smallgreenlink">Edit</a></div>

<div class="container" style="background-color:#FFF7FF;">
<?PHP
if($row['PhoneStatus']=="telephone" && $row['DisplayContactStatus']=="Show")
{
?>
<div class="div1">Telephone</div>
	<div class="div2">:</div>
	<div class="div3"><?PHP echo stripslashes($row['CountryCode'])?> <?PHP echo stripslashes($row['AreaStdCode'])?> <?PHP echo stripslashes($row['PhoneNumber'])?></div>
	<br clear="all">
<?PHP
}
else if($row['PhoneStatus']!="telephone" && $row['DisplayContactStatus']=="Show")
{
?>

	<div class="div1">Mobile</div>
	<div class="div2">:</div>
	<div class="div3"><?PHP echo stripslashes($row['CountryCode'])?> <?PHP echo stripslashes($row['PhoneNumber'])?></div>
	<br clear="all">
<?PHP
}
?>
	<div class="div1">Contact Person</div>
	<div class="div2">:</div>
	<div class="div3"><?PHP echo stripslashes($row['ContactPersonName'])?></div>
	<br clear="all">

	<div class="div1">Relationship with the member</div>
	<div class="div2">:</div>
	<div class="div3"><?PHP echo stripslashes($row['ContactPersonRelationship'])?></div>
	<br clear="all">

	<div class="div1">Convenient Time to Call</div>
	<div class="div2">:</div>
	<div class="div3"><?PHP echo stripslashes($row['ConvenientCallTime'])?></div>
	<br clear="all">
			<div class="div1" style="float: left; width: 133px;">Display Option</div>
		<div class="div2" style="float: left; width: 4px;">:</div>
		<div style="width: 413px; float: right;">
		<?PHP
		if (stripslashes($row['DisplayContactStatus'])=="Show")
		{
		?>
		You have chosen to display your contact details to other members. To change your display option <a href="edit_personal_profile.php#contact" class="mediumbluelinksp">click here</a>
		<?PHP
		}
		else
		{
		?>
			You have chosen not to display your contact details to other members. To change your display option <a href="edit_personal_profile.php#contact" class="mediumbluelinksp">click here</a>
		<?PHP
		}
		?>
		</div>
		<br clear="all">

</div>
</div>


<!-- The 5th center content table start's here -->
<br>
<br>








<!-- CENTER STARTS HERE --></td>
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