<?php
class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        $len = strlen($s);
        if($len<=$numRows || $numRows<2){
            return $s;
        }
        $j = 0;
        $flag = -1;
        for($i=0;$i<$len;$i++){
            $arr[$j] .= $s[$i];
            if($j==0 || $j==$numRows-1){
                $flag=$flag==1?-1:1;
            }
            $j+=$flag;
        }
        $str=implode("",$arr);
        return $str;
    }
}