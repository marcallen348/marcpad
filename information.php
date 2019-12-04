<?php
//including the database connection file
include_once("config.php");
//fetching data in descending order (lastest entry first)
$result = $conn->query("SELECT * FROM dbsregistration.iusers ORDER BY id DESC");
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
<a class="a" href="adddetail.php">ADD Student Detail</a><br><br>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td class="c">ID</td>
        <td class="c">Birthday</td>
		<td class="c">Nationality</td>
		<td class="c">Nation</td>
		<td class="c">FavColor</td>
		

	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['ID']."</td>";
		echo "<td>".$row['Birthday']."</td>";
		echo "<td>".$row['Nationality']."</td>";	
		echo "<td>".$row['Nation']."</td>";
		echo "<td>".$row['FavColor']."</td>";
		echo "<td><a href=\"edit.php?id=$row['ID']\">Edit</a> | <a href=\"delete.php?id=$row[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		echo "<td><a href=\"Compostions.php?id=$row['ID']\"></a></td>";	
	}
	?>
	</table>
</body>