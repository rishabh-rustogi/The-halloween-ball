<?php ob_start(); ?>
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

</style>
<body class="w3-light-grey">

<?php
$fnameErr = $lname= "";
$fname = $lname = "";
$a=0;
$b=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "Name is required";

  } else {
    $fname = test_input($_POST["fname"]);
    $a=1;
  }

 if (empty($_POST["lname"])) {
    $lnameErr = "Name is required";

  } else {
    $lname = test_input($_POST["lname"]);
    $b=1;
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<div class="backgroundcolor">

<div style="height:340px" align="center"><div class="bgcolor2"><img src="http://thehalloweenball.in/pic.jpg" height="500"></div></div></div>



<style>
.backgroundcolor{
height:500px;
}
.bgcolor2{
background-color:#ff0000;
height:400px;

</style>


<div align="center"><h2>Enter your Name</h2>
<p><span class="error"><font color="red">* required field.</font></span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
First Name: <input type="text" name="fname">
<span class="error"><font color="red">*</font> <?php echo $fnameErr;?>
</span>
<br></br>
Last Name: <input type="text" name="lname">
<span class="error"><font color="red">*</font> <?php echo $lnameErr;?>
</span>
<br></br>
<input type="submit" name="submit" value="Submit">  
</form></div></div>

<?php
session_save_path("/home/snuprom/tmp");
session_start();
$_SESSION['fname'] = $fname;
$_SESSION['lname'] = $lname;
if($a==1 && $b==1)
{ header("Location:http://thehalloweenball.in/check1.php");
}?>
</body>
</html>
<?php ob_end_flush(); ?>
