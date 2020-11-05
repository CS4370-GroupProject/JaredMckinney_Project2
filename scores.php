<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="style.css"/>
   </head>
   <body>
      <?php 

         include("top.html");
         echo "<br><br><h1>Leaderboard:</h1>";
         $content = file_get_contents('results.txt');
         echo $content;
      ?>
      <br>
      <br>
      <?php include("bottom.html"); ?>
   </body>
</html>
