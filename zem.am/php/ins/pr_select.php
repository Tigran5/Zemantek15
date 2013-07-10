<?php 
class Prselect{
    
    
    
   public function selproj(){
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

$result=mysql_query("SELECT * FROM ptext_ins WHERE ins_id=18");



if (!$result) {
    echo "Could not successfully run query  from DB: " . mysql_error();
    exit;
}

if (mysql_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}

while ($row = mysql_fetch_assoc($result)) {
    echo $row["pname"];
    echo "<br>";
    echo $row["pdesc"];
    
}


}


}

$object=new Prselect;
Prselect::selproj();

    
?>
