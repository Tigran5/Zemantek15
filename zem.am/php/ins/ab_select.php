<?php 
class Abselect{
    
    
    
   public function sel(){

$host="localhost";
$username="root";
$password="";
$mysql_db="zemantek";
$mysql_tb="atext_ins";

mysql_connect("$host", "$username", "$password");
mysql_select_db("$mysql_db") or die("Couldn't select database.");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$result=mysql_query("SELECT * FROM $mysql_tb WHERE id_ab=12");



if (!$result) {
    echo "Could not successfully run query  from DB: " . mysql_error();
    exit;
}

if (mysql_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}
  

while ($row = mysql_fetch_assoc($result)) {
    
    echo $row["aname"];
    echo "<br>";
    echo $row["adesc"];
    
    }

}



}

$object=new Abselect;
Abselect::sel();

    
?>
