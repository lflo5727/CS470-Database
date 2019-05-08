@@ -0,0 +1,45 @@
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
echo "You have successfully connected to the database";
//Fetch data
$fetchdataquery = "SELECT firstname, lastname FROM TABLENAME";
$result = mysqli_query($conn,$fetchdataquery);
if(mysqli_num_rows($result)>0){
//fetch data
while($row =mysqli_fetch_assoc($result)){
echo "Name:".$row["firstname"]." ".$row["lastname"]." <br> ";
}
}
else{
echo "No recod found <br>";
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