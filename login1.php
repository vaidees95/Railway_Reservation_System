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
<li><a href=resume1.html target="_self">Resume</a></li>
<li><a href=hobbies.html target="_self">Hobbies</a></li>
<li><a href=video.html target="_self">Gallery</a></li>
<li><a href=contact.html target="_self">Contacts</a></li></ul>
</div><br/><br>
<?php
if(count($_POST)>0) {
$conn = @mysql_connect("localhost","root","","railway");
if (!$conn)
           {
             die('Could not connect: ' . mysql_error());
           }
mysql_select_db("railway",$conn);
$result = mysql_query("SELECT * FROM signup WHERE userName='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
$count  = mysql_num_rows($result);
if($count==0) {
echo '<center><font color="#FF3300">Invalid Username or Password!</font></center>';
} else {
header('Location:eticket.html');echo "Invalid Username or Password!";
}
}
?>
</body>
</html>