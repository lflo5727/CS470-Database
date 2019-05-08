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
$keyword = $-GET("key");
echo "Show all the information contains key word". $keyword. "<br>""
$fetchdataquery = "SELECT * FROM person where first ="."".$keyword;
$result = mysqli_query($conn,$fetchdataquery);
if(mysqli_num_rows($result)>0){
//fetch data
while($row =mysqli_fetch_assoc($result)){
echo "Name:".$row["dl_id"]." ".$row["first"]." ".$row["last"]." ".$row["ssn"]." ".$row["sex"]." "$row["eye_color"].
" "$row["date_of_birth"]." "$row["height"]." ".$row["weight"]." <br> ";
}
}
else{
echo "No recod found <br>";
}
?>


