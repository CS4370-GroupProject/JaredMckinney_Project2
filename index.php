<?php
session_start();
?>

<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="./style.css"/> 
        </head>

        <body>
            <?php include("top.html"); ?>

            <form action="questions.php" method="post">
                <fieldset>
                    <ul>
                        <li>
                            <strong>Name:</strong>
                            <input type="text" name="name" size="16" />
                        </li>

                        <li>
                            <strong>Gender:</strong>
                            <label><input type="radio" name="gender" value="Male" checked="checked" />Male</label>
                            <label><input type="radio" name="gender" value="Female" />Female</label>
                        </li>

                        <li>
                            <strong>Age:</strong>
                            <input type="text" name="age" size="6" maxlength="2" />
                        </li>
                    </ul>

                    <input type="submit" value="Next"> <a href="signin.php">Already Have an Account?</a>
                </fieldset>
            </form>
        </body>

    </html>


<?php include("bottom.html"); ?>