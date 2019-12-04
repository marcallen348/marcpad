
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    a,h1{

        color:black;
        font-family: verdana;
     
    }
    a:hover{
        color:red;
        font-family:arial;
       
    }
    a{
        
        font-family:arial;
        font-size:20px;
        text-decoration:none;
        
    }
    h1{
        color: black;
        padding-top:35%;
    }
    h1:hover{
  
        font-family:verdana;
    }
    .c{
        color:white;
        padding-top:0%;
        margin-left:85%;
        font-family: italic;
        border: solid white 2px;
    }
    .c1{
        color:white;
        padding-top:0%;
        margin-left:85%;
        font-family: italic;
        text-decoration:none;
        border: solid white 2px;
    }
    .c:hover{
        color:red;
        font-family:verdana;
    }
    body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("aics.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
body:hover{

    background-image: url("");
    height: 100%; 
}





    </style>



</head>


<body>
<div class="bg">
<br><br><center><?php
session_start();
$br = "<br/>";
include_once ('config.php');
if(!isset($_SESSION['user'])){
    header("location:login.php");
}
// header ("location:login.php");



?>
<a class="c" href="logout.php">LOG-OUT</a><br><br>

<a class="c1" href="adduser.php"> Add New User </a><br><br>
<a class="c1" href="adddetail.php"> Add Student Detail </a>

</div>
    
</body>
</html>

