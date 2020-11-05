<?php
session_start();
?>
<?php
$cookie_name = "user";
$cookie_value = $_POST["name"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<?php include("top.html"); ?>
<html>
<body>
<?php

// Set session variables
$name = $_POST["name"];
$_SESSION["name"] = $name;
$_SESSION["gender"] = $_POST["gender"];
$age = intval($_POST["age"]);
$_SESSION["age"] = $age;

if(!isset($name) OR $name == "" OR !isset($age) OR $age == "" OR !is_integer($age)){
    exit("<h1>Error! Invalid Data.</h1>
    <p>We're sorry. You submitted invalid user data. Please go back and try again.</p>");
}
?>
<form action="results.php" method="post">
<fieldset>
<legend> Welcome, <?php print $cookie_value?> </legend>

<strong> LEVEL 1 </strong>

<p>
<strong>Q1. Which number should come next in the pattern?</strong>
</p>
<strong> <p align="center">37, 34, 31, 28 ...</p></strong>
<p align="center">
<input type="radio" name="Q1" value="26" />26
<input type="radio" name="Q1" value="25" />25 <!This is the correct answer>
<input type="radio" name="Q1" value="24" />24
<input type="radio" name="Q1" value="23" />23
</p>

<p>
<strong>Q2. Book is to Reading as Fork is to:</strong>
</p>
<p align="center">
<input type="radio" name="Q2" value="Drawing" />Drawing
<input type="radio" name="Q2" value="Writing" />Writing
<input type="radio" name="Q2" value="Stirring" />Stirring
<input type="radio" name="Q2" value="Eating" />Eating <!This is the correct answer>
</p>

<strong> LEVEL 2 </strong>

<p>
<strong>Q3. What number best completes the analogy:</strong>
</p>
<strong> <p align="center">8:4 as 10:</p></strong>
<p align="center">
<input type="radio" name="Q3" value="3" />3
<input type="radio" name="Q3" value="7" />7
<input type="radio" name="Q3" value="24" />24
<input type="radio" name="Q3" value="5" />5 <!This is the correct answer>
</p>

<p>
<strong>Q4. Which one of the five is least like the other four?</strong>
</p>
<p align="center">
<input type="radio" name="Q4" value="Dog" />Dog
<input type="radio" name="Q4" value="Mouse" />Mouse
<input type="radio" name="Q4" value="Lion" />Lion
<input type="radio" name="Q4" value="Snake" />Snake <!This is the correct answer>
<input type="radio" name="Q4" value="Elephant" />Elephant
</p>

<strong> LEVEL 3 </strong>

<p>
<strong>Q5. I have three apples. If you take away two from me, how many do you have?</strong>
</p>
<p align="center">
<input type="radio" name="Q5" value="2" />2 <!This is the correct answer>
<input type="radio" name="Q5" value="1" />1
<input type="radio" name="Q5" value="3" />3
<input type="radio" name="Q5" value="5" />5
</p>

<p>
<strong>Q6. Which number should come next in the pattern?</strong>
</p>
<strong> <p align="center">1, 1, 2, 3, 5, 8...</p></strong>
<p align="center">
<input type="radio" name="Q6" value="13" />13 <!This is the correct answer>
<input type="radio" name="Q6" value="15" />15 
<input type="radio" name="Q6" value="10" />10
<input type="radio" name="Q6" value="12" />12
</p>

<strong> LEVEL 4 </strong>

<p>
<strong>Q7. Which number should come next in the pattern?</strong>
</p>
<strong> <p align="center">1, 4, 9, 16, 25…”</p></strong>
<p align="center">
<input type="radio" name="Q7" value="49" />49
<input type="radio" name="Q7" value="64" />64 
<input type="radio" name="Q7" value="36" />36 <!This is the correct answer>
<input type="radio" name="Q7" value="34" />34
</p>

<p>
<strong>Q8. How many months have 28 days?</strong>
</p>
<p align="center">
<input type="radio" name="Q8" value="2" />2
<input type="radio" name="Q8" value="1" />1
<input type="radio" name="Q8" value="6" />6
<input type="radio" name="Q8" value="12" />12 <!This is the correct answer>
</p>

<strong> LEVEL 5 </strong>

<p>
<strong>Q9. You're 3rd place right now in a race. What place are you in when you pass the person in 2nd place?</strong>
</p>
<p align="center">
<input type="radio" name="Q9" value="1" />1st  
<input type="radio" name="Q9" value="2" />2nd <!This is the correct answer>
<input type="radio" name="Q9" value="3" />3rd
<input type="radio" name="Q9" value="4" />4th
</p>

<p>
<strong>Q10. How many two cent stamps are there in a dozen?</strong>
</p>
<p align="center">
<input type="radio" name="Q10" value="12" />12  <!This is the correct answer>
<input type="radio" name="Q10" value="24" />24
<input type="radio" name="Q10" value="6" />6
<input type="radio" name="Q10" value="2" />2
</p>

<strong> LEVEL 6 </strong>

<p>
<strong>Q11. Divide 30 by 1/2 and add 10. What is the answer?</strong>
</p>
<p align="center">
<input type="radio" name="Q11" value="70" />70  <!This is the correct answer>
<input type="radio" name="Q11" value="25" />25
<input type="radio" name="Q11" value="15" />15
<input type="radio" name="Q11" value="20" />20
</p>

<p>
<strong>Q12. A farmer had 17 sheep. All but 9 died, how many live sheep were left?</strong>
</p>
<p align="center">
<input type="radio" name="Q12" value="8" />8  
<input type="radio" name="Q12" value="17" />17
<input type="radio" name="Q12" value="9" />9 <!This is the correct answer>
<input type="radio" name="Q12" value="7" />7
</p>            
<input type="submit" value="Submit Questions">
</fieldset>
</form>

<?php include("bottom.html"); ?>

