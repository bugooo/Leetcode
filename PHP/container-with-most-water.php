<?php
class Solution {
    /**
     * @param Integer[] $height
     * @return Integer
     */
    //1.暴力 2.双指针
     function maxArea($height) {
         $len = count($height);
         $i = 0;
         $j = $len-1;
         $maxArea = 0;
         while($i < $j){
             $area = ($j-$i)*min($height[$i],$height[$j]);
             $maxArea = max($maxArea,$area);
             if($height[$i]<$height[$j]){
                 $i++;
             }else{
                 $j--;
             }
         }
         return $maxArea;
     }

//    function maxArea($height) {
//        $maxArea = 0;
//        $len = count($height);
//        for($i=0;$i<$len-1;$i++){
//            for($j = $i+1;$j<$len;$j++){
//                $area = ($j-$i)*min($height[$i],$height[$j]);
//                $maxArea = max($maxArea,$area);
//            }
//        }
//        return $maxArea;
//    }
}