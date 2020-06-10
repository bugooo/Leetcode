<?php
class Solution {

    /**
     * @param Integer $n
     * @return String
     */
    function countAndSay($n) {
        if($n == 1){
            return "1";
        }
        return $this->nextStr($this->countAndSay($n-1));
    }
    function nextStr($str){
        $len = strlen($str);
        $k = substr($str,0,1);
        $newstr='';
        $j = 1;
        for($i=1;$i<$len;$i++){
            $w = substr($str,$i,1);
            if($w==$k){
                $j ++;
            }else{
                $newstr .= $j.$k;
                $k = $w;
                $j = 1;
            }
        }
        $newstr .= $j.$k;
        return $newstr;
    }
}