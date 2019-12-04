<?php 
include_once ('config.php');
session_start();
if(!isset($_SESSION['user'])){
    header("location:login.php");
}
if(isset($_POST['Register'])){
    $iBirthday = $_POST['Birthday'];
    $iNationality = $_POST['Nationality'];
    $iNation = $_POST['Nation'];
    $iFavColor = $_POST['FavColor'];

    $sql = "insert into dbsregistration.iusers";
    $sql .= "(Birthday, Nationality, Nation, FavColor, dated_created) ";
    $sql .= "values (:pBirthday, :pNationality, :pNation, :pFavColor, NOW())";
    $query = $conn -> prepare($sql);
    $query -> bindParam(':pBirthday', $iBirthday);
    $query -> bindParam(':pNationality', $iNationality);
    $query -> bindParam(':pNation', $iNation);
    $query -> bindParam(':pFavColor', $iFavColor);
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
  
    
    
    </style><br><br><a class="c" href="information.php">View Result</a><br><br>
</head><br>


   <br><br><br> <div class="bg"><center>
   
   <form action="addinfo.php" method="POST">
    <center><h1>ADD Student Information</h1></center>
        <label>Birthday</label><br/><br>
        <input type="text" name="Birthday"><br/><br>
        <label>Nationality</label><br/>
        <input type="text" name="Nationality"><br/><br>
        <label>Nation</label><br>
        <input type="text" name="Nation"><br/><br>
        <label>FavColor</label><br>
        <input type="text" name="FavColor"><br/><br>
        <input type="submit" name="Register" value="Go">
    </form></center>
    </div><br><br>
    <center> <button type="button" class="btn"><a href="index.php">back</button></center>
</body>
</html>