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
<title><?PHP echo $rowsettings['ScriptName']?> - Terms and Conditions</title>
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
<td valign="top" align="left"> <p><strong>Terms and Conditions</strong></p>
<div style="height:320; width:490; border:2px solid #ccc; font:14px/14px Georgia, Garamond, Serif; overflow:scroll; margin:10px auto; font-family:raleway">
<h4>Terms</h4>
In order to use the famm.3eeweb.com Site ("Site"), you must register as a member of the Site ("Member"). The Member or any users using the Site agree to be bound by these Terms of Use ("Agreement"). If you wish to become a Member and promote/ advertise your profile to other Members and make use of the famm.3eeweb.com service ("Service"), read these Terms of Use and follow the instructions in the Registration process. The Service shall interalia assist you in promoting and making your profile visible to other Members to drive higher ‘Accepts’ from relevant members. This Agreement sets out the legally binding terms for your use of the Site and membership. This Agreement may be modified by famm.3eeweb.com from time to time.
<br>
<h4>Eligibility.</h4>
To register as a member of famm.3eeweb.com or use this Site, you must be of legal marriageable age as per the laws of India (currently, 18 years or over for females and 21 years or over for males). The famm.3eeweb.com site is only to facilitate personal advertisement for lawful matrimonial alliance between persons who are legally competent to enter into matrimony under the laws to which they are subject. Membership in the Service is void where prohibited. By using this Site, you represent and warrant that you have the right, authority, and legal capacity to enter into this Agreement and that you are not prohibited or prevented by any applicable law for the time being in force or any order or decree or injunction from any court, tribunal or any such competent authority restraining you from entering into matrimony. You also agree to abide by all of the terms and conditions of this Agreement. If at any time famm.3eeweb.com is of the opinion (in its sole discretion) or has any reason to believe that you are not eligible to become a member or that you have made any misrepresentation about your eligibility, famm.3eeweb.com reserves the right to forthwith terminate your membership and / or your right to use the Service without any refund to you of any of your unutilized subscription fee.
<br>
<h4>Term.</h4>
You may terminate your membership at any time, for any reason by writing to famm.3eeweb.com. In the event you terminate your membership, you will not be entitled to a refund of any unutilized subscription fees, if any, paid by you, except where otherwise stated in writing. famm.3eeweb.com may terminate your access to the Site and/or your membership for any reason effective upon sending notice to you at the email address as provided you in your application for membership or such other email address as you may later provided to famm.3eeweb.com. If famm.3eeweb.com terminates your membership for breach of terms of this Agreement, you will not be entitled to any refund of any unused Subscription fees, if any, paid by you. Certain provisions of this Agreement including sections 4, 5, 7 and sections 9 to14, of this Agreement shall remain effective even on termination. Term for the paid Membership would be in accordance with the type of membership undertaken.
<br>
<h4>Non-Commercial Use by Members.</h4>
The famm.3eeweb.com Site is for the personal use of individual members to advertise and promote their profiles for the purpose of generating Accepts from relevant matches and cannot be used in connection with any commercial endeavors. This includes providing links to other web sites, whether deemed competitive to famm.3eeweb.com or otherwise. Organizations, companies, and/or businesses cannot become Members of famm.3eeweb.com and should not use the famm.3eeweb.com Service or Site for any purpose. Illegal and/or unauthorized uses of the Site, including unauthorized framing of or linking to the Site will be investigated, and appropriate legal action will be taken, including without limitation, civil, criminal, and injunctive redress.
<br>
<h4>Other Terms of Use by Members.</h4>
famm.3eeweb.com reserves the right in it's sole discretion to review the activity & status of each account & block the account of a member based on such review.
You hereby confirm that as on date of this registration, you do not have any objection to receiving emails, messages and calls from famm.3eeweb.com and members of famm.3eeweb.com as long as you are a registered member of famm.3eeweb.com. This consent shall supersede any preferences set by you with or registration done with the Do Not Disturb (DND Register)/ National Customer Preference Register (NCPR). This consent extends to emails, messages or calls relating but not limited to phone number verification, the provision of matrimonial advertising service, matrimonial enquiries and promotions.
Multiple profiles of the same person are not allowed on famm.3eeweb.com. famm.3eeweb.com reserves the right to deactivate all multiple profiles without any refund of subscription fees.
Except for the purpose of promoting/advertising your profile for matrimonial purposes, you cannot engage in advertising to, or solicitation of, other Members to buy or sell any products or services through the Service. You will not transmit any chain letters or junk email to other famm.3eeweb.com Members. Although famm.3eeweb.com cannot monitor the conduct of its Members off the famm.3eeweb.com Site, it is also a violation of these rules to use any information obtained from other members in order to harass, abuse, or harm another person, or in order to contact, advertise to, solicit, or sell to any Member without their prior explicit consent.
In order to protect famm.3eeweb.com and/or our Members from any abuse / misuse, famm.3eeweb.com reserves the right to take appropriate steps as it deems appropriate in its sole discretion in order to protect interest of other Members.
You cannot use any automated processes, including IRC Bots, EXE's, CGI or any other programs/scripts to view content on or communicate / contact / respond / interact with famm.3eeweb.com and/or its members.
famm.3eeweb.com reserves the right to screen communications/advertisements that you may send to other Member(s) and also regulate the same by deleting unwarranted/obscene communications/advertisements at any time at its sole discretion without prior notice to any Member.
famm.3eeweb.com Members are expected to exercise simple precautions for their privacy and safety. A suggestive guideline of such precautions is enlisted under “Security Tips”. By becoming a Member you hereby agree to abide and adhere to the said Tips.
famm.3eeweb.com Members who subscribe to the famm.3eeweb.com Select Service hereby, unconditionally and irrevocably confirm that you have read terms and conditions and agree to abide by them.
Proprietary Rights in the Content on famm.3eeweb.com
famm.3eeweb.com owns and retains all proprietary rights in the famm.3eeweb.com Site and the famm.3eeweb.com Service. The Site contains the copyrighted material, trademarks, and other proprietary information of famm.3eeweb.com, and its licensors. Except for that information which is in the public domain such as member profile or for which permission has been obtained from the user, you cannot copy, modify, publish, transmit, distribute, perform, display, or sell any such proprietary information. Any such act or an attempted act on your part shall constitute a violation of this Agreement and your membership is liable to be terminated forthwith by famm.3eeweb.com without refund of any of your unused Subscription fees. We also reserve our right to take legal action (civil and/or criminal) wherever applicable for any violations.
<br>
<h4>Content Posted on the Site.</h4>
You understand and agree that famm.3eeweb.com may delete any listing, content, communication, photos or profiles (collectively, "Content") that in the sole judgment of famm.3eeweb.com violate this Agreement or which might be offensive, illegal, or that might violate the rights, harm, or threaten the safety of either famm.3eeweb.com and/or its Members.
With respect to Content you submit or make available for inclusion on publicly accessible areas of the Site including but not limited to your contact details, you hereby unconditionally and irrevocably grant to famm.3eeweb.com the license to use, distribute, reproduce, modify, adapt, publicly perform and publicly display such Content on the Site and to FAMM Centre members from time to time.
You shall use the Services only to market and promote your profile and to reach out to other Members for the purpose of driving an ‘Accept’ from relevant matches. You understand and hereby agree that all information, data, text, photographs, graphics, communications, tags, or other Content whether publicly posted or privately transmitted or otherwise made available to famm.3eeweb.com or FAMM Centre members, are the sole responsibility of the person from whom such Content originated and shall be at the member's/person's sole risks and consequences. This means that you (and not famm.3eeweb.com) are solely responsible for all Content that you upload, post, email, transmit or otherwise make available via the Service. famm.3eeweb.com does not control the Content posted via the Service and, as such, does not guarantee the accuracy, integrity or quality of such Content. Under no circumstances will famm.3eeweb.com be liable in any way for any Content, including, but not limited to, any errors or omissions in any Content, or any loss or damage of any kind incurred as a result of the use of any Content posted, emailed, transmitted or otherwise made available via the Service. famm.3eeweb.com reserves the right to verify the authenticity of Content posted on the Site. In exercising this right, famm.3eeweb.com may ask you to provide any documentary or other form of evidence supporting the Content you post on the Site. If you fail to produce such evidence, famm.3eeweb.com may, in its sole discretion, terminate your Membership without a refund.
By posting Content/ advertising to any public area of famm.3eeweb.com, you automatically grant, and you represent and warrant that you have the right to grant, to famm.3eeweb.com, and other famm.3eeweb.com Members, an irrevocable, perpetual, non-exclusive, fully-paid, worldwide license to use, copy, perform, display, and distribute such information and content and to prepare derivative works of, or incorporate into other works, such information and content, and to grant and authorize sublicenses of the foregoing.
The following is an indicative list of the kind of Content that is illegal or prohibited on the Site. famm.3eeweb.com will investigate and take appropriate legal action in its sole discretion against anyone who violates this Agreement, including without limitation, removing the offending communication / Content from the Service and terminating the Membership of such violators without a refund.
Illegal and prohibitive Content includes Content which:
is blatantly offensive to the community, such as Content that promotes racism, bigotry , hatred or physical harm of any kind against any group or individual;
harasses or advocates harassment of another person;
involves the transmission of "junk mail", "chain letters," or unsolicited mass mailing or "spamming";
promotes information that you know is false, misleading or promotes illegal activities or conduct that is abusive, threatening, obscene, defamatory or libelous;
promotes an illegal or unauthorized copy of another person's copyrighted work, such as providing pirated computer programs or links to them, providing information to circumvent manufacture-installed copy-protect devices, or providing pirated music or links to pirated music files;
contains restricted or password only access pages, or hidden pages or images (those not linked to or from another accessible page) ;
displays pornographic or sexually explicit material of any kind;
provides material that exploits people under the age of 18 in a sexual or violent manner, or solicits personal information from anyone under 18;
provides instructional information about illegal activities such as making or buying illegal weapons, violating someone's privacy, or providing or creating computer viruses;
solicits passwords or personal identifying information for commercial or unlawful purposes from other users; and
engages in commercial activities and/or sales without our prior written consent such as contests, sweepstakes, barter, advertising, and pyramid schemes.
You must use the famm.3eeweb.com Service in a manner consistent with any and all applicable local, state, and federal laws, rules and regulations.
You cannot include in your Member profile, visible to other members, any telephone numbers, street addresses, URL's, and email addresses.
<br>
<h4>Copyright Policy.</h4>
You cannot post, distribute, or reproduce in any way any copyrighted material, trademarks, or other proprietary information without obtaining the prior written consent of the owner of such proprietary rights. Without limiting the foregoing, if you believe that your work has been copied and posted on the famm.3eeweb.com service in a way that constitutes copyright infringement, please provide us with the following information:
an electronic or physical signature of the person authorized to act on behalf of the owner of the copyright interest;
a description of the copyrighted work that you claim has been infringed;
a description of where the material that you claim is infringing is located on the our Site;
your address, telephone number, and email address;
a written statement by you that you have a good faith belief that the disputed use is not authorized by the copyright owner, its agent, or the law;
a statement by you, made under penalty of perjury, that the above information in your Notice is accurate and that you are the copyright owner or authorized to act on the copyright owner's behalf.
Notice of claims of copyright infringement can be sent to us in writing to the Mumbai address located under the Help/Contact section on the site.
<br>
<h4>Member Disputes.</h4>
You are solely responsible for your advertisement/communications with other famm.3eeweb.com Members. famm.3eeweb.com reserves the right, but has no obligation, to monitor disputes between you and other Members. famm.3eeweb.com also reserves the right to take appropriate action against errant members. However, famm.3eeweb.com is not obliged to share such action with other members, including complainants. famm.3eeweb.com expressly disclaims any responsibility or liability for any transactions or interactions between the members inter-se.
<br>
<h4>Privacy.</h4> 
Use of the famm.3eeweb.com Site and/or the famm.3eeweb.com Service is governed by our Privacy Policy.
<br>
<h4>Disclaimers.</h4>
famm.3eeweb.com is not responsible for any incorrect or inaccurate Content/listing posted on the Site or in connection with the famm.3eeweb.com Service, whether caused by Users, Members or by any of the equipment or programming associated with or utilized in the Service, nor for the conduct of any User and/or Member of the famm.3eeweb.com Service whether online or offline.
famm.3eeweb.com assumes no responsibility for any error, omission, interruption, deletion, defect, delay in operation or transmission, communications line failure, theft or destruction or unauthorized access to, or alteration of, User and/or Member communications or any communications by famm.3eeweb.com to its Members.
famm.3eeweb.com is not responsible for any problems or technical malfunction of any telephone network or lines, computer on-line-systems, servers or providers, computer equipment, software, failure of email or players on account of technical problems or traffic congestion on the Internet or at any web site or combination thereof, including injury or damage to Users and/or Members or to any other person's computer related to or resulting and/or in connection with the famm.3eeweb.com Service.
Under no circumstances will famm.3eeweb.com be responsible for any loss or damage resulting from anyone's use of the Site or the Service and/or any Content posted on the famm.3eeweb.com Site or transmitted to famm.3eeweb.com Members.
The exchange of matrimonial profile(s) through or by "famm.3eeweb.com" is not a matrimonial offer and/or recommendation from/by famm.3eeweb.com. famm.3eeweb.com shall not be responsible for any loss or damage to any individual arising out of, or subsequent to, any relations (including but not limited to matrimonial relations) established pursuant to the use of famm.3eeweb.com.
The Site and the Service are provided "AS-IS" and famm.3eeweb.com expressly disclaims any warranty of fitness for a particular purpose or non-infringement. famm.3eeweb.com cannot guarantee and does not promise any specific results from use of the Site and/or the famm.3eeweb.com Service.
famm.3eeweb.com expressly disclaims any liability or responsibility whatsoever and howsoever arising as a result of any Content/listing posted on the Site / made available to famm.3eeweb.com by any Members or the users of the Site or any third party.
famm.3eeweb.com does not assume any responsibility or liability for any illegal Content posted on the Site by any Members, users or any third party.
All liability, whether civil or criminal arising out of any Content that is Posted on the Site will be of that Member / user / third party who has Posted such Content and famm.3eeweb.com reserves its right to claim damages from such Member/ user / third party that it may suffer as a result of such Content Posted on the Site. famm.3eeweb.com does not claim ownership of Content you submit or make available for inclusion on the Service.
<br>
<h4>Limitation on Liability.</h4>
In no event will famm.3eeweb.com be liable to you or any third person for any indirect, consequential, exemplary, incidental, special or punitive damages, including also lost profits arising from your use of the Site or the famm.3eeweb.com Service, even if famm.3eeweb.com has been advised of the possibility of such damages. Notwithstanding anything to the contrary contained herein, famm.3eeweb.com's liability to you for any cause whatsoever, and regardless of the form of the action, will at all times be limited to the amount paid, if any, by you to famm.3eeweb.com, for the Service during the term of membership.
Jurisdiction.
If there is any dispute about or involving the Site and/or the Service, by using the Site, you unconditionally agree that all such disputes and/or differences will be governed by the laws of India and shall be subject to the exclusive jurisdiction of the Competent Courts in Mumbai, India only.
Indemnity.
You agree to indemnify and hold famm.3eeweb.com, its subsidiaries, affiliates, officers, agents, and other partners and employees, fully indemnified and harmless from any loss, liability, claim, or demand, including reasonable attorney's fees, made by any third party due to or arising out of your use of the Service in violation of this Agreement and/or arising from a breach of these Terms of Use and/or any breach of your representations and warranties set forth above and/or any fraudulent act on your part.
Other.
By becoming a Member of the famm.3eeweb.com service, you agree to receive certain specific email from famm.3eeweb.com and/or its group sites. You can unsubscribe at any time for any reason quickly and easily by clicking on the unsubscribe link enclosed in the mail. You can also manage your subscription to these emails using the My Alert Manager option.
This Agreement, accepted upon use of the Site and further affirmed by becoming a Member of the famm.3eeweb.com service, contains the entire agreement between you and famm.3eeweb.com regarding the use of the Site and/or the Service. If any provision of this Agreement is held invalid, the remainder of this Agreement shall continue in full force and effect.
famm.3eeweb.com is a trademark of People Interactive (I) Pvt. Ltd.
<br>
By becoming a member of famm.3eeweb.com and/or using the Services of the Site, you unconditionally and irrevocably confirm that you have read and understood the above provisions and agree to abide by them.
<br><br>
Please contact us with any questions regarding this service agreement.
</div>
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