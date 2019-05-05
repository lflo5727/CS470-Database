<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dmv";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Create a query for the database
$query = "SELECT * FROM person";

// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($conn, $query);

// If the query executed properly proceed
if($response){

echo '<table align="left"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>Drivers License: </b></td>
<td align="left"><b>First: </b></td>
<td align="left"><b>Last: </b></td>
<td align="left"><b>SSN: </b></td>
<td align="left"><b>Sex: </b></td>
<td align="left"><b>Eye Color: </b></td>
<td align="left"><b>Date of Birth: </b></td>
<td align="left"><b>Height</b></td>
<td align="left"><b>Weight</b></td></tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' . 
$row['dl_id'] . '</td><td align="left">' . 
$row['first'] . '</td><td align="left">' .
$row['last'] . '</td><td align="left">' . 
$row['ssn'] . '</td><td align="left">' .
$row['sex'] . '</td><td align="left">' . 
$row['eye_color'] . '</td><td align="left">' .
$row['date_of_birth'] . '</td><td align="left">' . 
$row['height'] . '</td><td align="left">' .
$row['weight'] . '</td><td align="left">';

echo '</tr>';
}

echo '</table>';

} else {

echo "Couldn't issue database query<br />";

echo mysqli_error($conn);

}

// Close connection to the database
mysqli_close($conn);

?>