<html>
<body>
<?php

$con=mysqli_connect("localhost", "root", "", "zemantek" );

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql="INSERT INTO atext_ins (aname, adesc)
VALUES
('$_POST[aname]','$_POST[adesc]')";

if (!mysqli_query($con, $sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);








?>
</body>

</html>