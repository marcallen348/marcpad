<?php 
include_once ('config.php');
session_start();
if(!isset($_SESSION['user'])){
    header("location:login.php");
}
if(isset($_POST['Register'])){
    $iName = $_POST['Name'];
    $iStrand = $_POST['Strand'];
    $iGender = $_POST['Gender'];
    $iAge = $_POST['Age'];

    $sql = "insert into dbsregistration.duser";
    $sql .= "(Name, Strand, Gender, Age, dated_created) ";
    $sql .= "values (:pName, :pStrand, :pGender, :pAge, NOW())";
    $query = $conn -> prepare($sql);
    $query -> bindParam(':pName', $iName);
    $query -> bindParam(':pStrand', $iStrand);
    $query -> bindParam(':pGender', $iGender);
    $query -> bindParam(':pAge', $iAge);
    $query ->execute();
    echo "Successfully Added";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
    <style>
    
    label:hover{
        font-family: verdana;
        

    }
    .bg {
  /* The image used */
  background-image: url("12.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
  
    
    
    </style><br><br><a class="c" href="listadddetail.php">View Result</a><br><br>
</head><br>


   <br><br><br> <div class="bg"><center>
   
   <form action="adddetail.php" method="POST">
    <center><h1>ADD Student Detail</h1></center>
        <label>Student Name</label><br/><br>
        <input type="text" name="Name"><br/><br>
        <label>Strand</label><br/>
        <input type="password" name="Strand"><br/><br>
        <label>Gender</label><br>
        <input type="text" name="Gender"><br/><br>
        <label>Age</label><br>
        <input type="text" name="Age"><br/><br>
        <input type="submit" name="Register" value="Go">
    </form></center>
    </div><br><br>
    <center> <button type="button" class="btn"><a href="index.php">back</button></center>
</body>
</html>