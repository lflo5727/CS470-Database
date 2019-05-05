<html>
<head>
<title>Add Person</title>
</head>
<body>
<form action="http://localhost/SecurityProject/Test/studentadded.php" method="post">

<b>Add a New Person</b>

<p>Drivers License ID:
<input type="text" name="dl_id" size="10" maxlength="10" value="" />
</p>

<p>First Name:
<input type="text" name="first" size="30" value="" />
</p>

<p>Last Name:
<input type="text" name="last" size="30" value="" />
</p>

<p>SSN:
<input type="text" name="ssn" size="9" maxlength="9" value="" />
</p>

<p>Sex (M or F):
<input type="text" name="sex" size="30" maxlength="1" value="" />
</p>

<p>Eye color:
<input type="text" name="eye_color" size="30" maxlength="2" value="" />
</p>

<p>Birth Date (YYYY-MM-DD):
<input type="text" name="date_of_birth" size="30" value="" />
</p>

<p>Height:
<input type="text" name="height" size="30" maxlength="5" value="" />
</p>

<p>Weight:
<input type="text" name="weight" size="30" value="" />
</p>

<p>
<input type="submit" name="submit" value="Send" />
</p>

</form>
</body>
</html>