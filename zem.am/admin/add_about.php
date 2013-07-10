<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="admincss/style_ad.css" type"text/css" />
<title>Add about</title>
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

<!----------------Name ------------------------->
<div></div>
<form id="form1" name="aname" method="post" action="blocks/about_insert.php">
  <label for="nm">Name</label>
  <br />
  <input type="text" name="aname" id="nmn" />
  <br />
<p>&nbsp;</p>
<!----------------About descript------------------------>
  <label for="dc">Information<br />
  </label>
  <textarea name="adesc" cols="60" rows="10" id="adesc"></textarea>
  <br />
<p>&nbsp;</p>
<!--------------Submit--------------------->
  <input type="submit" name="et" id="ent" value="Enter" />
</form>
<p>&nbsp;</p>
</div>



</body>
</html>