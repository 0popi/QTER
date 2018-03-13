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
h1 {background-color:#600;color:#fff; 0;margin:0;}
a img {border:0;}
td {font-size:11px;}


nav {
  height: 40px;
  width: 100%;
  background-color: #333;
  color: #eee;
}
nav ul {
  padding: 0;
  margin: 0;
}
nav li {
  display: inline;
 
}
nav a {

  width: 100px;
  text-align: center;
  text-decoration: none;
  padding: 10px 0;
  color: #eee;
  text-decoration: none;
}
nav li:hover {
  background-color: #444;
}
nav a#openup {
  display: none;
}


.cf:before, .cf:after {
  content: "";
  display: table;
}

.cf:after {
  clear: both;
}

.cf {
  zoom: 1;
}



</style>
</head>

<body>

<nav class='cf'>
  <ul class='cf'>
    <li class = "trophy">
      <a href='top.php'><i class="fa fa-trophy"></i>See the top</a>&nbsp;
      
    </li>
	//
    
            
    <li class="paypal">
      <a href='https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=3L842R5QKTDJC'><i class="fa fa-paypal"></i>Buy me a coffee</a>&nbsp
    </li>
    //
    
 	
    <li class="popi">
      <a href='http://popidesigns.ro' style="text-align:justify">Made with <i class="fa fa-heart"></i> by popidesigns.ro</a></a>
    </li>
  </ul>
 
</nav>


<center>
    
<table>
	<tr>
	<td valign="top" class="image"><a href="rate.php?winner=<?=$images[0]->image_id?>&loser=<?=$images[1]->image_id?>"><img src="images/<?=$images[0]->filename?>" /></a></td>
		<td valign="top" class="image"><a href="rate.php?winner=<?=$images[1]->image_id?>&loser=<?=$images[0]->image_id?>"><img src="images/<?=$images[1]->filename?>" /></a></td>
	</tr>

</table>
</center>



</body>
</html>
