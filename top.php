<?php


include('mysql.php');
include('functions.php');



$query="SELECT * FROM images ORDER BY RAND() LIMIT 0,2";
$result = @mysql_query($query);

while($row = mysql_fetch_object($result)) {
	$images[] = (object) $row;
}



$result = mysql_query("SELECT *, ROUND(score/(1+(losses/wins))) AS performance FROM images ORDER BY ROUND(score/(1+(losses/wins))) DESC LIMIT 0,10");
while($row = mysql_fetch_object($result)) $top_ratings[] = (object) $row;


// Close the connection
mysql_close();


?>
<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>QTER</title>

<style type="text/css">

body, html {font-family:Arial, Helvetica, sans-serif;width:100%;margin:0;padding:0;text-align:center;}
table{
    display:inline-block;
}

</style>
</head>

<body>



<h2>Top Rated</h2>
<center>
<table>
	<tr>
		<? foreach($top_ratings as $key => $image) : ?>
		<td valign="top"><img src="images/<?=$image->filename?>" width="100" /></td>
		<? endforeach ?>
	</tr>
	
	<tr>
		<? foreach($top_ratings as $key => $image) : ?>
		
		<? endforeach ?>
	</tr>
	<tr>
		<? foreach($top_ratings as $key => $image) : ?>
		
		<? endforeach ?>
	</tr>
	<tr>
		<? foreach($top_ratings as $key => $image) : ?>
		
		<? endforeach ?>
	</tr>
	<tr>
		<? foreach($top_ratings as $key => $image) : ?>
		
		<? endforeach ?>
	</tr>

</table>
</center>

</body>
</html>
