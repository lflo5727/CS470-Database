<html>
<head>
<title>Add Person</title>
</head>
<body>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dmv";
// Create dbcection
$dbc = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['submit'])){
    
    $data_missing = array();
    
    if(empty($_POST['dl_id'])){

        // Adds name to array
        $data_missing[] = 'dl_id';

    } else {

        // Trim white space from the name and store the name
        $dl_id = trim($_POST['dl_id']);

    }

    if(empty($_POST['first'])){

        // Adds name to array
        $data_missing[] = 'first';

    } else{

        // Trim white space from the name and store the name
        $first = trim($_POST['first']);

    }

    if(empty($_POST['last'])){

        // Adds name to array
        $data_missing[] = 'last';

    } else {

        // Trim white space from the name and store the name
        $last = trim($_POST['last']);

    }

    if(empty($_POST['ssn'])){

        // Adds name to array
        $data_missing[] = 'ssn';

    } else {

        // Trim white space from the name and store the name
        $ssn = trim($_POST['ssn']);

    }

    if(empty($_POST['sex'])){

        // Adds name to array
        $data_missing[] = 'sex';

    } else {

        // Trim white space from the name and store the name
        $sex = trim($_POST['sex']);

    }

    if(empty($_POST['eye_color'])){

        // Adds name to array
        $data_missing[] = 'eye_color';

    } else {

        // Trim white space from the name and store the name
        $eye_color = trim($_POST['eye_color']);

    }

    if(empty($_POST['date_of_birth'])){

        // Adds name to array
        $data_missing[] = 'Zip date_of_birth';

    } else {

        // Trim white space from the name and store the name
        $date_of_birth = trim($_POST['date_of_birth']);

    }

    if(empty($_POST['height'])){

        // Adds name to array
        $data_missing[] = 'height';

    } else {

        // Trim white space from the name and store the name
        $height = trim($_POST['height']);

    }

    if(empty($_POST['weight'])){

        // Adds name to array
        $data_missing[] = 'weight';

    } else {

        // Trim white space from the name and store the name
        $weight = trim($_POST['weight']);

    }

    
    if(empty($data_missing)){
        
        require_once('../sqli_connect.php');
        
        $query = "INSERT INTO person (dl_id, first, last,
        ssn, sex, eye_color, date_of_birth, height, weight) VALUES (?, ?, ?,
        ?, ?, ?, ?, ?, ?)";
		
        
        $stmt = mysqli_prepare($dbc, $query);
        
        //i Integers
        //d Doubles
        //b Blobs
        //s Everything Else
        
        mysqli_stmt_bind_param($stmt, "sssssssss", $dl_id,
                               $first, $last, $ssn, $sex,
                               $eye_color, $date_of_birth,$height,
                               $weight);
							   
							    
        
        mysqli_stmt_execute($stmt);
        
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
        if($affected_rows == 1){
            
            echo 'Person Entered';
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        } else {
            
            echo 'Error Occurred<br />';
            echo mysqli_error($dbc);
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        }
        
    } else {
        
        echo 'You need to enter the following data<br />';
        
        foreach($data_missing as $missing){
            
            echo "$missing<br />";
            
        }
        
    }
    
}

?>

<form action="http://localhost/SecurityProject/Test/personadded.php" method="post">
    
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