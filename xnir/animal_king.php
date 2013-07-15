<?php

// interfaces

// interface of herib
interface herbivorous{
    
    function eat_tree (); 
    function slip();
    function move();
    function hear();
    
    
}
// interface spredator
 interface predator{
    
    function eat_meat();
    function slip();
    function move();
    function hear();
    
 }



////  main class
class animal_kingdom{
    public function say(){
        
    }
    public function wight(){
        
    }
    
}


// clases of annimal groups
    
class mamalian extends animal_kingdom {
public function name ()  {
    
}     

}

class reptile extends animal_kingdom{
    
}
    
class birds extends animal_kingdom{
    function fly(){
        
    }
    
}


class fish extends animal_kingdom{
    function dive(){
        
    }
        
}   


// special animals



?>