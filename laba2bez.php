<?php 
include('connect.php');
$query = "SELECT * FROM laba2";
if($result = mysqli_query($mysqli, $query)){
    while($row = mysqli_fetch_array($result)){
         
       echo("<p>"."<h1>".$row["h1"]."</h1>"."</p>");
       echo("<p>".$row["content"]."</p>");
    }
}

   
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

</body>
</html>