<?php
session_start();
include('config/connect.php');
include('config/logout.php');
$query = "SELECT * FROM laba2";
if($result = mysqli_query($mysqli, $query)){
    while($row = mysqli_fetch_array($result)){
         
       echo("<p>"."<h1>".$row["h1"]."</h1>"."</p>");
       echo("<p>".$row["content"]."</p>");
    }

}  
?>
<style type="text/css">
	a:link, a:visited {
   background-color: #f44336;
   color: white;
   padding: 14px 25px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
}

a:hover, a:active {
   background-color: red;
}
</style>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		
<a href="config/logout.php?do=logout">Выход</a>
</body>
</html>