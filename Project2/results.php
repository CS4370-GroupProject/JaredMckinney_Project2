<!DOCTYPE html>
<html>
<body>

<h1></h1>

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

   
   <?php
         $score = 0;
         if ($_POST["Q1"] == 25) { 
            $score++;
         }
         if ($_POST["Q2"] == "Eating") { 
            $score++;
         }
         if ($_POST["Q3"] == 5) { 
            $score++;
         }
         if ($_POST["Q4"] == "Snake") { 
            $score++;
         }
         if ($_POST["Q5"] == 2) { 
            $score++;
         }
         if ($_POST["Q6"] == 13) { 
            $score++;
         }
         if ($_POST["Q7"] == 36) { 
            $score++;
         }
         if ($_POST["Q8"] == 12) { 
            $score++;
         }
         if ($_POST["Q9"] == 2) { 
            $score++;
         }
         if ($_POST["Q10"] == 12) { 
            $score++;
         }
         if ($_POST["Q11"] == 12) { 
            $score++;
         }
         if ($_POST["Q12"] == 12) { 
            $score++;
         }

         ?>

<p> Thank you for taking the test, <?php echo $_SESSION["name"] ?>. </p><br>
<p> Your score is , 
<?php 
 $x=$score / 12;
 $y=($x*100)/1;
 echo number_format($y, 2);
 ?>%. </p><br>
 
 
<?php
if($_SESSION["age"] <= "20" && $_SESSION["score"] >= "6"){
echo "Great Job! For a " . $_SESSION["age"] . " year old.";
}else if($_SESSION["age"] > "20" && $_SESSION["score"] < "6"){
echo "You suck for a " . $_SESSION["age"] . " year old.";
}
else{
	echo "Not bad for a " . $_SESSION["age"] . " year old.";
}
?>
<br>
<br>
<?php include("bottom.html"); ?>