
<html>

<body>


<form action="tex_format.php" method="post" name="str" >

<input type="text" name="str" id="nmn" />          

<input type="submit" name="enter" value="Enter" />


</form>









<?php

class string_formatter extends format_rule{

    
  public function formatt (){



    }
    
      
    
  
  
  public function set_string(){
   
    $str=$_POST['str'];
    echo $str;
    
  }
   
   public function get_string(){
    
    
    
    
   }


    
}

$ob=new string_formatter();


$ob->formatt();








class format_rule{
    
var $source="";
var $target="";
var $number="";
var $pos=null;    


function add_rule($source, $target, $pos){


    
$str=$_POST['str'];




if ($pos==1){
    
    $pos=STR_PAD_RIGHT;
    
        
    }
    if($pos==-1){
        $pos=STR_PAD_LEFT;

}


$str_ffinal=str_pad($source, 4, $target, $pos);
echo $str_ffinal;

echo "<br>";


$ftarget=str_replace($source, $str_ffinal, $str);

echo $ftarget;
}

}

$rule=new format_rule();

$rule->add_rule("...", ",", -1);


?>


</body>

</html>
