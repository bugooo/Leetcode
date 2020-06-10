<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $len = strlen($s);
        if($len < 1){
            return -1;
        }
        $hash = [];
        $arr = [];

        for($i=0;$i<$len;$i++){
            $word = substr($s,$i,1);
            $hash[$word] ++;
            $arr[$word] = $i;
        }
        $sw = array_search(1,$hash);
        if($sw){
            return $arr[$sw];
        }
        return -1;
    }
}