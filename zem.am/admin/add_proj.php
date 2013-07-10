<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="admincss/style_ad.css" type"text/css" />
<title>Add paroject</title>
</head>
<body>
<!-----------Header--------------->

    <div class="header">
     <?php include "../php/header.php"?>

    </div>

<!----------Soc------------>
<div class="soc">

<!----------FB----------->

      <div class="fb">
      <?php include "../php/fb.php"?>
      </div>

<!-----------------G+-------------->


<!--------tweeter---------------->
<div class="tweet">
<?php include "../php/tweet.php" ?>
</div>
</div>
<div class="cent">

<!-----------Buttons--------------->
        <div class="butts">
        <?php include "admin_cont.php"?>
        </div>

</div>





<!-----------Project name------------------------------->
<div>
<label for="pname"></label>
<form id="form1" name="pname" method="post" action="blocks/proj_insert.php">
  <label for="pname2">Project name<br />
  </label>
  <input type="text" name="pname" id="pname2" />
  <br />

<!-------------Project information----------------------->


 <label for="pdesc">project description  <br />
  </label>
  <textarea name="pdesc" cols="60" rows="15" id="pdesc"></textarea>
  <br />

<p>&nbsp;</p>
  <input type="submit" name="ent" id="ent" value="Enter" />
</form>
<p>&nbsp;</p>
</div>




</body>
</html>