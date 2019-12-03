<?php
class Solution {

    /**
     * @param Integer[] $A
     * @return Integer[]
     */
    function sortArrayByParity($A) {
        $len = count($A);
        $i = 0;
        $j= $len-1;
        while($i<$j){
            if($A[$i]%2!=0 && $A[$j]%2==0){
                $tmp = $A[$i];
                $A[$i]=$A[$j];
                $A[$j] = $tmp;
                $i++;
                $j--;
            }elseif($A[$i]%2==0){
                $i++;
            }elseif($A[$j]%2!=0){
                $j--;
            }
        }
        return $A;
    }
}