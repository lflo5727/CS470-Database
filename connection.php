<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<h1>CS 470 Database Project</h1>
<p>On this website, you will be able to serch a person's name to find their information and also add person's information</p>


<header>
  <h1>DMV</h1>
  <h7>Department of Motor Vechicle</h7>
</header>

<section>
  <nav>
    <ul>
      <li><a href="#">Search person</a></li>
      <li><a href="#">Search vechicle</a></li>
      <li><a href="#">Add person</a></li>
    </ul>
  </nav>
  
  <article>

<?php
include "serverconection.php";

?>
<form action="/serverconnection.php">
<h2 style="background-color:DodgerBlue;">Key word search: <input type="text" name="key"<br></h2>

<input type="submit" value="Submit">
</form>

<p>Click the "Submit" button and the form-data will be sent to anoter page".</p>

  </article>
</section>

</div>

<footer>
  <p>Made by Group 5</p>
</footer>

</body>
</html>
