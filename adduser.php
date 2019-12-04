<?php 
include_once ('config.php');
session_start();
if(!isset($_SESSION['user'])){
    header("location:login.php");
}
if(isset($_POST['Register'])){
    $iusername = $_POST['username'];
    $ipassword = $_POST['password'];
    $inickname = $_POST['nickname'];
    $irole = $_POST['role'];

    $sql = "insert into dbsregistration.tusers";
    $sql .= "(username, password, nickname, role, dated_created) ";
    $sql .= "values (:pusername, :ppassword, :pnickname, :prole, NOW())";
    $query = $conn -> prepare($sql);
    $query -> bindParam(':pusername', $iusername);
    $query -> bindParam(':ppassword', $ipassword);
    $query -> bindParam(':pnickname', $inickname);
    $query -> bindParam(':prole', $irole);
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
  
    
    
    </style>
</head><br>


   <br><br><br> <div class="bg"><center>
    
   <form action="adduser.php" method="POST">
    <center><h1>ADD USER</h1></center>
        <label>Username</label><br/><br>
        <input type="text" name="username"><br/><br>
        <label>Password</label><br/>
        <input type="password" name="password"><br/><br>
        <label>Role</label><br>
        <input type="text" name="nickname"><br/><br>
        <label>Grade</label><br>
        <input type="text" name="role"><br/><br>
        <input type="submit" name="Register" value="Go">
    </form></center>
    </div><br><br>
    <center> <button type="button" class="btn"><a href="index.php">back</button></center>
    <a class="c" href="list.php">View Result</a><br><br>
</body>
</html>