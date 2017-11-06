<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<?php
// define variables and set to empty values
$fname = $lname = $gender = $year = "";
$filename="prom.txt";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $year = test_input($_POST["year"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<center><h1>Submit DATA</h1></center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  First Name: <input type="text" name="fname">
  <br><br>
  Last Name : <input type="text" name="lname">
  <br><br>
  Year (1,2,3,4): <input type="text" name="year">
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <br><br>
  <input type="submit" name="submit" value="ADD">  
</form>

<?php
if($fname!="" && $lname!="" && $year!="" && $gender!="")
{
 $fp = fopen( $filename, "a" ) or die("Couldn't open $filename");
 fwrite( $fp,$fname);
 fwrite( $fp," ");
 fwrite( $fp,$lname);
 fwrite( $fp," ");
 fwrite( $fp,$year);
 fwrite( $fp," ");
 fwrite( $fp,$gender);
 fwrite( $fp,"\n");
 fclose($fp);
 print "<h3>File uploaded</h3>";
 print "<br>";
 print $fname;
 print "<br>";
 print $lname;
 print "<br>";
 print $year;
 print "<br>";
 print $gender;
}
?>

</body>
</html>