<html>

    <head>
		<title> Forgot</title>
        <link rel="stylesheet" type="text/css" href="style6.css">
     
        
    </head>
    <body bgcolor="#9933CC">
    
<div id="first"><br/>
  <h2>RAILWAY RESERVATION SYSTEM </p>
<h2>IRCTC</h2>
</div>
<div id=second>
<ul>
<li><a href=index.html target="_self">Home</a></li>
<li><a href=aindex.html target="_self">Admin</a></li>
<li><a href=contact.html target="_self">Contacts</a></li>
<li><a href=abt.html target="_self">About us</a></li></ul>
</div>
<?php 
         $con = mysqli_connect("localhost","root","","railway");
         if (!$con)
           {
             die('Could not connect: ' . mysql_error());
           }
echo '<script>';
echo 'function fuct()';
{
echo 'alert("asdf")';
$result = mysql_query("SELECT answer FROM signup WHERE username='" . $_POST['username'] . "'");
//echo 'alert("asdf")';
//$count  = mysql_num_rows($result);
//if($count==0) 
//{
//echo "Invalid Username or Password!";
//echo 'return false';
//} 
//else 
//{
//echo 'alert("asdffffff")';
//header('Location:index.php');
//echo "Invalid Username or Password!";
//}
}
echo '</script>';


if(isset($_POST['submit']))
{

$usernam=$_POST['username'];
echo"<br>";
$res1="select * from signup where username='$usernam'";
$result=mysqli_query($con,$res1);
while($row=mysqli_fetch_array($result))
{

echo"<table width=400px>";

$a=$row['username'];
$b=$row['sques'];
$c=$row['answer'];
echo'<center><table><form action="forgotcheck.php" method="post">';
echo'<tr>';
echo"<td><font color=#0000CC> Username</font> </td><td><input type=value name=username></td>";
echo'</tr>';
echo'<tr>';
echo"<td><font color=#0000CC>Question</font></td> <td>$b</td>";echo'</tr>';

echo'<tr>';
echo"<td> <font color=#0000CC>Answer</font></td>";
echo"<td><input type=text name=ans></td>";
echo'</tr>';

echo'<tr>';
echo '<td></td><td><input type=submit name=submit value=submit></td>';
echo '</tr>';
echo'</form></table></center>';

}

}

mysqli_close($con);
?>
