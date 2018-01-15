<?PHP
session_start();
include("connection.php");

$sqlsettings = "SELECT * from admin";
$resultsettings = mysql_query($sqlsettings);
$rowsettings = mysql_fetch_array($resultsettings);

?>
<!DOCTYPE>
<html>
<head>
<title><?PHP echo $rowsettings['ScriptName']?> - About Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/aboutus.css">
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
			<div style="width: 762px; background-colors: rgb(255, 255, 255);">
			<div style="border-top: 1px solid rgb(143, 167, 191); border-left: 1px solid rgb(143, 167, 191); border-right: 1px solid rgb(143, 167, 191);">




				<!-- midlinks + services space -->
					<br style="line-height: 1px;" clear="all">
				<div>
					<div style="border-top: 2px solid #990000; border-bottom: 12px solid #990000; background-color:#990000; text-align: left;">

					</div>
				</div>
				<!-- The topbanner table end's here -->

				<!-- The tab table start's here -->
				<div style="margin: 0px; width: 100%;">
					<div style="width: 180px; background-color: rgb(255, 255, 255); float: left;">
						<div style="border-top: 2px solid rgb(0, 0, 0);">
						<div style="padding: 6px 0pt 0pt 0px; width: 170px; background-color: #FFF7E7" class="smallblack"><div>
						<?PHP
						if(isset($_SESSION['UserID']))
						{
						?>
						<a href="logout.php" class="smallbluelink"><b>Logout</b></a> [<a href="my_profile.php" class="smallblackbold" title="<?PHP echo $_SESSION['LoginID']?>"><?PHP echo $_SESSION['LoginID']?></a>]
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
<td align="center" bgcolor="#FFF7E7" valign="top" width="170"><span style="line-height: 5px;"><br></span>
<!-- LEFT BANNER STARTS HERE -->
<?PHP
 include "myleftbar.php";
?>
<!-- LEFT BANNER ENDS HERE -->
</td>
<td height="1" width="10"><spacer type="block" height="1" width="10"></td>
<td valign="top" align="left"> <p><strong>About Us</strong></p>
  <ul>
<li><font size="2">We at Forever Matrimony pioneered the concept of online matrimony service.
<li>Today, we are the world's largest, most trusted and most successful matrimony website.
<li>Millions of happy marriages happened and continue to happen through FAMM. 
<li>We have been featured in the Limca Book of Records for the highest number of documented marriages online. 
<li>Besides Internet, we also have a strong offline presence across India with over 190+ matrimony branches! 
<li>FAMM is the only group to offer 100% mobile verified profiles, reinforcing the trust that members have on us. 
<li>Our purpose is to build a better India through happy marriages. 
</ul>

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