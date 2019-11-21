<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $len = count($nums);
        $j = 0;
        for($i=0;$i<$len;$i++){
            if($nums[$i] != $val){
                $nums[$j] = $nums[$i];
                $j++;
            }

        }
        return $j;
    }
}