<?php
// CHANGE SERVERNAME TO MATCH THE NAME OF THE SQL SERVER YOU ARE CONNECTING TO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dmv";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "You have successfully connected to the database";
//Fetch data
$fetchdataquery = 'SELECT * FROM person';
$result = mysqli_query($conn,$fetchdataquery);

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){ 
echo "ID:".$row["dl_id"]." ".$row["last"]." ".$row["ssn"]." ".$row["sex"]." ".$row["eye_color"]." ".$row["date_of_birth"]." ".$row["height"]." ".$row["weight"]." <br> ";
//dl_id,first, last, ssn,sex, eye_color,date_of_birth,height,weight

}

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="theme.css">
</head>
<body>

<div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="Enter your query here!">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>


</body>
</html>