 <?php

         $con = mysqli_connect("localhost","root","","railway");
         if (!$con)
           {
             die('Could not connect: ' . mysql_error());
           }


// escape variables for security
$uname =  $_POST['username'];
echo $uname;
$pword =  $_POST['pwd'];

$sql="UPDATE signup SET password='$pword' WHERE username='$uname'";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
header('Location:npass.html');

mysqli_close($con);
?>
</body>
</html>