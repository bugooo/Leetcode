<?php
class Solution {

    /**
     * 算出每一个元素向右移动后的位置，用新数组存起来
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        $len = count($nums);
        $arr=[];
        for($i=0;$i<$len;$i++){
            $newKey = ($i+$k)%$len;
            $arr[$newKey]=$nums[$i];
        }
        ksort($arr);
        $nums = $arr;
    }
}