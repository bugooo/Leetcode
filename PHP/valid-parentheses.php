<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $sLen = strlen($s);
        if($sLen == 0){
            return true;
        }
        if (($sLen % 2) != 0){
            return false;
        }
        $left = [")"=>"(","}"=>"{","]"=>"["];
        $leftArr = [];
        for($i=0;$i<$sLen;$i++){
            $tmp = substr($s,$i,1);
            if(in_array($tmp,$left)){
                array_push($leftArr,$tmp);
            }else{
                $rightTmp = array_pop($leftArr);
                if($left[$tmp] != $rightTmp){
                    return false;
                }
            }
        }
        return $leftArr ? false : true;
    }
}