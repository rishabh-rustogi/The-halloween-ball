<?php
session_save_path("/home/snuprom/tmp");
session_start();
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$fname=strtolower($fname);
$lname=strtolower($lname);
$check = 0;
$filename = "prom.txt";
$fp = fopen( $filename, "r" ) or die("Couldn't open $filename");
while ( ! feof( $fp ) )
{
 $line= fgets( $fp, 1024 );
 $line=strtolower($line);
 if(stristr($line,$fname) && stristr($line,$lname))
 {
  check==1;
  header("Location:http://thehalloweenball.in/check2.php");
  exit;
 } 
}
if(check==0)
{ 
header("Location:http://thehalloweenball.in/index.php");
exit;
}

?>

