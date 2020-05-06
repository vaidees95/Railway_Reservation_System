<html>
<body>

<?php
$uname="root";
$pwd="";
$hname="localhost";
$db=mysql_connect($hname,$uname,$pwd) or die(" unable to connect");
$ds=mysql_select_db("railway",$db) or die("unable to connect to db");

if(isset($_POST['ins']))
{

$fstation1 =  $_POST['fstation'];
$tstation1 =  $_POST['tstation'];
$date1 =  $_POST['date'];
$tnam1 = $_POST['tnam'];
$tnum1=$_POST['tnum'];
$available1=$_POST['available'];
$tcost1=$_POST['cost'];
echo $tcost1;
echo "inside insert";
$inse=mysql_query("insert into trainlist values('$fstation1','$tstation1','$date1','$tnum1','$tnam1','$available1','$tcost1')");
}
else
{
echo "not inserted";
}

if(isset($_POST['delete']))
{
echo "inside delete";
$fstation1 =  $_POST['fstation'];
$tstation1 =  $_POST['tstation'];
$date1 =  $_POST['date'];
$tnam1 = $_POST['tnam'];
$tnum1=$_POST['tnum'];
$available1=$_POST['available'];
$tcost1=$_POST['cost'];
echo $tcost1;
$sql=mysql_query("DELETE FROM trainlist WHERE trainnumber='$tnum1'");
}
if(isset($_POST['update']))
{
echo "inside update";
$fstation1 =  $_POST['fstation'];
$tstation1 =  $_POST['tstation'];
$date1 =  $_POST['date'];
$tnam1 = $_POST['tnam'];
$tnum1=$_POST['tnum'];
$available1=$_POST['available'];
$tcost1=$_POST['cost'];
echo $date1;
echo $available1;
echo $_POST['tnum'];
$sql=mysql_query("UPDATE trainlist SET date='$date1', available='$available1'  WHERE trainnumber='" . $_POST['tnum'] . "'");
}

header('Location:admin.html');
?>
</body>
</html>
