<?php
//including the database connection file
include_once("config.php");
//fetching data in descending order (lastest entry first)
$result = $conn->query("SELECT * FROM dbsregistration.tusers ORDER BY id DESC");
?>

<html>
<head>	
	<title>List of Users</title>
	<style>
	.c,a{
		text-decoration:none;
		padding-left:30px;
	}
	</style>
</head>

<body>
<a href="index.php">Home</a> | <a href="adduser.php">ADD user</a>| 
<a class="a" href="adddetail.php">ADD Student Detail</a>
<a class="a" href="information.php">ADD Student Information</a><br><br>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td class="c">ID</td>
		<td class="c">Name</td>
		<td class="c">Strand</td>
		<td class="c">Gender</td>
		<td class="c">Age</td>

	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['ID']."</td>";
		echo "<td>".$row['username']."</td>";
		echo "<td>".$row['password']."</td>";	
		echo "<td>".$row['nickname']."</td>";
		echo "<td>".$row['role']."</td>";
		echo "<td><a href=\"edit.php?id=$row[ID]\">Edit</a> | <a href=\"delete.php?id=$row[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		echo "<td><a href=\"Compostions.php?id=$row[ID]\"></a></td>";	
	}
	?>
	</table>
</body>