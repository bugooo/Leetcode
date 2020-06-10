<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $len = count($nums);
        if($len < 2){
            return $nums;
        }
        $j=0;
        for($i=0;$i<$len;$i++){
            if($nums[$i]!=0){
                if($i>$j){
                    $nums[$j] = $nums[$i];
                    $nums[$i] = 0;
                }
                $j++;
            }
        }
        return $nums;
    }
}