<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $len = strlen($s);
        $start = 0;
        $end = 0;
        $max = 0;
        $arr = [];
        while($start<$len && $end<$len){
            $s1 = substr($s,$end,1);
            if(!array_key_exists($s1,$arr)){
                $arr[substr($s,$end,1)]=$end;
            }else{
                $start = max($start,$arr[$s1]+1);
                $arr[$s1] = $end;
            }
            $max = max($end-$start+1,$max);
            $end++;
        }
        return $max;
    }
}