<?php
session_start();
?>
<?php include("top.html"); ?>

<! JARED DO YOUR PHP coding here to make sure their inputs are correct>
<! Each Question is worth 1 point I already did the algorithm below to calculate their score you
   Just need to find out how many point they got... Once you got the number is this code 
   $_SESSION["score"] = (the number of their score); 
   if you use this code it would make things eaiser for you because i already set up things with that variable
   >












<p> Thank you for taking the test, <?php echo $_SESSION["name"] ?>. </p><br>
<p> Your score is , 
<?php 
 $score = $_SESSION["score"];
 $x=$score / 12;
 $y=($x*100)/1;
 echo number_format($y, 2);
 ?>%. </p><br>
 
 
<?php
if($_SESSION["age"] <= "20" && $_SESSION["score"] >= "6"){
echo "Great Job! For a " . $_SESSION["age"] . " year old.";
}
if($_SESSION["age"] > "20" && $_SESSION["score"] < "6"){
echo "You suck for a " . $_SESSION["age"] . " year old.";
}
else{
	echo "Not bad for a " . $_SESSION["age"] . " year old.";
}
?>
<br>
<br>
<?php include("bottom.html"); ?>