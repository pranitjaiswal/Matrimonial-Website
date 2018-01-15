<?php
session_start();
include("connection.php");

$sqlsettings = "SELECT * from admin";
$resultsettings = mysql_query($sqlsettings);
$rowsettings = mysql_fetch_array($resultsettings);
?>

<!DOCTYPE>
<html>
<head>
<?php include("common/includes_static.php"); ?>
<?php include("common/constants.php"); ?>
<title>FAMM</title>

</head>

<body style="margin: 0px;">
<a name="Matrimonials"></a>
<a name="Matrimonial"></a>
<center>

          <?php include("header.php")?>
        
	<div class="width smallcnt">
		<!-- MAIN CREATIVE ST-->

		<div style="width: 760px; padding-top: 0px;">
		<table border="0" cellpadding="0" cellspacing="0" width="760">


			<tr>

			
		<td ><img src="images/banner.jpg" width=100% height=30% ></td>

		</tr></table>

	</div>
	<!-- MAIN CREATIVE EN-->
</div>
<!-- REGISTER/UPGRADE CONTENT ST-->
<div class="width smallcnt" style="border-top: 1px solid rgb(255, 255, 255); background: transparent url(images/main-bg.gif) repeat-x scroll left top; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;">

		<div id="threeStep" class="left tleft">

			<div id="step1" class="left" style="border-right: 1px solid rgb(255, 255, 255); width: 184px; height: 67px;" onmouseover="change_image(1,'rollin','images/');" onmouseout="change_image(1,'rollout','images/')">
				<div style="padding-top: 13px;">
					<a href="register.php"><img id="digit1" src="images/one-off.gif" alt="" align="left" border="0" height="43" hspace="13" width="43"></a> <a href="register.php"><font style="color:#FFF7E0; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold;">Register</font></a><br><a href="register.php" style="color:#606060;">
					and create your<br> free profile.</a>
				</div>
			</div>
			<div id="step2" class="left" style="border-right: 1px solid rgb(255, 255, 255); width: 184px; height: 67px;" onmouseover="change_image(2,'rollin','images/');" onmouseout="change_image(2,'rollout','images/');">
				<div style="padding-top: 13px;">
					<a href="search.php" style="color:#606060;"><img id="digit2" src="images/two-off.gif" alt="" align="left" border="0" height="43" hspace="13" width="43"><font style="color:#FFF7E0; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold;">Search</font><br>
					for members who<br> meet your criteria.</a>
				</div>
			</div>
			<div id="step3" class="left" style="border-right: 1px solid rgb(255, 255, 255); width: 184px; height: 67px;" onmouseover="change_image(3,'rollin','images/');" onmouseout="change_image(3,'rollout','images/');">
				<div style="padding-top: 13px;">
					<a href="communicate.php" style="color:#606060;"><img id="digit3" src="images/three-off.gif" alt="" align="left" border="0" height="43" hspace="13" width="43">
					<font style="color:#FFF7E0; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold;">Contact</font><br>
					members you like via<br>email or phone.</a>
				</div>
			</div>
		</div><!-- three step en -->

		<div class="left" style="padding: 20px 0pt 0pt 36px;">
			<a href="register.php"><img src="images/advSearcButton.png" alt="Register Free!" title="Register Free!" border="0" height="30" vspace="0" width="140"></a>
		</div>

<br clear="all">
</div>
<div class="width smallcnt" style="background-image:url(images/background.jpg)">
<div class="left graytxt" style=""></div>
	<div class="left graytxt" style="width: 760px">

<table cellspacing="0" cellpadding="0" border="0" class="left tleft smallcnt graytxt" style="padding: 10px; border: 1px solid #FFBD7B;">
    <tr>
    <td>
<p style="font-size:12px;color:#A35804;font-weight:normal;text-align:justify;font-family:Sans-Serif,Verdana">
    Marriage is not only a traditional ritual, but also an important Event in an individual's life. Earlier, elders only were taking part in selecting the alliances & it was being carried out in their traditional ways. Since marriages were performed at very early age & youngsters were not mature enough. Hence elders decision was final & marriages were easier. But now time has changed. For various reasons, family life has become more & more complicated. Nowadays youth take an active role in choosing their life partner. Elders also play a role in the interest of the family. Nowadays younger generation is giving importance to many aspects. The choice of life partner has become extremely difficult. Nowadays the youth give importance to economic stability, education, and intelligence & hence the selection of the partner is not that easy.
<br><br>
So, to provide assistance we have started Forever Matrimony. Forever Matrimony has adopted a unique Online + Offline mode to locate the most suitable match for you by employing all the boons of the latest computer technology, Print and personal contacts.<br><br>
famm.3eeweb.com, one of India's well known and most successful matrimonial service, has been trusted since 2003 to help the India's community to find their soul-mates. It is one of the fastest growing matrimonial portals dedicated towards building matrimonial alliances and creating successful marriages. Today, hundreds of thousands of people have met their life partners through our revolutionary matchmaking service. Our company pioneered online matrimonial services in 2003 and continues to lead the matrimony services.<br><br>
Our mission is to provide people with a superior matchmaking experience by expanding the opportunities available to meet potential life partners and build fulfilling relationships. We strive to do this through superior technology, in-depth research, valuable matrimonial content & services, and above all the highest quality of customer service delivered with a sense of warmth, understanding, respect, and company spirit.<br><br>
Millions of happy marriages happened and continue to happen through FAMM We have been featured in the Limca Book of Records for the highest number of documented marriages online. 
</p>
</td>
    </tr>
    </table>


	</div>
</div><br clear="all">
	</div><span class="brseven"><br>


<!-- Footer starts -->
	<?php
	include("footer.php");
	?>
<!-- Footer ends -->
</span></center>
</body></html>