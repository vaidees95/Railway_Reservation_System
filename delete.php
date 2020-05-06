<?php
//if(isset($_POST['submit']))
//{

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
//}

?>