<?php
class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $len = strlen($needle);
        if($len == 0){
            return 0;
        }
        $i= 0;
        $haylen = strlen($haystack);
        while($i<$haylen){
            if(substr($haystack,$i,$len) == $needle){
                return $i;
            }
            if($haylen-$i < $len){
                return -1;
            }else{
                $i++;
            }
        }
        return -1;
    }
}