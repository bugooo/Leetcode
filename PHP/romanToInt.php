<?php
class Solution {

    /**罗马数字转整数
     * https://leetcode-cn.com/problems/roman-to-integer/submissions/
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $romanArr=['I'=>1,'V'=>5,'X'=>10,'IV'=>4,'IX'=>9,'L'=>50,'C'=>100,'XL'=>40,'XC'=>90,'D'=>500,'M'=>1000,'CD'=>400,'CM'=>900];
        $len = strlen($s);
        if($len < 2){
            return $romanArr[$s];
        }
        $i = 0;
        $num = 0;
        while($i < $len){
            $key = substr($s,$i,2);
            if(!array_key_exists($key,$romanArr)){
                $key = substr($s,$i,1);
                $i ++ ;
            }else{
                $i +=2;
            }
            $num += $romanArr[$key];
        }
        return $num;
    }
}