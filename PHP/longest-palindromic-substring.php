<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $len = strlen($s);
        if($len < 2){
            return $s;
        }
        $arr=[];
        $l=0;
        $r=0;
        for($i=1;$i<$len;$i++){
            for($j=0;$j<$i;$j++){
                $arr[$j][$i] = ($s[$j] == $s[$i] && ($i-$j<=2||$arr[$j+1][$i-1]));
                if(($i-$j > $r-$l) && $arr[$j][$i]){
                    $r = $i;
                    $l = $j;
                }
            }
        }
        return substr($s,$l,$r-$l+1);
    }
}