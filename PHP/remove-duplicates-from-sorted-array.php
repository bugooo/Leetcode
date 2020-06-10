<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $len = count($nums);
        if($len < 2){
            return $len;
        }
        $i = 0;
        for($j=1;$j<$len;$j++){
            if($nums[$i]!=$nums[$j]){
                $i++;
                $nums[$i] = $nums[$j];
            }
        }
        return $i+1;
    }
}