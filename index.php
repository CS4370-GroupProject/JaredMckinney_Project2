<?php include("top.html"); ?>

<form action="submit.php" method="post">
<fieldset>
<ul>
<li>
<strong>Name:</strong>
<input type="text" name="name" size="16" />
</li>

<li><strong>Gender:</strong>
<label><input type="radio" name="gender" value="Male" checked="checked" />Male</label>
<label><input type="radio" name="gender" value="Female" />Female</label>
</li>

<li>
<strong>Age:</strong>
<input type="text" name="age" size="6" maxlength="2" />
</li>
</ul>

<input type="submit" value="Next">
</fieldset>
</form>

<?php include("bottom.html"); ?>