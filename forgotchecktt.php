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
echo $temp;

if($uname==$temp)
{
echo'<table width="400px">';
echo'<form action="npassword.php" method="post">';
echo'<tr>';


$a=$_POST['username'];
echo $a;
echo "hello";
echo '<td> username </td> <td><input type=hidden name="username" value="echo $a;"/>';



echo'</td>';

echo'</tr>';

echo'<tr>';

echo'<td> new password </td> <td><input type="text" name="pwd"></td>';

echo'</tr>';

echo'<tr>';
echo'<td><input type="submit" name="submit" value="submit"></td>';

echo'</tr>';

echo'</form>';

echo'</table>';
}
else
header('Location:forgote.html');

}
?>