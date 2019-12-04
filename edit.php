<?php 
include_once('config.php');
$ID = $_GET['id'];
$sql = "Select * from dbsregistration.iusers where ID = :id";
$query = $conn->prepare($sql);
$query->execute(array(':id' => $ID));
while($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $SBirthday = $row['Birthday'];
    $Nationality = $row['Nationality'];
    $Nation = $row['Nation'];
    $FavColor = $row['FavColor'];
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="POST">
        <label for="">Birthday</label><br>
        <input type="text" name="firstname" value="<?php echo $SBirthday ?>"><br>
        <label for="">Nationality </label><br>
        <input type="text" name="lastname" id="" value="<?php echo $Nationality?>"><br>
        <label for="">Nation</label><br>
        <input type="text" name="gender" value="<?php echo $Nation ?>"><br>
        <label for="">FavColor</label><br>
        <input type="text" name="gender" value="<?php echo $FavColor ?>"><br>
        <input type="hidden" name="id" value ="<?php echo $eid?>"/>
        <input type = "submit" name = "update" value = "Update"/>
    </form>
</body>
</html>