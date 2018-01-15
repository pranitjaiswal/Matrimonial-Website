<?PHP

session_start();
include("connection.php");

$sqlsettings = "SELECT * from admin";
$resultsettings = mysql_query($sqlsettings);
$rowsettings = mysql_fetch_array($resultsettings);

$referral_code = $_REQUEST['referral_code'];


if($referral_code)
{
	$user_sql = "SELECT LoginID,email FROM users WHERE referral_code='$referral_code'";
	$user_result = mysql_query($user_sql,$conn);
	$row	= mysql_fetch_row($user_result);
	$main_userid = $row[0];
	$main_user_email = $row[1];
}

$emailMsg = "";
if($_POST['continue']=="true")
{
$sql = "SELECT * FROM users WHERE EmailAddress='".mysql_escape_string($_POST['email'])."'";
$result = mysql_query($sql,$conn);

$sql2 = "SELECT * FROM users WHERE LoginID='".mysql_escape_string($_POST['login'])."'";
$result2 = mysql_query($sql2,$conn);

if($_REQUEST['dobstatus']=="true")
{
	$dobstatus = 1;
}
else
{
	$dobstatus = 0;
}

$age = GetAge(mysql_escape_string($_POST['year']), mysql_escape_string($_POST['month']), mysql_escape_string($_POST['day']));

		if (@mysql_num_rows($result)!=0){
			$emailMsg = "This E-Mail Address is ALREADY REGISTRED";
			}



		else if(@mysql_num_rows($result2)!=0){
			$emailMsg = "This Profile ID is ALREADY REGISTRED";
			}

		else if($age < 18 || $age > 60)
		{
			$emailMsg = "You cannot be register with us, if your age is less than 18 or greater than 60";
		}

		else{
			if(!$referral_code)
			{
				$referral_new_code = md5(uniqid(rand(), true));
				$referral_string = "Please send the following referral link to your friends so that your profile gets activated <a href='".$rowsettings['url']."/register.php?referral_code=$referral_new_code'>Click here to Register</a>";
			}
			else
			{
				$referral_new_code 	= '';
				$referral_string 	= '';
				//Finding the main user userID
				$user_sql = "SELECT LoginID FROM users WHERE referral_code='$referral_code'";
				$user_result = mysql_query($user_sql,$conn);
				$row	= mysql_fetch_row($user_result);
				$main_userid = $row[0];
				$insert_sql = "INSERT INTO users_referral(UserID, newuserID, recorddate)
							VALUES ('".$main_userid."',	'".mysql_escape_string($_POST['login'])."',	NOW())";
				//echo $insert_sql;
				$result_sql = mysql_query($insert_sql);
			}
		}
}
		
$login=$_POST['login'];
$email=$_POST['email'];
$password1=$_POST['password1'];
$gender=$_POST['gender'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$community=$_POST['community'];
$countryofresidence=$_POST['countryofresidence'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];

mysql_query("INSERT INTO users(Fname, Lname, LoginID, EmailAddress, Password, Gender, BirthDate, BirthMonth, BirthYear, ReligionID, CountryID, AddedDate, Age, dobstatus)
VALUES('$fname', '$lname', '$login', '$email', '$password1', '$gender', '$day', '$month', '$year', '$community', '$countryofresidence', NOW(),'".$age."',".$dobstatus.")");
	
	$msg = 0;
	$c=1;
	if($c=1){
		$query = "SELECT * from users WHERE LoginID='$login'";		
		
		$result = mysql_query ($query);
		if(@mysql_num_rows($result) != 0)
		{
			$row = @mysql_fetch_array($result);
			
			$result5 = mysql_query($query5);
			$msg = 1;

			$_SESSION['UserID_reg']=$row['UserID'];
			$_SESSION['LoginID_reg']=$row['LoginID'];
			$_SESSION['EmailAddress_reg']=$row['EmailAddress'];
			$insert = "insert into user_profile(UserID) VALUES(".$row['UserID'].")";
			
			$resultt = mysql_query($insert);
			
			$insert = "insert into partner_profile(UserID) VALUES(".$row['UserID'].")";			
			
			$resultt = mysql_query($insert);

		}
	}
	
header("location: register2.php");
?>