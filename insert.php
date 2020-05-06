  <?php

         $con = mysqli_connect("localhost","root","","railway");
         if (!$con)
           {
             die('Could not connect: ' . mysql_error());
           }


// escape variables for security
$username =  $_POST['uname'];
$pass =  $_POST['password'];
$sques =  $_POST['question'];
$answer = $_POST['ans'];
$fname =  $_POST['firstName'];
$lname = $_POST['lastName'];
$gender=$_POST['gender'];
$mstatus=$_POST['maritalStatus'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$occupation=$_POST['occupation'];
$aadharcard=$_POST['aadharCard'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$nationality=$_POST['nationality'];
$resaddress1=$_POST['resAddress1'];
$resaddress2=$_POST['resAddress2'];
$resaddress3=$_POST['resAddress3'];
$rescountry=$_POST['resCountry'];
$respinCode=$_POST['resPinCode'];
$resstate=$_POST['resState'];
$city=$_POST['city'];
$sql="INSERT INTO signup VALUES ('$username','$pass', '$sques','$answer','$fname','$lname','$gender','$mstatus','$day','$month','$year','$occupation','$aadharcard','$email','$mobile','$nationality','$resaddress1','$resaddress2','$resaddress3','$rescountry','$respinCode','$resstate','$city')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
header('Location:signed.html');

mysqli_close($con);
?>