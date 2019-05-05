<html
<head>
<title>Security</title>
</head>

<body>
	<form action="sqlinjection.php" method="post">
		<input type="text" name="search" placeholder="Search here!">
		<input type="submit" name = "submit" value="Search" />
    </form>
</body>
</html>


<?php
// Create connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dmv";

$search_value= $_POST['search'];
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
		echo 'Connection Good';
        $sql="SELECT * from Person";

        $res=$con->query($sql);

        //while($row=$res->fetch_assoc()){
			echo 'Person:  '.$row["Person"];
			//echo "<br>";
            //echo 'First Name:  '.$row["First"];
			//echo "<br>";
			//echo 'Last Name: '.$row["Last"];
			//echo "<br>";
			//echo 'Class:  '.$row["Class"];
			//echo "<br>";
			//echo 'Major:  '.$row["Major"];
			//echo "<br>";
						//echo "<br>";
									//echo "<br>";
			
			


            //}       

        }
?>
