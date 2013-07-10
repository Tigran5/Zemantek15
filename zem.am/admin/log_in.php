<?php
if($red=1){
header('Location: admin.php');

}
?>


<html>
<body>

<div class="sub">
 <form action="log_in.php" method="POST">
  <p>Login</p> 
  
  
  <input type="text" name="username" /> <br />
  <p>Password</p>
  
  <input type="password" name="password" /> <br />
  <input type="submit" value="Log in" class="ent" />
</form>

</div>







<?php
ob_start();
$host="localhost";
$username="root";
$password="";
$mysql_db="zemantek";


mysql_connect("$host", "$username", "$password");
mysql_select_db("$mysql_db") or die("Couldn't select database.");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$result=mysql_query("SELECT * FROM log_pass WHERE login='$myusername' and password='$mypassword'");

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row






if($count!=0){
    $red=1;
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();


?>





</body>




</html>