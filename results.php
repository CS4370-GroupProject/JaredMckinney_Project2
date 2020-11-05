<?php
session_start();
?>

<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="style.css"/>
   </head>
   <body>
      <?php 

         $score = 0;

         $q1 = $_POST["Q1"];
         $q2 = $_POST["Q2"];
         $q3 = $_POST["Q3"];
         $q4 = $_POST["Q4"];
         $q5 = $_POST["Q5"];
         $q6 = $_POST["Q6"];
         $q7 = $_POST["Q7"];
         $q8 = $_POST["Q8"];
         $q9 = $_POST["Q9"];
         $q10 = $_POST["Q10"];
         $q11 = $_POST["Q11"];
         $q12 = $_POST["Q12"];

         if(!isset($q1) OR !isset($q2) OR !isset($q3) OR !isset($q4) OR !isset($q5) OR !isset($q6) OR !isset($q7) OR !isset($q8) OR !isset($q9) OR !isset($q10) OR !isset($q11) OR !isset($q12)){
            exit("<h1>Error! Invalid Data.</h1>
            <p>We're sorry. You missed a question. Please go back and complete the form.</p>");
         }
         if($q1 == "25"){
            $score++;
         }
         if($q2 == "Eating"){
            $score++;
         }
         if($q3 == "5"){
            $score++;
         }
         if($q4 == "Snake"){
            $score++;
         }
         if($q5 == "2"){
            $score++;
         }
         if($q6 == "13"){
            $score++;
         }
         if($q7 == "36"){
            $score++;
         }
         if($q8 == "12"){
            $score++;
         }
         if($q9 == "2"){
            $score++;
         }
         if($q10 == "12"){
            $score++;
         }
         if($q11 == "70"){
            $score++;
         }
         if($q12 == "9"){
            $score++;
         }

         include("top.html");
      echo "<p> Thank you for taking the test, " . $_SESSION["name"]. "</p><br> Your score is ";
         $x=$score / 12;
         $y=($x*100)/1;
         echo number_format($y, 2) . "%.";

         $content = 'NAME: '.$_SESSION['name']." AGE: ".$_SESSION['age']." SEX: ".$_SESSION['gender']." CORRECT ANSWERS: ".$score." SCORE: ".number_format($y, 2) . "%"."<br>";
         file_put_contents('results.txt', $content."<br>", FILE_APPEND | LOCK_EX);

      ?> </p><br>
      
      
      <?php
         if($_SESSION["age"] <= "20" && $score >= "6"){
         echo "Great Job! For a " . $_SESSION["age"] . " year old.";
         }
         if($_SESSION["age"] > "20" && $score < "6"){
         echo "You suck for a " . $_SESSION["age"] . " year old.";
         }
         else{
            echo "Not bad for a " . $_SESSION["age"] . " year old.";
         }

         echo "<br><br><h1>Leaderboard:</h1>";
         $content = file_get_contents('results.txt');
         echo $content;
      ?>
      <br>
      <br>
      <?php include("bottom.html"); ?>
   </body>
</html>
