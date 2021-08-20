<?php
$x=$_POST['a'];
$y=$_POST['b'];
mysql_connect("localhost","root","");
mysql_select_db("google");
$query="DELETE FROM student WHERE name='$x' AND password='$y'";
mysql_query($query);
echo"database updated";
?>