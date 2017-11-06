<!DOCTYPE html>
<html>
<title>The Halloween Ball</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<head>
<style>
body {font-family: "Helvetica Neue"}
.myLink {display: none}
input[type=text] {
    width: 200px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 30px;
    background-color: white;
   
    background-position: 5px 5px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.2s ease-in-out;
    transition: width 0.2s ease-in-out;
}

input[type=text]:focus {
    width: 50%;
}

</style>
<body class="w3-light-grey">


<!Do your fuckin programming in between this>
<?php
$name="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name=test_input($_POST["search"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!Dont touch anything outside>

<br><br><br><br><br><br><br><br><br><br>
<center>
<h2>Find Your Date</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<input type="text" name="search" >
</form>
 </center>

<?php 
 $name=strtolower($name);
 $filename = "prom.txt";
 $check = 1;
$temp=1;
if($name=="")
{
 $check=3;
}
 $fp = fopen( $filename, "r" ) or die("Couldn't open $filename");
 while ( ! feof( $fp ) )
 {
  $line = fgets( $fp, 1024 );
  $line=strtolower($line);
  if(stristr($line,$name))
  {
   $check = 2;
if($temp==1)
{
$temp=2;
    print ("<br><br>");
}
print ("<center><h3>");
   $line = ucwords($line);
   $token = strtok($line, " ");
   print $token;
   print " ";
   $token = strtok(" ");
   print $token;
   print " ";
   $token = strtok(" ");
if($token=="1")
{   
 print $token;   
   print "st year";
echo ' 
<img src="http://thehalloweenball.in/dot.png" />';
}   
if($token=="2")
{   
 print $token;   
   print "nd year";
echo ' 
<img src="http://thehalloweenball.in/dot.png" />';
}
if($token=="3")
{   
 print $token;   
   print "rd year";
echo ' 
<img src="http://thehalloweenball.in/dot.png" />';
}
if($token=="4")
{   
 print $token;   
   print "th year";
echo ' 
<img src="http://thehalloweenball.in/dot.png" />';
}
print ("</h3></center>");
  }
 }
 if($check==1)
 {
  print ("<html><br><br><br><br><center><h3>SORRY! Not Found<br> 
          Find someone else</h3></center></html>");
 }

?>
</body>
</head>
</html>