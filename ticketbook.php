<html><head>
<title>journey</title>
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
</div><br/><br>
<?php
if(isset($_POST['submit']))
{
if(count($_POST)>0)
 {
$conn = mysqli_connect("localhost","root","","railway");
if (!$conn)
           {
             die('Could not connect: ' . mysql_error());
           }
$result=mysqli_query($conn,"SELECT * FROM trainlist WHERE trainnumber='". $_POST['tnum'] . "'");
$row=mysqli_fetch_array($result);
$tnum=$row['trainnumber'];

$tname=$row['trainname'];
$count=$row['available'];
$cost=$row['cost'];
$date=$row['date'];
$fstation=$row['fstation'];
$tstation=$row['tstation'];
$date=$row['date'];
}

}
?>
<center>
<form action="tickets.php" method="post"><font color="#0033FF">
Journey Details</font>
<table width="500">
<thead>
<td>
<b>Train name</b>
</td>
<td>
<b>Train number</b>
</td>
<td>
<b>From Station</b>
</td>
<td>
<b>To Station</b>
</td>
<td>
<b>Date</b>
</td>
</thead>

<tr >
<td >
 <?php echo $tname;  ?>
<input type="hidden" name="t1name" value= "<?php echo $tname;  ?>"/>
</td>
<td >
 <?php echo $tnum;  ?>
<input type="hidden" name="t1num" value= "<?php echo $tnum;  ?>"/>
</td>
<td>
<?php echo $fstation;  ?>
</td>
<td>
<?php echo $tstation;  ?>
</td>
<td>
<?php echo $date;  ?>
</td>
</tr>
</table>
<br/><font color="#0033FF">
Passenger Details</font>

<table  border="1" width="500">
<thead>
<td>
<b>S.no</b>
</td>
<td>
<b>Name</b>
</td>
<td>
<b>Age</b>
</td>
<td>
<b>Gender</b>
</td>
</td>
<td>
<b>Berth Preference</b>
</td>
<td>
<b>Cost</b>
</td>
</thead>
<tr>
<td>
1</td>
<td><input type="text" name="name">
</td>
<td><input type="text" name="age">
</td>
<td><select name="gender" class="autocombo">
    
    <option value="11">--Select One--</option>
    
    <option value="male">Male</option>
	<option value="Female">Female</option>
</td>
<td><select name="berth" class="autocombo">
    
    <option value="11">--Select One--</option>
    
    <option value="lower">lower</option>
	<option value="middle">middle</option>
<option value="upper">upper</option>
<option value="sidelower">side lower</option>
<option value="sideupper">side upper</option>
</td>
<td>
<?php echo $cost;  ?>
</td>
</tr>
<br/><br/>
<td></td><td></td><td></td><td>Total number</td><td><input type="text" name="count"></td>
</table><br/>
<center><input type="submit" value="submit"></center>
</form></center>
</body>
</html>

