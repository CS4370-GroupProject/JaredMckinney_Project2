<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css"/>
    </head>

    <body>
    <?php include("top.html"); ?>

            <form action="signin-submit.php" method="post">
                <fieldset>
                    <ul>
                        <li>
                            <strong>Name:</strong>
                            <input type="text" name="name" size="16" />
                        </li>
                    </ul>

                    <input type="submit" value="Next">
                </fieldset>
            </form>
    </body>
</html>
<?php include("bottom.html"); ?>