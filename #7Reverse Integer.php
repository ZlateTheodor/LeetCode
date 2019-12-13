<?php 
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        
        
        $x = rtrim($x, 0);
        
        
        if($x < 0) {
           $x = "-" . strrev($x * -1);
        }elseif($x == 0){
            $x = 0;
        }
        else{
            $x = strrev($x);
        }
        
        
        if( $x >= -2147483647 && $x <= 2147483647){
            return $x;           
        }else {
            return 0;
        }
        
        
    }
}