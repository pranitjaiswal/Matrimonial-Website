<?PHP

$server = "mysql.2freehosting.com";//2freehosting
$user = "u331807676_famm";
$password = "matrimonial@5013";
$dbName = "u331807676_matdb";
error_reporting(0);
$conn = mysql_connect($server,$user,$password,$dbName)
	or die("There was a problem connecting to MySQL. Please try again later.");

		if (!@mysql_select_db($dbName, $conn))
		{
			die ("There was a problem connecting to the database. Please try again later.");
		}
		return $conn;

	function GetAge($y, $m, $d) {
  $Year = $y;
  $Month = $m;
  $Day = $d;
  $YearDifference  = date("Y") - $Year;
  $MonthDifference = date("m") - $Month;
  $DayDifference   = date("d") - $Day;
  if ($DayDifference < 0 || $MonthDifference < 0) {
    $YearDifference--;
  }
  return $YearDifference;
}
?>