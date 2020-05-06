<?php
$conn = mysql_connect("localhost","root","");
if (!$conn)
           {
             die('Could not connect: ' . mysql_error());
           }

mysql_select_db("railway",$conn);
$username =  $_POST['username'];
$result =mysql_query(SELECT * FROM login WHERE username='" . $_POST["username"] . "');
echo $result:
?>