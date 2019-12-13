<?php 

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $singleNumber = '';
        $numbers = array_diff($nums, array_diff_assoc($nums, array_unique($nums)));
            
        foreach ($numbers as $number){
            $singleNumber = $number;
        }
        
        return $singleNumber;
    }
}