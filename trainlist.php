<html><head>
<title>Train</title>
        <link rel="stylesheet" type="text/css" href="style1.css"></head>
<body>
<div id="first"><br/>
  <h2>RAILWAY RESERVATION SYSTEM</h2> </p>
<h2>IRCTC</h2>
</div>
<div id=second>
<ul>
<li><a href=index.html target="_self">Home</a></li>
<li><a href=aindex.html target="_self">Admin</a></li>
<li><a href=contact.html target="_self">Contacts</a></li>
<li><a href=abt.html target="_self">About us</a></li></ul>
</div>
<p><br/>
  <br>
  <?php
if(count($_POST)>0) {
$conn = mysqli_connect("localhost","root","","railway");
if (!$conn)
           {
             die('Could not connect: ' . mysql_error());
           }
$result=mysqli_query($conn,"SELECT * FROM trainlist WHERE fstation='" . $_POST['fplace'] . "' and tstation='" . $_POST['tplace'] . "' and date='" . $_POST['date'] . "'");
$row=mysqli_fetch_array($result);
$tnum=$row['trainnumber'];
$tname=$row['trainname'];
$count=$row['available'];
$cost=$row['cost'];
$date=$row['date'];
 if (!empty($_POST["date"]) && ($date==$_POST["date"]))
{
echo '<center><font color="#FF3300">Available Trains</font></center>';
}
else
{
echo "Sorry train is not available in this date";
}
}
?>
</p>

<center>
  <form action="ticketbook.php" method="post">
<table border="1px">
<thead>
<td><b>Train Name</b></td>
<td><b>Train Number</b></td>
<td><b>Availability</b></td>
<td><b>Cost</b></td>
</thead>
<tr>
<td>
<input type="radio" name="tname" value= "<?php echo $tname;  ?>"/>
<?php echo $tname;  ?>

</td>
<td>
<input type="hidden" name="tnum" value= "<?php echo $tnum;  ?>"/>
<?php echo $tnum; ?>
</td>
<td>
<?php echo $count; ?>
<td>
<?php echo $cost; ?>
</td>

</tr>


</table>
<br/><br/>
<input type="submit" name="submit" value=submit>
</form>

</center> 
</body>
</html>