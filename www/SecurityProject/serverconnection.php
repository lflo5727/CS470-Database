<?php
// CHANGE SERVERNAME TO MATCH THE NAME OF THE SQL SERVER YOU ARE CONNECTING TO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dmv";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "You have successfully connected to the database";
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
      <button type="submit" class="searchButton" name = "submit" value="Search" />>
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>


</body>
</html>
