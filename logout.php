
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log Out</title>
    <style>

    
    
    
    
    </style>

</head>
<body>

<center><br><br><?php
$br = "<br/>";
session_start();
session_destroy();
echo "You have been logged out $br$br$br";
echo "<a href=\"login.php\">LOGIN</a>";
?>

   
</body>
</html>