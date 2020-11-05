<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css"/>
    </head>

    <body>
    <?php include("top.html"); ?>

    <?php 
         $file = 'results.txt';

         $fopen = fopen($file, 'r');
         $fread = fread($fopen,filesize($file));
         fclose($fopen);

         $remove = "<br><br>";
         $split = explode($remove, $fread);
         $array[] = null;
         $comma = " ";

         foreach ($split as $string)
         {
             $row = explode($comma, $string);
             array_push($array,$row);
         }

         $found = 0;

         for($row = 1; $row < count($array); $row++){
             if($array[$row][1] == $_POST['name']){
                 $found++;
             }
         }

         if($found == 0){
             exit("<h1>Error! User does not exists.</h1> <a href = 'index.php'>Back to front page</a>");
         }

         echo "<h1>Welcome ".$_POST['name']."</h1>";
         echo "<h3><a href = 'index.php'>Retake test.</a></h3>";
         echo "<h3><a href = 'scores.php'>See your score.</a></h3>";
    ?>

    
    </body>
</html>
<?php include("bottom.html"); ?>