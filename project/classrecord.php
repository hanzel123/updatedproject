<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = $dbConn->query("SELECT * FROM tbl_student ORDER BY studentid DESC");
?>

<html>
<head>	
<title>Homepage</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
</head>
</head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
	color:red;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
<body>
<nav class="navbar navbar-inverse">
  <ul class="nav navbar-nav">
       <li><a href="#.php">Class Records</a></li>
     <li><a href="subject.php"> Schedule</a></li>

  </ul>
  <ul class="nav navbar-nav navbar-right">
     
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>
</nav>

</nav>
	

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Gender</td>
		<td>Birth Date</td>
		<td>Address</td>
		<td>Contact</td>
	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['fname']."</td>";
		echo "<td>".$row['lname']."</td>";
		echo "<td>".$row['gender']."</td>";	
		echo "<td>".$row['birthdate']."</td>";	
		echo "<td>".$row['address']."</td>";
		echo "<td>".$row['contact']."</td>";
		
	}
	?>
	</table>
</body>
</html>
