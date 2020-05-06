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
$con = mysqli_connect("localhost","root","","railway");
if (!$con)
           {
             die('Could not connect: ' . mysql_error());
           }



$result=mysqli_query($con,"SELECT * FROM trainlist WHERE trainname='" . $_POST['t1name'] . "'");
$row=mysqli_fetch_array($result);
$tnum=$row['trainnumber'];
$tname=$row['trainname'];
$count=$row['available'];
$cost=$row['cost'];
$date=$row['date'];
$fstation=$row['fstation'];
$tstation=$row['tstation'];
$date=$row['date'];

$name1 =  $_POST['name'];
$age1 =  $_POST['age'];
$gender1 =  $_POST['gender'];
$berth1 = $_POST['berth'];
$acount=$_POST['count'];

$ncount=$count-$acount;
$tnum5=$_POST['t1num'];
if($ncount<0)
{
echo "sry try to book ticket based on availability of tickets";
}
else
{

$total=$acount*$cost;

$sql="INSERT INTO tickets VALUES ( '$tname','$tnum5','$name1','$age1', '$gender1','$berth1', '$acount','$total')";
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

$sql="UPDATE trainlist SET available='$ncount' WHERE trainname='" . $_POST['t1name'] . "'";
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
$result1=mysqli_query($con,"SELECT * FROM tickets WHERE name1='" . $_POST['name'] . "' and trainnumber='" . $_POST['t1num'] . "'");
$row1=mysqli_fetch_array($result1);
$age=$row1['age1'];
$gender=$row1['gender1'];
$berth=$row1['berth1'];
 


echo '<form action="print.html" >';
echo '<center>';
echo '<table  cellspacing="10">';
echo '<b>Train Ticket</b>';
echo '<tr>';
echo '<td>Name</td>';
echo '<td><input type="hidden"/>';
echo $name1;
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>Age</td>';
echo '<td><input type="hidden">';
echo $age;
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>Gender</td>';
echo '<td><input type="hidden">';
echo $gender;
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>Berth type</td>';
echo '<td><input type="hidden">';
echo $berth;
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>Total Members</td>';
echo '<td><input type="hidden">';
echo $acount;
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>From Station</td>';
echo '<td><input type="hidden">';
echo $fstation;
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>To Station</td>';
echo '<td><input type="hidden">';
echo $tstation;
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>Date</td>';
echo '<td><input type="hidden">';
echo $date;
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>Train name</td>';
echo '<td><input type="hidden">';
echo $tname;
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>Train number</td>';
echo '<td><input type="hidden">';
echo $tnum;
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>Seat number</td>';
echo '<td><input type="hidden">';
$s=$ncount+1;
echo $s;
echo "-";
echo $count;


echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>Cost</td>';
echo '<td><input type="hidden">';
echo $total;
echo '</td>';
echo '</tr>';
echo '</table>';
echo '<br/>';
echo '<input type=submit value=Send>';
echo '</center>';
echo '</form>';	




}
mysqli_close($con);
?>