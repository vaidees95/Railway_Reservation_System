<html><head>
<title>journey</title>
          <link rel="stylesheet" type="text/css" href="style6.css">
          </head>
 <body bgcolor="#9933CC">
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
if(count($_POST)>0) {
$conn = mysqli_connect("localhost","root","","railway");
if (!$conn)
           {
             die('Could not connect: ' . mysql_error());
           }
//mysqli_select_db("railway",$conn);

$result = mysqli_query($conn,"SELECT answer FROM signup WHERE username='" . $_POST['username'] . "' ");
$row=mysqli_fetch_array($result);
$temp=$row['answer'];
$uname=$_POST['ans'];

if($uname==$temp)
{
echo '<center><table><form action="npassword.php" method="post">';
$username=$_POST['username'];
echo '<tr><td><font color=#0000CC>Username</font></td><td><input type="text" name="username" ></td></tr> ';
echo '<tr><td><font color=#0000CC>new password</font></td><td> <input type="text" name="pwd"></td></tr>';

echo '<tr><td></td><td><input type="submit" value=submit></td></tr>';
echo '</form></table></center>';
//header('Location:delete.php');
}
else
header('Location:forgote.html');

}
?>