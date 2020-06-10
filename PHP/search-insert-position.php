<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {

        $left = 0;
        $right = count($nums)-1;
        while($left <= $right){
            $mid = ceil(($right+$left)>>1);
            if($target == $nums[$mid]){
                return $mid;
            }
            if($target<$nums[$mid]){
                $right = $mid-1;
            }else{
                $left = $mid+1;
            }
        }
        return $left;
    }
}